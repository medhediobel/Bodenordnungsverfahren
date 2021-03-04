<?php

namespace App\Repository;

use App\Entity\Dienstsitz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dienstsitz|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dienstsitz|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dienstsitz[]    findAll()
 * @method Dienstsitz[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DienstsitzRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dienstsitz::class);
    }

    // /**
    //  * @return Dienstsitz[] Returns an array of Dienstsitz objects
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
    public function findOneBySomeField($value): ?Dienstsitz
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
