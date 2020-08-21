<?php

namespace App\Repository;

use App\Entity\FamilyHome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FamilyHome|null find($id, $lockMode = null, $lockVersion = null)
 * @method FamilyHome|null findOneBy(array $criteria, array $orderBy = null)
 * @method FamilyHome[]    findAll()
 * @method FamilyHome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FamilyHomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FamilyHome::class);
    }

    // /**
    //  * @return FamilyHome[] Returns an array of FamilyHome objects
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
    public function findOneBySomeField($value): ?FamilyHome
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
