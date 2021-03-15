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

/* /admin/ajouterQuestion.html.twig */
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/ajouterQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/ajouterQuestion.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "/admin/ajouterQuestion.html.twig", 1);
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
            <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" >

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"pet-select\">
                    <option value=\"\">--Type--</option>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em2"]) || array_key_exists("em2", $context) ? $context["em2"] : (function () { throw new RuntimeError('Variable "em2" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 14
            echo "                        <option onclick=\"Clk()\" value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleType", [], "any", false, false, false, 14), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleType", [], "any", false, false, false, 14), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                    
                </select>
            <br>
            <br>
            <br>

                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                                <div id=\"thema1\" style=\"display:false;\" ><label>Veuillez saisir la reponse correct</label>
                                <input id=\"vrai\" type=\"radio\" name=\"VF\"/><label for=\"vrai\">vrai</label></div>
                                <input id=\"faux\" type=\"radio\" name=\"VF\"/><label for=\"faux\">faux</label></div>
                            </div> 
                        </div>
            <br>
            <br>
            <label for=\"pet-select\">Choisir une matiére:</label>

                <select name=\"pets\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new RuntimeError('Variable "em" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 36
            echo "                            <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleMatiere", [], "any", false, false, false, 36), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleMatiere", [], "any", false, false, false, 36), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </select>
            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>

                <select name=\"pets\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em1"]) || array_key_exists("em1", $context) ? $context["em1"] : (function () { throw new RuntimeError('Variable "em1" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 48
            echo "                            <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleThematique", [], "any", false, false, false, 48), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleThematique", [], "any", false, false, false, 48), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                </select>

            <br>
            <br>

                        <input type=\"submit\" value=\"Ajouter\"></input>
          </form>
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/admin/ajouterQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  148 => 48,  144 => 47,  133 => 38,  122 => 36,  118 => 35,  97 => 16,  86 => 14,  82 => 13,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <h2 class=\"titre\">Nouvelle Question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            <form method=\"post\" action=\"{{ path('admin_ajouter_questions')}}\" >

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"pet-select\">
                    <option value=\"\">--Type--</option>
                    {% for MT in em2 %}
                        <option onclick=\"Clk()\" value={{MT.getLibelleType}}>{{MT.getLibelleType}}</option>
                    {% endfor %}
                    
                </select>
            <br>
            <br>
            <br>

                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                                <div id=\"thema1\" style=\"display:false;\" ><label>Veuillez saisir la reponse correct</label>
                                <input id=\"vrai\" type=\"radio\" name=\"VF\"/><label for=\"vrai\">vrai</label></div>
                                <input id=\"faux\" type=\"radio\" name=\"VF\"/><label for=\"faux\">faux</label></div>
                            </div> 
                        </div>
            <br>
            <br>
            <label for=\"pet-select\">Choisir une matiére:</label>

                <select name=\"pets\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        {% for MT in em %}
                            <option value={{MT.getLibelleMatiere}}>{{MT.getLibelleMatiere}}</option>
                        {% endfor %}
                </select>
            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>

                <select name=\"pets\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        {% for MT in em1 %}
                            <option value={{MT.getLibelleThematique}}>{{MT.getLibelleThematique}}</option>
                        {% endfor %}
                </select>

            <br>
            <br>

                        <input type=\"submit\" value=\"Ajouter\"></input>
          </form>
        </div>
    </div>
    
{% endblock %}

", "/admin/ajouterQuestion.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ajouterQuestion.html.twig");
    }
}
