<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\Uslugi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Uslugi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uslugi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uslugi[]    findAll()
 * @method Uslugi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UslugiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Uslugi::class);
    }


}
