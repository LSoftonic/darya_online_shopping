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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/discountapplier/input.htm */
class __TwigTemplate_90733b73b6d3359f9ce1ddadf4575ee039f43ad84c719c9a2b5674f7c27cb742 extends \Twig\Template
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
        echo "<form data-request=\"onApplyDiscount\"
      data-request-validate
      data-request-flash
      data-request-success=\"\$.publish('mall.discount.applied')\">
    <div class=\"mall-form-control\">
        <label for=\"code\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.discount.label"]);
        echo "</label>
        <input name=\"code\" type=\"text\" id=\"code\" placeholder=\"";
        // line 7
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.discount.placeholder"]);
        echo "\">
        <div data-validate-for=\"code\"></div>
    </div>
    <div>
        <button type=\"submit\" class=\"mall-btn\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.discount.apply"]);
        echo "</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/discountapplier/input.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onApplyDiscount\"
      data-request-validate
      data-request-flash
      data-request-success=\"\$.publish('mall.discount.applied')\">
    <div class=\"mall-form-control\">
        <label for=\"code\">{{ 'offline.mall::frontend.discount.label' | trans }}</label>
        <input name=\"code\" type=\"text\" id=\"code\" placeholder=\"{{ 'offline.mall::frontend.discount.placeholder' | trans }}\">
        <div data-validate-for=\"code\"></div>
    </div>
    <div>
        <button type=\"submit\" class=\"mall-btn\">{{ 'offline.mall::frontend.discount.apply' | trans }}</button>
    </div>
</form>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/discountapplier/input.htm", "");
    }
}
