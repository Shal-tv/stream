<?php

namespace App\DTO\Spotify;

/**
 * Class ItemDTO
 *
 * @package App\DTO\Spotify
 */
final class ItemDTO
{

    /**
     * @var AlbumDTO
     */
    private AlbumDTO $album;

    /**
     * @var ArtistDTO[]
     */
    private array $artists;

    /**
     * @var string[]
     */
    private array $availableMarkets;

    /**
     * @var int
     */
    private int $discNumber;

    /**
     * @var int
     */
    private int $durationMs;

    /**
     * @var bool
     */
    private bool $explicit;

    /**
     * @var ExternalIdDTO[]
     */
    private array $externalIds;

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
     * @var int
     */
    private int $popularity;

    /**
     * @var string
     */
    private string $previewUrl;

    /**
     * @var int
     */
    private int $trackNumber;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $uri;

    /**
     * ItemDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return AlbumDTO
     */
    public function getAlbum() : AlbumDTO
    {
        return $this->album;
    }

    /**
     * @param AlbumDTO  $album
     */
    public function setAlbum(AlbumDTO $album) : void
    {
        $this->album = $album;
    }

    /**
     * @return ArtistDTO[]
     */
    public function getArtists() : array
    {
        return $this->artists;
    }

    /**
     * @param ArtistDTO[]  $artists
     */
    public function setArtists(array $artists) : void
    {
        $this->artists = $artists;
    }

    /**
     * @param ArtistDTO  $artist
     *
     * @return void
     */
    public function addArtist(ArtistDTO $artist) : void
    {
        $this->artists[] = $artist;
    }

    /**
     * @return string[]
     */
    public function getAvailableMarkets() : array
    {
        return $this->availableMarkets;
    }

    /**
     * @param string[]  $availableMarkets
     */
    public function setAvailableMarkets(array $availableMarkets) : void
    {
        $this->availableMarkets = $availableMarkets;
    }

    /**
     * @return int
     */
    public function getDiscNumber() : int
    {
        return $this->discNumber;
    }

    /**
     * @param int  $discNumber
     */
    public function setDiscNumber(int $discNumber) : void
    {
        $this->discNumber = $discNumber;
    }

    /**
     * @return int
     */
    public function getDurationMs() : int
    {
        return $this->durationMs;
    }

    /**
     * @param int  $durationMs
     */
    public function setDurationMs(int $durationMs) : void
    {
        $this->durationMs = $durationMs;
    }

    /**
     * @return bool
     */
    public function isExplicit() : bool
    {
        return $this->explicit;
    }

    /**
     * @param bool  $explicit
     */
    public function setExplicit(bool $explicit) : void
    {
        $this->explicit = $explicit;
    }

    /**
     * @return ExternalIdDTO[]
     */
    public function getExternalIds() : array
    {
        return $this->externalIds;
    }

    /**
     * @param array  $externalIds
     */
    public function setExternalIds(array $externalIds) : void
    {
        $this->externalIds = $externalIds;
    }

    /**
     * @param ExternalIdDTO  $externalId
     */
    public function addExternalId(ExternalIdDTO $externalId) : void
    {
        $this->externalIds[] = $externalId;
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
     * @return int
     */
    public function getPopularity() : int
    {
        return $this->popularity;
    }

    /**
     * @param int  $popularity
     */
    public function setPopularity(int $popularity) : void
    {
        $this->popularity = $popularity;
    }

    /**
     * @return string
     */
    public function getPreviewUrl() : string
    {
        return $this->previewUrl;
    }

    /**
     * @param string  $previewUrl
     */
    public function setPreviewUrl(string $previewUrl) : void
    {
        $this->previewUrl = $previewUrl;
    }

    /**
     * @return int
     */
    public function getTrackNumber() : int
    {
        return $this->trackNumber;
    }

    /**
     * @param int  $trackNumber
     */
    public function setTrackNumber(int $trackNumber) : void
    {
        $this->trackNumber = $trackNumber;
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
