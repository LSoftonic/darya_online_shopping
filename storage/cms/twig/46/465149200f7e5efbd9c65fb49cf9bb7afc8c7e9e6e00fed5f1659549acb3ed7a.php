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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/price.htm */
class __TwigTemplate_1dcd0c306e7b8c9e42fa23efcc072f78e24f6ec47c4b2f95344a18c1205bf5eb extends \Twig\Template
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
        if (( !twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 1) == false)) {
            // line 2
            echo "    <div class=\"mall-property-group\">
        <div class=\"mall-property-group__name mall-property-group__name--price\">
            <div>";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.price"]);
            echo "</div>
            ";
            // line 5
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = "price"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::clearfilter")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        </div>
        <div class=\"mall-property\">
            ";
            // line 8
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['id'] = "price"            ;
            $context['__cms_partial_params']['slug'] = "price"            ;
            $context['__cms_partial_params']['min'] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source,             // line 11
($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null)            ;
            $context['__cms_partial_params']['max'] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source,             // line 12
($context["__SELF__"] ?? null), "priceRange", [], "any", false, false, false, 12)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 8
($context["__SELF__"] ?? null) . "::range")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/price.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  64 => 8,  62 => 12,  60 => 11,  56 => 8,  52 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not __SELF__.priceRange == false %}
    <div class=\"mall-property-group\">
        <div class=\"mall-property-group__name mall-property-group__name--price\">
            <div>{{ 'offline.mall::frontend.price' | trans }}</div>
            {% partial __SELF__ ~ '::clearfilter' id='price' %}
        </div>
        <div class=\"mall-property\">
            {% partial __SELF__ ~ '::range'
                id  = 'price'
                slug  = 'price'
                min = __SELF__.priceRange[0]
                max = __SELF__.priceRange[1] %}
        </div>
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/price.htm", "");
    }
}
