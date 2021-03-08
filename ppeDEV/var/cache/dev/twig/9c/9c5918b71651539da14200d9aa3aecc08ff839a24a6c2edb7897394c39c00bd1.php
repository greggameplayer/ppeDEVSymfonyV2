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

/* admin/hospital/homepageHospital.html.twig */
class __TwigTemplate_2741d09e50d400d1451c34451dc1b9562c2cd0b4f8fb0d5d661d4bedc3b7e8ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hospital/homepageHospital.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hospital/homepageHospital.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/hospital/homepageHospital.html.twig", 1);
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

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/deleteAlert.js"), "html", null, true);
        echo "\" defer></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Services";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        $this->loadTemplate("composants/header.html.twig", "admin/hospital/homepageHospital.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("composants/searchBarHospital.html.twig", "admin/hospital/homepageHospital.html.twig", 17)->display($context);
        // line 18
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Services</th>
            <th scope=\"col\">Nombre de lits</th>
            <th scope=\"col\" class=\"text-center\">Commandes</th>
          </tr>
        </thead>
        <tbody>

        ";
        // line 31
        $context["num"] = 0;
        // line 32
        echo "
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 34
            echo "            ";
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 34, $this->source); })()) + 1);
            // line 35
            echo "              <tr>
                <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "</th>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "bed", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
                    <div class=\"d-flex flex-row justify-content-center\">
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageService", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 41), "name" => twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-primary  mr-3 w-50\"><i class=\"fas fa-tasks\"></i> Gérer</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateService", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info mr-3 w-50\"><i class=\"far fa-edit\"></i> Modifier</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delService", ["id" => twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-danger delete w-50\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                    </div>
                </td>
              </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        <tfoot>
        <tr>
            <td colspan=\"11\">
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addService");
        echo "\" class=\"btn btn-primary w-100 add\">Ajouter un service</a>
            </td>
        </tr>
        </tfoot>
    </table>
    </div>
        <div class=\"d-flex justify-content-center\">
            ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 59, $this->source); })()));
        echo "
        </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce service ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/hospital/homepageHospital.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 59,  215 => 52,  209 => 48,  198 => 43,  194 => 42,  190 => 41,  184 => 38,  180 => 37,  176 => 36,  173 => 35,  170 => 34,  166 => 33,  163 => 32,  161 => 31,  146 => 18,  143 => 17,  140 => 16,  130 => 15,  111 => 13,  98 => 9,  88 => 8,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset(\"../../css/searchBar.css\") }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"../../css/homepage.css\") }}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/deleteAlert.js') }}\" defer></script>
{% endblock %}


{% block title %}Gestion Services{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% include 'composants/searchBarHospital.html.twig' %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Services</th>
            <th scope=\"col\">Nombre de lits</th>
            <th scope=\"col\" class=\"text-center\">Commandes</th>
          </tr>
        </thead>
        <tbody>

        {% set num = 0 %}

        {% for service in services %}
            {% set num = num + 1 %}
              <tr>
                <th scope=\"row\">{{ num }}</th>
                <td>{{ service.name }}</td>
                <td>{{ service.bed }}</td>
                <td>
                    <div class=\"d-flex flex-row justify-content-center\">
                    <a href=\"{{ path( 'manageService',  {'id': service.id, \"name\" : service.name} ) }}\" class=\"btn btn-primary  mr-3 w-50\"><i class=\"fas fa-tasks\"></i> Gérer</a>
                    <a href=\"{{ path( 'updateService',  {'id': service.id} ) }}\" class=\"btn btn-info mr-3 w-50\"><i class=\"far fa-edit\"></i> Modifier</a>
                    <a href=\"{{ path( 'delService',  {'id': service.id} ) }}\" class=\"btn btn-danger delete w-50\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                    </div>
                </td>
              </tr>
        {% endfor %}
            </tbody>
        <tfoot>
        <tr>
            <td colspan=\"11\">
                <a href=\"{{ path('addService') }}\" class=\"btn btn-primary w-100 add\">Ajouter un service</a>
            </td>
        </tr>
        </tfoot>
    </table>
    </div>
        <div class=\"d-flex justify-content-center\">
            {{ knp_pagination_render(services) }}
        </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce service ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "admin/hospital/homepageHospital.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\admin\\hospital\\homepageHospital.html.twig");
    }
}
