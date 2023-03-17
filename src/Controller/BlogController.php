<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/list', name: 'app_blog_list')]
    public function list(): Response
    {
        return new Response("<h1>Liste des articles</h1>");
    }

    #[Route('/blog/show/{id<\d+>}', name: 'app_blog_list')]
    public function show($id ): Response
    {
        //recherche dans la base de données
        $name = 'Introduction à la base de données';
        return $this->render('blog/show.html.twig',[
            'a'=>$id,
            'b'=>$name
        ]);
    }

    #[Route('/blog/{id<\d+>}/{name?vide}', name: 'blog_details', defaults:['name'=>'vide'])]
    public function details($id, $name): Response
    {
        return $this->render('blog/details.html.twig', [
            'id'=>$id,
            'name'=>$name
        ]);
    }

    #[Route('/blog/{id<\d+>}/{name?vide}', name: 'blog_details2', defaults:['name'=>'vide'])]
    public function details2($id, $name): Response
    {
        return new Response(("larticle $name a l'identifiant $id"));
    }

    #[Route('/blog/test', name: 'blog_test',)]
    public function sompeMethod(): Response
    {
       /* $url=$this->generateUrl('blog_details2',['id'=>100, 'name'=>'symfony']);
        return$this->redirect($url);*/
        return $this->redirectToRoute('blog_details2',['id'=>100, 'name'=>'symfony']);
    }
}
