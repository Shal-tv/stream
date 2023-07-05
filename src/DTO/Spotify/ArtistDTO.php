<?php

namespace App\DTO\Spotify;

/**
 * Class ArtistDTO
 *
 * @package App\DTO\Spotify
 */
final class ArtistDTO
{

    /**
     * @var ExternalUrlDTO[]
     */
    private array $externalUrls;

    /**
     * @var string
     */
    private string $href;

    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $uri;

    /**
     * ArtistDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return ExternalUrlDTO[]
     */
    public function getExternalUrls() : array
    {
        return $this->externalUrls;
    }

    /**
     * @param array  $externalUrls
     */
    public function setExternalUrls(array $externalUrls) : void
    {
        $this->externalUrls = $externalUrls;
    }

    /**
     * @param ExternalUrlDTO  $externalUrl
     */
    public function addExternalUrl(ExternalUrlDTO $externalUrl) : void
    {
        $this->externalUrls[] = $externalUrl;
    }

    /**
     * @return string
     */
    public function getHref() : string
    {
        return $this->href;
    }

    /**
     * @param string  $href
     */
    public function setHref(string $href) : void
    {
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

    /**
     * @param string  $id
     */
    public function setId(string $id) : void
    {
        $this->id = $id;
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
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string  $type
     */
    public function setType(string $type) : void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getUri() : string
    {
        return $this->uri;
    }

    /**
     * @param string  $uri
     */
    public function setUri(string $uri) : void
    {
        $this->uri = $uri;
    }

}
