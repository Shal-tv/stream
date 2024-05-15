<?php

namespace App\Controller;

use App\Service\RiotAPIService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

/**
 * Class RiotAPIController
 *
 * @package App\Controller
 */
#[Route(path: '/riot')]
class RiotAPIController extends AbstractController
{

    /**
     * RiotAPIController Constructor.
     *
     * @param RiotAPIService  $riotAPIService
     */
    public function __construct(private readonly RiotAPIService $riotAPIService)
    {
    }

    /**
     * @throws ExceptionInterface
     */
    #[Route(path: '/tft-tracker-api/{summonerName}/{summonerTag}', name: 'tft-tracker-api', methods: ['GET'])]
    public function tftTrackerAPIAction(string $summonerName, string $summonerTag) : Response
    {
        return JsonResponse::fromJsonString($this->riotAPIService->tftTracker($summonerName, $summonerTag));
    }

}
