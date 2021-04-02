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

/* /admin/questions.html.twig */
class __TwigTemplate_15d823e6887e4ff60e4182b28b060293c2275b88fb1a5c2cdbf7356aaabf7174 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/questions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/questions.html.twig"));

        $this->parent = $this->loadTemplate("layouts/adminLayout.html.twig", "/admin/questions.html.twig", 1);
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
        <h2 class=\"titre\">Questions</h2>
        
        <div>
            <div class=\"zone_filtre\">
                <form method=\"POST\" action=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_questions");
        echo "\">
                    <ul>
                        <li>
                        <!-- Types -->
                            <label for=\"pet-select\">Type de question :</label>
                            <select name=\"type_question\">
                                <option value=\"\">--Type--</option>
                                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types_question"]) || array_key_exists("types_question", $context) ? $context["types_question"] : (function () { throw new RuntimeError('Variable "types_question" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 17
            echo "                                        <option  value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "getId", [], "any", false, false, false, 17), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type"], "getLibelleType", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   
                            </select>
                        </li>
                        <li>
                        <!-- Matières -->
                            <label for=\"pet-select\">Matière :</label>
                            <select name=\"matiere_question\">
                                <option value=\"\">--Matière--</option>
                                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matieres_question"]) || array_key_exists("matieres_question", $context) ? $context["matieres_question"] : (function () { throw new RuntimeError('Variable "matieres_question" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 27
            echo "                                        <option  value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "getId", [], "any", false, false, false, 27), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["matiere"], "getLibelleMatiere", [], "any", false, false, false, 27), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "   
                            </select>
                        </li>
                        <li>
                        <!-- Thématiques -->
                            <label for=\"pet-select\">Thématique :</label>
                            <select name=\"thematique_question\">
                                <option value=\"\">--Thématique--</option>
                                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thematiques_question"]) || array_key_exists("thematiques_question", $context) ? $context["thematiques_question"] : (function () { throw new RuntimeError('Variable "thematiques_question" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["thematique"]) {
            // line 37
            echo "                                        <option  value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thematique"], "getId", [], "any", false, false, false, 37), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thematique"], "getLibelleThematique", [], "any", false, false, false, 37), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thematique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "   
                            </select>
                        </li>
                        <li>
                            <button type=\"submit\">Rechercher</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_questions");
        echo "\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_ajouter_categorie");
        echo "\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
            <tr>
                <th>Question</th>
                <th>Propositions</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 60
            echo "            <tr>
                <th>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "contenuQuestion", [], "any", false, false, false, 61), "html", null, true);
            echo "</th>
                <th>
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "propositionsQuestion", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 64
                echo "                        ";
                echo twig_escape_filter($this->env, $context["proposition"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </th>
                <th><a id=\"button_modifier\" class=\"button_admin\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_modifier_question", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Modifier</a></th>
                <th><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supprimer_question", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" id=\"button_supprimer\" 
                    class=\"button_admin\" onclick=\"return confirm('Voulez-vous supprimer cette question ?')\">Supprimer</a></th>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 72
            echo "            <tr>
                <th colspan=\"4\"><center>Aucun résultat</center></th>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/admin/questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 76,  221 => 72,  212 => 68,  208 => 67,  205 => 66,  196 => 64,  192 => 63,  187 => 61,  184 => 60,  179 => 59,  167 => 50,  163 => 49,  150 => 38,  139 => 37,  135 => 36,  125 => 28,  114 => 27,  110 => 26,  100 => 18,  89 => 17,  85 => 16,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layouts/adminLayout.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"titre\">Questions</h2>
        
        <div>
            <div class=\"zone_filtre\">
                <form method=\"POST\" action=\"{{path('admin_questions')}}\">
                    <ul>
                        <li>
                        <!-- Types -->
                            <label for=\"pet-select\">Type de question :</label>
                            <select name=\"type_question\">
                                <option value=\"\">--Type--</option>
                                    {% for type in types_question %}
                                        <option  value={{type.getId}}>{{type.getLibelleType}}</option>
                                    {% endfor %}   
                            </select>
                        </li>
                        <li>
                        <!-- Matières -->
                            <label for=\"pet-select\">Matière :</label>
                            <select name=\"matiere_question\">
                                <option value=\"\">--Matière--</option>
                                    {% for matiere in matieres_question %}
                                        <option  value={{matiere.getId}}>{{matiere.getLibelleMatiere}}</option>
                                    {% endfor %}   
                            </select>
                        </li>
                        <li>
                        <!-- Thématiques -->
                            <label for=\"pet-select\">Thématique :</label>
                            <select name=\"thematique_question\">
                                <option value=\"\">--Thématique--</option>
                                    {% for thematique in thematiques_question %}
                                        <option  value={{thematique.getId}}>{{thematique.getLibelleThematique}}</option>
                                    {% endfor %}   
                            </select>
                        </li>
                        <li>
                            <button type=\"submit\">Rechercher</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <a href=\"{{ path('admin_ajouter_questions') }}\" id=\"ajouter_question\">+ Nouvelle question</a>
        <a href=\"{{ path('admin_ajouter_categorie') }}\" id=\"ajouter_categorie\">+ Nouvelle thématique/matière</a>

        <table class=\"tableau_de_resultats tableau_utilisateurs\">
            <tr>
                <th>Question</th>
                <th>Propositions</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
            {% for question in questions %}
            <tr>
                <th>{{ question.contenuQuestion }}</th>
                <th>
                    {% for proposition in question.propositionsQuestion %}
                        {{ proposition }}
                    {% endfor %}
                </th>
                <th><a id=\"button_modifier\" class=\"button_admin\" href=\"{{ path('admin_modifier_question', {'id' : question.id }) }}\">Modifier</a></th>
                <th><a href=\"{{ path('admin_supprimer_question', {'id' : question.id }) }}\" id=\"button_supprimer\" 
                    class=\"button_admin\" onclick=\"return confirm('Voulez-vous supprimer cette question ?')\">Supprimer</a></th>
            </tr>
            {% else %}
            <tr>
                <th colspan=\"4\"><center>Aucun résultat</center></th>
            </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}", "/admin/questions.html.twig", "/home/oumaima/S6/Projet/TP/Projet-S6-master/templates/admin/questions.html.twig");
    }
}
