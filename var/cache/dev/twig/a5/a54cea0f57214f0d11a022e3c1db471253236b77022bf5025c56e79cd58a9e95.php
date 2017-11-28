<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_397bc6bb7f46b9fd82ef362ae6afe1d29c28068d983e3a986a504704e9a55f8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_1513a1f1b73694610fa8231c2898e8f9865b9faf281b7df8d4f4ef0f350548b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1513a1f1b73694610fa8231c2898e8f9865b9faf281b7df8d4f4ef0f350548b5->enter($__internal_1513a1f1b73694610fa8231c2898e8f9865b9faf281b7df8d4f4ef0f350548b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_fa560b19f3ad4a7072b9ee20bbe83cd7321ff434edff54658bf171002e033bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa560b19f3ad4a7072b9ee20bbe83cd7321ff434edff54658bf171002e033bc1->enter($__internal_fa560b19f3ad4a7072b9ee20bbe83cd7321ff434edff54658bf171002e033bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1513a1f1b73694610fa8231c2898e8f9865b9faf281b7df8d4f4ef0f350548b5->leave($__internal_1513a1f1b73694610fa8231c2898e8f9865b9faf281b7df8d4f4ef0f350548b5_prof);

        
        $__internal_fa560b19f3ad4a7072b9ee20bbe83cd7321ff434edff54658bf171002e033bc1->leave($__internal_fa560b19f3ad4a7072b9ee20bbe83cd7321ff434edff54658bf171002e033bc1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c1e06ddd7720fcb0b29ba69246f9740452de825a866f234ed9ac93a252e4881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1e06ddd7720fcb0b29ba69246f9740452de825a866f234ed9ac93a252e4881->enter($__internal_5c1e06ddd7720fcb0b29ba69246f9740452de825a866f234ed9ac93a252e4881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db4dd958885900491fb09d628ca89e32eb93ecbbc9cd109cd585235e36919289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4dd958885900491fb09d628ca89e32eb93ecbbc9cd109cd585235e36919289->enter($__internal_db4dd958885900491fb09d628ca89e32eb93ecbbc9cd109cd585235e36919289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_db4dd958885900491fb09d628ca89e32eb93ecbbc9cd109cd585235e36919289->leave($__internal_db4dd958885900491fb09d628ca89e32eb93ecbbc9cd109cd585235e36919289_prof);

        
        $__internal_5c1e06ddd7720fcb0b29ba69246f9740452de825a866f234ed9ac93a252e4881->leave($__internal_5c1e06ddd7720fcb0b29ba69246f9740452de825a866f234ed9ac93a252e4881_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/Web/S3/Projet2/mon_projet_3_1_v6_fos_user/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
