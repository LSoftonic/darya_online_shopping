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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/products/star.htm */
class __TwigTemplate_89be23207a6e16a4b8acfd47e1c36d7e7deaa6137a36710fe9b83e484fc4d53f extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"isolation:isolate\" viewBox=\"0 0 32 30.434\" width=\"32\" height=\"30.434\"
     data-value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\"
     class=\"mall-star ";
        // line 3
        echo ((($context["active"] ?? null)) ? ("mall-star--active") : (""));
        echo "\">
    <defs>
        <clipPath id=\"a\">
            <path d=\"M0 0h32v30.434H0z\"/>
        </clipPath>
    </defs>
    <g clip-path=\"url(#a)\">
        <path
            d=\"M16 2.593l4.101 8.311 9.173 1.333-6.637 6.469 1.566 9.136L16 23.529l-8.204 4.313 1.567-9.136-6.637-6.469 9.172-1.333L16 2.593z\"
            class=\"mall-star__bg\"/>
        <path
            d=\"M16 3.528l3.907 7.917 8.738 1.27-6.322 6.163 1.492 8.702L16 23.471 8.185 27.58l1.493-8.702-6.323-6.163 8.738-1.27L16 3.528zM16 0l4.944 10.019L32 11.625l-8 7.798 1.888 11.011L16 25.235l-9.888 5.199L8 19.423l-8-7.798 11.056-1.606L16 0z\"
            class=\"mall-star__border\"
            fill-rule=\"evenodd\"/>
    </g>
</svg>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/products/star.htm";
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
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" style=\"isolation:isolate\" viewBox=\"0 0 32 30.434\" width=\"32\" height=\"30.434\"
     data-value=\"{{ value }}\"
     class=\"mall-star {{ active ? 'mall-star--active' }}\">
    <defs>
        <clipPath id=\"a\">
            <path d=\"M0 0h32v30.434H0z\"/>
        </clipPath>
    </defs>
    <g clip-path=\"url(#a)\">
        <path
            d=\"M16 2.593l4.101 8.311 9.173 1.333-6.637 6.469 1.566 9.136L16 23.529l-8.204 4.313 1.567-9.136-6.637-6.469 9.172-1.333L16 2.593z\"
            class=\"mall-star__bg\"/>
        <path
            d=\"M16 3.528l3.907 7.917 8.738 1.27-6.322 6.163 1.492 8.702L16 23.471 8.185 27.58l1.493-8.702-6.323-6.163 8.738-1.27L16 3.528zM16 0l4.944 10.019L32 11.625l-8 7.798 1.888 11.011L16 25.235l-9.888 5.199L8 19.423l-8-7.798 11.056-1.606L16 0z\"
            class=\"mall-star__border\"
            fill-rule=\"evenodd\"/>
    </g>
</svg>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/products/star.htm", "");
    }
}
