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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/home/brand.htm */
class __TwigTemplate_61d49891aaae68f430e5b3ffd4199b1222859048868e0d34f0bc1932e0b98fd8 extends \Twig\Template
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
        echo "<section  class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Choose brand</h4>
    </header>
    
    <ul class=\"row mt-4\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brands"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 9
            echo "        <li class=\"col-md col-6\"><a href=\"#\" class=\"icontext\"> <img class=\"icon-flag-sm\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["brand"], "logo", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9), "html", null, true);
            echo "\"> <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</span> </a></li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/brand.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section  class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Choose brand</h4>
    </header>
    
    <ul class=\"row mt-4\">
        {% for brand in brands %}
        <li class=\"col-md col-6\"><a href=\"#\" class=\"icontext\"> <img class=\"icon-flag-sm\" src=\"{{brand.logo.path}}\"> <span>{{brand.name}}</span> </a></li>
       {% endfor %}
    </ul>
    </section>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/brand.htm", "");
    }
}
