<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 11/12/17
 * Time: 16:57
 */

namespace projet2sdvBundle\Controller;

use projet2sdvBundle\Form\CommandeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use projet2sdvBundle\Repository\CommandeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CommandeController extends Controller
{

	/**
	 * @Route("/frontOff/Commande", name="commande.index")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function indexAction()
	{
		return $this->redirectToRoute('commande.show');
	}

	/**
	 * @Route("/frontOff/Commande/show", name="commande.show")
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function showAction()
	{
		$em = $this->getDoctrine()->getManager();
		$dates = $em->getRepository('projet2sdvBundle:Commande')
			->getDistinctDate($this->getUser());
		$nbProduits = $em->getRepository('projet2sdvBundle:Commande')
			->getNbProduitParCommande($this->getUser());
		return $this->render(
			'projet2sdvBundle:frontOff/Commandes:show.html.twig',
			array(
				'dates' => $dates,
				'nbProduits' => $nbProduits
			)
		);
	}

	/**
	 * @Route("/frontOff/Commande/details/{year}/{month}/{day}/{hours}/{minutes}/{secondes}",
	 *     name="commande.details",
	 *	   requirements={
	 *			"year"="\d+",
	 *     		"month"="\d+",
	 *     		"day"="\d+",
	 *     		"hours"="\d+",
	 *     		"minutes"="\d+",
	 *     		"secondes"="\d+"
	 *	 	}
	 * )
	 * @Security("!has_role('ROLE_ADMIN')")
	 */
	public function detailsAction($year, $month, $day, $hours, $minutes, $secondes)
	{
		if ($month>12 || $month<1 || $day>31 || $day<1 || $hours>59 || $hours<0 || $minutes>59 || $minutes<0 || $secondes>59 || $secondes<0){
			throw new NotFoundHttpException("La date n'est pas valide");
		}
		$date = new \DateTime();
		$date->setDate($year, $month, $day);
		$date->setTime($hours, $minutes, $secondes);
		if ($date>new \DateTime('now')){
			throw new NotFoundHttpException("La date n'est pas valide");
		}
		$em = $this->getDoctrine()->getManager();
		$commandes = $em->getRepository('projet2sdvBundle:Commande')
			->findBy(array('dateCommande' => $date, 'user' => $this->getUser()));
		if (empty($commandes)){
			throw new NotFoundHttpException("Pas de commande à cette date");
		}
		return $this->render(
			'projet2sdvBundle:frontOff/Commandes:details.html.twig',
			array(
				'commandes' => $commandes
			)
		);
	}

	/**
	 * @Route("backOffice/Commande/gestion", name="GestionCommande.showGestion")
	 * @Security("has_role('ROLE_VENDEUR')")
	 */
	public function showGestionAction()
	{
		$em = $this->getDoctrine()->getManager();
		$commandes=$em->getRepository('projet2sdvBundle:Commande')
			->findAll();
		return $this->render(
			'projet2sdvBundle:backOff/Commandes:show.html.twig',
			array(
				'commandes' => $commandes
			)
		);
	}

	/**
	 * @Route("/backOffice/Commande/edit/{id}", name="GestionCommande.editCommande", requirements={"id": "\d+"})
	 * @Security("has_role('ROLE_VENDEUR')")
	 */
	public function editCommandeAction(Request $request, $id)
	{
		$em = $this->getDoctrine()->getManager();
		$commande = $em->getRepository('projet2sdvBundle:Commande')
			->findOneBy(array('id' => $id));
		if ($commande==null){
			throw new NotFoundHttpException("La commande n'existe pas !");
		}
		$form = $this->createForm(CommandeType::class, $commande);
		if ($request->isMethod('POST') && (($form->handleRequest($request))->isValid())){
            $em->flush();
            $request->getSession()
                ->getFlashBag()
                ->add(
                    'Info',
                    'Commande bien modifiée !'
                );
            return $this->redirectToRoute(
                'GestionCommande.showGestion'
            );
        }

        return $this->render(
            'projet2sdvBundle:backOff/Commandes:edit.html.twig',
            array('commande' => $commande, 'form' => $form->createView())
        );
	}

}