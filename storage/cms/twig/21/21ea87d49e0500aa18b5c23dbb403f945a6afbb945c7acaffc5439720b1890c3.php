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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/default.htm */
class __TwigTemplate_545a5c745216653f02c231fbb94ccf27c8220f8c0b303055606203aa8b67ddff extends \Twig\Template
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
        echo "<div class=\"mall-product-reviews\">
    <h3 class=\"mall-product-reviews__heading\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reviews.heading"]);
        echo "
    </h3>

    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "allReviews", [], "any", false, false, false, 6), "count", [], "any", false, false, false, 6) > 0)) {
            // line 7
            echo "        <div class=\"mall-product-reviews__info\">
            ";
            // line 8
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::overall")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "
    <div class=\"mall-product-reviews__info\" id=\"mall-rating-widget\">
        ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::userreview")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </div>

    <div class=\"mall-reviews\">
        ";
        // line 17
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['reviews'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "reviews", [], "any", false, false, false, 17)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::reviews")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "    </div>
</div>

";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  78 => 18,  73 => 17,  68 => 14,  64 => 13,  60 => 11,  56 => 9,  52 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product-reviews\">
    <h3 class=\"mall-product-reviews__heading\">
        {{ 'offline.mall::frontend.reviews.heading' | trans }}
    </h3>

    {% if __SELF__.allReviews.count > 0 %}
        <div class=\"mall-product-reviews__info\">
            {% partial __SELF__ ~ '::overall' %}
        </div>
    {% endif %}

    <div class=\"mall-product-reviews__info\" id=\"mall-rating-widget\">
        {% partial __SELF__ ~ '::userreview' %}
    </div>

    <div class=\"mall-reviews\">
        {% partial __SELF__ ~ '::reviews' reviews=__SELF__.reviews %}
    </div>
</div>

{% partial __SELF__ ~ '::scripts' %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/default.htm", "");
    }
}
