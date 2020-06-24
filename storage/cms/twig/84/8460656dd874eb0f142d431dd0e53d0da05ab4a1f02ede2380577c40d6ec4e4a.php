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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/pages/index.htm */
class __TwigTemplate_19842b37c0818da3442000b16a68aa4adbee5ecc2bfe09b645bd29e98eef4e51 extends \Twig\Template
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
        echo "<h1>Welcome to the DARYA Mall</h1>
<p>Feel free to look around...</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Welcome to the DARYA Mall</h1>
<p>Feel free to look around...</p>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/index.htm", "");
    }
}
