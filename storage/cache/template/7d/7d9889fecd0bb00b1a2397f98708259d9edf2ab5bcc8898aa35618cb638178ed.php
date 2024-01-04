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

/* quipzo3/template/common/footer.twig */
class __TwigTemplate_f1ac361252162908668f05e4f6295e541df4416bf48490df1be5cb4cf053f100 extends \Twig\Template
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
        echo "<footer>
  <div class=\"footer-top\">
    <div class=\"container\">
      ";
        // line 4
        echo ($context["ftop_full"] ?? null);
        echo "
    </div>
  </div>
  <div class=\"middle-footer\">
    <div class=\"container\">
      <div class=\"row rless\">
        ";
        // line 10
        echo ($context["footer_left"] ?? null);
        echo "
          ";
        // line 11
        if ((($context["footer_left"] ?? null) && ($context["footer_right"] ?? null))) {
            // line 12
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 13
            echo "          ";
        } elseif ((($context["footer_left"] ?? null) || ($context["footer_right"] ?? null))) {
            // line 14
            echo "          ";
            $context["class"] = "col-sm-9";
            // line 15
            echo "          ";
        } else {
            // line 16
            echo "          ";
            $context["class"] = "col-sm-12";
            // line 17
            echo "          ";
        }
        // line 18
        echo "          <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 cless fleft\">
            ";
        // line 19
        echo ($context["footer_right"] ?? null);
        echo "
          </div>
          ";
        // line 21
        if (($context["informations"] ?? null)) {
            // line 22
            echo "          <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12 cless fborder\">
            <h5>";
            // line 23
            echo ($context["text_information"] ?? null);
            echo "
              <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
            </h5>
            <div id=\"info\" class=\"collapse footer-collapse\">
            <ul class=\"list-unstyled\">
             ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 29
                echo "              <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 29);
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "              <li><a href=\"";
            echo ($context["manufacturer"] ?? null);
            echo "\">";
            echo ($context["text_manufacturer"] ?? null);
            echo "</a></li>
              <li><a href=\"";
            // line 32
            echo ($context["blog"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li>
            </ul>
            </div>
          </div>
          ";
        }
        // line 37
        echo "          <div class=\"col-lg-2 col-md-3 col-sm-3 col-xs-12 cless fborder\">
            <h5>";
        // line 38
        echo ($context["text_account"] ?? null);
        echo "
              <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#account\"></button>
            </h5>
            <div id=\"account\" class=\"collapse footer-collapse\">
            <ul class=\"list-unstyled lastb\">
              <li><a href=\"";
        // line 43
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 44
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 45
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 46
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 47
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
            </ul>
            </div>
          </div>
          <div class=\"col-lg-2 col-md-2 col-sm-2 col-xs-12 cless fborder\">
            <h5>";
        // line 52
        echo ($context["text_service"] ?? null);
        echo "
              <button type=\"button\" class=\"btn  toggle collapsed\" data-toggle=\"collapse\" data-target=\"#service\"></button>
            </h5>
            <div id=\"service\" class=\"collapse footer-collapse\">
            <ul class=\"list-unstyled lastb\">
              <li><a href=\"";
        // line 57
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 58
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 59
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 60
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
              <li><a href=\"";
        // line 61
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
            </ul>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class=\"container hidden-xs\">
    <div class=\"row rless text-left\">
        ";
        // line 71
        echo ($context["fbottom_full"] ?? null);
        echo "
    </div>
  </div>

  <div class=\"copy\">
    <div class=\"container\">
      <div class=\"row rless\">
        <div class=\"col-sm-6 col-xs-12 cless text-left\">";
        // line 78
        echo ($context["powered"] ?? null);
        echo "</div>
        ";
        // line 80
        echo "        <div class=\"col-sm-6 col-xs-12 cless pay-icon text-right\">
          <ul class=\"list-inline list-unstyled foot-payment\">
            <li><a href=\"#\"><i class=\"fa fa-cc-mastercard\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-cc-visa\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-credit-card\"></i></a></li>
            <li><a href=\"#\"><i class=\"fa fa-cc-paypal\"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<a href=\"\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: none;\">
<i class=\"fa fa-angle-double-up\"></i>
</a>

";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 97
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "quipzo3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 99,  256 => 97,  252 => 96,  234 => 80,  230 => 78,  220 => 71,  205 => 61,  199 => 60,  193 => 59,  187 => 58,  181 => 57,  173 => 52,  163 => 47,  157 => 46,  151 => 45,  145 => 44,  139 => 43,  131 => 38,  128 => 37,  118 => 32,  111 => 31,  100 => 29,  96 => 28,  88 => 23,  85 => 22,  83 => 21,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  55 => 11,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "quipzo3/template/common/footer.twig", "");
    }
}
