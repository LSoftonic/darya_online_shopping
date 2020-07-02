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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/overall.htm */
class __TwigTemplate_44261db9a1ed463c94908a6d6699525f3e3148b6baae7443771aed30d59ad1f1 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.overall_rating"]);
        echo "
</div>
<div class=\"mall-product-reviews__info-content\">
    <div class=\"mall-product-reviews__overall-ratings\">
        <div>
            ";
        // line 7
        $context["count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "allReviews", [], "any", false, false, false, 7), "count", [], "any", false, false, false, 7);
        // line 8
        echo "            ";
        $context["label"] = ((($context["count"] ?? null) . " ") . call_user_func_array($this->env->getFilter('transchoice')->getCallable(), ["offline.mall::frontend.reviews.ratings", (((isset($context["count"]) || array_key_exists("count", $context))) ? (_twig_default_filter(($context["count"] ?? null), 0)) : (0))]));
        // line 9
        echo "            ";
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['rating'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", [], "any", false, false, false, 9), "reviews_rating", [], "any", false, false, false, 9)        ;
        $context['__cms_partial_params']['label'] = ($context["label"] ?? null)        ;
        $context['__cms_partial_params']['variant'] = "big"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            <div class=\"mall-product-reviews__summary\">
                ";
        // line 11
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.overall_rating_summary", ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", [], "any", false, false, false, 11), "reviews_rating", [], "any", false, false, false, 11)]]);
        echo "
            </div>
        </div>
        <div>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviewCategories", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "                ";
            $context["rating"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "product", [], "any", false, false, false, 16), "category_review_totals", [], "any", false, false, false, 16), "where", [0 => "review_category_id", 1 => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 16)], "method", false, false, false, 16), "first", [], "method", false, false, false, 16), "rating", [], "any", false, false, false, 16);
            // line 17
            echo "                ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['rating'] = ($context["rating"] ?? null)            ;
            $context['__cms_partial_params']['label'] = twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17)            ;
            $context['__cms_partial_params']['variant'] = "big"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/overall.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 19,  86 => 18,  78 => 17,  75 => 16,  71 => 15,  64 => 11,  61 => 10,  53 => 9,  50 => 8,  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product-reviews__info-name\">
    {{ 'offline.mall::frontend.reviews.overall_rating' | trans }}
</div>
<div class=\"mall-product-reviews__info-content\">
    <div class=\"mall-product-reviews__overall-ratings\">
        <div>
            {% set count = __SELF__.allReviews.count %}
            {% set label = count ~ ' ' ~ ('offline.mall::frontend.reviews.ratings' | transchoice(count | default(0))) %}
            {% partial __SELF__ ~ '::stars' rating=__SELF__.product.reviews_rating label=label variant=\"big\" %}
            <div class=\"mall-product-reviews__summary\">
                {{ 'offline.mall::frontend.reviews.overall_rating_summary' | trans({value: __SELF__.product.reviews_rating}) }}
            </div>
        </div>
        <div>
            {% for category in __SELF__.reviewCategories %}
                {% set rating = __SELF__.product.category_review_totals.where('review_category_id', category.id).first().rating %}
                {% partial __SELF__ ~ '::stars' rating=rating label=category.name variant=\"big\" %}
            {% endfor %}
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/overall.htm", "");
    }
}
