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

/* quipzo3/template/extension/module/featured.twig */
class __TwigTemplate_27ec0b4e325972216cfb67120b8a10654bbbf1bac0f2c4f9d279cd15e2be8200 extends \Twig\Template
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
        echo "<div class=\"martb\">
   <div class=\"container\">
     <div class=\"bg_white tab-content protabcont\">
        <div class=\"tab-head tab_head text-left\">
           <h1 class=\"heading pull-left\"><span>";
        // line 5
        echo ($context["head_title"] ?? null);
        echo "</span></h1>
           <ul class=\"nav nav-tabs pro-tab\">
              <li class=\"active\"><a href=\"#featurep\" data-toggle=\"tab\">";
        // line 7
        echo ($context["fea_title"] ?? null);
        echo "</a></li>
              <li><a href=\"#bestseller\" data-toggle=\"tab\">";
        // line 8
        echo ($context["best_title"] ?? null);
        echo "</a></li>
              <li><a href=\"#latestp\" data-toggle=\"tab\">";
        // line 9
        echo ($context["latest_title"] ?? null);
        echo "</a></li>
           </ul>
        </div>
        <div class=\"tab-pane active\" id=\"featurep\">
           <div class=\"row rless\">
               <div id=\"feature\" class=\"owl-theme owl-carousel\">
                 ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "                    <div class=\"product-layout col-xs-12 cless\">
                       <div class=\"product-thumb transition\">
                          <div class=\"image\">
                             <a href=\"";
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
            echo "                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                // line 22
                echo "                             ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                    // line 23
                    echo "                             ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 24
                        echo "                             <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 24);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                             ";
                        // line 25
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 26
                        echo "                             ";
                    }
                    // line 27
                    echo "                             ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                             ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 29)) {
                echo "<span class=\"new\">";
                echo ($context["pro_new"] ?? null);
                echo "</span>";
            }
            // line 30
            echo "                             ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 30)) {
                // line 31
                echo "                             <span class=\"sale\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 31);
                echo "%</span>
                             ";
            }
            // line 33
            echo "                             ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33)) {
                // line 34
                echo "                             ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 34)) {
                    // line 35
                    echo "                             <!-- <span class=\"reduce-price\">";
                    echo ($context["pro_sale"] ?? null);
                    echo "</span> -->
                             ";
                }
                // line 37
                echo "                             ";
            }
            // line 38
            echo "                          </div>
                          <div class=\"caption text-left\">
                             ";
            // line 40
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40)) {
                // line 41
                echo "                             <div class=\"rating\">
                                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 43
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 43) < $context["i"])) {
                        // line 44
                        echo "                                <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                </span>
                                ";
                    } else {
                        // line 48
                        echo "                                <span class=\"fa fa-stack\">
                                <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                                </span>
                                ";
                    }
                    // line 52
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                             </div>
                             ";
            } else {
                // line 55
                echo "                             <div class=\"rating\">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 56
                    echo "                                <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                             </div>
                             ";
            }
            // line 60
            echo "                             <h4 class=\"protitle\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
            echo "</a></h4>
                             ";
            // line 61
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61)) {
                // line 62
                echo "                             <div class=\"price\">
                                ";
                // line 63
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 64);
                    echo "
                                ";
                } else {
                    // line 66
                    echo "                                <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 66);
                    echo "</span> <span class=\"price-old\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66);
                    echo "</span>
                                ";
                }
                // line 68
                echo "                                ";
                // line 71
                echo "                             </div>
                             ";
            }
            // line 73
            echo "                             ";
            // line 79
            echo "                             <div class=\"button-group text-center\">
                               <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo ($context["button_cart"] ?? null);
            echo "\" onclick=\"cart.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 80);
            echo "');\">
                                 <svg><use xlink:href=\"#pcart\"></use></svg>";
            // line 82
            echo "                               </button>
                               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo ($context["button_wishlist"] ?? null);
            echo "\" onclick=\"wishlist.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 83);
            echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                               <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 84
            echo ($context["button_compare"] ?? null);
            echo "\" onclick=\"compare.add('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 84);
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
        // line 91
        echo "               </div>
           </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 91,  262 => 84,  256 => 83,  253 => 82,  247 => 80,  244 => 79,  242 => 73,  238 => 71,  236 => 68,  228 => 66,  222 => 64,  220 => 63,  217 => 62,  215 => 61,  208 => 60,  204 => 58,  197 => 56,  192 => 55,  188 => 53,  182 => 52,  176 => 48,  170 => 44,  167 => 43,  163 => 42,  160 => 41,  158 => 40,  154 => 38,  151 => 37,  145 => 35,  142 => 34,  139 => 33,  133 => 31,  130 => 30,  123 => 29,  117 => 28,  111 => 27,  108 => 26,  106 => 25,  99 => 24,  96 => 23,  91 => 22,  86 => 21,  84 => 20,  74 => 19,  69 => 16,  65 => 15,  56 => 9,  52 => 8,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/featured.twig", "");
    }
}
