<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleNewController extends AbstractController
{
    /**
     * @Route("/article/new", name="article_new")
     */
    public function index()
    {
        return $this->render('article_new/index.html.twig', [
            'controller_name' => 'ArticleNewController',
        ]);
    }
}
