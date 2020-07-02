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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/cart/proceedtocheckout.htm */
class __TwigTemplate_0b97302a35fc981b4c92978112c912f8f84cd40fd12c330404248ab6c505bcab extends \Twig\Template
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
        echo "<div class=\"mall-cart-actions\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "checkoutPage", [], "any", false, false, false, 2));
        echo "\" class=\"mall-btn mall-btn--primary\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.checkout.begin"]);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/proceedtocheckout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-cart-actions\">
    <a href=\"{{ __SELF__.checkoutPage | page }}\" class=\"mall-btn mall-btn--primary\">
        {{ 'offline.mall::frontend.checkout.begin' | trans }}
    </a>
</div>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/cart/proceedtocheckout.htm", "");
    }
}
