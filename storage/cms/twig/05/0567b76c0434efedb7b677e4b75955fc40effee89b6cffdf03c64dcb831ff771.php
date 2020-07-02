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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/content.htm */
class __TwigTemplate_8abbf6f385d033b076f865ba3554dca23a8a713a1e9d96a68d94ef79ba8b1679 extends \Twig\Template
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
        echo "<h4 class=\"mb-4\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 2), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "title", [], "any", false, false, false, 2);
        echo "</a>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "showProviderBadge", [], "any", false, false, false, 3)) {
            // line 4
            echo "        <span class=\"float-right text-xs bg-smoke-light px-3 py-2 rounded ml-8 mb-8\">
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "provider", [], "any", false, false, false, 5), "html", null, true);
            echo "
        </span>
    ";
        }
        // line 8
        echo "</h4>

<p class=\"text-sm mb-4\">
    ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "excerpt", [], "any", false, false, false, 11);
        echo "
</p>

<p class=\"text-sm\">
    <a href=\"";
        // line 15
        echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "url", [], "any", false, false, false, 15));
        echo "\" class=\"ss-result__link\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search.visit"]);
        echo " &rarr;</a>
</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  62 => 11,  57 => 8,  51 => 5,  48 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4 class=\"mb-4\">
    <a href=\"{{ result.url }}\">{{ result.title | raw }}</a>
    {% if __SELF__.showProviderBadge %}
        <span class=\"float-right text-xs bg-smoke-light px-3 py-2 rounded ml-8 mb-8\">
            {{ result.provider }}
        </span>
    {% endif %}
</h4>

<p class=\"text-sm mb-4\">
    {{ result.excerpt | raw }}
</p>

<p class=\"text-sm\">
    <a href=\"{{ result.url | app }}\" class=\"ss-result__link\">{{ 'offline.mall::frontend.search.visit' | trans }} &rarr;</a>
</p>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/content.htm", "");
    }
}
