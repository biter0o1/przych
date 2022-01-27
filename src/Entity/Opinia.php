<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpiniaRepository")
 */
class Opinia
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Pacjent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pacjent;

    /**
     * @ORM\Column(type="integer")
     */
    private $ocena;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tresc;

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
    public function getOpinia()
    {
        return $this->opinia;
    }

    /**
     * @param mixed $opinia
     */
    public function setOpinia($opinia): void
    {
        $this->opinia = $opinia;
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
    public function getOcena()
    {
        return $this->ocena;
    }

    /**
     * @param mixed $ocena
     */
    public function setOcena($ocena): void
    {
        $this->ocena = $ocena;
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