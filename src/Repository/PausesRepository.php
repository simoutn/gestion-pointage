<?php

namespace App\Repository;

use App\Entity\Pauses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pauses|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pauses|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pauses[]    findAll()
 * @method Pauses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PausesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pauses::class);
    }

    // /**
    //  * @return Pauses[] Returns an array of Pauses objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pauses
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
