<?php

namespace App\Repository;

use App\Entity\CommonTrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommonTrait>
 *
 * @method CommonTrait|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommonTrait|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommonTrait[]    findAll()
 * @method CommonTrait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommonTraitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommonTrait::class);
    }

//    /**
//     * @return CommonTrait[] Returns an array of CommonTrait objects
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

//    public function findOneBySomeField($value): ?CommonTrait
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
