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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/product/customfields.htm */
class __TwigTemplate_b0a3f91cd3fdc3d2c00d836c4a41347c6de2086a0b40432afa56bd168e67d7f1 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "    <div class=\"mall-product__property mall-product__property--custom-field ";
            echo ((twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 2)) ? ("is-required") : (""));
            echo "\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['field'] = $context["field"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(((($context["__SELF__"] ?? null) . "::customfields/") . twig_get_attribute($this->env, $this->source, $context["field"], "type", [], "any", false, false, false, 3))            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/customfields.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for field in fields %}
    <div class=\"mall-product__property mall-product__property--custom-field {{ field.required ? 'is-required' : '' }}\">
        {% partial __SELF__ ~ '::customfields/' ~ field.type field=field %}
    </div>
{% endfor %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/customfields.htm", "");
    }
}
