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

/* quipzo3/template/product/manufacturer_list.twig */
class __TwigTemplate_83fb0369270e2d9baa9f479d64241314be73e27e826ac8b6360f4d7cbcc8bb00 extends \Twig\Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
            $context["class"] = "col-sm-8 col-md-9 col-xs-12";
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
        echo ($context["cheading_title"] ?? null);
        echo "</span></h1>
        </div>
        ";
        // line 27
        if (($context["categories"] ?? null)) {
            // line 28
            echo "        <p><strong>";
            echo ($context["text_index"] ?? null);
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "          &nbsp;&nbsp;&nbsp;<a href=\"index.php?route=product/manufacturer#";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
                echo "</a> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
          <div class=\"row\">
        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "        <div class=\"col-lg-6 col-xs-12\">
      <div class=\"brand-list\">
        <h2 id=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                echo "\" class=\"bname\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                echo "</h2>
        ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 36), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 37
                        echo "        <div class=\"brands-content\">
        <div class=\"row\"> ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 39
                            echo "          <div class=\"col-sm-6 col-xs-12\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 39);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 39);
                            echo "</a></div>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo " </div>
        </div></div>
      </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturers'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "        ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        ";
        } else {
            // line 47
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons clearfix\">
          <div class=\"pull-right\"><a href=\"";
            // line 49
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
        ";
        }
        // line 52
        echo "        </div></div>
      ";
        // line 53
        echo ($context["column_right"] ?? null);
        echo "
    </div>
  </div>
</div>
";
        // line 57
        echo ($context["content_bottom"] ?? null);
        echo "
";
        // line 58
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "quipzo3/template/product/manufacturer_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 58,  211 => 57,  204 => 53,  201 => 52,  193 => 49,  187 => 47,  184 => 46,  178 => 45,  175 => 44,  166 => 40,  155 => 39,  151 => 38,  148 => 37,  143 => 36,  141 => 35,  135 => 34,  131 => 32,  127 => 31,  114 => 29,  107 => 28,  105 => 27,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  72 => 16,  68 => 15,  60 => 9,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/product/manufacturer_list.twig", "");
    }
}
