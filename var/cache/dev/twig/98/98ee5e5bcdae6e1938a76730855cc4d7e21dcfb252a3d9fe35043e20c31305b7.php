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

/* /admin/ajouterCategorie.html.twig */
class __TwigTemplate_7284dd2641cda5d674a595c3c2e1794bca97addee5356d05e5b0744572a1e968 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/ajouterCategorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/ajouterCategorie.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "/admin/ajouterCategorie.html.twig", 1);
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
    <h2 class=\"titre\">Nouvelle thématique ou matière</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">   
             
        <h3> <center> Choisissez ce que vous voulez ajouter </center></h3>

        <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie");
        echo "\" >
            <div>
            <label>Thematique</label>
            <input type=\"radio\" id=\"thema\" onclick=\"fct1()\" name=\"choix\" value=\"thema\">
            </div>

            <div>
            <label>Matiere</label>
            <input type=\"radio\" id=\"matiere\" onclick=\"fct2()\" name=\"choix\" value=\"matiere\">
            </div>
            <div class=\"contenu\"> 
                <div id=\"ici\">
                    <div id=\"thema1\" style=\"display:none;\">
                        <label>Veuillez saisir votre nouvelle Thematique</label>
                        <input type=\"text\" name=\"Thematique\"/>
                    </div>
                    <div id=\"matiere1\" style=\"display:none;\">
                        <label>Veuillez saisir votre nouvelle Matiere</label>
                        <input type=\"text\" name=\"Matiere\"/>
                    </div>
                </div> 
            </div>
     
            <div class=\"\">
              
            </div>
            <div class=\"\">
            
            </div>
            <input class=\"button_ajouter\" type=\"submit\" value=\"Ajouter\" onclick=\"return confirm('Bien ajouté !')\"></input>
            
          </form>
        </div>
    </div>



   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/admin/ajouterCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 26,  110 => 19,  107 => 18,  98 => 16,  93 => 15,  90 => 14,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
    <h2 class=\"titre\">Nouvelle thématique ou matière</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">   
             
        <h3> <center> Choisissez ce que vous voulez ajouter </center></h3>

        <form method=\"post\" action=\"{{ path('admin_ajouter_categorie')}}\" >
            <div>
            <label>Thematique</label>
            <input type=\"radio\" id=\"thema\" onclick=\"fct1()\" name=\"choix\" value=\"thema\">
            </div>

            <div>
            <label>Matiere</label>
            <input type=\"radio\" id=\"matiere\" onclick=\"fct2()\" name=\"choix\" value=\"matiere\">
            </div>
            <div class=\"contenu\"> 
                <div id=\"ici\">
                    <div id=\"thema1\" style=\"display:none;\">
                        <label>Veuillez saisir votre nouvelle Thematique</label>
                        <input type=\"text\" name=\"Thematique\"/>
                    </div>
                    <div id=\"matiere1\" style=\"display:none;\">
                        <label>Veuillez saisir votre nouvelle Matiere</label>
                        <input type=\"text\" name=\"Matiere\"/>
                    </div>
                </div> 
            </div>
     
            <div class=\"\">
              
            </div>
            <div class=\"\">
            
            </div>
            <input class=\"button_ajouter\" type=\"submit\" value=\"Ajouter\" onclick=\"return confirm('Bien ajouté !')\"></input>
            
          </form>
        </div>
    </div>



   
{% endblock %}", "/admin/ajouterCategorie.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ajouterCategorie.html.twig");
    }
}
