<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 14:43
 */

namespace projet2sdvBundle\Controller;


use projet2sdvBundle\Entity\Panier;
use projet2sdvBundle\Entity\PanierProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PanierController extends Controller
{
	public function indexAction()
	{

	}

	public function showAction()
	{

	}

	/**
	 * @Route("/frontOff/Panier/add", name="panier.addProduct")
	 */
	public function addProductAction()
	{
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();
		$panier = $em->getRepository('projet2sdvBundle:Panier')
			->getPanier($user);

		if ($panier==null){
			$panier = new Panier();
			$panier->setUser($user);
			$em->persist($panier);
			$em->flush();
		}

		if (($panier->getPanierProduit())->getProduit() == $produit){
//TODO
		}
	}


}