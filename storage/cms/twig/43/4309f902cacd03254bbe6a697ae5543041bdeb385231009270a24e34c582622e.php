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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/navigation.htm */
class __TwigTemplate_1522fc052dedac37c4e65b1ef52a14061c2fbe927124597f05557ccaee18e659 extends \Twig\Template
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
        echo "<ul class=\"navbar-nav\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3) == "#")) {
                // line 4
                echo "    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> <i class=\"fa fa-bars text-muted mr-2\"></i>";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo " </a>
      <div class=\"dropdown-menu\">
      ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["it"]) {
                    // line 8
                    echo "      <a class=\"dropdown-item\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 8), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["it"], "title", [], "any", false, false, false, 8), "html", null, true);
                    echo "</a>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['it'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "    </div>
  </li>
  ";
            } else {
                // line 13
                echo "  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 14), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>
 </li>
 ";
            }
            // line 17
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <li class=\"nav-item\">
     <a class=\"nav-link\" href=\"#\">Ready to ship</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Trade shows</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Services</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Sell with us</a>
  </li>

</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/navigation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  86 => 17,  78 => 14,  75 => 13,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"navbar-nav\">
  {% for item in staticMenu.menuItems %}
   {% if item.url == '#' %}
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> <i class=\"fa fa-bars text-muted mr-2\"></i>{{item.title}} </a>
      <div class=\"dropdown-menu\">
      {% for it in item.items%}
      <a class=\"dropdown-item\" href=\"{{item.url}}\">{{it.title}}</a>
      {% endfor %}
    </div>
  </li>
  {% else %}
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{item.url}}\">{{item.title}}</a>
 </li>
 {% endif%}
  {% endfor %}
    <li class=\"nav-item\">
     <a class=\"nav-link\" href=\"#\">Ready to ship</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Trade shows</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Services</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#\">Sell with us</a>
  </li>

</ul>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/navigation.htm", "");
    }
}
