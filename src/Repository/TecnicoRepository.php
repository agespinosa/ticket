<?php

namespace App\Repository;

use App\Entity\Tecnico;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tecnico|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tecnico|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tecnico[]    findAll()
 * @method Tecnico[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TecnicoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tecnico::class);
    }

//    /**
//     * @return Tecnico[] Returns an array of Tecnico objects
//     */
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
    public function findOneBySomeField($value): ?Tecnico
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
