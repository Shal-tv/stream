<?php

namespace App\DTO\Spotify;

/**
 * Class ContextDTO
 *
 * @package App\DTO\Spotify
 */
final class ContextDTO
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
    private string $type;

    /**
     * @var string
     */
    private string $uri;

    /**
     * ContextDTO Constructor.
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
