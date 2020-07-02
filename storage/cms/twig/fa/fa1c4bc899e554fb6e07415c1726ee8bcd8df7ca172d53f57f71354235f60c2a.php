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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/cart/table/total.htm */
class __TwigTemplate_4b728e25f6e9377dc12489ad087813032a054780fa4b3d0ab9c55843b5ffaeda extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showShipping", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            // line 4
            echo "    <tr class=\"mall-cart__total\">
        <td></td>
        <td colspan=\"3\">
            ";
            // line 7
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.total"]);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 10
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "productPostTaxes", [], "any", false, false, false, 10)]);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/total.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.showShipping %}
    {# if the showShipping property is set to false, the grandtotal row will equal this row #}
    {# this is why we only need to display this row if the showShipping property is set to true #}
    <tr class=\"mall-cart__total\">
        <td></td>
        <td colspan=\"3\">
            {{ 'offline.mall::frontend.total' | trans }}
        </td>
        <td class=\"text-right\">
            {{ totals.productPostTaxes | money }}
        </td>
    </tr>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/total.htm", "");
    }
}
