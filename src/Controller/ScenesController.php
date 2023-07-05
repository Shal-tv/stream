<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ScenesController
 *
 * @package App\Controller
 */
#[Route(path: '/scenes')]
class ScenesController extends AbstractController
{

    #[Route(path: '/stream-starting', name: 'stream-starting', methods: ['GET'])]
    public function streamStartingAction() : Response
    {
        return $this->render('stream_starting.html.twig');
    }

    #[Route(path: '/intermission', name: 'intermission', methods: ['GET'])]
    public function intermissionAction() : Response
    {
        return $this->render('intermission.html.twig');
    }

    #[Route(path: '/TFT/{summonerName}', name: 'scenes-TFT', methods: ['GET'])]
    public function TFTAction(string $summonerName) : Response
    {
        return $this->render('scenes/scene_TFT.html.twig', array('summonerName' => $summonerName));
    }

    #[Route(path: '/waiting-screen', name: 'waiting-screen', methods: ['GET'])]
    public function waitingScreenAction() : Response
    {
        return $this->render('waiting_screen.html.twig');
    }

    #[Route(path: '/stream-over', name: 'stream-over', methods: ['GET'])]
    public function streamOverAction() : Response
    {
        return $this->render('stream_over.html.twig');
    }

    #[Route(path: '/text/{text}', name: 'text', methods: ['GET'])]
    public function textAction(string $text) : Response
    {
        return $this->render('text.html.twig', array('text' => $text));
    }

}
