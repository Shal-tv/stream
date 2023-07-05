<?php

namespace App\DTO\Spotify;

/**
 * Class ExternalIdDTO
 *
 * @package App\DTO\Spotify
 */
final class ExternalIdDTO
{

    /**
     * @var string
     */
    private string $isrc;

    /**
     * ExternalIdDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getIsrc() : string
    {
        return $this->isrc;
    }

    /**
     * @param string  $isrc
     */
    public function setIsrc(string $isrc) : void
    {
        $this->isrc = $isrc;
    }

}
