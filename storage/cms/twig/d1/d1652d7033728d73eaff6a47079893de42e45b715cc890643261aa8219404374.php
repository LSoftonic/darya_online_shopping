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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/product/properties/default.htm */
class __TwigTemplate_1d115a9a3324b1f459c44a183d0c8f3ad9308e6bc4a9ee6bb57ac60c385fac42 extends \Twig\Template
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
        echo "<select name=\"props[";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 1), "hashId", [], "any", false, false, false, 1), "html", null, true);
        echo "]\"
        id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 2), "hashId", [], "any", false, false, false, 2), "html", null, true);
        echo "\"
        data-id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 3), "hashId", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
        class=\"js-mall-property-selector\"
        data-mall-property>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "values", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 7
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "hashId", [], "any", false, false, false, 7), "html", null, true);
            echo "\"
                ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, ($context["propertyValue"] ?? null), "value", [], "any", false, false, false, 8) == twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 8))) {
                // line 9
                echo "                    selected
                ";
            }
            // line 11
            echo "        >
            ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["value"], "display_value", [], "any", false, false, false, 12);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "property", [], "any", false, false, false, 12), "unit", [], "any", false, false, false, 12), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/properties/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  70 => 12,  67 => 11,  63 => 9,  61 => 8,  56 => 7,  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<select name=\"props[{{ item.property.hashId }}]\"
        id=\"{{ item.property.hashId }}\"
        data-id=\"{{ item.property.hashId }}\"
        class=\"js-mall-property-selector\"
        data-mall-property>
    {% for value in item.values %}
        <option value=\"{{ value.hashId }}\"
                {% if propertyValue.value == value.value %}
                    selected
                {% endif %}
        >
            {{ value.display_value | raw }} {{ item.property.unit }}
        </option>
    {% endfor %}
</select>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/properties/default.htm", "");
    }
}
