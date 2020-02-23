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

/* security/login.html.twig */
class __TwigTemplate_8d4bbbda7427b92ae7f01c2e7e9eef460efc50baa8bbf3462920284ae50279df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Prism - se connecter</title>

    <!-- Favicons -->
    <link href=\"img/favicon.png\" rel=\"icon\">
    <link href=\"img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!--external css-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\">
    <!-- Custom styles for this template -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
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
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/assets/img/login-bgg.jpg"), "html", null, true);
        echo ") no-repeat center center fixed;\">
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id=\"login-page\">
    <div class=\"container\">
        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "            <div class=\"alert alert-success\">
                <div class=\"container\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <span><i class=\"fa fa-bell\"></i> ";
            // line 44
            echo $context["message"];
            echo "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageKey", [], "any", false, false, false, 49), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 49, $this->source); })()), "messageData", [], "any", false, false, false, 49), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 51
        echo "
        ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "            <div class=\"mb-3\">
                Vous êtes connecté en tant que ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "username", [], "any", false, false, false, 54), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
            </div>
        ";
        }
        // line 57
        echo "        <form class=\"form-login\" method=\"post\">
            <h2 class=\"form-login-heading\">Se connecter</h2>
            <div class=\"login-wrap\">
                <input type=\"text\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control\" required autofocus>
                <br>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"********\" class=\"form-control\" required>
                <label class=\"checkbox\" style=\"margin-left:20px;\">
                    <input type=\"checkbox\" value=\"_remember_me\"> Se souvenir de moi
                    <span class=\"pull-right\">
            <a data-toggle=\"modal\" href=\"login.html#myModal\"> Mot de passe oublié ?</a>
            </span>
                </label>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
                <button class=\"btn btn-theme btn-block\" href=\"index.html\" type=\"submit\"><i class=\"fa fa-lock\"></i> Connexion</button>
                <hr>
                <div class=\"registration\">
                    Pas encore de compte ?<br/>
                    <a class=\"\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">
                        Créez en un
                    </a>
                </div>
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
        // line 91
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 91,  170 => 76,  161 => 70,  148 => 60,  143 => 57,  135 => 54,  132 => 53,  130 => 52,  127 => 51,  121 => 49,  118 => 48,  108 => 44,  101 => 39,  97 => 38,  88 => 32,  75 => 22,  71 => 21,  66 => 19,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dashboard\">
    <meta name=\"keyword\" content=\"Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina\">
    <title>Prism - se connecter</title>

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
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                <div class=\"container\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <i class=\"fa fa-times\"></i>
                    </button>
                    <span><i class=\"fa fa-bell\"></i> {{ message|raw }}</span>
                </div>
            </div>
        {% endfor %}
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                Vous êtes connecté en tant que {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
            </div>
        {% endif %}
        <form class=\"form-login\" method=\"post\">
            <h2 class=\"form-login-heading\">Se connecter</h2>
            <div class=\"login-wrap\">
                <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" placeholder=\"Username\" id=\"inputUsername\" class=\"form-control\" required autofocus>
                <br>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"********\" class=\"form-control\" required>
                <label class=\"checkbox\" style=\"margin-left:20px;\">
                    <input type=\"checkbox\" value=\"_remember_me\"> Se souvenir de moi
                    <span class=\"pull-right\">
            <a data-toggle=\"modal\" href=\"login.html#myModal\"> Mot de passe oublié ?</a>
            </span>
                </label>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >
                <button class=\"btn btn-theme btn-block\" href=\"index.html\" type=\"submit\"><i class=\"fa fa-lock\"></i> Connexion</button>
                <hr>
                <div class=\"registration\">
                    Pas encore de compte ?<br/>
                    <a class=\"\" href=\"{{ path('register') }}\">
                        Créez en un
                    </a>
                </div>
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






", "security/login.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/security/login.html.twig");
    }
}
