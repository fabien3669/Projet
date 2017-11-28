<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_462a1ca018458cfc2eea4660297591fe35129192fbf19c7b5d06cb074bfbb934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1985b3420a9420c2475be6c18b9ae2ecf66b0414c0ed4501c32e1db3a28df9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1985b3420a9420c2475be6c18b9ae2ecf66b0414c0ed4501c32e1db3a28df9a4->enter($__internal_1985b3420a9420c2475be6c18b9ae2ecf66b0414c0ed4501c32e1db3a28df9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f56579284706a552d172673f9f81060e4100137c8a965985473d32f267990e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56579284706a552d172673f9f81060e4100137c8a965985473d32f267990e4d->enter($__internal_f56579284706a552d172673f9f81060e4100137c8a965985473d32f267990e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1985b3420a9420c2475be6c18b9ae2ecf66b0414c0ed4501c32e1db3a28df9a4->leave($__internal_1985b3420a9420c2475be6c18b9ae2ecf66b0414c0ed4501c32e1db3a28df9a4_prof);

        
        $__internal_f56579284706a552d172673f9f81060e4100137c8a965985473d32f267990e4d->leave($__internal_f56579284706a552d172673f9f81060e4100137c8a965985473d32f267990e4d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa4367792f58783f023063c9532cb3079f3ad24c08b205c73b40fa44f046c07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4367792f58783f023063c9532cb3079f3ad24c08b205c73b40fa44f046c07e->enter($__internal_fa4367792f58783f023063c9532cb3079f3ad24c08b205c73b40fa44f046c07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bcac61fa92b7f57b6f2304ff365afdd7f1f21d200a1ca39d1285d340dc1a2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bcac61fa92b7f57b6f2304ff365afdd7f1f21d200a1ca39d1285d340dc1a2d0->enter($__internal_8bcac61fa92b7f57b6f2304ff365afdd7f1f21d200a1ca39d1285d340dc1a2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bcac61fa92b7f57b6f2304ff365afdd7f1f21d200a1ca39d1285d340dc1a2d0->leave($__internal_8bcac61fa92b7f57b6f2304ff365afdd7f1f21d200a1ca39d1285d340dc1a2d0_prof);

        
        $__internal_fa4367792f58783f023063c9532cb3079f3ad24c08b205c73b40fa44f046c07e->leave($__internal_fa4367792f58783f023063c9532cb3079f3ad24c08b205c73b40fa44f046c07e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8317757a45ae5b8b440e1b7b92aa7a2ba2e519b25358e335cf91bf8e6132571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8317757a45ae5b8b440e1b7b92aa7a2ba2e519b25358e335cf91bf8e6132571->enter($__internal_d8317757a45ae5b8b440e1b7b92aa7a2ba2e519b25358e335cf91bf8e6132571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0da58b99f46c57930845401e93db579342031d39a17616ddf7d26c86110cbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0da58b99f46c57930845401e93db579342031d39a17616ddf7d26c86110cbeb->enter($__internal_c0da58b99f46c57930845401e93db579342031d39a17616ddf7d26c86110cbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0da58b99f46c57930845401e93db579342031d39a17616ddf7d26c86110cbeb->leave($__internal_c0da58b99f46c57930845401e93db579342031d39a17616ddf7d26c86110cbeb_prof);

        
        $__internal_d8317757a45ae5b8b440e1b7b92aa7a2ba2e519b25358e335cf91bf8e6132571->leave($__internal_d8317757a45ae5b8b440e1b7b92aa7a2ba2e519b25358e335cf91bf8e6132571_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffeb21827189a7258270989c8469e8bd5af9c04c0875295e336804402728fd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffeb21827189a7258270989c8469e8bd5af9c04c0875295e336804402728fd75->enter($__internal_ffeb21827189a7258270989c8469e8bd5af9c04c0875295e336804402728fd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d132f4aa72510b427c9faa4ec97a35c935457c24e2166043157d47c108d70531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d132f4aa72510b427c9faa4ec97a35c935457c24e2166043157d47c108d70531->enter($__internal_d132f4aa72510b427c9faa4ec97a35c935457c24e2166043157d47c108d70531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d132f4aa72510b427c9faa4ec97a35c935457c24e2166043157d47c108d70531->leave($__internal_d132f4aa72510b427c9faa4ec97a35c935457c24e2166043157d47c108d70531_prof);

        
        $__internal_ffeb21827189a7258270989c8469e8bd5af9c04c0875295e336804402728fd75->leave($__internal_ffeb21827189a7258270989c8469e8bd5af9c04c0875295e336804402728fd75_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
