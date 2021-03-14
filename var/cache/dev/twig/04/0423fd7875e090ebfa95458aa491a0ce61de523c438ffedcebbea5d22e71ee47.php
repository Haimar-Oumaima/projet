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
class __TwigTemplate_b70a1d937cdb7c49f9ac8ba6755e068b4f33cdaf3ccdc9f4b410b3900c4def93 extends Template
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
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"/css/connexion.css\">
        <title>Connexion</title>
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "username", [], "any", false, false, false, 12), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
    <div id=\"\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 18, $this->source); })()), 'errors');
        echo "
    </div>
    <div class=\"connexion\">
        <div class=\"conn\">Connexion</div>
        <div class=\"zone_text\">
            <i class=\"fas fa-user\"></i>
            <div class=\"input\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 24, $this->source); })()), "login", [], "any", false, false, false, 24), 'row');
        echo "</div>
        </div>
        <div class=\"zone_text\">
            <i class=\"fas fa-lock\"></i>
            <div class=\"input\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 28, $this->source); })()), "password", [], "any", false, false, false, 28), 'row', ["attr" => ["placeholder" => "Mot de passe"]]);
        echo "</div>
        </div>
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 30, $this->source); })()), "submit", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "btn"]]);
        echo "
    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["login_form"]) || array_key_exists("login_form", $context) ? $context["login_form"] : (function () { throw new RuntimeError('Variable "login_form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "

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
        return array (  108 => 32,  103 => 30,  98 => 28,  91 => 24,  82 => 18,  77 => 16,  74 => 15,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"/css/connexion.css\">
        <title>Connexion</title>
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    {{ form_start(login_form) }}
    <div id=\"\">
        {{ form_errors(login_form) }}
    </div>
    <div class=\"connexion\">
        <div class=\"conn\">Connexion</div>
        <div class=\"zone_text\">
            <i class=\"fas fa-user\"></i>
            <div class=\"input\">{{ form_row(login_form.login) }}</div>
        </div>
        <div class=\"zone_text\">
            <i class=\"fas fa-lock\"></i>
            <div class=\"input\">{{ form_row(login_form.password,{'attr':{'placeholder':'Mot de passe'}}) }}</div>
        </div>
        {{ form_row(login_form.submit,{'attr':{'class':'btn'}}) }}
    </div>
    {{ form_end(login_form) }}

</html>
", "security/login.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/security/login.html.twig");
    }
}
