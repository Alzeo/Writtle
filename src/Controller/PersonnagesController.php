<?php

namespace App\Controller;

use App\Entity\Personnages;
use App\Entity\Projets;
use App\Form\PersonnagesType;
use App\Repository\PersonnagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;


class PersonnagesController extends AbstractController
{
    /**
     * @Route("projets/{idProjet}/personnages/", name="personnages_index", methods={"GET"})
     */
    public function index(PersonnagesRepository $personnagesRepository, Projets $projets): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();


        return $this->render('personnages/index.html.twig', [
            'personnages' => $personnagesRepository->findAll(),
            'user' => $user,
            'projets' => $projets,
            'current_menu' => 'personnages'
        ]);
    }

    /**
     * @Route("projet/{idProjet}/personnages/new", name="personnages_new", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function new(Request $request, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $personnage = new Personnages();
        $personnage->setProjet($projets);
        $form = $this->createForm(PersonnagesType::class, $personnage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personnage);
            $entityManager->flush();

            return $this->redirectToRoute('personnages_index');
        }

        return $this->render('personnages/new.html.twig', [
            'personnage' => $personnage,
            'form' => $form->createView(),
            'user' => $user,
            'projets' => $projets,
            'current_menu' => 'personnages'
        ]);
    }

    /**
     * @Route("profil/{idProjet}/personnages/{id}", name="personnages_show", methods={"GET"})
     */
    public function show(Personnages $personnage): Response
    {
        return $this->render('personnages/show.html.twig', [
            'personnage' => $personnage,
        ]);
    }

    /**
     * @Route("profil/{idProjet}/personnages/{id}/edit", name="personnages_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Personnages $personnage): Response
    {
        $form = $this->createForm(PersonnagesType::class, $personnage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personnages_index');
        }

        return $this->render('personnages/edit.html.twig', [
            'personnage' => $personnage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("profil/{idProjet}/personnages/{id}", name="personnages_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Personnages $personnage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$personnage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personnage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personnages_index');
    }
}
