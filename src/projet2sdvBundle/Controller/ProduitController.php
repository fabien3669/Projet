<?php

namespace projet2sdvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use projet2sdvBundle\Entity\sproduits;
use projet2sdvBundle\Entity\stypeProduits;


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

		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('projet2sdvBundle:sproduits')
			->getProduits($page, 4);
		$nbPage = ceil(count($products)/4);

		if (($page > $nbPage && $nbPage!=0 ) || $page<1){
			throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		return $this->render(
			'projet2sdvBundle:backOff/Produit:show.html.twig',
			array('data' => $products, 'nbPage' => $nbPage, 'currentPage' => $page)
		);
    }

    /**
     * @Route("/backOffice/Produit/add",name="produit.add")
     * @Method({"GET"})
     */
    public function addAction()
    {

    }

    /*/**
     * @Route("/backOffice/Produit/validFormAdd",name="produit.validFormAdd")
     * @Method({"POST"})
     */
   /* public function validFormAddAction(Request $request)
    {
        $donnees['nom']=htmlspecialchars($_POST['nom']);
        $donnees['prix']=htmlspecialchars($_POST['prix']);
        $donnees['photo']=$request->request->get('photo');
        $donnees['typeProduit_id']=htmlentities($request->request->get('typeProduit_id'));

        $erreurs=array();
        if ((! preg_match("/^[A-Za-z ]{2,}/",$donnees['nom']))) $erreurs['nom']='nom composé de 2 lettres minimum';
        if(! is_numeric($donnees['typeProduit_id']))$erreurs['typeProduit_id']='veuillez saisir une valeur';
        if(! is_numeric($donnees['prix']))$erreurs['prix']='saisir une valeur numérique';
        if (! preg_match("/[A-Za-z0-9]{2,}.(jpeg|jpg|png)/",$donnees['photo'])) $erreurs['photo']='nom de fichier incorrect (extension jpeg , jpg ou png)';


        if(! empty($erreurs))
        {
            // A modifier
//            $conn = $this->get('database_connection');
//            $typeProduits = $conn->fetchAll('SELECT id,libelle  FROM stypeProduits ORDER BY id;');
            $instanceRepositoryStypeProduit = $this->getDoctrine()->getManager()->getRepository("projet2sdvBundle:stypeProduits");
            $typeProduits = $instanceRepositoryStypeProduit->findAll();

            // fin A modifier
            return $this->render('projet2sdvBundle:backOff/Produit:add.html.twig', ['donnees'=>$donnees,'erreurs'=>$erreurs,'typeProduits'=> $typeProduits]);
        }
        else
        {
            // A modifier
//            $conn = $this->get('database_connection');
//            $conn->insert('sproduits', ["typeProduit_id"=>$donnees['typeProduit_id'],"nom"=>$donnees['nom'],"prix"=>$donnees['prix'],"photo"=>$donnees['photo']]);
//            // fin A modifier
            $produit = new sproduits();
            $produit->setNom($donnees['nom']);
            $produit->setPrix($donnees['prix']);
            $produit->setPhoto($donnees['photo']);
            $produit->setTypeProduitId($donnees['typeProduit_id']);
            // On récupère l'EntityManager
            $em = $this->getDoctrine()->getManager();
            // Étape 1 : On « persiste » l'entité
            $em->persist($produit);
            // Étape 2 : On « flush » tout ce qui a été persisté avant
            $em->flush();


            return $this->redirectToRoute('produit.show');
        }

        return $this->redirectToRoute('produit.show');
    }*/

    /**
     * @Route("/backOffice/Produit/edit/{id}",name="produit.edit", requirements={"id" = "\d+"})
     * @Method({"GET"})
     */
    public function editAction($id)
    {
    }

   /* /**
     * @Route("/backOffice/Produit/validFormEdit",name="produit.validFormEdit")
     * @Method({"PUT"})
     */
   /* public function validFormEditAction(Request $request)
    {
        $donnees['id']=$request->request->get('id');

        $donnees['nom']=htmlspecialchars($_POST['nom']);
        $donnees['prix']=htmlspecialchars($_POST['prix']);
        $donnees['photo']=$request->request->get('photo');
        $donnees['typeProduit_id']=htmlentities($request->request->get('typeProduit_id'));

        $erreurs=array();
        if ((! preg_match("/^[A-Za-z ]{2,}/",$donnees['nom']))) $erreurs['nom']='nom composé de 2 lettres minimum';
        if(! is_numeric($donnees['typeProduit_id']))$erreurs['typeProduit_id']='veuillez saisir une valeur';
        if(! is_numeric($donnees['prix']))$erreurs['prix']='saisir une valeur numérique';
        if (! preg_match("/[A-Za-z0-9]{2,}.(jpeg|jpg|png)/",$donnees['photo'])) $erreurs['photo']='nom de fichier incorrect (extension jpeg , jpg ou png)';


        if(! empty($erreurs))
        {
            // A modifier
//            $conn = $this->get('database_connection');
//            $typeProduits = $conn->fetchAll('SELECT id,libelle  FROM stypeProduits ORDER BY id;');
            $instanceRepositoryStypeProduit = $this->getDoctrine()->getManager()->getRepository("projet2sdvBundle:stypeProduits");
            $typeProduits = $instanceRepositoryStypeProduit->findAll();

            // fin A modifier
            return $this->render('projet2sdvBundle:backOff/Produit:edit.html.twig', ['donnees'=>$donnees,'erreurs'=>$erreurs,'typeProduits'=> $typeProduits]);
        }
        else
        {
            // A modifier
//            $conn = $this->get('database_connection');
//            $conn->update('sproduits',
//                ["typeProduit_id"=>$donnees['typeProduit_id'],"nom"=>$donnees['nom'],"prix"=>$donnees['prix'],"photo"=>$donnees['photo']],
//                ["id"=>$donnees['id']]
//            );

            $em = $this->getDoctrine()->getManager();
            $produit = $em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $donnees['id']));

            $produit->setNom($donnees['nom']);
            $produit->setPrix($donnees['prix']);
            $produit->setPhoto($donnees['photo']);
            $produit->setTypeProduitId($donnees['typeProduit_id']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            // fin A modifier
            return $this->redirectToRoute('produit.show');
        }

        return $this->redirectToRoute('produit.show');
    }*/

    /**
     * @Route("/backOffice/Produit/delete/{id}",name="produit.delete", requirements={"id" = "\d+"})
     * @Method({"GET"})
     */
    public function deleteAction($id)
    {

    }

//    /**
//     * @Route("/backOffice/Produit/validFormDelete",name="produit.validFormDelete")
//     * @Method({"DELETE"})
//     */
//    public function validFormDeleteAction(Request $request)
//    {
//        $id=$request->request->get('id');
////        $conn = $this->get('database_connection');
////        $conn->delete('sproduits',["id"=>$id]);
//
//        $em = $this->getDoctrine()->getManager();
//        $produit = $em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
//        $em->remove($produit);
//        $em->flush();
//
//        return $this->redirectToRoute('produit.show');
//    }

}
