<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 14:43
 */

namespace projet2sdvBundle\Controller;


use projet2sdvBundle\Entity\Panier;
use projet2sdvBundle\Entity\sproduits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

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
	public function addProductAction(Request $request)
	{
		$id = $request->query->get('id');
		$user = $this->getUser();
		$em = $this->getDoctrine()->getManager();
		$panier = $em->getRepository('projet2sdvBundle:Panier')
			->getPanier($user, $id);
		$produit = $em->getRepository('projet2sdvBundle:sproduits')
			->findOneBy(['id' => $id]);
		if ($panier==null){
			$panier = new Panier();
			$panier->setUser($user);
			$panier->setProduit($produit);
			$panier->setQuantite(1);
			$em->persist($panier);
			$em->flush();
		}
		else{
			$panier->setQuantite($panier->getQuantite()+1);
		}
		return $this->redirectToRoute('produit.show');
	}


}