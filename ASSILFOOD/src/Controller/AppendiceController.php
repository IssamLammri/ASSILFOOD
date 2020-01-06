<?php

namespace App\Controller;

use App\Entity\Appendice;
use App\Form\AppendiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/appendice")
 */
class AppendiceController extends AbstractController
{
    /**
     * @Route("/", name="appendice_index", methods={"GET"})
     */
    public function index(): Response
    {
        $appendices = $this->getDoctrine()
            ->getRepository(Appendice::class)
            ->findAll();

        return $this->render('appendice/index.html.twig', [
            'appendices' => $appendices,
        ]);
    }

    /**
     * @Route("/new", name="appendice_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $appendice = new Appendice();
        $form = $this->createForm(AppendiceType::class, $appendice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($appendice);
            $entityManager->flush();

            return $this->redirectToRoute('appendice_index');
        }

        return $this->render('appendice/new.html.twig', [
            'appendice' => $appendice,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAppendice}", name="appendice_show", methods={"GET"})
     */
    public function show(Appendice $appendice): Response
    {
        return $this->render('appendice/show.html.twig', [
            'appendice' => $appendice,
        ]);
    }

    /**
     * @Route("/{idAppendice}/edit", name="appendice_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Appendice $appendice): Response
    {
        $form = $this->createForm(AppendiceType::class, $appendice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appendice_index');
        }

        return $this->render('appendice/edit.html.twig', [
            'appendice' => $appendice,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAppendice}", name="appendice_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Appendice $appendice): Response
    {
        if ($this->isCsrfTokenValid('delete'.$appendice->getIdAppendice(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($appendice);
            $entityManager->flush();
        }

        return $this->redirectToRoute('appendice_index');
    }
}
