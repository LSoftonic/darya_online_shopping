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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/wishlist.htm */
class __TwigTemplate_001658b0b00e77e758d176e6ce8fad63c06a6e9d86ce660e87a4d04bbe243e8e extends \Twig\Template
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
        echo "<div class=\"widget-header mr-3\">
    <a  href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wishlists");
        echo "\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-shopping-cart\"></i>
            <span class=\"notify\">  ";
        // line 5
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
        </div>
        <small class=\"text\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists"]);
        echo "</small>
    </a>
</div>
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 11
        echo "    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/wishlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  59 => 11,  57 => 10,  51 => 7,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-header mr-3\">
    <a  href=\"{{ 'wishlists' | page }}\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-shopping-cart\"></i>
            <span class=\"notify\">  {{ count }}</span>
        </div>
        <small class=\"text\">{{ 'offline.mall::frontend.wishlists' | trans }}</small>
    </a>
</div>
{% put scripts %}
    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/wishlist.htm", "");
    }
}
