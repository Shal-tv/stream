<?php

namespace App\Model;

/**
 * Class NowPlaying
 *
 * @package App\Model
 */
final class NowPlaying
{

    /**
     * @var string|null
     */
    private ?string $artist = null;

    /**
     * @var string|null
     */
    private ?string $song = null;

    /**
     * NowPlaying Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string|null
     */
    public function getArtist() : ?string
    {
        return $this->artist;
    }

    /**
     * @param string|null  $artist
     */
    public function setArtist(?string $artist) : void
    {
        $this->artist = $artist;
    }

    /**
     * @return string|null
     */
    public function getSong() : ?string
    {
        return $this->song;
    }

    /**
     * @param string|null  $song
     */
    public function setSong(?string $song) : void
    {
        $this->song = $song;
    }

}
