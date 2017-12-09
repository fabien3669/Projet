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

	/**
	 * @Route("/frontOff/Panier/show", name="panier.show")
	 */
	public function showAction()
	{
		$em = $this->getDoctrine()->getManager();
		$paniers = $em->getRepository('projet2sdvBundle:Panier')
			->findAll();
		return $this->render(
			'projet2sdvBundle:frontOff/Panier:show.html.twig',
			array('data' => $paniers)
		);
	}

	/**
	 * @Route("/frontOff/Panier/add", name="panier.addProduct")
	 */
	public function addProductAction(Request $request)
	{
		$id = $request->query->get('id');
		$em = $this->getDoctrine()->getManager();
		$produit =$em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
		$user = $this->getUser();
		$panier = $em->getRepository('projet2sdvBundle:Panier')
			->findOneBy(array('user'=>$user, 'produit' => $produit));
		if ($panier==null){
			$panier = new Panier();
			$panier->setUser($user);
			$panier->setProduit($produit);
			$panier->setQuantite(1);
			$em->persist($panier);
		}
		else{
			$panier->setQuantite($panier->getQuantite()+1);
		}
		$em->flush();
		return $this->redirectToRoute('produit.show');
	}


}