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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/property.htm */
class __TwigTemplate_28d868cca1a14c02cf56b6bcc5b80e597cca0a216171636cc8a0fecc12db97d0 extends \Twig\Template
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
        $context["values"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "values", [], "any", false, false, false, 1)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "id", [], "any", false, false, false, 1)] ?? null) : null);
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["values"] ?? null), "count", [], "any", false, false, false, 2) > 0)) {
            // line 3
            echo "    <div class=\"mall-property\">
        <div class=\"mall-property__label\">
            <div>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</div>
            ";
            // line 6
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 6)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::clearfilter")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "        </div>

        ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "pivot", [], "any", false, false, false, 9), "filter_type", [], "any", false, false, false, 9) == "range")) {
                // line 10
                echo "            ";
                $context["min"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getMinValue", [0 => ($context["values"] ?? null)], "method", false, false, false, 10);
                // line 11
                echo "            ";
                $context["max"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getMaxValue", [0 => ($context["values"] ?? null)], "method", false, false, false, 11);
                // line 12
                echo "        ";
            }
            // line 13
            echo "
        ";
            // line 14
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = twig_get_attribute($this->env, $this->source,             // line 15
($context["property"] ?? null), "id", [], "any", false, false, false, 15)            ;
            $context['__cms_partial_params']['slug'] = twig_get_attribute($this->env, $this->source,             // line 16
($context["property"] ?? null), "slug", [], "any", false, false, false, 16)            ;
            $context['__cms_partial_params']['values'] =             // line 17
($context["values"] ?? null)            ;
            $context['__cms_partial_params']['min'] =             // line 18
($context["min"] ?? null)            ;
            $context['__cms_partial_params']['max'] =             // line 19
($context["max"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(((            // line 14
($context["__SELF__"] ?? null) . "::") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "pivot", [], "any", false, false, false, 14), "filter_type", [], "any", false, false, false, 14))            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 20
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/property.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  84 => 14,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  74 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  58 => 9,  54 => 7,  49 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set values = __SELF__.values[property.id] %}
{% if values.count > 0 %}
    <div class=\"mall-property\">
        <div class=\"mall-property__label\">
            <div>{{ property.name }}</div>
            {% partial __SELF__ ~ '::clearfilter' id=property.slug %}
        </div>

        {% if property.pivot.filter_type == 'range' %}
            {% set min = __SELF__.getMinValue(values) %}
            {% set max = __SELF__.getMaxValue(values) %}
        {% endif %}

        {% partial __SELF__ ~ '::' ~ property.pivot.filter_type
            id  = property.id
            slug = property.slug
            values = values
            min = min
            max = max %}
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/property.htm", "");
    }
}
