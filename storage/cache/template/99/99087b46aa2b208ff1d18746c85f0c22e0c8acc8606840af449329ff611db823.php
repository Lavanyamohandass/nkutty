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

/* quipzo3/template/information/sitemap.twig */
class __TwigTemplate_7614beb1105581f90e1e8a391bedeac0d9c5d62af998fccaabbac039b38f4afa extends \Twig\Template
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
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"infobg\">
    <div class=\"row\">";
        // line 15
        echo ($context["column_left"] ?? null);
        echo "
      ";
        // line 16
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-xs-12 col-sm-4 col-md-6 col-lg-6";
            // line 18
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-8 col-lg-10 col-md-9 col-xs-12";
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
        echo " sitem\">";
        echo ($context["content_top"] ?? null);
        echo "
        <div class=\"borbutt\">
          <h1 class=\"heading text-left\"><span>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 col-xs-12\">
            <ul class=\"text-capitalize\">
              ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 31
            echo "              <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 31);
            echo "</a>
                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32)) {
                // line 33
                echo "                <ul>
                  ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 35
                    echo "                  <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 35);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 35);
                    echo "</a>
                    ";
                    // line 36
                    if (twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 36)) {
                        // line 37
                        echo "                    <ul>
                      ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 39
                            echo "                      <li><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 39);
                            echo "</a></li>
                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                    </ul>
                    ";
                    }
                    // line 43
                    echo "                  </li>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                </ul>
                ";
            }
            // line 47
            echo "              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </ul>
          </div>
          <div class=\"col-sm-6 col-xs-12\">
            <ul>
              <li><a href=\"";
        // line 53
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 54
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a>
                <ul>
                  <li><a href=\"";
        // line 56
        echo ($context["edit"] ?? null);
        echo "\">";
        echo ($context["text_edit"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 57
        echo ($context["password"] ?? null);
        echo "\">";
        echo ($context["text_password"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 58
        echo ($context["address"] ?? null);
        echo "\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 59
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_history"] ?? null);
        echo "</a></li>
                  <li><a href=\"";
        // line 60
        echo ($context["download"] ?? null);
        echo "\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
                </ul>
              </li>
              <li><a href=\"";
        // line 63
        echo ($context["history"] ?? null);
        echo "\">";
        echo ($context["text_cart"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 64
        echo ($context["checkout"] ?? null);
        echo "\">";
        echo ($context["text_checkout"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 65
        echo ($context["search"] ?? null);
        echo "\">";
        echo ($context["text_search"] ?? null);
        echo "</a></li>
              <li>";
        // line 66
        echo ($context["text_information"] ?? null);
        echo "
                <ul>
                  ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 69
            echo "                  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 69);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 69);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        </div>
      ";
        // line 78
        echo ($context["column_right"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 81
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 82
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "quipzo3/template/information/sitemap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 82,  285 => 81,  279 => 78,  266 => 71,  255 => 69,  251 => 68,  246 => 66,  240 => 65,  234 => 64,  228 => 63,  220 => 60,  214 => 59,  208 => 58,  202 => 57,  196 => 56,  189 => 54,  183 => 53,  177 => 49,  170 => 47,  166 => 45,  159 => 43,  155 => 41,  144 => 39,  140 => 38,  137 => 37,  135 => 36,  128 => 35,  124 => 34,  121 => 33,  119 => 32,  112 => 31,  108 => 30,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/information/sitemap.twig", "");
    }
}
