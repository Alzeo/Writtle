<?php

namespace App\Controller\Admin;

use App\Entity\Personnages;
use App\Entity\Projets;
use App\Form\PersonnagesType;
use App\Repository\PersonnagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter ;


class PersonnagesController extends AbstractController
{
    /**
     * @Route("admin/projets/{idProjet}/personnages/", name="personnages_index", methods={"GET"})
     * @Entity("projet", expr="repository.find(idProjet)")
     * @param PersonnagesRepository $personnagesRepository
     * @param Projets $projet
     * @return Response
     */
    public function index(PersonnagesRepository $personnagesRepository, Projets $projet): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $personnagesUser = $this->getDoctrine()
            ->getRepository(Personnages::class)
            ->findBy(
                ['projet' => $projetsByUser ]
            );


        return $this->render('personnages/index.html.twig', [
            'personnages' => $personnagesUser,
            'user' => $user,
            'projet' => $projet,
            'projets' => $projetsByUser,
            'current_menu' => 'personnages',

        ]);
    }

    /**
     * @Route("admin/projet/{idProjet}/personnages/new", name="personnages_new", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function new(Request $request, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $allProjets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $idProjet = $projets->getId();

        $personnage = new Personnages();
        $personnage->setProjet($projets);
        $form = $this->createForm(PersonnagesType::class, $personnage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($personnage);
            $entityManager->flush();

            return $this->redirectToRoute('personnages_index', [

            'idProjet' => $idProjet
            ]);
        }

        return $this->render('personnages/new.html.twig', [
            'personnage' => $personnage,
            'form' => $form->createView(),
            'user' => $user,
            'projets' => $allProjets,
            'projet' => $projets,
            'current_menu' => 'personnages'
        ]);
    }

    /**
     * @Route("admin/projet/{idProjet}/personnages/{id}", name="personnages_show", methods={"GET"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function show(Personnages $personnage, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $allProjets = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        return $this->render('personnages/show.html.twig', [
            'personnage' => $personnage,
            'projets' => $allProjets,
            'projet' => $projets,
            'user' => $user,
            'current_menu' => 'personnages'
        ]);
    }

    /**
     * @Route("admin/projet/{idProjet}/personnages/{id}/edit", name="personnages_edit", methods={"GET","POST"})
     * @Entity("projets", expr="repository.find(idProjet)")
     */
    public function edit(Request $request, Personnages $personnage, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();

        $personnagesByUser = $this->getDoctrine()
            ->getRepository(Personnages::class)
            ->findByProjet($projets->getId());

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        $idProjet = $projets->getId();

        $form = $this->createForm(PersonnagesType::class, $personnage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personnages_index', [
                'idProjet' => $idProjet
            ]);
        }

        return $this->render('personnages/edit.html.twig', [
            'personnage' => $personnage,
            'form' => $form->createView(),
            'projet' => $projets,
            'projets' => $projetsByUser,
            'current_menu' => "personnages",
            'user' => $user,
            'personnages' => $personnagesByUser,
        ]);
    }

    /**
     * @Route("admin/projet/{idProjet}/personnages/{id}", name="personnages_delete", methods={"DELETE"}, requirements={"idProjet":"\d+"})
     * @Entity("projets", expr="repository.find(idProjet)")
     * @param Request $request
     * @param Personnages $personnage
     * @return Response
     */
    public function delete(Request $request, Personnages $personnage, Projets $projets): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $idProjet = $projets->getId();

        $projetsByUser = $this->getDoctrine()
            ->getRepository(Projets::class)
            ->findBy(
                ['user' => $user ]
            );

        if ($this->isCsrfTokenValid('delete'.$personnage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($personnage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('personnages_index', [
            'idProjet' => $idProjet
        ]);
    }
}
