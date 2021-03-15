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

/* admin/modifierThematique.html.twig */
class __TwigTemplate_f4bf36889cbe99a0f77c837c09de56e5e076db4215f12db5914d4718770b2c75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifierThematique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifierThematique.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/modifierThematique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <p> 
    ";
        // line 5
        $context["flash_notices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "flashbag", [], "any", false, false, false, 5), "get", [0 => "Msg"], "method", false, false, false, 5);
        // line 6
        echo "                    ";
        $context["flash_notice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "flashbag", [], "any", false, false, false, 6), "get", [0 => "MsgE"], "method", false, false, false, 6);
        // line 7
        echo "                    ";
        if ( !twig_test_empty((isset($context["flash_notice"]) || array_key_exists("flash_notice", $context) ? $context["flash_notice"] : (function () { throw new RuntimeError('Variable "flash_notice" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "                        
                            <div class=\"alert alert-danger\">";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["Msg"]) || array_key_exists("Msg", $context) ? $context["Msg"] : (function () { throw new RuntimeError('Variable "Msg" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " 
                            
                            </div>
                        
                    ";
        }
        // line 14
        echo "                    ";
        if ( !twig_test_empty((isset($context["flash_notices"]) || array_key_exists("flash_notices", $context) ? $context["flash_notices"] : (function () { throw new RuntimeError('Variable "flash_notices" does not exist.', 14, $this->source); })()))) {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flash_notices"]) || array_key_exists("flash_notices", $context) ? $context["flash_notices"] : (function () { throw new RuntimeError('Variable "flash_notices" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["Msg"]) {
                // line 16
                echo "                            <div class=\"alert alert-success\">";
                echo twig_escape_filter($this->env, $context["Msg"], "html", null, true);
                echo " </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    ";
        }
        // line 19
        echo "    </p>
    <h2 class=\"titre\">Modification de la thématique</h2>
    <div class=\"box\">
        <div class=\"box_ajout\"> 
          ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
            <div class=\"zone_input\">
                <div class=\"input\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "libelleThematique", [], "any", false, false, false, 25), 'row');
        echo "</div>
                <a href=\"\" class=\"button_ajouter\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "Enregistrer", [], "any", false, false, false, 26), 'row');
        echo "</a>
            </div>
          ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/modifierThematique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  125 => 26,  121 => 25,  116 => 23,  110 => 19,  107 => 18,  98 => 16,  93 => 15,  90 => 14,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
 <p> 
    {% set flash_notices = app.session.flashbag.get('Msg') %}
                    {% set flash_notice = app.session.flashbag.get('MsgE') %}
                    {% if flash_notice is not empty %}
                        
                            <div class=\"alert alert-danger\">{{ Msg}} 
                            
                            </div>
                        
                    {% endif %}
                    {% if flash_notices is not empty %}
                        {% for Msg in flash_notices %}
                            <div class=\"alert alert-success\">{{ Msg}} </div>
                        {% endfor%}
                    {% endif %}
    </p>
    <h2 class=\"titre\">Modification de la thématique</h2>
    <div class=\"box\">
        <div class=\"box_ajout\"> 
          {{ form_start(form) }}
            <div class=\"zone_input\">
                <div class=\"input\">{{ form_row(form.libelleThematique) }}</div>
                <a href=\"\" class=\"button_ajouter\">{{ form_row(form.Enregistrer) }}</a>
            </div>
          {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "admin/modifierThematique.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/modifierThematique.html.twig");
    }
}
