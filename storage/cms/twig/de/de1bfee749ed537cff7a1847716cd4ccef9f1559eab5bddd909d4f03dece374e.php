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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/stars.htm */
class __TwigTemplate_1400be3426aea70d4b11a309697733c3093f923453da4a5ccc68134d7467134a extends \Twig\Template
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
        echo "<div class=\"mall-category-review ";
        ((($context["variant"] ?? null)) ? (print (twig_escape_filter($this->env, ("mall-category-review--" . ($context["variant"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"mall-category-review__rating ";
        // line 2
        echo ((($context["clickable"] ?? null)) ? ("mall-category-review__rating--clickable") : (""));
        echo "\">
        ";
        // line 3
        $context["rating"] = twig_round(($context["rating"] ?? null));
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['active'] = (($context["rating"] ?? null) >= $context["i"])            ;
            $context['__cms_partial_params']['value'] = $context["i"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::star")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
    <div class=\"mall-category-review__name\">
        ";
        // line 9
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/stars.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 7,  60 => 6,  53 => 5,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-category-review {{ variant ? ('mall-category-review--' ~ variant) : '' }}\">
    <div class=\"mall-category-review__rating {{ clickable ? 'mall-category-review__rating--clickable' }}\">
        {% set rating = rating|round %}
        {% for i in range(1, 5) %}
            {% partial __SELF__ ~ '::star' active=rating >= i value=i %}
        {% endfor %}
    </div>
    <div class=\"mall-category-review__name\">
        {{ label }}
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/stars.htm", "");
    }
}
