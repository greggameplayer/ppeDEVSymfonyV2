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

/* admin/hospital/room/manageService.html.twig */
class __TwigTemplate_827f5bcc14045c9ba4734309e92b4f27e86b7377da8730415e981070c3b3d768 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hospital/room/manageService.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hospital/room/manageService.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/hospital/room/manageService.html.twig", 1);
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

        echo "Gestion ";
        echo twig_escape_filter($this->env, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        
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
        $this->loadTemplate("composants/header.html.twig", "admin/hospital/room/manageService.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("composants/searchBarHospital.html.twig", "admin/hospital/room/manageService.html.twig", 17)->display($context);
        // line 18
        echo "

    ";
        // line 20
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 20, $this->source); })())), 0))) {
            // line 21
            echo "        <p class=\"alert alert-warning text-center\">Ce service n'a pas encore de chambre</p>
    ";
        } else {
            // line 23
            echo "
<div class=\"table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro de chambre</th>
            <th scope=\"col\">Nombre de lits</th>
            <th scope=\"col\" class=\"text-center\">Commandes</th>
          </tr>
        </thead>
          <tbody>
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                // line 35
                echo "                  <tr>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "number", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "countBed", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    <td>
                        <div class=\"d-flex flex-row justify-content-center\">
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addBed", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })()), "name" => (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 40, $this->source); })()), "room" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\" class=\"btn btn-primary mr-3 w-50\"><i class=\"fas fa-plus\"></i> Ajouter un lit</a>
                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeBed", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 41, $this->source); })()), "name" => (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 41, $this->source); })()), "room" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-warning mr-3 w-50\"><i class=\"fas fa-backspace\"></i> Retirer un lit</a>
                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateRoom", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })()), "name" => (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 42, $this->source); })()), "room" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"btn btn-info mr-3 w-50\"><i class=\"far fa-edit\"></i> Modifier</a>
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delRoom", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 43, $this->source); })()), "name" => (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 43, $this->source); })()), "room" => twig_get_attribute($this->env, $this->source, $context["room"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"btn btn-danger mr-3 w-50 delete\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                        </div>
                    </td>
                  </tr>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </tbody>
      </table>
</div>
        ";
            // line 52
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 52, $this->source); })()));
            echo "

    ";
        }
        // line 55
        echo "
    <div class=\"mx-5\">
        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addRoom", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 57, $this->source); })()), "name" => (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 57, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary w-100 add\">Ajouter une chambre</a>
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer cette chambre ?</p>
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
        return "admin/hospital/room/manageService.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 57,  223 => 55,  217 => 52,  212 => 49,  200 => 43,  196 => 42,  192 => 41,  188 => 40,  182 => 37,  178 => 36,  175 => 35,  171 => 34,  158 => 23,  154 => 21,  152 => 20,  148 => 18,  145 => 17,  142 => 16,  132 => 15,  111 => 13,  98 => 9,  88 => 8,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
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


{% block title %}Gestion {{ service }} {% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% include 'composants/searchBarHospital.html.twig' %}


    {% if rooms| length == 0  %}
        <p class=\"alert alert-warning text-center\">Ce service n'a pas encore de chambre</p>
    {% else  %}

<div class=\"table-responsive\">
      <table class=\"table\">
        <thead>
          <tr>
            <th scope=\"col\">Numéro de chambre</th>
            <th scope=\"col\">Nombre de lits</th>
            <th scope=\"col\" class=\"text-center\">Commandes</th>
          </tr>
        </thead>
          <tbody>
        {% for room in rooms %}
                  <tr>
                    <td>{{ room.number }}</td>
                    <td>{{ room.countBed }}</td>
                    <td>
                        <div class=\"d-flex flex-row justify-content-center\">
                        <a href=\"{{ path( 'addBed',  {'id': id, \"name\" : service, \"room\" : room.id} ) }}\" class=\"btn btn-primary mr-3 w-50\"><i class=\"fas fa-plus\"></i> Ajouter un lit</a>
                        <a href=\"{{ path( 'removeBed',  {'id': id, \"name\" : service, \"room\" : room.id} ) }}\" class=\"btn btn-warning mr-3 w-50\"><i class=\"fas fa-backspace\"></i> Retirer un lit</a>
                        <a href=\"{{ path( 'updateRoom',  {'id': id, \"name\" : service, \"room\" : room.id} ) }}\" class=\"btn btn-info mr-3 w-50\"><i class=\"far fa-edit\"></i> Modifier</a>
                        <a href=\"{{ path( 'delRoom',  {'id': id, \"name\" : service, \"room\" : room.id} ) }}\" class=\"btn btn-danger mr-3 w-50 delete\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                        </div>
                    </td>
                  </tr>

        {% endfor %}
          </tbody>
      </table>
</div>
        {{ knp_pagination_render(rooms) }}

    {% endif %}

    <div class=\"mx-5\">
        <a href=\"{{ path( 'addRoom',  {'id': id, \"name\" : service} ) }}\" class=\"btn btn-primary w-100 add\">Ajouter une chambre</a>
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer cette chambre ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "admin/hospital/room/manageService.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\admin\\hospital\\room\\manageService.html.twig");
    }
}
