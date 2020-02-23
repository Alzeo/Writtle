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

/* highconcept/show.html.twig */
class __TwigTemplate_9c41ad1ada5ea120ec1f8ebb880ad7284ec80da9a302eda568ca48d341d962c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "highconcept/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "highconcept/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "highconcept/show.html.twig", 1);
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

        echo "Highconcept de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<div class=\"main-chart\" style=\"padding:50px;\">
    <div class=\"border-head\">
        <a style=\"margin-top:20px;\" class=\"btn btn-info\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_index");
        echo "\"><i class=\"fa fa-chevron-left\"></i> revenir au projet</a>
    <h3 style=\"margin-bottom:30px; margin-top:40px;\">HighConcept de : ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"section-block\" style=\"padding:30px;\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 15, $this->source); })()), "protagoniste", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center; font-weight: bold\"> VS </p>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center\"> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 25, $this->source); })()), "antagoniste", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                </div>
            </div>

        </div>
            <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
            <h4 style=\"color:#5bbfde\">l'histoire se déroule :</h4>
        <p style=\"font-size:16px;\">
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 33, $this->source); })()), "contexte", [], "any", false, false, false, 33), "html", null, true);
        echo "
        </p>
        </div>
            <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                 <h4 style=\"color:#5bbfde\">jusqu'au moment déclencheur</h4>
                 <p style=\"font-size:16px;\">
                    ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 39, $this->source); })()), "eventStart", [], "any", false, false, false, 39), "html", null, true);
        echo "
                </p>
            </div>
        <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
            <h4 style=\"color:#5bbfde\">Les enjeux</h4>
            <p style=\"font-size:16px;\">
                ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 45, $this->source); })()), "stake", [], "any", false, false, false, 45), "html", null, true);
        echo "
            </p>
        </div>
    </div>
    <a class=\"btn btn-primary\" style=\"margin-bottom:20px;\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("highconcept_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["highconcept"]) || array_key_exists("highconcept", $context) ? $context["highconcept"] : (function () { throw new RuntimeError('Variable "highconcept" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        echo "\">Modifier</a>

    ";
        // line 51
        echo twig_include($this->env, $context, "highconcept/_delete_form.html.twig");
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "highconcept/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 51,  155 => 49,  148 => 45,  139 => 39,  130 => 33,  119 => 25,  106 => 15,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Highconcept de {{ projet.name }}{% endblock %}

{% block body %}
<div class=\"main-chart\" style=\"padding:50px;\">
    <div class=\"border-head\">
        <a style=\"margin-top:20px;\" class=\"btn btn-info\" href=\"{{ path('projets_index') }}\"><i class=\"fa fa-chevron-left\"></i> revenir au projet</a>
    <h3 style=\"margin-bottom:30px; margin-top:40px;\">HighConcept de : {{ projet.name }}</h3>
    </div>
    <div class=\"section-block\" style=\"padding:30px;\">
        <div class=\"row\">
            <div class=\"col-md-5\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center\"> {{ highconcept.protagoniste }}</p>
                </div>
            </div>
            <div class=\"col-md-2\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center; font-weight: bold\"> VS </p>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                    <p style=\"font-size:20px; text-align: center\"> {{ highconcept.antagoniste }}</p>
                </div>
            </div>

        </div>
            <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
            <h4 style=\"color:#5bbfde\">l'histoire se déroule :</h4>
        <p style=\"font-size:16px;\">
            {{ highconcept.contexte }}
        </p>
        </div>
            <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
                 <h4 style=\"color:#5bbfde\">jusqu'au moment déclencheur</h4>
                 <p style=\"font-size:16px;\">
                    {{  highconcept.eventStart }}
                </p>
            </div>
        <div class=\"step\" style=\"padding:40px; margin-bottom:20px; background:#fff; \">
            <h4 style=\"color:#5bbfde\">Les enjeux</h4>
            <p style=\"font-size:16px;\">
                {{ highconcept.stake }}
            </p>
        </div>
    </div>
    <a class=\"btn btn-primary\" style=\"margin-bottom:20px;\" href=\"{{ path('highconcept_edit', {'id': highconcept.id, 'idProjet': projet.id}) }}\">Modifier</a>

    {{ include('highconcept/_delete_form.html.twig') }}
</div>

{% endblock %}
", "highconcept/show.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/highconcept/show.html.twig");
    }
}
