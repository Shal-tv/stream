<?php

namespace App\Service;

use App\DTO\Spotify\AccessTokenDTO;
use App\DTO\Spotify\NowPlayingDTO;
use App\DTO\Spotify\RefreshTokenDTO;
use App\Model\AccessToken;
use App\Model\NowPlaying;
use App\Model\RefreshToken;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * Class SpotifyAPIService
 *
 * @package App\Service
 */
final class SpotifyAPIService
{

    /**
     * SpotifyAPIService Constructor.
     *
     * @param HttpClientInterface  $client
     * @param SerializerInterface  $serializer
     */
    public function __construct(
        private readonly HttpClientInterface $client,
        private readonly SerializerInterface $serializer
    ) {
    }

    /**
     * @param string  $redirectURI
     *
     * @return string
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function accessToken(string $redirectURI) : string
    {
        $accessTokenDTO = $this->accessTokenAPI($redirectURI);

        $accessToken = new AccessToken();

        $accessToken->setAccessToken($accessTokenDTO->getAccessToken());
        $accessToken->setRefreshToken($accessTokenDTO->getRefreshToken());

        return $this->serializer->serialize($accessToken, 'json');
    }

    /**
     * @param string  $redirectURI
     *
     * @return AccessTokenDTO
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function accessTokenAPI(string $redirectURI) : AccessTokenDTO
    {
        $response = $this->callAPI(
            'POST',
            'https://accounts.spotify.com/api/token',
            array(
                'Content-Type' => 'application/x-www-form-urlencoded'
            ),
            array(
                'grant_type' => 'authorization_code',
                'code' => $_ENV['SPOTIFY_CODE'],
                'redirect_uri' => $redirectURI,
                'client_id' => $_ENV['SPOTIFY_CLIENT_ID'],
                'client_secret' => $_ENV['SPOTIFY_SECRET_ID']
            )
        );

        return $this->serializer->deserialize($response->getContent(), AccessTokenDTO::class, 'json');
    }

    /**
     * @param string  $refreshToken
     *
     * @return string
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function refreshToken(string $refreshToken) : string
    {
        $refreshTokenDTO = $this->refreshTokenAPI($refreshToken);

        $refreshToken = new RefreshToken();

        $refreshToken->setAccessToken($refreshTokenDTO->getAccessToken());

        return $this->serializer->serialize($refreshToken, 'json');
    }

    /**
     * @param string  $refreshToken
     *
     * @return RefreshTokenDTO
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    private function refreshTokenAPI(string $refreshToken) : RefreshTokenDTO
    {
        $response = $this->callAPI(
            'POST',
            'https://accounts.spotify.com/api/token',
            array(
                'Content-Type' => 'application/x-www-form-urlencoded'
            ),
            array(
                'grant_type' => 'refresh_token',
                'refresh_token' => $refreshToken,
                'client_id' => $_ENV['SPOTIFY_CLIENT_ID'],
                'client_secret' => $_ENV['SPOTIFY_SECRET_ID']
            )
        );

        return $this->serializer->deserialize($response->getContent(), RefreshTokenDTO::class, 'json');
    }

    /**
     * @param string  $accessToken
     *
     * @return string
     *
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function nowPlaying(string $accessToken) : string
    {
        $nowPlayingDTO = $this->nowPlayingAPI($accessToken);

        $nowPlaying = new NowPlaying();

        if ($nowPlayingDTO !== null) {
            $artistsArray = array();

            foreach ($nowPlayingDTO->getItem()->getArtists() as $artistDTO) {
                $artistsArray[] = $artistDTO->getName();
            }

            $nowPlaying->setArtist(implode(', ', $artistsArray));
            $nowPlaying->setSong($nowPlayingDTO->getItem()->getName());
        }

        return $this->serializer->serialize($nowPlaying, 'json');
    }

    /**
     * @param string  $accessToken
     *
     * @return NowPlayingDTO|null
     *
     * @throws TransportExceptionInterface
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     */
    private function nowPlayingAPI(string $accessToken) : ?NowPlayingDTO
    {
        $response = $this->callAPI(
            'GET',
            'https://api.spotify.com/v1/me/player/currently-playing?market=FR',
            array(
                'Authorization: Bearer ' . $accessToken,
                'Accept: application/json'
            ),
            null
        );

        if ($response->getContent() === '') {
            return null;
        }

        return $this->serializer->deserialize($response->getContent(), NowPlayingDTO::class, 'json');
    }

    /**
     * @param string      $method
     * @param string      $url
     * @param array       $headers
     * @param array|null  $data
     *
     * @return ResponseInterface
     *
     * @throws TransportExceptionInterface
     */
    private function callAPI(string $method, string $url, array $headers, ?array $data) : ResponseInterface
    {
        return $this->client->request(
            $method,
            $url,
            array(
                'headers' => $headers,
                'body' => $data
            )
        );
    }

}
