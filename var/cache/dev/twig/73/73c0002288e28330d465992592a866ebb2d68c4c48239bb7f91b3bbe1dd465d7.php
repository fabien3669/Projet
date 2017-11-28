<?php

/* projet2sdvBundle:backOff:backOFFICE.html.twig */
class __TwigTemplate_85a790f6611ecca121e6bc43527b16ca58c72ee65dcc92f0da82b66d564479b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projet2sdvBundle::layout.html.twig", "projet2sdvBundle:backOff:backOFFICE.html.twig", 1);
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
        $__internal_e0c39f9d8ca876fdef798231e47af4d2e9196c7540bd8047ffe32771181abe8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c39f9d8ca876fdef798231e47af4d2e9196c7540bd8047ffe32771181abe8a->enter($__internal_e0c39f9d8ca876fdef798231e47af4d2e9196c7540bd8047ffe32771181abe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff:backOFFICE.html.twig"));

        $__internal_4806434f081c09eb062260212aa5762e22f5d74b5373a3c840c43e3ecd3f49aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4806434f081c09eb062260212aa5762e22f5d74b5373a3c840c43e3ecd3f49aa->enter($__internal_4806434f081c09eb062260212aa5762e22f5d74b5373a3c840c43e3ecd3f49aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff:backOFFICE.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0c39f9d8ca876fdef798231e47af4d2e9196c7540bd8047ffe32771181abe8a->leave($__internal_e0c39f9d8ca876fdef798231e47af4d2e9196c7540bd8047ffe32771181abe8a_prof);

        
        $__internal_4806434f081c09eb062260212aa5762e22f5d74b5373a3c840c43e3ecd3f49aa->leave($__internal_4806434f081c09eb062260212aa5762e22f5d74b5373a3c840c43e3ecd3f49aa_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_712df01e9217b22589d66fae5ef0e9c8e6c722b715db37efe0b01e4f10aec6e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712df01e9217b22589d66fae5ef0e9c8e6c722b715db37efe0b01e4f10aec6e1->enter($__internal_712df01e9217b22589d66fae5ef0e9c8e6c722b715db37efe0b01e4f10aec6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_d77e925038b59295d1a729fdc38d124f76bd72d4a58c341e9ac99e8f4f7fd00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77e925038b59295d1a729fdc38d124f76bd72d4a58c341e9ac99e8f4f7fd00c->enter($__internal_d77e925038b59295d1a729fdc38d124f76bd72d4a58c341e9ac99e8f4f7fd00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "
\t<h1> Projet 2 web : site de vente espace Admin </h1>

";
        
        $__internal_d77e925038b59295d1a729fdc38d124f76bd72d4a58c341e9ac99e8f4f7fd00c->leave($__internal_d77e925038b59295d1a729fdc38d124f76bd72d4a58c341e9ac99e8f4f7fd00c_prof);

        
        $__internal_712df01e9217b22589d66fae5ef0e9c8e6c722b715db37efe0b01e4f10aec6e1->leave($__internal_712df01e9217b22589d66fae5ef0e9c8e6c722b715db37efe0b01e4f10aec6e1_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle:backOff:backOFFICE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

\t<h1> Projet 2 web : site de vente espace Admin </h1>

{% endblock %}

", "projet2sdvBundle:backOff:backOFFICE.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/backOff/backOFFICE.html.twig");
    }
}
