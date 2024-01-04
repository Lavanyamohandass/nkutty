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

/* quipzo3/template/product/category.twig */
class __TwigTemplate_b9c56252f9c79b42db5bb07b6278b786f5a040d038de2a3aa1d950275784fa62 extends \Twig\Template
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
<div id=\"product-category\" class=\"container cleft\">
  <div class=\"other-bg\">
    <div class=\"row\">";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
      ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12 col-md-9  col-xs-12 colright";
            // line 20
            echo "      ";
        } else {
            // line 21
            echo "      ";
            $context["class"] = "col-xs-12";
            // line 22
            echo "      ";
        }
        // line 23
        echo "      <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
        ";
        // line 24
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 25
            echo "        <div class=\"cate-top hidden-xs\"> 
           <h2>";
            // line 26
            echo ($context["heading_title"] ?? null);
            echo "</h2>
           <div class=\"row\">
              <div class=\"col-lg-2 col-md-3 col-sm-3\">
                ";
            // line 29
            if (($context["thumb"] ?? null)) {
                // line 30
                echo "                <img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive center-block\" />
              ";
            }
            // line 32
            echo "              </div>
              <div class=\"col-lg-10 col-md-9 col-sm-9 col-xs-12 catedes\">
               ";
            // line 34
            if (($context["description"] ?? null)) {
                // line 35
                echo "                ";
                echo ($context["description"] ?? null);
                echo "
              ";
            }
            // line 37
            echo "              </div>
           </div>
        </div>
        ";
        }
        // line 41
        echo "
        <div class=\"appres\"></div>
        ";
        // line 43
        if ((($context["categories"] ?? null) && ($context["products"] ?? null))) {
            // line 44
            echo "      <div class=\"refines\">
        <h3>";
            // line 45
            echo ($context["text_refine"] ?? null);
            echo "</h3>
        ";
            // line 46
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 47
                echo "            <ul class=\"list-unstyled list-inline\">
              ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 49
                    echo "              <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 49);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 49);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "            </ul>
        ";
            } else {
                // line 53
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 54
                    echo "            <ul class=\"list-unstyled list-inline\">
              ";
                    // line 55
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 56
                        echo "              <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 56);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 56);
                        echo "</a></li>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "            </ul>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "        ";
            }
            // line 61
            echo "      </div>
      ";
        }
        // line 63
        echo "      
        ";
        // line 64
        if (($context["products"] ?? null)) {
            // line 65
            echo "        <div class=\"row rless cate-border\">
              <div class=\"col-md-2 col-sm-3 col-xs-4 cless lgrid\">
                  <div class=\"btn-group-sm\">
                      <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo ($context["button_list"] ?? null);
            echo "\">
                       <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                      </button>
                      <button type=\"button\" id=\"grid-view-4\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 71
            echo ($context["button_grid_4"] ?? null);
            echo "\">
                         <svg width=\"26px\" height=\"20px\"><use xlink:href=\"#cgrid-4\"></use> </svg>
                      </button>
                      <button type=\"button\" id=\"grid-view-3\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo ($context["button_grid_3"] ?? null);
            echo "\">
                         <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-3\"></use> </svg>
                      </button>
                      <button type=\"button\" id=\"grid-view-2\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 77
            echo ($context["button_grid_2"] ?? null);
            echo "\">
                         <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-2\"></use> </svg>
                      </button>
                      <button type=\"button\" id=\"grid-view-1\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 80
            echo ($context["button_grid_1"] ?? null);
            echo "\">
                         <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-1\"></use> </svg>
                      </button>
                  </div>
              </div>
              <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 cless hidden-md hidden-sm ct\">
                  <a href=\"";
            // line 86
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
              </div>
              <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 cless catesort\">
                  <div class=\"input-group input-group-sm select-input\">
                      <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 90
            echo ($context["text_sort"] ?? null);
            echo "</label>
                    
                      <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 94
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 94) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 95
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 95);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 95);
                    echo "</option>
                              ";
                } else {
                    // line 97
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 97);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 97);
                    echo "</option>
                              ";
                }
                // line 99
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                      </select>
                  </div>
              </div>
              <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 cless catesort\">
                  <div class=\"input-group input-group-sm select-input\">
                      <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 105
            echo ($context["text_limit"] ?? null);
            echo "</label>
                      <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                          ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 108
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 108) == ($context["limit"] ?? null))) {
                    // line 109
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 109);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 109);
                    echo "</option>
                              ";
                } else {
                    // line 111
                    echo "                                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 111);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 111);
                    echo "</option>
                              ";
                }
                // line 113
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                      </select>
                  </div>
              </div>
          </div>
        <div class=\"row cpagerow rless\"> ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 119
                echo "          <div class=\"product-layout product-list col-xs-12 cless\">
            <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 121);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 121);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 121);
                echo "\" class=\"img-responsive center-block\" /></a>
                 
                          ";
                // line 123
                $context["t"] = 0;
                // line 124
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 124));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 125
                    echo "                            ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 126
                        echo "                             <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 126);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 126);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                            ";
                        // line 127
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 128
                        echo "                            ";
                    }
                    // line 129
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "          
         
         ";
                // line 132
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 132)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 133
                echo "
            ";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "          <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 135);
                    echo "%</span>
          ";
                }
                // line 137
                echo "
          ";
                // line 138
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139)) {
                        // line 140
                        echo "                <!--  <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
            ";
                    }
                    // line 142
                    echo "        ";
                }
                // line 143
                echo "
        
        </div>

                  <div class=\"caption text-left\">
                    ";
                // line 148
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                      <div class=\"rating\">
                        ";
                    // line 150
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 151
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 151) < $context["i"])) {
                            // line 152
                            echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                        } else {
                            // line 156
                            echo "                        <span class=\"fa fa-stack\">
                          <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                        </span>
                        ";
                        }
                        // line 160
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 161
                    echo "                      </div>";
                } else {
                    // line 162
                    echo "                      <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 163
                        echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    echo "</div>
                    ";
                }
                // line 166
                echo "                    <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 166);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 166);
                echo "</a></h4>
                    <p class=\"catlist-des\">";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 167);
                echo "</p>
                     ";
                // line 168
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168)) {
                    // line 169
                    echo "                    <div class=\"price\">
                      ";
                    // line 170
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 170)) {
                        // line 171
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 171);
                        echo "
                      ";
                    } else {
                        // line 173
                        echo "                      <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 173);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 173);
                        echo "</span>
                      ";
                    }
                    // line 175
                    echo "                     ";
                    // line 178
                    echo "                    </div>
                    ";
                }
                // line 180
                echo "                    <div class=\"button-group text-center\">
                      <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 181
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                echo "');\">
                        <svg><use xlink:href=\"#pcart\"></use></svg>";
                // line 183
                echo "                      </button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 184
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 184);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 185
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 185);
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
            // line 194
            echo " </div>
        <div class=\"row pagi\">
          <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 196
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 197
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
        ";
        }
        // line 200
        echo "        ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 201
            echo "        <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 203
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
        ";
        }
        // line 206
        echo "        </div>
      ";
        // line 207
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 210
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 211
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 211,  603 => 210,  597 => 207,  594 => 206,  586 => 203,  580 => 201,  577 => 200,  571 => 197,  567 => 196,  563 => 194,  545 => 185,  539 => 184,  536 => 183,  530 => 181,  527 => 180,  523 => 178,  521 => 175,  513 => 173,  507 => 171,  505 => 170,  502 => 169,  500 => 168,  496 => 167,  489 => 166,  485 => 164,  478 => 163,  473 => 162,  470 => 161,  464 => 160,  458 => 156,  452 => 152,  449 => 151,  445 => 150,  442 => 149,  440 => 148,  433 => 143,  430 => 142,  424 => 140,  421 => 139,  419 => 138,  416 => 137,  410 => 135,  408 => 134,  405 => 133,  399 => 132,  395 => 130,  389 => 129,  386 => 128,  384 => 127,  377 => 126,  374 => 125,  369 => 124,  367 => 123,  356 => 121,  352 => 119,  348 => 118,  342 => 114,  336 => 113,  328 => 111,  320 => 109,  317 => 108,  313 => 107,  308 => 105,  301 => 100,  295 => 99,  287 => 97,  279 => 95,  276 => 94,  272 => 93,  266 => 90,  257 => 86,  248 => 80,  242 => 77,  236 => 74,  230 => 71,  224 => 68,  219 => 65,  217 => 64,  214 => 63,  210 => 61,  207 => 60,  200 => 58,  189 => 56,  185 => 55,  182 => 54,  177 => 53,  173 => 51,  162 => 49,  158 => 48,  155 => 47,  153 => 46,  149 => 45,  146 => 44,  144 => 43,  140 => 41,  134 => 37,  128 => 35,  126 => 34,  122 => 32,  112 => 30,  110 => 29,  104 => 26,  101 => 25,  99 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/product/category.twig", "");
    }
}
