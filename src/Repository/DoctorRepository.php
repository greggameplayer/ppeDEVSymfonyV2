<?php

namespace App\Repository;

use App\Entity\Doctor;
use App\Entity\Patient;
use App\Entity\Status;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Doctor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Doctor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Doctor[]    findAll()
 * @method Doctor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DoctorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Doctor::class);
    }

    // /**
    //  * @return Doctor[] Returns an array of Doctor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Doctor
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function getAvailableDoctor($start){
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT doctor.first_name, doctor.last_name
        FROM doctor
        WHERE doctor.id NOT IN(
            SELECT DISTINCT (doctor.id)
            FROM doctor INNER JOIN meeting ON doctor.id = meeting.doctor_id
            WHERE meeting.date = :start
            AND meeting.status_id NOT IN (4,6)
        )
        ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(["start" => $start]);

        return $stmt->fetchAllAssociative();
    }
}
