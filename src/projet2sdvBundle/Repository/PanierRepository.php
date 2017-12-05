<?php

namespace projet2sdvBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use projet2sdvBundle\Entity\User;

class PanierRepository extends EntityRepository
{
	public function getPanier(User $user, $id)
	{
		$qb = $this->createQueryBuilder('p');
		$qb	->innerjoin('projet2sdvBundle:sproduits', 'pr', 'p.produit=pr.panier')
			->where('p.user = :user ')
			->andWhere('pr.id = :id ')
			->setParameter('user', $user)
			->setParameter('id', $id)
		;
		return $qb->getQuery()->getOneOrNullResult();
	}
}