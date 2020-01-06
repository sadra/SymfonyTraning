<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("Hiiiiiii, I'm symfony!");
    }


    /**
     * @Route("/news/{slug}")
     */
    public function article($slug){
        $comments = [
            'first comment',
            'second comment',
            'third comment',
        ];

        dump($slug, $this);

        return $this->render('article/show.html.twig', [
           'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments
        ]);
    }
}