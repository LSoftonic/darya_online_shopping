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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/product/belowcartbutton.htm */
class __TwigTemplate_36841c05192f25144ec05a2ce2528f4c1fc210fffb377c0de1034c73d60eb82e extends \Twig\Template
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
        echo "<div class=\"mt-4\">
    ";
        // line 2
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['product'] = twig_get_attribute($this->env, $this->source,         // line 3
($context["item"] ?? null), "product_id", [], "any", false, false, false, 3)        ;
        $context['__cms_component_params']['variant'] = twig_get_attribute($this->env, $this->source,         // line 4
($context["item"] ?? null), "variant_id", [], "any", false, false, false, 4)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("wishlistButton"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/product/belowcartbutton.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  44 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-4\">
    {% component 'wishlistButton'
        product=item.product_id
        variant=item.variant_id %}
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/product/belowcartbutton.htm", "");
    }
}
