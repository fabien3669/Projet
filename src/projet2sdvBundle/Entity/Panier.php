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
 * @ORM\Entity(repositoryClass="projet2sdvBundle\Repository\panierRepository")
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
	 * @ORM\OneToMany(targetEntity="projet2sdvBundle\Entity\PanierProduit", mappedBy="panier")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $panierProduit;

	/**
	 * @ORM\Column(name="date", type="date")
	 */
	private $dateAjoutPanier;

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
		$this->panierProduit = new ArrayCollection();
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
     * Add panierProduit
     *
     * @param \projet2sdvBundle\Entity\PanierProduit $panierProduit
     *
     * @return Panier
     */
    public function addPanierProduit(\projet2sdvBundle\Entity\PanierProduit $panierProduit)
    {
        $this->panierProduit[] = $panierProduit;

        return $this;
    }

    /**
     * Remove panierProduit
     *
     * @param \projet2sdvBundle\Entity\PanierProduit $panierProduit
     */
    public function removePanierProduit(\projet2sdvBundle\Entity\PanierProduit $panierProduit)
    {
        $this->panierProduit->removeElement($panierProduit);
    }

    /**
     * Get panierProduit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPanierProduit()
    {
        return $this->panierProduit;
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
}
