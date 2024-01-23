<?php

namespace App\Repository;

use App\Entity\Canape;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Canape>
 *
 * @method Canape|null find($id, $lockMode = null, $lockVersion = null)
 * @method Canape|null findOneBy(array $criteria, array $orderBy = null)
 * @method Canape[]    findAll()
 * @method Canape[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CanapeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Canape::class);
    }

//    /**
//     * @return Canape[] Returns an array of Canape objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Canape
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
