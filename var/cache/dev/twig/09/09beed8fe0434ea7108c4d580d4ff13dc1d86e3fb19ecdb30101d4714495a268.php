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

/* personnages/_form.html.twig */
class __TwigTemplate_75567670ca494533672359e8714a9c9a00bfe2d607f4b3790f6714177ccdaa3f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnages/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnages/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link\" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        État Civil
                    </button>
                </h2>
                <hr/>
                <div class=\"etatcivil\">
                    <div class=\"form-row\">
                        <div class=\"col-md-4\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "firstName", [], "any", false, false, false, 11), 'row');
        echo "</div>
                        <div class=\"col-md-4\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "lastName", [], "any", false, false, false, 12), 'row');
        echo "</div>
                        <div class=\"col-md-4\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "surname", [], "any", false, false, false, 13), 'row');
        echo "</div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-2\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "age", [], "any", false, false, false, 16), 'row');
        echo "</div>
                        <div class=\"col-md-5\" >";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "genre", [], "any", false, false, false, 17), 'row');
        echo "</div>
                        <div class=\"col-md-5\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "role", [], "any", false, false, false, 18), 'row');
        echo "</div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-4\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "residence", [], "any", false, false, false, 21), 'row');
        echo "</div>
                        <div class=\"col-md-4\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "placeBorn", [], "any", false, false, false, 22), 'row');
        echo "</div>
                        <div class=\"col-md-4\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "profession", [], "any", false, false, false, 23), 'row');
        echo "</div>
                    </div>
                </div>
            </div>

            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link collapsed \" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Physique
                    </button>
                </h2>
                <hr/>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "taille", [], "any", false, false, false, 36), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "poids", [], "any", false, false, false, 37), 'row');
        echo "</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "tenue", [], "any", false, false, false, 40), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "accessoires", [], "any", false, false, false, 41), 'row');
        echo "</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-12\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), 'row');
        echo "</div>
                </div>
            </div>
            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link collapsed \" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Profil
                    </button>
                </h2>
                <hr/>
                <div class=\"form-row\">
                    <div class=\"col-md-4\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "croyances", [], "any", false, false, false, 55), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "education", [], "any", false, false, false, 56), 'row');
        echo "</div>
                    <div class=\"col-md-4\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "richesse", [], "any", false, false, false, 57), 'row');
        echo "</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "qualites", [], "any", false, false, false, 60), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "defauts", [], "any", false, false, false, 61), 'row');
        echo "</div>

                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "secrets", [], "any", false, false, false, 65), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "addictions", [], "any", false, false, false, 66), 'row');
        echo "</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "tiqueParole", [], "any", false, false, false, 69), 'row');
        echo "</div>
                    <div class=\"col-md-6\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "weakness", [], "any", false, false, false, 70), 'row');
        echo "</div>
                </div>
            </div>
<div class=\"form-group\">
    <button class=\"btn btn-success btn-lg btn-block mt-4\" style=\"margin-top:20px;\">";
        // line 74
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 74, $this->source); })()), "Créer ce personnage")) : ("Créer ce personnage")), "html", null, true);
        echo "</button>
</div>
            </div>
";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'rest');
        echo "

";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "personnages/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 79,  194 => 77,  188 => 74,  181 => 70,  177 => 69,  171 => 66,  167 => 65,  160 => 61,  156 => 60,  150 => 57,  146 => 56,  142 => 55,  128 => 44,  122 => 41,  118 => 40,  112 => 37,  108 => 36,  92 => 23,  88 => 22,  84 => 21,  78 => 18,  74 => 17,  70 => 16,  64 => 13,  60 => 12,  56 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link\" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                        État Civil
                    </button>
                </h2>
                <hr/>
                <div class=\"etatcivil\">
                    <div class=\"form-row\">
                        <div class=\"col-md-4\">{{ form_row(form.firstName) }}</div>
                        <div class=\"col-md-4\">{{ form_row(form.lastName) }}</div>
                        <div class=\"col-md-4\">{{ form_row(form.surname) }}</div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-2\">{{ form_row(form.age) }}</div>
                        <div class=\"col-md-5\" >{{ form_row(form.genre) }}</div>
                        <div class=\"col-md-5\">{{ form_row(form.role) }}</div>
                    </div>
                    <div class=\"form-row\">
                        <div class=\"col-md-4\">{{ form_row(form.residence) }}</div>
                        <div class=\"col-md-4\">{{ form_row(form.placeBorn) }}</div>
                        <div class=\"col-md-4\">{{ form_row(form.profession) }}</div>
                    </div>
                </div>
            </div>

            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link collapsed \" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                        Physique
                    </button>
                </h2>
                <hr/>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">{{ form_row(form.taille) }}</div>
                    <div class=\"col-md-6\">{{ form_row(form.poids) }}</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">{{ form_row(form.tenue) }}</div>
                    <div class=\"col-md-6\">{{ form_row(form.accessoires) }}</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-12\">{{ form_row(form.description) }}</div>
                </div>
            </div>
            <div class=\"section-form\">
                <h2 class=\"mb-0\">
                    <button class=\"btn btn-link collapsed \" style=\"font-size:2rem; color:black\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                        Profil
                    </button>
                </h2>
                <hr/>
                <div class=\"form-row\">
                    <div class=\"col-md-4\">{{ form_row(form.croyances) }}</div>
                    <div class=\"col-md-4\">{{ form_row(form.education) }}</div>
                    <div class=\"col-md-4\">{{ form_row(form.richesse) }}</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">{{ form_row(form.qualites) }}</div>
                    <div class=\"col-md-6\">{{ form_row(form.defauts) }}</div>

                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">{{ form_row(form.secrets) }}</div>
                    <div class=\"col-md-6\">{{ form_row(form.addictions) }}</div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-6\">{{ form_row(form.tiqueParole) }}</div>
                    <div class=\"col-md-6\">{{ form_row(form.weakness) }}</div>
                </div>
            </div>
<div class=\"form-group\">
    <button class=\"btn btn-success btn-lg btn-block mt-4\" style=\"margin-top:20px;\">{{ button_label|default('Créer ce personnage') }}</button>
</div>
            </div>
{{ form_rest(form) }}

{{ form_end(form) }}
", "personnages/_form.html.twig", "/Users/tomas/Documents/Sites/Writtle/templates/personnages/_form.html.twig");
    }
}
