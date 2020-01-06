<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }
}