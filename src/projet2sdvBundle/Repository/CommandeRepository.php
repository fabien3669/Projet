<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 11/12/17
 * Time: 18:23
 */

namespace projet2sdvBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use projet2sdvBundle\Entity\User;

class CommandeRepository extends EntityRepository
{
	public function getDistinctDate($user)
	{
		return $res = $this->createQueryBuilder('c')
			->select('distinct c.dateCommande')
			->where('c.user = :user')
			->setParameter('user', $user)
			->getQuery()->getResult();
	}

	public function getNbProduitParCommande($user)
	{
		return $this->createQueryBuilder('c')
			->select('sum(c.quantite)')
			->where('c.user = :user')
			->setParameter('user', $user)
			->groupBy('c.dateCommande')
			->getQuery()->getResult();
	}
}