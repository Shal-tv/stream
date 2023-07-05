<?php

namespace App\DTO\Riot;

/**
 * Class MiniSeriesDTO
 *
 * @package App\DTO\Riot
 */
final class MiniSeriesDTO
{

    /**
     * @var int
     */
    private int $losses;

    /**
     * @var string
     */
    private string $progress;

    /**
     * @var int
     */
    private int $target;

    /**
     * @var int
     */
    private int $wins;

    /**
     * MiniSeriesDTO Constructor.
     */
    public function __construct()
    {
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
     * @return string
     */
    public function getProgress() : string
    {
        return $this->progress;
    }

    /**
     * @param string  $progress
     */
    public function setProgress(string $progress) : void
    {
        $this->progress = $progress;
    }

    /**
     * @return int
     */
    public function getTarget() : int
    {
        return $this->target;
    }

    /**
     * @param int  $target
     */
    public function setTarget(int $target) : void
    {
        $this->target = $target;
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

}
