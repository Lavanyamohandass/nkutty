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

/* quipzo3/template/common/menu.twig */
class __TwigTemplate_e5832843588d28856485c770c4de8dccaa492ad6d716976bfab5e35f541721da extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "    
  <div class=\"menurel\">
  <nav id=\"menu\" class=\"navbar\">
     <div class=\"navbar-header\">
       <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
     </div>
     <div id=\"pt_vegamenu\" class=\"title-menu wr-left-menu hidden-xs\">
        <div id=\"wr-menu-icon\">
            <div class=\"wr-menu\" data-toggle=\"collapse\" data-target=\"#under-menu\">
                <button class=\"btn-navbar navbar-toggle\" type=\"button\" data-toggle=\"collapse\">
                  <div class=\"ico-menu\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                  </div>
                </button>
                <span class=\"cate\">";
            // line 18
            echo ($context["text_allcate"] ?? null);
            echo "</span>
                ";
            // line 20
            echo "            </div>
        </div>
      </div>
    <div id=\"mySidenav\" class=\"sidenav\">
      <div id=\"under-menu\" class=\"collapse\">
      <div class=\"close-nav hidden-sm hidden-md hidden-lg hidden-xl\">
                <span class=\"categories\">";
            // line 26
            echo ($context["text_rescate"] ?? null);
            echo "</span>
                <a href=\"javascript:void(0)\" class=\"closebtn pull-right\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
            </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav site-nav\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "        <li class=\"dropdown moremenu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
                    echo "\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">
          <div class=\"thumb_img pull-left\">
            <img src=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_menu", [], "any", false, false, false, 35);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "\">
          </div>
          ";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 37);
                    echo "
          <i class=\"fa fa-angle-down pull-right enangle\"></i></a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 40), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 40)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 40), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 41
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 42
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 43
                            echo "                <!--3rd level-->
                    <li class=\"dropdown-submenu\"> <a href=\"";
                            // line 44
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 44);
                            echo "\" class=\"submenu-title\"> ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 44);
                            echo " </a>
                      ";
                            // line 45
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 45)) {
                                // line 46
                                echo "                      <ul class=\"list-unstyled grand-child\">
                        ";
                                // line 47
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 47));
                                foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                    // line 48
                                    echo "                        <li> <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 48);
                                    echo "\"> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 48);
                                    echo " </a> </li>
                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 50
                                echo "                      </ul>
                      ";
                            }
                            // line 52
                            echo "                    </li>
                    <!--3rd level over-->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 55
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                    echo "\" class=\"see-all visible-xs\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
                    echo "</a> 
            </div>
            </div>
        </li>
        ";
                } else {
                    // line 62
                    echo "        <li class=\"moremenu\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 62);
                    echo "\" class=\"bmenu\">
          <div class=\"thumb_img pull-left\">
            <img src=\"";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_menu", [], "any", false, false, false, 64);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 64);
                    echo "\">
          </div>";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65);
                    echo "</a></li>
        ";
                }
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      </ul>
    </div>
    </div>
  </div>
  
  </nav>
</div>
";
        }
        // line 75
        echo " 
<script type=\"text/javascript\">
 function headermenu() {
     if (jQuery(window).width() < 768)
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");        
     }
     else
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\"); 
     }
}
\$(document).ready(function(){headermenu();});
jQuery(window).resize(function() {headermenu();});
jQuery(window).scroll(function() {headermenu();});
</script>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 75,  198 => 68,  192 => 67,  187 => 65,  181 => 64,  175 => 62,  162 => 57,  155 => 55,  147 => 52,  143 => 50,  132 => 48,  128 => 47,  125 => 46,  123 => 45,  117 => 44,  114 => 43,  110 => 42,  107 => 41,  103 => 40,  97 => 37,  90 => 35,  84 => 33,  81 => 32,  77 => 31,  69 => 26,  61 => 20,  57 => 18,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/common/menu.twig", "");
    }
}
