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

/* composants/menu.html.twig */
class __TwigTemplate_41f1bae6ab534c1e201707bfa4ad14cb67e84004f0df27f70f4d62ffa0777200 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/menu.html.twig"));

        // line 1
        echo "<!-- <link rel=\"stylesheet\" href=\"css/searchBar.css\"> -->


<div class=\"dropdown mr-2\">
    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu</button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepagePatient");
        echo "\">Gestion des patients </a>
        <a class=\"dropdown-item\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepageStay");
        echo "\">Gestion des séjours</a>
        
        ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 11
            echo "            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepageStaff");
            echo "\">Gestion du personnel</a>
            <a class=\"dropdown-item\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepageHospital");
            echo "\">Gestion de l'hôpital</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logConnection");
            echo "\">Historique des connexions</a>
            <a class=\"dropdown-item\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logManagePatient");
            echo "\">Historique des modifications des patients</a>
            <a class=\"dropdown-item\" href=\"";
            // line 17
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logManageStay");
            echo "\">Historique des modifications des séjours</a>
        ";
        }
        // line 19
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "composants/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  82 => 17,  78 => 16,  74 => 15,  69 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- <link rel=\"stylesheet\" href=\"css/searchBar.css\"> -->


<div class=\"dropdown mr-2\">
    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Menu</button>
    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
        <a class=\"dropdown-item\" href=\"{{ path('homepagePatient') }}\">Gestion des patients </a>
        <a class=\"dropdown-item\" href=\"{{ path('homepageStay') }}\">Gestion des séjours</a>
        
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"{{ path('homepageStaff') }}\">Gestion du personnel</a>
            <a class=\"dropdown-item\" href=\"{{ path('homepageHospital') }}\">Gestion de l'hôpital</a>
            <div class=\"dropdown-divider\"></div>
            <a class=\"dropdown-item\" href=\"{{ path('logConnection') }}\">Historique des connexions</a>
            <a class=\"dropdown-item\" href=\"{{ path('logManagePatient') }}\">Historique des modifications des patients</a>
            <a class=\"dropdown-item\" href=\"{{ path('logManageStay') }}\">Historique des modifications des séjours</a>
        {% endif %}
    </div>
</div>
", "composants/menu.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\composants\\menu.html.twig");
    }
}
