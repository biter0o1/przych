<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PracownikRepository")
 */
class Pracownik
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
    private $nazwisko;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imie;

    /**
     * @ORM\Column(type="integer")
     */
    private $dyspozycyjnosc;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * @param mixed $nazwisko
     */
    public function setNazwisko($nazwisko): void
    {
        $this->nazwisko = $nazwisko;
    }

    /**
     * @return mixed
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * @param mixed $imie
     */
    public function setImie($imie): void
    {
        $this->imie = $imie;
    }

    /**
     * @return mixed
     */
    public function getDyspozycyjnosc()
    {
        return $this->dyspozycyjnosc;
    }

    /**
     * @param mixed $dyspozycyjnosc
     */
    public function setDyspozycyjnosc($dyspozycyjnosc): void
    {
        $this->dyspozycyjnosc = $dyspozycyjnosc;
    }

    public function __toString()
    {
        return $this->imie . " " . $this->nazwisko;
    }

}