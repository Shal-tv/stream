<?php

namespace App\DTO\Riot;

/**
 * Class MetadataDTO
 *
 * @package App\DTO\RiotDTO
 */
final class MetadataDTO
{

    /**
     * @var string
     *
     * Match data version.
     */
    private string $dataVersion;

    /**
     * @var string
     *
     * Match id.
     */
    private string $matchId;

    /** @var string[]
     *
     * A list of participant PUUIDs.
     */
    private array $participants;

    /**
     * MetadataDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getDataVersion() : string
    {
        return $this->dataVersion;
    }

    /**
     * @param string  $dataVersion
     */
    public function setDataVersion(string $dataVersion) : void
    {
        $this->dataVersion = $dataVersion;
    }

    /**
     * @return string
     */
    public function getMatchId() : string
    {
        return $this->matchId;
    }

    /**
     * @param string  $matchId
     */
    public function setMatchId(string $matchId) : void
    {
        $this->matchId = $matchId;
    }

    /**
     * @return string[]
     */
    public function getParticipants() : array
    {
        return $this->participants;
    }

    /**
     * @param string[]  $participants
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

}
