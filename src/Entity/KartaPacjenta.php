<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KartaPacjentaRepository")
 */
class KartaPacjenta
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pacjent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pacjent;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Uslugi")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usluga;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pracownik")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pracownik;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $opis_uslugi;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPacjent()
    {
        return $this->pacjent;
    }

    /**
     * @param mixed $pacjent
     */
    public function setPacjent($pacjent): void
    {
        $this->pacjent = $pacjent;
    }

    /**
     * @return mixed
     */
    public function getUsluga()
    {
        return $this->usluga;
    }

    /**
     * @param mixed $usluga
     */
    public function setUsluga($usluga): void
    {
        $this->usluga = $usluga;
    }

    /**
     * @return mixed
     */
    public function getPracownik()
    {
        return $this->pracownik;
    }

    /**
     * @param mixed $pracownik
     */
    public function setPracownik($pracownik): void
    {
        $this->pracownik = $pracownik;
    }

    /**
     * @return mixed
     */
    public function getOpisUslugi()
    {
        return $this->opis_uslugi;
    }

    /**
     * @param mixed $opis_uslugi
     */
    public function setOpisUslugi($opis_uslugi): void
    {
        $this->opis_uslugi = $opis_uslugi;
    }


}