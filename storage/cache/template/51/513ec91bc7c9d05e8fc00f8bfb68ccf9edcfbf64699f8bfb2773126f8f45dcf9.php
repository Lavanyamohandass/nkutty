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

/* quipzo3/template/extension/module/blogger.twig */
class __TwigTemplate_dd3fdfb11d6eae60885e0f23eddf09a15d6fd25fa029c861ed4003af926f4310 extends \Twig\Template
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
        echo "<div class=\"bg_grey martb container\">    
    <div class=\"blog_webi bg_white\">
        <div class=\"borbutt\">
            <h1 class=\"heading text-left\"><span>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</span></h1>
        </div>
        <div class=\"box-content\">
            <div class=\"box-product row rless\">
                <div id=\"blog\" class=\"owl-carousel owl-theme\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 10
            echo "                    <div class=\"product-block col-xs-12 cless\">
                       <div class=\"blogshadow row rless\">
                        ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 12)) {
                // line 13
                echo "                            <div class=\"blog-left col-xs-12 cless\">
                                <div class=\"webi-blog-image\">
                                    <img src=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
                                    <div class=\"blog-post-image-hover\"> </div>
                                    <div class=\"webi_post_hover\">
                                        <div class=\"blog-ic\">
                                        <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 19);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search\"></i></a>
                                        <a class=\"icon readmore_link\" title=\"all blog\" href=\"";
                // line 20
                echo ($context["all_blogs"] ?? null);
                echo "\"><i class=\"fa fa-link\"></i></a>
                                    </div>
                                    </div>
                                </div>
                                <div class=\"date-time blogdt\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 24);
                echo "</div>
                            </div>
                        ";
            }
            // line 27
            echo "                            <div class=\"blog-right col-xs-12 text-left cless\">
                                <div class=\"bs\">
                                    <h5>";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 29);
            echo " ";
            echo ($context["entry_comment"] ?? null);
            echo "</h5>
                                    <h4><a href=\"";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 30);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 30);
            echo "</a></h4>
                                    ";
            // line 34
            echo "                                    ";
            // line 35
            echo "                                    ";
            // line 36
            echo "                                    <div class=\"view-blog\">
                                        <div class=\"read-more\">
                                            <a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 38);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </div>
            </div>
        </div>
        <!--  <div class=\"buttons-see-all text-center\">
            <button type=\"button\" onclick=\"location='";
        // line 50
        echo ($context["all_blogs"] ?? null);
        echo "';\" class=\"btn btn-primary\">";
        echo ($context["button_all_blogs"] ?? null);
        echo "</button>
        </div> -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  132 => 46,  116 => 38,  112 => 36,  110 => 35,  108 => 34,  102 => 30,  96 => 29,  92 => 27,  86 => 24,  79 => 20,  75 => 19,  64 => 15,  60 => 13,  58 => 12,  54 => 10,  50 => 9,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/blogger.twig", "");
    }
}
