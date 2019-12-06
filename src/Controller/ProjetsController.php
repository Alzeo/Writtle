<?php

namespace App\Controller;

use App\Entity\Chapitre;
use App\Entity\Highconcept;
use App\Entity\Personnages;
use App\Entity\Projets;
use App\Entity\User;
use App\Form\ProjetsType;
use App\Repository\HighconceptRepository;
use App\Repository\ProjetsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProjetsController extends AbstractController
{
    /**
     * @Route("/projets", name="projets_index", methods={"GET"})
     */
    public function index(ProjetsRepository $projetsRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();


        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );
        $totalProjet = count($projets);
        dump($totalProjet);

        return $this->render('projets/index.html.twig', [
            'projets' => $projets,
            'current_menu' => 'projet',
            'user' => $user,
            'totalProjet' => $totalProjet
        ]);
    }

    /**
     * @Route("projets/new", name="projets_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();


        $projets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );
        $projet = new Projets();
        $projet->setUser($user);
        $form = $this->createForm(ProjetsType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($projet);
            $entityManager->flush();

            return $this->redirectToRoute('projets_index');
        }

        return $this->render('projets/new.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
            'projets' => $projets,
            'current_menu' => 'projet',
            'user' => $user,
            'totalChapitres' => $totalChapitres,
            'totalPersonnages' => $totalPersonnages
        ]);
    }

    /**
     * @Route("projets/{id}", name="projets_show", methods={"GET"})
     */
    public function show(Projets $projets, HighconceptRepository $highconceptRepository): Response
    {


        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $allProjets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $highconcept = $this->getDoctrine()
            ->getRepository(Highconcept::class)
            ->findAllHq($projets->getId());

        $personnages = $this->getDoctrine()
            ->getRepository(Personnages::class)
            ->findByProjet($projets->getId());

        $chapitres = $this->getDoctrine()->getManager()
            ->getRepository(Chapitre::class)
            ->findByProjet($projets->getId());

        $totalChapitres = count($chapitres);

        $totalPersonnages = count($personnages);

        return $this->render('projets/show.html.twig', [
            'totalPersonnages' => $totalPersonnages,
            'projets' => $projets,
            'AllProjets' => $allProjets,
            'current_menu' => 'projet',
            'user' => $user,
            'HC' => $highconcept,
            'personnages' => $personnages,
            'chapitres' => $chapitres,
            'totalChapitres' => $totalChapitres
        ]);
    }

    /**
     * @Route("projets/{id}/edit", name="projets_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Projets $projet): Response
    {
        $form = $this->createForm(ProjetsType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('projets_index');
        }

        return $this->render('projets/edit.html.twig', [
            'projet' => $projet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("projets/{id}", name="projets_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Projets $projet): Response
    {
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('projets_index');
    }
}
