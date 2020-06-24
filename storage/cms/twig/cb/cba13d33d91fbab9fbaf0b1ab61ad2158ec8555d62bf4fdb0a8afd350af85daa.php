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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/brands.htm */
class __TwigTemplate_6cc2f6e5cef9ab31b1ae4bb972a1a5fea006049ae9d0b69b0f3fde4463aba3f5 extends \Twig\Template
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
        echo "<div class=\"mall-property-group\">
    <div class=\"mall-property-group__name\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.brands"]);
        echo "
    </div>
    <div class=\"mall-filter\">
        <div class=\"mall-form-control\">
            ";
        // line 7
        $context["selected"] = twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["brand"] ?? null) : null), "values", [], "any", false, false, false, 7);
        // line 8
        echo "            <select name=\"filter[brand][]\" id=\"mall-brands\" class=\"js-mall-select-filter\">
                <option value=\"\">-- ";
        // line 9
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.show_all"]);
        echo "</option>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "brands", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 11
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 11), "html", null, true);
            echo "\" ";
            echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["brand"], "slug", [], "any", false, false, false, 11), ($context["selected"] ?? null))) ? ("selected") : (""));
            echo ">
                        ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["brand"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/brands.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  68 => 12,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-property-group\">
    <div class=\"mall-property-group__name\">
        {{ 'offline.mall::frontend.brands' | trans }}
    </div>
    <div class=\"mall-filter\">
        <div class=\"mall-form-control\">
            {% set selected = filter['brand'].values %}
            <select name=\"filter[brand][]\" id=\"mall-brands\" class=\"js-mall-select-filter\">
                <option value=\"\">-- {{ 'offline.mall::frontend.show_all' | trans }}</option>
                {% for brand in __SELF__.brands %}
                    <option value=\"{{ brand.slug }}\" {{ brand.slug in selected ? 'selected' }}>
                        {{ brand.name }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/brands.htm", "");
    }
}
