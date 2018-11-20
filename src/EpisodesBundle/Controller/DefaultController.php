<?php

namespace EpisodesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $service = $this->get('episodes.call_api');
        $resources = $service->getAPI()->resources;
        return $this->render('EpisodesBundle:default:index.html.twig',['resources' => $resources]);
    }

    /**
     * @Route("/episode/{id}", name="episode")
     * @param $id
     * @return Response
     */
    public function episodeAction($id)
    {
        $service = $this->get('episodes.call_api');
        $episode = $service->getEpisode($id);
        return $this->render('EpisodesBundle:default:episode.html.twig',['episode' => $episode]);
    }
}
