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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productsfilter/sorter.htm */
class __TwigTemplate_515365c5322ed7d98d16a849b2ea2b203420cf09e20b79596ba878f6706b9f0d extends \Twig\Template
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
    <div class=\"mall-property-group__name\" for=\"mall-sorter\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.sort_order"]);
        echo "
    </div>
    <div class=\"mall-filter\">
        <div class=\"mall-form-control\">
            <select name=\"sort\" id=\"mall-sorter\" class=\"js-mall-select-filter\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "sortOptions", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 9
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            echo ((($context["key"] == twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "sortOrder", [], "any", false, false, false, 9))) ? ("selected") : (""));
            echo ">
                        ";
            // line 10
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, false, 10), $context["option"])) : ($context["option"])), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </select>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/sorter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  60 => 10,  53 => 9,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-property-group\">
    <div class=\"mall-property-group__name\" for=\"mall-sorter\">
        {{ 'offline.mall::frontend.sort_order' | trans }}
    </div>
    <div class=\"mall-filter\">
        <div class=\"mall-form-control\">
            <select name=\"sort\" id=\"mall-sorter\" class=\"js-mall-select-filter\">
                {% for key, option in __SELF__.sortOptions %}
                    <option value=\"{{ key }}\" {{ key == __SELF__.sortOrder ? 'selected' }}>
                        {{ option.label | default(option) }}
                    </option>
                {% endfor %}
            </select>
        </div>
    </div>
</div>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productsfilter/sorter.htm", "");
    }
}
