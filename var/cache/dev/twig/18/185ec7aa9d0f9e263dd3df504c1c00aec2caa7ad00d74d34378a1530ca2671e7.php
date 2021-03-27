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
        echo "
    <h2 class=\"titre\">Nouvelle Question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            <form method=\"post\" action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" >

            <div id=\"question\" style=\"display:block;\">
                    <label>Veuillez saisir votre question :</label>
                    <input type=\"text\" name=\"question\"/>
            </div>

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"type_select\" onchange=\"fct3()\">
                    <option value=\"\">--Type--</option>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em2"]) || array_key_exists("em2", $context) ? $context["em2"] : (function () { throw new RuntimeError('Variable "em2" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 20
            echo "                        <option  value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 20), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleType", [], "any", false, false, false, 20), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "   
                </select>
            <br>
            <br>
            <br>
                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                                <div id=\"vf\" style=\"display:none;\" >
                                    <label>Veuillez saisir la reponse correct</label>
                                    <input id=\"vrai\" type=\"radio\" name=\"VF\" value=\"Vrai\"/>
                                    <label for=\"vrai\">vrai</label>                               
                                    <input id=\"faux\" type=\"radio\" name=\"VF\" value=\"Faux\"/>
                                    <label for=\"faux\">faux</label>
                                </div>

                                <div id=\"libre\" style=\"display:none;\">
                                    <label>Veuillez saisir un exemple de réponse correcte</label>
                                    <input type=\"text\" name=\"Libre\"/>
                                </div>

                                 <div id=\"numerique\" style=\"display:none;\">
                                    <label>Veuillez saisir la réponse correcte :</label>
                                    <input type=\"number\" name=\"Numerique\"/>
                                </div>

                                <div  id=\"qcm\" style=\"display:none;\">
                                
                                    <input type=\"checkbox\" id=\"0\" name=\"ChoixMultiple[]\" value=\"0\">
                                    <input for=\"0\" type=\"text\" name=\"choixx0\"/><br>

                                    <input type=\"checkbox\" id=\"1\" name=\"ChoixMultiple[]\" value=\"1\">
                                    <input for=\"1\" type=\"text\" name=\"choixx1\"/><br>
                                    
                                    <input type=\"checkbox\" id=\"2\" name=\"ChoixMultiple[]\" value=\"2\">
                                    <input for=\"2\" type=\"text\" name=\"choixx2\"/><br>

                                   <div  class=\"appand\">  </div>
                                    <a class=\"X\" id=\"update\" >+</a>
                                </div>

                                <div  id=\"qcu\" style=\"display:none;\">

                                    <input id=\"0\" type=\"radio\" name=\"UNIQUE\" value=\"0\">
                                    <input for=\"0\" type=\"text\" name=\"choix0\"/><br>                               
                                    <input id=\"1\" type=\"radio\" name=\"UNIQUE\" value=\"1\">
                                    <input for=\"1\" type=\"text\" name=\"choix1\"/><br>
                                    <input id=\"2\" type=\"radio\" name=\"UNIQUE\" value=\"2\">
                                    <input for=\"2\" type=\"text\" name=\"choix2\"/><br>
                                    
                                   <div  class=\"appand\">  </div>
                                    <a class=\"X\" id=\"up\" >+</a>
                                </div>

                            </div> 
                        </div>
            <br>
        
            <label for=\"pet-select\">Choisir une matiére:</label>

                <select name=\"matiere\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new RuntimeError('Variable "em" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 83
            echo "                            <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 83), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleMatiere", [], "any", false, false, false, 83), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                </select>
            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>

                <select name=\"thematique\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em1"]) || array_key_exists("em1", $context) ? $context["em1"] : (function () { throw new RuntimeError('Variable "em1" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 95
            echo "                            <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 95), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleThematique", [], "any", false, false, false, 95), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </select>

            <br>
            <br>

                        <input class=\"ecrire\" name=\"submit\" type=\"submit\" value=\"Ajouter\"></input>
          </form>
          
        </div>
    </div>

<script type=\"text/javascript\">

 
\$(document).ready(function() {
var count = 3;

  \$(\"#update\").click(function() {
    var xs=count++;
   
\$(\"<input type='checkbox' id=\"+xs+\" name='ChoixMultiple[]' value=\"+xs+\"><input for=\"+xs+\" type='text' name='choixx\"+xs+\"'/><br>\").appendTo(\".appand\"); })

//\$(\"#up\").click(function() {
    //var xss=count++;
   
//\$(\"<input id=\"+xss\" type='radio name='UNIQUE' value=\"+xss+\"><input for=\"+xss+\" type='text' name='choix'/><br>\").appendTo(\".appand\"); })

});


function fct3() {
  var x = document.getElementById(\"type_select\").value;
  //document.getElementById(\"demo\").innerHTML = x;

            if (x == 1){
            \$(\"#vf\").css({\"display\": \"block\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            } 
            if (x == 4){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"block\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            // \$(\"<input type='checkbox' id='choix3' name='choix3' value=''><input for='choix3' type='text' name='qcm'/><br>\").appendTo(\".appand\");


            } 
            if (x == 2){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"block\"});


            } 
            if (x == 5){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"block\"});
            \$(\"#qcu\").css({\"display\": \"none\"});

            } 

            if (x == 3){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"block\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            } 

}


</script>
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
        return array (  207 => 97,  196 => 95,  192 => 94,  181 => 85,  170 => 83,  166 => 82,  103 => 21,  92 => 20,  88 => 19,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}

    <h2 class=\"titre\">Nouvelle Question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
            <form method=\"post\" action=\"{{ path('admin_ajouter_questions')}}\" >

            <div id=\"question\" style=\"display:block;\">
                    <label>Veuillez saisir votre question :</label>
                    <input type=\"text\" name=\"question\"/>
            </div>

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"type_select\" onchange=\"fct3()\">
                    <option value=\"\">--Type--</option>
                    {% for MT in em2 %}
                        <option  value={{MT.getId}}>{{MT.getLibelleType}}</option>
                    {% endfor %}   
                </select>
            <br>
            <br>
            <br>
                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                                <div id=\"vf\" style=\"display:none;\" >
                                    <label>Veuillez saisir la reponse correct</label>
                                    <input id=\"vrai\" type=\"radio\" name=\"VF\" value=\"Vrai\"/>
                                    <label for=\"vrai\">vrai</label>                               
                                    <input id=\"faux\" type=\"radio\" name=\"VF\" value=\"Faux\"/>
                                    <label for=\"faux\">faux</label>
                                </div>

                                <div id=\"libre\" style=\"display:none;\">
                                    <label>Veuillez saisir un exemple de réponse correcte</label>
                                    <input type=\"text\" name=\"Libre\"/>
                                </div>

                                 <div id=\"numerique\" style=\"display:none;\">
                                    <label>Veuillez saisir la réponse correcte :</label>
                                    <input type=\"number\" name=\"Numerique\"/>
                                </div>

                                <div  id=\"qcm\" style=\"display:none;\">
                                
                                    <input type=\"checkbox\" id=\"0\" name=\"ChoixMultiple[]\" value=\"0\">
                                    <input for=\"0\" type=\"text\" name=\"choixx0\"/><br>

                                    <input type=\"checkbox\" id=\"1\" name=\"ChoixMultiple[]\" value=\"1\">
                                    <input for=\"1\" type=\"text\" name=\"choixx1\"/><br>
                                    
                                    <input type=\"checkbox\" id=\"2\" name=\"ChoixMultiple[]\" value=\"2\">
                                    <input for=\"2\" type=\"text\" name=\"choixx2\"/><br>

                                   <div  class=\"appand\">  </div>
                                    <a class=\"X\" id=\"update\" >+</a>
                                </div>

                                <div  id=\"qcu\" style=\"display:none;\">

                                    <input id=\"0\" type=\"radio\" name=\"UNIQUE\" value=\"0\">
                                    <input for=\"0\" type=\"text\" name=\"choix0\"/><br>                               
                                    <input id=\"1\" type=\"radio\" name=\"UNIQUE\" value=\"1\">
                                    <input for=\"1\" type=\"text\" name=\"choix1\"/><br>
                                    <input id=\"2\" type=\"radio\" name=\"UNIQUE\" value=\"2\">
                                    <input for=\"2\" type=\"text\" name=\"choix2\"/><br>
                                    
                                   <div  class=\"appand\">  </div>
                                    <a class=\"X\" id=\"up\" >+</a>
                                </div>

                            </div> 
                        </div>
            <br>
        
            <label for=\"pet-select\">Choisir une matiére:</label>

                <select name=\"matiere\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        {% for MT in em %}
                            <option value={{MT.getId}}>{{MT.getLibelleMatiere}}</option>
                        {% endfor %}
                </select>
            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>

                <select name=\"thematique\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        {% for MT in em1 %}
                            <option value={{MT.getId}}>{{MT.getLibelleThematique}}</option>
                        {% endfor %}
                </select>

            <br>
            <br>

                        <input class=\"ecrire\" name=\"submit\" type=\"submit\" value=\"Ajouter\"></input>
          </form>
          
        </div>
    </div>

<script type=\"text/javascript\">

 
\$(document).ready(function() {
var count = 3;

  \$(\"#update\").click(function() {
    var xs=count++;
   
\$(\"<input type='checkbox' id=\"+xs+\" name='ChoixMultiple[]' value=\"+xs+\"><input for=\"+xs+\" type='text' name='choixx\"+xs+\"'/><br>\").appendTo(\".appand\"); })

//\$(\"#up\").click(function() {
    //var xss=count++;
   
//\$(\"<input id=\"+xss\" type='radio name='UNIQUE' value=\"+xss+\"><input for=\"+xss+\" type='text' name='choix'/><br>\").appendTo(\".appand\"); })

});


function fct3() {
  var x = document.getElementById(\"type_select\").value;
  //document.getElementById(\"demo\").innerHTML = x;

            if (x == 1){
            \$(\"#vf\").css({\"display\": \"block\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            } 
            if (x == 4){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"block\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            // \$(\"<input type='checkbox' id='choix3' name='choix3' value=''><input for='choix3' type='text' name='qcm'/><br>\").appendTo(\".appand\");


            } 
            if (x == 2){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"block\"});


            } 
            if (x == 5){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"none\"});
            \$(\"#numerique\").css({\"display\": \"block\"});
            \$(\"#qcu\").css({\"display\": \"none\"});

            } 

            if (x == 3){
            \$(\"#vf\").css({\"display\": \"none\"});
            \$(\"#libre\").css({\"display\": \"none\"});
            \$(\"#qcm\").css({\"display\": \"block\"});
            \$(\"#numerique\").css({\"display\": \"none\"});
            \$(\"#qcu\").css({\"display\": \"none\"});
            } 

}


</script>
{% endblock %}

", "/admin/ajouterQuestion.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/ajouterQuestion.html.twig");
    }
}
