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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/side_categories.htm */
class __TwigTemplate_d06dcc82343181f9bc8117be61ee23ba533545ae19c629b56eceec930c67895a extends \Twig\Template
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
        echo "<h6>MY MARKETS</h6>
<nav class=\"nav-home-aside\">
    <ul class=\"menu-category\">
        <li><a href=\"#\">Fashion and clothes</a></li>
        <li><a href=\"#\">Automobile and motors</a></li>
        <li><a href=\"#\">Gardening and agriculture</a></li>
        <li><a href=\"#\">Electronics and tech</a></li>
        <li><a href=\"#\">Packaginf and printing</a></li>
        <li><a href=\"#\">Home and kitchen</a></li>
        <li><a href=\"#\">Digital goods</a></li>
        <li class=\"has-submenu\"><a href=\"#\">More items</a>
            <ul class=\"submenu\">
                <li><a href=\"#\">Submenu name</a></li>
                <li><a href=\"#\">Great submenu</a></li>
                <li><a href=\"#\">Another menu</a></li>
                <li><a href=\"#\">Some others</a></li>
            </ul>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/side_categories.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h6>MY MARKETS</h6>
<nav class=\"nav-home-aside\">
    <ul class=\"menu-category\">
        <li><a href=\"#\">Fashion and clothes</a></li>
        <li><a href=\"#\">Automobile and motors</a></li>
        <li><a href=\"#\">Gardening and agriculture</a></li>
        <li><a href=\"#\">Electronics and tech</a></li>
        <li><a href=\"#\">Packaginf and printing</a></li>
        <li><a href=\"#\">Home and kitchen</a></li>
        <li><a href=\"#\">Digital goods</a></li>
        <li class=\"has-submenu\"><a href=\"#\">More items</a>
            <ul class=\"submenu\">
                <li><a href=\"#\">Submenu name</a></li>
                <li><a href=\"#\">Great submenu</a></li>
                <li><a href=\"#\">Another menu</a></li>
                <li><a href=\"#\">Some others</a></li>
            </ul>
        </li>
    </ul>
</nav>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/side_categories.htm", "");
    }
}
