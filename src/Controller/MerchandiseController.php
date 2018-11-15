<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MerchandiseController extends AbstractController
{
    /**
     * @Route("/merchandise", name="merchandise")
     */
    public function index()
    {
        return $this->render('merchandise/index.html.twig', [
            'controller_name' => 'MerchandiseController',
        ]);
    }
}
