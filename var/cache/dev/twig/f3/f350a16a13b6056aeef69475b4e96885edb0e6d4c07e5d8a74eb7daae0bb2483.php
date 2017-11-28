<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_3320d51ad91284b9a37d3e58fc67ba18242f253fd06c25fb267aa5786ab4691d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f38994492bfe896b8cef3cc99ed276e0eccd0f4a7c9f8c335f6bf746512960a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f38994492bfe896b8cef3cc99ed276e0eccd0f4a7c9f8c335f6bf746512960a->enter($__internal_3f38994492bfe896b8cef3cc99ed276e0eccd0f4a7c9f8c335f6bf746512960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_24b80cb1184321b4e97fe3a9dd76902cd029508bfef77889c6286b19a4de3607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b80cb1184321b4e97fe3a9dd76902cd029508bfef77889c6286b19a4de3607->enter($__internal_24b80cb1184321b4e97fe3a9dd76902cd029508bfef77889c6286b19a4de3607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f38994492bfe896b8cef3cc99ed276e0eccd0f4a7c9f8c335f6bf746512960a->leave($__internal_3f38994492bfe896b8cef3cc99ed276e0eccd0f4a7c9f8c335f6bf746512960a_prof);

        
        $__internal_24b80cb1184321b4e97fe3a9dd76902cd029508bfef77889c6286b19a4de3607->leave($__internal_24b80cb1184321b4e97fe3a9dd76902cd029508bfef77889c6286b19a4de3607_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42f399ebb627f550409d20b0f07212b2a01afcd0ca366cfabf172eae571c3aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f399ebb627f550409d20b0f07212b2a01afcd0ca366cfabf172eae571c3aeb->enter($__internal_42f399ebb627f550409d20b0f07212b2a01afcd0ca366cfabf172eae571c3aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_abd889ad5aedaabbc2510a6f39582993b1a4da5d900a141ca423932d2e74f5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abd889ad5aedaabbc2510a6f39582993b1a4da5d900a141ca423932d2e74f5f9->enter($__internal_abd889ad5aedaabbc2510a6f39582993b1a4da5d900a141ca423932d2e74f5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_abd889ad5aedaabbc2510a6f39582993b1a4da5d900a141ca423932d2e74f5f9->leave($__internal_abd889ad5aedaabbc2510a6f39582993b1a4da5d900a141ca423932d2e74f5f9_prof);

        
        $__internal_42f399ebb627f550409d20b0f07212b2a01afcd0ca366cfabf172eae571c3aeb->leave($__internal_42f399ebb627f550409d20b0f07212b2a01afcd0ca366cfabf172eae571c3aeb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/Web/S3/Projet2/mon_projet_3_1_v6_fos_user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
