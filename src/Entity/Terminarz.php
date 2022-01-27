<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TerminarzRepository")
 */
class Terminarz
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

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
    private $data;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

}