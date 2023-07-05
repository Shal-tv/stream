<?php

namespace App\DTO\Riot;

/**
 * Class LeagueEntryDTO
 *
 * @package App\DTO\Riot
 */
final class LeagueEntryDTO
{

    /**
     * @var string|null
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private ?string $leagueId = null;

    /**
     * @var string
     *
     * Player's encrypted summonerId.
     */
    private string $summonerId;

    /**
     * @var string
     */
    private string $summonerName;

    /**
     * @var string
     */
    private string $queueType;

    /**
     * @var string
     *
     * Only included for the RANKED_TFT_TURBO queueType. (Legal values: ORANGE, PURPLE, BLUE, GREEN, GRAY)
     */
    private string $ratedTier;

    /**
     * @var int
     *
     * Only included for the RANKED_TFT_TURBO queueType.
     */
    private int $ratedRating;

    /**
     * @var string
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private string $tier;

    /**
     * @var string
     *
     * A player's division within a tier. Not included for the RANKED_TFT_TURBO queueType.
     */
    private string $rank;

    /**
     * @var int
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private int $leaguePoints;

    /**
     * @var int
     *
     * First placement.
     */
    private int $wins;

    /**
     * @var int
     *
     * Second through eighth placement.
     */
    private int $losses;

    /**
     * @var bool
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private bool $hotStreak;

    /**
     * @var bool
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private bool $veteran;

    /**
     * @var bool
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private bool $freshBlood;

    /**
     * @var bool
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private bool $inactive;

    /**
     * @var MiniSeriesDTO[]
     *
     * Not included for the RANKED_TFT_TURBO queueType.
     */
    private array $miniSeries;

    /**
     * LeagueEntryDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getLeagueId() : ?string
    {
        return $this->leagueId;
    }

    /**
     * @param string|null  $leagueId
     */
    public function setLeagueId(?string $leagueId) : void
    {
        $this->leagueId = $leagueId;
    }

    /**
     * @return string
     */
    public function getSummonerId() : string
    {
        return $this->summonerId;
    }

    /**
     * @param string  $summonerId
     */
    public function setSummonerId(string $summonerId) : void
    {
        $this->summonerId = $summonerId;
    }

    /**
     * @return string
     */
    public function getSummonerName() : string
    {
        return $this->summonerName;
    }

    /**
     * @param string  $summonerName
     */
    public function setSummonerName(string $summonerName) : void
    {
        $this->summonerName = $summonerName;
    }

    /**
     * @return string
     */
    public function getQueueType() : string
    {
        return $this->queueType;
    }

    /**
     * @param string  $queueType
     */
    public function setQueueType(string $queueType) : void
    {
        $this->queueType = $queueType;
    }

    /**
     * @return string
     */
    public function getRatedTier() : string
    {
        return $this->ratedTier;
    }

    /**
     * @param string  $ratedTier
     */
    public function setRatedTier(string $ratedTier) : void
    {
        $this->ratedTier = $ratedTier;
    }

    /**
     * @return int
     */
    public function getRatedRating() : int
    {
        return $this->ratedRating;
    }

    /**
     * @param int  $ratedRating
     */
    public function setRatedRating(int $ratedRating) : void
    {
        $this->ratedRating = $ratedRating;
    }

    /**
     * @return string
     */
    public function getTier() : string
    {
        return $this->tier;
    }

    /**
     * @param string  $tier
     */
    public function setTier(string $tier) : void
    {
        $this->tier = $tier;
    }

    /**
     * @return string
     */
    public function getRank() : string
    {
        return $this->rank;
    }

    /**
     * @param string  $rank
     */
    public function setRank(string $rank) : void
    {
        $this->rank = $rank;
    }

    /**
     * @return int
     */
    public function getLeaguePoints() : int
    {
        return $this->leaguePoints;
    }

    /**
     * @param int  $leaguePoints
     */
    public function setLeaguePoints(int $leaguePoints) : void
    {
        $this->leaguePoints = $leaguePoints;
    }

    /**
     * @return int
     */
    public function getWins() : int
    {
        return $this->wins;
    }

    /**
     * @param int  $wins
     */
    public function setWins(int $wins) : void
    {
        $this->wins = $wins;
    }

    /**
     * @return int
     */
    public function getLosses() : int
    {
        return $this->losses;
    }

    /**
     * @param int  $losses
     */
    public function setLosses(int $losses) : void
    {
        $this->losses = $losses;
    }

    /**
     * @return bool
     */
    public function isHotStreak() : bool
    {
        return $this->hotStreak;
    }

    /**
     * @param bool  $hotStreak
     */
    public function setHotStreak(bool $hotStreak) : void
    {
        $this->hotStreak = $hotStreak;
    }

    /**
     * @return bool
     */
    public function isVeteran() : bool
    {
        return $this->veteran;
    }

    /**
     * @param bool  $veteran
     */
    public function setVeteran(bool $veteran) : void
    {
        $this->veteran = $veteran;
    }

    /**
     * @return bool
     */
    public function isFreshBlood() : bool
    {
        return $this->freshBlood;
    }

    /**
     * @param bool  $freshBlood
     */
    public function setFreshBlood(bool $freshBlood) : void
    {
        $this->freshBlood = $freshBlood;
    }

    /**
     * @return bool
     */
    public function isInactive() : bool
    {
        return $this->inactive;
    }

    /**
     * @param bool  $inactive
     */
    public function setInactive(bool $inactive) : void
    {
        $this->inactive = $inactive;
    }

    /**
     * @return MiniSeriesDTO[]
     */
    public function getMiniSeries() : array
    {
        return $this->miniSeries;
    }

    /**
     * @param MiniSeriesDTO[]  $miniSeries
     */
    public function setMiniSeries(array $miniSeries) : void
    {
        $this->miniSeries = $miniSeries;
    }

    /**
     * @param MiniSeriesDTO  $miniSeries
     *
     * @return void
     */
    public function addMiniSerie(MiniSeriesDTO $miniSeries) : void
    {
        $this->miniSeries[] = $miniSeries;
    }

}
