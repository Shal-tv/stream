<?php

namespace App\DTO\Riot;

/**
 * Class SummonerDTO
 *
 * @package App\DTO\Riot
 */
final class SummonerDTO
{

    /**
     * @var string
     *
     * Encrypted account ID. Max length 56 characters.
     */
    private string $accountId;

    /**
     * @var int
     *
     * ID of the summoner icon associated with the summoner.
     */
    private int $profileIconId;

    /**
     * @var float
     *
     * Date summoner was last modified specified as epoch milliseconds.
     * The following events will update this timestamp: summoner name change,
     * summoner level change, or profile icon change.
     */
    private float $revisionDate;

    /**
     * @var string
     *
     * Summoner name.
     */
    private string $name;

    /**
     * @var string
     *
     * Encrypted summoner ID. Max length 63 characters.
     */
    private string $id;

    /**
     * @var string
     *
     * Encrypted PUUID. Exact length of 78 characters.
     */
    private string $puuid;

    /**
     * @var int
     *
     * Summoner level associated with the summoner.
     */
    private int $summonerLevel;

    /**
     * SummonerDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAccountId() : string
    {
        return $this->accountId;
    }

    /**
     * @param string  $accountId
     */
    public function setAccountId(string $accountId) : void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getProfileIconId() : int
    {
        return $this->profileIconId;
    }

    /**
     * @param int  $profileIconId
     */
    public function setProfileIconId(int $profileIconId) : void
    {
        $this->profileIconId = $profileIconId;
    }

    /**
     * @return float
     */
    public function getRevisionDate() : float
    {
        return $this->revisionDate;
    }

    /**
     * @param float  $revisionDate
     */
    public function setRevisionDate(float $revisionDate) : void
    {
        $this->revisionDate = $revisionDate;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string  $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string  $id
     */
    public function setId(string $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPuuid() : string
    {
        return $this->puuid;
    }

    /**
     * @param string  $puuid
     */
    public function setPuuid(string $puuid) : void
    {
        $this->puuid = $puuid;
    }

    /**
     * @return int
     */
    public function getSummonerLevel() : int
    {
        return $this->summonerLevel;
    }

    /**
     * @param int  $summonerLevel
     */
    public function setSummonerLevel(int $summonerLevel) : void
    {
        $this->summonerLevel = $summonerLevel;
    }

}
