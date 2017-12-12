<?php

namespace projet2sdvBundle\Controller;

use projet2sdvBundle\Form\sproduitsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use projet2sdvBundle\Entity\sproduits;
use projet2sdvBundle\Entity\stypeProduits;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ProduitController extends Controller
{
    /**
     * @Route("/backOffice/Produit",name="produit.index")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        return $this->showAction();
    }

    /**
     * @Route("/backOffice/Produit/show/{page}",
	 *     name="produit.show",
	 *	   requirements={"page"="\d+"}
	 * )
     * @Method({"GET"})
     */
    public function showAction($page=1)
    {
    	if ($page<1){
    		throw new NotFoundHttpException("La page ".$page." n'existe pas");
		}
		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('projet2sdvBundle:sproduits')
			->getProduits($page, 10);
		$nbPage = ceil(count($products)/10);

		if ($page > $nbPage){
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		return $this->render(
			'projet2sdvBundle:backOff/Produit:show.html.twig',
			array('data' => $products, 'nbPage' => $nbPage, 'currentPage' => $page)
		);
    }

    /**
     * @Route("/backOffice/Produit/add",name="produit.add")
     */
    public function addAction(Request $request)
    {
    	$produit = new sproduits();
		$form = $this->createForm(sproduitsType::class, $produit);


        if ($request->isMethod('POST') && (($form->handleRequest($request))->isValid())){
        	$em = $this->getDoctrine()->getManager();
            $em->persist($produit);

            $em->flush();
            $request->getSession()
                ->getFlashBag()
                ->add(
                    'Info',
                    'Véhicule bien enregistré !'
                );
            return $this->redirectToRoute(
                'produit.show'
            );
        }

        return $this->render(
            'projet2sdvBundle:backOff/Produit:add.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/backOffice/Produit/edit/{id}",name="produit.edit", requirements={"id" = "\d+"})
     */
    public function editAction(Request $request, $id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$produit = $em->getRepository('projet2sdvBundle:sproduits')
			->findOneBy(array('id' => $id));
    	if ($produit==null){
    		throw new NotFoundHttpException("Le véhicule n'existe pas !");
		}
		$form = $this->createForm(sproduitsType::class, $produit);


        if ($request->isMethod('POST') && (($form->handleRequest($request))->isValid())){
            $em->flush();
            $request->getSession()
                ->getFlashBag()
                ->add(
                    'Info',
                    'Véhicule bien modifié !'
                );
            return $this->redirectToRoute(
                'produit.show'
            );
        }

        return $this->render(
            'projet2sdvBundle:backOff/Produit:edit.html.twig',
            array('produit' => $produit, 'form' => $form->createView())
        );
    }

    /**
     * @Route("/backOffice/Produit/delete/{id}",name="produit.delete", requirements={"id" = "\d+"})
     */
    public function deleteAction(Request $request, $id)
    {
		$em=$this->getDoctrine()->getManager();
		$produit =$em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
		if ($produit==null){
			throw new NotFoundHttpException("Le produit d'id ".$id." n'existe pas !");
		}

        if (null==$produit){
            throw new NotFoundHttpException("Le produit n'existe pas");
        }

        $form = $this->get('form.factory')->create();

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            if (isset($_POST['delete']) && $_POST['delete']=="Oui"){
				$em->remove($produit);
				$em->flush();
			}

            return $this->redirectToRoute('produit.show');
        }

        return $this->render(
            'projet2sdvBundle:backOff/Produit:delete.html.twig',
            array(
                'produit' => $produit,
                'form'   => $form->createView()
            )
        );
    }

	/**
	 * @Route("/backOffice/Produit/search", name="produit.search")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function searchAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$form = $this->createForm(FormType::class);
		$form->add('Rechercher', TextType::class)
		->add('Valider', SubmitType::class);
		if ($request->isMethod('POST') && ($form->handleRequest($request))->isValid()){
			$produits = $em->getRepository('projet2sdvBundle:sproduits')
				->findProductLike($form->getData()["Rechercher"]);
			return $this->render(
				'projet2sdvBundle:backOff/Produit:searchShow.html.twig',
				array('data' => $produits)
			);
		}
		return $this->render(
			'projet2sdvBundle:backOff/Produit:search.html.twig',
			array('form' => $form->createView())
		);
    }
}
