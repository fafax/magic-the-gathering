<?php

namespace App\Repository;

use App\Entity\CollectionCard;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CollectionCard|null find($id, $lockMode = null, $lockVersion = null)
 * @method CollectionCard|null findOneBy(array $criteria, array $orderBy = null)
 * @method CollectionCard[]    findAll()
 * @method CollectionCard[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CollectionCard::class);
    }

    // /**
    //  * @return Collection[] Returns an array of Collection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Collection
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
