<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\Pacjent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pacjent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pacjent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pacjent[]    findAll()
 * @method Pacjent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PacjentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pacjent::class);
    }


}
