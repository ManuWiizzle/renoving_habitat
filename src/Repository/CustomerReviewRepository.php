<?php

namespace App\Repository;

use App\Entity\CustomerReview;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CustomerReview|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerReview|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerReview[]    findAll()
 * @method CustomerReview[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerReviewRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerReview::class);
    }
}
