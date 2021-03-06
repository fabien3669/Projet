<?php
// src/projet2sdvBundle/Entity/User.php

namespace projet2sdvBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true, options={"default" : ""})
     */
    private $adresse;

    public function __construct()
    {
        parent::__construct();
        // your own logic


    }


    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return user
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
