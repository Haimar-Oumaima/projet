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

/* admin/thematiquesMatieres.html.twig */
class __TwigTemplate_9db01490861f70f1ef9f7e6692e09ac93e49ff81fe679e531e145e088119fef4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/thematiquesMatieres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/thematiquesMatieres.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "admin/thematiquesMatieres.html.twig", 1);
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
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" id=\"ajouter_question\">+ Nouvelle question</a>
      
        <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie");
        echo "\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <br>
        <br>
        <br>
        <br>

        <br>  <h3> <center>La liste des thématiques </center></h3>

        

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>Thematiques</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>


        </thead>
        <tbody>  
  
             ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thematiques"]) || array_key_exists("thematiques", $context) ? $context["thematiques"] : (function () { throw new RuntimeError('Variable "thematiques" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Thematique"]) {
            echo "           
            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Thematique"], "libelleThematique", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>

                <td>                    
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modifier_thematique", ["id" => twig_get_attribute($this->env, $this->source, $context["Thematique"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
                <td>                    
                    <a id=\"button_generer\" class=\"button_admin\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_thematique_Supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["Thematique"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" onclick=\"return confirm('attention cette thematique va être supprimer !')\">Supprimer</a>
                </td>     
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Thematique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  
            </tr>              
        </tbody>
        </table>

 <br>
        <br>
        <br>

        <br> <h3><center> La liste des matières </center></h3>

 <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>Matières</th>
                <th>Modification</th>
                <th>Suppression</th>

            </tr>

        </thead>
        <tbody>  
        
           ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres"]) || array_key_exists("matieres", $context) ? $context["matieres"] : (function () { throw new RuntimeError('Variable "matieres" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Matiere"]) {
            echo " 
            <tr>

                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Matiere"], "libelleMatiere", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>

                <td>                    
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modifier_matiere", ["id" => twig_get_attribute($this->env, $this->source, $context["Matiere"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Modifier</a>
                </td>
                <td>                    
                    <a id=\"button_generer\" class=\"button_admin\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_matiere_Supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["Matiere"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" onclick=\"return confirm('attention')\">Supprimer</a>
                </td>   
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  
            </tr>              
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
        return "admin/thematiquesMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 76,  177 => 74,  171 => 71,  165 => 68,  157 => 65,  132 => 42,  123 => 40,  117 => 37,  111 => 34,  104 => 32,  78 => 9,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"titre\">Thematiques et Matières</h2>
        
        <a href=\"{{ path('admin_ajouter_questions') }}\" id=\"ajouter_question\">+ Nouvelle question</a>
      
        <a href=\"{{ path('admin_ajouter_categorie') }}\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <br>
        <br>
        <br>
        <br>

        <br>  <h3> <center>La liste des thématiques </center></h3>

        

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>Thematiques</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>


        </thead>
        <tbody>  
  
             {% for Thematique in thematiques %}           
            <tr>
                <td>{{ Thematique.libelleThematique }}</td>

                <td>                    
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"{{ path('admin_modifier_thematique',{'id':Thematique.id}) }}\">Modifier</a>
                </td>
                <td>                    
                    <a id=\"button_generer\" class=\"button_admin\" href=\"{{ path('admin_thematique_Supprimer',{'id':Thematique.id}) }}\" onclick=\"return confirm('attention cette thematique va être supprimer !')\">Supprimer</a>
                </td>     
             {% endfor %}  
            </tr>              
        </tbody>
        </table>

 <br>
        <br>
        <br>

        <br> <h3><center> La liste des matières </center></h3>

 <table class=\"tableau_de_resultats tableau_utilisateurs\">
             <thead>
            <tr>
                <th>Matières</th>
                <th>Modification</th>
                <th>Suppression</th>

            </tr>

        </thead>
        <tbody>  
        
           {% for Matiere in matieres %} 
            <tr>

                <td>{{ Matiere.libelleMatiere }}</td>

                <td>                    
                    <a id=\"button_modifier\" class=\"button_admin\" href=\"{{ path('admin_modifier_matiere',{'id':Matiere.id}) }}\">Modifier</a>
                </td>
                <td>                    
                    <a id=\"button_generer\" class=\"button_admin\" href=\"{{ path('admin_matiere_Supprimer',{'id':Matiere.id}) }}\" onclick=\"return confirm('attention')\">Supprimer</a>
                </td>   
             {% endfor %}  
            </tr>              
        </tbody>
        </table>
    </div>

    <script type=\"text/javascript\">

    \$(document).ready(function() {
        \$('#example').DataTable();
    } );
</script>
{% endblock %}
", "admin/thematiquesMatieres.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/thematiquesMatieres.html.twig");
    }
}
