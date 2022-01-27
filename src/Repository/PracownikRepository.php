<?php

namespace App\Repository;

use App\Entity\Pracownik;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pracownik|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pracownik|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pracownik[]    findAll()
 * @method Pracownik[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PracownikRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pracownik::class);
    }

}
