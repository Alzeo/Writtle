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

/* register/register.html.twig */
class __TwigTemplate_b5075ac40ddb12c22cc454c2e18afbf143063e16ef600d413402efb13c924854 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <title>Prism - s'inscrire</title>

    <!-- Favicons -->
    <link href=\"img/favicon.png\" rel=\"icon\">
    <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--external css-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        echo "\">

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body style=\"background: url(";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/login-bgg.jpg"), "html", null, true);
        echo ") no-repeat center center fixed;\">
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id=\"login-page\">
    <div class=\"container\">
        <form class=\"form-login\" method=\"post\">
            <h2 class=\"form-login-heading\">S'inscrire</h2>
            <div class=\"login-wrap\">
                ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
        echo "
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "S'inscrire")) : ("S'inscrire")), "html", null, true);
        echo "</button>
                </div>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
            </div>
            <!-- modal -->
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"lib/jquery/jquery.min.js\"></script>
    <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type=\"text/javascript\" src=\"lib/jquery.backstretch.min.js\"></script>
    <script>
        \$.backstretch(\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/login-bgg.jpg"), "html", null, true);
        echo "\", {
            speed: 500
        });
    </script>

</body>

</html>












";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  113 => 45,  108 => 43,  103 => 41,  99 => 40,  87 => 31,  74 => 21,  70 => 20,  65 => 18,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <title>Prism - s'inscrire</title>

    <!-- Favicons -->
    <link href=\"img/favicon.png\" rel=\"icon\">
    <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}\">
    <!--external css-->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}\">
    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style-responsive.css') }}\">

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body style=\"background: url({{ asset ('/assets/img/login-bgg.jpg') }}) no-repeat center center fixed;\">
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id=\"login-page\">
    <div class=\"container\">
        <form class=\"form-login\" method=\"post\">
            <h2 class=\"form-login-heading\">S'inscrire</h2>
            <div class=\"login-wrap\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                <div class=\"form-group\">
                    <button class=\"btn btn-primary\">{{ button_label|default(\"S'inscrire\") }}</button>
                </div>
                {{ form_end(form) }}
            </div>
            <!-- modal -->
        </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src=\"lib/jquery/jquery.min.js\"></script>
    <script src=\"lib/bootstrap/js/bootstrap.min.js\"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type=\"text/javascript\" src=\"lib/jquery.backstretch.min.js\"></script>
    <script>
        \$.backstretch(\"{{ asset('assets/img/login-bgg.jpg') }}\", {
            speed: 500
        });
    </script>

</body>

</html>












", "register/register.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/register/register.html.twig");
    }
}
