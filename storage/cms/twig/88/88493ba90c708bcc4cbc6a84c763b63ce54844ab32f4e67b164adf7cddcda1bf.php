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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/cartButton/default.htm */
class __TwigTemplate_77830736db805f1ba65dc3a9fa65dcb3fdab252ef91be36294768fa0f2ef3b4e extends \Twig\Template
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
        $context["count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cart", [], "any", false, false, false, 1), "products", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1);
        // line 2
        echo "<div class=\"widget-header mr-3\">
    <a  href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
        echo "\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-store\"></i>
            <span class=\"notify\">  ";
        // line 6
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
        </div>
        <small class=\"text\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart"]);
        echo "</small>
    </a>
</div>
";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 12
        echo "    <script>
        \$(function () {
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function (e, data) {
                \$count.removeClass('invisible').text(data.new_items_count).show();
            });
            \$.subscribe('mall.cart.productRemoved', function (e, data) {
                \$count.text(data.new_items_count);
            });
        });
    </script>
";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/cartButton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  61 => 12,  59 => 11,  53 => 8,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set count = cart.cart.products.count %}
<div class=\"widget-header mr-3\">
    <a  href=\"{{ 'cart' | page }}\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-store\"></i>
            <span class=\"notify\">  {{ count }}</span>
        </div>
        <small class=\"text\">{{ 'offline.mall::frontend.cart' | trans }}</small>
    </a>
</div>
{% put scripts %}
    <script>
        \$(function () {
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function (e, data) {
                \$count.removeClass('invisible').text(data.new_items_count).show();
            });
            \$.subscribe('mall.cart.productRemoved', function (e, data) {
                \$count.text(data.new_items_count);
            });
        });
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/cartButton/default.htm", "");
    }
}
