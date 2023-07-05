<?php

namespace App\DTO\Spotify;

/**
 * Class NowPlayingDTO
 *
 * @package App\DTO\Spotify
 */
final class NowPlayingDTO
{

    /**
     * @var ContextDTO
     */
    private ContextDTO $context;

    /**
     * @var float
     */
    private float $timestamp;

    /**
     * @var int
     */
    private int $progressMs;

    /**
     * @var bool
     */
    private bool $isPlaying;

    /**
     * @var string
     */
    private string $currentlyPlayingType;

    /**
     * @var ItemDTO
     */
    private ItemDTO $item;

    /**
     * NowPlayingDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return ContextDTO
     */
    public function getContext() : ContextDTO
    {
        return $this->context;
    }

    /**
     * @param ContextDTO  $context
     */
    public function setContext(ContextDTO $context) : void
    {
        $this->context = $context;
    }

    /**
     * @return float
     */
    public function getTimestamp() : float
    {
        return $this->timestamp;
    }

    /**
     * @param float  $timestamp
     */
    public function setTimestamp(float $timestamp) : void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return int
     */
    public function getProgressMs() : int
    {
        return $this->progressMs;
    }

    /**
     * @param int  $progressMs
     */
    public function setProgressMs(int $progressMs) : void
    {
        $this->progressMs = $progressMs;
    }

    /**
     * @return bool
     */
    public function isIsPlaying() : bool
    {
        return $this->isPlaying;
    }

    /**
     * @param bool  $isPlaying
     */
    public function setIsPlaying(bool $isPlaying) : void
    {
        $this->isPlaying = $isPlaying;
    }

    /**
     * @return string
     */
    public function getCurrentlyPlayingType() : string
    {
        return $this->currentlyPlayingType;
    }

    /**
     * @param string  $currentlyPlayingType
     */
    public function setCurrentlyPlayingType(string $currentlyPlayingType) : void
    {
        $this->currentlyPlayingType = $currentlyPlayingType;
    }

    /**
     * @return ItemDTO
     */
    public function getItem() : ItemDTO
    {
        return $this->item;
    }

    /**
     * @param ItemDTO  $item
     */
    public function setItem(ItemDTO $item) : void
    {
        $this->item = $item;
    }

}
