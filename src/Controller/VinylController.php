<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class VinylController extends AbstractController
{
    /**
     * @Route("/path")
     */
    public function homepage() : Response
    {
        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'PB & Jams'
        ]);
    }

    /**
     * @Route("/browse/{slug}", name="vinyl_browse")
     */
    public function browse(string $slug = null): Response
    {
        $title = ucwords(str_replace('-', ' ', $slug));
        return new Response("Genre: " . $title);
    }
}
