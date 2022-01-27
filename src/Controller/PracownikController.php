<?php

namespace App\Controller;

use App\Entity\Pracownik;
use App\Form\PracownikType;
use App\Repository\PracownikRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pracownik")
 */
class PracownikController extends AbstractController
{
    /**
     * @Route("/", name="pracownik_index", methods={"GET"})
     */
    public function index(PracownikRepository $pracownikRepository): Response
    {
        return $this->render('pracownik/index.html.twig', [
            'pracowniks' => $pracownikRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pracownik_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pracownik = new Pracownik();
        $form = $this->createForm(PracownikType::class, $pracownik);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pracownik);
            $entityManager->flush();

            return $this->redirectToRoute('pracownik_index');
        }

        return $this->render('pracownik/new.html.twig', [
            'pracownik' => $pracownik,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pracownik_show", methods={"GET"})
     */
    public function show(Pracownik $pracownik): Response
    {
        return $this->render('pracownik/show.html.twig', [
            'pracownik' => $pracownik,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pracownik_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pracownik $pracownik): Response
    {
        $form = $this->createForm(PracownikType::class, $pracownik);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pracownik_index');
        }

        return $this->render('pracownik/edit.html.twig', [
            'pracownik' => $pracownik,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pracownik_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pracownik $pracownik): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pracownik->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pracownik);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pracownik_index');
    }
}
