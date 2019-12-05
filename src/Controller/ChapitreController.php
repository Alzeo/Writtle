<?php

namespace App\Controller;

use App\Entity\Chapitre;
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
     * @Route("projets/{idProjet}/chapitres/", name="chapitre_index", methods={"GET"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function index(ChapitreRepository $chapitreRepository, Projets $projets) : Response
    {
        $idProjet = $projets->getId();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        return $this->render('chapitre/index.html.twig', [
            'chapitres' => $chapitreRepository->findByProjet($projets->getId()),
            'projets' => $projets,
            'user' => $user,
            'current_menu' => 'chapitres',
            'idProjet' => $idProjet,
        ]);
    }

    /**
     * @Route("projets/{idProjet}/chapitre/new", name="chapitre_new", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function new(Request $request, Projets $projets): Response
    {
        $idProjet = $projets->getId();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

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
            'current_menu' => 'chapitres'
        ]);
    }

    /**
     * @Route("projets/{idProjet}/chapitre/{id}", name="chapitre_show", methods={"GET"})
     */
    public function show(Chapitre $chapitre, Projets $projets): Response
    {
        return $this->render('chapitre/show.html.twig', [
            'chapitre' => $chapitre,
            'projets' => $projets
        ]);
    }

    /**
     * @Route("projets/{idProjet}/chapitre/{id}/edit", name="chapitre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Chapitre $chapitre, Projets $projets): Response
    {
        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapitre_index');
        }

        return $this->render('chapitre/edit.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form->createView(),
            'projets' => $projets
        ]);
    }

    /**
     * @Route("projets/{idProjet}/chapitre/{id}", name="chapitre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Chapitre $chapitre, Projets $projets): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chapitre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chapitre_index');
    }
}
