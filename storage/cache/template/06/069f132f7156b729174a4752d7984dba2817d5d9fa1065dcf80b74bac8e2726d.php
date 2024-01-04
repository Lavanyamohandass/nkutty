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

/* quipzo3/template/extension/module/latest.twig */
class __TwigTemplate_37cc263fc6ff8fa820934edc5b27f063613ab3e026a3606b451d8ea163e70496 extends \Twig\Template
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
        echo "<div class=\"tab-pane\" id=\"latestp\">
    <div class=\"row rless\">
      <div id=\"latest\" class=\"owl-theme owl-carousel\">
          ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 5
            echo "          <div class=\"product-layout col-xs-12 cless\">
            <div class=\"product-thumb transition\">
              <div class=\"image\"><a href=\"";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 7);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
            echo "\" class=\"img-responsive center-block\" /></a>
                                ";
            // line 8
            $context["t"] = 0;
            // line 9
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                // line 10
                echo "                                  ";
                if ((($context["t"] ?? null) == 0)) {
                    // line 11
                    echo "                                   <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 11);
                    echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                  ";
                    // line 12
                    $context["t"] = (($context["t"] ?? null) + 1);
                    // line 13
                    echo "                                  ";
                }
                // line 14
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 15)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 16
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 16)) {
                // line 17
                echo "                <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 17);
                echo "%</span>
                ";
            }
            // line 19
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 19)) {
                // line 20
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                       <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                  ";
                }
                // line 23
                echo "                ";
            }
            // line 24
            echo "              </div>
              <div class=\"caption text-left\">
                  ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 26)) {
                // line 27
                echo "                    <div class=\"rating\">
                      ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 29
                    echo "                      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 29) < $context["i"])) {
                        // line 30
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    } else {
                        // line 34
                        echo "                      <span class=\"fa fa-stack\">
                        <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                      </span>
                      ";
                    }
                    // line 38
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </div>";
            } else {
                // line 40
                echo "                    <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "                    <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "</div>
                  ";
            }
            // line 44
            echo "                  <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
            echo "</a></h4>
                   ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 45)) {
                // line 46
                echo "                  <div class=\"price\">
                    ";
                // line 47
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "                    ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 48);
                    echo "
                    ";
                } else {
                    // line 50
                    echo "                    <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 50);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 50);
                    echo "</span>
                    ";
                }
                // line 52
                echo "                   ";
                // line 55
                echo "                  </div>
                  ";
            }
            // line 57
            echo "                  ";
            // line 63
            echo "                  <div class=\"button-group text-center\">
                    <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 64);
            echo "');\">
                      <svg><use xlink:href=\"#pcart\"></use></svg>";
            // line 66
            echo "                    </button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 67
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 67);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                    <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                  </div>
              </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </div>
    </div>
</div>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  226 => 68,  220 => 67,  217 => 66,  211 => 64,  208 => 63,  206 => 57,  202 => 55,  200 => 52,  192 => 50,  186 => 48,  184 => 47,  181 => 46,  179 => 45,  172 => 44,  168 => 42,  161 => 41,  156 => 40,  153 => 39,  147 => 38,  141 => 34,  135 => 30,  132 => 29,  128 => 28,  125 => 27,  123 => 26,  119 => 24,  116 => 23,  110 => 21,  107 => 20,  104 => 19,  98 => 17,  95 => 16,  88 => 15,  82 => 14,  79 => 13,  77 => 12,  70 => 11,  67 => 10,  62 => 9,  60 => 8,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/latest.twig", "");
    }
}
