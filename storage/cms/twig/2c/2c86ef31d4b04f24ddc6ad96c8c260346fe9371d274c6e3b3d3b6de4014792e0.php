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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/cart/table/grandtotal.htm */
class __TwigTemplate_299259e68efaba1ac190e96f929ae9886fc35366264030a7f74fe18ea046ee24 extends \Twig\Template
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
        echo "<tr class=\"mall-cart__grand-total\">
    <td></td>
    <td colspan=\"3\">
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 4)) {
            // line 5
            echo "            ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.grand_total"]);
            echo "
        ";
        } else {
            // line 7
            echo "            ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
            echo "
        ";
        }
        // line 9
        echo "    </td>
    <td class=\"text-right\">
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 11)) {
            // line 12
            echo "            ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "totalPostTaxes", [], "any", false, false, false, 12)]);
            echo "
        ";
        } else {
            // line 14
            echo "            ";
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "productPostTaxes", [], "any", false, false, false, 14)]);
            echo "
        ";
        }
        // line 16
        echo "    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/grandtotal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  68 => 14,  62 => 12,  60 => 11,  56 => 9,  50 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr class=\"mall-cart__grand-total\">
    <td></td>
    <td colspan=\"3\">
        {% if __SELF__.showShipping %}
            {{ 'offline.mall::frontend.grand_total' | trans }}
        {% else %}
            {{ 'offline.mall::frontend.total' | trans }}
        {% endif %}
    </td>
    <td class=\"text-right\">
        {% if __SELF__.showShipping %}
            {{ totals.totalPostTaxes | money }}
        {% else %}
            {{ totals.productPostTaxes | money }}
        {% endif %}
    </td>
</tr>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/grandtotal.htm", "");
    }
}
