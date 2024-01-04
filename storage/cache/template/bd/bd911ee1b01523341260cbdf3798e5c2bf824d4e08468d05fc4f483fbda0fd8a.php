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

/* quipzo3/template/extension/module/special.twig */
class __TwigTemplate_12ffb4cd90a6f68fc26b99b587f514721812849639657f4258705d05b7e2068b extends \Twig\Template
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
        echo "<div class=\"container spepro martb\">
  <div class=\"row\">
    <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 spe-three\">
      <div class=\"bg_white protabcont\">
        <div class=\"borbutt\">
          <h1 class=\"heading text-left\"><span>";
        // line 6
        echo ($context["speheading_title"] ?? null);
        echo "</span></h1>
        </div>
        <div class=\"row rless\">
          ";
        // line 9
        $context["temp"] = 0;
        // line 10
        echo "         ";
        $context["setCol"] = 2;
        // line 11
        echo "          <div id=\"special\" class=\"owl-theme owl-carousel\">
           ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 13
            echo "            ";
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 14
            echo "            ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 15
                echo "            <div class=\"multi-row\">
               ";
            }
            // line 17
            echo "              <div class=\"product-layout col-xs-12 cless\">
                <div class=\"product-thumb\">
                  <div class=\"image\"><a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 19);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 19);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 19);
            echo "\" class=\"img-responsive center-block\" /></a>
                          ";
            // line 20
            $context["t"] = 0;
            // line 21
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 22
                echo "                            ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 23
                    echo "                             <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 23);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                            ";
                    // line 24
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 25
                    echo "                            ";
                }
                // line 26
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 27)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 28
            echo "                      ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 28)) {
                // line 29
                echo "                    <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 29);
                echo "%</span>
                    ";
            }
            // line 31
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)) {
                // line 32
                echo "                      ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                           <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                      ";
                }
                // line 35
                echo "                    ";
            }
            // line 36
            echo "                  </div>
                   
                  <div class=\"caption text-left\">
                    ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 39)) {
                // line 40
                echo "                      <div class=\"rating\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 42) < $context["i"])) {
                        // line 43
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                    } else {
                        // line 47
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                    }
                    // line 51
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                      </div>";
            } else {
                // line 53
                echo "                      <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "</div>
                    ";
            }
            // line 57
            echo "                    <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 57);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 57);
            echo "</a></h4>
                    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58)) {
                // line 59
                echo "                      <div class=\"price\">
                        ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61);
                    echo "
                        ";
                } else {
                    // line 63
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63);
                    echo "</span>
                        ";
                }
                // line 65
                echo "                       ";
                // line 68
                echo "                      </div>
                    ";
            }
            // line 70
            echo "                    ";
            // line 76
            echo "                    <div class=\"button-group text-center\">
                      <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 77);
            echo "');\">
                        <svg><use xlink:href=\"#pcart\"></use></svg>";
            // line 79
            echo "                      </button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 81
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                      <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                    </div>
                  </div>

                </div>
              </div>
            ";
            // line 88
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 89
                echo "            </div>
            ";
            }
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 93
            echo "         </div>
         ";
        }
        // line 95
        echo "        </div>
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 95,  280 => 93,  277 => 92,  271 => 91,  267 => 89,  265 => 88,  253 => 81,  247 => 80,  244 => 79,  238 => 77,  235 => 76,  233 => 70,  229 => 68,  227 => 65,  219 => 63,  213 => 61,  211 => 60,  208 => 59,  206 => 58,  199 => 57,  195 => 55,  188 => 54,  183 => 53,  180 => 52,  174 => 51,  168 => 47,  162 => 43,  159 => 42,  155 => 41,  152 => 40,  150 => 39,  145 => 36,  142 => 35,  136 => 33,  133 => 32,  130 => 31,  124 => 29,  121 => 28,  114 => 27,  108 => 26,  105 => 25,  103 => 24,  96 => 23,  93 => 22,  88 => 21,  86 => 20,  76 => 19,  72 => 17,  68 => 15,  65 => 14,  62 => 13,  58 => 12,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/special.twig", "");
    }
}
