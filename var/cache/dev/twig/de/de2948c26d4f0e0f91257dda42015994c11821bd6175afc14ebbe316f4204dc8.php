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

/* admin/questions.html.twig */
class __TwigTemplate_15d823e6887e4ff60e4182b28b060293c2275b88fb1a5c2cdbf7356aaabf7174 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/questions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/questions.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/questions.html.twig", 1);
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
        echo "    <div>
        <h2 class=\"titre\">Questions</h2>
        
        <div>
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
            <div class=\"\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 10, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"zone_filtre\">
                <ul>
                    <li><div class=\"input\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 14, $this->source); })()), "question", [], "any", false, false, false, 14), 'row');
        echo "</div></li>
                    <li><div class=\"input\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 15, $this->source); })()), "type", [], "any", false, false, false, 15), 'row');
        echo "</div></li>
                    <li><div class=\"input\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 16, $this->source); })()), "thematique", [], "any", false, false, false, 16), 'row');
        echo "</div></li>
                    <li><div class=\"input\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 17, $this->source); })()), "matiere", [], "any", false, false, false, 17), 'row');
        echo "</div>
                </ul>
            </div>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filtre_question_form"]) || array_key_exists("filtre_question_form", $context) ? $context["filtre_question_form"] : (function () { throw new RuntimeError('Variable "filtre_question_form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        </div>

        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie");
        echo "\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
            <tr>
                <th>Question</th>
                <th>Propositions</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>question1</th>
                <th>propo</th>
                <th>
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"\">Consulter</a>
                    <button id=\"button_generer\" class=\"button_admin\" onclick=\"\">Générer</button>
                </th>
            </tr>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  110 => 23,  104 => 20,  98 => 17,  94 => 16,  90 => 15,  86 => 14,  79 => 10,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"titre\">Questions</h2>
        
        <div>
            {{ form_start(filtre_question_form) }}
            <div class=\"\">
                {{ form_errors(filtre_question_form) }}
            </div>
            <div class=\"zone_filtre\">
                <ul>
                    <li><div class=\"input\">{{ form_row(filtre_question_form.question) }}</div></li>
                    <li><div class=\"input\">{{ form_row(filtre_question_form.type) }}</div></li>
                    <li><div class=\"input\">{{ form_row(filtre_question_form.thematique) }}</div></li>
                    <li><div class=\"input\">{{ form_row(filtre_question_form.matiere) }}</div>
                </ul>
            </div>
            {{ form_end(filtre_question_form) }}
        </div>

        <a href=\"{{ path('admin_ajouter_questions') }}\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"{{ path('admin_ajouter_categorie') }}\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
            <tr>
                <th>Question</th>
                <th>Propositions</th>
                <th>Action</th>
            </tr>
            <tr>
                <th>question1</th>
                <th>propo</th>
                <th>
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"\">Consulter</a>
                    <button id=\"button_generer\" class=\"button_admin\" onclick=\"\">Générer</button>
                </th>
            </tr>
        </table>
    </div>
{% endblock %}", "admin/questions.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/questions.html.twig");
    }
}
