<?php

namespace App\DTO\Riot;

/**
 * Class CompanionDTO
 *
 * @package App\DTO\Riot
 */
final class CompanionDTO
{

    /**
     * @var string
     */
    private string $contentID;

    /**
     * @var int
     */
    private int $skinID;

    /**
     * @var string
     */
    private string $species;

    /**
     * CompanionDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getContentID() : string
    {
        return $this->contentID;
    }

    /**
     * @param string  $contentID
     */
    public function setContentID(string $contentID) : void
    {
        $this->contentID = $contentID;
    }

    /**
     * @return int
     */
    public function getSkinID() : int
    {
        return $this->skinID;
    }

    /**
     * @param int  $skinID
     */
    public function setSkinID(int $skinID) : void
    {
        $this->skinID = $skinID;
    }

    /**
     * @return string
     */
    public function getSpecies() : string
    {
        return $this->species;
    }

    /**
     * @param string  $species
     */
    public function setSpecies(string $species) : void
    {
        $this->species = $species;
    }

}
