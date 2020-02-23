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

/* user/show.html.twig */
class __TwigTemplate_23a013ad10b7b540bf58f1be37806f54aa65601d0055af963663051528c4511f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "Tableau de bord - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "
    ";
        // line 32
        echo "
";
        // line 51
        echo "
    ";
        // line 55
        echo "
    <section id=\"main-content\">
        <section class=\"wrapper\">
            <h2>Bienvenue sur votre tableau bord</h2>
            <h4>Qu'est-ce qu'on fait ?</h4>
            <div class=\"row mt\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 62
            echo "                    <div class=\"col-md-4 col-sm-4 mb\">
                        <div class=\"white-panel pn donut-chart\">
                            <div class=\"white-header\">
                                <h3><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</a></h3>
                            </div>
                            <span style=\"font-style: italic;\">Créé le : <i>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["projet"], "createdAt", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "createdAt", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</i></span>

                            <p class=\"text-justify\">";
            // line 69
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["projet"], "resume", [], "any", false, false, false, 69)), 0, 500) . "..."), "html", null, true);
            echo "</p>
                            <a class=\"btn btn-info\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_show", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i> Voir</a>
                            <a class=\"btn btn-primary\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\"><i class=\"fa fa-cog\"></i> Modifier</a>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "                    <div class=\"text-center\">
                        <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/68-searching-with-magnifying-glass copie.png"), "html", null, true);
            echo "\" style=\"width: 400px\">
                        <h2>Tu n'as pour le moment aucun projet</h2>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
            </div>
        </section>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 80,  148 => 76,  145 => 75,  136 => 71,  132 => 70,  128 => 69,  123 => 67,  116 => 65,  111 => 62,  106 => 61,  98 => 55,  95 => 51,  92 => 32,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord - {{ user.username }}{% endblock %}

{% block body %}

    {#
      <div class=\"jumbotron text-center\"  style=\"background: #81A8C1;\">
        <h4 style=\"font-size: 24px; color:#fff; margin-top:35px;\">{{ user.username }}</h4>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm\">
                </div>
                <div class=\"col-sm\" style=\"color:#fff; margin-top: 30px;\">
                        <div class=\"row\">
                            <div class=\"col-sm\">
                            </div>
                            <div class=\"col-sm\">
                                1 <br/>
                                Projets
                            </div>
                            <div class=\"col-sm\">
                            </div>
                        </div>
                </div>
                <div class=\"col-sm\">
                </div>
            </div>
        </div>
    </div>
    #}

{# <nav class=\"navbar navbar-expand-lg navbar-light bg-white border-bottom box-shadow tabmenu\" style=\"margin-top:-32px; background: #fff;\">
    <div class=\"collapse navbar-collapse container\" id=\"navbarNav\">
        <ul class=\"navbar-nav\" style=\"margin:auto; font-size: large\">
            <li class=\"nav-item\" style=\"padding-right:20px; margin-right:20px; border-right:1px solid gainsboro\">
                <a href=\"#\"class=\" nav-link current\">Tableau de bord</a>
            </li>
            <li class=\"nav-item\" style=\"padding-right:20px; margin-right:20px; border-right:1px solid gainsboro\">
                <a href=\"#\"  class=\"nav-link\">Projets</a>
            </li>
            <li class=\"nav-item\" style=\"padding-right:20px; margin-right:20px; border-right:1px solid gainsboro\">
                <a href=\"#\"  class=\"nav-link\">Chapitres</a>
            </li>
            <li class=\"nav-item\" style=\"padding-right:20px; margin-right:20px; border-right:1px solid gainsboro\">
                <a href=\"#\" class=\"nav-link\">Personnages</a>
            </li>
        </ul>
    </div>
</nav> #}

    {#  <a href=\"{{ path('profil_edit', {'id': user.id}) }}\" class=\"btn btn-light\"><i class=\"fas fa-cog\"></i> Modifier mon profil</a>

    {{ include('user/_delete_form.html.twig') }} #}

    <section id=\"main-content\">
        <section class=\"wrapper\">
            <h2>Bienvenue sur votre tableau bord</h2>
            <h4>Qu'est-ce qu'on fait ?</h4>
            <div class=\"row mt\">
                {% for projet in projets %}
                    <div class=\"col-md-4 col-sm-4 mb\">
                        <div class=\"white-panel pn donut-chart\">
                            <div class=\"white-header\">
                                <h3><a href=\"{{ path('projets_show', {'id': projet.id}) }}\"> {{ projet.name }}</a></h3>
                            </div>
                            <span style=\"font-style: italic;\">Créé le : <i>{{ projet.createdAt ? projet.createdAt|date('d-m-Y') : '' }}</i></span>

                            <p class=\"text-justify\">{{ projet.resume|striptags|slice(0, 500) ~ '...' }}</p>
                            <a class=\"btn btn-info\" href=\"{{ path('projets_show', {'id': projet.id}) }}\"><i class=\"fa fa-eye\"></i> Voir</a>
                            <a class=\"btn btn-primary\" href=\"{{ path('projets_edit', {'id': projet.id}) }}\"><i class=\"fa fa-cog\"></i> Modifier</a>
                        </div>
                    </div>
                {% else %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('assets/img/68-searching-with-magnifying-glass copie.png') }}\" style=\"width: 400px\">
                        <h2>Tu n'as pour le moment aucun projet</h2>
                    </div>
                {% endfor %}

            </div>
        </section>
    </section>

{% endblock %}
", "user/show.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/user/show.html.twig");
    }
}
