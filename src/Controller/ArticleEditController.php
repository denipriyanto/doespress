<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleEditController extends AbstractController
{
    /**
     * @Route("/article/edit", name="article_edit")
     */
    public function index()
    {
        return $this->render('article_edit/index.html.twig', [
            'controller_name' => 'ArticleEditController',
        ]);
    }
}
