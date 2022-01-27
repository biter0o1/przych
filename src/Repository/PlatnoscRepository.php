<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\Platnosc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Platnosc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Platnosc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Platnosc[]    findAll()
 * @method Platnosc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatnoscRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Platnosc::class);
    }


}
