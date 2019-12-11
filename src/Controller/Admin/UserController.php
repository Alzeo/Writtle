<?php

namespace App\Controller\Admin;

use App\Entity\Projets;
use App\Entity\User;
use App\Form\RegisterType;
use App\Form\UserType;
use App\Repository\ProjetsRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{
    /**
     * @Route("admin/profil", name="profil_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository, UserInterface $user): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );
        $totalProjet = count($projets);

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'user', $user,
            'projets' =>$projets,
            'current_menu' => 'dashboard'
        ]);
    }

    /**
     * @Route("admin/profil/{id}", name="profil_show", methods={"GET"})
     */
    public function show(UserInterface $user, ProjetsRepository $projetsRepository): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();


        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user]
            );

        $totalProjet = count($projets);

        return $this->render('user/show.html.twig', [
            'projets' => $projets,
            'current_menu' => 'dashboard',
            'user' => $user,
            'totalProjet' => $totalProjet
        ]);
    }

    /**
     * @Route("admin/profil/{id}/edit", name="profil_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('profil');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/profil/{id}", name="profil_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('profil');
    }
}
