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

/* personnages/show.html.twig */
class __TwigTemplate_31fe23d3a443538082e4e8d1baa5ec7886d81989c0c56104d9ad1d3efceca2f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnages/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnages/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnages/show.html.twig", 1);
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

        echo "Fiche de : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
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
        <h2 style=\"margin-bottom:30px;\">Fiche de : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 8, $this->source); })()), "lastName", [], "any", false, false, false, 8), "html", null, true);
        echo " <span class=\"badge badge-primary\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 8, $this->source); })()), "role", [], "any", false, false, false, 8), "html", null, true);
        echo "</span></h2>
    </div>

    <div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
        <div class=\"col-sm-6\">
            <div class=\"row\">
                <div class=\"container\">

                        <p><b>Âge :</b> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 16, $this->source); })()), "age", [], "any", false, false, false, 16), "html", null, true);
        echo " ans</p>
                        <p><b>Genre :</b> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 17, $this->source); })()), "genre", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                        <p><b>Taille :</b> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 18, $this->source); })()), "taille", [], "any", false, false, false, 18), "html", null, true);
        echo " cm</p>
                        <p><b>Poids :</b> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 19, $this->source); })()), "poids", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
       <div class=\"col-sm-6\">
            <div class=\"row\">
                <div class=\"container\">
                    <p><b>Surnom :</b> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 26, $this->source); })()), "surname", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                        <p><b>Ville de naissance :</b> ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 27, $this->source); })()), "placeBorn", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                        <p><b>Lieu de résidence :</b> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 28, $this->source); })()), "residence", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                        <p><b>profession  :</b> ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 29, $this->source); })()), "profession", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt\">
            <div class=\"container formulaire\" style=\"margin:auto; width: 70%\">
                <h3>Description du personnage</h3>
                <p>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
            </div>
        </div>

        <div class=\"mt\">
            <div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"container\">

                            <p><b>Accessoires :</b> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 47, $this->source); })()), "accessoires", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                            <p><b>Style vestimentaire :</b> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 48, $this->source); })()), "tenue", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                            <p><b>Taille :</b> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 49, $this->source); })()), "tiqueParole", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                            <p><b>Poids :</b> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 50, $this->source); })()), "croyances", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"container\">
                            <p><b>Surnom :</b> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 57, $this->source); })()), "qualites", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                            <p><b>Ville de naissance :</b> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 58, $this->source); })()), "defauts", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                            <p><b>Lieu de résidence :</b> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 59, $this->source); })()), "addictions", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                            <p><b>profession  :</b> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 60, $this->source); })()), "weakness", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                            <p><b>profession  :</b> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 61, $this->source); })()), "education", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style=\"margin:auto; width: 70%\">

                <a class=\"btn btn-primary\" style=\"margin-top:20px;\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["personnage"]) || array_key_exists("personnage", $context) ? $context["personnage"] : (function () { throw new RuntimeError('Variable "personnage" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\">Modifier</a>

                ";
        // line 71
        echo twig_include($this->env, $context, "personnages/_delete_form.html.twig");
        echo "
            </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "personnages/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 71,  220 => 69,  209 => 61,  205 => 60,  201 => 59,  197 => 58,  193 => 57,  183 => 50,  179 => 49,  175 => 48,  171 => 47,  158 => 37,  147 => 29,  143 => 28,  139 => 27,  135 => 26,  125 => 19,  121 => 18,  117 => 17,  113 => 16,  98 => 8,  94 => 7,  91 => 6,  81 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fiche de : {{ personnage.firstName }} {{ personnage.lastName }}{% endblock %}

{% block body %}
    <div class=\"border-head\" style=\"margin:auto; width: 70%\">
        <a style=\"margin-top:20px;\" class=\"btn btn-info\" href=\"{{ path('personnages_index', {'idProjet': projet.id}) }}\"><i class=\"fa fa-chevron-left\"></i>Revenir aux personnages</a>
        <h2 style=\"margin-bottom:30px;\">Fiche de : {{ personnage.firstName }} {{ personnage.lastName }} <span class=\"badge badge-primary\">{{ personnage.role }}</span></h2>
    </div>

    <div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
        <div class=\"col-sm-6\">
            <div class=\"row\">
                <div class=\"container\">

                        <p><b>Âge :</b> {{ personnage.age }} ans</p>
                        <p><b>Genre :</b> {{ personnage.genre }}</p>
                        <p><b>Taille :</b> {{ personnage.taille }} cm</p>
                        <p><b>Poids :</b> {{ personnage.poids }}</p>
                </div>
            </div>
        </div>
       <div class=\"col-sm-6\">
            <div class=\"row\">
                <div class=\"container\">
                    <p><b>Surnom :</b> {{ personnage.surname }}</p>
                        <p><b>Ville de naissance :</b> {{ personnage.placeBorn }}</p>
                        <p><b>Lieu de résidence :</b> {{ personnage.residence }}</p>
                        <p><b>profession  :</b> {{ personnage.profession }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"mt\">
            <div class=\"container formulaire\" style=\"margin:auto; width: 70%\">
                <h3>Description du personnage</h3>
                <p>{{ personnage.description }}</p>
            </div>
        </div>

        <div class=\"mt\">
            <div class=\"formulaire container\" style=\"margin:auto; width: 70%\">
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"container\">

                            <p><b>Accessoires :</b> {{ personnage.accessoires }}</p>
                            <p><b>Style vestimentaire :</b> {{ personnage.tenue }}</p>
                            <p><b>Taille :</b> {{ personnage.tiqueParole }}</p>
                            <p><b>Poids :</b> {{ personnage.croyances }}</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"container\">
                            <p><b>Surnom :</b> {{ personnage.qualites }}</p>
                            <p><b>Ville de naissance :</b> {{ personnage.defauts }}</p>
                            <p><b>Lieu de résidence :</b> {{ personnage.addictions }}</p>
                            <p><b>profession  :</b> {{ personnage.weakness }}</p>
                            <p><b>profession  :</b> {{ personnage.education }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style=\"margin:auto; width: 70%\">

                <a class=\"btn btn-primary\" style=\"margin-top:20px;\" href=\"{{ path('personnages_edit', {'id': personnage.id, 'idProjet': projet.id}) }}\">Modifier</a>

                {{ include('personnages/_delete_form.html.twig') }}
            </div>
    </div>
</div>
{% endblock %}
", "personnages/show.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/personnages/show.html.twig");
    }
}
