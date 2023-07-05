<?php

namespace App\Model;

/**
 * Class AccessToken
 *
 * @package App\Model
 */
final class AccessToken
{

    /**
     * @var string
     */
    private string $accessToken;

    /**
     * @var string
     */
    private string $refreshtoken;

    /**
     * AccessToken Constructor.
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
    public function getRefreshToken() : string
    {
        return $this->refreshtoken;
    }

    /**
     * @param string  $refreshtoken
     */
    public function setRefreshToken(string $refreshtoken) : void
    {
        $this->refreshtoken = $refreshtoken;
    }

}
