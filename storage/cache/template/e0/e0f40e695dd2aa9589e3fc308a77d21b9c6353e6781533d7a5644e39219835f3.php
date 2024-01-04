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

/* quipzo3/template/common/search.twig */
class __TwigTemplate_f0119a89e22d461d36c11dc54b6168540ffa081e125ee95a417f20194f9e7625 extends \Twig\Template
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
        echo "<li id=\"search\" class=\"desktop-search d-inline-block\">
<div class=\"wbSearch\">
<div id=\"search_block_top\">
\t<select id=\"madebyhand-search-category\">
      <option value=\"0\">";
        // line 5
        echo ($context["text_category"] ?? null);
        echo "</option>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 7
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 7) == ($context["category_id"] ?? null))) {
                // line 8
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 8);
                echo "</option>
        ";
            } else {
                // line 10
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 10);
                echo "</option>
        ";
            }
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 13
                echo "          ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                    // line 14
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 14);
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 14);
                    echo "</option>
          ";
                } else {
                    // line 16
                    echo "            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 16);
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 16);
                    echo "</option>
          ";
                }
                // line 18
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 19
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 19) == ($context["category_id"] ?? null))) {
                        // line 20
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 20);
                        echo "\" selected=\"selected\">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        // line 21
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 21);
                        echo "
              </option>
            ";
                    } else {
                        // line 24
                        echo "              <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 24);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 24);
                        echo "</option>
            ";
                    }
                    // line 26
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </select>
<div class=\"input-group input_search\">
\t<input type=\"text\" name=\"search\" value=\"";
        // line 31
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" class=\"search_query form-control input-lg madebyhand-search\" />
    <div class=\"input-group-btn\">
    \t<button type=\"button\" class=\"btn btn-primary btn-lg\"><!-- <i class=\"fa fa-search hidden-lg hidden-md hidden-sm\"></i> -->
      ";
        // line 35
        echo "        <svg><use xlink:href=\"#hsearch\"></use></svg>
      </button>
  \t\t<!-- <a href=\"javascript:void(0)\" class=\"closebtn close-nav\" onclick=\"closeSearch()\"><i class=\"fa fa-close\"></i></a> -->
  \t</div>
  <!-- madebyhand Search Start  -->
        <div class=\"madebyhand-search text-left\">
          <div class=\"madebyhand-search-loader\" style=\"display: none;\"><div class=\"loaders\"></div></div><!-- Add Loader -->
          <div class=\"madebyhand-search-result\"><!-- search results --></div>
        </div>
        <!-- madebyhand Search End  -->
</div>
</div>
</div>
</li>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 35,  143 => 31,  139 => 29,  133 => 28,  127 => 27,  121 => 26,  113 => 24,  107 => 21,  102 => 20,  99 => 19,  94 => 18,  86 => 16,  78 => 14,  75 => 13,  70 => 12,  62 => 10,  54 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/common/search.twig", "");
    }
}
