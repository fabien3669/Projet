<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 14:55
 */

namespace projet2sdvBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity(repositoryClass="projet2sdvBundle\Repository\PanierRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Panier
{
	/**
	 * @var int
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\sproduits", inversedBy="panier")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $produit;

	/**
	 * @ORM\Column(name="date", type="date")
	 */
	private $dateAjoutPanier;

	/**
	 * @ORM\Column(name="quantite", type="integer")
	 */
	private $quantite;

	/**
	 * @ORM\Column(name="prix", type="float")
	 */
	private $prix;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\User")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $user;

	/**
	 * Panier constructor.
	 */
	public function __construct()
	{
		$this->dateAjoutPanier = new \DateTime('now');
		$this->quantite = 0;
		$this->prix = 0;
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
     * Set dateAjoutPanier
     *
     * @param \DateTime $dateAjoutPanier
     *
     * @return Panier
     */
    public function setDateAjoutPanier($dateAjoutPanier)
    {
        $this->dateAjoutPanier = $dateAjoutPanier;

        return $this;
    }

    /**
     * Get dateAjoutPanier
     *
     * @return \DateTime
     */
    public function getDateAjoutPanier()
    {
        return $this->dateAjoutPanier;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Panier
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set user
     *
     * @param \projet2sdvBundle\Entity\User $user
     *
     * @return Panier
     */
    public function setUser(\projet2sdvBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \projet2sdvBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set produit
     *
     * @param \projet2sdvBundle\Entity\sproduits $produit
     *
     * @return Panier
     */
    public function setProduit(\projet2sdvBundle\Entity\sproduits $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \projet2sdvBundle\Entity\sproduits
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return Panier
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
	 * @ORM\PreUpdate
	 * @ORM\PrePersist
	 */
	public function updatePanier()
	{
		$this->setPrix($this->getQuantite()*$this->getProduit()->getPrix());
    }
}
