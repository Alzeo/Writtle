<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController {

    /**
     * @Route("/register", name="register")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, MailerInterface $mailer){

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
            $email = (new TemplatedEmail())
                ->from(new Address('aloha@thomascherel.com', 'Prism'))
                ->to('aloha@thomascherel.com')
                ->subject('Nouvel inscription sur le site !')
                ->htmlTemplate('emails/welcome.html.twig')
                ->context([
                    'user' => $register->getUsername(),
                    'mail' => $register->getEmail()
                ]);
            $mailer->send($email);
            $this->addFlash('success', "Vous êtes inscrit ! Vous pouvez maintenant vous connecter.");

            return $this->redirectToRoute('app_login', [
            ]);
        }
        return $this->render('register/register.html.twig', [
            'current_menu' => 'panel',
            'form' => $form->createView()
        ]);

    }
}
