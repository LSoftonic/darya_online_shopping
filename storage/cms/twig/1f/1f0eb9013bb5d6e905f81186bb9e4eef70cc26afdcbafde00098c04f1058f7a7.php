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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/product/servicemodal.htm */
class __TwigTemplate_a49851244d4d9db3758bc5422208ed83a60141ba97e2264cc82e994cdec7304c extends \Twig\Template
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
        echo "<form class=\"mall-modal__inner\"
      data-request=\"onAddToCartWithServices\"
      data-request-success=\"window.Mall.Modal.removeClass('mall-modal--visible'); \$.publish('mall.cart.productAdded', data);\"
      data-request-validate
      data-request-flash>
    <h3>";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.services.modal_title"]);
        echo "</h3>

    <div class=\"mall-product-services\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "        <div class=\"mall-product-service\">
            <h4 class=\"mall-product-service__name\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</h4>
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 12)) {
                // line 13
                echo "            <div class=\"mall-product-service__description\">
                ";
                // line 14
                echo call_user_func_array($this->env->getFunction('html_clean')->getCallable(), ["clean", twig_get_attribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 14)]);
                echo "
            </div>
            ";
            }
            // line 17
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "pivot", [], "any", false, false, false, 17), "required", [], "any", false, false, false, 17)) {
                // line 18
                echo "                <div class=\"mall-product-service__required visible\" data-validate-for=\"service.";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\">
                    ";
                // line 19
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.services.required"]);
                echo "
                </div>
            ";
            }
            // line 22
            echo "            <div class=\"mall-product-service-options\">
                ";
            // line 23
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["service"], "pivot", [], "any", false, false, false, 23), "required", [], "any", false, false, false, 23)) {
                // line 24
                echo "                <label class=\"mall-product-service-option\" for=\"service-none-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                    <span class=\"mall-product-service-option__radio\">
                        <input type=\"radio\" name=\"service[";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "][]\" value=\"\" id=\"service-none-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" checked>
                    </span>
                    <span class=\"mall-product-service-option__name\">
                        ";
                // line 29
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.services.none"]);
                echo "
                    </span>
                </label>
                ";
            }
            // line 33
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["service"], "options", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 34
                echo "                    <label class=\"mall-product-service-option\" for=\"option-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                        <span class=\"mall-product-service-option__radio\">
                            <input type=\"radio\" name=\"service[";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "][]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\" id=\"option-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                        </span>
                        <span class=\"mall-product-service-option__name\">
                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 39), "html", null, true);
                echo "
                        </span>
                        <span class=\"mall-product-service-option__price\">
                            ";
                // line 42
                echo call_user_func_array($this->env->getFunction('html_clean')->getCallable(), ["clean", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "method", false, false, false, 42), "string", [], "any", false, false, false, 42)]);
                echo "
                        </span>
                        ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 44)) {
                    // line 45
                    echo "                            <span class=\"mall-product-service-option__description\">
                                ";
                    // line 46
                    echo call_user_func_array($this->env->getFunction('html_clean')->getCallable(), ["clean", twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 46)]);
                    echo "
                            </span>
                        ";
                }
                // line 49
                echo "                    </label>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>

    <div class=\"mall-product-service-error\" data-validate-for=\"quantity\"></div>

    <div class=\"mall-modal__actions\">
        <div>
            <a href=\"javascript:;\" onclick=\"window.Mall.Modal.removeClass('mall-modal--visible');\" class=\"mall-btn\">
                ";
        // line 61
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cancel"]);
        echo "
            </a>
        </div>
        <div>
        <button class=\"mall-btn mall-btn--primary\" data-attach-loading>
            ";
        // line 66
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart.add"]);
        echo "
        </button>
        </div>
    </div>
</form>


<script>
    window.Mall.Modal.addClass('mall-modal--visible')
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/servicemodal.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 66,  179 => 61,  170 => 54,  162 => 51,  155 => 49,  149 => 46,  146 => 45,  144 => 44,  139 => 42,  133 => 39,  123 => 36,  117 => 34,  112 => 33,  105 => 29,  97 => 26,  91 => 24,  89 => 23,  86 => 22,  80 => 19,  75 => 18,  72 => 17,  66 => 14,  63 => 13,  61 => 12,  57 => 11,  54 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"mall-modal__inner\"
      data-request=\"onAddToCartWithServices\"
      data-request-success=\"window.Mall.Modal.removeClass('mall-modal--visible'); \$.publish('mall.cart.productAdded', data);\"
      data-request-validate
      data-request-flash>
    <h3>{{ 'offline.mall::frontend.services.modal_title' | trans }}</h3>

    <div class=\"mall-product-services\">
        {% for service in services %}
        <div class=\"mall-product-service\">
            <h4 class=\"mall-product-service__name\">{{ service.name }}</h4>
            {% if service.description %}
            <div class=\"mall-product-service__description\">
                {{ html_clean(service.description | raw) }}
            </div>
            {% endif %}
            {% if service.pivot.required %}
                <div class=\"mall-product-service__required visible\" data-validate-for=\"service.{{ service.id }}\">
                    {{ 'offline.mall::frontend.services.required' | trans }}
                </div>
            {% endif %}
            <div class=\"mall-product-service-options\">
                {% if not service.pivot.required %}
                <label class=\"mall-product-service-option\" for=\"service-none-{{ service.id }}\">
                    <span class=\"mall-product-service-option__radio\">
                        <input type=\"radio\" name=\"service[{{ service.id }}][]\" value=\"\" id=\"service-none-{{ service.id }}\" checked>
                    </span>
                    <span class=\"mall-product-service-option__name\">
                        {{ 'offline.mall::frontend.services.none' | trans }}
                    </span>
                </label>
                {% endif %}
                {% for option in service.options %}
                    <label class=\"mall-product-service-option\" for=\"option-{{ option.id }}\">
                        <span class=\"mall-product-service-option__radio\">
                            <input type=\"radio\" name=\"service[{{ service.id }}][]\" value=\"{{ option.id }}\" id=\"option-{{ option.id }}\">
                        </span>
                        <span class=\"mall-product-service-option__name\">
                            {{ option.name }}
                        </span>
                        <span class=\"mall-product-service-option__price\">
                            {{ html_clean(option.price().string | raw) }}
                        </span>
                        {% if option.description %}
                            <span class=\"mall-product-service-option__description\">
                                {{ html_clean(option.description | raw) }}
                            </span>
                        {% endif %}
                    </label>
                {% endfor %}
            </div>
        </div>
        {% endfor %}
    </div>

    <div class=\"mall-product-service-error\" data-validate-for=\"quantity\"></div>

    <div class=\"mall-modal__actions\">
        <div>
            <a href=\"javascript:;\" onclick=\"window.Mall.Modal.removeClass('mall-modal--visible');\" class=\"mall-btn\">
                {{ 'offline.mall::frontend.cancel' | trans }}
            </a>
        </div>
        <div>
        <button class=\"mall-btn mall-btn--primary\" data-attach-loading>
            {{ 'offline.mall::frontend.cart.add' | trans }}
        </button>
        </div>
    </div>
</form>


<script>
    window.Mall.Modal.addClass('mall-modal--visible')
</script>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/servicemodal.htm", "");
    }
}
