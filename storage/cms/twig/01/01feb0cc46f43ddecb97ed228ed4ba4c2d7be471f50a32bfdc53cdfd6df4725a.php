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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/home/offer.htm */
class __TwigTemplate_f98914dc8397938f0396ffad69ff6f6f21babb56cf0af93ca3d4fa0e5995cbfb extends \Twig\Template
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
        echo "<div class=\"card card-deal\">
    <div class=\"col-heading content-body\">
     <header class=\"section-heading\">
      <h3 class=\"section-title\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["offerName"] ?? null), "html", null, true);
        echo "</h3>
      <p>Hygiene equipments</p>
    </header><!-- sect-heading -->
    <!-- <div class=\"timer\">
      <div> <span class=\"num\">04</span> <small>Days</small></div>
      <div> <span class=\"num\">12</span> <small>Hours</small></div>
      <div> <span class=\"num\">58</span> <small>Min</small></div>
      <div> <span class=\"num\">02</span> <small>Sec</small></div>
    </div> -->
  </div> <!-- col.// -->
  <div class=\"row no-gutters items-wrap\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 16
            echo "   <div class=\"col-md col-6\">
    <figure class=\"card-product-grid card-sm\">
     <a href=\"#\" class=\"img-wrap\"> 
      <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["offer"], "image", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19), "html", null, true);
            echo "\"> 
     </a>
     <div class=\"text-wrap p-3\">
          <a href=\"#\" class=\"title\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offer"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
          <span class=\"badge badge-danger\"> -20% </span>
     </div>
  </figure>
</div> <!-- col.// -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/offer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  71 => 22,  65 => 19,  60 => 16,  56 => 15,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-deal\">
    <div class=\"col-heading content-body\">
     <header class=\"section-heading\">
      <h3 class=\"section-title\">{{offerName}}</h3>
      <p>Hygiene equipments</p>
    </header><!-- sect-heading -->
    <!-- <div class=\"timer\">
      <div> <span class=\"num\">04</span> <small>Days</small></div>
      <div> <span class=\"num\">12</span> <small>Hours</small></div>
      <div> <span class=\"num\">58</span> <small>Min</small></div>
      <div> <span class=\"num\">02</span> <small>Sec</small></div>
    </div> -->
  </div> <!-- col.// -->
  <div class=\"row no-gutters items-wrap\">
      {% for offer in offers %}
   <div class=\"col-md col-6\">
    <figure class=\"card-product-grid card-sm\">
     <a href=\"#\" class=\"img-wrap\"> 
      <img src=\"{{offer.image.path}}\"> 
     </a>
     <div class=\"text-wrap p-3\">
          <a href=\"#\" class=\"title\">{{offer.name}}</a>
          <span class=\"badge badge-danger\"> -20% </span>
     </div>
  </figure>
</div> <!-- col.// -->
{% endfor %}

</div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/home/offer.htm", "");
    }
}
