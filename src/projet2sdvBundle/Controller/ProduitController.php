<?php

namespace projet2sdvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

// à ajouter pour utiliser "Method" get post put delete dans les routes
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
// à ajouter pour utiliser l'objet Request (récuperer les paramètres du formulaire, lien ....)
use Symfony\Component\HttpFoundation\Request;

use projet2sdvBundle\Entity\sproduits;   // référence aux "Entity"
use projet2sdvBundle\Entity\stypeProduits;


class ProduitController extends Controller
{
    /**
     * @Route("/backOffice/Produit",name="produit.index")
     * @Method({"GET"})
     */
    public function indexAction()
    {
      //  return $this->render('projet2sdvBundle::layout.html.twig');
        $produits = [];
        return $this->render('projet2sdvBundle:backOff/Produit:show.html.twig', ['data' => $produits]);
    }

    /**
     * @Route("/backOffice/Produit/show",name="produit.show")
     * @Method({"GET"})
     */
    public function showAction()
    {

        // documentation dbal
        // http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/data-retrieval-and-manipulation.html

        // A modifier
//        $conn = $this->get('database_connection');
//        $produits = $conn->fetchAll('SELECT p.id, t.libelle, p.nom, p.prix, p.photo
//            FROM sproduits as p,stypeProduits as t
//            WHERE p.typeProduit_id=t.id ORDER BY p.nom;');

        $produits = $this->getDoctrine()
            ->getRepository('projet2sdvBundle:sproduits')
            ->getProduits();
        // fin A modifier

//        var_dump($produits);
//        die();

        return $this->render('projet2sdvBundle:backOff/Produit:show.html.twig', array(
            'data' => $produits
        ));
    }

    /**
     * @Route("/backOffice/Produit/add",name="produit.add")
     * @Method({"GET"})
     */
    public function addAction()
    {

        // A modifier
//        $conn = $this->get('database_connection');
//        $typeProduits = $conn->fetchAll('SELECT id,libelle
//        FROM stypeProduits ORDER BY id;');

        $instanceRepositoryStypeProduit = $this->getDoctrine()->getManager()->getRepository("projet2sdvBundle:stypeProduits");
        $typeProduits = $instanceRepositoryStypeProduit->findAll();

        // fin A modifier
        return $this->render('projet2sdvBundle:backOff/Produit:add.html.twig', ['typeProduits'=> $typeProduits]);
    }

    /**
     * @Route("/backOffice/Produit/validFormAdd",name="produit.validFormAdd")
     * @Method({"POST"})
     */
    public function validFormAddAction(Request $request)
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
    }

    /**
     * @Route("/backOffice/Produit/edit/{id}",name="produit.edit", requirements={"id" = "\d+"})
     * @Method({"GET"})
     */
    public function editAction($id)
    {

        // A modifier
//        $conn = $this->get('database_connection');
//        $statement = $conn->executeQuery('SELECT id,typeProduit_id,nom,prix,photo
//        FROM sproduits WHERE id= ? LIMIT 1;',[$id]);
//        $produit = $statement->fetch();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));

//        $typeProduits = $conn->fetchAll('SELECT id,libelle
//        FROM stypeProduits ORDER BY id;');
        $instanceRepositoryStypeProduit = $this->getDoctrine()->getManager()->getRepository("projet2sdvBundle:stypeProduits");
        $typeProduits = $instanceRepositoryStypeProduit->findAll();

        // fin A modifier

        return $this->render('projet2sdvBundle:backOff/Produit:edit.html.twig',['donnees' => $produit,'typeProduits'=> $typeProduits]);
    }

    /**
     * @Route("/backOffice/Produit/validFormEdit",name="produit.validFormEdit")
     * @Method({"PUT"})
     */
    public function validFormEditAction(Request $request)
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
    }
    /**
     * @Route("/backOffice/Produit/delete/{id}",name="produit.delete", requirements={"id" = "\d+"})
     * @Method({"GET"})
     */
    public function deleteAction($id)
    {

        // A modifier
//        $conn = $this->get('database_connection');
//        $statement = $conn->executeQuery('SELECT id,typeProduit_id,nom,prix,photo
//        FROM sproduits WHERE id= ? LIMIT 1;',[$id]);
//        $produit = $statement->fetch();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));

      //  var_dump($produit);die();
        // fin A modifier

        return $this->render('projet2sdvBundle:backOff/Produit:delete.html.twig',['donnees' => $produit]);
    }
    /**
     * @Route("/backOffice/Produit/validFormDelete",name="produit.validFormDelete")
     * @Method({"DELETE"})
     */
    public function validFormDeleteAction(Request $request)
    {
        $id=$request->request->get('id');
//        $conn = $this->get('database_connection');
//        $conn->delete('sproduits',["id"=>$id]);

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('projet2sdvBundle:sproduits')->findOneBy(array('id' => $id));
        $em->remove($produit);
        $em->flush();

        return $this->redirectToRoute('produit.show');
    }

}
