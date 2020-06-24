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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/products/loader.htm */
class __TwigTemplate_75054f5a71a1a3d69bd6cfa13c0d71dc2a537a563d9a4d5a6da01c605aa8b8e0 extends \Twig\Template
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
        echo "<div class=\"mall-loader\">
    <!-- By Sam Herbert (@sherb), for everyone. More @ http://goo.gl/7AJzbL -->
    <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\" xmlns=\"http://www.w3.org/2000/svg\" stroke=\"#333\">
        <g fill=\"none\" fill-rule=\"evenodd\">
            <g transform=\"translate(1 1)\" stroke-width=\"2\">
                <circle stroke-opacity=\".5\" cx=\"18\" cy=\"18\" r=\"18\"/>
                <path d=\"M36 18c0-9.94-8.06-18-18-18\">
                    <animateTransform
                            attributeName=\"transform\"
                            type=\"rotate\"
                            from=\"0 18 18\"
                            to=\"360 18 18\"
                            dur=\"1s\"
                            repeatCount=\"indefinite\"/>
                </path>
            </g>
        </g>
    </svg>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/products/loader.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-loader\">
    <!-- By Sam Herbert (@sherb), for everyone. More @ http://goo.gl/7AJzbL -->
    <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\" xmlns=\"http://www.w3.org/2000/svg\" stroke=\"#333\">
        <g fill=\"none\" fill-rule=\"evenodd\">
            <g transform=\"translate(1 1)\" stroke-width=\"2\">
                <circle stroke-opacity=\".5\" cx=\"18\" cy=\"18\" r=\"18\"/>
                <path d=\"M36 18c0-9.94-8.06-18-18-18\">
                    <animateTransform
                            attributeName=\"transform\"
                            type=\"rotate\"
                            from=\"0 18 18\"
                            to=\"360 18 18\"
                            dur=\"1s\"
                            repeatCount=\"indefinite\"/>
                </path>
            </g>
        </g>
    </svg>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/products/loader.htm", "");
    }
}
