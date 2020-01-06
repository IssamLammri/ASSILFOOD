<?php

namespace App\Controller;

use App\Entity\ClientPassive;
use App\Form\ClientPassiveType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/client/passive")
 */
class ClientPassiveController extends AbstractController
{
    /**
     * @Route("/", name="client_passive_index", methods={"GET"})
     */
    public function index(): Response
    {
        $clientPassives = $this->getDoctrine()
            ->getRepository(ClientPassive::class)
            ->findAll();

        return $this->render('client_passive/index.html.twig', [
            'client_passives' => $clientPassives,
        ]);
    }

    /**
     * @Route("/new", name="client_passive_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $clientPassive = new ClientPassive();
        $form = $this->createForm(ClientPassiveType::class, $clientPassive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($clientPassive);
            $entityManager->flush();

            return $this->redirectToRoute('client_passive_index');
        }

        return $this->render('client_passive/new.html.twig', [
            'client_passive' => $clientPassive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idClientPassive}", name="client_passive_show", methods={"GET"})
     */
    public function show(ClientPassive $clientPassive): Response
    {
        return $this->render('client_passive/show.html.twig', [
            'client_passive' => $clientPassive,
        ]);
    }

    /**
     * @Route("/{idClientPassive}/edit", name="client_passive_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ClientPassive $clientPassive): Response
    {
        $form = $this->createForm(ClientPassiveType::class, $clientPassive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('client_passive_index');
        }

        return $this->render('client_passive/edit.html.twig', [
            'client_passive' => $clientPassive,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idClientPassive}", name="client_passive_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ClientPassive $clientPassive): Response
    {
        if ($this->isCsrfTokenValid('delete'.$clientPassive->getIdClientPassive(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($clientPassive);
            $entityManager->flush();
        }

        return $this->redirectToRoute('client_passive_index');
    }
}
