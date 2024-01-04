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

/* quipzo3/template/information/contact.twig */
class __TwigTemplate_3f9d46ade6d142ef633e0706f9aea8c10fe53050b34d679263d1f537821094ba extends \Twig\Template
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
<div id=\"information-contact\" class=\"container\">
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
            $context["class"] = "col-sm-6";
            // line 18
            echo "      ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-9";
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
        <div class=\"borbutt\">
          <h1 class=\"heading text-left\"><span>";
        // line 25
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
        </div>
        <div class=\"row\">
        
        <div class=\"col-md-4 col-xs-12 infocnt\">
        <legend>";
        // line 30
        echo ($context["text_location"] ?? null);
        echo "</legend>
        <div class=\"\">
            <!--   ";
        // line 32
        if (($context["image"] ?? null)) {
            // line 33
            echo "             <img src=\"";
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["store"] ?? null);
            echo "\" title=\"";
            echo ($context["store"] ?? null);
            echo "\" class=\"img-responsive\" />
              ";
        }
        // line 34
        echo " -->

              <!-- <strong>";
        // line 36
        echo ($context["store"] ?? null);
        echo "</strong> -->

              ";
        // line 38
        if (($context["comment"] ?? null)) {
            // line 39
            echo "                <div>";
            echo ($context["comment"] ?? null);
            echo "</div>
                ";
        }
        // line 41
        echo "
                

                <div class=\"pull-left\"><i class=\"fa fa-home\"></i></div>
                <div class=\"contsp\">";
        // line 45
        echo ($context["address"] ?? null);
        echo "</div>

                ";
        // line 47
        if (($context["geocode"] ?? null)) {
            // line 48
            echo "                <div class=\"contsp\">
                <a href=\"https://maps.google.com/maps?q=";
            // line 49
            echo twig_urlencode_filter(($context["geocode"] ?? null));
            echo "&hl=";
            echo ($context["geocode_hl"] ?? null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo ($context["button_map"] ?? null);
            echo "</a></div>
                ";
        }
        // line 51
        echo "
                <div class=\"pull-left\"><i class=\"fa fa-phone\"></i></div>
               <div class=\"contsp\"> ";
        // line 53
        echo ($context["telephone"] ?? null);
        echo "</div>

                ";
        // line 55
        if (($context["fax"] ?? null)) {
            // line 56
            echo "                <div class=\"pull-left\"><i class=\"fa fa-fax\"></i></div>
               <div class=\"contsp\"> ";
            // line 57
            echo ($context["fax"] ?? null);
            echo "</div>
                ";
        }
        // line 59
        echo "
                ";
        // line 60
        if (($context["open"] ?? null)) {
            // line 61
            echo "                <div class=\"pull-left\"><i class=\"fa fa-clock-o\"></i></div>
               <div class=\"contsp\"> ";
            // line 62
            echo ($context["open"] ?? null);
            echo "</div>
                ";
        }
        // line 64
        echo "                
        </div>
   

        ";
        // line 68
        if (($context["locations"] ?? null)) {
            // line 69
            echo "        <h3>";
            echo ($context["text_store"] ?? null);
            echo "</h3>
        <div id=\"accordion\">
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 72
                echo "            <div class=\"panel-heading\">
              <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 73);
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 73);
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 75);
                echo "\">
                  ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 77);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 77);
                    echo "\" class=\"center-block img-responsive\" />
                  ";
                }
                // line 79
                echo "                  <strong>";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 79);
                echo "</strong>
                    <address>
                    ";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 81);
                echo "
                    </address>
                    ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "                    <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 84));
                    echo "&hl=";
                    echo ($context["geocode_hl"] ?? null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo ($context["button_map"] ?? null);
                    echo "</a>
                    ";
                }
                // line 86
                echo "                  <strong>";
                echo ($context["text_telephone"] ?? null);
                echo "</strong>
                    ";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 87);
                echo "
                    ";
                // line 88
                if (twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 88)) {
                    // line 89
                    echo "                    <strong>";
                    echo ($context["text_fax"] ?? null);
                    echo "</strong>
                    ";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 90);
                    echo "
                    ";
                }
                // line 92
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "                    <strong>";
                    echo ($context["text_open"] ?? null);
                    echo "</strong>
                    ";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 94);
                    echo "
                    ";
                }
                // line 96
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                    <strong>";
                    echo ($context["text_comment"] ?? null);
                    echo "</strong>
                    ";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 98);
                    echo "
                    ";
                }
                // line 100
                echo "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "        </div>
        ";
        }
        // line 104
        echo "      </div>
      <div class=\"col-md-8 col-xs-12\">
        <form action=\"";
        // line 106
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 108
        echo ($context["text_contact"] ?? null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 110
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 112
        echo ($context["name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 113
        if (($context["error_name"] ?? null)) {
            // line 114
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                ";
        }
        // line 116
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-3 control-label\" for=\"input-email\">";
        // line 119
        echo ($context["entry_email"] ?? null);
        echo "</label>
              <div class=\"col-sm-9\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 121
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                ";
        // line 122
        if (($context["error_email"] ?? null)) {
            // line 123
            echo "                <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                ";
        }
        // line 125
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-3 control-label\" for=\"input-enquiry\">";
        // line 128
        echo ($context["entry_enquiry"] ?? null);
        echo "</label>
              <div class=\"col-sm-9\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 130
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
                ";
        // line 131
        if (($context["error_enquiry"] ?? null)) {
            // line 132
            echo "                <div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
                ";
        }
        // line 134
        echo "              </div>
            </div>
            ";
        // line 136
        echo ($context["captcha"] ?? null);
        echo "
          </fieldset>
          <div class=\"buttons\">
            <div class=\"pull-right\">
              <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 140
        echo ($context["button_submit"] ?? null);
        echo "\" />
            </div>
          </div>
        </form>
      </div>
        </div></div>
      ";
        // line 146
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
</div>
";
        // line 150
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 151
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 151,  426 => 150,  419 => 146,  410 => 140,  403 => 136,  399 => 134,  393 => 132,  391 => 131,  387 => 130,  382 => 128,  377 => 125,  371 => 123,  369 => 122,  365 => 121,  360 => 119,  355 => 116,  349 => 114,  347 => 113,  343 => 112,  338 => 110,  333 => 108,  328 => 106,  324 => 104,  320 => 102,  313 => 100,  308 => 98,  303 => 97,  300 => 96,  295 => 94,  290 => 93,  287 => 92,  282 => 90,  277 => 89,  275 => 88,  271 => 87,  266 => 86,  256 => 84,  254 => 83,  249 => 81,  243 => 79,  233 => 77,  231 => 76,  227 => 75,  220 => 73,  217 => 72,  213 => 71,  207 => 69,  205 => 68,  199 => 64,  194 => 62,  191 => 61,  189 => 60,  186 => 59,  181 => 57,  178 => 56,  176 => 55,  171 => 53,  167 => 51,  158 => 49,  155 => 48,  153 => 47,  148 => 45,  142 => 41,  136 => 39,  134 => 38,  129 => 36,  125 => 34,  115 => 33,  113 => 32,  108 => 30,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/information/contact.twig", "");
    }
}
