<?php

namespace App\Repository;

use App\Entity\GoodDeal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GoodDeal|null find($id, $lockMode = null, $lockVersion = null)
 * @method GoodDeal|null findOneBy(array $criteria, array $orderBy = null)
 * @method GoodDeal[]    findAll()
 * @method GoodDeal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoodDealRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GoodDeal::class);
    }
}
