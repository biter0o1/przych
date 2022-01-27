<?php

namespace App\Controller;

use App\Repository\UslugiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index()
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/oFirmie", name="oFirmie")
     */
    public function oFirmie()
    {
        return $this->render('index/oFirmie.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/zdjecia", name="zdjecia")
     */
    public function zdjecia()
    {
        return $this->render('index/zdjecia.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/uslugiICennik", name="uslugiICennik")
     */
    public function uslugiICennik(UslugiRepository $uslugiRepository)
    {
        return $this->render('index/uslugiICennik.html.twig', [
            'uslugis' => $uslugiRepository->findAll(),
        ]);
    }

    /**
     * @Route("/kontakt", name="kontakt")
     */
    public function kontakt()
    {
        return $this->render('index/kontakt.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/informacje", name="informacje")
     */
    public function informacje()
    {
        return $this->render('index/informacje.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
