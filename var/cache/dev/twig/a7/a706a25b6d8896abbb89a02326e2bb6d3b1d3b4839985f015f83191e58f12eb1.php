<?php

/* projet2sdvBundle:backOff/Produit:add.html.twig */
class __TwigTemplate_3b0099911d37e9962fd19b39319e8fa6bf6f3897e7e52d39fc494135bb7b25c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("projet2sdvBundle::layout.html.twig", "projet2sdvBundle:backOff/Produit:add.html.twig", 1);
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
        $__internal_1975fbf02ac0e035b527bd7cf037eeab89147e0913c89729f7c95b6a6be0d3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1975fbf02ac0e035b527bd7cf037eeab89147e0913c89729f7c95b6a6be0d3fc->enter($__internal_1975fbf02ac0e035b527bd7cf037eeab89147e0913c89729f7c95b6a6be0d3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff/Produit:add.html.twig"));

        $__internal_da32b4e80f48660f62b007d1494f2ab0ead1005227f110abcf675ab0f3e8887e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da32b4e80f48660f62b007d1494f2ab0ead1005227f110abcf675ab0f3e8887e->enter($__internal_da32b4e80f48660f62b007d1494f2ab0ead1005227f110abcf675ab0f3e8887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet2sdvBundle:backOff/Produit:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1975fbf02ac0e035b527bd7cf037eeab89147e0913c89729f7c95b6a6be0d3fc->leave($__internal_1975fbf02ac0e035b527bd7cf037eeab89147e0913c89729f7c95b6a6be0d3fc_prof);

        
        $__internal_da32b4e80f48660f62b007d1494f2ab0ead1005227f110abcf675ab0f3e8887e->leave($__internal_da32b4e80f48660f62b007d1494f2ab0ead1005227f110abcf675ab0f3e8887e_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ec099eef4ee3b62a0546a175aaeaa7d6931afb66e10950a36f534f91f868b77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec099eef4ee3b62a0546a175aaeaa7d6931afb66e10950a36f534f91f868b77a->enter($__internal_ec099eef4ee3b62a0546a175aaeaa7d6931afb66e10950a36f534f91f868b77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        $__internal_423ae1a464b7c04afa1b07a249201a6f20d6ca7675cf4e6ad8789576d34f0c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423ae1a464b7c04afa1b07a249201a6f20d6ca7675cf4e6ad8789576d34f0c67->enter($__internal_423ae1a464b7c04afa1b07a249201a6f20d6ca7675cf4e6ad8789576d34f0c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "<form method=\"post\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produit.validFormAdd");
        echo "\">
    <div class=\"row\">
        <fieldset>
            <legend>Creer un produit (twig)</legend>
            <label>Nom :
                <input name=\"nom\"  type=\"text\"  size=\"18\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["donnees"] ?? null), "nom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["donnees"] ?? null), "nom", array()), "")) : ("")), "html", null, true);
        echo "\" />
                ";
        // line 9
        if ($this->getAttribute(($context["erreurs"] ?? null), "nom", array(), "any", true, true)) {
            // line 10
            echo "                    <small class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["erreurs"] ?? $this->getContext($context, "erreurs")), "nom", array()), "html", null, true);
            echo "</small>
                ";
        }
        // line 12
        echo "            </label>
            <label>Type :
                <select name=\"typeProduit_id\">
                    ";
        // line 15
        if (( !$this->getAttribute(($context["donnees"] ?? null), "typeProduit_id", array(), "any", true, true) || twig_test_empty($this->getAttribute(($context["donnees"] ?? $this->getContext($context, "donnees")), "typeProduit_id", array())))) {
            // line 16
            echo "                        <option value=\"\">Veuillez sélectionner un produit</option>
                    ";
        }
        // line 18
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeProduits"] ?? $this->getContext($context, "typeProduits")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeProduit"]) {
            // line 19
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeProduit"], "id", array()), "html", null, true);
            echo "\"
                                ";
            // line 20
            if (($this->getAttribute(($context["donnees"] ?? null), "typeProduit_id", array(), "any", true, true) && ($this->getAttribute($context["typeProduit"], "id", array()) == $this->getAttribute(($context["donnees"] ?? $this->getContext($context, "donnees")), "typeProduit_id", array())))) {
                echo "selected";
            }
            echo ">
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeProduit"], "libelle", array()), "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeProduit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>
                ";
        // line 25
        if ($this->getAttribute(($context["erreurs"] ?? null), "typeProduit_id", array(), "any", true, true)) {
            // line 26
            echo "                    <small class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["erreurs"] ?? $this->getContext($context, "erreurs")), "typeProduit_id", array()), "html", null, true);
            echo "</small>
                ";
        }
        // line 28
        echo "            </label>
            <label>Prix
                <input name=\"prix\"  type=\"text\"  size=\"18\" \tvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["donnees"] ?? null), "prix", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["donnees"] ?? null), "prix", array()), "")) : ("")), "html", null, true);
        echo "\"/>
                ";
        // line 31
        if ($this->getAttribute(($context["erreurs"] ?? null), "prix", array(), "any", true, true)) {
            // line 32
            echo "                    <small class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["erreurs"] ?? $this->getContext($context, "erreurs")), "prix", array()), "html", null, true);
            echo "</small>
                ";
        }
        // line 34
        echo "            </label>
            <label>Photo
                <input name=\"photo\"  type=\"text\"  size=\"18\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["donnees"] ?? null), "photo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["donnees"] ?? null), "photo", array()), "")) : ("")), "html", null, true);
        echo "\"/>
                ";
        // line 37
        if ($this->getAttribute(($context["erreurs"] ?? null), "photo", array(), "any", true, true)) {
            // line 38
            echo "                    <small class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["erreurs"] ?? $this->getContext($context, "erreurs")), "photo", array()), "html", null, true);
            echo "</small>
                ";
        }
        // line 40
        echo "            </label>
            <input type=\"submit\" name=\"creerProduit\" value=\"créer\" />
        </fieldset>
    </div>
</form>
";
        
        $__internal_423ae1a464b7c04afa1b07a249201a6f20d6ca7675cf4e6ad8789576d34f0c67->leave($__internal_423ae1a464b7c04afa1b07a249201a6f20d6ca7675cf4e6ad8789576d34f0c67_prof);

        
        $__internal_ec099eef4ee3b62a0546a175aaeaa7d6931afb66e10950a36f534f91f868b77a->leave($__internal_ec099eef4ee3b62a0546a175aaeaa7d6931afb66e10950a36f534f91f868b77a_prof);

    }

    public function getTemplateName()
    {
        return "projet2sdvBundle:backOff/Produit:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  143 => 38,  141 => 37,  137 => 36,  133 => 34,  127 => 32,  125 => 31,  121 => 30,  117 => 28,  111 => 26,  109 => 25,  106 => 24,  97 => 21,  91 => 20,  86 => 19,  81 => 18,  77 => 16,  75 => 15,  70 => 12,  64 => 10,  62 => 9,  58 => 8,  49 => 3,  40 => 2,  11 => 1,);
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
<form method=\"post\" action=\"{{ path('produit.validFormAdd') }}\">
    <div class=\"row\">
        <fieldset>
            <legend>Creer un produit (twig)</legend>
            <label>Nom :
                <input name=\"nom\"  type=\"text\"  size=\"18\" value=\"{{donnees.nom|default('')}}\" />
                {% if erreurs.nom is defined %}
                    <small class=\"error\">{{erreurs.nom}}</small>
                {% endif %}
            </label>
            <label>Type :
                <select name=\"typeProduit_id\">
                    {% if  donnees.typeProduit_id is not defined or donnees.typeProduit_id is empty   %}
                        <option value=\"\">Veuillez sélectionner un produit</option>
                    {% endif %}
                    {% for typeProduit in typeProduits %}
                        <option value=\"{{ typeProduit.id }}\"
                                {% if donnees.typeProduit_id is defined and typeProduit.id == donnees.typeProduit_id %}selected{% endif %}>
                            {{ typeProduit.libelle }}
                        </option>
                    {% endfor %}
                    </select>
                {% if erreurs.typeProduit_id is defined %}
                    <small class=\"error\">{{erreurs.typeProduit_id}}</small>
                {% endif %}
            </label>
            <label>Prix
                <input name=\"prix\"  type=\"text\"  size=\"18\" \tvalue=\"{{donnees.prix|default('')}}\"/>
                {% if erreurs.prix is defined %}
                    <small class=\"error\">{{erreurs.prix}}</small>
                {% endif %}
            </label>
            <label>Photo
                <input name=\"photo\"  type=\"text\"  size=\"18\" value=\"{{donnees.photo|default('')}}\"/>
                {% if erreurs.photo is defined %}
                    <small class=\"error\">{{erreurs.photo}}</small>
                {% endif %}
            </label>
            <input type=\"submit\" name=\"creerProduit\" value=\"créer\" />
        </fieldset>
    </div>
</form>
{% endblock %}
", "projet2sdvBundle:backOff/Produit:add.html.twig", "/var/www/html/Web/S3/Projet2/Projet2/src/projet2sdvBundle/Resources/views/backOff/Produit/add.html.twig");
    }
}
