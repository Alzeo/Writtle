<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class BackendController extends AbstractController
{
    /**
     * @Route("/backend", name="dashboard")
     */
    public function index(UserInterface $user)
    {
        return $this->render('backend/index.html.twig', [
            'user' => $user,
            'current_menu' => 'panel'
        ]);
    }
}
