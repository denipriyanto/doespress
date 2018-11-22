<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(LoginType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $username = $form->get('username')->getData();
            $password = $form->get('password')->getData();

            if( $username === 'username' && $password === 'password' ){
                return $this->redirectToRoute('home');
            } else {
                print_r('Password salah');
            }
            // dd($form->get('username')->getData());
        }

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'form' => $form->createView(),
        ]);
    }
}
