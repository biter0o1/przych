<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\Terminarz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Terminarz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Terminarz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Terminarz[]    findAll()
 * @method Terminarz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerminarzRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Terminarz::class);
    }


}
