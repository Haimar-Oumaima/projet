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

/* /admin/modifierQuestion.html.twig */
class __TwigTemplate_64f8b4655a7a2eb55b463ceb8fc20aa3273ffbe6532a66c6244e02307437e3b3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/modifierQuestion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/modifierQuestion.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "/admin/modifierQuestion.html.twig", 1);
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
    <h2 class=\"titre\">Modifier question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
           <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modifier_question_suite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" >

            <div id=\"question\" style=\"display:block;\">
                    <label>Veuillez saisir votre question :</label>
                    <input type=\"text\" name=\"question\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 12, $this->source); })()), "contenuQuestion", [], "any", false, false, false, 12), "html", null, true);
        echo "\"/>
            </div>

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"type_select\" onchange=\"fct3()\">
                    <option value=";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 18, $this->source); })()), "typeQuestion", [], "any", false, false, false, 18), "getId", [], "any", false, false, false, 18), "html", null, true);
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 18, $this->source); })()), "typeQuestion", [], "any", false, false, false, 18), "getLibelleType", [], "any", false, false, false, 18), "html", null, true);
        echo "</option>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["em2"]) || array_key_exists("em2", $context) ? $context["em2"] : (function () { throw new RuntimeError('Variable "em2" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
            // line 20
            echo "                        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 20, $this->source); })()), "typeQuestion", [], "any", false, false, false, 20), "getId", [], "any", false, false, false, 20)))) {
                // line 21
                echo "                            <option  value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 21), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleType", [], "any", false, false, false, 21), "html", null, true);
                echo "</option>
                        ";
            }
            // line 23
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "   
                </select>
            <br>
            <br>
            <br>
                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                            <!-- Si le type de la question est vrai ou faux -->
                            ";
        // line 31
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 31, $this->source); })()), "typeQuestion", [], "any", false, false, false, 31), "getId", [], "any", false, false, false, 31), 1))) {
            // line 32
            echo "                                <div id=\"vf\" style=\"display:none;\" >
                                    <label>Veuillez saisir la reponse correct</label>
                                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 34, $this->source); })()), "propositionsQuestion", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 35
                echo "                                        
                                        ";
                // line 36
                if ((0 === twig_compare($context["proposition"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 36, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36)))) {
                    // line 37
                    echo "                                            <label for=";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "</label>  
                                            <input id=\"vrai\" type=\"radio\" name=\"VF\" value=";
                    // line 38
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo " checked/>
                                        ";
                } elseif ((0 !== twig_compare(                // line 39
$context["proposition"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 39, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 39), 0, [], "array", false, false, false, 39)))) {
                    // line 40
                    echo "                                    
                                            <label for=";
                    // line 41
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "</label>  
                                            <input id=\"vrai\" type=\"radio\" name=\"VF\" value=";
                    // line 42
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo " />
                                        ";
                }
                // line 44
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </div>
                            
                            <!-- Si le type de la question est libre -->
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 48, $this->source); })()), "typeQuestion", [], "any", false, false, false, 48), "getId", [], "any", false, false, false, 48), 4))) {
            // line 49
            echo "                                <div id=\"libre\" style=\"display:none;\">
                                    <label>Veuillez saisir un exemple de réponse correcte</label>
                                    <input type=\"text\" name=\"Libre\" value = \"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 51, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 51), 0, [], "array", false, false, false, 51), "html", null, true);
            echo "\"/>
                                </div>
                                <!-- Si le type de la question est numérique -->
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 54, $this->source); })()), "typeQuestion", [], "any", false, false, false, 54), "getId", [], "any", false, false, false, 54), 5))) {
            // line 55
            echo "                                 <div id=\"numerique\" style=\"display:none;\">
                                    <label>Veuillez saisir la réponse correcte :</label>
                                    <input type=\"number\" name=\"Numerique\" value = \"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 57, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 57), 0, [], "array", false, false, false, 57), "html", null, true);
            echo "\"/>
                                </div>
                            <!-- Si le type de la question est multiple -->
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 60, $this->source); })()), "typeQuestion", [], "any", false, false, false, 60), "getId", [], "any", false, false, false, 60), 3))) {
            // line 61
            echo "                                <div id=\"qcm\" style=\"display:none;\">
                                    <div class=\"qcm_zone\">
                                    ";
            // line 63
            $context["value"] = 0;
            // line 64
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 64, $this->source); })()), "propositionsQuestion", [], "any", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 65
                echo "                                            ";
                if (twig_in_filter($context["proposition"], twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 65, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 65))) {
                    // line 66
                    echo "                                                <input type=\"checkbox\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), "html", null, true);
                    echo "\" name=\"ChoixMultiple[]\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), "html", null, true);
                    echo "\" checked/>
                                                <input for=\"0\" type=\"text\" name=\"choixx";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\"/><br>
                                            ";
                } elseif (!twig_in_filter(                // line 68
$context["proposition"], twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 68, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                                                <input type=\"checkbox\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
                    echo "\" name=\"ChoixMultiple[]\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 69, $this->source); })()), "html", null, true);
                    echo "\"/>
                                                <input for=\"0\" type=\"text\" name=\"choixx";
                    // line 70
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 70, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\"/><br>
                                            ";
                }
                // line 72
                echo "                                            ";
                $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 72, $this->source); })()) + 1);
                // line 73
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
                                        <input id=\"val\"  type=\"hidden\" name=\"value\" value=\"2\" />
                                    </div>
                                    <div><a class=\"X\" id=\"update\" >+</a></div>
                                </div>
                                <!-- Si le type de la question est unique -->
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 80
(isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 80, $this->source); })()), "typeQuestion", [], "any", false, false, false, 80), "getId", [], "any", false, false, false, 80), 2))) {
            // line 81
            echo "
                                <div  class=\"qcu_zone\" id=\"qcu\" style=\"display:none;\">
                                ";
            // line 83
            $context["value"] = 0;
            // line 84
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 84, $this->source); })()), "propositionsQuestion", [], "any", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 85
                echo "                                            ";
                if (twig_in_filter($context["proposition"], twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 85, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 85))) {
                    // line 86
                    echo "                                                <input type=\"radio\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 86, $this->source); })()), "html", null, true);
                    echo "\" name=\"UNIQUE\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 86, $this->source); })()), "html", null, true);
                    echo "\" checked/>
                                                <input for=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\" type=\"text\" name=\"choix";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\"/><br>
                                            ";
                } elseif (!twig_in_filter(                // line 88
$context["proposition"], twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 88, $this->source); })()), "reponsesQuestion", [], "any", false, false, false, 88))) {
                    // line 89
                    echo "                                                <input type=\"radio\" id=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "\" name=\"UNIQUE\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 89, $this->source); })()), "html", null, true);
                    echo "\"/>
                                                <input for=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\" type=\"text\" name=\"choix";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 90, $this->source); })()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                    echo "\"/><br>
                                            ";
                }
                // line 92
                echo "                                            ";
                $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 92, $this->source); })()) + 1);
                // line 93
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                    
                                </div>
                                ";
        }
        // line 97
        echo "
                            </div> 
                        </div>
            <br>
        
            <label for=\"pet-select\">Choisir une matiére:</label>
                ";
        // line 103
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 103, $this->source); })()), "matiereQuestion", [], "any", false, false, false, 103))) {
            // line 104
            echo "                <select name=\"matiere\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new RuntimeError('Variable "em" does not exist.', 106, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
                // line 107
                echo "                            <option value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 107), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleMatiere", [], "any", false, false, false, 107), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                </select>
                ";
        } else {
            // line 111
            echo "                <select name=\"matiere\" id=\"pet-select\">
                        <option value=";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 112, $this->source); })()), "matiereQuestion", [], "any", false, false, false, 112), "getId", [], "any", false, false, false, 112), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 112, $this->source); })()), "matiereQuestion", [], "any", false, false, false, 112), "getLibelleMatiere", [], "any", false, false, false, 112), "html", null, true);
            echo "</option>
                        ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new RuntimeError('Variable "em" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
                // line 114
                echo "                            ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 114), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 114, $this->source); })()), "matiereQuestion", [], "any", false, false, false, 114), "getId", [], "any", false, false, false, 114)))) {
                    // line 115
                    echo "                                <option value=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 115), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleMatiere", [], "any", false, false, false, 115), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 117
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
                </select>
                ";
        }
        // line 121
        echo "            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>
                ";
        // line 126
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 126, $this->source); })()), "thematiqueQuestion", [], "any", false, false, false, 126))) {
            // line 127
            echo "                <select name=\"thematique\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["em1"]) || array_key_exists("em1", $context) ? $context["em1"] : (function () { throw new RuntimeError('Variable "em1" does not exist.', 129, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
                // line 130
                echo "                            <option value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 130), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleThematique", [], "any", false, false, false, 130), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                </select>
                ";
        } else {
            // line 134
            echo "                <select name=\"thematique\" id=\"pet-select\">
                        <option value=";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 135, $this->source); })()), "thematiqueQuestion", [], "any", false, false, false, 135), "getId", [], "any", false, false, false, 135), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 135, $this->source); })()), "thematiqueQuestion", [], "any", false, false, false, 135), "getLibelleThematique", [], "any", false, false, false, 135), "html", null, true);
            echo "</option>
                        ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["em1"]) || array_key_exists("em1", $context) ? $context["em1"] : (function () { throw new RuntimeError('Variable "em1" does not exist.', 136, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["MT"]) {
                // line 137
                echo "                            ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 137), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 137, $this->source); })()), "thematiqueQuestion", [], "any", false, false, false, 137), "getId", [], "any", false, false, false, 137)))) {
                    // line 138
                    echo "                                <option value=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getId", [], "any", false, false, false, 138), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MT"], "getLibelleThematique", [], "any", false, false, false, 138), "html", null, true);
                    echo "</option>
                            ";
                }
                // line 140
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MT'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                </select>
                ";
        }
        // line 143
        echo "
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
        return "/admin/modifierQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 143,  458 => 141,  452 => 140,  444 => 138,  441 => 137,  437 => 136,  431 => 135,  428 => 134,  424 => 132,  413 => 130,  409 => 129,  405 => 127,  403 => 126,  396 => 121,  391 => 118,  385 => 117,  377 => 115,  374 => 114,  370 => 113,  364 => 112,  361 => 111,  357 => 109,  346 => 107,  342 => 106,  338 => 104,  336 => 103,  328 => 97,  323 => 94,  317 => 93,  314 => 92,  305 => 90,  298 => 89,  296 => 88,  288 => 87,  281 => 86,  278 => 85,  273 => 84,  271 => 83,  267 => 81,  265 => 80,  257 => 74,  251 => 73,  248 => 72,  241 => 70,  234 => 69,  232 => 68,  226 => 67,  219 => 66,  216 => 65,  211 => 64,  209 => 63,  205 => 61,  203 => 60,  197 => 57,  193 => 55,  191 => 54,  185 => 51,  181 => 49,  179 => 48,  174 => 45,  168 => 44,  163 => 42,  157 => 41,  154 => 40,  152 => 39,  148 => 38,  141 => 37,  139 => 36,  136 => 35,  132 => 34,  128 => 32,  126 => 31,  111 => 23,  103 => 21,  100 => 20,  96 => 19,  90 => 18,  81 => 12,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}

    <h2 class=\"titre\">Modifier question</h2>
    <div class=\"box\">
        <div class=\"box_ajout\">
           <form method=\"post\" action=\"{{ path('admin_modifier_question_suite', {'id' : question.id }) }}\" >

            <div id=\"question\" style=\"display:block;\">
                    <label>Veuillez saisir votre question :</label>
                    <input type=\"text\" name=\"question\" value=\"{{ question.contenuQuestion }}\"/>
            </div>

            <label for=\"pet-select\">Type de question:</label>

                <select name=\"Type\" id=\"type_select\" onchange=\"fct3()\">
                    <option value={{ question.typeQuestion.getId }}>{{ question.typeQuestion.getLibelleType }}</option>
                    {% for MT in em2 %}
                        {% if MT.getId != question.typeQuestion.getId %}
                            <option  value={{MT.getId}}>{{MT.getLibelleType}}</option>
                        {% endif %}
                    {% endfor %}   
                </select>
            <br>
            <br>
            <br>
                        <div  class=\"contenu\"> 
                            <div id=\"ici\">
                            <!-- Si le type de la question est vrai ou faux -->
                            {% if question.typeQuestion.getId == 1 %}
                                <div id=\"vf\" style=\"display:none;\" >
                                    <label>Veuillez saisir la reponse correct</label>
                                    {% for proposition in question.propositionsQuestion %}
                                        
                                        {% if proposition == question.reponsesQuestion[0] %}
                                            <label for={{ proposition }}>{{ proposition }}</label>  
                                            <input id=\"vrai\" type=\"radio\" name=\"VF\" value={{ proposition }} checked/>
                                        {% elseif proposition != question.reponsesQuestion[0]%}
                                    
                                            <label for={{ proposition }}>{{ proposition }}</label>  
                                            <input id=\"vrai\" type=\"radio\" name=\"VF\" value={{ proposition }} />
                                        {% endif %}
                                    {% endfor %}
                                </div>
                            
                            <!-- Si le type de la question est libre -->
                            {% elseif question.typeQuestion.getId == 4 %}
                                <div id=\"libre\" style=\"display:none;\">
                                    <label>Veuillez saisir un exemple de réponse correcte</label>
                                    <input type=\"text\" name=\"Libre\" value = \"{{ question.reponsesQuestion[0] }}\"/>
                                </div>
                                <!-- Si le type de la question est numérique -->
                            {% elseif question.typeQuestion.getId == 5 %}
                                 <div id=\"numerique\" style=\"display:none;\">
                                    <label>Veuillez saisir la réponse correcte :</label>
                                    <input type=\"number\" name=\"Numerique\" value = \"{{ question.reponsesQuestion[0] }}\"/>
                                </div>
                            <!-- Si le type de la question est multiple -->
                            {% elseif question.typeQuestion.getId == 3 %}
                                <div id=\"qcm\" style=\"display:none;\">
                                    <div class=\"qcm_zone\">
                                    {% set value =  0 %}
                                        {% for proposition in question.propositionsQuestion %}
                                            {% if proposition in question.reponsesQuestion %}
                                                <input type=\"checkbox\" id=\"{{ value }}\" name=\"ChoixMultiple[]\" value=\"{{ value }}\" checked/>
                                                <input for=\"0\" type=\"text\" name=\"choixx{{ value }}\" value=\"{{ proposition }}\"/><br>
                                            {% elseif proposition not in question.reponsesQuestion %}
                                                <input type=\"checkbox\" id=\"{{ value }}\" name=\"ChoixMultiple[]\" value=\"{{ value }}\"/>
                                                <input for=\"0\" type=\"text\" name=\"choixx{{ value }}\" value=\"{{ proposition }}\"/><br>
                                            {% endif %}
                                            {% set value = value + 1 %}
                                        {% endfor %}

                                        <input id=\"val\"  type=\"hidden\" name=\"value\" value=\"2\" />
                                    </div>
                                    <div><a class=\"X\" id=\"update\" >+</a></div>
                                </div>
                                <!-- Si le type de la question est unique -->
                                {% elseif question.typeQuestion.getId == 2 %}

                                <div  class=\"qcu_zone\" id=\"qcu\" style=\"display:none;\">
                                {% set value =  0 %}
                                        {% for proposition in question.propositionsQuestion %}
                                            {% if proposition in question.reponsesQuestion %}
                                                <input type=\"radio\" id=\"{{ value }}\" name=\"UNIQUE\" value=\"{{ value }}\" checked/>
                                                <input for=\"{{ proposition }}\" type=\"text\" name=\"choix{{ value }}\" value=\"{{ proposition }}\"/><br>
                                            {% elseif proposition not in question.reponsesQuestion %}
                                                <input type=\"radio\" id=\"{{ value }}\" name=\"UNIQUE\" value=\"{{ value }}\"/>
                                                <input for=\"{{ proposition }}\" type=\"text\" name=\"choix{{ value }}\" value=\"{{ proposition }}\"/><br>
                                            {% endif %}
                                            {% set value = value + 1 %}
                                        {% endfor %}
                                    
                                </div>
                                {% endif %}

                            </div> 
                        </div>
            <br>
        
            <label for=\"pet-select\">Choisir une matiére:</label>
                {% if question.matiereQuestion is empty %}
                <select name=\"matiere\" id=\"pet-select\">
                        <option value=\"\">--Matiere--</option>
                        {% for MT in em %}
                            <option value={{MT.getId}}>{{MT.getLibelleMatiere}}</option>
                        {% endfor %}
                </select>
                {% else %}
                <select name=\"matiere\" id=\"pet-select\">
                        <option value={{ question.matiereQuestion.getId }}>{{ question.matiereQuestion.getLibelleMatiere }}</option>
                        {% for MT in em %}
                            {% if MT.getId != question.matiereQuestion.getId %}
                                <option value={{MT.getId}}>{{MT.getLibelleMatiere}}</option>
                            {% endif %}
                        {% endfor %}

                </select>
                {% endif %}
            <br>
            <br>
            <br>

            <label for=\"pet-select\">Choisir une thématique:</label>
                {% if question.thematiqueQuestion is empty %}
                <select name=\"thematique\" id=\"pet-select\">
                        <option value=\"\">--Thématique--</option>
                        {% for MT in em1 %}
                            <option value={{MT.getId}}>{{MT.getLibelleThematique}}</option>
                        {% endfor %}
                </select>
                {% else %}
                <select name=\"thematique\" id=\"pet-select\">
                        <option value={{ question.thematiqueQuestion.getId }}>{{ question.thematiqueQuestion.getLibelleThematique }}</option>
                        {% for MT in em1 %}
                            {% if MT.getId != question.thematiqueQuestion.getId %}
                                <option value={{MT.getId}}>{{MT.getLibelleThematique}}</option>
                            {% endif %}
                        {% endfor %}
                </select>
                {% endif %}

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

", "/admin/modifierQuestion.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/modifierQuestion.html.twig");
    }
}
