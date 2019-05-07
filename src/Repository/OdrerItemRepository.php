<?php

namespace App\Repository;

use App\Entity\OdrerItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OdrerItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method OdrerItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method OdrerItem[]    findAll()
 * @method OdrerItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OdrerItemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OdrerItem::class);
    }

    // /**
    //  * @return OdrerItem[] Returns an array of OdrerItem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OdrerItem
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
