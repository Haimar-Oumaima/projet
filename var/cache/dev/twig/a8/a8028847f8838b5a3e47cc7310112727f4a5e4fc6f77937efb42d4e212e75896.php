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

/* admin/modifierUser.html.twig */
class __TwigTemplate_e4eb0e62a661a90d272d5934d6ff71959af9359a7dd6864fc85a13547ddcd3a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifierUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/modifierUser.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/modifierUser.html.twig", 1);
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
        echo "    <h2 class=\"titre\">Modifier enseignant</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
            <div class=\"\">
                ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 9, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"zone_input\">
                <center><i id=\"icon_ajout\" class=\"fas fa-user\"></i></center>
                <div class=\"input\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 13, $this->source); })()), "login", [], "any", false, false, false, 13), 'row');
        echo "</div>
                <div class=\"input\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 14, $this->source); })()), "password", [], "any", false, false, false, 14), 'row');
        echo "</div>
                <div class=\"input\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 15, $this->source); })()), "confirm_password", [], "any", false, false, false, 15), 'row');
        echo "</div>
                <a href=\"\" class=\"button_ajouter\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 16, $this->source); })()), "enregistrer", [], "any", false, false, false, 16), 'row');
        echo "</a>
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["modifier_user_form"]) || array_key_exists("modifier_user_form", $context) ? $context["modifier_user_form"] : (function () { throw new RuntimeError('Variable "modifier_user_form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/modifierUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 18,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <h2 class=\"titre\">Modifier enseignant</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            {{ form_start(modifier_user_form) }}
            <div class=\"\">
                {{ form_errors(modifier_user_form) }}
            </div>
            <div class=\"zone_input\">
                <center><i id=\"icon_ajout\" class=\"fas fa-user\"></i></center>
                <div class=\"input\">{{ form_row(modifier_user_form.login) }}</div>
                <div class=\"input\">{{ form_row(modifier_user_form.password) }}</div>
                <div class=\"input\">{{ form_row(modifier_user_form.confirm_password) }}</div>
                <a href=\"\" class=\"button_ajouter\">{{ form_row(modifier_user_form.enregistrer) }}</a>
            </div>
            {{ form_end(modifier_user_form) }}
        </div>
    </div>
{% endblock %}", "admin/modifierUser.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/modifierUser.html.twig");
    }
}
