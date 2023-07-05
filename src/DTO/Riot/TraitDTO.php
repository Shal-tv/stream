<?php

namespace App\DTO\Riot;

/**
 * Class TraitDTO
 *
 * @package App\DTO\Riot
 */
final class TraitDTO
{

    /**
     * @var string
     *
     * Trait name.
     */
    private string $name;

    /**
     * @var int
     *
     * Number of units with this trait.
     */
    private int $numUnits;

    /**
     * @var int
     *
     * Current style for this trait. (0 = No style, 1 = Bronze, 2 = Silver, 3 = Gold, 4 = Chromatic)
     */
    private int $style;

    /**
     * @var int
     *
     * Current active tier for the trait.
     */
    private int $tierCurrent;

    /**
     * @var int
     *
     * Total tiers for the trait.
     */
    private int $tierTotal;

    /**
     * TraitDTO Constructor.
     */
    public function __construct()
    {
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
     * @return int
     */
    public function getNumUnits() : int
    {
        return $this->numUnits;
    }

    /**
     * @param int  $numUnits
     */
    public function setNumUnits(int $numUnits) : void
    {
        $this->numUnits = $numUnits;
    }

    /**
     * @return int
     */
    public function getStyle() : int
    {
        return $this->style;
    }

    /**
     * @param int  $style
     */
    public function setStyle(int $style) : void
    {
        $this->style = $style;
    }

    /**
     * @return int
     */
    public function getTierCurrent() : int
    {
        return $this->tierCurrent;
    }

    /**
     * @param int  $tierCurrent
     */
    public function setTierCurrent(int $tierCurrent) : void
    {
        $this->tierCurrent = $tierCurrent;
    }

    /**
     * @return int
     */
    public function getTierTotal() : int
    {
        return $this->tierTotal;
    }

    /**
     * @param int  $tierTotal
     */
    public function setTierTotal(int $tierTotal) : void
    {
        $this->tierTotal = $tierTotal;
    }

}
