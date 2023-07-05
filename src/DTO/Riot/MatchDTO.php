<?php

namespace App\DTO\Riot;

/**
 * Class MatchDTO
 *
 * @package App\DTO\Riot
 */
final class MatchDTO
{

    /**
     * @var MetadataDTO
     *
     * Match metadata.
     */
    private MetadataDTO $metadata;

    /**
     * @var InfoDTO
     *
     * Match info.
     */
    private InfoDTO $info;

    /**
     * MatchDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return MetadataDTO
     */
    public function getMetadata() : MetadataDTO
    {
        return $this->metadata;
    }

    /**
     * @param MetadataDTO  $metadata
     */
    public function setMetadata(MetadataDTO $metadata) : void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return InfoDTO
     */
    public function getInfo() : InfoDTO
    {
        return $this->info;
    }

    /**
     * @param InfoDTO  $info
     */
    public function setInfo(InfoDTO $info) : void
    {
        $this->info = $info;
    }

}
