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

/* extension/module/blogger.twig */
class __TwigTemplate_c160c89f8b062f3fc9e679f445001fd81ead6c1761783b18523ac9e7cecfab62 extends \Twig\Template
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
            echo "            <div class=\"alert alert-danger\">
                <i class=\"fa fa-exclamation-circle\"></i> 
                ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 29
        echo "    
        ";
        // line 30
        if (($context["success"] ?? null)) {
            // line 31
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>
                ";
            // line 32
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 36
        echo "
        <div class=\"alert alert-info\">
            <i class=\"fa fa-info-circle\"></i> 
            ";
        // line 39
        echo ($context["text_view_list"] ?? null);
        echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>   
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 44
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 47
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blogger\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 48
        echo ($context["module_id"] ?? null);
        echo "\" />
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 50
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-8\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 52
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 53
        if (($context["error_name"] ?? null)) {
            // line 54
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 56
        echo "                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 59
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-8\">
                                <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                    ";
        // line 62
        if (($context["status"] ?? null)) {
            // line 63
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 66
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 69
        echo "                                </select>
                            </div>
                        </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"input-width\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["help_image"] ?? null);
        echo "\">
                                ";
        // line 75
        echo ($context["entry_image_size"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-4\">
                            <input type=\"text\" name=\"width\" value=\"";
        // line 79
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                ";
        // line 80
        if (($context["error_width"] ?? null)) {
            // line 81
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                                ";
        }
        // line 83
        echo "                        </div>
                        <div class=\"col-sm-4\">
                            <input type=\"text\" name=\"height\" value=\"";
        // line 85
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                            ";
        // line 86
        if (($context["error_height"] ?? null)) {
            // line 87
            echo "                                <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                            ";
        }
        // line 89
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"input-limit\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 93
        echo ($context["help_limit"] ?? null);
        echo "\">";
        echo ($context["entry_limit"] ?? null);
        echo "</span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"limit\" value=\"";
        // line 96
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\" for=\"input-char-limit\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 101
        echo ($context["help_char_limit"] ?? null);
        echo "\">
                                ";
        // line 102
        echo ($context["entry_char_limit"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <input type=\"text\" name=\"char_limit\" value=\"";
        // line 106
        echo ($context["char_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_char_limit"] ?? null);
        echo "\" id=\"input-char-limit\" class=\"form-control\" />
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 111
        echo ($context["help_allow_comments"] ?? null);
        echo "\">
                                ";
        // line 112
        echo ($context["entry_allow_comments"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <label class=\"radio-inline\">
                                ";
        // line 117
        if (($context["comments"] ?? null)) {
            // line 118
            echo "                                    <input type=\"radio\" name=\"comments\" value=\"1\" checked=\"checked\" />
                                        ";
            // line 119
            echo ($context["text_yes"] ?? null);
            echo "
                                ";
        } else {
            // line 121
            echo "                                    <input type=\"radio\" name=\"comments\" value=\"1\" />
                                    ";
            // line 122
            echo ($context["text_yes"] ?? null);
            echo "
                               ";
        }
        // line 124
        echo "                            </label>
                            <label class=\"radio-inline\">
                                ";
        // line 126
        if ( !($context["comments"] ?? null)) {
            // line 127
            echo "                                    <input type=\"radio\" name=\"comments\" value=\"0\" checked=\"checked\" />
                                    ";
            // line 128
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        } else {
            // line 130
            echo "                                    <input type=\"radio\" name=\"comments\" value=\"0\" />
                                    ";
            // line 131
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        }
        // line 133
        echo "                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 138
        echo ($context["help_login_required"] ?? null);
        echo "\">
                                ";
        // line 139
        echo ($context["entry_login_required"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <label class=\"radio-inline\">
                                ";
        // line 144
        if (($context["login"] ?? null)) {
            // line 145
            echo "                                    <input type=\"radio\" name=\"login\" value=\"1\" checked=\"checked\" />
                                    ";
            // line 146
            echo ($context["text_yes"] ?? null);
            echo "
                                ";
        } else {
            // line 148
            echo "                                    <input type=\"radio\" name=\"login\" value=\"1\" />
                                    ";
            // line 149
            echo ($context["text_yes"] ?? null);
            echo "
                                ";
        }
        // line 151
        echo "                            </label>
                            <label class=\"radio-inline\">
                                ";
        // line 153
        if ( !($context["login"] ?? null)) {
            // line 154
            echo "                                    <input type=\"radio\" name=\"login\" value=\"0\" checked=\"checked\" />
                                    ";
            // line 155
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        } else {
            // line 157
            echo "                                    <input type=\"radio\" name=\"login\" value=\"0\" />
                                    ";
            // line 158
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        }
        // line 160
        echo "                            </label>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label\">
                            <span data-toggle=\"tooltip\" title=\"";
        // line 165
        echo ($context["help_auto_approve"] ?? null);
        echo "\">
                                ";
        // line 166
        echo ($context["entry_auto_approve"] ?? null);
        echo "
                            </span>
                        </label>
                        <div class=\"col-sm-8\">
                            <label class=\"radio-inline\">
                                ";
        // line 171
        if (($context["auto_approve"] ?? null)) {
            // line 172
            echo "                                    <input type=\"radio\" name=\"auto_approve\" value=\"1\" checked=\"checked\" />
                                    ";
            // line 173
            echo ($context["text_yes"] ?? null);
            echo "
                                ";
        } else {
            // line 175
            echo "                                    <input type=\"radio\" name=\"auto_approve\" value=\"1\" />
                                    ";
            // line 176
            echo ($context["text_yes"] ?? null);
            echo "
                                ";
        }
        // line 178
        echo "                            </label>
                            <label class=\"radio-inline\">
                                ";
        // line 180
        if ( !($context["auto_approve"] ?? null)) {
            // line 181
            echo "                                    <input type=\"radio\" name=\"auto_approve\" value=\"0\" checked=\"checked\" />
                                        ";
            // line 182
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        } else {
            // line 184
            echo "                                    <input type=\"radio\" name=\"auto_approve\" value=\"0\" />
                                    ";
            // line 185
            echo ($context["text_no"] ?? null);
            echo "
                                ";
        }
        // line 187
        echo "                            </label>
                        </div>
                    </div>
                    <table class=\"table table-striped table-bordered table-hover\">
                        <thead>
                            <tr>
                                <td class=\"text-left\">";
        // line 193
        echo ($context["column_title"] ?? null);
        echo "</td>
                                <td class=\"text-left\">";
        // line 194
        echo ($context["column_status"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 195
        echo ($context["column_comments"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 196
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                                <td class=\"text-right\">";
        // line 197
        echo ($context["column_action"] ?? null);
        echo "</td>
                            </tr>
                        </thead>
                    ";
        // line 200
        if (($context["blogger_entries"] ?? null)) {
            // line 201
            echo "                        <tbody>
                            ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blogger_entries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 203
                echo "                                <tr>
                                    <td class=\"text-left\">";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "title", [], "any", false, false, false, 204);
                echo "</td>
                                    <td class=\"text-left\">";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "status", [], "any", false, false, false, 205);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 206
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "total_comments", [], "any", false, false, false, 206);
                echo "</td>
                                    <td class=\"text-right\">";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "date_added", [], "any", false, false, false, 207);
                echo "</td>
                                    <td class=\"text-right\">
                                        <a onclick=\"confirm('";
                // line 209
                echo ($context["text_confirm"] ?? null);
                echo "')?location.href='";
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "delete", [], "any", false, false, false, 209);
                echo "' : false;\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_delete"] ?? null);
                echo "\" class=\"btn btn-danger\">
                                            <i class=\"fa fa-minus-circle\"></i>
                                        </a>
                                        <a href=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "comments", [], "any", false, false, false, 212);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_comments"] ?? null);
                echo "\" class=\"btn btn-info\">
                                            <i class=\"fa fa-eye\"></i>
                                        </a>
                                        <a href=\"";
                // line 215
                echo twig_get_attribute($this->env, $this->source, $context["entry"], "edit", [], "any", false, false, false, 215);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\">
                                            <i class=\"fa fa-pencil\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                        </tbody>
                    ";
        }
        // line 223
        echo "                        <tfoot>
                            ";
        // line 224
        if (($context["add_blog"] ?? null)) {
            // line 225
            echo "                                <tr>
                                    <td class=\"text-right\" colspan=\"5\">
                                        <button type=\"button\" onclick=\"location = '";
            // line 227
            echo ($context["add_blog"] ?? null);
            echo "';\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_add_blog"] ?? null);
            echo "\" class=\"btn btn-primary\">
                                            <i class=\"fa fa-plus-circle\"></i>
                                        </button></td>
                                </tr>
                             ";
        } else {
            // line 232
            echo "                                <tr>
                                    <td class=\"text-center\" colspan=\"5\">";
            // line 233
            echo ($context["text_save_module"] ?? null);
            echo "</td>
                                </tr>
                            ";
        }
        // line 236
        echo "                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 243
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  592 => 243,  583 => 236,  577 => 233,  574 => 232,  564 => 227,  560 => 225,  558 => 224,  555 => 223,  551 => 221,  537 => 215,  529 => 212,  519 => 209,  514 => 207,  510 => 206,  506 => 205,  502 => 204,  499 => 203,  495 => 202,  492 => 201,  490 => 200,  484 => 197,  480 => 196,  476 => 195,  472 => 194,  468 => 193,  460 => 187,  455 => 185,  452 => 184,  447 => 182,  444 => 181,  442 => 180,  438 => 178,  433 => 176,  430 => 175,  425 => 173,  422 => 172,  420 => 171,  412 => 166,  408 => 165,  401 => 160,  396 => 158,  393 => 157,  388 => 155,  385 => 154,  383 => 153,  379 => 151,  374 => 149,  371 => 148,  366 => 146,  363 => 145,  361 => 144,  353 => 139,  349 => 138,  342 => 133,  337 => 131,  334 => 130,  329 => 128,  326 => 127,  324 => 126,  320 => 124,  315 => 122,  312 => 121,  307 => 119,  304 => 118,  302 => 117,  294 => 112,  290 => 111,  280 => 106,  273 => 102,  269 => 101,  259 => 96,  251 => 93,  245 => 89,  239 => 87,  237 => 86,  231 => 85,  227 => 83,  221 => 81,  219 => 80,  213 => 79,  206 => 75,  202 => 74,  195 => 69,  190 => 67,  185 => 66,  180 => 64,  175 => 63,  173 => 62,  167 => 59,  162 => 56,  156 => 54,  154 => 53,  148 => 52,  143 => 50,  138 => 48,  134 => 47,  128 => 44,  120 => 39,  115 => 36,  108 => 32,  105 => 31,  103 => 30,  100 => 29,  93 => 25,  89 => 23,  87 => 22,  81 => 18,  70 => 16,  66 => 15,  61 => 13,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/blogger.twig", "");
    }
}
