<?php

namespace App\DTO\Spotify;

/**
 * Class AccessTokenDTO
 *
 * @package App\DTO\Spotify
 */
final class AccessTokenDTO
{

    /**
     * @var string
     */
    private string $accessToken;

    /**
     * @var string
     */
    private string $tokenType;

    /**
     * @var int
     */
    private int $expiresIn;

    /**
     * @var string
     */
    private string $refreshToken;

    /**
     * @var string
     */
    private string $scope;

    /**
     * AccessTokenDTO Constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getAccessToken() : string
    {
        return $this->accessToken;
    }

    /**
     * @param string  $accessToken
     */
    public function setAccessToken(string $accessToken) : void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getTokenType() : string
    {
        return $this->tokenType;
    }

    /**
     * @param string  $tokenType
     */
    public function setTokenType(string $tokenType) : void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return int
     */
    public function getExpiresIn() : int
    {
        return $this->expiresIn;
    }

    /**
     * @param int  $expiresIn
     */
    public function setExpiresIn(int $expiresIn) : void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getRefreshToken() : string
    {
        return $this->refreshToken;
    }

    /**
     * @param string  $refreshToken
     */
    public function setRefreshToken(string $refreshToken) : void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return string
     */
    public function getScope() : string
    {
        return $this->scope;
    }

    /**
     * @param string  $scope
     */
    public function setScope(string $scope) : void
    {
        $this->scope = $scope;
    }

}
