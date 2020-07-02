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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/product/customfields/checkbox.htm */
class __TwigTemplate_1258d94ae82a6313a19e401e9e160ab73569016b1f2709c3fcc8c5e6bdd4f599 extends \Twig\Template
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
        echo "<div class=\"mall-form-checkbox\">
    <label for=\"field-";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "hashId", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"mall-label\">
        <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"field-";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "hashId", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
               name=\"fields[";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "hashId", [], "any", false, false, false, 4), "html", null, true);
        echo "]\"
               data-mall-custom-field
               data-id=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "hashId", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
    </label>
    <div data-validate-for=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "hashId", [], "any", false, false, false, 9), "html", null, true);
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/customfields/checkbox.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-form-checkbox\">
    <label for=\"field-{{ field.hashId }}\" class=\"mall-label\">
        <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"field-{{ field.hashId }}\"
               name=\"fields[{{ field.hashId }}]\"
               data-mall-custom-field
               data-id=\"{{ field.hashId }}\">
        {{ field.name }}
    </label>
    <div data-validate-for=\"{{ field.hashId }}\"></div>
</div>", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/product/customfields/checkbox.htm", "");
    }
}
