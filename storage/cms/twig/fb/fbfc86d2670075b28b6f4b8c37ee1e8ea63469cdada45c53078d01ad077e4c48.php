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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/default.htm */
class __TwigTemplate_420089a7a50defa9549e54f9b043166d09cf84f765018899c85729611a918a86 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto py-4\">
        <div class=\"lg:flex-grow uppercase font-medium text-center\">
            ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, false, 4)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.menuItems %}
    <div class=\"w-full block flex-grow lg:flex lg:items-center lg:w-auto py-4\">
        <div class=\"lg:flex-grow uppercase font-medium text-center\">
            {% partial __SELF__ ~ \"::items\" items=__SELF__.menuItems %}
        </div>
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/default.htm", "");
    }
}
