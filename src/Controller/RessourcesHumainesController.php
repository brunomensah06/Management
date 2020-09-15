<?php

namespace App\Controller;

use App\Entity\RessourcesHumaines;
use App\Form\RessourcesHumainesType;
use App\Repository\RessourcesHumainesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ressources")
 */
class RessourcesHumainesController extends AbstractController
{
    /**
     * @Route("/", name="ressources_humaines_index", methods={"GET"})
     */
    public function index(RessourcesHumainesRepository $ressourcesHumainesRepository): Response
    {
        return $this->render('ressources_humaines/index.html.twig', [
            'ressources_humaines' => $ressourcesHumainesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ressources_humaines_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ressourcesHumaine = new RessourcesHumaines();
        $form = $this->createForm(RessourcesHumainesType::class, $ressourcesHumaine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ressourcesHumaine);
            $entityManager->flush();

            return $this->redirectToRoute('ressources_humaines_index');
        }

        return $this->render('ressources_humaines/new.html.twig', [
            'ressources_humaine' => $ressourcesHumaine,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ressources_humaines_show", methods={"GET"})
     */
    public function show(RessourcesHumaines $ressourcesHumaine): Response
    {
        return $this->render('ressources_humaines/show.html.twig', [
            'ressources_humaine' => $ressourcesHumaine,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ressources_humaines_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RessourcesHumaines $ressourcesHumaine): Response
    {
        $form = $this->createForm(RessourcesHumainesType::class, $ressourcesHumaine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ressources_humaines_index');
        }

        return $this->render('ressources_humaines/edit.html.twig', [
            'ressources_humaine' => $ressourcesHumaine,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ressources_humaines_delete", methods={"DELETE"})
     */
    public function delete(Request $request, RessourcesHumaines $ressourcesHumaine): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ressourcesHumaine->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ressourcesHumaine);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ressources_humaines_index');
    }
}
