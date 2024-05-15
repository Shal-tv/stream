<?php

namespace App\Helper;

use App\DTO\Riot\LeagueEntryDTO;
use App\DTO\Riot\ParticipantDTO;
use App\DTO\Riot\AccountDTO;
use App\DTO\Riot\SummonerDTO;
use App\Model\TFTTracker;

/**
 * Class TFTTrackerHelper
 *
 * @package App\Helper
 */
final class TFTTrackerHelper
{

    /**
     * @param string               $summonerName
     * @param LeagueEntryDTO|null  $league
     *
     * @return TFTTracker
     */
    public function createTracker(string $summonerName, ?LeagueEntryDTO $league) : TFTTracker
    {
        $tracker = new TFTTracker();

        $tracker->setName($summonerName);

        if ($league !== null && $league->getLeagueId()) {
            if ($league->getTier() === 'MASTER'
                || $league->getTier() === 'GRANDMASTER'
                || $league->getTier() === 'CHALLENGER'
            ) {
                $tracker->setRank($league->getTier());
            } else {
                $tracker->setRank($league->getTier() . ' ' . $league->getRank());
            }

            $tracker->setLp($league->getLeaguePoints());
            $tracker->setTotalWin($league->getWins());
            $tracker->setTotalLose($league->getLosses());
        }

        return $tracker;
    }

    /**
     * @param TFTTracker      $tracker
     * @param ParticipantDTO  $participant
     * @param SummonerDTO     $summoner
     *
     * @return void
     */
    public function updatePlacement(TFTTracker $tracker, ParticipantDTO $participant, SummonerDTO $summoner) : void
    {
        // On ne prend en compte que le participant correspondant au compte fourni
        if ($participant->getPuuid() === $summoner->getPuuid()) {
            if ($participant->getPlacement() > 4) {
                // BOTTOM 4
                $tracker->setLose($tracker->getLose() + 1);
            } else {
                // TOP 4
                $tracker->setWin($tracker->getWin() + 1);
            }

            $tracker->addPlacements($participant->getPlacement());
        }
    }

}
