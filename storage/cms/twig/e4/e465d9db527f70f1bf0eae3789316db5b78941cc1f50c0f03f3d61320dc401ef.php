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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/pagination.htm */
class __TwigTemplate_bb438948bb6ee65273fbf684440ff6d87671c324fe7640d15ef7a116467f3bee extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "hasPages", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"mall-pagination\">
        ";
            // line 3
            echo ($context["results"] ?? null);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results.hasPages %}
    <div class=\"mall-pagination\">
        {{ results | raw }}
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/pagination.htm", "");
    }
}
