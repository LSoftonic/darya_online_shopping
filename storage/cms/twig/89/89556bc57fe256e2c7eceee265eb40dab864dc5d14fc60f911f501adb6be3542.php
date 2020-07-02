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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/home/popular_category.htm */
class __TwigTemplate_558691ffcd041ae83fd36c3caba2d54d1e58fc88f5c3b7d5f92ea9572519bec6 extends \Twig\Template
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
        echo "<aside class=\"special-home-right\">
    <h6 class=\"bg-blue text-center text-white mb-0 p-2\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["catName"] ?? null), "html", null, true);
        echo "</h6>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pCat"]) {
            // line 4
            echo "    <div class=\"card-banner border-bottom\">
      <div class=\"py-3\" style=\"width:80%\">
        <h6 class=\"card-title\">";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pCat"], "name", [], "any", false, false, false, 6), "html", null, true);
            echo "</h6>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pCat"], "url", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"btn btn-secondary btn-sm\"> Source now </a>
      </div> 
      <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pCat"], "image", [], "any", false, false, false, 9), "path", [], "any", false, false, false, 9), "html", null, true);
            echo "\" height=\"80\" class=\"img-bg\">
    </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pCat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</aside>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/popular_category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  61 => 9,  56 => 7,  52 => 6,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"special-home-right\">
    <h6 class=\"bg-blue text-center text-white mb-0 p-2\">{{catName}}</h6>
    {% for pCat in pCategories%}
    <div class=\"card-banner border-bottom\">
      <div class=\"py-3\" style=\"width:80%\">
        <h6 class=\"card-title\">{{pCat.name}}</h6>
        <a href=\"{{pCat.url}}\" class=\"btn btn-secondary btn-sm\"> Source now </a>
      </div> 
      <img src=\"{{pCat.image.path}}\" height=\"80\" class=\"img-bg\">
    </div>
     {% endfor %}
</aside>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/popular_category.htm", "");
    }
}
