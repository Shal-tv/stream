<?php

namespace App\Service;

use App\DTO\Riot\LeagueEntryDTO;
use App\DTO\Riot\MatchDTO;
use App\DTO\Riot\AccountDTO;
use App\DTO\Riot\SummonerDTO;
use App\Helper\TFTTrackerHelper;
use DateTime;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Class RiotAPIService
 *
 * @package App\Service
 */
final readonly class RiotAPIService
{

    /**
     * RiotAPIService Constructor.
     *
     * @param TFTTrackerHelper     $helper
     * @param HttpClientInterface  $client
     * @param SerializerInterface  $serializer
     */
    public function __construct(
        private TFTTrackerHelper $helper,
        private HttpClientInterface $client,
        private SerializerInterface $serializer
    ) {
    }

    /**
     * @param string  $summonerName
     * @param string  $summonerTag
     *
     * @return string
     *
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function tftTracker(string $summonerName, string $summonerTag) : string
    {
        $account = $this->accountAPI($summonerName, $summonerTag);

        $summoner = $this->summonerAPI($account->getPuuid());

        $leagues = $this->leagueAPI($summoner->getId());

        $soloLeague = $this->findSoloLeague($leagues);

        $tracker = $this->helper->createTracker($summonerName, $soloLeague);

        // Récupération des ID des 16 derniers matchs
        $matches = $this->matchesAPI($summoner->getPuuid(), 16);

        // Récupération des détails du premier match
        $match1 = $this->matchAPI($matches[0]);

        // Début du match
        $gametime = (new DateTime())->setTimestamp($match1->getInfo()->getGameDatetime() / 1000);

        // Les matchs sont triés du plus récent au plus ancien
        // On continue si le dernier match joué (1er de la liste) a démarré il y a moins de 3 heures
        if ($gametime->modify('+3 hour') > new DateTime()) {
            foreach ($matches as $i => $matchID) {
                foreach ($match1->getInfo()->getParticipants() as $participant) {
                    $this->helper->updatePlacement($tracker, $participant, $summoner);
                }

                // S'il y a un prochain match, on vérifie qu'il est valide à afficher
                if (count($matches) > $i + 1) {
                    $match2 = $this->matchAPI($matches[$i + 1]);

                    // Si le match n'est pas valide, on sort de la boucle
                    if (!$this->checkGameIsValid($match1, $match2) && count($matches)) {
                        break;
                    }

                    $match1 = $match2;
                }
            }
        }

        if (!empty($tracker->getPlacements())) {
            $tracker->setAvg(number_format(array_sum($tracker->getPlacements()) / count($tracker->getPlacements()), 2));
        }

        return $this->serializer->serialize($tracker, 'json');
    }

    /**
     * @param LeagueEntryDTO[]  $leagues
     *
     * @return LeagueEntryDTO|null
     */
    private function findSoloLeague(array $leagues) : ?LeagueEntryDTO
    {
        foreach ($leagues as $league) {
            if ($league->getQueueType() === 'RANKED_TFT') {
                return $league;
            }
        }

        return null;
    }

    /**
     * @param MatchDTO  $match1
     * @param MatchDTO  $match2
     *
     * @return bool
     */
    private function checkGameIsValid(MatchDTO $match1, MatchDTO $match2) : bool
    {
        $gametime1 = (new DateTime())->setTimestamp($match1->getInfo()->getGameDatetime() / 1000);
        $gametime2 = (new DateTime())->setTimestamp($match2->getInfo()->getGameDatetime() / 1000);

        return $gametime1->modify('-3 hour') < $gametime2;
    }

    /**
     * @param string  $summonerName
     * @param string  $summonerTag
     *
     * @return AccountDTO
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function accountAPI(string $summonerName, string $summonerTag) : AccountDTO
    {
        $response = $this->callAPI('https://europe.api.riotgames.com/riot/account/v1/accounts/by-riot-id/' . $summonerName . '/' . $summonerTag);

        return $this->serializer->deserialize($response->getContent(), AccountDTO::class, 'json');
    }

    /**
     * @param string  $puuid
     *
     * @return SummonerDTO
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function summonerAPI(string $puuid) : SummonerDTO
    {
        $response = $this->callAPI('https://euw1.api.riotgames.com/tft/summoner/v1/summoners/by-puuid/' . $puuid);

        return $this->serializer->deserialize($response->getContent(), SummonerDTO::class, 'json');
    }

    /**
     * @param string  $summonerID
     *
     * @return LeagueEntryDTO[]|null
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function leagueAPI(string $summonerID) : ?array
    {
        $response = $this->callAPI('https://euw1.api.riotgames.com/tft/league/v1/entries/by-summoner/' . $summonerID);

        if ($response->getContent() === '') {
            return null;
        }

        return $this->serializer->deserialize($response->getContent(), LeagueEntryDTO::class . '[]', 'json');
    }

    /**
     * @param string  $puuid
     * @param int     $count
     *
     * @return array
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     * @throws DecodingExceptionInterface
     */
    private function matchesAPI(string $puuid, int $count = 20) : array
    {
        $response = $this->callAPI(
            'https://europe.api.riotgames.com/tft/match/v1/matches/by-puuid/' .
            $puuid .
            '/ids?count=' .
            $count
        );

        return $response->toArray();
    }

    /**
     * @param string  $matchID
     *
     * @return MatchDTO
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function matchAPI(string $matchID) : MatchDTO
    {
        $response = $this->callAPI('https://europe.api.riotgames.com/tft/match/v1/matches/' . $matchID);

        return $this->serializer->deserialize($response->getContent(), MatchDTO::class, 'json');
    }

    /**
     * @param string  $url
     *
     * @return ResponseInterface
     *
     * @throws TransportExceptionInterface
     */
    private function callAPI(string $url) : ResponseInterface
    {
        return $this->client->request(
            'GET',
            $url,
            array(
                'headers' => array(
                    'X-Riot-Token' => $_ENV['RG_API_KEY'],
                    'Accept' => 'application/json'
                )
            )
        );
    }

}
