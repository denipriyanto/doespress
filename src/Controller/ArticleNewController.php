<?php

namespace App\Controller;

use App\Entity\ArticleForm;
use App\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArticleNewController extends AbstractController
{
    /**
     * @Route("/article/new", name="article_new")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(ArticleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            dd($form->getData());
        }
        return $this->render('article_new/index.html.twig', [
            'controller_name' => 'ArticleNewController',
            'form' => $form->createView(),
        ]);
    }
}
