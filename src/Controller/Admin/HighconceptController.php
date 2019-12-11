<?php

namespace App\Controller\Admin;

use App\Entity\Highconcept;
use App\Entity\Projets;
use App\Form\HighconceptType;
use App\Repository\HighconceptRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;


class HighconceptController extends AbstractController
{
    /**
     * @Route("admin/highconcept", name="highconcept_index", methods={"GET"})
     */
    public function index(HighconceptRepository $highconceptRepository): Response
    {
        return $this->render('highconcept/index.html.twig', [
            'highconcepts' => $highconceptRepository->findAll(),
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/highconcept/new", name="highconcept_new", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function new(Request $request, Projets $projets): Response
    {
        $idProjet = $projets->getId();

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();



        $Allprojets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $highconcept = new Highconcept();
        $highconcept->setProjet($projets);
        $highconcept->setUser($user);
        $form = $this->createForm(HighconceptType::class, $highconcept);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($highconcept);
            $entityManager->flush();

            return $this->redirectToRoute('projets_show', [
            'id' => $idProjet,]);
        }

        return $this->render('highconcept/new.html.twig', [
            'highconcept' => $highconcept,
            'form' => $form->createView(),
            'projets' => $Allprojets,
            'idProjet' => $idProjet,
            'user' => $user,
            'current_menu' => 'projet'
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/highconcept/{id}", name="highconcept_show", methods={"GET"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function show(Highconcept $highconcept, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        return $this->render('highconcept/show.html.twig', [
            'highconcept' => $highconcept,
            'projet' => $projets,
            'projets' => $projetsByUser,
            'user' => $user,
            'current_menu' => ''
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/highconcept/{id}/edit", name="highconcept_edit", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function edit(Request $request, Highconcept $highconcept, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $idProjet = $projets->getId();

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );


        $form = $this->createForm(HighconceptType::class, $highconcept);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('highconcept_show', [
                'idProjet' => $idProjet,
                'id' => $highconcept->getId(),
                'projet' => $projets,
                'projets' => $projetsByUser,
                'user' => $user,
                'current_menu' => 'projets'
            ]);
        }

        return $this->render('highconcept/edit.html.twig', [
            'highconcept' => $highconcept,
            'form' => $form->createView(),
            'projet' => $projets,
            'projets' => $projetsByUser,
            'user' => $user,
            'current_menu' => 'projets'
        ]);
    }

    /**
     * @Route("admin/projets/{idProjet}/highconcept/{id}", name="highconcept_delete", methods={"DELETE"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function delete(Request $request, Highconcept $highconcept, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $idProjet = $projets->getId();

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        if ($this->isCsrfTokenValid('delete'.$highconcept->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($highconcept);
            $entityManager->flush();
        }

        return $this->redirectToRoute('projets_show', [
            'id' => $idProjet,
            'projet' => $projets,
            'projets' => $projetsByUser,
            'user' => $user,
            'current_menu' => 'projets'
        ]);
    }
}
