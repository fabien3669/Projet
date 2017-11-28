<?php

/* projet2sdvBundle::nav_home.html.twig */
class __TwigTemplate_4e2bfdb124c35dec0f4ab279d4289fdfc02cf9b149660914834ff98993666dd4 extends Twig_Template
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
        $__internal_716b5e6588272aec33e2212104a0b68546717d48a6d2ce6c8d096dfc8925ae2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716b5e6588272aec33e2212104a0b68546717d48a6d2ce6c8d096dfc8925ae2e->enter($__internal_716b5e6588272aec33e2212104a0b68546717d48a6d2ce6c8d096dfc8925ae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_home.html.twig"));

        $__internal_b2ebbd4c0073cf4e951ce1acf63d455dc55f239bfa33f66693b0c5cf97abe788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ebbd4c0073cf4e951ce1acf63d455dc55f239bfa33f66693b0c5cf97abe788->enter($__internal_b2ebbd4c0073cf4e951ce1acf63d455dc55f239bfa33f66693b0c5cf97abe788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::nav_home.html.twig"));

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
        <li class=\"has-dropdown\"><a href=\"#\">produit</a>
          <ul class=\"dropdown\">
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.show");
        echo "\">afficher les produits</a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
            ";
        // line 20
        if (($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())))) {
            // line 21
            echo "                <li class=\"name\" style=\"color: #d58512\">Connecté en tant que : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " </li>
                <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" > Se déconnecter</a></li>
                ";
            // line 23
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
                echo " administration ";
            }
            // line 24
            echo "            ";
        } else {
            // line 25
            echo "                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
            ";
        }
        // line 28
        echo "        </ul>
    </section> 
</nav>
";
        
        $__internal_716b5e6588272aec33e2212104a0b68546717d48a6d2ce6c8d096dfc8925ae2e->leave($__internal_716b5e6588272aec33e2212104a0b68546717d48a6d2ce6c8d096dfc8925ae2e_prof);

        
        $__internal_b2ebbd4c0073cf4e951ce1acf63d455dc55f239bfa33f66693b0c5cf97abe788->leave($__internal_b2ebbd4c0073cf4e951ce1acf63d455dc55f239bfa33f66693b0c5cf97abe788_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle::nav_home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 28,  75 => 26,  70 => 25,  67 => 24,  63 => 23,  59 => 22,  54 => 21,  52 => 20,  44 => 15,  30 => 4,  25 => 1,);
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
        <li class=\"has-dropdown\"><a href=\"#\">produit</a>
          <ul class=\"dropdown\">
            <li><a href=\"{{ path('produit.show') }}\">afficher les produits</a></li>
          </ul>
        </li>
      </ul>
        <ul class=\"right\">
            {% if    app.user is defined and app.user is not null %}
                <li class=\"name\" style=\"color: #d58512\">Connecté en tant que : {{ app.user.username }} </li>
                <li><a href=\"{{ path('fos_user_security_logout') }}\" > Se déconnecter</a></li>
                {% if app.user.hasRole('ROLE_ADMIN') %} administration {% endif %}
            {% else %}
                <li><a href=\"{{ path('fos_user_security_login')  }}\">Se connecter</a></li>
                <li><a href=\"{{ path('fos_user_registration_register')  }}\">S'enregistrer</a></li>
            {% endif %}
        </ul>
    </section> 
</nav>
", "projet2sdvBundle::nav_home.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/nav_home.html.twig");
    }
}
