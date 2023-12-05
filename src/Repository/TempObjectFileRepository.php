<?php

namespace App\Repository;

use App\Entity\TempObjectFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TempObjectFile>
 *
 * @method TempObjectFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method TempObjectFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method TempObjectFile[]    findAll()
 * @method TempObjectFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempObjectFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TempObjectFile::class);
    }

//    /**
//     * @return TempObjectFile[] Returns an array of TempObjectFile objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TempObjectFile
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
