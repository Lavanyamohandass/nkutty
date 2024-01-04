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

/* quipzo3/template/extension/module/carousel.twig */
class __TwigTemplate_b428f542e5b961aa05949618adc7bbcddb078ac521ff207a5bd95f38508a7990 extends \Twig\Template
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
  <div class=\"row rless logo-slider\">
  <div id=\"carousel";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"owl-carousel owl-theme\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"text-center col-xs-12 cless\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive center-block\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive center-block\" />";
            }
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
  </div>
</div>
<script type=\"text/javascript\">
    \$('#carousel";
        // line 11
        echo ($context["module"] ?? null);
        echo "').owlCarousel({
      loop:false,
      dots:false,
      nav:false,
      autoplay:true,
      autoplaySpeed:1000,
      responsive:{
          0:{
              items:2
          },
          320:{
              items:2
          },
          400:{
              items:3
          },
          600:{
              items:4
          },
          768:{
              items:5
          },
          992:{
              items:5
          },
          1200:{
              items:6
          },
          1410:{
              items:9
          }
      }
    })
</script>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  72 => 7,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/carousel.twig", "");
    }
}
