<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* chapitre/show.html.twig */
class __TwigTemplate_15ad917bb031ce89fdd034e27d95daef9b36e0a971a57cd851a9af30e17bf13c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chapitre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chapitre/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "N°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 3, $this->source); })()), "number", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"border-head\" style=\"margin:auto; width: 70%\">
        <a style=\"margin-top:20px;\" class=\"btn btn-info\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_index", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\"><i class=\"fa fa-chevron-left\"></i>Revenir aux personnages</a>
        <h2 style=\"margin-bottom:30px;\">Chapitre n°";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 8, $this->source); })()), "number", [], "any", false, false, false, 8), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</h2>
        <h4>Contexte temporel : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 9, $this->source); })()), "dateContexte", [], "any", false, false, false, 9), "html", null, true);
        echo "</h4>
    </div>
<div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
    <h4>Résumé du chapitre :</h4>
    <p>";
        // line 13
        echo twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 13, $this->source); })()), "resume", [], "any", false, false, false, 13);
        echo "</p>
    <br/>
    <hr/>
    <h4>Intrigue Principal</h4>
    <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 17, $this->source); })()), "intriguePrincipale", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
    <br/>
    <hr/>
    <h4>Intrigue Principal</h4>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 21, $this->source); })()), "intrigureSecondaire", [], "any", false, false, false, 21), "html", null, true);
        echo "</p>
    <br/>
    <hr/>
    <h4>Révélation sur le personnage</h4>
    <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 25, $this->source); })()), "characterRevel", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
    <br/>
    <hr/>
    <h4>Personnages impliqué</h4>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personnages"]) || array_key_exists("personnages", $context) ? $context["personnages"] : (function () { throw new RuntimeError('Variable "personnages" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["personnage"]) {
            // line 30
            echo "        <a style=\"font-size: 16px\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_show", ["id" => twig_get_attribute($this->env, $this->source, $context["personnage"], "id", [], "any", false, false, false, 30), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "firstName", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "lastName", [], "any", false, false, false, 30), "html", null, true);
            echo "</a> <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "role", [], "any", false, false, false, 30), "html", null, true);
            echo "</span></p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
<div style=\"margin:auto; width: 70%\">

    <a style=\"margin-top:20px;\" class=\"btn btn-primary\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Modifier le chapitre</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "chapitre/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chapitre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 37,  163 => 35,  158 => 32,  143 => 30,  139 => 29,  132 => 25,  125 => 21,  118 => 17,  111 => 13,  104 => 9,  98 => 8,  94 => 7,  91 => 6,  81 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}N°{{ chapitre.number }} - {{ chapitre.title }}{% endblock %}

{% block body %}
    <div class=\"border-head\" style=\"margin:auto; width: 70%\">
        <a style=\"margin-top:20px;\" class=\"btn btn-info\" href=\"{{ path('personnages_index', {'idProjet': projet.id}) }}\"><i class=\"fa fa-chevron-left\"></i>Revenir aux personnages</a>
        <h2 style=\"margin-bottom:30px;\">Chapitre n°{{ chapitre.number }} : {{ chapitre.title }}</h2>
        <h4>Contexte temporel : {{ chapitre.dateContexte }}</h4>
    </div>
<div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
    <h4>Résumé du chapitre :</h4>
    <p>{{ chapitre.resume|raw }}</p>
    <br/>
    <hr/>
    <h4>Intrigue Principal</h4>
    <p>{{ chapitre.intriguePrincipale }}</p>
    <br/>
    <hr/>
    <h4>Intrigue Principal</h4>
    <p>{{ chapitre.intrigureSecondaire }}</p>
    <br/>
    <hr/>
    <h4>Révélation sur le personnage</h4>
    <p>{{ chapitre.characterRevel }}</p>
    <br/>
    <hr/>
    <h4>Personnages impliqué</h4>
    {% for personnage in personnages %}
        <a style=\"font-size: 16px\" href=\"{{ path('personnages_show', {'id':personnage.id, 'idProjet': projet.id}) }}\"> {{ personnage.firstName }} {{ personnage.lastName }}</a> <span class=\"badge badge-primary\">{{ personnage.role }}</span></p>
    {% endfor %}
</div>
<div style=\"margin:auto; width: 70%\">

    <a style=\"margin-top:20px;\" class=\"btn btn-primary\" href=\"{{ path('chapitre_edit', {'id': chapitre.id, 'idProjet': projet.id}) }}\">Modifier le chapitre</a>

    {{ include('chapitre/_delete_form.html.twig') }}
</div>
{% endblock %}
", "chapitre/show.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/chapitre/show.html.twig");
    }
}
