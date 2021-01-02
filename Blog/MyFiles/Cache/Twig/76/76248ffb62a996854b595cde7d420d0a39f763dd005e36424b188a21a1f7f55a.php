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

/* Master/ListView.html.twig */
class __TwigTemplate_110c21da981a93e8a621d79bf9439775c4a674b9914001655ed330997706ccf9 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 26), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <div class=\"card\">
        <div class=\"container-fluid mt-3\">
            <div class=\"row\">
                ";
        // line 40
        echo "                <div class=\"col-6 col-md mb-2\">
                    <div class=\"btn-group\">
                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnNew", [], "any", false, false, false, 42)) {
            // line 43
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 44), "modalInsert", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </button>
                            ";
            } else {
                // line 48
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 48), "html", null, true);
                echo "\" class=\"btn btn-success\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </a>
                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 53), "btnDelete", [], "any", false, false, false, 53)) {
            // line 54
            echo "                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"listViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
            echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 58
        echo "                    </div>
                    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "btnPrint", [], "any", false, false, false, 59)) {
            // line 60
            echo "                        <div class=\"btn-group\">
                            ";
            // line 61
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 61, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 65), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 65)], "method", false, false, false, 65);
        echo "
                    ";
        // line 67
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 67), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 67);
        echo "
                </div>
                <div class=\"col-6 col-md-2 mb-2\">
                    ";
        // line 71
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 71, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-6 col-md-3 mb-2\">
                    ";
        // line 75
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 75, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-6 col-md-2 text-right mb-2\">
                    ";
        // line 79
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 79, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 83
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 83)) ? ("") : ("display: none;"));
        // line 84
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84), "html", null, true);
        echo "Filters\" class=\"row align-items-center\" style=\"";
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 86
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 86);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
            ";
        // line 90
        echo "            <div class=\"row\">
                ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 91), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 91), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 91);
        echo "
            </div>
        </div>
        ";
        // line 95
        echo "        <div class=\"table-responsive\">
            ";
        // line 96
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 96), "appSettings", [], "method", false, false, false, 96), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 96) == "small")) ? ("table-sm") : (""));
        // line 97
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                    <tr>
                        ";
        // line 100
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 100)) > 0)) {
            // line 101
            echo "                            <th width=\"50\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listActionCB\" type=\"checkbox\" />
                                </div>
                            </th>
                        ";
        }
        // line 107
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 108
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 108);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 113));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 114
            echo "                        ";
            $context["trClass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 114), "trClass", [0 => $context["model"]], "method", false, false, false, 114);
            // line 115
            echo "                        <tr class=\"clickableRow ";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 115), "html", null, true);
            echo "\">
                            <td class=\"cancelClickable\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 118), "html", null, true);
            echo "\" />
                                </div>
                            </td>
                            ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 122
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 122);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 126
            echo "                        <tr class=\"table-warning\">
                            <td colspan=\"";
            // line 127
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 127))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 127), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 134
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 134);
        // line 135
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 0)) {
            // line 136
            echo "            <div class=\"card-footer text-center\">
                <div class=\"btn-group\">
                    ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 139
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 139)) {
                    // line 140
                    echo "                            <button type=\"button\" class=\"btn btn-light active\" onclick=\"listViewSetOffset('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 140), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 140), "html", null, true);
                    echo "');\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 140), "html", null, true);
                    echo "</button>
                        ";
                } else {
                    // line 142
                    echo "                            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewSetOffset('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 142), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 142), "html", null, true);
                    echo "');\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 142), "html", null, true);
                    echo "</button>
                        ";
                }
                // line 144
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                </div>
            </div>
        ";
        }
        // line 148
        echo "    </div>
    <br/>
    ";
        // line 151
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 153
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 153), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 153), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 153);
        echo "
        </div>
    </div>
</form>

";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 160
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 160), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 160)], "method", false, false, false, 160);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
";
        // line 174
        echo "
";
        // line 199
        echo "
";
        // line 214
        echo "
";
    }

    // line 164
    public function macro_filterButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 165
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 165))) {
                // line 166
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 166);
                // line 167
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                // line 168
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "');\">
                <i class=\"fas fa-filter fa-fw\" aria-hidden=\"true\"></i> ";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 169), "html", null, true);
                echo "
            </button>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 175
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 176
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 181), "options", [], "method", false, false, false, 181));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 182
                echo "                <a href=\"#\" class=\"dropdown-item\" onclick=\"listViewPrintAction('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 182), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 183), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 184)], "method", false, false, false, 184), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 187), "tools", [], "any", false, false, false, 187))) {
                // line 188
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 189), "tools", [], "method", false, false, false, 189));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 190
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 190), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 191), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 192
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 192)], "method", false, false, false, 192), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "            ";
            }
            // line 196
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 201))) {
                // line 202
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 204
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 204), "html", null, true);
                echo "\" autocomplete=\"off\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 204), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 215
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 216
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 216))) {
                // line 217
                echo "        <div class=\"form-group\">
            <div class=\"btn-group\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                    ";
                // line 220
                $context["icon"] = ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 220)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 220)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                // line 221
                echo "                    <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 222
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 222)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 222)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["label"] ?? null) : null), "html", null, true);
                echo "
                    <span class=\"caret\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 226
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 226));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 227
                    echo "                        ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 227) == $context["key"])) ? (" active") : (""));
                    // line 228
                    echo "                        ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 228) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                    // line 229
                    echo "                        <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\" onclick=\"listViewSetOrder('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 229), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                            <i class=\"";
                    // line 230
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 230), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 233,  629 => 230,  620 => 229,  617 => 228,  614 => 227,  610 => 226,  603 => 222,  598 => 221,  596 => 220,  591 => 217,  588 => 216,  575 => 215,  554 => 204,  550 => 202,  547 => 201,  533 => 200,  522 => 196,  519 => 195,  510 => 192,  506 => 191,  501 => 190,  497 => 189,  494 => 188,  491 => 187,  482 => 184,  478 => 183,  471 => 182,  467 => 181,  460 => 176,  445 => 175,  431 => 169,  427 => 168,  424 => 167,  421 => 166,  418 => 165,  404 => 164,  399 => 214,  396 => 199,  393 => 174,  390 => 162,  381 => 160,  377 => 159,  369 => 153,  365 => 151,  361 => 148,  356 => 145,  350 => 144,  340 => 142,  330 => 140,  327 => 139,  323 => 138,  319 => 136,  316 => 135,  313 => 134,  308 => 130,  297 => 127,  294 => 126,  288 => 124,  279 => 122,  275 => 121,  269 => 118,  260 => 115,  257 => 114,  252 => 113,  247 => 110,  238 => 108,  233 => 107,  225 => 101,  223 => 100,  216 => 97,  214 => 96,  211 => 95,  205 => 91,  202 => 90,  199 => 88,  190 => 86,  186 => 85,  179 => 84,  176 => 83,  169 => 79,  162 => 75,  155 => 71,  148 => 67,  143 => 65,  141 => 64,  135 => 61,  132 => 60,  130 => 59,  127 => 58,  119 => 54,  116 => 53,  113 => 52,  105 => 48,  97 => 44,  94 => 43,  92 => 42,  88 => 40,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/ListView.html.twig");
    }
}
