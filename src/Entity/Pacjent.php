<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PacjentRepository")
 */
class Pacjent
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
     * @ORM\Column(type="string", length=255)
     */
    private $numerTelefonu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresZamieszkania;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $pesel;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function getNumerTelefonu()
    {
        return $this->numerTelefonu;
    }

    /**
     * @param mixed $numerTelefonu
     */
    public function setNumerTelefonu($numerTelefonu): void
    {
        $this->numerTelefonu = $numerTelefonu;
    }

    /**
     * @return mixed
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * @param mixed $adresZamieszkania
     */
    public function setAdresZamieszkania($adresZamieszkania): void
    {
        $this->adresZamieszkania = $adresZamieszkania;
    }

    /**
     * @return mixed
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * @param mixed $pesel
     */
    public function setPesel($pesel): void
    {
        $this->pesel = $pesel;
    }
}