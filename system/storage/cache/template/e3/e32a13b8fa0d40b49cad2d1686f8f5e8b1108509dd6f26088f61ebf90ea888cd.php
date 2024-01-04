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

/* quipzo3/template/extension/module/slideshow.twig */
class __TwigTemplate_c9e71969561c4dcbc22d302f889cc925f600d8a3d2ca75660c50fbd5f02b4ea2 extends \Twig\Template
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
        echo "<div class=\"container\">
  <div class=\"s-panel row rless\">
    <div class=\"col-lg-3 col-md-3 col-sm-2 col-xs-12 cless top-menu\"></div>
    <div class=\"col-lg-6 col-md-9 col-sm-8 col-xs-12 cless silder_rightwidth\">
      <div class=\"loader wrloader\"></div>
      <div id=\"slideshow";
        // line 6
        echo ($context["module"] ?? null);
        echo "\" class=\"slideshow\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 8
            echo "            <div class=\"slider-banner\">
              ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 9)) {
                // line 10
                echo "                <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 10);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" />
              ";
            }
            // line 12
            echo "              <div class=\"container\">
                <div class=\"slidertext\">
                <div class=\"slideff\">
                  ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 15);
            echo "
                  <a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 16);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["shop_now"] ?? null);
            echo "</a>
                </div>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      </div>
    </div>
";
        // line 26
        echo "
<script type=\"text/javascript\">
  \$('.slideshow').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    dots: true,
    autoplaySpeed: 5000,
  });
</script>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  96 => 22,  82 => 16,  78 => 15,  73 => 12,  57 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/slideshow.twig", "");
    }
}
