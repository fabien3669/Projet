<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 11/12/17
 * Time: 14:32
 */

namespace projet2sdvBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="projet2sdvBundle\Repository\CommandeRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Commande
{
	/**
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $user;

	/**
	 * @ORM\Column(name="date", type="datetime")
	 */
	private $dateCommande;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\sproduits")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $produit;

	/**
	 * @ORM\Column(name="quantite", type="integer")
	 */
	private $quantite;

	/**
	 * @ORM\Column(name="prixUnitaire", type="float")
	 */
	private $prixUnitaire;

	/**
	 * @ORM\Column(name="adresseLivraison", type="string", length=255)
	 */
	private $adresseLivraison;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\Etat")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $etat;

	public function __construct()
	{
		$this->dateCommande = new \DateTime('now');
	}

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Commande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Get prixUnitaire
     *
     * @return float
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set user
     *
     * @param User $user
     *
     * @return Commande
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set produit
     *
     * @param sproduits $produit
     *
     * @return Commande
     */
    public function setProduit(sproduits $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return sproduits
     */
    public function getProduit()
    {
        return $this->produit;
    }

	/**
	 * @ORM\PrePersist
	 */
	public function prePersist()
	{
		$this->adresseLivraison = $this->user->getAdresse();
		$this->prixUnitaire = $this->produit->getPrix();
    }

	public function getAdresseLivraison()
	{
		return $this->adresseLivraison;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Set prixUnitaire
     *
     * @param float $prixUnitaire
     *
     * @return Commande
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Set adresseLivraison
     *
     * @param string $adresseLivraison
     *
     * @return Commande
     */
    public function setAdresseLivraison($adresseLivraison)
    {
        $this->adresseLivraison = $adresseLivraison;

        return $this;
    }

    /**
     * Set etat
     *
     * @param \projet2sdvBundle\Entity\Etat $etat
     *
     * @return Commande
     */
    public function setEtat(\projet2sdvBundle\Entity\Etat $etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \projet2sdvBundle\Entity\Etat
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
