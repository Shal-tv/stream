<?php

namespace App\DTO\Spotify;

/**
 * Class ExternalUrlDTO
 *
 * @package App\DTO\Spotify
 */
final class ExternalUrlDTO
{

    /**
     * @var string
     */
    private string $spotify;

    /**
     * ExternalUrlDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getSpotify() : string
    {
        return $this->spotify;
    }

    /**
     * @param string  $spotify
     */
    public function setSpotify(string $spotify) : void
    {
        $this->spotify = $spotify;
    }

}
