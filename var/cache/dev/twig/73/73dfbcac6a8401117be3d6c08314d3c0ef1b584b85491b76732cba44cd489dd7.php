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

/* admin/ajouterUser.html.twig */
class __TwigTemplate_c8c45cb2e66f0f99795d0dc3a11e77b6a6ed5b0e5dc0b8d395c2aa09d5d61dda extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterUser.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/ajouterUser.html.twig", 1);
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
        echo "    <h2 class=\"titre\">Nouvel utilisateur</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 9, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"zone_input\">
                <center><i id=\"icon_ajout\" class=\"fas fa-user\"></i></center>
                <div class=\"input\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 13, $this->source); })()), "login", [], "any", false, false, false, 13), 'row');
        echo "</div>
                <div class=\"input\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'row');
        echo "</div>
                <a href=\"\" class=\"button_ajouter\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 15, $this->source); })()), "ajouter", [], "any", false, false, false, 15), 'row');
        echo "</a>
            </div>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ajouter_user_form"]) || array_key_exists("ajouter_user_form", $context) ? $context["ajouter_user_form"] : (function () { throw new RuntimeError('Variable "ajouter_user_form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ajouterUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  93 => 15,  89 => 14,  85 => 13,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <h2 class=\"titre\">Nouvel utilisateur</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            {{ form_start(ajouter_user_form) }}
            <div class=\"\">
                {{ form_errors(ajouter_user_form) }}
            </div>
            <div class=\"zone_input\">
                <center><i id=\"icon_ajout\" class=\"fas fa-user\"></i></center>
                <div class=\"input\">{{ form_row(ajouter_user_form.login) }}</div>
                <div class=\"input\">{{ form_row(ajouter_user_form.password) }}</div>
                <a href=\"\" class=\"button_ajouter\">{{ form_row(ajouter_user_form.ajouter) }}</a>
            </div>
            {{ form_end(ajouter_user_form) }}
        </div>
    </div>
{% endblock %}", "admin/ajouterUser.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ajouterUser.html.twig");
    }
}
