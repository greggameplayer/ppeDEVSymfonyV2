<?php

namespace App\Repository;

use App\Entity\Meeting;
use App\Entity\Patient;
use App\Entity\Status;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @method Meeting|null find($id, $lockMode = null, $lockVersion = null)
 * @method Meeting|null findOneBy(array $criteria, array $orderBy = null)
 * @method Meeting[]    findAll()
 * @method Meeting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeetingRepository extends ServiceEntityRepository
{
    /**
     * @var Security
     */
    private $security;

    public function __construct(ManagerRegistry $registry, Security $security)
    {
        $this->security = $security;
        parent::__construct($registry, Meeting::class);
    }

    // /**
    //  * @return Meeting[] Returns an array of Meeting objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function findByBetweenDatesUnavailableEvents($start, $end)
    {
        return $this->createQueryBuilder('q')
            ->where('q.date BETWEEN :from AND :to')
            ->andWhere('q.status <> :statOne')
            ->andWhere('q.status <> :statTwo')
            ->andWhere('q.status <> :statThree')
            ->andWhere('q.patient <> :patient')
            ->setParameter('from', $start->format('Y-m-d') )
            ->setParameter('to', $end->format('Y-m-d'))
            ->setParameter('statOne', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 3]))
            ->setParameter('statTwo', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 4]))
            ->setParameter('statThree', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 6]))
            ->setParameter('patient', $this->getEntityManager()->getRepository(Patient::class)->findOneBy(['user' => $this->security->getUser()]))
            ->getQuery()
            ->getResult();
    }

    public function findOneByDateWithoutInactive($date)
    {
        return $this->createQueryBuilder('q')
            ->where('q.date = :date')
            ->andWhere('q.status <> :stat')
            ->setParameter('date', $date)
            ->setParameter('stat', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 6]))
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findByBetweenDatesEvents($start, $end)
    {
        return $this->createQueryBuilder('q')
            ->where('q.date BETWEEN :from AND :to')
            ->andWhere('q.status <> :stat')
            ->setParameter('from', $start->format('Y-m-d') )
            ->setParameter('to', $end->format('Y-m-d'))
            ->setParameter('stat', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 6]))
            ->getQuery()
            ->getResult();
    }

    public function findByUserBetweenDatesEvents($start, $end)
    {
        return $this->createQueryBuilder('q')
            ->where('q.date BETWEEN :from AND :to')
            ->andWhere('q.status <> :statOne')
            ->andWhere('q.status <> :statTwo')
            ->andWhere('q.status <> :statThree')
            ->andWhere('q.patient = :patient')
            ->setParameter('from', $start->format('Y-m-d') )
            ->setParameter('to', $end->format('Y-m-d'))
            ->setParameter('statOne', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 3]))
            ->setParameter('statTwo', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 4]))
            ->setParameter('statThree', $this->getEntityManager()->getRepository(Status::class)->findOneBy(['id' => 6]))
            ->setParameter('patient', $this->getEntityManager()->getRepository(Patient::class)->findOneBy(['user' => $this->security->getUser()]))
            ->getQuery()
            ->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Meeting
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
