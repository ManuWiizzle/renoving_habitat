<?php

namespace App\Repository;

use App\Entity\FinalSite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FinalSite|null find($id, $lockMode = null, $lockVersion = null)
 * @method FinalSite|null findOneBy(array $criteria, array $orderBy = null)
 * @method FinalSite[]    findAll()
 * @method FinalSite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FinalSiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FinalSite::class);
    }

    // /**
    //  * @return FinalSite[] Returns an array of FinalSite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FinalSite
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
