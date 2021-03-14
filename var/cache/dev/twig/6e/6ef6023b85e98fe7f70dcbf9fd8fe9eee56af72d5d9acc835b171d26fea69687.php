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

/* admin/index.html.twig */
class __TwigTemplate_ef3ae2c8710a711beb5da0baf1822706e7055ffe220d6609f0c8af38a23f664b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/index.html.twig", 1);
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

        echo "        
    <table class=\"elements\">
        <tr>
            <td>
                <a class=\"contenu\" href=\"\">
                    
                    
                </a>
            </td>
            <td>
                <a class=\"contenu\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users");
        echo "\">
                    <i class=\"fas fa-users\"></i></i><br>
                    <h2>Gestions des utilisateurs</h2>
                </a>
            </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                       
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class=\"contenu\" href=\"\">
                        <i class=\"fas fa-question-circle\"></i></i><br>
                        <h2>Gestion des questions</h2>
                    </a>
                </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                     
                    </a>
                </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                        <i class=\"fas fa-copy\"></i><br>
                        <h2>Gestion des évalutations</h2>
                    </a>
                </td>
            </tr>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}        
    <table class=\"elements\">
        <tr>
            <td>
                <a class=\"contenu\" href=\"\">
                    
                    
                </a>
            </td>
            <td>
                <a class=\"contenu\" href=\"{{ path('admin_users') }}\">
                    <i class=\"fas fa-users\"></i></i><br>
                    <h2>Gestions des utilisateurs</h2>
                </a>
            </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                       
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a class=\"contenu\" href=\"\">
                        <i class=\"fas fa-question-circle\"></i></i><br>
                        <h2>Gestion des questions</h2>
                    </a>
                </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                     
                    </a>
                </td>
                <td>
                    <a class=\"contenu\" href=\"\">
                        <i class=\"fas fa-copy\"></i><br>
                        <h2>Gestion des évalutations</h2>
                    </a>
                </td>
            </tr>
    </table>
{% endblock %}
", "admin/index.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/index.html.twig");
    }
}
