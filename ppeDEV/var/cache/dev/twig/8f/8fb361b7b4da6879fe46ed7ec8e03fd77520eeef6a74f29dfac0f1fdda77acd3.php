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

/* user/stay/updateStay.html.twig */
class __TwigTemplate_2e4151e4fd0cd3192e3472c5a68cf5df9a3d668b26fedb86c6a7199d6e587b2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/stay/updateStay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/stay/updateStay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/stay/updateStay.html.twig", 1);
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

        echo "Modifier séjour";
        
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
        $this->loadTemplate("composants/header.html.twig", "user/stay/updateStay.html.twig", 12)->display($context);
        // line 13
        echo "    ";
        if ((isset($context["fail"]) || array_key_exists("fail", $context))) {
            // line 14
            echo "        <div class=\"alert alert-danger\">Aucun lit disponible pour ces dates</div>
    ";
        }
        // line 16
        echo "    ";
        if ((isset($context["pb"]) || array_key_exists("pb", $context))) {
            // line 17
            echo "        <div class=\"alert alert-danger\">Les dates saisies ne sont pas cohérentes</div>
    ";
        }
        // line 19
        echo "    ";
        if ((isset($context["pb2"]) || array_key_exists("pb2", $context))) {
            // line 20
            echo "        <div class=\"alert alert-danger\">Aucune place pour un séjour aussi long avant le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["pb2"]) || array_key_exists("pb2", $context) ? $context["pb2"] : (function () { throw new RuntimeError('Variable "pb2" does not exist.', 20, $this->source); })()), "d/m/Y H:i"), "html", null, true);
            echo "</div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["pb3"]) || array_key_exists("pb3", $context))) {
            // line 23
            echo "        <div class=\"alert alert-danger\">Aucune place disponible pour le moment dans ce service</div>
    ";
        }
        // line 25
        echo "    <div class=\"d-flex justify-content-center\">
        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("applyUpdateStay", ["id" => (isset($context["idPatient"]) || array_key_exists("idPatient", $context) ? $context["idPatient"] : (function () { throw new RuntimeError('Variable "idPatient" does not exist.', 26, $this->source); })()), "lastname" => (isset($context["lastname"]) || array_key_exists("lastname", $context) ? $context["lastname"] : (function () { throw new RuntimeError('Variable "lastname" does not exist.', 26, $this->source); })()), "firstname" => (isset($context["firstname"]) || array_key_exists("firstname", $context) ? $context["firstname"] : (function () { throw new RuntimeError('Variable "firstname" does not exist.', 26, $this->source); })()), "serviceId" => (isset($context["serviceId"]) || array_key_exists("serviceId", $context) ? $context["serviceId"] : (function () { throw new RuntimeError('Variable "serviceId" does not exist.', 26, $this->source); })()), "idStay" => (isset($context["idStay"]) || array_key_exists("idStay", $context) ? $context["idStay"] : (function () { throw new RuntimeError('Variable "idStay" does not exist.', 26, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\" class=\"w-75 d-flex flex-column\">
            <div class=\"form-group\">
                <label for=\"date1\" class=\"h3 ml-4 mb-0\">Date de début :</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"date1\"  name=\"date1\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["entryDate"]) || array_key_exists("entryDate", $context) ? $context["entryDate"] : (function () { throw new RuntimeError('Variable "entryDate" does not exist.', 29, $this->source); })()), "Y-m-d\\TH:i"), "html", null, true);
        echo "\" required >
            </div>
            <div class=\"form-group\">
                <label for=\"date2\" class=\"h3 ml-4 mb-0\">Date de fin :</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"date2\"  name=\"date2\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["leaveDate"]) || array_key_exists("leaveDate", $context) ? $context["leaveDate"] : (function () { throw new RuntimeError('Variable "leaveDate" does not exist.', 33, $this->source); })()), "Y-m-d\\TH:i"), "html", null, true);
        echo "\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlSelect1\" class=\"h3 ml-4 mb-0\">Service :</label>
                      <select class=\"form-control\" id=\"service\" name=\"service\" required>
                          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 39
            echo "                              <option value=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            if ((0 === twig_compare((isset($context["serviceId"]) || array_key_exists("serviceId", $context) ? $context["serviceId"] : (function () { throw new RuntimeError('Variable "serviceId" does not exist.', 39, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 39)))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                      </select>

            </div>
            <div class=\"mt-4 d-flex justify-content-center w-100\">
                <div class=\"w-75 d-flex justify-content-center\">
                    <input type=\"submit\" class=\"btn btn-primary w-100\" value=\"Modifier\">
                </div>
            </div>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/stay/updateStay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 41,  177 => 39,  173 => 38,  165 => 33,  158 => 29,  152 => 26,  149 => 25,  145 => 23,  142 => 22,  136 => 20,  133 => 19,  129 => 17,  126 => 16,  122 => 14,  119 => 13,  116 => 12,  106 => 11,  87 => 9,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/searchBar.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/homepage.css\")}}\">
{% endblock %}


{% block title %}Modifier séjour{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% if fail is defined %}
        <div class=\"alert alert-danger\">Aucun lit disponible pour ces dates</div>
    {% endif %}
    {% if pb is defined %}
        <div class=\"alert alert-danger\">Les dates saisies ne sont pas cohérentes</div>
    {% endif %}
    {% if pb2 is defined %}
        <div class=\"alert alert-danger\">Aucune place pour un séjour aussi long avant le {{ pb2|date('d/m/Y H:i') }}</div>
    {% endif %}
    {% if pb3 is defined %}
        <div class=\"alert alert-danger\">Aucune place disponible pour le moment dans ce service</div>
    {% endif %}
    <div class=\"d-flex justify-content-center\">
        <form action=\"{{ path('applyUpdateStay', {'id': idPatient, 'lastname': lastname, 'firstname': firstname, 'serviceId': serviceId, 'idStay': idStay}) }}\" method=\"POST\" class=\"w-75 d-flex flex-column\">
            <div class=\"form-group\">
                <label for=\"date1\" class=\"h3 ml-4 mb-0\">Date de début :</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"date1\"  name=\"date1\" value=\"{{ entryDate|date('Y-m-d\\\\TH:i') }}\" required >
            </div>
            <div class=\"form-group\">
                <label for=\"date2\" class=\"h3 ml-4 mb-0\">Date de fin :</label>
                <input type=\"datetime-local\" class=\"form-control\" id=\"date2\"  name=\"date2\" value=\"{{ leaveDate|date('Y-m-d\\\\TH:i') }}\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleFormControlSelect1\" class=\"h3 ml-4 mb-0\">Service :</label>
                      <select class=\"form-control\" id=\"service\" name=\"service\" required>
                          {% for service in services %}
                              <option value={{ service.id }} {% if serviceId == service.id %} selected {% endif %}>{{ service.name }}</option>
                          {% endfor %}
                      </select>

            </div>
            <div class=\"mt-4 d-flex justify-content-center w-100\">
                <div class=\"w-75 d-flex justify-content-center\">
                    <input type=\"submit\" class=\"btn btn-primary w-100\" value=\"Modifier\">
                </div>
            </div>
        </form>
    </div>

{% endblock %}", "user/stay/updateStay.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\user\\stay\\updateStay.html.twig");
    }
}
