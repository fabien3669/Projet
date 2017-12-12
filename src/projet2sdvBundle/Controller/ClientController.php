<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 11/12/17
 * Time: 23:32
 */

namespace projet2sdvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ClientController extends Controller
{
	/**
	 * @Route("/frontOff/monCompte", name="client.compte")
	 */
	public function compteAction()
	{
		$em = $this->getDoctrine()->getManager();
		$datas = $em->getRepository('projet2sdvBundle:User')
			->findOneBy(array('id'=>$this->getUser()));
		return $this->render(
			'projet2sdvBundle:frontOff/Client:show.html.twig',
			array(
				'data' => $datas
			)
		);
	}

	//TODO methode pour modifier username, mail et adresse de livraison
	// + ajouter dans la vue les liens
	//TODO seach produit

}