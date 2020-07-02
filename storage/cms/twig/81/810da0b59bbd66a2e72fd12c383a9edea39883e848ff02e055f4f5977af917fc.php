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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/wishlistbutton/button.htm */
class __TwigTemplate_550acec1200abb321816755d8200402139d3bd1b1983dd546dc99b43dba094d6 extends \Twig\Template
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
        echo "<button class=\"mall-btn mall-btn--full mall-add-to-wishlist-button\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.add"]);
        echo "
</button>
<script>
    var btn = document.querySelector('.mall-add-to-wishlist-button')
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault()
            var popup = document.querySelector('.mall-wishlist-button__popup')
            if (popup) {
                popup.classList.toggle('mall-wishlist-button__popup--visible')
            }
        })
    }
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/wishlistbutton/button.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"mall-btn mall-btn--full mall-add-to-wishlist-button\">
    {{ 'offline.mall::frontend.wishlist.add' | trans }}
</button>
<script>
    var btn = document.querySelector('.mall-add-to-wishlist-button')
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault()
            var popup = document.querySelector('.mall-wishlist-button__popup')
            if (popup) {
                popup.classList.toggle('mall-wishlist-button__popup--visible')
            }
        })
    }
</script>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/wishlistbutton/button.htm", "");
    }
}
