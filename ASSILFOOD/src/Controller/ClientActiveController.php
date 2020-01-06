<?php

namespace App\Controller;

use App\Entity\ClientActive;
use App\Form\ClientActiveType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/client/active")
 */
class ClientActiveController extends AbstractController
{
    /**
     * @Route("/", name="client_active_index", methods={"GET"})
     */
    public function index(): Response
    {
        $clientActives = $this->getDoctrine()
            ->getRepository(ClientActive::class)
            ->findAll();

        return $this->render('client_active/index.html.twig', [
            'client_actives' => $clientActives,
        ]);
    }

    /**
     * @Route("/new", name="client_active_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $clientActive = new ClientActive();
        $form = $this->createForm(ClientActiveType::class, $clientActive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clientActive);
            $entityManager->flush();

            return $this->redirectToRoute('client_active_index');
        }

        return $this->render('client_active/new.html.twig', [
            'client_active' => $clientActive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idClient}", name="client_active_show", methods={"GET"})
     */
    public function show(ClientActive $clientActive): Response
    {
        return $this->render('client_active/show.html.twig', [
            'client_active' => $clientActive,
        ]);
    }

    /**
     * @Route("/{idClient}/edit", name="client_active_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ClientActive $clientActive): Response
    {
        $form = $this->createForm(ClientActiveType::class, $clientActive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('client_active_index');
        }

        return $this->render('client_active/edit.html.twig', [
            'client_active' => $clientActive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idClient}", name="client_active_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClientActive $clientActive): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientActive->getIdClient(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clientActive);
            $entityManager->flush();
        }

        return $this->redirectToRoute('client_active_index');
    }
}
