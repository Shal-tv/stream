<?php

namespace App\Controller;

use App\Service\SpotifyAPIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

/**
 * Class SpotifyAPIController
 *
 * @package App\Controller
 */
#[Route(path: '/spotify')]
class SpotifyAPIController extends AbstractController
{

    /**
     * SpotifyAPIController Constructor.
     *
     * @param SpotifyAPIService  $spotifyAPIService
     */
    public function __construct(private readonly SpotifyAPIService $spotifyAPIService)
    {
    }

    #[Route(path: '/authorize', name: 'authorize', methods: ['GET'])]
    public function authorizeAction() : Response
    {
        $redirectURI = $this->generateUrl('spotify-callback', array(), UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->redirect(
            'https://accounts.spotify.com/authorize?client_id=' .
            $_ENV['SPOTIFY_CLIENT_ID'] .
            '&response_type=code&redirect_uri=' .
            urlencode($redirectURI) .
            '&scope=user-read-currently-playing'
        );
    }

    #[Route(path: '/callback', name: 'spotify-callback', methods: ['GET'])]
    public function callbackAction(Request $request) : Response
    {
        return new JsonResponse(json_encode(array('code' => $request->get('code'))));
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route(path: '/access-token', name: 'spotify-access_token', methods: ['GET'])]
    public function accessTokenAction() : Response
    {
        return JsonResponse::fromJsonString(
            $this->spotifyAPIService->accessToken(
                $this->generateUrl('spotify-callback', array(), UrlGeneratorInterface::ABSOLUTE_URL)
            )
        );
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route(path: '/refresh-token', name: 'spotify-refresh_token', methods: ['POST'])]
    public function refreshTokenAction(Request $request) : Response
    {
        return JsonResponse::fromJsonString($this->spotifyAPIService->refreshToken($request->get('refresh_token')));
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route(path: '/now-playing', name: 'spotify-now_playing', methods: [
        'GET',
        'POST'
    ])]
    public function nowPlayingAction(Request $request) : Response
    {
        if ($request->getMethod() === 'GET') {
            return $this->render('spotify_now_playing.html.twig');
        }

        return JsonResponse::fromJsonString($this->spotifyAPIService->nowPlaying($request->get('access_token')));
    }

}
