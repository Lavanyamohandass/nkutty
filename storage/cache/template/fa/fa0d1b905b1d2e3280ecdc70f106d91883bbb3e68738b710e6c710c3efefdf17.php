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

/* quipzo3/template/product/manufacturer_info.twig */
class __TwigTemplate_72401ce0210abe70c2f05fb6fec03fbd7b2760d68cabd9762fb59a2a95b66f36 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"breadbg\">
  <div class=\"container\">
    <div class=\"row\">
      <ul class=\"breadcrumb\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 7);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
  </div>
</div>
</div>
<div id=\"product-manufacturer\" class=\"container cleft manucom\">
    <div class=\"other-bg\">
      <div class=\"row\">";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "        ";
            $context["class"] = "col-sm-8 col-md-9 col-xs-12 colright";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "        ";
        }
        // line 23
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
          <div class=\"borbutt\">
            <h1 class=\"heading text-left\"><span>";
        // line 25
        echo ($context["cheading_title"] ?? null);
        echo "</span></h1>
          </div>
          ";
        // line 27
        if (($context["products"] ?? null)) {
            // line 28
            echo "
          <div class=\"appres\"></div>
            <div class=\"row rless cate-border\">
                <div class=\"col-md-2 col-sm-3 col-xs-4 cless lgrid\">
                    <div class=\"btn-group-sm\">
                        <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 33
            echo ($context["button_list"] ?? null);
            echo "\">
                            <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-5\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 36
            echo ($context["button_grid_5"] ?? null);
            echo "\">
                           <svg width=\"30px\" height=\"20px\"><use xlink:href=\"#cgrid-5\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-4\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 39
            echo ($context["button_grid_4"] ?? null);
            echo "\">
                           <svg width=\"26px\" height=\"20px\"><use xlink:href=\"#cgrid-4\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-3\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 42
            echo ($context["button_grid_3"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-3\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-2\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 45
            echo ($context["button_grid_2"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-2\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-1\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 48
            echo ($context["button_grid_1"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-1\"></use> </svg>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 cless hidden-md hidden-sm ct\">
                    <a href=\"";
            // line 54
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
                </div>
                <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 cless catesort\">
                    <div class=\"input-group input-group-sm select-input\">
                        <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 58
            echo ($context["text_sort"] ?? null);
            echo "</label>
                      
                        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 62
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 62) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 63
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 63);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 63);
                    echo "</option>
                                ";
                } else {
                    // line 65
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 65);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 65);
                    echo "</option>
                                ";
                }
                // line 67
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        </select>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 cless catesort\">
                    <div class=\"input-group input-group-sm select-input\">
                        <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 73
            echo ($context["text_limit"] ?? null);
            echo "</label>
                        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 76
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 76) == ($context["limit"] ?? null))) {
                    // line 77
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 77);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 77);
                    echo "</option>
                                ";
                } else {
                    // line 79
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 79);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 79);
                    echo "</option>
                                ";
                }
                // line 81
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                        </select>
                    </div>
                </div>
            </div>

          <div class=\"row cpagerow rless\"> ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 88
                echo "            <div class=\"product-layout product-list col-xs-12 cless\">
              <div class=\"product-thumb transition\">
          <div class=\"image\"><a href=\"";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 90);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 90);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 90);
                echo "\" class=\"img-responsive center-block\" /></a>
                   
                            ";
                // line 92
                $context["t"] = 0;
                // line 93
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 94
                    echo "                              ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 95
                        echo "                               <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 95);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 95);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                              ";
                        // line 96
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 97
                        echo "                              ";
                    }
                    // line 98
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "            
            
           ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 101)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 102
                echo "
              ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "            <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 104);
                    echo "%</span>
            ";
                }
                // line 106
                echo "
           ";
                // line 107
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107)) {
                    // line 108
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 108)) {
                        // line 109
                        echo "                   <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
              ";
                    }
                    // line 111
                    echo "          ";
                }
                // line 112
                echo "
          </div>

                    <div class=\"caption text-left\">
                      ";
                // line 116
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 116)) {
                    // line 117
                    echo "                        <div class=\"rating\">
                          ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 119
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 119) < $context["i"])) {
                            // line 120
                            echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                          </span>
                          ";
                        } else {
                            // line 124
                            echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                          </span>
                          ";
                        }
                        // line 128
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "                        </div>";
                } else {
                    // line 130
                    echo "                        <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 131
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 132
                    echo "</div>
                      ";
                }
                // line 134
                echo "                      <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 134);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 134);
                echo "</a></h4>
                      <p class=\"catlist-des\">";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 135);
                echo "</p>
                       ";
                // line 136
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                      <div class=\"price\">
                        ";
                    // line 138
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 138)) {
                        // line 139
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "
                        ";
                    } else {
                        // line 141
                        echo "                        <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 141);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141);
                        echo "</span>
                        ";
                    }
                    // line 143
                    echo "                       ";
                    // line 146
                    echo "                      </div>
                      ";
                }
                // line 148
                echo "                      <div class=\"button-group text-center\">
                        <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 149
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149);
                echo "');\">
                          <svg><use xlink:href=\"#pcart\"></use></svg>";
                // line 151
                echo "                        </button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 152
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 153
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
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
            // line 161
            echo " 
          </div>
         <div class=\"row pagi\">
            <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 164
            echo ($context["pagination"] ?? null);
            echo "</div>
            <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 165
            echo ($context["results"] ?? null);
            echo "</div>
          </div>
          ";
        } else {
            // line 168
            echo "          <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
          <div class=\"buttons\">
            <div class=\"pull-right\"><a href=\"";
            // line 170
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 173
        echo "          </div>
        ";
        // line 174
        echo ($context["column_right"] ?? null);
        echo "
      </div>
    </div>
</div>
";
        // line 178
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 179
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "quipzo3/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 179,  497 => 178,  490 => 174,  487 => 173,  479 => 170,  473 => 168,  467 => 165,  463 => 164,  458 => 161,  441 => 153,  435 => 152,  432 => 151,  426 => 149,  423 => 148,  419 => 146,  417 => 143,  409 => 141,  403 => 139,  401 => 138,  398 => 137,  396 => 136,  392 => 135,  385 => 134,  381 => 132,  374 => 131,  369 => 130,  366 => 129,  360 => 128,  354 => 124,  348 => 120,  345 => 119,  341 => 118,  338 => 117,  336 => 116,  330 => 112,  327 => 111,  321 => 109,  318 => 108,  316 => 107,  313 => 106,  307 => 104,  305 => 103,  302 => 102,  296 => 101,  292 => 99,  286 => 98,  283 => 97,  281 => 96,  274 => 95,  271 => 94,  266 => 93,  264 => 92,  253 => 90,  249 => 88,  245 => 87,  238 => 82,  232 => 81,  224 => 79,  216 => 77,  213 => 76,  209 => 75,  204 => 73,  197 => 68,  191 => 67,  183 => 65,  175 => 63,  172 => 62,  168 => 61,  162 => 58,  153 => 54,  144 => 48,  138 => 45,  132 => 42,  126 => 39,  120 => 36,  114 => 33,  107 => 28,  105 => 27,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/product/manufacturer_info.twig", "");
    }
}
