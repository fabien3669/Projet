<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 15:48
 */

namespace projet2sdvBundle\Repository;

use projet2sdvBundle\Entity\User;

class PanierRepository extends \Doctrine\ORM\EntityRepository
{
	public function getPanier(User $user)
	{
		$qb = $this->createQueryBuilder('p');
		$qb->where('p.user = ? ')
			->orderBy('p.dateAjoutPanier')
			->setParameter('0', $user)
			->setMaxResults(1);
		return $qb->getQuery()->getSingleResult();
	}
}