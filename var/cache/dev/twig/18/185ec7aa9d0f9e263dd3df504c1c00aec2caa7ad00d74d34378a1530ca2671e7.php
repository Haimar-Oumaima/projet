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

/* admin/ajouterQuestion.html.twig */
class __TwigTemplate_b8955bf6bb835ac4ef7b1649429601ae67ae384e51a53b14d9ce395772be322c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterQuestion.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/ajouterQuestion.html.twig", 1);
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
        echo "    <h2 class=\"titre\">Nouvelle Question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 9, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"zone_input\">
                    <div class=\"input\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 12, $this->source); })()), "question", [], "any", false, false, false, 12), 'row');
        echo "</div>
                    <div class=\"input\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), 'row');
        echo "</div>
                    <div class=\"input\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 14, $this->source); })()), "propositions", [], "any", false, false, false, 14), 'row');
        echo "</div>
                    <div class=\"\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 15, $this->source); })()), "autre_proposition", [], "any", false, false, false, 15), 'row');
        echo "</div>
                    <div class=\"\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 16, $this->source); })()), "thematique", [], "any", false, false, false, 16), 'row');
        echo "</div>
                    <div class=\"\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 17, $this->source); })()), "matiere", [], "any", false, false, false, 17), 'row');
        echo "</div>
                    <div class=\"\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 18, $this->source); })()), "autre_question", [], "any", false, false, false, 18), 'row');
        echo "</div><br>
                    <div class=\"ajouter_question_btn\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 19, $this->source); })()), "ajouter", [], "any", false, false, false, 19), 'row');
        echo "</div>
            </div>
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouter_question_form"]) || array_key_exists("ajouter_question_form", $context) ? $context["ajouter_question_form"] : (function () { throw new RuntimeError('Variable "ajouter_question_form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ajouterQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 21,  112 => 19,  108 => 18,  104 => 17,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <h2 class=\"titre\">Nouvelle Question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            {{ form_start(ajouter_question_form) }}
            <div class=\"\">
                {{ form_errors(ajouter_question_form) }}
            </div>
            <div class=\"zone_input\">
                    <div class=\"input\">{{ form_row(ajouter_question_form.question) }}</div>
                    <div class=\"input\">{{ form_row(ajouter_question_form.type) }}</div>
                    <div class=\"input\">{{ form_row(ajouter_question_form.propositions) }}</div>
                    <div class=\"\">{{ form_row(ajouter_question_form.autre_proposition) }}</div>
                    <div class=\"\">{{ form_row(ajouter_question_form.thematique) }}</div>
                    <div class=\"\">{{ form_row(ajouter_question_form.matiere) }}</div>
                    <div class=\"\">{{ form_row(ajouter_question_form.autre_question) }}</div><br>
                    <div class=\"ajouter_question_btn\">{{ form_row(ajouter_question_form.ajouter) }}</div>
            </div>
            {{ form_end(ajouter_question_form) }}
        </div>
    </div>
{% endblock %}", "admin/ajouterQuestion.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ajouterQuestion.html.twig");
    }
}
