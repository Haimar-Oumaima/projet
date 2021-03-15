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

/* admin/ThematiqueMatiere.html.twig */
class __TwigTemplate_f2c724eba760fd7c51a93a57eb3aee756ebcda11c7916a9d1a0d40eef9ad2f65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ThematiqueMatiere.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ThematiqueMatiere.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/ThematiqueMatiere.html.twig", 1);
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
        <h2 class=\"titre\">Thematiques et Matières</h2>
        
     

        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie");
        echo "\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thematique"]) || array_key_exists("thematique", $context) ? $context["thematique"] : (function () { throw new RuntimeError('Variable "thematique" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["A"]) {
            // line 22
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["A"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>

                
               
                <td>
                <center>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie", ["id" => twig_get_attribute($this->env, $this->source, $context["A"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:20px\"></i></a>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_thematique_Supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["A"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\" style=\"font-size:20px\"></i></a>
                </center>
                </td>
            </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['A'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          
        </tbody>
        </table>
    </div>

    <script type=\"text/javascript\">

    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ThematiqueMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  111 => 29,  107 => 28,  97 => 22,  93 => 21,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"titre\">Thematiques et Matières</h2>
        
     

        <a href=\"{{ path('admin_ajouter_questions') }}\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"{{ path('admin_ajouter_categorie') }}\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            {% for A in thematique %}
                <td>{{ A.id }}</td>

                
               
                <td>
                <center>
                    <a href=\"{{ path('admin_ajouter_categorie',{'id':A.id}) }}\"><i class=\"fa fa-edit\" style=\"font-size:20px\"></i></a>
                    <a href=\"{{ path('admin_thematique_Supprimer',{'id':A.id}) }}\"><i class=\"fas fa-trash-alt\" style=\"font-size:20px\"></i></a>
                </center>
                </td>
            </tr>
              {% endfor %}
          
        </tbody>
        </table>
    </div>

    <script type=\"text/javascript\">

    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
</script>
{% endblock %}", "admin/ThematiqueMatiere.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ThematiqueMatiere.html.twig");
    }
}
