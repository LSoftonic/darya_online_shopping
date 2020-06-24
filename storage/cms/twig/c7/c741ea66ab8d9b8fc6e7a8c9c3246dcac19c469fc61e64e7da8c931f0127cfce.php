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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/items.htm */
class __TwigTemplate_b5487f13b0acfaaabbbc4565bd33c7ea8e8fca779163d87bf834caa1efeed542 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 1), "isHidden", [], "any", false, false, false, 1)) {
                // line 2
                echo "    <div class=\"block mt-4 ";
                echo ((($context["isSubnav"] ?? null)) ? ("block") : ("lg:inline-block mr-8"));
                echo " lg:mt-0 ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 2)) ? ("has-children") : (""));
                echo "\">
        ";
                // line 3
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 3)) {
                    // line 4
                    echo "            <a role=\"presentation\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 4), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 4), "isExternal", [], "any", false, false, false, 4)) ? ("target=\"_blank\"") : (""));
                    echo "
               class=\"text-grey-dark no-underline hover:text-grey-darker
            ";
                    // line 6
                    echo ((($context["isSubnav"] ?? null)) ? ("px-4 py-2 block") : (""));
                    echo "
            ";
                    // line 7
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 7)) ? ("active") : (""));
                    echo "
            ";
                    // line 8
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 8)) ? ("child-active") : (""));
                    echo "
            ";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 9), "cssClass", [], "any", false, false, false, 9), "html", null, true);
                    echo "\">
                ";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 13
                    echo "            <span class=\"text-grey-dark no-underline hover:text-grey-darker\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13), "html", null, true);
                    echo "</span>
        ";
                }
                // line 15
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "            <div class=\"absolute hidden shadow py-2 bg-white text-left rounded-sm -ml-4 z-30 max-w-sm\">
                ";
                    // line 17
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 17)                    ;
                    $context['__cms_partial_params']['isSubnav'] = true                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    // line 18
                    echo "            </div>
        ";
                }
                // line 20
                echo "    </div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  99 => 18,  93 => 17,  90 => 16,  87 => 15,  81 => 13,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  51 => 4,  49 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items if not item.viewBag.isHidden %}
    <div class=\"block mt-4 {{ isSubnav ? 'block' : 'lg:inline-block mr-8' }} lg:mt-0 {{ item.items ? 'has-children' : '' }}\">
        {% if item.url %}
            <a role=\"presentation\" href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}
               class=\"text-grey-dark no-underline hover:text-grey-darker
            {{ isSubnav ? 'px-4 py-2 block' }}
            {{ item.isActive ? 'active' : '' }}
            {{ item.isChildActive ? 'child-active' : '' }}
            {{ item.viewBag.cssClass }}\">
                {{ item.title }}
            </a>
        {% else %}
            <span class=\"text-grey-dark no-underline hover:text-grey-darker\">{{ item.title }}</span>
        {% endif %}
        {% if item.items %}
            <div class=\"absolute hidden shadow py-2 bg-white text-left rounded-sm -ml-4 z-30 max-w-sm\">
                {% partial __SELF__ ~ \"::items\" items=item.items isSubnav=true %}
            </div>
        {% endif %}
    </div>
{% endfor %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/staticmenu/items.htm", "");
    }
}
