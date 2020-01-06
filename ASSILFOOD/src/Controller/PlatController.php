<?php

namespace App\Controller;

use App\Entity\Plat;
use App\Form\PlatType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/plat")
 */
class PlatController extends AbstractController
{
    /**
     * @Route("/", name="plat_index", methods={"GET"})
     */
    public function index(): Response
    {
        $plats = $this->getDoctrine()
            ->getRepository(Plat::class)
            ->findAll();

        return $this->render('plat/index.html.twig', [
            'plats' => $plats,
        ]);
    }

    /**
     * @Route("/new", name="plat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $plat = new Plat();
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($plat);
            $entityManager->flush();

            return $this->redirectToRoute('plat_index');
        }

        return $this->render('plat/new.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPlat}", name="plat_show", methods={"GET"})
     */
    public function show(Plat $plat): Response
    {
        return $this->render('plat/show.html.twig', [
            'plat' => $plat,
        ]);
    }

    /**
     * @Route("/{idPlat}/edit", name="plat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Plat $plat): Response
    {
        $form = $this->createForm(PlatType::class, $plat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('plat_index');
        }

        return $this->render('plat/edit.html.twig', [
            'plat' => $plat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPlat}", name="plat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Plat $plat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$plat->getIdPlat(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($plat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('plat_index');
    }
}
