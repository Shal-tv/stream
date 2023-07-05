<?php

namespace App\Model;

/**
 * Class RefreshToken
 *
 * @package App\Model
 */
final class RefreshToken
{

    /**
     * @var string
     */
    private string $accessToken;

    /**
     * RefreshToken Constructor.
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

}
