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

/* quipzo3/template/product/special.twig */
class __TwigTemplate_5346dff9499ac2a315c78fcf2d721a43146515d29c23cb21032b41fb64748c73 extends \Twig\Template
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
            $context["class"] = "col-sm-8 col-md-9  col-xs-12 colright";
            // line 20
            echo "        ";
        } else {
            // line 21
            echo "        ";
            $context["class"] = "col-xs-12";
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
         <div class=\"appres\"></div>
          ";
        // line 28
        if (($context["products"] ?? null)) {
            // line 29
            echo "          <div class=\"row relss cate-border\">
                <div class=\"col-md-2 col-sm-3 col-xs-4 cless lgrid\">
                    <div class=\"btn-group-sm\">
                        <button type=\"button\" id=\"list-view\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 32
            echo ($context["button_list"] ?? null);
            echo "\">
                         <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#clist\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-5\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 35
            echo ($context["button_grid_5"] ?? null);
            echo "\">
                           <svg width=\"30px\" height=\"20px\"><use xlink:href=\"#cgrid-5\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-4\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 38
            echo ($context["button_grid_4"] ?? null);
            echo "\">
                           <svg width=\"26px\" height=\"20px\"><use xlink:href=\"#cgrid-4\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-3\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 41
            echo ($context["button_grid_3"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-3\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-2\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 44
            echo ($context["button_grid_2"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-2\"></use> </svg>
                        </button>
                        <button type=\"button\" id=\"grid-view-1\" class=\"btn listgridbtn\" data-toggle=\"tooltip\" title=\"";
            // line 47
            echo ($context["button_grid_1"] ?? null);
            echo "\">
                           <svg width=\"20px\" height=\"20px\"><use xlink:href=\"#cgrid-1\"></use> </svg>
                        </button>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-5 col-sm-6 col-xs-8 cless hidden-md hidden-sm ct\">
                    <a href=\"";
            // line 53
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a>
                </div>
                <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-5 cless catesort\">
                    <div class=\"input-group input-group-sm select-input\">
                        <label class=\"input-group-addon\" for=\"input-sort\">";
            // line 57
            echo ($context["text_sort"] ?? null);
            echo "</label>
                      
                        <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 61
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 61) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 62
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 62);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 62);
                    echo "</option>
                                ";
                } else {
                    // line 64
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 64);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 64);
                    echo "</option>
                                ";
                }
                // line 66
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                        </select>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-5 col-xs-4 col-sm-4 cless catesort\">
                    <div class=\"input-group input-group-sm select-input\">
                        <label class=\"input-group-addon\" for=\"input-limit\">";
            // line 72
            echo ($context["text_limit"] ?? null);
            echo "</label>
                        <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 75
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 75) == ($context["limit"] ?? null))) {
                    // line 76
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 76);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 76);
                    echo "</option>
                                ";
                } else {
                    // line 78
                    echo "                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 78);
                    echo "</option>
                                ";
                }
                // line 80
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                        </select>
                    </div>
                </div>
            </div>
         <div class=\"row cpagerow rless\"> ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 86
                echo "            <div class=\"product-layout product-list col-xs-12 cless\">
              <div class=\"product-thumb transition\">
          <div class=\"image\"><a href=\"";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 88);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 88);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88);
                echo "\" class=\"img-responsive center-block\" /></a>
                 
                            ";
                // line 90
                $context["t"] = 0;
                // line 91
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "webi_images", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["webi_image"]) {
                    // line 92
                    echo "                              ";
                    if ((($context["t"] ?? null) == 0)) {
                        // line 93
                        echo "                               <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 93);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["webi_image"], "popup", [], "any", false, false, false, 93);
                        echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                              ";
                        // line 94
                        $context["t"] = (($context["t"] ?? null) + 1);
                        // line 95
                        echo "                              ";
                    }
                    // line 96
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webi_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "         

          ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 99)) {
                    echo "<span class=\"new\">";
                    echo ($context["pro_new"] ?? null);
                    echo "</span>";
                }
                // line 100
                echo "
            ";
                // line 101
                if (twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 101)) {
                    // line 102
                    echo "            <span class=\"sale\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tag_per", [], "any", false, false, false, 102);
                    echo "%</span>
            ";
                }
                // line 104
                echo "
          ";
                // line 105
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 105)) {
                    // line 106
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "                   <!-- <span class=\"reduce-price\">";
                        echo ($context["pro_sale"] ?? null);
                        echo "</span> -->
              ";
                    }
                    // line 109
                    echo "          ";
                }
                // line 110
                echo "
          
          </div>
                    <div class=\"caption text-left\">
                      ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 114)) {
                    // line 115
                    echo "                        <div class=\"rating\">
                          ";
                    // line 116
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 117
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 117) < $context["i"])) {
                            // line 118
                            echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                          </span>
                          ";
                        } else {
                            // line 122
                            echo "                          <span class=\"fa fa-stack\">
                            <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
                          </span>
                          ";
                        }
                        // line 126
                        echo "                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "                        </div>";
                } else {
                    // line 128
                    echo "                        <div class=\"rating\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 129
                        echo "                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "</div>
                      ";
                }
                // line 132
                echo "                      <h4 class=\"protitle\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 132);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 132);
                echo "</a></h4>
                      <p class=\"catlist-des\">";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 133);
                echo "</p>
                       ";
                // line 134
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134)) {
                    // line 135
                    echo "                      <div class=\"price\">
                        ";
                    // line 136
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 136)) {
                        // line 137
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 137);
                        echo "
                        ";
                    } else {
                        // line 139
                        echo "                        <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 139);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 139);
                        echo "</span>
                        ";
                    }
                    // line 141
                    echo "                       ";
                    // line 144
                    echo "                      </div>
                      ";
                }
                // line 146
                echo "                      <div class=\"button-group text-center\">
                        <button class=\"cartb add-to-cart\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 147
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 147);
                echo "');\">
                          <svg><use xlink:href=\"#pcart\"></use></svg>";
                // line 149
                echo "                        </button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 150
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 150);
                echo "');\"><svg><use xlink:href=\"#heart\" /></svg></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 151
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151);
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
            // line 158
            echo " 
          </div>
          <div class=\"row pagi\">
            <div class=\"col-sm-6 col-xs-6 text-left\">";
            // line 161
            echo ($context["pagination"] ?? null);
            echo "</div>
            <div class=\"col-sm-6 col-xs-6 text-right tot\">";
            // line 162
            echo ($context["results"] ?? null);
            echo "</div>
          </div>
          ";
        }
        // line 165
        echo "          ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 166
            echo "          <p>";
            echo ($context["ctext_empty"] ?? null);
            echo "</p>
          <div class=\"buttons\">
            <div class=\"pull-right\"><a href=\"";
            // line 168
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
          </div>
          ";
        }
        // line 171
        echo "         </div>
        ";
        // line 172
        echo ($context["column_right"] ?? null);
        echo "</div>
    </div>
</div>
 ";
        // line 175
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 176
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 176,  496 => 175,  490 => 172,  487 => 171,  479 => 168,  473 => 166,  470 => 165,  464 => 162,  460 => 161,  455 => 158,  439 => 151,  433 => 150,  430 => 149,  424 => 147,  421 => 146,  417 => 144,  415 => 141,  407 => 139,  401 => 137,  399 => 136,  396 => 135,  394 => 134,  390 => 133,  383 => 132,  379 => 130,  372 => 129,  367 => 128,  364 => 127,  358 => 126,  352 => 122,  346 => 118,  343 => 117,  339 => 116,  336 => 115,  334 => 114,  328 => 110,  325 => 109,  319 => 107,  316 => 106,  314 => 105,  311 => 104,  305 => 102,  303 => 101,  300 => 100,  294 => 99,  290 => 97,  284 => 96,  281 => 95,  279 => 94,  272 => 93,  269 => 92,  264 => 91,  262 => 90,  251 => 88,  247 => 86,  243 => 85,  237 => 81,  231 => 80,  223 => 78,  215 => 76,  212 => 75,  208 => 74,  203 => 72,  196 => 67,  190 => 66,  182 => 64,  174 => 62,  171 => 61,  167 => 60,  161 => 57,  152 => 53,  143 => 47,  137 => 44,  131 => 41,  125 => 38,  119 => 35,  113 => 32,  108 => 29,  106 => 28,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/product/special.twig", "");
    }
}
