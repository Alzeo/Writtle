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

/* base.html.twig */
class __TwigTemplate_208d4cb96d7d3e1d3b45ca5f7d99963147a9387b28c476545e42b279f943cdf4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"img/favicon.png\" rel=\"icon\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
        <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!--external css-->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/zabuto_calendar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\">

        <!-- Custom styles for this template -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/gritter/css/jquery.gritter.css"), "html", null, true);
        echo "\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <script src=\"https://kit.fontawesome.com/00681fa20f.js\"></script>
        <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    ";
        // line 27
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    <style>
        .nav-link {
            color:#222 !important;
            font-size:16px !important;
            font-weight: 600 !important;
            font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif !important;
        }

        nav {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }

        .current {
            border-bottom:3px solid #ffc107;
        }

        .tabmenu .nav-link:hover {
            color: rgba(0, 0, 0, .7);
            border-bottom: 3px solid #ffc107;
            transition: 0.4s;
        }

        .tabmenu .nav-link {
            transition: 0.4s;
        }

        .block-equipe {
            min-height: 100vh;
        }
    </style>
</head>
<body>
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"index.html\" class=\"logo\"><b>PRI<span>SM</span></b></a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
            <!-- settings start -->
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-tasks\"></i>
                    <span class=\"badge bg-theme\">4</span>
                </a>
                <ul class=\"dropdown-menu extended tasks-bar\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">Tâche à réaliser</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Création de projet</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete (success)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Personnages</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete (warning)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Personnages</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            ";
        // line 191
        echo "
            <!-- notification dropdown start-->
            <li id=\"header_notification_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-bell-o\"></i>
                    <span class=\"badge bg-warning\">2</span>
                </a>
                <ul class=\"dropdown-menu extended notification\">
                    <div class=\"notify-arrow notify-arrow-yellow\"></div>
                    <li>
                        <p class=\"yellow\">2 notifications de Mr McBic</p>
                    </li>
                    ";
        // line 203
        if ( !twig_test_empty((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 203, $this->source); })()))) {
            // line 204
            echo "                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Hey ";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "username", [], "any", false, false, false, 207), "html", null, true);
            echo " !
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                ";
            // line 213
            echo twig_escape_filter($this->env, twig_random($this->env, [0 => "Il faut continuer ce projet !"]), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        } else {
            // line 217
            echo "                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Hey ";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "username", [], "any", false, false, false, 220), "html", null, true);
            echo " !
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                ";
            // line 226
            echo twig_escape_filter($this->env, twig_random($this->env, [0 => "Tu n'as pas encore créer de projet !"]), "html", null, true);
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 230
        echo "                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
</header>

<aside>
    <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            <p class=\"centered\"><a href=\"#\"><img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ui-girl.png"), "html", null, true);
        echo "\" width=\"80\"></a></p>
            <h5 class=\"centered\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 243, $this->source); })()), "username", [], "any", false, false, false, 243), "html", null, true);
        echo "</h5>
            <hr/>
            <li class=\"mt\">
                <a class=\"";
        // line 246
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 246, $this->source); })()) == "dashboard")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 246, $this->source); })()), "id", [], "any", false, false, false, 246)]), "html", null, true);
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 252
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 252, $this->source); })()) == "projet")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\" href=\"javascript:;\">
                    <i class=\"fa fa-book\"></i>
                    <span>Projets</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"";
        // line 257
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_index");
        echo "\"><i class=\"fa fa-th-large\"></i> Tous mes projets</a></li>
                    <li><a href=\"";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nouveau projet</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 262
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 262, $this->source); })()) == "personnages")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\" href=\"javascript:;\">
                    <i class=\"fa fa-user\"></i>
                    <span>Personnages</span>
                </a>
                <ul class=\"sub\">
                    <li><a data-toggle=\"modal\" data-target=\"#tousLesPersonnages\"><i class=\"fa fa-users\"></i> Tous mes personnages</a></li>
                    <li><a data-toggle=\"modal\" data-target=\"#nouveauPersonnage\"><i class=\"fa fa-plus-circle\"></i> Nouveau personnage</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"";
        // line 272
        if (((isset($context["current_menu"]) || array_key_exists("current_menu", $context) ? $context["current_menu"] : (function () { throw new RuntimeError('Variable "current_menu" does not exist.', 272, $this->source); })()) == "chapitres")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\" href=\"javascript:;\">
                    <i class=\"fa fa-list\"></i>
                    <span>Chapitres</span>
                </a>
                <ul class=\"sub\">
                    <li><a data-toggle=\"modal\" data-target=\"#tousLesChapitres\"><i class=\"fa fa-th-large\"></i> Tous mes chapitres</a></li>
                    <li><a data-toggle=\"modal\" data-target=\"#nouveauChapitre\"><i class=\"fa fa-plus-circle\"></i> Nouveau chapitre</a></li>
                </ul>
            </li>
            <hr/>
            <li class=\"mt\">
                <a href=\"";
        // line 283
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <i class=\"fa fa-sign-out\"></i>
                    <span>Se déconnecter</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
";
        // line 295
        $this->displayBlock('body', $context, $blocks);
        // line 298
        echo "        </div>
    </section>
</section>

<!-- Modal tous les personnages -->
<div class=\"modal fade\" id=\"tousLesPersonnages\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tousLesPersonnagesTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"tousLesPersonnagesTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 313, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 314
            echo "                        <ul>
                            <li>
                               <a href=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_index", ["idProjet" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 316)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-lg btn-block\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 316), "html", null, true);
            echo "</a>
                            </li>
                        </ul>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 320
            echo "                    <div class=\"text-center\">
                        <img src=\"";
            // line 321
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/68-searching-with-magnifying-glass copie.png"), "html", null, true);
            echo "\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"";
            // line 324
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
            echo "\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- fin modal tous les personnages -->

<!-- Modal nouveau personnages -->

<div class=\"modal fade\" id=\"nouveauPersonnage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"nouveauPersonnageTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"nouveauPersonnageTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                ";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 349, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 350
            echo "                <ul>
                    <li>
                        <a href=\"";
            // line 352
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnages_new", ["idProjet" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 352)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-lg btn-block\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 352), "html", null, true);
            echo "</a>
                    </li>
                </ul>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 356
            echo "                    <div class=\"text-center\">
                        <img src=\"";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/68-searching-with-magnifying-glass copie.png"), "html", null, true);
            echo "\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"";
            // line 360
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
            echo "\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- fin modal tous les chapitres -->

<div class=\"modal fade\" id=\"tousLesChapitres\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tousLesChapitresTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"tousLeschapitresTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 384, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 385
            echo "                <ul>
                    <li>
                        <a href=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_index", ["idProjet" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 387)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-lg btn-block\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 387), "html", null, true);
            echo "</a>
                    </li>
                </ul>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 391
            echo "                    <div class=\"text-center\">
                        <img src=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/68-searching-with-magnifying-glass copie.png"), "html", null, true);
            echo "\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"";
            // line 395
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
            echo "\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- fin modal tous les chapitres -->


<div class=\"modal fade\" id=\"nouveauChapitre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"nouveauChapitreTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"nouveauChapitreTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) || array_key_exists("projets", $context) ? $context["projets"] : (function () { throw new RuntimeError('Variable "projets" does not exist.', 420, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 421
            echo "                    <ul>
                        <li>
                            <a href=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chapitre_new", ["idProjet" => twig_get_attribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 423)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-lg btn-block\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["projet"], "name", [], "any", false, false, false, 423), "html", null, true);
            echo "</a>
                        </li>
                    </ul>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 427
            echo "                    <div class=\"text-center\">
                        <img src=\"";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/68-searching-with-magnifying-glass copie.png"), "html", null, true);
            echo "\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <p>Commencer par créer un projet</p>
                    <a href=\"";
            // line 432
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projets_new");
            echo "\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 434
        echo "            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>


<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<!--common script for all pages-->
<script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/common-scripts.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/gritter/js/jquery.gritter.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/gritter-conf.js"), "html", null, true);
        echo "\"></script>
<!--script for this page-->
<script src=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/zabuto_calendar.js"), "html", null, true);
        echo "\"></script>
<!--
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
-->
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<script>
    CKEDITOR.replace( 'projets[resume]' );
    CKEDITOR.replace( 'chapitre[resume]' );
</script>
<script>
\$(document).ready(function() {
\$('select').select2();
});
</script>
</body>
";
        // line 532
        $this->displayBlock('javascripts', $context, $blocks);
        // line 535
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 296
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 532
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 533
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 533,  820 => 532,  809 => 296,  799 => 295,  789 => 28,  779 => 27,  760 => 5,  748 => 535,  746 => 532,  668 => 457,  664 => 456,  659 => 454,  655 => 453,  651 => 452,  646 => 450,  642 => 449,  638 => 448,  634 => 447,  630 => 446,  626 => 445,  613 => 434,  605 => 432,  598 => 428,  595 => 427,  584 => 423,  580 => 421,  575 => 420,  550 => 397,  542 => 395,  536 => 392,  533 => 391,  522 => 387,  518 => 385,  513 => 384,  489 => 362,  481 => 360,  475 => 357,  472 => 356,  461 => 352,  457 => 350,  452 => 349,  427 => 326,  419 => 324,  413 => 321,  410 => 320,  399 => 316,  395 => 314,  390 => 313,  373 => 298,  371 => 295,  356 => 283,  338 => 272,  321 => 262,  314 => 258,  310 => 257,  298 => 252,  283 => 246,  277 => 243,  273 => 242,  259 => 230,  252 => 226,  243 => 220,  238 => 217,  231 => 213,  222 => 207,  217 => 204,  215 => 203,  201 => 191,  104 => 29,  102 => 27,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  76 => 16,  72 => 15,  68 => 14,  63 => 12,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>

        <link href=\"img/favicon.png\" rel=\"icon\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css\" rel=\"stylesheet\" />
        <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        <!-- Bootstrap core CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}\">
        <!--external css-->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/zabuto_calendar.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/gritter/css/jquery.gritter.css') }}\">

        <!-- Custom styles for this template -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style-responsive.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/gritter/css/jquery.gritter.css') }}\">
        <script src=\"{{ asset('assets/lib/gritter/css/jquery.gritter.css') }}\"></script>
        <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap\" rel=\"stylesheet\">
        <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">
        <script src=\"https://kit.fontawesome.com/00681fa20f.js\"></script>
        <script src=\"//cdn.ckeditor.com/4.13.1/standard/ckeditor.js\"></script>
    {% block stylesheets %}
    {% endblock %}
    <style>
        .nav-link {
            color:#222 !important;
            font-size:16px !important;
            font-weight: 600 !important;
            font-family: \"Source Sans Pro\", \"Helvetica Neue\", Helvetica, Arial, sans-serif !important;
        }

        nav {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }

        .current {
            border-bottom:3px solid #ffc107;
        }

        .tabmenu .nav-link:hover {
            color: rgba(0, 0, 0, .7);
            border-bottom: 3px solid #ffc107;
            transition: 0.4s;
        }

        .tabmenu .nav-link {
            transition: 0.4s;
        }

        .block-equipe {
            min-height: 100vh;
        }
    </style>
</head>
<body>
<header class=\"header black-bg\">
    <div class=\"sidebar-toggle-box\">
        <div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle Navigation\"></div>
    </div>
    <!--logo start-->
    <a href=\"index.html\" class=\"logo\"><b>PRI<span>SM</span></b></a>
    <!--logo end-->
    <div class=\"nav notify-row\" id=\"top_menu\">
        <!--  notification start -->
        <ul class=\"nav top-menu\">
            <!-- settings start -->
            <li class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-tasks\"></i>
                    <span class=\"badge bg-theme\">4</span>
                </a>
                <ul class=\"dropdown-menu extended tasks-bar\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">Tâche à réaliser</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Création de projet</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete (success)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Personnages</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete (warning)</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <div class=\"task-info\">
                                <div class=\"desc\">Personnages</div>
                                <div class=\"percent\">0%</div>
                            </div>
                            <div class=\"progress progress-striped\">
                                <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 2%\">
                                    <span class=\"sr-only\">0% Complete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
            {#  <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id=\"header_inbox_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-theme\">5</span>
                </a>
                <ul class=\"dropdown-menu extended inbox\">
                    <div class=\"notify-arrow notify-arrow-green\"></div>
                    <li>
                        <p class=\"green\">You have 5 new messages</p>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('assets/img/ui-zac.jpg') }}\"></span>
                            <span class=\"subject\">
                  <span class=\"from\">Zac Snider</span>
                  <span class=\"time\">Just now</span>
                  </span>
                            <span class=\"message\">
                  Hi mate, how is everything?
                  </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"{{ asset('assets/img/ui-divya.jpg') }}\"></span>
                            <span class=\"subject\">
                  <span class=\"from\">Divya Manian</span>
                  <span class=\"time\">40 mins.</span>
                  </span>
                            <span class=\"message\">
                  Hi, I need your help with this.
                  </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-danro.jpg\"></span>
                            <span class=\"subject\">
                  <span class=\"from\">Dan Rogers</span>
                  <span class=\"time\">2 hrs.</span>
                  </span>
                            <span class=\"message\">
                  Love your new Dashboard.
                  </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">
                            <span class=\"photo\"><img alt=\"avatar\" src=\"img/ui-sherman.jpg\"></span>
                            <span class=\"subject\">
                  <span class=\"from\">Dj Sherman</span>
                  <span class=\"time\">4 hrs.</span>
                  </span>
                            <span class=\"message\">
                  Please, answer asap.
                  </span>
                        </a>
                    </li>
                    <li>
                        <a href=\"index.html#\">See all messages</a>
                    </li>
                </ul>
            </li>
            <!-- inbox dropdown end -->
            #}

            <!-- notification dropdown start-->
            <li id=\"header_notification_bar\" class=\"dropdown\">
                <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"index.html#\">
                    <i class=\"fa fa-bell-o\"></i>
                    <span class=\"badge bg-warning\">2</span>
                </a>
                <ul class=\"dropdown-menu extended notification\">
                    <div class=\"notify-arrow notify-arrow-yellow\"></div>
                    <li>
                        <p class=\"yellow\">2 notifications de Mr McBic</p>
                    </li>
                    {% if projets is not empty %}
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Hey {{ user.username }} !
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                {{ random([\"Il faut continuer ce projet !\"]) }}
                            </a>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                Hey {{ user.username }} !
                            </a>
                        </li>
                        <li>
                            <a href=\"index.html#\">
                                <span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>
                                {{ random([\"Tu n'as pas encore créer de projet !\"]) }}
                            </a>
                        </li>
                        {% endif %}
                </ul>
            </li>
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>
</header>

<aside>
    <div id=\"sidebar\" class=\"nav-collapse \">
        <!-- sidebar menu start-->
        <ul class=\"sidebar-menu\" id=\"nav-accordion\">
            <p class=\"centered\"><a href=\"#\"><img src=\"{{ asset('assets/img/ui-girl.png') }}\" width=\"80\"></a></p>
            <h5 class=\"centered\">{{ user.username }}</h5>
            <hr/>
            <li class=\"mt\">
                <a class=\"{% if current_menu == 'dashboard' %} active {% else %} {% endif %}\" href=\"{{ path('profil_show', {'id': user.id}) }}\">
                    <i class=\"fa fa-dashboard\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{% if current_menu == 'projet' %} active {% else %} {% endif %}\" href=\"javascript:;\">
                    <i class=\"fa fa-book\"></i>
                    <span>Projets</span>
                </a>
                <ul class=\"sub\">
                    <li><a href=\"{{ path('projets_index') }}\"><i class=\"fa fa-th-large\"></i> Tous mes projets</a></li>
                    <li><a href=\"{{ path('projets_new') }}\"><i class=\"fa fa-plus-circle\"></i> Nouveau projet</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{% if current_menu == 'personnages' %} active {% else %} {% endif %}\" href=\"javascript:;\">
                    <i class=\"fa fa-user\"></i>
                    <span>Personnages</span>
                </a>
                <ul class=\"sub\">
                    <li><a data-toggle=\"modal\" data-target=\"#tousLesPersonnages\"><i class=\"fa fa-users\"></i> Tous mes personnages</a></li>
                    <li><a data-toggle=\"modal\" data-target=\"#nouveauPersonnage\"><i class=\"fa fa-plus-circle\"></i> Nouveau personnage</a></li>
                </ul>
            </li>
            <li class=\"sub-menu\">
                <a class=\"{% if current_menu == 'chapitres' %} active {% else %} {% endif %}\" href=\"javascript:;\">
                    <i class=\"fa fa-list\"></i>
                    <span>Chapitres</span>
                </a>
                <ul class=\"sub\">
                    <li><a data-toggle=\"modal\" data-target=\"#tousLesChapitres\"><i class=\"fa fa-th-large\"></i> Tous mes chapitres</a></li>
                    <li><a data-toggle=\"modal\" data-target=\"#nouveauChapitre\"><i class=\"fa fa-plus-circle\"></i> Nouveau chapitre</a></li>
                </ul>
            </li>
            <hr/>
            <li class=\"mt\">
                <a href=\"{{ path('app_logout') }}\">
                    <i class=\"fa fa-sign-out\"></i>
                    <span>Se déconnecter</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<section id=\"main-content\">
    <section class=\"wrapper\">
        <div class=\"row\">
{% block body %}

{% endblock %}
        </div>
    </section>
</section>

<!-- Modal tous les personnages -->
<div class=\"modal fade\" id=\"tousLesPersonnages\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tousLesPersonnagesTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"tousLesPersonnagesTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                {% for projet in projets %}
                        <ul>
                            <li>
                               <a href=\"{{ path('personnages_index', {'idProjet': projet.id}) }}\" class=\"btn btn-info btn-lg btn-block\"> {{ projet.name }}</a>
                            </li>
                        </ul>
                {% else %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('assets/img/68-searching-with-magnifying-glass copie.png') }}\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"{{ path('projets_new') }}\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                {% endfor %}
            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- fin modal tous les personnages -->

<!-- Modal nouveau personnages -->

<div class=\"modal fade\" id=\"nouveauPersonnage\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"nouveauPersonnageTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"nouveauPersonnageTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                {% for projet in projets %}
                <ul>
                    <li>
                        <a href=\"{{ path('personnages_new', {'idProjet': projet.id}) }}\" class=\"btn btn-info btn-lg btn-block\"> {{ projet.name }}</a>
                    </li>
                </ul>
                {% else %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('assets/img/68-searching-with-magnifying-glass copie.png') }}\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"{{ path('projets_new') }}\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                    {% endfor %}
            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- fin modal tous les chapitres -->

<div class=\"modal fade\" id=\"tousLesChapitres\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tousLesChapitresTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"tousLeschapitresTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                {% for projet in projets %}
                <ul>
                    <li>
                        <a href=\"{{ path('chapitre_index', {'idProjet': projet.id}) }}\" class=\"btn btn-info btn-lg btn-block\"> {{ projet.name }}</a>
                    </li>
                </ul>
                {% else %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('assets/img/68-searching-with-magnifying-glass copie.png') }}\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <a href=\"{{ path('projets_new') }}\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                    {% endfor %}
            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- fin modal tous les chapitres -->


<div class=\"modal fade\" id=\"nouveauChapitre\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"nouveauChapitreTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title text-center\" id=\"nouveauChapitreTitle\">Quel projet est concerné ? <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button></h5>

            </div>
            <div class=\"modal-body\">
                {% for projet in projets %}
                    <ul>
                        <li>
                            <a href=\"{{ path('chapitre_new', {'idProjet': projet.id}) }}\" class=\"btn btn-info btn-lg btn-block\"> {{ projet.name }}</a>
                        </li>
                    </ul>
                {% else %}
                    <div class=\"text-center\">
                        <img src=\"{{ asset('assets/img/68-searching-with-magnifying-glass copie.png') }}\" style=\"width: 200px\">
                        <h4 style=\"margin-bottom: 20px\">Tu n'as pour le moment aucun projet</h4>
                    </div>
                    <p>Commencer par créer un projet</p>
                    <a href=\"{{ path('projets_new') }}\" class=\"btn btn-success btn-lg btn-block\">Démarrer un nouveau projet</a>
                {% endfor %}
            </div>


            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>


<script src=\"{{ asset('assets/lib/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
<script class=\"include\" type=\"text/javascript\" src=\"{{ asset('assets/lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
<script src=\"{{ asset('assets/lib/jquery.scrollTo.min.js') }}\"></script>
<script src=\"{{ asset('assets/lib/jquery.nicescroll.js') }}\" type=\"text/javascript\"></script>
<script src=\"{{ asset('assets/lib/jquery.sparkline.js') }}\"></script>
<!--common script for all pages-->
<script src=\"{{ asset('assets/lib/common-scripts.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/lib/gritter/js/jquery.gritter.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/lib/gritter-conf.js') }}\"></script>
<!--script for this page-->
<script src=\"{{ asset('assets/lib/sparkline-chart.js') }}\"></script>
<script src=\"{{ asset('assets/lib/zabuto_calendar.js') }}\"></script>
<!--
<script type=\"text/javascript\">
    \$(document).ready(function() {
        var unique_id = \$.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to Dashio!',
            // (string | mandatory) the text inside the notification
            text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
            // (string | optional) the image to display on the left
            image: 'img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
</script>
-->
<script type=\"application/javascript\">
    \$(document).ready(function() {
        \$(\"#date-popover\").popover({
            html: true,
            trigger: \"manual\"
        });
        \$(\"#date-popover\").hide();
        \$(\"#date-popover\").click(function(e) {
            \$(this).hide();
        });

        \$(\"#my-calendar\").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: \"show_data.php?action=1\",
                modal: true
            },
            legend: [{
                type: \"text\",
                label: \"Special event\",
                badge: \"00\"
            },
                {
                    type: \"block\",
                    label: \"Regular event\",
                }
            ]
        });
    });

    function myNavFunction(id) {
        \$(\"#date-popover\").hide();
        var nav = \$(\"#\" + id).data(\"navigation\");
        var to = \$(\"#\" + id).data(\"to\");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>
<script>
    CKEDITOR.replace( 'projets[resume]' );
    CKEDITOR.replace( 'chapitre[resume]' );
</script>
<script>
\$(document).ready(function() {
\$('select').select2();
});
</script>
</body>
{% block javascripts %}

{% endblock %}
</body>
</html>
", "base.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/base.html.twig");
    }
}
