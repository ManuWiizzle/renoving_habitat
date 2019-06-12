<?php

namespace App\Repository;

use App\Entity\SportMeetup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SportMeetup|null find($id, $lockMode = null, $lockVersion = null)
 * @method SportMeetup|null findOneBy(array $criteria, array $orderBy = null)
 * @method SportMeetup[]    findAll()
 * @method SportMeetup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SportMeetupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SportMeetup::class);
    }

    // /**
    //  * @return SportMeetup[] Returns an array of SportMeetup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SportMeetup
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
