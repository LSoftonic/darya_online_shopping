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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/range.htm */
class __TwigTemplate_122a2eac25ae1e61a472327f65aec79b0c2961f1304ae755e0266ec5833fa681 extends \Twig\Template
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
        echo "<div class=\"mall-filter mall-filter--range\">

    <div class=\"mall-slider-handles\"
         data-start=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), ($context["slug"] ?? null), [], "array", false, true, false, 4), "minValue", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), ($context["slug"] ?? null), [], "array", false, true, false, 4), "minValue", [], "any", false, false, false, 4), ($context["min"] ?? null))) : (($context["min"] ?? null))), "html", null, true);
        echo "\"
         data-end=\"";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), ($context["slug"] ?? null), [], "array", false, true, false, 5), "maxValue", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), ($context["slug"] ?? null), [], "array", false, true, false, 5), "maxValue", [], "any", false, false, false, 5), ($context["max"] ?? null))) : (($context["max"] ?? null))), "html", null, true);
        echo "\"
         data-min=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["min"] ?? null), "html", null, true);
        echo "\"
         data-max=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["max"] ?? null), "html", null, true);
        echo "\"
         data-target=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\"
         style=\"width: 100%\"></div>

    <input data-min=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\"
           type=\"hidden\" name=\"filter[";
        // line 12
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "][min]\"
           value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["slug"] ?? null)] ?? null) : null), "minValue", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <input data-max=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "\"
           type=\"hidden\" name=\"filter[";
        // line 15
        echo twig_escape_filter($this->env, ($context["slug"] ?? null), "html", null, true);
        echo "][max]\"
           value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["filter"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["slug"] ?? null)] ?? null) : null), "maxValue", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/range.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  80 => 15,  76 => 14,  72 => 13,  68 => 12,  64 => 11,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-filter mall-filter--range\">

    <div class=\"mall-slider-handles\"
         data-start=\"{{ filter[slug].minValue | default(min) }}\"
         data-end=\"{{ filter[slug].maxValue | default(max) }}\"
         data-min=\"{{ min }}\"
         data-max=\"{{ max }}\"
         data-target=\"{{ slug }}\"
         style=\"width: 100%\"></div>

    <input data-min=\"{{ slug }}\"
           type=\"hidden\" name=\"filter[{{ slug }}][min]\"
           value=\"{{ filter[slug].minValue }}\">
    <input data-max=\"{{ slug }}\"
           type=\"hidden\" name=\"filter[{{ slug }}][max]\"
           value=\"{{ filter[slug].maxValue }}\">
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/range.htm", "");
    }
}
