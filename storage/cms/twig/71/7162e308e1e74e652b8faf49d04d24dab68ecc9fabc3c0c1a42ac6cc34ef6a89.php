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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/wishlist.htm */
class __TwigTemplate_a856f220148621f2918787123975a1a5bfd857a382dcf463b71d23439511bb51 extends \Twig\Template
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
        echo "<div class=\"w-24\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wishlists");
        echo "\" class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <svg class=\"mall-wishlist-icon text-";
        // line 3
        echo ((twig_get_attribute($this->env, $this->source, ($context["wishlists"] ?? null), "hasItems", [], "any", false, false, false, 3)) ? ("red") : ("grey"));
        echo " fill-current w-6 mb-2\"  xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 510 510\"><path d=\"M255 489.6l-35.7-35.7C86.7 336.6 0 257.55 0 160.65 0 81.6 61.2 20.4 140.25 20.4c43.35 0 86.7 20.4 114.75 53.55C283.05 40.8 326.4 20.4 369.75 20.4 448.8 20.4 510 81.6 510 160.65c0 96.9-86.7 175.95-219.3 293.25L255 489.6z\"/></svg>
        <div class=\"text-xs\">
            ";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists"]);
        echo "
        </div>
    </a>
</div>

";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 11
        echo "    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/wishlist.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  59 => 11,  57 => 10,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"w-24\">
    <a href=\"{{ 'wishlists' | page }}\" class=\"text-grey flex flex-col items-center justify-center no-underline\">
        <svg class=\"mall-wishlist-icon text-{{ wishlists.hasItems ? 'red' : 'grey' }} fill-current w-6 mb-2\"  xmlns=\"http://www.w3.org/2000/svg\"  viewBox=\"0 0 510 510\"><path d=\"M255 489.6l-35.7-35.7C86.7 336.6 0 257.55 0 160.65 0 81.6 61.2 20.4 140.25 20.4c43.35 0 86.7 20.4 114.75 53.55C283.05 40.8 326.4 20.4 369.75 20.4 448.8 20.4 510 81.6 510 160.65c0 96.9-86.7 175.95-219.3 293.25L255 489.6z\"/></svg>
        <div class=\"text-xs\">
            {{ 'offline.mall::frontend.wishlists' | trans }}
        </div>
    </a>
</div>

{% put scripts %}
    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/wishlist.htm", "");
    }
}
