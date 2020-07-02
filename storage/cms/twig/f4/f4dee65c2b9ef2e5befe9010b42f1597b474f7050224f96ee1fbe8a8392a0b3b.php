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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/reviews.htm */
class __TwigTemplate_5c897afc6249e53281bcea2d54fa07c33bfdd136f9c0946f3409cae82e874bd5 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 2
            echo "    <div class=\"mall-review\">
        <div class=\"mall-review__rating\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 5
                echo "                ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['active'] = (twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 5) >= $context["i"])                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::star")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 6
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </div>

        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 9)) {
                // line 10
                echo "            <h4 class=\"mall-review__title\">
                ";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 11), "html", null, true);
                echo "
            </h4>
        ";
            }
            // line 14
            echo "
        ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["review"], "variant", [], "any", false, false, false, 15)) {
                // line 16
                echo "            <h5 class=\"mall-review__subtitle\">
                ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "variant", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
                echo "
            </h5>
        ";
            }
            // line 20
            echo "
        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 21)) {
                // line 22
                echo "            <div class=\"mall-review__content\">
                ";
                // line 23
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "description", [], "any", false, false, false, 23), "html", null, true));
                echo "
            </div>
        ";
            }
            // line 26
            echo "
        <div class=\"mall-review__details\">
            <div class=\"mall-review__category-reviews\">
                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "category_reviews", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["category_review"]) {
                // line 30
                echo "                    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['rating'] = twig_get_attribute($this->env, $this->source, $context["category_review"], "rating", [], "any", false, false, false, 30)                ;
                $context['__cms_partial_params']['label'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category_review"], "review_category", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::stars")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
            <div class=\"mall-review__category-reviews\">
                <ul class=\"mall-review__pro-con-list\">
                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "pros", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 36
                echo "                    <li>+ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 36), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["review"], "cons", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                echo "                    <li>- ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 39), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </ul>
            </div>
        </div>

        <div class=\"mall-review__author\">
            ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "customerName", [], "any", false, false, false, 46), "html", null, true);
            echo "
            &middot;
            ";
            // line 48
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["review"], "created_at", [], "any", false, false, false, 48)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::date")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 49
            echo "        </div>
    </div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "    <div class=\"mall-callout mall-callout--neutral\">
        ";
            // line 53
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.none"]);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 57), "hasPages", [], "any", false, false, false, 57)) {
            // line 58
            echo "    <div class=\"mall-pagination mall-pagination--reviews\">
        ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 59);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 59,  200 => 58,  198 => 57,  195 => 56,  186 => 53,  183 => 52,  176 => 49,  171 => 48,  166 => 46,  159 => 41,  150 => 39,  145 => 38,  136 => 36,  132 => 35,  127 => 32,  121 => 31,  114 => 30,  110 => 29,  105 => 26,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  71 => 11,  68 => 10,  66 => 9,  62 => 7,  56 => 6,  50 => 5,  46 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for review in __SELF__.reviews %}
    <div class=\"mall-review\">
        <div class=\"mall-review__rating\">
            {% for i in range(1, 5) %}
                {% partial __SELF__ ~ '::star' active=review.rating >= i %}
            {% endfor %}
        </div>

        {% if review.title %}
            <h4 class=\"mall-review__title\">
                {{ review.title }}
            </h4>
        {% endif %}

        {% if review.variant %}
            <h5 class=\"mall-review__subtitle\">
                {{ review.variant.name }}
            </h5>
        {% endif %}

        {% if review.description %}
            <div class=\"mall-review__content\">
                {{ review.description | nl2br }}
            </div>
        {% endif %}

        <div class=\"mall-review__details\">
            <div class=\"mall-review__category-reviews\">
                {% for category_review in review.category_reviews %}
                    {% partial __SELF__ ~ '::stars' rating=category_review.rating label=category_review.review_category.name %}
                {% endfor %}
            </div>
            <div class=\"mall-review__category-reviews\">
                <ul class=\"mall-review__pro-con-list\">
                {% for item in review.pros %}
                    <li>+ {{ item.value }}</li>
                {% endfor %}
                {% for item in review.cons %}
                    <li>- {{ item.value }}</li>
                {% endfor %}
                </ul>
            </div>
        </div>

        <div class=\"mall-review__author\">
            {{ review.customerName }}
            &middot;
            {% partial __SELF__ ~ '::date' date=review.created_at %}
        </div>
    </div>
{% else %}
    <div class=\"mall-callout mall-callout--neutral\">
        {{ 'offline.mall::frontend.reviews.none' | trans }}
    </div>
{% endfor %}

{% if __SELF__.reviews.hasPages %}
    <div class=\"mall-pagination mall-pagination--reviews\">
        {{ __SELF__.reviews | raw }}
    </div>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/reviews.htm", "");
    }
}
