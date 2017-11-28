<?php

/* projet2sdvBundle::layout.html.twig */
class __TwigTemplate_7cfe8573ed314e99a0124f7b95485990c12365596107d97da77f8854ad81ddcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_040e9af5683c4cde09fd5485d6b2c7a7bcb4aa45ccc33645ef94569c2ee3b251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040e9af5683c4cde09fd5485d6b2c7a7bcb4aa45ccc33645ef94569c2ee3b251->enter($__internal_040e9af5683c4cde09fd5485d6b2c7a7bcb4aa45ccc33645ef94569c2ee3b251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::layout.html.twig"));

        $__internal_411896085a64623b823b50eea6a4145db68f5a8baddc337a5f3076ef3637197f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411896085a64623b823b50eea6a4145db68f5a8baddc337a5f3076ef3637197f->enter($__internal_411896085a64623b823b50eea6a4145db68f5a8baddc337a5f3076ef3637197f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"http://www.iut-bm.univ-fcomte.fr/favicon.ico\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Concession</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/foundation.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" >
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/modernizr.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
  ";
        // line 13
        if (($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())))) {
            // line 14
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_ADMIN"), "method")) {
                // line 15
                echo "            ";
                $this->loadTemplate("projet2sdvBundle::nav_backOff.html.twig", "projet2sdvBundle::layout.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            } else {
                // line 17
                echo "            ";
                $this->loadTemplate("projet2sdvBundle::nav_frontOff.html.twig", "projet2sdvBundle::layout.html.twig", 17)->display($context);
                // line 18
                echo "        ";
            }
            // line 19
            echo "  ";
        } else {
            // line 20
            echo "      ";
            $this->loadTemplate("projet2sdvBundle::nav_home.html.twig", "projet2sdvBundle::layout.html.twig", 20)->display($context);
            // line 21
            echo "  ";
        }
        // line 22
        echo "


";
        // line 25
        $this->displayBlock('contenu', $context, $blocks);
        // line 28
        echo "
  ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/foundation.min.js"), "html", null, true);
        echo "\"></script>
<script>
  \$(document).foundation();
</script>
  </body>
</html>

";
        
        $__internal_040e9af5683c4cde09fd5485d6b2c7a7bcb4aa45ccc33645ef94569c2ee3b251->leave($__internal_040e9af5683c4cde09fd5485d6b2c7a7bcb4aa45ccc33645ef94569c2ee3b251_prof);

        
        $__internal_411896085a64623b823b50eea6a4145db68f5a8baddc337a5f3076ef3637197f->leave($__internal_411896085a64623b823b50eea6a4145db68f5a8baddc337a5f3076ef3637197f_prof);

    }

    // line 25
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_37a2b3bcb6ede0b8167d08fceb35dcc5470f43dafd400802682bde0960eaba34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a2b3bcb6ede0b8167d08fceb35dcc5470f43dafd400802682bde0960eaba34->enter($__internal_37a2b3bcb6ede0b8167d08fceb35dcc5470f43dafd400802682bde0960eaba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_7c3e122e66ce1ca88aa6daae643f536811bd13cc02fcde602a99490063a999e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3e122e66ce1ca88aa6daae643f536811bd13cc02fcde602a99490063a999e9->enter($__internal_7c3e122e66ce1ca88aa6daae643f536811bd13cc02fcde602a99490063a999e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 26
        echo "    Site de vente projet S3 web IUT
";
        
        $__internal_7c3e122e66ce1ca88aa6daae643f536811bd13cc02fcde602a99490063a999e9->leave($__internal_7c3e122e66ce1ca88aa6daae643f536811bd13cc02fcde602a99490063a999e9_prof);

        
        $__internal_37a2b3bcb6ede0b8167d08fceb35dcc5470f43dafd400802682bde0960eaba34->leave($__internal_37a2b3bcb6ede0b8167d08fceb35dcc5470f43dafd400802682bde0960eaba34_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5b225f2d781d18f2f012c032328c912655df49b744e3c58704d2b3d4889d083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b225f2d781d18f2f012c032328c912655df49b744e3c58704d2b3d4889d083->enter($__internal_c5b225f2d781d18f2f012c032328c912655df49b744e3c58704d2b3d4889d083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_de6957474c6468d037638c3a567bbb933545a81de29447a537fbb0865b5e4cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6957474c6468d037638c3a567bbb933545a81de29447a537fbb0865b5e4cfa->enter($__internal_de6957474c6468d037638c3a567bbb933545a81de29447a537fbb0865b5e4cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "  ";
        
        $__internal_de6957474c6468d037638c3a567bbb933545a81de29447a537fbb0865b5e4cfa->leave($__internal_de6957474c6468d037638c3a567bbb933545a81de29447a537fbb0865b5e4cfa_prof);

        
        $__internal_c5b225f2d781d18f2f012c032328c912655df49b744e3c58704d2b3d4889d083->leave($__internal_c5b225f2d781d18f2f012c032328c912655df49b744e3c58704d2b3d4889d083_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 30,  133 => 29,  122 => 26,  113 => 25,  95 => 33,  91 => 32,  88 => 31,  86 => 29,  83 => 28,  81 => 25,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  50 => 13,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"http://www.iut-bm.univ-fcomte.fr/favicon.ico\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>Concession</title>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/foundation.css') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\" >
    <script src=\"{{ asset('assets/js/vendor/modernizr.js') }}\"></script>
  </head>
  <body>
  {% if app.user is defined and app.user is not null %}
        {% if app.user.hasRole('ROLE_ADMIN') %}
            {% include \"projet2sdvBundle::nav_backOff.html.twig\" %}
        {% else   %}
            {% include \"projet2sdvBundle::nav_frontOff.html.twig\" %}
        {% endif%}
  {% else %}
      {% include \"projet2sdvBundle::nav_home.html.twig\" %}
  {% endif%}



{% block contenu %}
    Site de vente projet S3 web IUT
{% endblock %}

  {% block fos_user_content %}
  {% endblock fos_user_content %}

<script src=\"{{ asset('assets/js/vendor/jquery.js') }}\"></script>
<script src=\"{{ asset('assets/js/foundation.min.js') }}\"></script>
<script>
  \$(document).foundation();
</script>
  </body>
</html>

", "projet2sdvBundle::layout.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/layout.html.twig");
    }
}
