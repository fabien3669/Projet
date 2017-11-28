<?php

/* projet2sdvBundle::accueil.html.twig */
class __TwigTemplate_a7fdbccd0edbca5664eb89dba58deff76a5a89a8a18be394fc519bd90d6a123f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projet2sdvBundle::layout.html.twig", "projet2sdvBundle::accueil.html.twig", 1);
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
        $__internal_87d7ff93690feff564e139dbcd4678962426b1ef210ad3f4e847d8e11676b510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d7ff93690feff564e139dbcd4678962426b1ef210ad3f4e847d8e11676b510->enter($__internal_87d7ff93690feff564e139dbcd4678962426b1ef210ad3f4e847d8e11676b510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::accueil.html.twig"));

        $__internal_ecaa85239d5753056fcbf05046e81e2e1a28ea40facb6670c5d67e2a68225514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecaa85239d5753056fcbf05046e81e2e1a28ea40facb6670c5d67e2a68225514->enter($__internal_ecaa85239d5753056fcbf05046e81e2e1a28ea40facb6670c5d67e2a68225514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d7ff93690feff564e139dbcd4678962426b1ef210ad3f4e847d8e11676b510->leave($__internal_87d7ff93690feff564e139dbcd4678962426b1ef210ad3f4e847d8e11676b510_prof);

        
        $__internal_ecaa85239d5753056fcbf05046e81e2e1a28ea40facb6670c5d67e2a68225514->leave($__internal_ecaa85239d5753056fcbf05046e81e2e1a28ea40facb6670c5d67e2a68225514_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d9d4b160bb6cc9405d7c449e394791c2c44be5ed2bb44267e8650cc8e9d2464a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d4b160bb6cc9405d7c449e394791c2c44be5ed2bb44267e8650cc8e9d2464a->enter($__internal_d9d4b160bb6cc9405d7c449e394791c2c44be5ed2bb44267e8650cc8e9d2464a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_d2f1f0b89f53c90f38f5e1028cc06992d97512699a13f523c36bbefdbc0921aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f1f0b89f53c90f38f5e1028cc06992d97512699a13f523c36bbefdbc0921aa->enter($__internal_d2f1f0b89f53c90f38f5e1028cc06992d97512699a13f523c36bbefdbc0921aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "
\t<h1> Projet 2 web : site de vente Accueil </h1>

";
        
        $__internal_d2f1f0b89f53c90f38f5e1028cc06992d97512699a13f523c36bbefdbc0921aa->leave($__internal_d2f1f0b89f53c90f38f5e1028cc06992d97512699a13f523c36bbefdbc0921aa_prof);

        
        $__internal_d9d4b160bb6cc9405d7c449e394791c2c44be5ed2bb44267e8650cc8e9d2464a->leave($__internal_d9d4b160bb6cc9405d7c449e394791c2c44be5ed2bb44267e8650cc8e9d2464a_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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

\t<h1> Projet 2 web : site de vente Accueil </h1>

{% endblock %}

", "projet2sdvBundle::accueil.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/accueil.html.twig");
    }
}
