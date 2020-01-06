<?php

namespace App\Controller;

use App\Entity\Reaps;
use App\Form\ReapsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reaps")
 */
class ReapsController extends AbstractController
{
    /**
     * @Route("/", name="reaps_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reaps = $this->getDoctrine()
            ->getRepository(Reaps::class)
            ->findAll();

        return $this->render('reaps/index.html.twig', [
            'reaps' => $reaps,
        ]);
    }

    /**
     * @Route("/new", name="reaps_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reap = new Reaps();
        $form = $this->createForm(ReapsType::class, $reap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reap);
            $entityManager->flush();

            return $this->redirectToRoute('reaps_index');
        }

        return $this->render('reaps/new.html.twig', [
            'reap' => $reap,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRepas}", name="reaps_show", methods={"GET"})
     */
    public function show(Reaps $reap): Response
    {
        return $this->render('reaps/show.html.twig', [
            'reap' => $reap,
        ]);
    }

    /**
     * @Route("/{idRepas}/edit", name="reaps_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reaps $reap): Response
    {
        $form = $this->createForm(ReapsType::class, $reap);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reaps_index');
        }

        return $this->render('reaps/edit.html.twig', [
            'reap' => $reap,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRepas}", name="reaps_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Reaps $reap): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reap->getIdRepas(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reap);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reaps_index');
    }
}
