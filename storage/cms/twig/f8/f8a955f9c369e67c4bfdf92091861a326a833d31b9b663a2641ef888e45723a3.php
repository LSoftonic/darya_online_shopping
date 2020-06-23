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

/* C:\xampp\htdocs\darya/themes/offline-oc-mall-theme/pages/index.htm */
class __TwigTemplate_33e4e833b429cd31a949ee3f2272d6da5316687ef88aed6e77f05a7c255c563e extends \Twig\Template
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
        echo "<h1>Welcome to the OFFLINE Mall</h1>
<p>Feel free to look around...</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya/themes/offline-oc-mall-theme/pages/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Welcome to the OFFLINE Mall</h1>
<p>Feel free to look around...</p>", "C:\\xampp\\htdocs\\darya/themes/offline-oc-mall-theme/pages/index.htm", "");
    }
}
