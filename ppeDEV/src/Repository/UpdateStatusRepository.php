<?php

namespace App\Repository;

use App\Entity\UpdateStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UpdateStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method UpdateStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method UpdateStatus[]    findAll()
 * @method UpdateStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UpdateStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UpdateStatus::class);
    }

    // /**
    //  * @return UpdateStatus[] Returns an array of UpdateStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UpdateStatus
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
