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

/* C:\xampp\htdocs\darya_online_shopping/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm */
class __TwigTemplate_355589b92bfce165eac6987fc70c8a83c3fdb81f83b5dae89411ebcd479b2536 extends \Twig\Template
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
        if (($context["breadcrumbs"] ?? null)) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 4
                echo "            <li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, false, 4)) ? ("active") : (""));
                echo "\">
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 5), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  51 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if breadcrumbs %}
    <ul>
        {% for breadcrumb in breadcrumbs %}
            <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
                <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm", "");
    }
}
