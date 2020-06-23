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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/malldependencies/default.htm */
class __TwigTemplate_36c1d1e4181cacaee9561f4f35ccfca8e361666c28db0931d9185c63b773b0d0 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script>
        window.Mall = window.Mall || {}
        \$(function () {
            window.Mall.Modal = \$('<div class=\"mall-modal\">')
            window.Mall.Modal.on('click', function(e) {
                if (e.target.classList.contains('mall-modal')) {
                    window.Mall.Modal.removeClass('mall-modal--visible')
                }
            })
            window.Mall.Modal.prependTo(document.body)
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/malldependencies/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        window.Mall = window.Mall || {}
        \$(function () {
            window.Mall.Modal = \$('<div class=\"mall-modal\">')
            window.Mall.Modal.on('click', function(e) {
                if (e.target.classList.contains('mall-modal')) {
                    window.Mall.Modal.removeClass('mall-modal--visible')
                }
            })
            window.Mall.Modal.prependTo(document.body)
        })
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/malldependencies/default.htm", "");
    }
}
