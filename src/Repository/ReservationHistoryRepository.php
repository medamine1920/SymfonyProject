<?php

namespace App\Repository;

use App\Entity\ReservationHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReservationHistory>
 *
 * @method ReservationHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationHistory[]    findAll()
 * @method ReservationHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationHistory::class);
    }

//    /**
//     * @return ReservationHistory[] Returns an array of ReservationHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReservationHistory
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
