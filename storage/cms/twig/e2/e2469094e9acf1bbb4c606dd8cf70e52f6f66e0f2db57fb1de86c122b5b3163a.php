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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/onsale.htm */
class __TwigTemplate_b05b3e6c40bb1d3684963eac2727334898e182c1c5150ef2904a0a47e9f4b514 extends \Twig\Template
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
        echo "    <div class=\"mall-filter mall-filter--on-sale\">
        <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox js-mall-filter\">
            <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"mall-on-sale\"
                   name=\"filter[on_sale]\"
                   value=\"✓\"
                   ";
        // line 6
        echo ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "on_sale", [], "any", false, false, false, 6)) ? ("checked") : (""));
        echo "
            >
            ";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.onsale_label"]);
        echo "
        </label>
    </div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/onsale.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"mall-filter mall-filter--on-sale\">
        <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox js-mall-filter\">
            <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"mall-on-sale\"
                   name=\"filter[on_sale]\"
                   value=\"✓\"
                   {{ filter.on_sale ? 'checked' }}
            >
            {{ 'offline.mall::frontend.onsale_label' | trans }}
        </label>
    </div>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/onsale.htm", "");
    }
}
