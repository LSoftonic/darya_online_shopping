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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/home/recItems.htm */
class __TwigTemplate_2e2424d9cca09e91f17fd46f9e8739c3de35d35fb74b6396067eb730f159b12b extends \Twig\Template
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
        echo "<section  class=\"padding-bottom-sm\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["recom"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "</h4>
    </header>
    
    <div class=\"row row-sm\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recom"] ?? null), "products", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "        <div class=\"col-xl-2 col-lg-3 col-md-4 col-6\">
            <div href=\"#\" class=\"card card-sm card-product-grid\">
                <a href=\"#\" class=\"img-wrap\"> <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11), "html", null, true);
            echo "\"> </a>
                <figcaption class=\"info-wrap\">
                    <a href=\"#\" class=\"title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
                    <div class=\"price mt-1\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 14), "AFN", [], "any", false, false, false, 14), "html", null, true);
            echo "</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div> <!-- row.// -->
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/recItems.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  66 => 14,  62 => 13,  57 => 11,  53 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section  class=\"padding-bottom-sm\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">{{recom.name}}</h4>
    </header>
    
    <div class=\"row row-sm\">
        {% for product in recom.products %}
        <div class=\"col-xl-2 col-lg-3 col-md-4 col-6\">
            <div href=\"#\" class=\"card card-sm card-product-grid\">
                <a href=\"#\" class=\"img-wrap\"> <img src=\"{{product.image.path}}\"> </a>
                <figcaption class=\"info-wrap\">
                    <a href=\"#\" class=\"title\">{{product.name}}</a>
                    <div class=\"price mt-1\">{{product.price.AFN}}</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div> <!-- col.// -->
{% endfor %}
    </div> <!-- row.// -->
    </section>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/recItems.htm", "");
    }
}
