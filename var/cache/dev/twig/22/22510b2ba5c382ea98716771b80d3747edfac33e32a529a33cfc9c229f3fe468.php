<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1c2610247c2699547dbe923227a0a5cfe5a3ef83069ffaebf6abd5bcdb24628d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_093e8f5baccf2c9c3e57c2f83877d8bd41b29e906dbed290fcd36bf6f30597b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_093e8f5baccf2c9c3e57c2f83877d8bd41b29e906dbed290fcd36bf6f30597b9->enter($__internal_093e8f5baccf2c9c3e57c2f83877d8bd41b29e906dbed290fcd36bf6f30597b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4755adeb0600cabf562ec98010efba0f7edf76e83a8a7a1dd1d868dc17d8585e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4755adeb0600cabf562ec98010efba0f7edf76e83a8a7a1dd1d868dc17d8585e->enter($__internal_4755adeb0600cabf562ec98010efba0f7edf76e83a8a7a1dd1d868dc17d8585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_093e8f5baccf2c9c3e57c2f83877d8bd41b29e906dbed290fcd36bf6f30597b9->leave($__internal_093e8f5baccf2c9c3e57c2f83877d8bd41b29e906dbed290fcd36bf6f30597b9_prof);

        
        $__internal_4755adeb0600cabf562ec98010efba0f7edf76e83a8a7a1dd1d868dc17d8585e->leave($__internal_4755adeb0600cabf562ec98010efba0f7edf76e83a8a7a1dd1d868dc17d8585e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19800b5ca7ab1d063bbbba79cfc6501dc1ef30621acbc05842d7c40a920a7a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19800b5ca7ab1d063bbbba79cfc6501dc1ef30621acbc05842d7c40a920a7a3b->enter($__internal_19800b5ca7ab1d063bbbba79cfc6501dc1ef30621acbc05842d7c40a920a7a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da90b24871207a4123719b497cc596f8fc38a42b2b5eb3e3db2d6cabfb94ca3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da90b24871207a4123719b497cc596f8fc38a42b2b5eb3e3db2d6cabfb94ca3f->enter($__internal_da90b24871207a4123719b497cc596f8fc38a42b2b5eb3e3db2d6cabfb94ca3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da90b24871207a4123719b497cc596f8fc38a42b2b5eb3e3db2d6cabfb94ca3f->leave($__internal_da90b24871207a4123719b497cc596f8fc38a42b2b5eb3e3db2d6cabfb94ca3f_prof);

        
        $__internal_19800b5ca7ab1d063bbbba79cfc6501dc1ef30621acbc05842d7c40a920a7a3b->leave($__internal_19800b5ca7ab1d063bbbba79cfc6501dc1ef30621acbc05842d7c40a920a7a3b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c972ffccfbab89ce90d74a3c9ad3d197a0f1b7fe7ab3dd637a4cbfdd8f006a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c972ffccfbab89ce90d74a3c9ad3d197a0f1b7fe7ab3dd637a4cbfdd8f006a7f->enter($__internal_c972ffccfbab89ce90d74a3c9ad3d197a0f1b7fe7ab3dd637a4cbfdd8f006a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d4e861512d96c8ea52b2cf0aa124cf4351eb15da4a3eb67c8e20daa30760f768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e861512d96c8ea52b2cf0aa124cf4351eb15da4a3eb67c8e20daa30760f768->enter($__internal_d4e861512d96c8ea52b2cf0aa124cf4351eb15da4a3eb67c8e20daa30760f768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d4e861512d96c8ea52b2cf0aa124cf4351eb15da4a3eb67c8e20daa30760f768->leave($__internal_d4e861512d96c8ea52b2cf0aa124cf4351eb15da4a3eb67c8e20daa30760f768_prof);

        
        $__internal_c972ffccfbab89ce90d74a3c9ad3d197a0f1b7fe7ab3dd637a4cbfdd8f006a7f->leave($__internal_c972ffccfbab89ce90d74a3c9ad3d197a0f1b7fe7ab3dd637a4cbfdd8f006a7f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_93366b7b2e9e27fa02a222754ea4db49017ccdc900bde5e0793150fce3d88f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93366b7b2e9e27fa02a222754ea4db49017ccdc900bde5e0793150fce3d88f80->enter($__internal_93366b7b2e9e27fa02a222754ea4db49017ccdc900bde5e0793150fce3d88f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46c8be84fc47d3d8ac2f60edc54f42f59b5e0c458ce284ed24901b183a071945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c8be84fc47d3d8ac2f60edc54f42f59b5e0c458ce284ed24901b183a071945->enter($__internal_46c8be84fc47d3d8ac2f60edc54f42f59b5e0c458ce284ed24901b183a071945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_46c8be84fc47d3d8ac2f60edc54f42f59b5e0c458ce284ed24901b183a071945->leave($__internal_46c8be84fc47d3d8ac2f60edc54f42f59b5e0c458ce284ed24901b183a071945_prof);

        
        $__internal_93366b7b2e9e27fa02a222754ea4db49017ccdc900bde5e0793150fce3d88f80->leave($__internal_93366b7b2e9e27fa02a222754ea4db49017ccdc900bde5e0793150fce3d88f80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
