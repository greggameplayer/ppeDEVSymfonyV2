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

/* user/stay/homepageStay.html.twig */
class __TwigTemplate_fefd87f2a71ca4015e530f76692e1d94b631b85732a60b13d0abcbb3315ffeee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/stay/homepageStay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/stay/homepageStay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/stay/homepageStay.html.twig", 1);
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
        echo "\" xmlns=\"http://www.w3.org/1999/html\">
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
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/addAlert.js"), "html", null, true);
        echo "\" defer></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Séjours";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        $this->loadTemplate("composants/header.html.twig", "user/stay/homepageStay.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        $this->loadTemplate("composants/searchbarStay.html.twig", "user/stay/homepageStay.html.twig", 18)->display($context);
        // line 19
        echo "



    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Service</th>
            <th scope=\"col\">Chambre</th>
            <th scope=\"col\">Lit</th>
            <th scope=\"col\">Date d'entré</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Durée du séjour</th>
            <th scope=\"col\">Date de création</th>
            <th scope=\"col\">Commandes</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 42
        $context["num"] = 0;
        // line 43
        echo "
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stay"]) {
            // line 45
            echo "                ";
            $context["num"] = ((isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 45, $this->source); })()) + 1);
            // line 46
            echo "                <tr>
                    <th scope=\"row\">";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new RuntimeError('Variable "num" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "</th>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "lastname", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "firstname", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "serviceName", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "roomNumber", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                    <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "bedNumber", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "entryDate", [], "any", false, false, false, 53), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "leaveDate", [], "any", false, false, false, 54), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "duration", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stay"], "creationDate", [], "any", false, false, false, 56), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"d-flex flex-row justify-content-center\">
                            <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateStay", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 59), "serviceId" => twig_get_attribute($this->env, $this->source, $context["stay"], "serviceId", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn w-50 mr-3 btn-warning\"><i class=\"far fa-edit\"></i> Modifier</a>
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delStay", ["id" => twig_get_attribute($this->env, $this->source, $context["stay"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-info w-50 delete\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    <tfoot>



    <tr>
        <td colspan=\"11\">
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepagePatient");
        echo "\" class=\"btn btn-primary w-100 add\">Ajouter un séjour</a>
        </td>
    </tr>

        
    </tfoot>
    </table>
    </div>

    
        <div class=\"d-flex justify-content-center\">
            ";
        // line 83
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["stays"]) || array_key_exists("stays", $context) ? $context["stays"] : (function () { throw new RuntimeError('Variable "stays" does not exist.', 83, $this->source); })()));
        echo "
        </div>


    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce séjour ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalAddAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Information</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Le patient existe t-il déjà ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAddAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAddAlertOui\">Oui</button>
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
        return "user/stay/homepageStay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 83,  256 => 72,  247 => 65,  236 => 60,  232 => 59,  226 => 56,  222 => 55,  218 => 54,  214 => 53,  210 => 52,  206 => 51,  202 => 50,  198 => 49,  194 => 48,  190 => 47,  187 => 46,  184 => 45,  180 => 44,  177 => 43,  175 => 42,  150 => 19,  147 => 18,  144 => 17,  134 => 16,  115 => 14,  103 => 10,  98 => 9,  88 => 8,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset(\"../css/searchBar.css\") }}\" xmlns=\"http://www.w3.org/1999/html\">
    <link rel=\"stylesheet\" href=\"{{asset(\"../css/homepage.css\")}}\">
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/deleteAlert.js') }}\" defer></script>
    <script src=\"{{ asset('js/addAlert.js') }}\" defer></script>
{% endblock %}


{% block title %}Séjours{% endblock %}

{% block body %}
    {% include 'composants/header.html.twig' %}
    {% include 'composants/searchbarStay.html.twig' %}




    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Numéro</th>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prénom</th>
            <th scope=\"col\">Service</th>
            <th scope=\"col\">Chambre</th>
            <th scope=\"col\">Lit</th>
            <th scope=\"col\">Date d'entré</th>
            <th scope=\"col\">Date de sortie</th>
            <th scope=\"col\">Durée du séjour</th>
            <th scope=\"col\">Date de création</th>
            <th scope=\"col\">Commandes</th>

        </tr>
        </thead>
        <tbody>
        {% set num = 0 %}

            {% for stay in stays %}
                {% set num = num + 1 %}
                <tr>
                    <th scope=\"row\">{{ num }}</th>
                    <td>{{ stay.lastname }}</td>
                    <td>{{ stay.firstname }}</td>
                    <td>{{ stay.serviceName }}</td>
                    <td>{{ stay.roomNumber }}</td>
                    <td>{{ stay.bedNumber }}</td>
                    <td>{{ stay.entryDate|date('d/m/Y H:i') }}</td>
                    <td>{{ stay.leaveDate|date('d/m/Y H:i') }}</td>
                    <td>{{ stay.duration }}</td>
                    <td>{{ stay.creationDate|date('d/m/Y H:i') }}</td>
                    <td>
                        <div class=\"d-flex flex-row justify-content-center\">
                            <a href=\"{{ path( 'updateStay',  {'id': stay.id, 'serviceId': stay.serviceId} ) }}\" class=\"btn w-50 mr-3 btn-warning\"><i class=\"far fa-edit\"></i> Modifier</a>
                            <a href=\"{{ path( 'delStay',  {'id': stay.id} ) }}\" class=\"btn btn-info w-50 delete\"><i class=\"far fa-trash-alt\"></i> Supprimer</a>
                        </div>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    <tfoot>



    <tr>
        <td colspan=\"11\">
            <a href=\"{{ path('homepagePatient') }}\" class=\"btn btn-primary w-100 add\">Ajouter un séjour</a>
        </td>
    </tr>

        
    </tfoot>
    </table>
    </div>

    
        <div class=\"d-flex justify-content-center\">
            {{ knp_pagination_render(stays) }}
        </div>


    <div class=\"modal\" tabindex=\"-1\" id=\"modalDeleteAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Attention</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Etes-vous sûre de vouloir supprimer ce séjour ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal\" tabindex=\"-1\" id=\"modalAddAlert\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">Information</h5>
                </div>
                <div class=\"modal-body\">
                    <p>Le patient existe t-il déjà ?</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\" id=\"modalAddAlertNon\">Non</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"modalAddAlertOui\">Oui</button>
                </div>
            </div>
        </div>
    </div>



{% endblock %}
", "user/stay/homepageStay.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\user\\stay\\homepageStay.html.twig");
    }
}
