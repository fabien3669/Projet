<?php

namespace projet2sdvBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Filesystem\Filesystem;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
	{

        if (! is_null($this->getUser()) and $this->getUser()->hasRole('ROLE_CLIENT') )

           return $this->render("projet2sdvBundle:frontOff:frontOFFICE.html.twig");
        if (! is_null($this->getUser()) and $this->getUser()->hasRole('ROLE_ADMIN') )
           return $this->render("projet2sdvBundle:backOff:backOFFICE.html.twig");
        return $this->render('projet2sdvBundle::accueil.html.twig');
    }
}
