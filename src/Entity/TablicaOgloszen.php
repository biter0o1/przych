<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TablicaOgloszenRepository")
 */
class TablicaOgloszen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pracownik")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pracownik;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tresc;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * @param mixed $tresc
     */
    public function setTresc($tresc): void
    {
        $this->tresc = $tresc;
    }

}