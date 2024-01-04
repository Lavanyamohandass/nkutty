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

/* quipzo3/template/extension/module/wbimgbanner.twig */
class __TwigTemplate_0dcaf0b39f999e2705bbc7c8d4fd644e8be5d6d4c4c34666c51c13b7696e6fb9 extends \Twig\Template
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
        echo "<div class=\"container martb\">
<div class=\"row imgbnr rless\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "    <div class=\"col-sm-4 col-xs-12 bann cless\">
    \t<div class=\"beffect\">
\t        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t    <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\" class=\"beff_a\">
\t\t\t    <img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive center-block\" />
\t\t\t    </a>
\t\t\t    ";
            } else {
                // line 11
                echo "\t\t\t    <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 11);
                echo "\" class=\"img-responsive center-block\" />
\t\t    ";
            }
            // line 13
            echo "\t\t    <div class=\"imgbnrtext img-text\">
\t\t\t\t<div>
\t\t\t\t\t";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 15);
            echo "
\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["shop_now"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/wbimgbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  80 => 16,  76 => 15,  72 => 13,  64 => 11,  56 => 8,  51 => 7,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/wbimgbanner.twig", "");
    }
}
