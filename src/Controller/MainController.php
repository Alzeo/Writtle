<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;



/**
    * Require ROLE_ADMIN for *every* controller method in this class.
    *
    * @IsGranted("ROLE_ADMIN")
*/
class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'current_menu' => 'non',
            'user' => $user,
            'projets' => $projets
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
