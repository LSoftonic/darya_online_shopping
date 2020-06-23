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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/enhancedecommerceanalytics/default.htm */
class __TwigTemplate_23b693ab5bd4c5500977ad1bc88f8bbc73c842c0a7547abe588890e87e4a0cdc extends \Twig\Template
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
        echo "<script>
    window.dataLayer = window.dataLayer || [];
</script>
<script async defer>
    \$(function () {
        \$.subscribe('mall.cart.productAdded', function (e, data) {
            dataLayer.push({
                'event': 'addToCart',
                'ecommerce': {
                    'currencyCode': data.currency.code,
                    'add': {
                        'products': [{
                            'name': data.item.name,
                            'id': data.item.id,
                            'price': data.item.price,
                            'brand': data.item.brand,
                            'category': data.item.category,
                            'variant': data.item.variant,
                            'quantity': data.quantity
                        }]
                    }
                }
            })
        })
        \$.subscribe('mall.cart.productRemoved', function (e, data) {
            dataLayer.push({
                'event': 'removeFromCart',
                'ecommerce': {
                    'remove': {
                        'products': [{
                            'name': data.item.name,
                            'id': data.item.id,
                            'price': data.item.price,
                            'brand': data.item.brand,
                            'category': data.item.category,
                            'variant': data.item.variant,
                            'quantity': data.quantity
                        }]
                    }
                }
            })
        })
    })
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/enhancedecommerceanalytics/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    window.dataLayer = window.dataLayer || [];
</script>
<script async defer>
    \$(function () {
        \$.subscribe('mall.cart.productAdded', function (e, data) {
            dataLayer.push({
                'event': 'addToCart',
                'ecommerce': {
                    'currencyCode': data.currency.code,
                    'add': {
                        'products': [{
                            'name': data.item.name,
                            'id': data.item.id,
                            'price': data.item.price,
                            'brand': data.item.brand,
                            'category': data.item.category,
                            'variant': data.item.variant,
                            'quantity': data.quantity
                        }]
                    }
                }
            })
        })
        \$.subscribe('mall.cart.productRemoved', function (e, data) {
            dataLayer.push({
                'event': 'removeFromCart',
                'ecommerce': {
                    'remove': {
                        'products': [{
                            'name': data.item.name,
                            'id': data.item.id,
                            'price': data.item.price,
                            'brand': data.item.brand,
                            'category': data.item.category,
                            'variant': data.item.variant,
                            'quantity': data.quantity
                        }]
                    }
                }
            })
        })
    })
</script>
", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/enhancedecommerceanalytics/default.htm", "");
    }
}
