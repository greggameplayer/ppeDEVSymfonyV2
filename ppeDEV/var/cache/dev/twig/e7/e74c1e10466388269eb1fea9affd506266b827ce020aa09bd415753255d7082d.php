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

/* admin/log/logAddStay.html.twig */
class __TwigTemplate_5eb5f818ffb688c087b2137911c9f4cfa27b041f410e6eb9965405ced3e236b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/log/logAddStay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/log/logAddStay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/log/logAddStay.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../css/searchBar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../../css/homepage.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Historique des séjours";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("composants/header.html.twig", "admin/log/logAddStay.html.twig", 12)->display($context);
        // line 13
        echo "    ";
        $this->loadTemplate("composants/searchBarLogStay.html.twig", "admin/log/logAddStay.html.twig", 13)->display($context);
        // line 14
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Utilisateur</th>
            <th scope=\"col\">Patient</th>
            <th scope=\"col\">Date d'entrée</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Date de modification</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>
        <tbody>

        ";
        // line 30
        $context["num"] = 0;
        // line 31
        echo "
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 32, $this->source); })()), "items", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 33
            echo "            ";
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 33, $this->source); })()) + 1);
            // line 34
            echo "              <tr>
                <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "fn", [], "any", false, false, false, 36), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "ln", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "first_name", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "last_name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "entry_date", [], "any", false, false, false, 38), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "leave_date", [], "any", false, false, false, 39), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "modification", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 41), "modification"))) {
                echo " Modification ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 41), "suppression"))) {
                echo " Suppression ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 41), "creation"))) {
                echo " Création ";
            } else {
                echo " Réactivation";
            }
            echo "</td>
              </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
    </table>
    </div>
        <div class=\"d-flex justify-content-center\">
            ";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 48, $this->source); })()));
        echo "
        </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/log/logAddStay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 48,  200 => 44,  183 => 41,  179 => 40,  175 => 39,  171 => 38,  165 => 37,  159 => 36,  155 => 35,  152 => 34,  149 => 33,  145 => 32,  142 => 31,  140 => 30,  122 => 14,  119 => 13,  116 => 12,  106 => 11,  87 => 9,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset(\"../../css/searchBar.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"../../css/homepage.css\") }}\">
{% endblock %}


{% block title %}Historique des séjours{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% include 'composants/searchBarLogStay.html.twig' %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Utilisateur</th>
            <th scope=\"col\">Patient</th>
            <th scope=\"col\">Date d'entrée</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Date de modification</th>
            <th scope=\"col\">Action</th>
          </tr>
        </thead>
        <tbody>

        {% set num = 0 %}

        {% for log in logs.items %}
            {% set num = num + 1 %}
              <tr>
                <th scope=\"row\">{{ num }}</th>
                <td>{{ log.fn }} {{ log.ln }}</td>
                <td>{{ log.first_name }} {{ log.last_name }}</td>
                <td>{{ log.entry_date|date('d/m/Y H:i') }}</td>
                <td>{{ log.leave_date|date('d/m/Y H:i') }}</td>
                <td>{{ log.modification|date('d/m/Y H:i') }}</td>
                <td>{% if log.action == \"modification\" %} Modification {% elseif log.action == \"suppression\" %} Suppression {% elseif log.action == \"creation\" %} Création {% else %} Réactivation{% endif %}</td>
              </tr>
        {% endfor %}
            </tbody>
    </table>
    </div>
        <div class=\"d-flex justify-content-center\">
            {{ knp_pagination_render(logs) }}
        </div>

{% endblock %}
", "admin/log/logAddStay.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\admin\\log\\logAddStay.html.twig");
    }
}
