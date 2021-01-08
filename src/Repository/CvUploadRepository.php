<?php

namespace App\Repository;

use App\Entity\CvUpload;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvUpload|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvUpload|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvUpload[]    findAll()
 * @method CvUpload[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvUploadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvUpload::class);
    }
}
