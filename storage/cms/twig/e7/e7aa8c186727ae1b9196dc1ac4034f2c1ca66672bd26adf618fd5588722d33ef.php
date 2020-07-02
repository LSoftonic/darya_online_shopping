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

/* C:\xampp\htdocs\darya_online_shopping/themes/shop/pages/index.htm */
class __TwigTemplate_b1336334e8ab122845f466276937f69c1b86e8fa121352b20a4258b12befeb09 extends \Twig\Template
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
        echo "<div class=\"container\">
    <!-- ========================= SECTION MAIN  ========================= -->
    <section class=\"section-main padding-y\">
    <main class=\"card\">
        <div class=\"card-body\">
    
    <div class=\"row\">
        <aside class=\"col-lg col-md-3 flex-lg-grow-0\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/side_categories"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "        </aside> <!-- col.// -->
        <div class=\"col-md-9 col-xl-7 col-lg-7\">
   <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
   <div id=\"carousel1_indicator\" class=\"slider-home-banner carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"1\"></li>
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banners/slide1.jpg");
        echo "\" alt=\"First slide\"> 
      </div>
      <div class=\"carousel-item\">
        <img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banners/slide2.jpg");
        echo "\" alt=\"Second slide\">
      </div>
      <div class=\"carousel-item\">
        <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/banners/slide3.jpg");
        echo "\" alt=\"Third slide\">
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carousel1_indicator\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel1_indicator\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div> 
  <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->\t
  
        </div> <!-- col.// -->
        <div class=\"col-md d-none d-lg-block flex-grow-1\">
           ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/popular_category"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "        </div> <!-- col.// -->
    </div> <!-- row.// -->
    
        </div> <!-- card-body.// -->
    </main> <!-- card.// -->
    
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    
    
    
    <!-- =============== SECTION DEAL =============== -->
    <section class=\"padding-bottom\">
   ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/offer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "    </section>
    <!-- =============== SECTION DEAL // END =============== -->
    
    <!-- =============== SECTION 1 =============== -->
 ";
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/apparel"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "    <!-- =============== SECTION 1 END =============== -->
    
    <!-- =============== SECTION 2 =============== -->
 ";
        // line 66
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/electronic"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 67
        echo "    <!-- =============== SECTION 2 END =============== -->
    
    
    
    <!-- =============== SECTION REQUEST =============== -->
    
    <section class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Request for Quotation</h4>
    </header>
    
    <div class=\"row\">
        <div class=\"col-md-8\">
    <div class=\"card-banner banner-quote overlay-gradient\" style=\"background-image: url('images/banners/banner9.jpg');\">
      <div class=\"card-img-overlay white\">
        <h3 class=\"card-title\">An easy way to send request to suppliers</h3>
        <p class=\"card-text\" style=\"max-width: 400px\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt.</p>
        <a href=\"#\" class=\"btn btn-primary rounded-pill\">Learn more</a>
      </div>
    </div>
        </div> <!-- col // -->
        <div class=\"col-md-4\">
    
    <div class=\"card card-body\">
        <h4 class=\"title py-3\">One Request, Multiple Quotes</h4>
        <form>
            <div class=\"form-group\">
                <input class=\"form-control\" name=\"\" placeholder=\"What are you looking for?\" type=\"text\">
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input class=\"form-control\" placeholder=\"Quantity\" name=\"\" type=\"text\">
                    
                    <select class=\"custom-select form-control\">
                        <option>Pieces</option>
                        <option>Litres</option>
                        <option>Tons</option>
                        <option>Gramms</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group text-muted\">
                <p>Select template type:</p>
                <label class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"option1\">
                  <div class=\"form-check-label\">Request price</div>
                </label>
                <label class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"option2\">
                  <div class=\"form-check-label\">Request a sample</div>
                </label>
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-warning\">Request for quote</button>
            </div>
        </form>
    </div>
    
        </div> <!-- col // -->
    </div> <!-- row // -->
    </section>
    
    <!-- =============== SECTION REQUEST .//END =============== -->
    
    
    <!-- =============== SECTION ITEMS =============== -->
  ";
        // line 135
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/recItems"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 136
        echo "    <!-- =============== SECTION ITEMS .//END =============== -->
    
    
    <!-- =============== SECTION SERVICES =============== -->
    <section  class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Trade services</h4>
    </header>
    
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/1.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Trade Assurance</h6>
                <p class=\"small text-uppercase text-muted\">Order protection</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/2.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Pay anytime</h6>
                <p class=\"small text-uppercase text-muted\">Finance solution</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/3.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Inspection solution</h6>
                <p class=\"small text-uppercase text-muted\">Easy Inspection</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/4.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Ocean and Air Shipping</h6>
                <p class=\"small text-uppercase text-muted\">Logistic services</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </section>
    <!-- =============== SECTION SERVICES .//END =============== -->
    
    <!-- =============== SECTION REGION =============== -->
 ";
        // line 189
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/brand"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 190
        echo "    <!-- =============== SECTION REGION .//END =============== -->
    
    <article class=\"my-4\">
        <img src=\"images/banners/ad-sm.png\" class=\"w-100\">
    </article>
    </div>  
    <!-- container end.// -->
    
    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    <section class=\"section-subscribe padding-y-lg\">
    <div class=\"container\">
    
    <p class=\"pb-2 text-center text-white\">Delivering the latest product trends and industry news straight to your inbox</p>
    
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-5 col-md-6\">
    <form class=\"form-row\">
            <div class=\"col-md-8 col-7\">
            <input class=\"form-control border-0\" placeholder=\"Your Email\" type=\"email\">
            </div> <!-- col.// -->
            <div class=\"col-md-4 col-5\">
            <button type=\"submit\" class=\"btn btn-block btn-warning\"> <i class=\"fa fa-envelope\"></i> Subscribe </button>
            </div> <!-- col.// -->
    </form>
    <small class=\"form-text text-white-50\">We’ll never share your email address with a third-party. </small>
        </div> <!-- col-md-6.// -->
    </div>
        
    
    </div>
    </section>
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 190,  266 => 189,  211 => 136,  207 => 135,  137 => 67,  133 => 66,  128 => 63,  124 => 62,  118 => 58,  114 => 57,  99 => 44,  95 => 43,  76 => 27,  70 => 24,  64 => 21,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <!-- ========================= SECTION MAIN  ========================= -->
    <section class=\"section-main padding-y\">
    <main class=\"card\">
        <div class=\"card-body\">
    
    <div class=\"row\">
        <aside class=\"col-lg col-md-3 flex-lg-grow-0\">
        {% partial 'home/side_categories' %}
        </aside> <!-- col.// -->
        <div class=\"col-md-9 col-xl-7 col-lg-7\">
   <!-- ================== COMPONENT SLIDER  BOOTSTRAP  ==================  -->
   <div id=\"carousel1_indicator\" class=\"slider-home-banner carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"1\"></li>
      <li data-target=\"#carousel1_indicator\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
      <div class=\"carousel-item active\">
        <img src=\"{{'assets/images/banners/slide1.jpg'|theme}}\" alt=\"First slide\"> 
      </div>
      <div class=\"carousel-item\">
        <img src=\"{{'assets/images/banners/slide2.jpg'|theme}}\" alt=\"Second slide\">
      </div>
      <div class=\"carousel-item\">
        <img src=\"{{'assets/images/banners/slide3.jpg'|theme}}\" alt=\"Third slide\">
      </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carousel1_indicator\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carousel1_indicator\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div> 
  <!-- ==================  COMPONENT SLIDER BOOTSTRAP end.// ==================  .// -->\t
  
        </div> <!-- col.// -->
        <div class=\"col-md d-none d-lg-block flex-grow-1\">
           {% partial 'home/popular_category' %}
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    
        </div> <!-- card-body.// -->
    </main> <!-- card.// -->
    
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->
    
    
    
    <!-- =============== SECTION DEAL =============== -->
    <section class=\"padding-bottom\">
   {% partial 'home/offer' %}
    </section>
    <!-- =============== SECTION DEAL // END =============== -->
    
    <!-- =============== SECTION 1 =============== -->
 {% partial 'home/apparel' %}
    <!-- =============== SECTION 1 END =============== -->
    
    <!-- =============== SECTION 2 =============== -->
 {% partial 'home/electronic' %}
    <!-- =============== SECTION 2 END =============== -->
    
    
    
    <!-- =============== SECTION REQUEST =============== -->
    
    <section class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Request for Quotation</h4>
    </header>
    
    <div class=\"row\">
        <div class=\"col-md-8\">
    <div class=\"card-banner banner-quote overlay-gradient\" style=\"background-image: url('images/banners/banner9.jpg');\">
      <div class=\"card-img-overlay white\">
        <h3 class=\"card-title\">An easy way to send request to suppliers</h3>
        <p class=\"card-text\" style=\"max-width: 400px\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt.</p>
        <a href=\"#\" class=\"btn btn-primary rounded-pill\">Learn more</a>
      </div>
    </div>
        </div> <!-- col // -->
        <div class=\"col-md-4\">
    
    <div class=\"card card-body\">
        <h4 class=\"title py-3\">One Request, Multiple Quotes</h4>
        <form>
            <div class=\"form-group\">
                <input class=\"form-control\" name=\"\" placeholder=\"What are you looking for?\" type=\"text\">
            </div>
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <input class=\"form-control\" placeholder=\"Quantity\" name=\"\" type=\"text\">
                    
                    <select class=\"custom-select form-control\">
                        <option>Pieces</option>
                        <option>Litres</option>
                        <option>Tons</option>
                        <option>Gramms</option>
                    </select>
                </div>
            </div>
            <div class=\"form-group text-muted\">
                <p>Select template type:</p>
                <label class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"option1\">
                  <div class=\"form-check-label\">Request price</div>
                </label>
                <label class=\"form-check form-check-inline\">
                  <input class=\"form-check-input\" type=\"checkbox\" value=\"option2\">
                  <div class=\"form-check-label\">Request a sample</div>
                </label>
            </div>
            <div class=\"form-group\">
                <button class=\"btn btn-warning\">Request for quote</button>
            </div>
        </form>
    </div>
    
        </div> <!-- col // -->
    </div> <!-- row // -->
    </section>
    
    <!-- =============== SECTION REQUEST .//END =============== -->
    
    
    <!-- =============== SECTION ITEMS =============== -->
  {% partial 'home/recItems' %}
    <!-- =============== SECTION ITEMS .//END =============== -->
    
    
    <!-- =============== SECTION SERVICES =============== -->
    <section  class=\"padding-bottom\">
    
    <header class=\"section-heading heading-line\">
        <h4 class=\"title-section text-uppercase\">Trade services</h4>
    </header>
    
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/1.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Trade Assurance</h6>
                <p class=\"small text-uppercase text-muted\">Order protection</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/2.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Pay anytime</h6>
                <p class=\"small text-uppercase text-muted\">Finance solution</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/3.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Inspection solution</h6>
                <p class=\"small text-uppercase text-muted\">Easy Inspection</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
        <div class=\"col-md-3 col-sm-6\">
            <article class=\"card card-post\">
              <img src=\"images/posts/4.jpg\" class=\"card-img-top\">
              <div class=\"card-body\">
                <h6 class=\"title\">Ocean and Air Shipping</h6>
                <p class=\"small text-uppercase text-muted\">Logistic services</p>
              </div>
            </article> <!-- card.// -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
    
    </section>
    <!-- =============== SECTION SERVICES .//END =============== -->
    
    <!-- =============== SECTION REGION =============== -->
 {% partial 'home/brand' %}
    <!-- =============== SECTION REGION .//END =============== -->
    
    <article class=\"my-4\">
        <img src=\"images/banners/ad-sm.png\" class=\"w-100\">
    </article>
    </div>  
    <!-- container end.// -->
    
    <!-- ========================= SECTION SUBSCRIBE  ========================= -->
    <section class=\"section-subscribe padding-y-lg\">
    <div class=\"container\">
    
    <p class=\"pb-2 text-center text-white\">Delivering the latest product trends and industry news straight to your inbox</p>
    
    <div class=\"row justify-content-md-center\">
        <div class=\"col-lg-5 col-md-6\">
    <form class=\"form-row\">
            <div class=\"col-md-8 col-7\">
            <input class=\"form-control border-0\" placeholder=\"Your Email\" type=\"email\">
            </div> <!-- col.// -->
            <div class=\"col-md-4 col-5\">
            <button type=\"submit\" class=\"btn btn-block btn-warning\"> <i class=\"fa fa-envelope\"></i> Subscribe </button>
            </div> <!-- col.// -->
    </form>
    <small class=\"form-text text-white-50\">We’ll never share your email address with a third-party. </small>
        </div> <!-- col-md-6.// -->
    </div>
        
    
    </div>
    </section>
    <!-- ========================= SECTION SUBSCRIBE END// ========================= -->", "C:\\xampp\\htdocs\\darya_online_shopping/themes/shop/pages/index.htm", "");
    }
}
