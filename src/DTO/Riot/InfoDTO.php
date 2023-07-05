<?php

namespace App\DTO\Riot;

/**
 * Class InfoDTO
 *
 * @package App\DTO\Riot
 */
final class InfoDTO
{

    /**
     * @var float
     *
     * Unix timestamp.
     */
    private float $gameDatetime;

    /**
     * @var float
     *
     * Game length in seconds.
     */
    private float $gameLength;

    /**
     * @var string|null
     *
     * Game variation key. Game variations documented in TFT static data.
     */
    private ?string $gameVariation = null;

    /**
     * @var string
     *
     * Game client version.
     */
    private string $gameVersion;

    /**
     * @var ParticipantDTO[]
     */
    private array $participants;

    /**
     * @var int
     *
     * Please refer to the League of Legends documentation.
     */
    private int $queueId;

    /**
     * @var int
     *
     * Teamfight Tactics set number.
     */
    private int $tftSetNumber;

    /**
     * InfoDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getGameDatetime() : float
    {
        return $this->gameDatetime;
    }

    /**
     * @param float  $gameDatetime
     */
    public function setGameDatetime(float $gameDatetime) : void
    {
        $this->gameDatetime = $gameDatetime;
    }

    /**
     * @return float
     */
    public function getGameLength() : float
    {
        return $this->gameLength;
    }

    /**
     * @param float  $gameLength
     */
    public function setGameLength(float $gameLength) : void
    {
        $this->gameLength = $gameLength;
    }

    /**
     * @return string|null
     */
    public function getGameVariation() : ?string
    {
        return $this->gameVariation;
    }

    /**
     * @param string|null  $gameVariation
     */
    public function setGameVariation(?string $gameVariation) : void
    {
        $this->gameVariation = $gameVariation;
    }

    /**
     * @return string
     */
    public function getGameVersion() : string
    {
        return $this->gameVersion;
    }

    /**
     * @param string  $gameVersion
     */
    public function setGameVersion(string $gameVersion) : void
    {
        $this->gameVersion = $gameVersion;
    }

    /**
     * @return ParticipantDTO[]
     */
    public function getParticipants() : array
    {
        return $this->participants;
    }

    /**
     * @param ParticipantDTO[]  $participants
     */
    public function setParticipants(array $participants) : void
    {
        $this->participants = $participants;
    }

    /**
     * @param ParticipantDTO  $participant
     *
     * @return void
     */
    public function addParticipant(ParticipantDTO $participant) : void
    {
        $this->participants[] = $participant;
    }

    /**
     * @return int
     */
    public function getQueueId() : int
    {
        return $this->queueId;
    }

    /**
     * @param int  $queueId
     */
    public function setQueueId(int $queueId) : void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return int
     */
    public function getTftSetNumber() : int
    {
        return $this->tftSetNumber;
    }

    /**
     * @param int  $tftSetNumber
     */
    public function setTftSetNumber(int $tftSetNumber) : void
    {
        $this->tftSetNumber = $tftSetNumber;
    }

}
