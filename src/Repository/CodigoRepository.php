<?php

namespace App\Repository;

use App\Entity\Codigo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Codigo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Codigo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Codigo[]    findAll()
 * @method Codigo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CodigoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Codigo::class);
    }

//    /**
//     * @return Codigo[] Returns an array of Codigo objects
//     */
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
    public function findOneBySomeField($value): ?Codigo
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
