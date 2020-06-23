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

/* C:\xampp\htdocs\darya/plugins/offline/mall/components/currencypicker/selector.htm */
class __TwigTemplate_d69f6b3c7f6ff6f920a3c670d4a5eefcc9ecfc63145115b681df6c5b878502b2 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
<select name=\"currency\" data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSwitchCurrency\" class=\"mall-selectbox-sm\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currencies", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 4
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, $context["currency"], "id", [], "any", false, false, false, 4) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "activeCurrency", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4))) ? ("selected") : (""));
            echo ">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</select>
";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya/plugins/offline/mall/components/currencypicker/selector.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 9,  65 => 8,  56 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_open() }}
<select name=\"currency\" data-request=\"{{ __SELF__ }}::onSwitchCurrency\" class=\"mall-selectbox-sm\">
    {% for currency in __SELF__.currencies %}
        <option value=\"{{ currency.id }}\" {{ currency.id == __SELF__.activeCurrency.id ? 'selected' }}>
            {{ currency.code }}
        </option>
    {% endfor %}
</select>
{{ form_close() }}", "C:\\xampp\\htdocs\\darya/plugins/offline/mall/components/currencypicker/selector.htm", "");
    }
}
