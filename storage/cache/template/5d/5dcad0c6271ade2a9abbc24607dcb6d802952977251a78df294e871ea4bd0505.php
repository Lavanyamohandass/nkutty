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

/* extension/module/blogger/form.twig */
class __TwigTemplate_de94f42a444900baeff5798c09f7744c08fb501b12ab58f2bf087d355c2b84ed extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-blogger\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-save\"></i>
                </button>
                <a href=\"";
        // line 9
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\">
                    <i class=\"fa fa-reply\"></i>
                </a>
            </div>
        <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
   ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo ($context["text_form"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 32
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                    <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        <ul class=\"nav nav-tabs\" id=\"language\">
                            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                                <li>
                                    <a href=\"#language";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "\" data-toggle=\"tab\">
                                        <img src=\"language/";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" />
                                        ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </ul>
                        <div class=\"tab-content\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 51
            echo "                            <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "\">
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"blogger_description[";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "][title]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["blogger_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["blogger_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null), "title", [], "any", false, false, false, 55)) : (""));
            echo "\"
                                        placeholder=\"";
            // line 56
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
            echo "\" class=\"form-control\" />
                                            ";
            // line 57
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) {
                // line 58
                echo "                                                <div class=\"text-danger\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_title"] ?? null), "language", [], "any", false, false, false, 58), "language_id", [], "any", false, false, false, 58);
                echo "</div>
                                            ";
            }
            // line 60
            echo "                                    </div>
                                </div>
                                            <div class=\"form-group required\">
                                                <label class=\"col-sm-2 control-label\" for=\"input-description\">";
            // line 63
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <textarea name=\"blogger_description[";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            echo "\" data-toggle=\"summernote\" class=\"form-control\">";
            echo (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["blogger_description"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["blogger_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65)] ?? null) : null), "description", [], "any", false, false, false, 65)) : (""));
            echo "</textarea>
                                                    ";
            // line 66
            if ((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["error_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) {
                // line 67
                echo "                                                        <div class=\"text-danger\">";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null);
                echo "</div>
                                                    ";
            }
            // line 69
            echo "                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"tab-data\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 77
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                            ";
        // line 80
        if (($context["status"] ?? null)) {
            // line 81
            echo "                                                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                                <option value=\"0\">";
            // line 82
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                            ";
        } else {
            // line 84
            echo "                                                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
            // line 85
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                            ";
        }
        // line 87
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
        // line 91
        echo ($context["entry_image"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 92
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 93
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-module\">";
        // line 97
        echo ($context["entry_module"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <select name=\"module_id\" id=\"input-module\" class=\"form-control\">
                                            <option value=\"\">";
        // line 100
        echo ($context["text_unallocated"] ?? null);
        echo "</option>
                                            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogger_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 102
            echo "                                                <optgroup label=\"";
            echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 102);
            echo "\">
                                                    ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["module"], "module", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 104
                echo "                                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 104) == ($context["module_id"] ?? null))) {
                    // line 105
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 105);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 105);
                    echo "</option>
                                                        ";
                } else {
                    // line 107
                    echo "                                                            <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "module_id", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 107);
                    echo "</option>
                                                        ";
                }
                // line 109
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                                </optgroup>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                        </select>
                                        ";
        // line 113
        if (($context["error_module"] ?? null)) {
            // line 114
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_module"] ?? null);
            echo "</div>
                                        ";
        }
        // line 116
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
";
        // line 131
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/blogger/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 131,  354 => 116,  348 => 114,  346 => 113,  343 => 112,  336 => 110,  330 => 109,  322 => 107,  314 => 105,  311 => 104,  307 => 103,  302 => 102,  298 => 101,  294 => 100,  288 => 97,  281 => 93,  275 => 92,  271 => 91,  265 => 87,  260 => 85,  255 => 84,  250 => 82,  245 => 81,  243 => 80,  237 => 77,  231 => 73,  222 => 69,  216 => 67,  214 => 66,  204 => 65,  199 => 63,  194 => 60,  188 => 58,  186 => 57,  180 => 56,  174 => 55,  167 => 53,  161 => 51,  157 => 50,  153 => 48,  143 => 44,  135 => 43,  131 => 42,  128 => 41,  124 => 40,  116 => 35,  112 => 34,  107 => 32,  101 => 29,  97 => 27,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger/form.twig", "");
    }
}
