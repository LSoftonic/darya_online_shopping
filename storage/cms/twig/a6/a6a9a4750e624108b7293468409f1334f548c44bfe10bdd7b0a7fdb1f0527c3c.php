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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/searchresult.htm */
class __TwigTemplate_16fa1b2833f8ea9d4ad8c9b78b95f8872118d3e00d9559a2a8f94efac3fc4cbb extends \Twig\Template
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
        echo "<div class=\"flex mb-8 pb-8 border-b border-smoke-light\">
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <div class=\"w-1/6\">
            ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = ($context["result"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::thumbnail")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        </div>
    ";
        }
        // line 7
        echo "    <div class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["result"] ?? null), "thumb", [], "any", false, false, false, 7)) ? ("w-5/6") : ("w-full"));
        echo "\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['result'] = ($context["result"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::content")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/searchresult.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 9,  59 => 8,  54 => 7,  50 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex mb-8 pb-8 border-b border-smoke-light\">
    {% if result.thumb %}
        <div class=\"w-1/6\">
            {% partial __SELF__ ~ '::thumbnail' result = result %}
        </div>
    {% endif %}
    <div class=\"{{ result.thumb ? 'w-5/6' : 'w-full' }}\">
        {% partial __SELF__ ~ '::content' result = result %}
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/searchresults/searchresult.htm", "");
    }
}
