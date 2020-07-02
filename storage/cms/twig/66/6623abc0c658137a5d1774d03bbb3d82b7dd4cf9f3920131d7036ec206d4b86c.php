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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/home/electronic.htm */
class __TwigTemplate_ec61e8268080fe5095e6cf2e83e1b005dff17ea4a931d839d15a763c872588b5 extends \Twig\Template
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
        // line 1
        echo "<section class=\"padding-bottom\">
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "</h4>
    </header>
    
    <div class=\"card card-home-category\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3\">
        
        <div class=\"home-category-banner bg-light-orange\">
            <h5 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "description_short", [], "any", false, false, false, 11), "html", null, true);
        echo "</h5>
            <p>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "description", [], "any", false, false, false, 12);
        echo "</p>
            <a href=\"#\" class=\"btn btn-outline-primary rounded-pill\">Source now</a>
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "image", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"img-bg\">
        </div>
    
        </div> <!-- col.// -->
        <div class=\"col-md-9\">
    <ul class=\"row no-gutters bordered-cols\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["electronic"] ?? null), "children", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["subElec"]) {
            // line 21
            echo "     <li class=\"col-6 col-lg-3 col-md-4\">
    <a href=\"#\" class=\"item\"> 
        <div class=\"card-body\">
            <h6 class=\"title\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subElec"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo " </h6>
            <img class=\"img-sm float-right\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subElec"], "image", [], "any", false, false, false, 25), "path", [], "any", false, false, false, 25), "html", null, true);
            echo "\"> 
            <p class=\"text-muted\"><i class=\"fa fa-map-marker-alt\"></i>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subElec"], "description_short", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
        </div>
    </a>
        </li>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subElec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    </div> <!-- card.// -->
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/electronic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  87 => 26,  83 => 25,  79 => 24,  74 => 21,  70 => 20,  61 => 14,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"padding-bottom\">
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">{{electronic.name}}</h4>
    </header>
    
    <div class=\"card card-home-category\">
    <div class=\"row no-gutters\">
        <div class=\"col-md-3\">
        
        <div class=\"home-category-banner bg-light-orange\">
            <h5 class=\"title\">{{electronic.description_short}}</h5>
            <p>{{electronic.description|raw}}</p>
            <a href=\"#\" class=\"btn btn-outline-primary rounded-pill\">Source now</a>
            <img src=\"{{electronic.image.path}}\" class=\"img-bg\">
        </div>
    
        </div> <!-- col.// -->
        <div class=\"col-md-9\">
    <ul class=\"row no-gutters bordered-cols\">
        {% for subElec in electronic.children %}
     <li class=\"col-6 col-lg-3 col-md-4\">
    <a href=\"#\" class=\"item\"> 
        <div class=\"card-body\">
            <h6 class=\"title\">{{subElec.name}} </h6>
            <img class=\"img-sm float-right\" src=\"{{subElec.image.path}}\"> 
            <p class=\"text-muted\"><i class=\"fa fa-map-marker-alt\"></i>{{subElec.description_short}}</p>
        </div>
    </a>
        </li>
 {% endfor %}
    </ul>
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    </div> <!-- card.// -->
    </section>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/electronic.htm", "");
    }
}
