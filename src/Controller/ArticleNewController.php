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
        $article = new ArticleForm();
        $article->setTitle('Masukan title article');
        $article->setContent('Masukan content');
        $article->setTag('Masukan Tag disini');
        $article->setCategory('Masukan category disini');
        $article->setFeaturedImage('Pilih featured image');

        $defaultData = array('data_class' => null);

        $form = $this->createFormBuilder($defaultData)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class,[
                'attr' => ['class' => 'myclasstextarea'],
            ])
            ->add('tag', TextType::class)
            ->add('category', TextType::class)
            ->add('featuredImage', FileType::class)
            ->add('save', SubmitType::class, array('label' => 'Create article', 'attr' => ['class' => 'btn-sm btn-block btn-primary']))
            ->getForm();

        // $form = $this->createForm(ArticleType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }
        return $this->render('article_new/index.html.twig', [
            'controller_name' => 'ArticleNewController',
            'form' => $form->createView(),
        ]);
    }
}
