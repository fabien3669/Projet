<?php

/* projet2sdvBundle::nav_backOff.html.twig */
class __TwigTemplate_31c3bf929d8aa2d98b657653c461c26df2459503025c9d158e772c1c79aab958 extends Twig_Template
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
        $__internal_d7a2dd70f06682c76275560f33607c8ff5e1544944718595f3afc87176d6dc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a2dd70f06682c76275560f33607c8ff5e1544944718595f3afc87176d6dc7f->enter($__internal_d7a2dd70f06682c76275560f33607c8ff5e1544944718595f3afc87176d6dc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_backOff.html.twig"));

        $__internal_f196479c1ad777d8caa381b0b55f4f7dcea8ed71b9c16d75de6c478d7d4c0d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f196479c1ad777d8caa381b0b55f4f7dcea8ed71b9c16d75de6c478d7d4c0d9c->enter($__internal_f196479c1ad777d8caa381b0b55f4f7dcea8ed71b9c16d75de6c478d7d4c0d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_backOff.html.twig"));

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
        <li class=\"has-dropdown\"><a href=\"#\">commandes</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 15
        echo "\"> gestion des commandes </a></li>
          </ul>
        </li>
        <li class=\"has-dropdown\"><a href=\"#\">produit</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.add");
        echo "\"> créer un produit </a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.show");
        echo "\">afficher/editer/supprimer les produits</a></li>
          </ul>
        </li>
        <li class=\"has-dropdown\"><a href=\"#\">clients</a>
          <ul class=\"dropdown\">
            <li><a href=\"#\"> gestion des clients </a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
";
        // line 32
        echo "                ";
        // line 33
        echo "                ";
        // line 34
        echo "            ";
        // line 35
        echo "                ";
        // line 36
        echo "            ";
        // line 37
        echo "
            ";
        // line 38
        if ($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) {
            // line 39
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" > Se déconnecter</a></li>
            ";
        } else {
            // line 41
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
            ";
        }
        // line 44
        echo "        </ul>
    </section> 
</nav>
";
        
        $__internal_d7a2dd70f06682c76275560f33607c8ff5e1544944718595f3afc87176d6dc7f->leave($__internal_d7a2dd70f06682c76275560f33607c8ff5e1544944718595f3afc87176d6dc7f_prof);

        
        $__internal_f196479c1ad777d8caa381b0b55f4f7dcea8ed71b9c16d75de6c478d7d4c0d9c->leave($__internal_f196479c1ad777d8caa381b0b55f4f7dcea8ed71b9c16d75de6c478d7d4c0d9c_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle::nav_backOff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  94 => 42,  89 => 41,  83 => 39,  81 => 38,  78 => 37,  76 => 36,  74 => 35,  72 => 34,  70 => 33,  68 => 32,  55 => 21,  51 => 20,  44 => 15,  30 => 4,  25 => 1,);
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
        <li class=\"has-dropdown\"><a href=\"#\">commandes</a>
          <ul class=\"dropdown\">
            <li><a href=\"{#{  path('GestionCommande.showGestion') }#}\"> gestion des commandes </a></li>
          </ul>
        </li>
        <li class=\"has-dropdown\"><a href=\"#\">produit</a>
          <ul class=\"dropdown\">
            <li><a href=\"{{ path('produit.add') }}\"> créer un produit </a></li>
            <li><a href=\"{{ path('produit.show') }}\">afficher/editer/supprimer les produits</a></li>
          </ul>
        </li>
        <li class=\"has-dropdown\"><a href=\"#\">clients</a>
          <ul class=\"dropdown\">
            <li><a href=\"#\"> gestion des clients </a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
{#            {% if   app.session.get('logged') is defined and  app.session.get('logged') == 1 %}#}
                {#<li class=\"name\" style=\"color: #d58512\">Connecté en tant que : {{ app.session.get('username') }}</li>#}
                {#<li><a href=\"#}{##}{#{ path('user.logout')  }#}{##}{#\">Se déconnecter</a></li>#}
            {#{% else %}#}
                {#<li><a href=\"#}{##}{#{ path('user.login')  }#}{##}{#\">Se connecter</a></li>#}
            {#{% endif %}#}

            {% if    app.user is defined %}
                <li><a href=\"{{ path('fos_user_security_logout') }}\" > Se déconnecter</a></li>
            {% else %}
                <li><a href=\"{{ path('fos_user_security_login')  }}\">Se connecter</a></li>
                <li><a href=\"{{ path('fos_user_registration_register')  }}\">S'enregistrer</a></li>
            {% endif %}
        </ul>
    </section> 
</nav>
", "projet2sdvBundle::nav_backOff.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/nav_backOff.html.twig");
    }
}
