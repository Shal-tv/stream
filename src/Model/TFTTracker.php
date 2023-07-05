<?php

namespace App\Model;

/**
 * Class TFTTracker
 *
 * @package App\Model
 */
final class TFTTracker
{

    /**
     * @var string
     */
    private string $name = '';

    /**
     * @var string
     */
    private string $rank = 'UNRANKED';

    /**
     * @var int
     */
    private int $lp = 0;

    /**
     * @var int
     */
    private int $totalWin = 0;

    /**
     * @var int
     */
    private int $totalLose = 0;

    /**
     * @var int
     */
    private int $win = 0;

    /**
     * @var int
     */
    private int $lose = 0;

    /**
     * @var float
     */
    private float $avg = 0;

    /**
     * @var int[]
     */
    private array $placements = array();

    //**

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
    public function getLp() : int
    {
        return $this->lp;
    }

    /**
     * @param int  $lp
     */
    public function setLp(int $lp) : void
    {
        $this->lp = $lp;
    }

    /**
     * @return int
     */
    public function getTotalWin() : int
    {
        return $this->totalWin;
    }

    /**
     * @param int  $totalWin
     */
    public function setTotalWin(int $totalWin) : void
    {
        $this->totalWin = $totalWin;
    }

    /**
     * @return int
     */
    public function getTotalLose() : int
    {
        return $this->totalLose;
    }

    /**
     * @param int  $totalLose
     */
    public function setTotalLose(int $totalLose) : void
    {
        $this->totalLose = $totalLose;
    }

    /**
     * @return int
     */
    public function getWin() : int
    {
        return $this->win;
    }

    /**
     * @param int  $win
     */
    public function setWin(int $win) : void
    {
        $this->win = $win;
    }

    /**
     * @return int
     */
    public function getLose() : int
    {
        return $this->lose;
    }

    /**
     * @param int  $lose
     */
    public function setLose(int $lose) : void
    {
        $this->lose = $lose;
    }

    /**
     * @return float
     */
    public function getAvg() : float
    {
        return $this->avg;
    }

    /**
     * @param float  $avg
     */
    public function setAvg(float $avg) : void
    {
        $this->avg = $avg;
    }

    /**
     * @return int[]
     */
    public function getPlacements() : array
    {
        return $this->placements;
    }

    /**
     * @param int[]  $placements
     */
    public function setPlacements(array $placements) : void
    {
        $this->placements = $placements;
    }

    /**
     * @param int  $placement
     */
    public function addPlacements(int $placement) : void
    {
        array_unshift($this->placements, $placement);
    }

}
