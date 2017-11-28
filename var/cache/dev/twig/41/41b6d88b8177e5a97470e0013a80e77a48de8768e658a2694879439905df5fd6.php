<?php

/* projet2sdvBundle::nav_frontOff.html.twig */
class __TwigTemplate_7ad7a82355f8bed934d985f80dd46debe070ae07ad11f9f788c59a513ced7aa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10ba7fe2c35dbdd86918484d705ea6733021b03114f35da0568512a7aa4609ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ba7fe2c35dbdd86918484d705ea6733021b03114f35da0568512a7aa4609ef->enter($__internal_10ba7fe2c35dbdd86918484d705ea6733021b03114f35da0568512a7aa4609ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_frontOff.html.twig"));

        $__internal_53e2047b27a8a40e702bfd580a46d77294f59fabc0998be1ae4480f1abb9fed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e2047b27a8a40e702bfd580a46d77294f59fabc0998be1ae4480f1abb9fed1->enter($__internal_53e2047b27a8a40e702bfd580a46d77294f59fabc0998be1ae4480f1abb9fed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_frontOff.html.twig"));

        // line 1
        echo "<nav class=\"top-bar\" data-topbar role=\"navigation\">
    <ul class=\"title-area\"> 
      <li class=\"name\"> 
        <h1> <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">TP web</a></h1>
      </li> 
      <li class=\"toggle-topbar menu-icon\">
        <a href=\"#\"><span>Menu</span></a>
      </li> 
    </ul> 
    <section class=\"top-bar-section\">
      <ul class=\"left\">
        <li class=\"divider\"></li>
        <li class=\"has-dropdown\"><a href=\"#\">produits</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 15
        echo "\">afficher les produits</a></li>
            <li><a href=\"";
        // line 16
        echo "\">rechercher un produit </a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 19
        echo "\">panier</a>

        </li>
        <li class=\"has-dropdown\"><a href=\"#\">mon compte</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 24
        echo "\">mes commandes</a></li>
            <li><a href=\"#\">mes coordonnées</a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
            ";
        // line 30
        if ($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) {
            // line 31
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" > Se déconnecter</a></li>
            ";
        } else {
            // line 33
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
            ";
        }
        // line 36
        echo "        </ul>
    </section> 
</nav>

";
        
        $__internal_10ba7fe2c35dbdd86918484d705ea6733021b03114f35da0568512a7aa4609ef->leave($__internal_10ba7fe2c35dbdd86918484d705ea6733021b03114f35da0568512a7aa4609ef_prof);

        
        $__internal_53e2047b27a8a40e702bfd580a46d77294f59fabc0998be1ae4480f1abb9fed1->leave($__internal_53e2047b27a8a40e702bfd580a46d77294f59fabc0998be1ae4480f1abb9fed1_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle::nav_frontOff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 36,  80 => 34,  75 => 33,  69 => 31,  67 => 30,  59 => 24,  52 => 19,  47 => 16,  44 => 15,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"top-bar\" data-topbar role=\"navigation\">
    <ul class=\"title-area\"> 
      <li class=\"name\"> 
        <h1> <a href=\"{{ path('home') }}\">TP web</a></h1>
      </li> 
      <li class=\"toggle-topbar menu-icon\">
        <a href=\"#\"><span>Menu</span></a>
      </li> 
    </ul> 
    <section class=\"top-bar-section\">
      <ul class=\"left\">
        <li class=\"divider\"></li>
        <li class=\"has-dropdown\"><a href=\"#\">produits</a>
          <ul class=\"dropdown\">
            <li><a href=\"{#{ path('produit.show') }#}\">afficher les produits</a></li>
            <li><a href=\"{#{ path('produit.add') }#}\">rechercher un produit </a></li>
          </ul>
        </li>
        <li><a href=\"{#{ path('Panier.show') }#}\">panier</a>

        </li>
        <li class=\"has-dropdown\"><a href=\"#\">mon compte</a>
          <ul class=\"dropdown\">
            <li><a href=\"{#{ path('Commande.showAll') }#}\">mes commandes</a></li>
            <li><a href=\"#\">mes coordonnées</a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
            {% if    app.user is defined %}
                <li><a href=\"{{ path('fos_user_security_logout') }}\" > Se déconnecter</a></li>
            {% else %}
                <li><a href=\"{{ path('fos_user_security_login')  }}\">Se connecter</a></li>
                <li><a href=\"{{ path('fos_user_registration_register')  }}\">S'enregistrer</a></li>
            {% endif %}
        </ul>
    </section> 
</nav>

", "projet2sdvBundle::nav_frontOff.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/nav_frontOff.html.twig");
    }
}
