<?php

/* projet2sdvBundle:Security:login_content.html.twig */
class __TwigTemplate_4abc1ce432e97d7c2af399939e7b79e8f7ee67faf7c76e4974b0471b1b300573 extends Twig_Template
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
        $__internal_f9afb1a88cccf828362530c1ce0a9bb2d43980dc13ca0ec69a5c2f9a0afb94c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9afb1a88cccf828362530c1ce0a9bb2d43980dc13ca0ec69a5c2f9a0afb94c8->enter($__internal_f9afb1a88cccf828362530c1ce0a9bb2d43980dc13ca0ec69a5c2f9a0afb94c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:Security:login_content.html.twig"));

        $__internal_100b0dc60c8199e5abd34a69ecb10775092775ad1389805d84b6b9f8b855dbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100b0dc60c8199e5abd34a69ecb10775092775ad1389805d84b6b9f8b855dbd5->enter($__internal_100b0dc60c8199e5abd34a69ecb10775092775ad1389805d84b6b9f8b855dbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"row\">
<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 9
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "
    <label for=\"username\">votre Login";
        // line 13
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">votre Mot de passe";
        // line 16
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\"> se souvenir de moi ";
        // line 20
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"connexion";
        // line 22
        echo "\" />
</form>
</div>";
        
        $__internal_f9afb1a88cccf828362530c1ce0a9bb2d43980dc13ca0ec69a5c2f9a0afb94c8->leave($__internal_f9afb1a88cccf828362530c1ce0a9bb2d43980dc13ca0ec69a5c2f9a0afb94c8_prof);

        
        $__internal_100b0dc60c8199e5abd34a69ecb10775092775ad1389805d84b6b9f8b855dbd5->leave($__internal_100b0dc60c8199e5abd34a69ecb10775092775ad1389805d84b6b9f8b855dbd5_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  69 => 20,  63 => 16,  58 => 14,  55 => 13,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"row\">
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <label for=\"username\">votre Login{#{ 'security.login.username'|trans }#}</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">votre Mot de passe{#{ 'security.login.password'|trans }#}</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\"> se souvenir de moi {#{ 'security.login.remember_me'|trans }#}</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"connexion{#{ 'security.login.submit'|trans }#}\" />
</form>
</div>", "projet2sdvBundle:Security:login_content.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/Security/login_content.html.twig");
    }
}
