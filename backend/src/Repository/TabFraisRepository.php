<?php

namespace App\Repository;

use App\Entity\TabFrais;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TabFrais|null find($id, $lockMode = null, $lockVersion = null)
 * @method TabFrais|null findOneBy(array $criteria, array $orderBy = null)
 * @method TabFrais[]    findAll()
 * @method TabFrais[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabFraisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TabFrais::class);
    }

    // /**
    //  * @return TabFrais[] Returns an array of TabFrais objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TabFrais
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}