<?php
/**
 * Created by PhpStorm.
 * User: fabien
 * Date: 28/11/17
 * Time: 15:12
 */

namespace projet2sdvBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class PanierProduit
 * @ORM\Entity(repositoryClass="projet2sdvBundle\Repository\PanierProduitRepository")
 */
class PanierProduit
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
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\Panier", inversedBy="panierProduit")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $panier;

	/**
	 * @ORM\ManyToOne(targetEntity="projet2sdvBundle\Entity\sproduits", inversedBy="panierProduit")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $produit;

	/**
	 * @ORM\Column(name="quantite", type="integer")
	 */
	private $quantite;

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
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return PanierProduit
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
     * Set panier
     *
     * @param \projet2sdvBundle\Entity\Panier $panier
     *
     * @return PanierProduit
     */
    public function setPanier(\projet2sdvBundle\Entity\Panier $panier)
    {
        $this->panier = $panier;

        return $this;
    }

    /**
     * Get panier
     *
     * @return \projet2sdvBundle\Entity\Panier
     */
    public function getPanier()
    {
        return $this->panier;
    }

    /**
     * Set produit
     *
     * @param \projet2sdvBundle\Entity\sproduits $produit
     *
     * @return PanierProduit
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
}
