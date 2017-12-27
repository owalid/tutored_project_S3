<?php

namespace GeroWebSite\GeroBundle\Repository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends \Doctrine\ORM\EntityRepository
{
    public function byCategorie($categorie)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.categorie = :categorie')
            ->andWhere('u.disponible = 1 ')
            ->orderBy('u.id')
            ->setParameter('categorie', $categorie);

        return $qb->getQuery()->getResult();
    }
}
