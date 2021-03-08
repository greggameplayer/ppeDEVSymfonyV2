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

/* admin/homepageAdmin.html.twig */
class __TwigTemplate_9b887ea6021b79d4b636c2f51e2620e3ad37707e38ac61ee08b46f72258e8791 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/homepageAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/homepageAdmin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/homepageAdmin.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/searchBar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/homepage.css"), "html", null, true);
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

        echo "Accueil";
        
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
        $this->loadTemplate("composants/header.html.twig", "admin/homepageAdmin.html.twig", 16)->display($context);
        // line 17
        echo "    ";
        $this->loadTemplate("composants/searchbarStaff.html.twig", "admin/homepageAdmin.html.twig", 17)->display($context);
        // line 18
        echo "
    <div class = \"alignCards d-flex flex-wrap\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["staffs"]) || array_key_exists("staffs", $context) ? $context["staffs"] : (function () { throw new RuntimeError('Variable "staffs" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 21
            echo "            <div class=\"card mx-2 my-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "firstName", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "lastName", [], "any", false, false, false, 23), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\"><a class =\"font-weight-bold\">Rôle :<br></a> ";
            // line 24
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["staff"], "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24), "ROLE_ADMIN"))) {
                echo " Administrateur ";
            } else {
                echo " Personnel ";
            }
            echo "</p>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStaff", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-primary w-100 mb-2\"><i class=\"fas fa-user-edit\"></i> Gérer</a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delStaff", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-danger w-100 mb-2 delete\"><i class=\"fas fa-user-slash\"></i> Supprimer</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        <div class=\"card ml-2 mr-2 d-flex flex-column\" style=\"width: 18rem;\">
            <div class=\"card-body text-center d-flex flex-column\">
                <div style=\"font-size: 17.8px;\">
                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createNewStaffMember");
        echo "\"><i class=\" my-5 fas fa-user-plus fa-6x\"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class=\"d-flex justify-content-center\">
        ";
        // line 41
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["staffs"]) || array_key_exists("staffs", $context) ? $context["staffs"] : (function () { throw new RuntimeError('Variable "staffs" does not exist.', 41, $this->source); })()));
        echo "
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce salarié ?</p>
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
        return "admin/homepageAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 41,  191 => 33,  186 => 30,  176 => 26,  172 => 25,  164 => 24,  158 => 23,  154 => 21,  150 => 20,  146 => 18,  143 => 17,  140 => 16,  130 => 15,  111 => 13,  98 => 9,  88 => 8,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset(\"css/searchBar.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"css/homepage.css\")}}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/deleteAlert.js') }}\" defer></script>
{% endblock %}


{% block title %}Accueil{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% include 'composants/searchbarStaff.html.twig' %}

    <div class = \"alignCards d-flex flex-wrap\">
        {% for staff in staffs %}
            <div class=\"card mx-2 my-2\" style=\"width: 18rem;\">
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">{{ staff.firstName }} {{ staff.lastName }}</h5>
                    <p class=\"card-text\"><a class =\"font-weight-bold\">Rôle :<br></a> {% if staff.roles[0] == \"ROLE_ADMIN\" %} Administrateur {% else %} Personnel {% endif %}</p>
                    <a href=\"{{ path( 'updateStaff',  {'id': staff.id} ) }}\" class=\"btn btn-primary w-100 mb-2\"><i class=\"fas fa-user-edit\"></i> Gérer</a>
                    <a href=\"{{ path( 'delStaff',  {'id': staff.id} ) }}\" class=\"btn btn-danger w-100 mb-2 delete\"><i class=\"fas fa-user-slash\"></i> Supprimer</a>
                </div>
            </div>
        {% endfor %}
        <div class=\"card ml-2 mr-2 d-flex flex-column\" style=\"width: 18rem;\">
            <div class=\"card-body text-center d-flex flex-column\">
                <div style=\"font-size: 17.8px;\">
                    <a href=\"{{ path( 'createNewStaffMember') }}\"><i class=\" my-5 fas fa-user-plus fa-6x\"></i></a>
                </div>
            </div>
        </div>

    </div>

    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(staffs) }}
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce salarié ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "admin/homepageAdmin.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\admin\\homepageAdmin.html.twig");
    }
}
