<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 14:43
 */

namespace projet2sdvBundle\Controller;


use projet2sdvBundle\Entity\Commande;
use projet2sdvBundle\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class PanierController extends Controller
{
	/**
	 * @Route("/frontOff/Panier", name="panier.index")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function indexAction()
	{
		return $this->redirectToRoute('panier.show');
	}

	/**
	 * @Route("/frontOff/Panier/show", name="panier.show")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function showAction()
	{
		$em = $this->getDoctrine()->getManager();
		$paniers = $em->getRepository('projet2sdvBundle:Panier')
			->findBy(array('user' => $this->getUser()));
		return $this->render(
			'projet2sdvBundle:frontOff/Panier:show.html.twig',
			array('data' => $paniers)
		);
	}

	/**
	 * @Route("/frontOff/Panier/add/{id}", name="panier.addProduct",
	 *	 requirements={"id"="\d+"})
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function addProductAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$produit =$em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
		if ($produit==null){
			throw new NotFoundHttpException("Le produit numéro ".$id." n'existe pas !");
		}
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

	/**
	 * @Route("/frontOff/Panier/remadd/{id}", name="panier.remadd",
	 * requirements={"id"="\d+"})
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function remaddAction(Request $request, $id)
	{
		if ($request->isMethod('POST')){
			$em = $this->getDoctrine()->getManager();
			$produit =$em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
			if ($produit==null){
				throw new NotFoundHttpException("Le produit d'id ".$id." n'existe pas !");
			}
			$user = $this->getUser();
			$panier = $em->getRepository('projet2sdvBundle:Panier')
				->findOneBy(array('user'=>$user, 'produit' => $produit));
			if (isset($_POST['ajouter'])){
				$panier->setQuantite($panier->getQuantite()+1);
			}
			else if (isset($_POST['retirer'])){
				$panier->setQuantite($panier->getQuantite()-1);
				if ($panier->getQuantite()==0){
					$em->remove($panier);
				}
			}
			else{
				return $this->redirectToRoute('panier.remove', array('id' => $id));
			}
		}
		$em->flush();
		return $this->redirectToRoute('panier.show');
	}

	/**
	 * @Route("/frontOff/Panier/remove/{id}", name="panier.remove",
	 * requirements={"id"="\d+"})
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function removeAction(Request $request, $id)
	{
		$em=$this->getDoctrine()->getManager();
		$produit =$em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
		if ($produit==null){
			throw new NotFoundHttpException("Le produit d'id ".$id." n'existe pas !");
		}
		$user = $this->getUser();
        $panier=$em->getRepository("projet2sdvBundle:Panier")->findOneBy(array('user' => $user, 'produit' => $produit));

        if (null==$panier){
            throw new NotFoundHttpException("Vous n'avez pas ajouté le véhicule ".$produit->getNom()." à votre panier");
        }

        $form = $this->get('form.factory')->create();

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            if (isset($_POST['delete']) && $_POST['delete']=="Oui"){
				$em->remove($panier);
				$em->flush();
			}

            return $this->redirectToRoute('panier.show');
        }

        return $this->render(
            'projet2sdvBundle:frontOff/Forms:delete.html.twig',
            array(
                'produit' => $produit,
                'form'   => $form->createView()
            )
        );
	}

	/**
	 * @Route("/frontOff/Panier/validate", name="panier.validate")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function validateAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$paniers = $em->getRepository('projet2sdvBundle:Panier')
			->findBy(array('user' => $this->getUser()));
		foreach ($paniers as $panier) {
			$commande = new Commande();
			$etat = $em->getRepository('projet2sdvBundle:Etat')
				->findOneBy(array('id' => 1));
			$commande->setUser($this->getUser())
				->setPrixUnitaire($panier->getProduit()->getPrix())
				->setProduit($panier->getProduit())
				->setQuantite($panier->getQuantite())
				->setEtat($etat);
			$em->persist($commande);
			$em->remove($panier);
		}
		$em->flush();
		$request->getSession()->getFlashBag()
			->add('Info', 'Votre commande a bien été validée !');
		return $this->redirectToRoute('produit.show');

	}
}