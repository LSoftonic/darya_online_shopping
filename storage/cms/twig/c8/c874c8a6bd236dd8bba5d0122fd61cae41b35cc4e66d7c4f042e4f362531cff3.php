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

/* C:\xampp\htdocs\darya_online_shopping/themes/offline-oc-mall-theme/pages/product.htm */
class __TwigTemplate_85dd190632e01b81860166676fa6b7f0011ac0d7d54afb36aeccb0d2265af22e extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("product"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<h2>Other products from this category</h2>
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("relatedProducts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css\">
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 8
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js\"></script>
    <script>
        \$(function () {
            \$('[data-fancybox=\"product\"]').fancybox({
                loop: true
            });
        })
    </script>
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 7,  57 => 8,  55 => 7,  53 => 4,  50 => 5,  48 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'product' %}
<h2>Other products from this category</h2>
{% component 'relatedProducts' %}
{% put styles %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css\">
{% endput %}
{% put scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js\"></script>
    <script>
        \$(function () {
            \$('[data-fancybox=\"product\"]').fancybox({
                loop: true
            });
        })
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/themes/offline-oc-mall-theme/pages/product.htm", "");
    }
}
