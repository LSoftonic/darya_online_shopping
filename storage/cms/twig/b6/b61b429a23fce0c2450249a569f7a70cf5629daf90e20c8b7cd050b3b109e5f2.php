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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/labels.htm */
class __TwigTemplate_ef1d7461ed3d5cd2915e018dcb24afa699b8bcd45dd0a9d54709cae421d3290e extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showOnSaleFilter", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"mall-property-group\">
        <div class=\"mall-property-group__name\">";
            // line 3
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.labels"]);
            echo "</div>

        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showOnSaleFilter", [], "any", false, false, false, 5)) {
                // line 6
                echo "            ";
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::onsale")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 7
                echo "        ";
            }
            // line 8
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/labels.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  54 => 7,  49 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showOnSaleFilter %}
    <div class=\"mall-property-group\">
        <div class=\"mall-property-group__name\">{{ 'offline.mall::frontend.labels' | trans }}</div>

        {% if __SELF__.showOnSaleFilter %}
            {% partial __SELF__ ~ '::onsale' %}
        {% endif %}
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/labels.htm", "");
    }
}
