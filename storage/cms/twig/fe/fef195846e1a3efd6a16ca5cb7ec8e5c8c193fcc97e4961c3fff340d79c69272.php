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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/accountButton/default.htm */
class __TwigTemplate_f2c64186aa047050d676ba4badf57ba2f594db99745f638c8247146c2b35ef4c extends \Twig\Template
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
        echo "<div class=\"widget-header mr-3\">
    <a href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["myAccount"] ?? null), "accountPage", [], "any", false, false, false, 2));
        echo "\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-user\"></i>
            <span class=\"notify\">3</span>
        </div>
        <small class=\"text\"> ";
        // line 7
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.account"]);
        echo "
        </small>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/accountButton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widget-header mr-3\">
    <a href=\"{{ myAccount.accountPage | page }}\" class=\"widget-view\">
        <div class=\"icon-area\">
            <i class=\"fa fa-user\"></i>
            <span class=\"notify\">3</span>
        </div>
        <small class=\"text\"> {{ 'offline.mall::frontend.account' | trans }}
        </small>
    </a>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/accountButton/default.htm", "");
    }
}
