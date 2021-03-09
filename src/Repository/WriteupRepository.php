<?php

namespace App\Repository;

use App\Entity\Writeup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Writeup|null find($id, $lockMode = null, $lockVersion = null)
 * @method Writeup|null findOneBy(array $criteria, array $orderBy = null)
 * @method Writeup[]    findAll()
 * @method Writeup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WriteupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Writeup::class);
    }

    // /**
    //  * @return Writeup[] Returns an array of Writeup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Writeup
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
