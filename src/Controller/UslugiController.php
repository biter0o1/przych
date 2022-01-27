<?php

namespace App\Controller;

use App\Entity\Uslugi;
use App\Form\UslugiType;
use App\Repository\UslugiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/uslugi")
 */
class UslugiController extends AbstractController
{
    /**
     * @Route("/", name="uslugi_index", methods={"GET"})
     */
    public function index(UslugiRepository $uslugiRepository): Response
    {
        return $this->render('uslugi/index.html.twig', [
            'uslugis' => $uslugiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="uslugi_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $uslugi = new Uslugi();
        $form = $this->createForm(UslugiType::class, $uslugi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($uslugi);
            $entityManager->flush();

            return $this->redirectToRoute('uslugi_index');
        }

        return $this->render('uslugi/new.html.twig', [
            'uslugi' => $uslugi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="uslugi_show", methods={"GET"})
     */
    public function show(Uslugi $uslugi): Response
    {
        return $this->render('uslugi/show.html.twig', [
            'uslugi' => $uslugi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="uslugi_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Uslugi $uslugi): Response
    {
        $form = $this->createForm(UslugiType::class, $uslugi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('uslugi_index');
        }

        return $this->render('uslugi/edit.html.twig', [
            'uslugi' => $uslugi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="uslugi_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Uslugi $uslugi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$uslugi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($uslugi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('uslugi_index');
    }
}
