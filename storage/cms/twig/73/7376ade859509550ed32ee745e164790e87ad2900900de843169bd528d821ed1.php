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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/partials/footer.htm */
class __TwigTemplate_add639eb3de119ebe13c1cd53ccc5a60ee292deeb3056e8e819dacd0d600dcdf extends \Twig\Template
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
        echo "<footer class=\"footer text-sm text-grey-dark py-8 border-solid border-t border-smoke-light\">
    <div class=\"container mx-auto text-center text-xs text-grey\">
  <!--       This is a demo store using the <a href=\"https://github.com/OFFLINE-GmbH/oc-mall-plugin\" target=\"_blank\" rel=\"nofollow noopener\">OFFLINE.Mall</a> plugin for <a href=\"http://octobercms.com\" target=\"_blank\" rel=\"nofollow noopener\">October CMS</a>. -->
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer text-sm text-grey-dark py-8 border-solid border-t border-smoke-light\">
    <div class=\"container mx-auto text-center text-xs text-grey\">
  <!--       This is a demo store using the <a href=\"https://github.com/OFFLINE-GmbH/oc-mall-plugin\" target=\"_blank\" rel=\"nofollow noopener\">OFFLINE.Mall</a> plugin for <a href=\"http://octobercms.com\" target=\"_blank\" rel=\"nofollow noopener\">October CMS</a>. -->
    </div>
</footer>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/partials/footer.htm", "");
    }
}
