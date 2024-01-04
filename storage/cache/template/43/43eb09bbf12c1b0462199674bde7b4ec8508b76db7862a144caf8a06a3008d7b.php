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

/* quipzo3/template/extension/module/wbonsaleproduct.twig */
class __TwigTemplate_091769036bbafa562be2262bb2fd635412401c067e0a44da8cab8cdc38123d9b extends \Twig\Template
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
        echo "<div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12 spe-three\">
    <div class=\"bg_white protabcont\">
      <h1 class=\"heading text-left\"><span>";
        // line 3
        echo ($context["onsale_title"] ?? null);
        echo "</span>";
        echo "</h1>
      <div class=\"row rless\">
          ";
        // line 5
        $context["temp"] = 0;
        // line 6
        echo "          ";
        $context["setCol"] = 2;
        // line 7
        echo "        <div id=\"onsale\" class=\"owl-theme owl-carousel\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "        ";
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 10
            echo "              ";
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 11
                echo "                  <div class=\"multi-row\">
              ";
            }
            // line 13
            echo "        <div class=\"product-layout col-xs-12 cless\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 15);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 15);
            echo "\" class=\"img-responsive center-block\" /></a>
                       ";
            // line 16
            $context["t"] = 0;
            // line 17
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 17));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 18
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 19
                    echo "                        ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 20
                        echo "                          <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 20);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                        ";
                        // line 21
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 22
                        echo "                          ";
                    }
                    // line 23
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
                          ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 27)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 28
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 28)) {
                // line 29
                echo "                          <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 29);
                echo "%</span>
                          ";
            }
            // line 31
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 31)) {
                // line 32
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                                 <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                            ";
                }
                // line 35
                echo "                          ";
            }
            // line 36
            echo "
            </div>

           <div class=\"caption text-left\">
                    ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40)) {
                // line 41
                echo "                      <div class=\"rating\">
                        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 43
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 43) < $context["i"])) {
                        // line 44
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                    } else {
                        // line 48
                        echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                    }
                    // line 52
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                      </div>";
            } else {
                // line 54
                echo "                      <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 55
                    echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "</div>
                    ";
            }
            // line 58
            echo "                    <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
            echo "</a></h4>
                    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59)) {
                // line 60
                echo "                      <div class=\"price\">
                        ";
                // line 61
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62);
                    echo "
                        ";
                } else {
                    // line 64
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 64);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                    echo "</span>
                        ";
                }
                // line 66
                echo "                       ";
                // line 69
                echo "                      </div>
                    ";
            }
            // line 71
            echo "                    ";
            // line 77
            echo "                    <div class=\"button-group text-center\">
                      <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 78);
            echo "');\">
                        <svg><use xlink:href=\"#pcart\"></use></svg>";
            // line 80
            echo "                      </button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 81
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 81);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 82
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 82);
            echo "');\"><svg><use xlink:href=\"#compare\"/></svg></button>
                      <div data-toggle=\"tooltip\" title=\"Quickview\"  class=\"bquickv\"></div>
                    </div>
                  </div>

          </div>
        </div>
        ";
            // line 89
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 90
                echo "                  </div>
              ";
            }
            // line 92
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "           ";
        if (((twig_length_filter($this->env, ($context["products"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 94
            echo "          <!-- <h1>hii</h1> -->
              </div>
              ";
        }
        // line 97
        echo "      </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/wbonsaleproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 97,  292 => 94,  289 => 93,  283 => 92,  279 => 90,  277 => 89,  265 => 82,  259 => 81,  256 => 80,  250 => 78,  247 => 77,  245 => 71,  241 => 69,  239 => 66,  231 => 64,  225 => 62,  223 => 61,  220 => 60,  218 => 59,  211 => 58,  207 => 56,  200 => 55,  195 => 54,  192 => 53,  186 => 52,  180 => 48,  174 => 44,  171 => 43,  167 => 42,  164 => 41,  162 => 40,  156 => 36,  153 => 35,  147 => 33,  144 => 32,  141 => 31,  135 => 29,  132 => 28,  126 => 27,  123 => 26,  117 => 25,  110 => 23,  107 => 22,  105 => 21,  98 => 20,  95 => 19,  90 => 18,  85 => 17,  83 => 16,  73 => 15,  69 => 13,  65 => 11,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/wbonsaleproduct.twig", "");
    }
}
