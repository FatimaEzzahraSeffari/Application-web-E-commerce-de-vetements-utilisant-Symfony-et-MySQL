<?php

namespace App\Repository;

use App\Entity\BestsellingEdit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BestsellingEdit>
 *
 * @method BestsellingEdit|null find($id, $lockMode = null, $lockVersion = null)
 * @method BestsellingEdit|null findOneBy(array $criteria, array $orderBy = null)
 * @method BestsellingEdit[]    findAll()
 * @method BestsellingEdit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BestsellingEditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BestsellingEdit::class);
    }

    public function save(BestsellingEdit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(BestsellingEdit $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return BestsellingEdit[] Returns an array of BestsellingEdit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BestsellingEdit
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
