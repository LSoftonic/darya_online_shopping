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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/cart/table/payment.htm */
class __TwigTemplate_f77359a9ed8a99fce83201d72a2f9cdd64607707e7f609c99f34345e97b0a90d extends \Twig\Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method_id", [], "any", false, false, false, 1) != null) && (twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "totalPostTaxes", [], "any", false, false, false, 1) > 0))) {
            // line 2
            echo "    <tr class=\"mall-cart__payment\">
        <td></td>
        <td colspan=\"3\">
            ";
            // line 5
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, true, false, 5), "fee_label", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, true, false, 5), "fee_label", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "payment_method", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5))), "html", null, true);
            echo "
        </td>
        <td class=\"text-right\">
            ";
            // line 8
            echo call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["payment"] ?? null), "totalPostTaxes", [], "any", false, false, false, 8)]);
            echo "
        </td>
    </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/payment.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cart.payment_method_id != null and payment.totalPostTaxes > 0 %}
    <tr class=\"mall-cart__payment\">
        <td></td>
        <td colspan=\"3\">
            {{ cart.payment_method.fee_label | default(cart.payment_method.name) }}
        </td>
        <td class=\"text-right\">
            {{ payment.totalPostTaxes | money }}
        </td>
    </tr>
{% endif %}
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/table/payment.htm", "");
    }
}
