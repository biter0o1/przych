<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlatnoscRepository")
 */
class Platnosc
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
     * @ORM\Column(type="string", length=255)
     */
    private $stan;

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
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * @param mixed $stan
     */
    public function setStan($stan): void
    {
        $this->stan = $stan;
    }

}