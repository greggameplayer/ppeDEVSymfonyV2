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

/* composants/searchbarStaff.html.twig */
class __TwigTemplate_f935976ab5554d6a352cf7d4806979b9d3b7ac644f2244b14c1e8414610674ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/searchbarStaff.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "composants/searchbarStaff.html.twig"));

        // line 1
        echo "<div class=\"search\">
    ";
        // line 2
        $this->loadTemplate("composants/menu.html.twig", "composants/searchbarStaff.html.twig", 2)->display($context);
        // line 3
        echo "
  <form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepageStaff");
        echo "\" method=\"GET\" class=\"forsearch\">
    <input type=\"text\" placeholder=\"Rechercher\" name=\"search\" id=\"search\" class=\"form-control searchBar mr-2\">
    <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary\">
  </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "composants/searchbarStaff.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"search\">
    {% include 'composants/menu.html.twig' %}

  <form action=\"{{ path( 'homepageStaff') }}\" method=\"GET\" class=\"forsearch\">
    <input type=\"text\" placeholder=\"Rechercher\" name=\"search\" id=\"search\" class=\"form-control searchBar mr-2\">
    <input type=\"submit\" value=\"Rechercher\" class=\"btn btn-primary\">
  </form>
</div>", "composants/searchbarStaff.html.twig", "C:\\Users\\victo\\Dropbox\\B2_epsi\\22_ppeDEVV2\\ppeDEVSymfonyV2\\ppeDEV\\templates\\composants\\searchbarStaff.html.twig");
    }
}
