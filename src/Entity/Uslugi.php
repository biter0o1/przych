<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UslugiRepository")
 */
class Uslugi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nazwa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $opis;

    /**
     * @ORM\Column(type="integer")
     */
    private $koszt;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * @param mixed $nazwa
     */
    public function setNazwa($nazwa): void
    {
        $this->nazwa = $nazwa;
    }

    /**
     * @return mixed
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * @param mixed $opis
     */
    public function setOpis($opis): void
    {
        $this->opis = $opis;
    }

    /**
     * @return mixed
     */
    public function getKoszt()
    {
        return $this->koszt;
    }

    /**
     * @param mixed $koszt
     */
    public function setKoszt($koszt): void
    {
        $this->koszt = $koszt;
    }

    public function __toString()
    {
        return $this->nazwa;
    }
}