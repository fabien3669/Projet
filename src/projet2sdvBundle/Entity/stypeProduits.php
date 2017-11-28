<?php

namespace projet2sdvBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * stypeProduits
 *
 * @ORM\Table(name="stypeProduits")
 * @ORM\Entity(repositoryClass="projet2sdvBundle\Repository\stypeProduitsRepository")
 */
class stypeProduits
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

	/**
	 * @ORM\OneToMany(targetEntity="projet2sdvBundle\Entity\sproduits", mappedBy="typeProduit")
	 */
	private $produits;

	/**
	 * stypeProduits constructor.
	 */
	public function __construct()
	{
		$this->produits = new ArrayCollection();
	}


	/**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return stypeProduits
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    /**
     * Add produit
     *
     * @param \projet2sdvBundle\Entity\sproduits $produit
     *
     * @return stypeProduits
     */
    public function addProduit(sproduits $produit)
    {
        $this->produits[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \projet2sdvBundle\Entity\sproduits $produit
     */
    public function removeProduit(sproduits $produit)
    {
        $this->produits->removeElement($produit);
    }

    /**
     * Get produits
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduits()
    {
        return $this->produits;
    }
}
