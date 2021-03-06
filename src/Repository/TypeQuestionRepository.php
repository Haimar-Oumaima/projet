<?php

namespace App\Repository;

use App\Entity\TypeQuestion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeQuestion|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeQuestion|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeQuestion[]    findAll()
 * @method TypeQuestion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeQuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeQuestion::class);
    }

    // /**
    //  * @return TypeQuestion[] Returns an array of TypeQuestion objects
    //  */
    
    public function findByLibelle($libelle)
    {
        return $this->createQueryBuilder('t')
            ->where('t.libelle_type = :libelle')
            ->setParameter('libelle', $libelle)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?TypeQuestion
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
