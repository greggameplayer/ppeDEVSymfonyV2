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

/* user/patient/homepage.html.twig */
class __TwigTemplate_6bb1101823deac276d2af2de34693366d9cc71d63dc452de07ce04b2bd50ed3e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/patient/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/patient/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/patient/homepage.html.twig", 1);
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
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/searchBar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../css/homepage.css"), "html", null, true);
        echo "\">

    ";
        // line 20
        $this->loadTemplate("composants/header.html.twig", "user/patient/homepage.html.twig", 20)->display($context);
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["erreur"]) || array_key_exists("erreur", $context))) {
            // line 23
            echo "        <div class=\"alert alert-danger\">Impossible de supprimer un patient ayant déjà effectué une réservation</div>
    ";
        }
        // line 25
        echo "    
    ";
        // line 26
        $this->loadTemplate("composants/searchbarPatient.html.twig", "user/patient/homepage.html.twig", 26)->display($context);
        // line 27
        echo "
    ";
        // line 28
        if ((isset($context["error"]) || array_key_exists("error", $context))) {
            // line 29
            echo "        <div class=\"alert alert-warning text-center\">
            <p>Le numéro de sécurité social entré a déjà été utiliser ultérieurement. Le compte patient concerné a donc été réactiver, à vous de le modifier par la suite.</p>
            <div>Nom et prénom du compte patient réactivé: <a class=\"font-weight-bold\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reactivatedPatient"]) || array_key_exists("reactivatedPatient", $context) ? $context["reactivatedPatient"] : (function () { throw new RuntimeError('Variable "reactivatedPatient" does not exist.', 31, $this->source); })()), "lastName", [], "any", false, false, false, 31), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reactivatedPatient"]) || array_key_exists("reactivatedPatient", $context) ? $context["reactivatedPatient"] : (function () { throw new RuntimeError('Variable "reactivatedPatient" does not exist.', 31, $this->source); })()), "firstName", [], "any", false, false, false, 31), "html", null, true);
            echo "</a> </div>
        </div>
    ";
        }
        // line 34
        echo "
    <div class = \"alignCards d-flex flex-wrap\">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 37
            echo "            <div class=\"card mx-4 my-4\" style=\"width: 20rem; height: 26rem\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title h3  mb-3\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "firstName", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "lastName", [], "any", false, false, false, 39), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\"><a class =\"font-weight-bold\">Numéro de sécurité sociale :</a> <br> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["patient"], "socialSecurityNumber", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatePatient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-primary w-100 mb-4\"><i class=\"fas fa-user-edit\"></i> Modifier</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("staysPatient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 42), "lastname" => twig_get_attribute($this->env, $this->source, $context["patient"], "lastName", [], "any", false, false, false, 42), "firstname" => twig_get_attribute($this->env, $this->source, $context["patient"], "firstName", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info w-100 mb-4\"><i class=\"fas fa-history\"></i> Historique Séjours</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newStay", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 43), "lastname" => twig_get_attribute($this->env, $this->source, $context["patient"], "lastName", [], "any", false, false, false, 43), "firstname" => twig_get_attribute($this->env, $this->source, $context["patient"], "firstName", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-warning w-100 mb-4\"><i class=\"far fa-calendar-plus\"></i> Nouveau Séjours</a>
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delPatient", ["id" => twig_get_attribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger w-100 mb-2 delete\"><i class=\"fas fa-user-slash\"></i> Supprimer</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['patient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        <div class=\"card ml-2 mr-2 d-flex flex-column\" style=\"width: 20rem; height: 26rem\">
            <div class=\"card-body text-center d-flex flex-column\">
                <div style=\"font-size: 24px;\">
                    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createPatient");
        echo "\"><i class=\" my-5 mx-0 fas fa-user-plus fa-9x\"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-center\">
        ";
        // line 59
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 59, $this->source); })()));
        echo "
    </div>



    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce patient ?</p>
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
        return "user/patient/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 59,  235 => 52,  229 => 48,  219 => 44,  215 => 43,  211 => 42,  207 => 41,  203 => 40,  197 => 39,  193 => 37,  189 => 36,  185 => 34,  177 => 31,  173 => 29,  171 => 28,  168 => 27,  166 => 26,  163 => 25,  159 => 23,  157 => 22,  154 => 21,  152 => 20,  147 => 18,  143 => 17,  140 => 16,  130 => 15,  111 => 13,  98 => 9,  88 => 8,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/searchBar.css\")}}\">
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/homepage.css\")}}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/deleteAlert.js') }}\" defer></script>
{% endblock %}


{% block title %}Accueil{% endblock %}

{% block body %}

    <link rel=\"stylesheet\" href=\"{{ asset(\"../css/searchBar.css\" )}}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"../css/homepage.css\" )}}\">

    {% include 'composants/header.html.twig' %}

    {% if erreur is defined %}
        <div class=\"alert alert-danger\">Impossible de supprimer un patient ayant déjà effectué une réservation</div>
    {% endif %}
    
    {% include 'composants/searchbarPatient.html.twig' %}

    {% if error is defined %}
        <div class=\"alert alert-warning text-center\">
            <p>Le numéro de sécurité social entré a déjà été utiliser ultérieurement. Le compte patient concerné a donc été réactiver, à vous de le modifier par la suite.</p>
            <div>Nom et prénom du compte patient réactivé: <a class=\"font-weight-bold\">{{ reactivatedPatient.lastName }} {{ reactivatedPatient.firstName }}</a> </div>
        </div>
    {% endif %}

    <div class = \"alignCards d-flex flex-wrap\">
        {% for patient in patients %}
            <div class=\"card mx-4 my-4\" style=\"width: 20rem; height: 26rem\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title h3  mb-3\">{{ patient.firstName }} {{ patient.lastName }}</h4>
                    <p class=\"card-text\"><a class =\"font-weight-bold\">Numéro de sécurité sociale :</a> <br> {{ patient.socialSecurityNumber }}</p>
                    <a href=\"{{ path( 'updatePatient',  {'id': patient.id} ) }}\" class=\"btn btn-primary w-100 mb-4\"><i class=\"fas fa-user-edit\"></i> Modifier</a>
                    <a href=\"{{ path( 'staysPatient',  {'id': patient.id, 'lastname': patient.lastName, 'firstname': patient.firstName} ) }}\" class=\"btn btn-info w-100 mb-4\"><i class=\"fas fa-history\"></i> Historique Séjours</a>
                    <a href=\"{{ path( 'newStay',  {'id': patient.id, 'lastname': patient.lastName, 'firstname': patient.firstName} ) }}\" class=\"btn btn-warning w-100 mb-4\"><i class=\"far fa-calendar-plus\"></i> Nouveau Séjours</a>
                    <a href=\"{{ path( 'delPatient',  {'id': patient.id} ) }}\" class=\"btn btn-danger w-100 mb-2 delete\"><i class=\"fas fa-user-slash\"></i> Supprimer</a>
                </div>
            </div>
        {% endfor %}

        <div class=\"card ml-2 mr-2 d-flex flex-column\" style=\"width: 20rem; height: 26rem\">
            <div class=\"card-body text-center d-flex flex-column\">
                <div style=\"font-size: 24px;\">
                    <a href=\"{{ path( 'createPatient') }}\"><i class=\" my-5 mx-0 fas fa-user-plus fa-9x\"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(patients) }}
    </div>



    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce patient ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "user/patient/homepage.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\user\\patient\\homepage.html.twig");
    }
}
