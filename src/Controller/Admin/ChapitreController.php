<?php

namespace App\Controller\Admin;

use App\Entity\Chapitre;
use App\Entity\Personnages;
use App\Entity\Projets;
use App\Form\ChapitreType;
use App\Repository\ChapitreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;


class ChapitreController extends AbstractController
{
    /**
     * @Route("admin/projets/{idProjet}/chapitres/", name="chapitre_index", methods={"GET"})
     * @Entity("projets", expr="repository.find(idProjet)")
     * @param ChapitreRepository $chapitreRepository
     * @param Projets $projets
     * @return Response
     */
    public function index(ChapitreRepository $chapitreRepository, Projets $projets) : Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $allProjets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $chapitresProjet = $this->getDoctrine()
            ->getRepository(Chapitre::class)
            ->findBy(
                ['projet' => $allProjets ]
            );


        return $this->render('chapitre/index.html.twig', [
            'personnages' => $chapitresProjet,
            'user' => $user,
            'projet' => $projets,
            'projets' => $allProjets,
            'current_menu' => 'chapitres',
            'chapitres' =>$chapitresProjet

        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/chapitre/new", name="chapitre_new", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function new(Request $request, Projets $projets): Response
    {
        $idProjet = $projets->getId();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $allProjet = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $totalProjet = count($allProjet);

        $chapitre = new Chapitre();
        $chapitre->setProjet($projets);
        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chapitre);
            $entityManager->flush();

            return $this->redirectToRoute('chapitre_index', [
                'projets' => $projets,
                'user' => $user,
                'idProjet' => $idProjet,
            ]);
        }

        return $this->render('chapitre/new.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form->createView(),
            'projets' => $projets,
            'user' => $user,
            'current_menu' => 'chapitres',
            'allProjet' => $allProjet,
            'totalProjet' => $totalProjet,

        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/chapitre/{id}", name="chapitre_show", methods={"GET"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function show(Chapitre $chapitre, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $personnages = $chapitre->getPersonnages();

        $projetsByUsers = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );


        return $this->render('chapitre/show.html.twig', [
            'chapitre' => $chapitre,
            'projets' => $projetsByUsers,
            'projet' => $projets,
            'user' => $user,
            'current_menu' => 'chapitres',
            'personnages' => $personnages
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/chapitre/{id}/edit", name="chapitre_edit", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function edit(Request $request, Chapitre $chapitre, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $idProjet = $projets->getId();
        $idChapitre = $chapitre->getId();
        $projetsByUsers = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapitre_show', [
                'idProjet' => $idProjet,
                'id' => $idChapitre
            ]);
        }

        return $this->render('chapitre/edit.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form->createView(),
            'projet' => $projets,
            'projets' => $projetsByUsers,
            'user' => $user,
            'current_menu' => 'chapitres'
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/chapitre/{id}", name="chapitre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Chapitre $chapitre, Projets $projets): Response
    {
        $idProjet = $projets->getId();

        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chapitre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chapitre_index', [
            $idProjet = $projets->getId(),
        ]);
    }
}
