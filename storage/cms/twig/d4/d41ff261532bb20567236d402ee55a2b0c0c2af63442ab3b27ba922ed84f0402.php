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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/partials/header.htm */
class __TwigTemplate_7ff2d5a07b01c90740a88af1fae170461b0727a6de921b9ba487aec6dbe063d8 extends \Twig\Template
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
        echo "<header class=\"section-header\">
    <section class=\"header-main border-bottom\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-2 col-lg-3 col-md-12\">
                    <a href=\"http://bootstrap-ecommerce.com/\" class=\"brand-wrap\">
                        <img class=\"logo\" src=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class=\"col-xl-6 col-lg-5 col-md-6\">
                    <form class=\"search-header\"  action=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
                        <div class=\"input-group w-100\">
                            <select class=\"custom-select border-right\"  name=\"category_name\">
                                    <option value=\"\">All type</option><option value=\"codex\">Special</option>
                                    <option value=\"comments\">Only best</option>
                                    <option value=\"content\">Latest</option>
                            </select>
                            <input 
                            name=\"q\"
                           type=\"text\"
                           value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
        echo "\"
                           class=\"form-control\"
                           placeholder=\"";
        // line 23
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search"]);
        echo "\"
                           autocomplete=\"off\"
                           >
                            
                            <div class=\"input-group-append\">
                              <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fa fa-search\"></i> Search
                              </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"widgets-wrap float-md-right\">
                      ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("accountButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "                      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cartButton/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "                      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wishlist"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
    
    
    <nav class=\"navbar navbar-main navbar-expand-lg border-bottom\">
      <div class=\"container\">
    
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main_nav\" aria-controls=\"main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
    
        <div class=\"collapse navbar-collapse\" id=\"main_nav\">
      ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navigation"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "          <ul class=\"navbar-nav ml-md-auto\">
              <li class=\"nav-item dropdown\">
                        
                <div class=\"nav-link\">
                  ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["currencyPicker"] ?? null) . "::selector")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "              </div>
              </li>
              <li class=\"nav-item dropdown\">
           ";
        // line 64
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
           <select style=\"border:none\" name=\"locale\" data-request=\"onSwitchLocale\" class=\"nav-link dropdown-toggle\">
               ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 67
            echo "                   <option class=\"dropdown-item\" value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "           </select>
       ";
        // line 70
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
              </li>
           </ul>
        </div> <!-- collapse .// -->
      </div> <!-- container .// -->
    </nav>
    </header> <!-- section-header.// -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 70,  159 => 69,  146 => 67,  142 => 66,  137 => 64,  132 => 61,  128 => 60,  122 => 56,  118 => 55,  101 => 40,  96 => 39,  91 => 38,  87 => 37,  70 => 23,  65 => 21,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"section-header\">
    <section class=\"header-main border-bottom\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-xl-2 col-lg-3 col-md-12\">
                    <a href=\"http://bootstrap-ecommerce.com/\" class=\"brand-wrap\">
                        <img class=\"logo\" src=\"{{'assets/images/logo.png'|theme}}\">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class=\"col-xl-6 col-lg-5 col-md-6\">
                    <form class=\"search-header\"  action=\"{{ 'search' | page }}\" method=\"get\">
                        <div class=\"input-group w-100\">
                            <select class=\"custom-select border-right\"  name=\"category_name\">
                                    <option value=\"\">All type</option><option value=\"codex\">Special</option>
                                    <option value=\"comments\">Only best</option>
                                    <option value=\"content\">Latest</option>
                            </select>
                            <input 
                            name=\"q\"
                           type=\"text\"
                           value=\"{{ query }}\"
                           class=\"form-control\"
                           placeholder=\"{{ 'offline.mall::frontend.search' | trans }}\"
                           autocomplete=\"off\"
                           >
                            
                            <div class=\"input-group-append\">
                              <button class=\"btn btn-primary\" type=\"submit\">
                                <i class=\"fa fa-search\"></i> Search
                              </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class=\"col-xl-4 col-lg-4 col-md-6\">
                    <div class=\"widgets-wrap float-md-right\">
                      {% partial 'accountButton/default' %}
                      {% partial 'cartButton/default' %}
                      {% partial 'wishlist' %}
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
    
    
    <nav class=\"navbar navbar-main navbar-expand-lg border-bottom\">
      <div class=\"container\">
    
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main_nav\" aria-controls=\"main_nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
    
        <div class=\"collapse navbar-collapse\" id=\"main_nav\">
      {% partial 'navigation' %}
          <ul class=\"navbar-nav ml-md-auto\">
              <li class=\"nav-item dropdown\">
                        
                <div class=\"nav-link\">
                  {% partial currencyPicker ~ '::selector' %}
              </div>
              </li>
              <li class=\"nav-item dropdown\">
           {{ form_open() }}
           <select style=\"border:none\" name=\"locale\" data-request=\"onSwitchLocale\" class=\"nav-link dropdown-toggle\">
               {% for code, name in locales %}
                   <option class=\"dropdown-item\" value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
               {% endfor %}
           </select>
       {{ form_close() }}
              </li>
           </ul>
        </div> <!-- collapse .// -->
      </div> <!-- container .// -->
    </nav>
    </header> <!-- section-header.// -->", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/partials/header.htm", "");
    }
}
