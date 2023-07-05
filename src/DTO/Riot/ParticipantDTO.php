<?php

namespace App\DTO\Riot;

/**
 * Class ParticipantDTO
 *
 * @package App\DTO\Riot
 */
final class ParticipantDTO
{

    /**
     * @var CompanionDTO
     *
     * Participant's companion.
     */
    private CompanionDTO $companion;

    /**
     * @var int
     *
     * Gold left after participant was eliminated.
     */
    private int $goldLeft;

    /**
     * @var int
     *
     * The round the participant was eliminated in.
     * Note: If the player was eliminated in stage 2-1 their last_round would be 5.
     */
    private int $lastRound;

    /**
     * @var int
     *
     * Participant Little Legend level. Note: This is not the number of active units.
     */
    private int $level;

    /**
     * @var int
     *
     * Participant placement upon elimination.
     */
    private int $placement;

    /**
     * @var int
     *
     * Number of players the participant eliminated.
     */
    private int $playersEliminated;

    /**
     * @var string
     */
    private string $puuid;

    /**
     * @var float
     *
     * The number of seconds before the participant was eliminated.
     */
    private float $timeEliminated;

    /**
     * @var int
     *
     * Damage the participant dealt to other players.
     */
    private int $totalDamageToPlayers;

    /**
     * @var TraitDTO[]
     *
     * A complete list of traits for the participant's active units.
     */
    private array $traits;

    /**
     * @var UnitDTO[]
     *
     * A list of active units for the participant.
     */
    private array $units;

    /**
     * ParticipantDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return CompanionDTO
     */
    public function getCompanion() : CompanionDTO
    {
        return $this->companion;
    }

    /**
     * @param CompanionDTO  $companion
     */
    public function setCompanion(CompanionDTO $companion) : void
    {
        $this->companion = $companion;
    }

    /**
     * @return int
     */
    public function getGoldLeft() : int
    {
        return $this->goldLeft;
    }

    /**
     * @param int  $goldLeft
     */
    public function setGoldLeft(int $goldLeft) : void
    {
        $this->goldLeft = $goldLeft;
    }

    /**
     * @return int
     */
    public function getLastRound() : int
    {
        return $this->lastRound;
    }

    /**
     * @param int  $lastRound
     */
    public function setLastRound(int $lastRound) : void
    {
        $this->lastRound = $lastRound;
    }

    /**
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }

    /**
     * @param int  $level
     */
    public function setLevel(int $level) : void
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getPlacement() : int
    {
        return $this->placement;
    }

    /**
     * @param int  $placement
     */
    public function setPlacement(int $placement) : void
    {
        $this->placement = $placement;
    }

    /**
     * @return int
     */
    public function getPlayersEliminated() : int
    {
        return $this->playersEliminated;
    }

    /**
     * @param int  $playersEliminated
     */
    public function setPlayersEliminated(int $playersEliminated) : void
    {
        $this->playersEliminated = $playersEliminated;
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
     * @return float
     */
    public function getTimeEliminated() : float
    {
        return $this->timeEliminated;
    }

    /**
     * @param float  $timeEliminated
     */
    public function setTimeEliminated(float $timeEliminated) : void
    {
        $this->timeEliminated = $timeEliminated;
    }

    /**
     * @return int
     */
    public function getTotalDamageToPlayers() : int
    {
        return $this->totalDamageToPlayers;
    }

    /**
     * @param int  $totalDamageToPlayers
     */
    public function setTotalDamageToPlayers(int $totalDamageToPlayers) : void
    {
        $this->totalDamageToPlayers = $totalDamageToPlayers;
    }

    /**
     * @return TraitDTO[]
     */
    public function getTraits() : array
    {
        return $this->traits;
    }

    /**
     * @param TraitDTO[]  $traits
     */
    public function setTraits(array $traits) : void
    {
        $this->traits = $traits;
    }

    /**
     * @param TraitDTO  $trait
     *
     * @return void
     */
    public function addTrait(TraitDTO $trait) : void
    {
        $this->traits[] = $trait;
    }

    /**
     * @return UnitDTO[]
     */
    public function getUnits() : array
    {
        return $this->units;
    }

    /**
     * @param UnitDTO[]  $units
     */
    public function setUnits(array $units) : void
    {
        $this->units = $units;
    }

    /**
     * @param UnitDTO  $unit
     *
     * @return void
     */
    public function addUnit(UnitDTO $unit) : void
    {
        $this->units[] = $unit;
    }

}
