<?php

namespace App\Repository;

use App\Entity\Etudiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Etudiant>
 */
class EtudiantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudiant::class);
    }

   /**
    * @return Etudiant[] Returns an array of Etudiant objects
     */
   public function getAll(): array
   {
       return $this->createQueryBuilder('e')
           ->orderBy('e.id', 'ASC')
           ->getQuery()
           ->getResult()
       ;
   }

   /*
   public function findOneBySomeField($value): ?Etudiant
   {
       return $this->createQueryBuilder('e')
           ->andWhere('e.exampleField = :val')
           ->setParameter('val', $value)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }*/
}
