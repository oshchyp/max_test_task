<?php

namespace App\Repository;

use App\Entity\ProductArrival;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductArrival>
 *
 * @method ProductArrival|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductArrival|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductArrival[]    findAll()
 * @method ProductArrival[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductArrivalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductArrival::class);
    }

    public function allAsArray(): array
    {
        $qb = $this->createQueryBuilder('a');
        $qb
            ->select(['a', 'ap'])
            ->leftJoin('a.products', 'ap');

        return $qb->getQuery()->getArrayResult();
    }
}
