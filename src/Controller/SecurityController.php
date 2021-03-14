<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils, Request $request): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $login_form = $this->createFormBuilder(null)
            ->add('login',TextType::class, array('label' => false, 'attr' => array('placeholder' => 'Nom d\'utilisateur')))
            ->add('password',PasswordType::class , array('label' => false, 'attr' => array('placeholder' => 'Mot de passe')))
            ->add('submit',SubmitType::class,array('label' => 'Se connecter'))
            ->getForm();
        $login_form->handleRequest($request);
        /*if($login_form->isSubmitted() && $login_form->isValid()) {
            return $this->render('admin/index.html.twig');
        }*/
        if ($this->getUser()) {
            return $this->redirectToRoute('admin_index');
        }
        return $this->render('security/login.html.twig', 
            array('last_username' => $lastUsername, 'error' => $error,
            'login_form'=> $login_form->createView()));
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
