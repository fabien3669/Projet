<?php

namespace projet2sdvBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use projet2sdvBundle\Entity\sproduits;
use projet2sdvBundle\Entity\User;

class PanierRepository extends EntityRepository
{
	public function getPanier(User $user, sproduits $produit)
	{
		$qb = $this->createQueryBuilder('p');
		$qb	->innerjoin('projet2sdvBundle:sproduits', 'pr', 'p.produit=pr.panier')
			->where('p.user = :user ')
			->andWhere('p.produit = :produit ')
			->setParameter('user', $user)
			->setParameter('produit', $produit)
		;
		return $qb->getQuery()->getOneOrNullResult();
	}
}