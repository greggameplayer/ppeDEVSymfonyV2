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

/* user/patient/historyStay.html.twig */
class __TwigTemplate_ed9b7d3d21aaac505749096abb942700ebb7191e5432d94feaee3a36225622f8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/patient/historyStay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/patient/historyStay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/patient/historyStay.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/searchBar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/homepage.css"), "html", null, true);
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

        echo "Accueil";
        
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
        $this->loadTemplate("composants/header.html.twig", "user/patient/historyStay.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"search\">
        <h1>Séjour de ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    ";
        // line 16
        if ((0 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 16, $this->source); })()), "items", [], "any", false, false, false, 16)), 0))) {
            // line 17
            echo "        <p class=\"mt-5 h5 text-danger text-center\">Aucun séjour pour ce patient</p>
    ";
        } else {
            // line 19
            echo "        <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Date d'entrée</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Durée du séjour</th>
            <th scope=\"col\">Date de création</th>
            <th scope=\"col\">Service</th>
            <th scope=\"col\">Chambre</th>
            <th scope=\"col\">Lit</th>
            <th scope=\"col\">Commandes</th>
          </tr>
        </thead>

        ";
            // line 35
            $context["num"] = 0;
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 37, $this->source); })()), "items", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
                // line 38
                echo "            ";
                $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 38, $this->source); })()) + 1);
                // line 39
                echo "            <tbody>
              <tr>
                <th scope=\"row\">";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "</th>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "entryDate", [], "any", false, false, false, 42), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "leaveDate", [], "any", false, false, false, 43), "d/m/Y H:i"), "html", null, true);
                echo "</td>
                <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "duree", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "creationDate", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "service", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "room", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "bed", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                <td>
                  <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStay", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "stayId", [], "any", false, false, false, 50), "serviceId" => twig_get_attribute($this->env, $this->source, $context["stay"], "serviceId", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-warning w-100\">Modifier</a>
                  <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delStay", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "stayId", [], "any", false, false, false, 51)]), "html", null, true);
                echo "\" class=\"btn btn-info w-100 mt-3\">Supprimer</a>
                </td>
              </tr>
            </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "    </table>
    ";
        }
        // line 58
        echo "    </div>
    ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 59, $this->source); })()));
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/patient/historyStay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 59,  221 => 58,  217 => 56,  206 => 51,  202 => 50,  197 => 48,  193 => 47,  189 => 46,  185 => 45,  181 => 44,  177 => 43,  173 => 42,  169 => 41,  165 => 39,  162 => 38,  158 => 37,  155 => 36,  153 => 35,  135 => 19,  131 => 17,  129 => 16,  122 => 14,  119 => 13,  116 => 12,  106 => 11,  87 => 9,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/searchBar.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/homepage.css\")}}\">
{% endblock %}


{% block title %}Accueil{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    <div class=\"search\">
        <h1>Séjour de {{ firstname }} {{ lastname }}</h1>
    </div>
    {% if stays.items|length == 0 %}
        <p class=\"mt-5 h5 text-danger text-center\">Aucun séjour pour ce patient</p>
    {% else %}
        <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Date d'entrée</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Durée du séjour</th>
            <th scope=\"col\">Date de création</th>
            <th scope=\"col\">Service</th>
            <th scope=\"col\">Chambre</th>
            <th scope=\"col\">Lit</th>
            <th scope=\"col\">Commandes</th>
          </tr>
        </thead>

        {% set num = 0 %}

        {% for stay in stays.items %}
            {% set num = num + 1 %}
            <tbody>
              <tr>
                <th scope=\"row\">{{ num }}</th>
                <td>{{ stay.entryDate|date('d/m/Y H:i') }}</td>
                <td>{{ stay.leaveDate|date('d/m/Y H:i') }}</td>
                <td>{{ stay.duree }}</td>
                <td>{{ stay.creationDate|date('d/m/Y') }}</td>
                <td>{{ stay.service }}</td>
                <td>{{ stay.room }}</td>
                <td>{{ stay.bed }}</td>
                <td>
                  <a href=\"{{ path( 'updateStay',  {'id': stay.stayId , 'serviceId': stay.serviceId} ) }}\" class=\"btn btn-warning w-100\">Modifier</a>
                  <a href=\"{{ path( 'delStay',  {'id': stay.stayId } ) }}\" class=\"btn btn-info w-100 mt-3\">Supprimer</a>
                </td>
              </tr>
            </tbody>
        {% endfor %}
    </table>
    {% endif %}
    </div>
    {{ knp_pagination_render(stays) }}

{% endblock %}

", "user/patient/historyStay.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\user\\patient\\historyStay.html.twig");
    }
}
