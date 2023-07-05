<?php

namespace App\DTO\Spotify;

/**
 * Class ImageDTO
 *
 * @package App\DTO\Spotify
 */
final class ImageDTO
{

    /**
     * @var int
     */
    private int $height;

    /**
     * @var string
     */
    private string $url;

    /**
     * @var int
     */
    private int $width;

    /**
     * ImageDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int  $height
     */
    public function setHeight(int $height) : void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }

    /**
     * @param string  $url
     */
    public function setUrl(string $url) : void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param int  $width
     */
    public function setWidth(int $width) : void
    {
        $this->width = $width;
    }

}
