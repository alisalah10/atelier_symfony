<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/somme/{A<\d+>}/{B<\d+>}', name: 'app_somme')]
    public function somme($A,$B): Response
    {
        return $this->render('calcul/somme.html.twig', [
            'A' => $A,
            'B' => $B,
            'res' => $A + $B
            
        ]);
    }

    #[Route('/soustraction/{A<\d+>}/{B<\d+>}', name: 'app_soustraction')]
    public function soustraction($A,$B): Response
    {
        return $this->render('calcul/soustraction.html.twig', [
            'A' => $A,
            'B' => $B,
            'res' => $A - $B
            
        ]);
    }

    #[Route('/accueil/{A<\d+>}/{B<\d+>}', name: 'app_accueil')]
    public function accueil($A,$B): Response
    {
        return $this->render('calcul/accueil.html.twig', [
            'A' => $A,
            'B' => $B
            
        ]);
    }
}
