<?php

namespace App\Repository;

use App\Entity\KartaPacjenta;
use App\Entity\TablicaOgloszen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TablicaOgloszen|null find($id, $lockMode = null, $lockVersion = null)
 * @method TablicaOgloszen|null findOneBy(array $criteria, array $orderBy = null)
 * @method TablicaOgloszen[]    findAll()
 * @method TablicaOgloszen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TablicaOgloszenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TablicaOgloszen::class);
    }


}
