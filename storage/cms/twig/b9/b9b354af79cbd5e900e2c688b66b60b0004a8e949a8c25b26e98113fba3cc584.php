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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/pages/search.htm */
class __TwigTemplate_4da71b0dc27eaadfcf3139fb8397caf4b8c2039a159fcd41db039134fa2a6317 extends \Twig\Template
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
        echo "<div class=\"w-3/4 m-auto\">
    <h2 class=\"mb-8\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search.heading", ["query" => twig_get_attribute($this->env, $this->source, ($context["searchResults"] ?? null), "query", [], "any", false, false, false, 2)]]));
        echo "</h2>

    <div class=\"pt-8\">
        ";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"w-3/4 m-auto\">
    <h2 class=\"mb-8\">{{ 'offline.mall::frontend.search.heading' | trans({query: searchResults.query}) | escape }}</h2>

    <div class=\"pt-8\">
        {% component 'searchResults' %}
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/search.htm", "");
    }
}
