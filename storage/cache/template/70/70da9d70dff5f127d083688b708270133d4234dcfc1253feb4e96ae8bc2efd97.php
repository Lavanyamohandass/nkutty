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

/* quipzo3/template/extension/module/webinewsletter/default.twig */
class __TwigTemplate_edca45bf4b93ac218774807a667d502ea299c86f9400c978f6e25e8c9ab20630 extends \Twig\Template
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
        echo "<div class=\"newsl webi-newsletter ";
        echo ($context["prefix"] ?? null);
        echo "\" id=\"newsletter_";
        echo ($context["id"] ?? null);
        echo "\" data-mode=\"";
        echo ($context["mode"] ?? null);
        echo "\">
\t<div class=\"row rless\">
\t    <div class=\"news_letter col-xs-12 cless\">
\t\t\t<form id=\"formNewLestter\" method=\"post\" action=\"";
        // line 4
        echo ($context["action"] ?? null);
        echo "\" class=\"formNewLestter\" ";
        if ( !twig_test_empty(($context["banner"] ?? null))) {
            echo " style=\"background-image: url('";
            echo ($context["banner"] ?? null);
            echo "')\" ";
        }
        echo ">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<div id=\"newsletter\" class=\"\">
\t\t\t\t\t\t<div class=\"row rless news_row\">
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-5 hidden-sm hidden-xs cless\">
\t\t\t\t\t\t\t\t<h2>";
        // line 9
        echo ($context["entry_sign_up_for_newsletter"] ?? null);
        echo "</h2>
\t\t\t\t\t\t\t\t<div class=\"description-top\">";
        // line 10
        echo ($context["text_description"] ?? null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-7 col-sm-12 col-xs-12 cless\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control input-md inputNew\" ";
        // line 14
        if ( !array_key_exists("customer_email", $context)) {
            echo " onblur=\"javascript:if(this.value=='')this.value='";
            echo ($context["default_input_text"] ?? null);
            echo "';\" onfocus=\"javascript:if(this.value=='";
            echo ($context["default_input_text"] ?? null);
            echo "')this.value='';\"";
        }
        echo " value=\"";
        echo ((($context["customer_email"] ?? null)) ? (($context["customer_email"] ?? null)) : (($context["default_input_text"] ?? null)));
        echo "\" size=\"18\" name=\"email\" placeholder=\"Your email address\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\"><button type=\"submit\" name=\"submitNewsletter\" class=\"newsbtn btn btn-primary\">";
        // line 15
        echo ($context["button_subscribe"] ?? null);
        echo "</button></div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"1\" name=\"action\">
\t\t\t\t\t\t\t\t\t<div class=\"valid\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$(\"#newsletter_";
        // line 28
        echo ($context["id"] ?? null);
        echo "\").webiNewsletter().work(  '";
        echo ($context["valid_email"] ?? null);
        echo "' );
--></script>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/extension/module/webinewsletter/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  85 => 15,  73 => 14,  66 => 10,  62 => 9,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/extension/module/webinewsletter/default.twig", "");
    }
}
