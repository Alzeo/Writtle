<?php

namespace App\Repository;

use App\Entity\Highconcept;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Highconcept|null find($id, $lockMode = null, $lockVersion = null)
 * @method Highconcept|null findOneBy(array $criteria, array $orderBy = null)
 * @method Highconcept[]    findAll()
 * @method Highconcept[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HighconceptRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Highconcept::class);
    }

    // /**
    //  * @return Highconcept[] Returns an array of Highconcept objects
    //  */

    public function findAllHq($value)
    {
        return $this->createQueryBuilder('p')
            ->Where('p.projet = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }

    /*
    public function findOneBySomeField($value): ?Highconcept
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
