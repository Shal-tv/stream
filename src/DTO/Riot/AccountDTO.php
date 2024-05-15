<?php

namespace App\DTO\Riot;

/**
 * Class AccountDTO
 *
 * @package App\DTO\Riot
 */
final class AccountDTO
{

    /**
     * @var string
     *
     * Encrypted PUUID. Exact length of 78 characters.
     */
    private string $puuid;

    /**
     * @var string
     *
     * Game name.
     */
    private string $gameName;

    /**
     * @var string
     *
     * Tag line.
     */
    private string $tagLine;

    /**
     * AccountDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getPuuid() : string
    {
        return $this->puuid;
    }

    /**
     * @param string  $puuid
     */
    public function setPuuid(string $puuid) : void
    {
        $this->puuid = $puuid;
    }

    /**
     * @return string
     */
    public function getGameName() : string
    {
        return $this->gameName;
    }

    /**
     * @param string  $gameName
     */
    public function setGameName(string $gameName) : void
    {
        $this->gameName = $gameName;
    }

    /**
     * @return string
     */
    public function getTagLine() : string
    {
        return $this->tagLine;
    }

    /**
     * @param string  $tagLine
     */
    public function setTagLine(string $tagLine) : void
    {
        $this->tagLine = $tagLine;
    }

}
