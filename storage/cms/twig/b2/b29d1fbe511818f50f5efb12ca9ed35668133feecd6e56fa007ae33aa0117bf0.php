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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/pages/category.htm */
class __TwigTemplate_8a1586128c12fa9d5425d84bab01a4d9dffabc325ee7837838cfc698afff636d extends \Twig\Template
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
        echo "<div class=\"flex\">
    <div class=\"w-1/4\">
        ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("productsFilter"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "    </div>
    <div class=\"w-3/4\">
        <h2 class=\"pl-4\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "category", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>

        ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("products"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 8,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex\">
    <div class=\"w-1/4\">
        {% component 'productsFilter' %}
    </div>
    <div class=\"w-3/4\">
        <h2 class=\"pl-4\">{{ products.category.name }}</h2>

        {% component 'products' %}
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/category.htm", "");
    }
}
