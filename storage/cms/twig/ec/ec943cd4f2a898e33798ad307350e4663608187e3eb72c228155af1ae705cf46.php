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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/userreview.htm */
class __TwigTemplate_0344b257560432f829c98b17c37b28d19db4163a2367c13a5669b6dc5edf23fb extends \Twig\Template
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
        echo "<div class=\"mall-product-reviews__info-name\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.your_rating"]);
        echo "
</div>
<div class=\"mall-product-reviews__info-content\">
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "canReview", [], "any", false, false, false, 5)) {
            // line 6
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['review'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "customerReview", [], "any", false, false, false, 6)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::form")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 7
            echo "    ";
        } else {
            // line 8
            echo "        <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "accountPage", [], "any", false, false, false, 8));
            echo "\" class=\"mall-product-reviews__login-required\">
            Login to create a review.
        </a>
    ";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/userreview.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  57 => 8,  54 => 7,  48 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product-reviews__info-name\">
    {{ 'offline.mall::frontend.reviews.your_rating' | trans }}
</div>
<div class=\"mall-product-reviews__info-content\">
    {% if __SELF__.canReview %}
        {% partial __SELF__ ~ '::form' review=__SELF__.customerReview %}
    {% else %}
        <a href=\"{{ __SELF__.accountPage | page }}\" class=\"mall-product-reviews__login-required\">
            Login to create a review.
        </a>
    {% endif %}
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/userreview.htm", "");
    }
}
