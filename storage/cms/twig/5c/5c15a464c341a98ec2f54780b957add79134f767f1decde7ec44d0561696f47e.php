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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/layouts/default.htm */
class __TwigTemplate_f907a8ff896604802909d5aaa606856107feb03912c853ca63004d8dd276abcf extends \Twig\Template
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
        echo "<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from bootstrap-ecommerce.com/templates/alistyle-html/page-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 18:25:00 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"pragma\" content=\"no-cache\" />
<meta http-equiv=\"cache-control\" content=\"max-age=604800\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"viewport\"
 content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
<meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "meta_description", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
<title>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        echo "</title>
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.ico");
        echo "\" rel=\"shortcut icon\" type=\"image/x-icon\">


<!-- Bootstrap4 files-->
<link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

<!-- Font awesome 5 -->
<link href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/fontawesome/css/all.min.css");
        echo "\" type=\"text/css\" rel=\"stylesheet\">

<!-- custom style -->
<link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/ui.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery"]);
        echo "\"></script>
";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("enhancedEcommerceAnalytics"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mallDependencies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 32
        echo "
</head>
<body>
    ";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 37
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
    <!-- jQuery -->
<script src=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-2.0.0.min.js");
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\" type=\"text/javascript\"></script>
   <!-- custom javascript -->
<script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\" type=\"text/javascript\"></script>
";
        // line 45
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 46
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 47
        echo "    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 48
                echo "        <script>
            \$(function() {
                \$.oc.flashMsg({type: '";
                // line 50
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "', text: '";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "'})
            })
        </script>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 54
        echo "    </body>
    </html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 54,  161 => 50,  157 => 48,  153 => 47,  149 => 46,  138 => 45,  134 => 44,  129 => 42,  124 => 40,  120 => 38,  115 => 37,  112 => 36,  108 => 35,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  86 => 27,  82 => 26,  76 => 23,  70 => 20,  62 => 16,  59 => 15,  55 => 14,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<html lang=\"en\">

<!-- Mirrored from bootstrap-ecommerce.com/templates/alistyle-html/page-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 18:25:00 GMT -->
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"pragma\" content=\"no-cache\" />
<meta http-equiv=\"cache-control\" content=\"max-age=604800\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<meta name=\"viewport\"
 content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<title>{{ this.page.title }}</title>
{% styles %}
<link href=\"{{'assets/images/favicon.ico'|theme}}\" rel=\"shortcut icon\" type=\"image/x-icon\">


<!-- Bootstrap4 files-->
<link href=\"{{'assets/css/bootstrap.css'|theme}}\" rel=\"stylesheet\" type=\"text/css\"/>

<!-- Font awesome 5 -->
<link href=\"{{'assets/fonts/fontawesome/css/all.min.css'|theme}}\" type=\"text/css\" rel=\"stylesheet\">

<!-- custom style -->
<link href=\"{{'assets/css/ui.css'|theme}}\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"{{'assets/css/responsive.css'|theme}}\" rel=\"stylesheet\" type=\"text/css\" />

<script src=\"{{ ['@jquery'] | theme }}\"></script>
{% component 'enhancedEcommerceAnalytics' %}
{% component 'mallDependencies' %}

</head>
<body>
    {% partial 'header' %}
    {% page %}
    {% partial 'footer' %}

    <!-- jQuery -->
<script src=\"{{'assets/js/jquery-2.0.0.min.js'|theme}}\" type=\"text/javascript\"></script>

<script src=\"{{'assets/js/bootstrap.bundle.min.js'|theme}}\" type=\"text/javascript\"></script>
   <!-- custom javascript -->
<script src=\"{{'assets/js/script.js'|theme}}\" type=\"text/javascript\"></script>
{% framework extras %}
    {% scripts %}
    {% flash %}
        <script>
            \$(function() {
                \$.oc.flashMsg({type: '{{ type }}', text: '{{ message }}'})
            })
        </script>
    {% endflash %}
    </body>
    </html>", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/layouts/default.htm", "");
    }
}
