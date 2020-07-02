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

/* C:\xampp\htdocs\darya_online_shopping/plugins/offline/mall/components/productreviews/scripts.htm */
class __TwigTemplate_364208e116f84c58a1018891e5801b990f984f40ee594ea4cde48d30f2f7e416 extends \Twig\Template
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
        \$(function () {
            ";
        // line 5
        echo "            \$('body').on('click', '.mall-pagination--reviews a', function (e) {
                e.preventDefault()
                var matches = this.href.match(/page=(\\d+)/)
                if (matches.length < 2) {
                    return
                }
                var page = matches[1]
                \$('.mall-reviews').css({opacity: .4, cursor: 'wait'})
                \$.request('";
        // line 13
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onPageChange', {
                    data: {page: page},
                    complete: function (data) {
                        this.complete(data)
                        var \$reviews = \$('.mall-reviews')
                        \$reviews.css({opacity: 1, cursor: 'initial'})
                        window.scrollTo({
                            top: \$reviews.offset().top,
                            behavior: 'smooth'
                        });
                    }
                })
            })

            ";
        // line 28
        echo "            \$('.js-mall-rating .mall-star').on('mouseenter', function() {
                \$(this).parent().find('.mall-star--hover').removeClass('mall-star--hover')
                var highlight = function(el) {
                    el.classList.add('mall-star--hover')
                    if (el.previousElementSibling) {
                        el.classList.add('mall-star--hover')
                        highlight(el.previousElementSibling)
                    }
                }
                highlight(this)
            }).on('click', function() {
                var \$parent = \$(this).parent()
                \$parent.find('.mall-star--active').removeClass('mall-star--active')
                \$parent.parent().prev().val(this.dataset.value)

                revealForm()

                var highlight = function(el) {
                    el.classList.add('mall-star--active')
                    if (el.previousElementSibling) {
                        el.classList.add('mall-star--active')
                        highlight(el.previousElementSibling)
                    }
                }
                highlight(this)
            })
            \$('.mall-category-review__rating--clickable').on('mouseleave', function() {
                \$(this).find('.mall-star--hover').removeClass('mall-star--hover')
            })
            \$('.js-mall-edit-review').on('click', function(e) {
                e.preventDefault();
                revealForm()
            })

            function revealForm() {
                \$('.mall-product-reviews__form-details').addClass('mall-product-reviews__form-details--visible')
                \$('.mall-product-reviews__user-review').remove();
            }
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 1,  70 => 28,  53 => 13,  43 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            {# AJAX pagination for reviews #}
            \$('body').on('click', '.mall-pagination--reviews a', function (e) {
                e.preventDefault()
                var matches = this.href.match(/page=(\\d+)/)
                if (matches.length < 2) {
                    return
                }
                var page = matches[1]
                \$('.mall-reviews').css({opacity: .4, cursor: 'wait'})
                \$.request('{{ __SELF__ }}::onPageChange', {
                    data: {page: page},
                    complete: function (data) {
                        this.complete(data)
                        var \$reviews = \$('.mall-reviews')
                        \$reviews.css({opacity: 1, cursor: 'initial'})
                        window.scrollTo({
                            top: \$reviews.offset().top,
                            behavior: 'smooth'
                        });
                    }
                })
            })

            {# Star rating widget #}
            \$('.js-mall-rating .mall-star').on('mouseenter', function() {
                \$(this).parent().find('.mall-star--hover').removeClass('mall-star--hover')
                var highlight = function(el) {
                    el.classList.add('mall-star--hover')
                    if (el.previousElementSibling) {
                        el.classList.add('mall-star--hover')
                        highlight(el.previousElementSibling)
                    }
                }
                highlight(this)
            }).on('click', function() {
                var \$parent = \$(this).parent()
                \$parent.find('.mall-star--active').removeClass('mall-star--active')
                \$parent.parent().prev().val(this.dataset.value)

                revealForm()

                var highlight = function(el) {
                    el.classList.add('mall-star--active')
                    if (el.previousElementSibling) {
                        el.classList.add('mall-star--active')
                        highlight(el.previousElementSibling)
                    }
                }
                highlight(this)
            })
            \$('.mall-category-review__rating--clickable').on('mouseleave', function() {
                \$(this).find('.mall-star--hover').removeClass('mall-star--hover')
            })
            \$('.js-mall-edit-review').on('click', function(e) {
                e.preventDefault();
                revealForm()
            })

            function revealForm() {
                \$('.mall-product-reviews__form-details').addClass('mall-product-reviews__form-details--visible')
                \$('.mall-product-reviews__user-review').remove();
            }
        })
    </script>
{% endput %}", "C:\\xampp\\htdocs\\darya_online_shopping/plugins/offline/mall/components/productreviews/scripts.htm", "");
    }
}
