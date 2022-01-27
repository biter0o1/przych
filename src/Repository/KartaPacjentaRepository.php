<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method KartaPacjenta|null find($id, $lockMode = null, $lockVersion = null)
 * @method KartaPacjenta|null findOneBy(array $criteria, array $orderBy = null)
 * @method KartaPacjenta[]    findAll()
 * @method KartaPacjenta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KartaPacjentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KartaPacjenta::class);
    }
}
