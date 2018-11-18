<?php

namespace EpisodesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $service = $this->get('episodes.call_api');
        $resources = $service->getAPI()->resources;
        return $this->render('EpisodesBundle:default:index.html.twig',['resources' => $resources]);
    }
}
