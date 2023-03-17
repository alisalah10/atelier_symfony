<?php
namespace App\Controller;

use SebastianBergmann\CodeCoverage\Report\Html\Renderer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{
    #[Route('/welcome')]
    public function hello()
    {
        var_dump("hello");
        die();
    }
    #[Route('/show')]
    public function show()
    {
        $var ="ALI";
        return new Response("<h1>ça fonctionne $var</h1>");
    }

    #[Route('/afficher')]
    public function afficher()
    {
        
        return $this->render('test/afficher.html.twig');
    }
}