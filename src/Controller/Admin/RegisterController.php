<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController {

    /**
     * @Route("/register", name="register")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder){

        $register = new User();
        $register->setRoles(['ROLE_ADMIN']);
        $form = $this->createForm(RegisterType::class, $register);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $passwordEncoder->encodePassword($register, $register->getPassword());
            $register->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($register);
            $entityManager->flush();

            return $this->redirectToRoute('app_login', [
            ]);
        }
        return $this->render('register/register.html.twig', [
            'current_menu' => 'panel',
            'form' => $form->createView()
        ]);

    }
}
