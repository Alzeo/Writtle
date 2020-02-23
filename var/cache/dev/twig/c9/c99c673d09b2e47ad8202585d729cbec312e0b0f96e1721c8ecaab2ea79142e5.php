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

/* projets/show.html.twig */
class __TwigTemplate_48d3067c9b7db1063e8d3d3c62fff3306da0ddf9d61e289137722c257015d5bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projets/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projets/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projets/show.html.twig", 1);
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

        echo "Projet : ";
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
        echo "    ";
        // line 20
        echo "
    <div class=\"jumbotron mt-4\" style=\"background-image: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/2268152.jpg"), "html", null, true);
        echo "); background-size: cover \">
        <div class=\"container mb-4\" style=\"background:#fff; padding: 20px;\">
            <h1 style=\"text-transform: uppercase;\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo " <em style=\"font-size:13px; text-transform: initial\">Créé le : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 23, $this->source); })()), "createdAt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</em><a style=\"float: right; color:#fff;\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" class=\"btn btn-warning\"><i class=\"fas fa-pencil-alt\"></i></a></h1>
            <hr/>
            <h5>Résumé :</h5>
            <p>";
        // line 26
        echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 26, $this->source); })()), "resume", [], "any", false, false, false, 26)), 0, 600) . twig_convert_encoding("...", "UTF-8", "iso-2022-jp")), "html", null, true);
        echo " <a data-toggle=\"modal\" data-target=\"#resume\"> Voir la totalité</a> </p>
        </div>
        <div class=\"container\">
            <div class=\"actions row\" style=\"display: inline-block\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_index");
        echo "\" class=\"btn btn-info\" style=\"margin-bottom:20px; margin-top:20px;\">Retourner à mes projets</a>

                ";
        // line 32
        echo twig_include($this->env, $context, "projets/_delete_form.html.twig");
        echo "
            </div>
        </div>
    </div>

<div class=\"mt\">
    <!-- SERVER STATUS PANELS -->
    <div class=\"col-md-4 col-sm-4 mb\">
        <div class=\"white-panel pn donut-chart\">
            <div class=\"white-header\">
                <h5>High concept</h5>
            </div>
            ";
        // line 44
        if ( !twig_test_empty((isset($context["HC"]) || array_key_exists("HC", $context) ? $context["HC"] : (function () { throw new RuntimeError('Variable "HC" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["HC"]);
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["HC"]) {
                // line 46
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/79-with-flag copie.png"), "html", null, true);
                echo "\" style=\"width: 150px\" class=\"mt\">
                <a class=\"btn btn-info\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("highconcept_show", ["id" => twig_get_attribute($this->env, $this->source, $context["HC"], "id", [], "any", false, false, false, 47), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Besoin de voir le highconcept ?</a>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['HC'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            ";
        } else {
            // line 51
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/60-being-happy-and-showing-a-notepad copie.png"), "html", null, true);
            echo "\" style=\"width: 150px\" class=\"mt\">
            <a class=\"btn btn-success\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("highconcept_new", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Démarrer le high Concept</a>
            ";
        }
        // line 54
        echo "
        </div>
        <!-- /grey-panel -->
    </div>
    <div class=\"col-md-4 col-sm-4 mb\">
        <div class=\"white-panel pn donut-chart\">
            <div class=\"white-header\">
                <h5>Personnages ";
        // line 61
        if ( !twig_test_empty((isset($context["personnages"]) || array_key_exists("personnages", $context) ? $context["personnages"] : (function () { throw new RuntimeError('Variable "personnages" does not exist.', 61, $this->source); })()))) {
            echo " <span class=\"badge bg-theme\">";
            echo twig_escape_filter($this->env, (isset($context["totalPersonnages"]) || array_key_exists("totalPersonnages", $context) ? $context["totalPersonnages"] : (function () { throw new RuntimeError('Variable "totalPersonnages" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</span> ";
        } else {
            echo " ";
        }
        echo "</h5>
            </div>
            <a class=\"btn btn-info\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_index", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">Tous les personnages</a>
            <a class=\"btn btn-success\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_new", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
        echo "\">Nouveau personnage</a>
            ";
        // line 65
        if ( !twig_test_empty((isset($context["personnages"]) || array_key_exists("personnages", $context) ? $context["personnages"] : (function () { throw new RuntimeError('Variable "personnages" does not exist.', 65, $this->source); })()))) {
            // line 66
            echo "                <div class=\"table-pad\" style=\"padding: 20px;\">
                    <table class=\"table table-b stordered mt-4\" style=\"padding:20px;\">
                        <thead class=\"thead-light\">
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody style=\"background:#fff\">
                        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["personnages"]) || array_key_exists("personnages", $context) ? $context["personnages"] : (function () { throw new RuntimeError('Variable "personnages" does not exist.', 77, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["personnage"]) {
                // line 78
                echo "                            <tr>
                                <td>";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "firstName", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                                <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "lastName", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                                <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnage"], "role", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                                <td>
                                    <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_show", ["id" => twig_get_attribute($this->env, $this->source, $context["personnage"], "id", [], "any", false, false, false, 83), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"font-size:14px;\">Voir</a>
                                    <a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["personnage"], "id", [], "any", false, false, false, 84), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\" style=\"font-size:14px;\">Editer</a>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 88
                echo "                            <tr>
                                <td colspan=\"5\">Aucun personnage</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                        </tbody>
                    </table>
                </div>

            ";
        } else {
            // line 97
            echo "               <p> Il n'y aucun personnage dans ton histoire ?</p>
            ";
        }
        // line 99
        echo "        </div>
    </div>
        <div class=\"col-md-4 col-sm-4 mb\">
            <div class=\"white-panel pn donut-chart\">
                <div class=\"white-header\">
                    <h5>Chapitres ";
        // line 104
        if ( !twig_test_empty((isset($context["chapitres"]) || array_key_exists("chapitres", $context) ? $context["chapitres"] : (function () { throw new RuntimeError('Variable "chapitres" does not exist.', 104, $this->source); })()))) {
            echo " <span class=\"badge bg-theme\">";
            echo twig_escape_filter($this->env, (isset($context["totalChapitres"]) || array_key_exists("totalChapitres", $context) ? $context["totalChapitres"] : (function () { throw new RuntimeError('Variable "totalChapitres" does not exist.', 104, $this->source); })()), "html", null, true);
            echo "</span> ";
        } else {
            echo " ";
        }
        echo "</h5>
                </div>
                <a class=\"btn btn-info\" href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_index", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        echo "\"> Tous les chapitres</a>
                <a class=\"btn btn-success\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_new", ["idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\"> Nouveau chapitre</a>
                ";
        // line 108
        if ( !twig_test_empty((isset($context["chapitres"]) || array_key_exists("chapitres", $context) ? $context["chapitres"] : (function () { throw new RuntimeError('Variable "chapitres" does not exist.', 108, $this->source); })()))) {
            // line 109
            echo "                    <div class=\"table-pad\" style=\"padding: 20px;\">
                        <table class=\"table table-b stordered mt-4\" style=\"padding:20px;\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>N°</th>
                                <th>Titre</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody style=\"background:#fff\">
                            ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["chapitres"]) || array_key_exists("chapitres", $context) ? $context["chapitres"] : (function () { throw new RuntimeError('Variable "chapitres" does not exist.', 119, $this->source); })()), 0, 2));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
                // line 120
                echo "                                <tr>
                                    <td>";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "number", [], "any", false, false, false, 121), "html", null, true);
                echo "</td>
                                    <td>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "title", [], "any", false, false, false, 122), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_show", ["id" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 124), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\" class=\"btn btn-primary\" style=\"font-size:14px;\">Voir</a>
                                        <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "id", [], "any", false, false, false, 125), "idProjet" => twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\" class=\"btn btn-outline-primary\" style=\"font-size:14px;\">Editer</a>
                                    </td>
                                </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 129
                echo "                                <tr>
                                    <td colspan=\"5\">Aucun chapitre</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                            </tbody>
                        </table>
                    </div>

                ";
        } else {
            // line 138
            echo "                    <p> Il n'y aucun chapitre dans ton histoire ?</p>
                ";
        }
        // line 140
        echo "            </div>
        </div>
    <div class=\"modal fade\" id=\"resume\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"resumeContenu\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"resumeContenu\">Résumé<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button></h5>

                </div>
                <div class=\"modal-body\">
                   <p>";
        // line 152
        echo twig_get_attribute($this->env, $this->source, (isset($context["projet"]) || array_key_exists("projet", $context) ? $context["projet"] : (function () { throw new RuntimeError('Variable "projet" does not exist.', 152, $this->source); })()), "resume", [], "any", false, false, false, 152);
        echo "</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projets/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 152,  362 => 140,  358 => 138,  351 => 133,  342 => 129,  333 => 125,  329 => 124,  324 => 122,  320 => 121,  317 => 120,  312 => 119,  300 => 109,  298 => 108,  294 => 107,  290 => 106,  279 => 104,  272 => 99,  268 => 97,  261 => 92,  252 => 88,  243 => 84,  239 => 83,  234 => 81,  230 => 80,  226 => 79,  223 => 78,  218 => 77,  205 => 66,  203 => 65,  199 => 64,  195 => 63,  184 => 61,  175 => 54,  170 => 52,  165 => 51,  162 => 50,  156 => 49,  149 => 47,  144 => 46,  138 => 45,  136 => 44,  121 => 32,  116 => 30,  109 => 26,  99 => 23,  94 => 21,  91 => 20,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Projet : {{ projet.name }}{% endblock %}

{% block body %}
    {#
    <div class=\"main-chart\" style=\"padding:50px;\">
        <div class=\"book\">
            <div class=\"border-head\">
                <h2>{{ projet.name }}</h2>
            </div>
            <a href=\"{{ path('projets_index') }}\">back to list</a>

            <a href=\"{{ path('projets_edit', {'id': projet.id}) }}\">edit</a>

            {{ include('projets/_delete_form.html.twig') }}
        </div>
    </div>
    #}

    <div class=\"jumbotron mt-4\" style=\"background-image: url({{ asset ('/assets/img/2268152.jpg') }}); background-size: cover \">
        <div class=\"container mb-4\" style=\"background:#fff; padding: 20px;\">
            <h1 style=\"text-transform: uppercase;\">{{ projet.name }} <em style=\"font-size:13px; text-transform: initial\">Créé le : {{ projet.createdAt|date('d/m/Y') }}</em><a style=\"float: right; color:#fff;\" href=\"{{ path('projets_edit', {'id': projet.id}) }}\" class=\"btn btn-warning\"><i class=\"fas fa-pencil-alt\"></i></a></h1>
            <hr/>
            <h5>Résumé :</h5>
            <p>{{ projet.resume|raw|striptags|slice(0, 600) ~ '...'|raw|convert_encoding('UTF-8', 'iso-2022-jp') }} <a data-toggle=\"modal\" data-target=\"#resume\"> Voir la totalité</a> </p>
        </div>
        <div class=\"container\">
            <div class=\"actions row\" style=\"display: inline-block\">
                <a href=\"{{ path('projets_index') }}\" class=\"btn btn-info\" style=\"margin-bottom:20px; margin-top:20px;\">Retourner à mes projets</a>

                {{ include('projets/_delete_form.html.twig') }}
            </div>
        </div>
    </div>

<div class=\"mt\">
    <!-- SERVER STATUS PANELS -->
    <div class=\"col-md-4 col-sm-4 mb\">
        <div class=\"white-panel pn donut-chart\">
            <div class=\"white-header\">
                <h5>High concept</h5>
            </div>
            {% if HC is not empty %}
                {% for HC in HC %}
                    <img src=\"{{ asset('assets/img/79-with-flag copie.png') }}\" style=\"width: 150px\" class=\"mt\">
                <a class=\"btn btn-info\" href=\"{{ path('highconcept_show', {'id': HC.id, 'idProjet': projet.id,}) }}\">Besoin de voir le highconcept ?</a>
                {% else %}
                    {% endfor %}
            {% else %}
                <img src=\"{{ asset('assets/img/60-being-happy-and-showing-a-notepad copie.png') }}\" style=\"width: 150px\" class=\"mt\">
            <a class=\"btn btn-success\" href=\"{{ path('highconcept_new', {'idProjet': projet.id}) }}\">Démarrer le high Concept</a>
            {% endif %}

        </div>
        <!-- /grey-panel -->
    </div>
    <div class=\"col-md-4 col-sm-4 mb\">
        <div class=\"white-panel pn donut-chart\">
            <div class=\"white-header\">
                <h5>Personnages {% if personnages is not empty %} <span class=\"badge bg-theme\">{{ totalPersonnages }}</span> {% else %} {% endif %}</h5>
            </div>
            <a class=\"btn btn-info\" href=\"{{ path('personnages_index', {'idProjet': projet.id}) }}\">Tous les personnages</a>
            <a class=\"btn btn-success\" href=\"{{ path('personnages_new', {'idProjet': projet.id}) }}\">Nouveau personnage</a>
            {% if personnages is not empty %}
                <div class=\"table-pad\" style=\"padding: 20px;\">
                    <table class=\"table table-b stordered mt-4\" style=\"padding:20px;\">
                        <thead class=\"thead-light\">
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody style=\"background:#fff\">
                        {% for personnage in personnages %}
                            <tr>
                                <td>{{ personnage.firstName }}</td>
                                <td>{{ personnage.lastName }}</td>
                                <td>{{ personnage.role }}</td>
                                <td>
                                    <a href=\"{{ path('personnages_show', {'id': personnage.id, 'idProjet': projet.id}) }}\" class=\"btn btn-primary\" style=\"font-size:14px;\">Voir</a>
                                    <a href=\"{{ path('personnages_edit', {'id': personnage.id, 'idProjet': projet.id}) }}\" class=\"btn btn-outline-primary\" style=\"font-size:14px;\">Editer</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\">Aucun personnage</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>

            {% else %}
               <p> Il n'y aucun personnage dans ton histoire ?</p>
            {% endif %}
        </div>
    </div>
        <div class=\"col-md-4 col-sm-4 mb\">
            <div class=\"white-panel pn donut-chart\">
                <div class=\"white-header\">
                    <h5>Chapitres {% if chapitres is not empty %} <span class=\"badge bg-theme\">{{ totalChapitres }}</span> {% else %} {% endif %}</h5>
                </div>
                <a class=\"btn btn-info\" href=\"{{ path('chapitre_index', {'idProjet': projet.id}) }}\"> Tous les chapitres</a>
                <a class=\"btn btn-success\" href=\"{{ path('chapitre_new', {'idProjet': projet.id}) }}\"> Nouveau chapitre</a>
                {% if chapitres is not empty %}
                    <div class=\"table-pad\" style=\"padding: 20px;\">
                        <table class=\"table table-b stordered mt-4\" style=\"padding:20px;\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>N°</th>
                                <th>Titre</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody style=\"background:#fff\">
                            {% for chapitre in chapitres|slice(0, 2) %}
                                <tr>
                                    <td>{{ chapitre.number }}</td>
                                    <td>{{ chapitre.title }}</td>
                                    <td>
                                        <a href=\"{{ path('chapitre_show', {'id': chapitre.id, 'idProjet': projet.id}) }}\" class=\"btn btn-primary\" style=\"font-size:14px;\">Voir</a>
                                        <a href=\"{{ path('chapitre_edit', {'id': chapitre.id, 'idProjet': projet.id}) }}\" class=\"btn btn-outline-primary\" style=\"font-size:14px;\">Editer</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"5\">Aucun chapitre</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                {% else %}
                    <p> Il n'y aucun chapitre dans ton histoire ?</p>
                {% endif %}
            </div>
        </div>
    <div class=\"modal fade\" id=\"resume\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"resumeContenu\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title text-center\" id=\"resumeContenu\">Résumé<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button></h5>

                </div>
                <div class=\"modal-body\">
                   <p>{{ projet.resume|raw }}</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "projets/show.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/projets/show.html.twig");
    }
}
