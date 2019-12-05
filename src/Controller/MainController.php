<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(UserInterface $user)
    {

        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user,
            'projets' => $projets,
            'current_menu' => 'non'
        ]);
    }




    /**
     * @Route("/mano", name="mano")
     */
    public function mano(UserInterface $user)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('backend.html.twig', [
            'controller_name' => 'MainController',
            'user' => $user
        ]);
    }


}
