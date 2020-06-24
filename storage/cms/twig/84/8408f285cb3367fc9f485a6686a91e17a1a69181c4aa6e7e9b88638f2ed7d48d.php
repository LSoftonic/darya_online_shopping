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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/set.htm */
class __TwigTemplate_326dc01f06ed1c02c81f69c422bb98b110c1ccae411c92664cf1f571fa2096e2 extends \Twig\Template
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
        echo "<div class=\"mall-filter mall-filter--set\">
    ";
        // line 2
        $context["selected"] = twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 2)] ?? null) : null), "values", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 4
            echo "        ";
            $context["isSelected"] = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["value"], "index_value", [], "any", false, false, false, 4), ($context["selected"] ?? null));
            // line 5
            echo "        <div class=\"js-mall-filter mall-filter__option ";
            echo ((($context["isSelected"] ?? null)) ? ("mall-filter__option--selected") : (""));
            echo "\">
            <input type=\"checkbox\"
                   aria-hidden=\"true\"
                   style=\"display: none\"
                   name=\"filter[";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "slug", [], "any", false, false, false, 9), "html", null, true);
            echo "][]\"
                   value=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "index_value", [], "any", false, false, false, 10), "html", null, true);
            echo "\"
                    ";
            // line 11
            if (($context["isSelected"] ?? null)) {
                // line 12
                echo "                        checked
                    ";
            }
            // line 14
            echo "            >
            ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 15);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["property"] ?? null), "unit", [], "any", false, false, false, 15), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/set.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  75 => 15,  72 => 14,  68 => 12,  66 => 11,  62 => 10,  58 => 9,  50 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-filter mall-filter--set\">
    {% set selected = filter[property.slug].values %}
    {% for value in values %}
        {% set isSelected = value.index_value in selected %}
        <div class=\"js-mall-filter mall-filter__option {{ isSelected ? 'mall-filter__option--selected' : '' }}\">
            <input type=\"checkbox\"
                   aria-hidden=\"true\"
                   style=\"display: none\"
                   name=\"filter[{{ property.slug }}][]\"
                   value=\"{{ value.index_value }}\"
                    {% if isSelected %}
                        checked
                    {% endif %}
            >
            {{ value.display_value | raw }} {{ property.unit }}
        </div>
    {% endfor %}
</div>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/set.htm", "");
    }
}
