<?php

/* projet2sdvBundle:backOff/Produit:show.html.twig */
class __TwigTemplate_d875ba990f5dab1f08b736fd49f24ad21e7dd946f85311bf917c069f07d5df62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projet2sdvBundle::layout.html.twig", "projet2sdvBundle:backOff/Produit:show.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "projet2sdvBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9eff998eda67ddf27263054ff32b8ec8df08b28219d28a905101b8bbf41bdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9eff998eda67ddf27263054ff32b8ec8df08b28219d28a905101b8bbf41bdd5->enter($__internal_f9eff998eda67ddf27263054ff32b8ec8df08b28219d28a905101b8bbf41bdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff/Produit:show.html.twig"));

        $__internal_7620a3d235bf347d8d3160a2bf963807a7bf3d01e17a0e6a6e60a08907b7e48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7620a3d235bf347d8d3160a2bf963807a7bf3d01e17a0e6a6e60a08907b7e48b->enter($__internal_7620a3d235bf347d8d3160a2bf963807a7bf3d01e17a0e6a6e60a08907b7e48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff/Produit:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9eff998eda67ddf27263054ff32b8ec8df08b28219d28a905101b8bbf41bdd5->leave($__internal_f9eff998eda67ddf27263054ff32b8ec8df08b28219d28a905101b8bbf41bdd5_prof);

        
        $__internal_7620a3d235bf347d8d3160a2bf963807a7bf3d01e17a0e6a6e60a08907b7e48b->leave($__internal_7620a3d235bf347d8d3160a2bf963807a7bf3d01e17a0e6a6e60a08907b7e48b_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0e7605b38aee42998a34f178aebaacabd9a89868a32a6ba37aaea1a80df02c32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7605b38aee42998a34f178aebaacabd9a89868a32a6ba37aaea1a80df02c32->enter($__internal_0e7605b38aee42998a34f178aebaacabd9a89868a32a6ba37aaea1a80df02c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_3b70362b6ed308dba1b752f04b8a8f68bf7669398cd60e66170c479328f01ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b70362b6ed308dba1b752f04b8a8f68bf7669398cd60e66170c479328f01ab2->enter($__internal_3b70362b6ed308dba1b752f04b8a8f68bf7669398cd60e66170c479328f01ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t<div class=\"row\">
\t\t";
        // line 4
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "droit"), "method", true, true) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "droit"), "method") == "DROITadmin"))) {
            // line 5
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.add");
            echo "\"> Ajouter un produit </a>
\t\t";
        }
        // line 7
        echo "
\t\t<table>
\t\t\t<caption>Recapitulatifs des produits (avec twig)</caption>
\t\t\t<thead>
\t\t\t<tr><th>nom</th><th>id</th><th>type</th><th>prix</th><th>nom photo</th><th>photo</th>
\t\t\t\t";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "droit"), "method", true, true) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "droit"), "method") == "DROITadmin"))) {
            // line 13
            echo "\t\t\t\t\t<th>opération</th>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            if ( !twig_test_empty(($context["data"] ?? $this->getContext($context, "data")))) {
                // line 19
                echo "
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
                echo "</td><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
                echo "</td><td>
\t\t\t\t\t\t";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "photo", array()), "html", null, true);
                echo "</td><td>
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "photo", array()), "html", null, true);
                echo "\" alt=\"image de ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "libelle", array()), "html", null, true);
                echo "\" >
\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 26
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.edit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">modifier</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.delete", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 31
                echo "\t\t\t\t</tr>
\t\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t<tbody>
\t\t</table>
\t</div>
";
        
        $__internal_3b70362b6ed308dba1b752f04b8a8f68bf7669398cd60e66170c479328f01ab2->leave($__internal_3b70362b6ed308dba1b752f04b8a8f68bf7669398cd60e66170c479328f01ab2_prof);

        
        $__internal_0e7605b38aee42998a34f178aebaacabd9a89868a32a6ba37aaea1a80df02c32->leave($__internal_0e7605b38aee42998a34f178aebaacabd9a89868a32a6ba37aaea1a80df02c32_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle:backOff/Produit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  121 => 31,  116 => 28,  112 => 27,  109 => 26,  101 => 23,  97 => 22,  87 => 21,  83 => 19,  78 => 18,  73 => 15,  69 => 13,  67 => 12,  60 => 7,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"projet2sdvBundle::layout.html.twig\" %}
{% block contenu %}
\t<div class=\"row\">
\t\t{% if   app.session.get('droit') is defined and  app.session.get('droit') == 'DROITadmin' %}
\t\t\t<a href=\"{{ path('produit.add') }}\"> Ajouter un produit </a>
\t\t{% endif %}

\t\t<table>
\t\t\t<caption>Recapitulatifs des produits (avec twig)</caption>
\t\t\t<thead>
\t\t\t<tr><th>nom</th><th>id</th><th>type</th><th>prix</th><th>nom photo</th><th>photo</th>
\t\t\t\t{% if   app.session.get('droit') is defined and  app.session.get('droit') == 'DROITadmin' %}
\t\t\t\t\t<th>opération</th>
\t\t\t\t{% endif %}
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for produit in data if data is not empty %}

\t\t\t\t<tr>
\t\t\t\t\t<td>{{produit.nom}}</td><td>{{produit.id}}</td><td>{{produit.libelle}}</td><td>{{produit.prix}}</td><td>
\t\t\t\t\t\t{{produit.photo}}</td><td>
\t\t\t\t\t\t<img style=\"width:40px;height:40px\" src=\"{{asset('images/')}}{{produit.photo}}\" alt=\"image de {{produit.libelle}}\" >
\t\t\t\t\t</td>
\t\t\t\t\t{#%  if   app.session.get('droit') is defined and  app.session.get('droit') == 'DROITadmin' %#}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('produit.edit', {id: produit.id}) }}\">modifier</a>
\t\t\t\t\t\t\t<a href=\"{{ path('produit.delete', {id: produit.id}) }}\">supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t{#% endif %#}
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tbody>
\t\t</table>
\t</div>
{% endblock %}

", "projet2sdvBundle:backOff/Produit:show.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/backOff/Produit/show.html.twig");
    }
}
