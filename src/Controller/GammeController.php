<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GammeController extends AbstractController
{
    #[Route('/gamme', name: 'app_gamme')]
    public function Lister(): Response
    {
        $tab=['ordinateur','vidéoprojecteur','Imprimante','accessoire'];
        return $this->render('gamme/index.html.twig', [
            'gamme' => $tab
                ]);
    }
}
