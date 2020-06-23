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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/header.htm */
class __TwigTemplate_9f9360c0f95f26a27d6cce6abfc2d02128f60cc76e730a6c3a2cfe1a7d05d761 extends \Twig\Template
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
        echo "<div class=\"top-bar bg-grey-lighter border-b border-grey-light py-1\">
    <div class=\"container mx-auto flex items-center text-xs text-grey-darkest\">
        <div class=\"w-1/2\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("session"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        <div class=\"w-1/2 text-right flex justify-end\">
            ";
        // line 7
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("currencyPicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "            ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "        </div>
    </div>
</div>
<header class=\"header py-8\">
    <div class=\"container mx-auto flex\">
        <div class=\"w-1/3\">
            <div>
                <form action=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
                    <input name=\"q\"
                           type=\"text\"
                           value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
        echo "\"
                           class=\"mall-input mall-input-sm mb-0\"
                           placeholder=\"";
        // line 21
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search"]);
        echo "\"
                           autocomplete=\"off\">
                    <button type=\"submit\" class=\"hidden\" aria-hidden=\"true\">Search</button>
                </form>
            </div>
        </div>
        <div class=\"w-1/3 text-center\">
            <a href=\"";
        // line 28
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo "\" class=\"text-3xl text-primary uppercase no-underline \">
                Mall
            </a>
        </div>
        <div class=\"w-1/3 flex justify-end\">
            <div class=\"mall-account-button\">
                ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("accountButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "            </div>
            <div class=\"mall-account-button\">
                ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wishlist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "            </div>
            <div class=\"mall-cart-button\">
                ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cartButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  114 => 40,  110 => 38,  106 => 37,  102 => 35,  98 => 34,  89 => 28,  79 => 21,  74 => 19,  68 => 16,  59 => 9,  54 => 8,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-bar bg-grey-lighter border-b border-grey-light py-1\">
    <div class=\"container mx-auto flex items-center text-xs text-grey-darkest\">
        <div class=\"w-1/2\">
            {% partial 'session' %}
        </div>
        <div class=\"w-1/2 text-right flex justify-end\">
            {% component 'currencyPicker' %}
            {% component 'localePicker' %}
        </div>
    </div>
</div>
<header class=\"header py-8\">
    <div class=\"container mx-auto flex\">
        <div class=\"w-1/3\">
            <div>
                <form action=\"{{ 'search' | page }}\" method=\"get\">
                    <input name=\"q\"
                           type=\"text\"
                           value=\"{{ query }}\"
                           class=\"mall-input mall-input-sm mb-0\"
                           placeholder=\"{{ 'offline.mall::frontend.search' | trans }}\"
                           autocomplete=\"off\">
                    <button type=\"submit\" class=\"hidden\" aria-hidden=\"true\">Search</button>
                </form>
            </div>
        </div>
        <div class=\"w-1/3 text-center\">
            <a href=\"{{ '/' | app }}\" class=\"text-3xl text-primary uppercase no-underline \">
                Mall
            </a>
        </div>
        <div class=\"w-1/3 flex justify-end\">
            <div class=\"mall-account-button\">
                {% partial 'accountButton/default' %}
            </div>
            <div class=\"mall-account-button\">
                {% partial 'wishlist' %}
            </div>
            <div class=\"mall-cart-button\">
                {% partial 'cartButton/default' %}
            </div>
        </div>
    </div>
</header>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/header.htm", "");
    }
}
