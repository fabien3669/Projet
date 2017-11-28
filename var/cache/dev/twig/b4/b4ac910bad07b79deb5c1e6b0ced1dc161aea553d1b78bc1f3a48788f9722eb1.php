<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_81faf4f81c52739da9092b151a38cfefbcf161af21a8f60ae4983768ff068d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5b8f9cb848abc8c6a55c5cc07ea387cd47fc611a18c681dae35405f25638fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b8f9cb848abc8c6a55c5cc07ea387cd47fc611a18c681dae35405f25638fda->enter($__internal_a5b8f9cb848abc8c6a55c5cc07ea387cd47fc611a18c681dae35405f25638fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_195c14d1417f2882a740936f832188454bc93420d307600263eab8ab78c003bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195c14d1417f2882a740936f832188454bc93420d307600263eab8ab78c003bb->enter($__internal_195c14d1417f2882a740936f832188454bc93420d307600263eab8ab78c003bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b8f9cb848abc8c6a55c5cc07ea387cd47fc611a18c681dae35405f25638fda->leave($__internal_a5b8f9cb848abc8c6a55c5cc07ea387cd47fc611a18c681dae35405f25638fda_prof);

        
        $__internal_195c14d1417f2882a740936f832188454bc93420d307600263eab8ab78c003bb->leave($__internal_195c14d1417f2882a740936f832188454bc93420d307600263eab8ab78c003bb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90ff7ff2fc858fccec5c8a5d37efd42d6c9aa4b0c472daf0ed250c5a6595ba75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90ff7ff2fc858fccec5c8a5d37efd42d6c9aa4b0c472daf0ed250c5a6595ba75->enter($__internal_90ff7ff2fc858fccec5c8a5d37efd42d6c9aa4b0c472daf0ed250c5a6595ba75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_417ce5a9ffd0959a64f835a6433ab69d733d76ba80fd9184c2e8a9bc1828417b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417ce5a9ffd0959a64f835a6433ab69d733d76ba80fd9184c2e8a9bc1828417b->enter($__internal_417ce5a9ffd0959a64f835a6433ab69d733d76ba80fd9184c2e8a9bc1828417b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_417ce5a9ffd0959a64f835a6433ab69d733d76ba80fd9184c2e8a9bc1828417b->leave($__internal_417ce5a9ffd0959a64f835a6433ab69d733d76ba80fd9184c2e8a9bc1828417b_prof);

        
        $__internal_90ff7ff2fc858fccec5c8a5d37efd42d6c9aa4b0c472daf0ed250c5a6595ba75->leave($__internal_90ff7ff2fc858fccec5c8a5d37efd42d6c9aa4b0c472daf0ed250c5a6595ba75_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9f9d27558de60d4c614b81fe088d34a8bd258c5f0d232c6edbea508e97e6c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f9d27558de60d4c614b81fe088d34a8bd258c5f0d232c6edbea508e97e6c4d->enter($__internal_a9f9d27558de60d4c614b81fe088d34a8bd258c5f0d232c6edbea508e97e6c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94f4553d6ac0ab1ad197209de7a994b7bf3502b89d14b5bea5ea9baf801e7138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f4553d6ac0ab1ad197209de7a994b7bf3502b89d14b5bea5ea9baf801e7138->enter($__internal_94f4553d6ac0ab1ad197209de7a994b7bf3502b89d14b5bea5ea9baf801e7138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94f4553d6ac0ab1ad197209de7a994b7bf3502b89d14b5bea5ea9baf801e7138->leave($__internal_94f4553d6ac0ab1ad197209de7a994b7bf3502b89d14b5bea5ea9baf801e7138_prof);

        
        $__internal_a9f9d27558de60d4c614b81fe088d34a8bd258c5f0d232c6edbea508e97e6c4d->leave($__internal_a9f9d27558de60d4c614b81fe088d34a8bd258c5f0d232c6edbea508e97e6c4d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_298c7fb042507dfb51ff67596643f67a1541cff6fc0d393b95255492fdaa3c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298c7fb042507dfb51ff67596643f67a1541cff6fc0d393b95255492fdaa3c88->enter($__internal_298c7fb042507dfb51ff67596643f67a1541cff6fc0d393b95255492fdaa3c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_032df2fdd492694cae5716b5f26eb2282bb46b16a24835912a72ede52d1738c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032df2fdd492694cae5716b5f26eb2282bb46b16a24835912a72ede52d1738c4->enter($__internal_032df2fdd492694cae5716b5f26eb2282bb46b16a24835912a72ede52d1738c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_032df2fdd492694cae5716b5f26eb2282bb46b16a24835912a72ede52d1738c4->leave($__internal_032df2fdd492694cae5716b5f26eb2282bb46b16a24835912a72ede52d1738c4_prof);

        
        $__internal_298c7fb042507dfb51ff67596643f67a1541cff6fc0d393b95255492fdaa3c88->leave($__internal_298c7fb042507dfb51ff67596643f67a1541cff6fc0d393b95255492fdaa3c88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
