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

/* quipzo3/template/extension/module/wbocproduct.twig */
class __TwigTemplate_9d86585b0d1808a8c224d2b9e587d744b0aa84fa43c692ad32fae19d16f220d9 extends \Twig\Template
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
        echo "<div class=\"bg_grey martb\">
  <div class=\"container\">
    <div class=\"timerpro\">
      <div class=\"borbutt\">
        <h1 class=\"heading text-left\"><span>";
        // line 5
        echo ($context["oc_title"] ?? null);
        echo "</span></h1>
      </div>
    <div class=\"row rless\"> 
    <div class=\"rtlleft\">
      <div class=\"count_product\">
        <div id=\"count\" class=\"owl-theme owl-carousel\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "        <div class=\"product-layout col-xs-12 cless\">
          <div class=\"product-thumb transition\">

           ";
            // line 24
            echo " 
            <div class=\"image custw col-lg-4 col-md-4 col-sm-4 col-xs-12\">
              <a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
            echo "\">
              <img src=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
            echo "\" data-image-large-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 27);
            echo "\"  title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 27);
            echo "\" class=\"img-responsive center-block js-product-cover\" /></a>
              
                            ";
            // line 29
            $context["t"] = 0;
            // line 30
            echo "                              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 31
                echo "                              ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 32
                    echo "                               <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 32);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 32);
                    echo "\" class=\"img-responsive second-img js-product-cover\" alt=\"hover image\"/></a>
                              ";
                    // line 33
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 34
                    echo "                              ";
                }
                // line 35
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    
                          ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 37)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 38
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 38)) {
                // line 39
                echo "                          <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 39);
                echo "%</span>
                          ";
            }
            // line 41
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41)) {
                // line 42
                echo "                          ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                          <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                          ";
                }
                // line 45
                echo "                          ";
            }
            // line 46
            echo "            </div>
           
            <div class=\"caption text-left col-lg-6 col-md-6 col-sm-6 col-xs-12\">
              <div class=\"timer-tex\">
                ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 50)) {
                // line 51
                echo "                  <div class=\"rating\">
                    ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 53) < $context["i"])) {
                        // line 54
                        echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star-o fa-stack-2x\"></i>
                    </span>
                    ";
                    } else {
                        // line 58
                        echo "                    <span class=\"fa fa-stack\">
                      <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                    </span>
                    ";
                    }
                    // line 62
                    echo "                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>";
            } else {
                // line 63
                echo "                  <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 64
                    echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "</div>
                ";
            }
            // line 67
            echo "                
                <h4 class=\"protitle\"><a href=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 68);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
            echo "</a></h4>
                ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69)) {
                // line 70
                echo "                <div class=\"price\">
                  ";
                // line 71
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 71)) {
                    // line 72
                    echo "                  ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                    echo "
                  ";
                } else {
                    // line 74
                    echo "                  <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 74);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74);
                    echo "</span>
                  ";
                }
                // line 76
                echo "                 ";
                // line 79
                echo "                </div>
                ";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                  <div class=\"quantity-progress\" >
                    <div class=\"product-available text-left\">";
            // line 84
            echo ($context["text_availabe"] ?? null);
            echo "<span>";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 84);
            echo "</span></div>
                    ";
            // line 86
            echo "                      <div class=\"obar d-inline-block\">
                        ";
            // line 87
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 87) <= 50)) {
                // line 88
                echo "                          <div class=\"ibar bar1\"></div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 89
$context["product"], "quantity", [], "any", false, false, false, 89) <= 350)) {
                // line 90
                echo "                          <div class=\"ibar bar2\"></div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 91
$context["product"], "quantity", [], "any", false, false, false, 91) <= 650)) {
                // line 92
                echo "                          <div class=\"ibar bar3\"></div>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 93
$context["product"], "quantity", [], "any", false, false, false, 93) <= 1000)) {
                // line 94
                echo "                          <div class=\"ibar bar4\"></div>
                        ";
            } else {
                // line 96
                echo "                          <div class=\"ibar bar5\"></div>
                        ";
            }
            // line 98
            echo "                      </div>
                    ";
            // line 100
            echo "                  </div>
                ";
            // line 102
            echo "
                ";
            // line 104
            echo "              </div>
              <div class=\"all-timer\">
                ";
            // line 107
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["config_module"] ?? null), "countdown", [], "any", false, false, false, 107)) {
                echo "<div id=\"Countdown";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                echo "\" class=\"box-timer\"></div> ";
            }
            // line 108
            echo "               ";
            // line 109
            echo "              </div>

              ";
            // line 118
            echo "            </div>
         ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 119)) {
                // line 120
                echo "                  <script type=\"text/javascript\">
                      (function(\$){
                          \$('#Countdown";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 122);
                echo "').countdown({
                              until: new Date(";
                // line 123
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "Y");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "m");
                echo "-1, ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "d");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "H");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "i");
                echo ", ";
                echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 123), "s");
                echo "),
                              labels: ['Years', 'Months', 'Weeks', 'Days', 'Hrs', 'Mins', 'Secs'],
                              labels1: ['Year', 'Month', 'Week', 'Day', 'Hr', 'Min', 'Sec'],
                          });
                          //\$('#Countdown<?php echo \$product['product_id'];?>').countdown('pause');
                     }(jQuery));
                  </script>
                  ";
            }
            // line 131
            echo "                  </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "         </div>
      </div>
     </div>
     </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\">
   \$(document).ready(function() {
  \$('.slider-for').slick({
  dots: false,

  vertical: true,
  slidesToShow: 3,
    slidesToScroll: 3,
  arrows: false,
  verticalSwiping: false,
  autoplay: true,
  infinite: true,
  autoplaySpeed:5000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: \"unslick\"
    // instead of a settings object
  ]
});
    });

</script>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/wbocproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 134,  331 => 131,  310 => 123,  306 => 122,  302 => 120,  300 => 119,  297 => 118,  293 => 109,  291 => 108,  284 => 107,  280 => 104,  277 => 102,  274 => 100,  271 => 98,  267 => 96,  263 => 94,  261 => 93,  258 => 92,  256 => 91,  253 => 90,  251 => 89,  248 => 88,  246 => 87,  243 => 86,  237 => 84,  234 => 83,  231 => 81,  227 => 79,  225 => 76,  217 => 74,  211 => 72,  209 => 71,  206 => 70,  204 => 69,  198 => 68,  195 => 67,  191 => 65,  184 => 64,  179 => 63,  171 => 62,  165 => 58,  159 => 54,  156 => 53,  152 => 52,  149 => 51,  147 => 50,  141 => 46,  138 => 45,  132 => 43,  129 => 42,  126 => 41,  120 => 39,  117 => 38,  111 => 37,  108 => 36,  102 => 35,  99 => 34,  97 => 33,  90 => 32,  87 => 31,  82 => 30,  80 => 29,  69 => 27,  65 => 26,  61 => 24,  56 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/wbocproduct.twig", "");
    }
}
