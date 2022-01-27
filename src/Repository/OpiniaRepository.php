<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\Opinia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Opinia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Opinia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Opinia[]    findAll()
 * @method Opinia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpiniaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Opinia::class);
    }


}
