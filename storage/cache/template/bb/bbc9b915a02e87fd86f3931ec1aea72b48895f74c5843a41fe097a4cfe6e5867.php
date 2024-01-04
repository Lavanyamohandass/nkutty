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

/* quipzo3/template/extension/module/wbfashionbanner.twig */
class __TwigTemplate_022863e459131db0c0542fa4ac0379b5077d8ef990212eec6b252458d818c887 extends \Twig\Template
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
        echo "\t\t<div class=\"col-lg-3 hidden-md hidden-sm hidden-xs cless fash-app\">
\t\t    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t\t    <div class=\"bann\">
\t\t    \t<div class=\"beffect\">
\t\t\t        ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t\t    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                echo "\" class=\"beff_a\">
\t\t\t\t\t    <img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive center-block\" />
\t\t\t\t\t    </a>
\t\t\t\t\t    ";
            } else {
                // line 10
                echo "\t\t\t\t\t    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" />
\t\t\t\t    ";
            }
            // line 12
            echo "\t\t\t\t    <div class=\"imgbnrtext cate-text\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 14);
            echo "
\t\t\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 15);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["shop_now"] ?? null);
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</div>
\t</div>
</div>\t";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/wbfashionbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  79 => 15,  75 => 14,  71 => 12,  63 => 10,  55 => 7,  50 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/wbfashionbanner.twig", "");
    }
}
