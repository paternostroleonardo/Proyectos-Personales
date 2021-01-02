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

/* Master/ListViewMin.html.twig */
class __TwigTemplate_0d4a0d6b09d76fa88ad5adddd69b939af5955e5c09d47846777d8e4e8ba46027 extends \Twig\Template
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
    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 39
        echo "            <div class=\"col-6 col-md mb-2\">
                <div class=\"btn-group\">
                    ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 41), "btnNew", [], "any", false, false, false, 41)) {
            // line 42
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "modalInsert", [], "any", false, false, false, 42)) {
                // line 43
                echo "                            <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            } else {
                // line 47
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 47), "html", null, true);
                echo "\" class=\"btn btn-success\">
                                <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                        ";
            }
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 52), "btnDelete", [], "any", false, false, false, 52)) {
            // line 53
            echo "                        <button type=\"button\" class=\"btn btn-danger\" onclick=\"listViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 53), "html", null, true);
            echo "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 57
        echo "                </div>
                ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 58), "btnPrint", [], "any", false, false, false, 58)) {
            // line 59
            echo "                    <div class=\"btn-group\">
                        ";
            // line 60
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 60, $context, $this->getSourceContext());
            echo "
                    </div>
                ";
        }
        // line 63
        echo "                ";
        // line 64
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 64), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 64)], "method", false, false, false, 64);
        echo "
                ";
        // line 66
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 66), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 66);
        echo "
            </div>
            <div class=\"col-6 col-md-2 mb-2\">
                ";
        // line 70
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 70, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"col-6 col-md-3 mb-2\">
                ";
        // line 74
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 74, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"col-6 col-md-2 text-right mb-2\">
                ";
        // line 78
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 78, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
        ";
        // line 82
        echo "        ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 82)) ? ("") : ("display: none;"));
        // line 83
        echo "        <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 83), "html", null, true);
        echo "Filters\" class=\"row align-items-center\" style=\"";
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 84));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 85
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 85);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </div>
        ";
        // line 89
        echo "        <div class=\"row\">
            ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 90), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 90), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 90);
        echo "
        </div>
    </div>
    ";
        // line 94
        echo "    <div class=\"table-responsive\">
        ";
        // line 95
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 95), "appSettings", [], "method", false, false, false, 95), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 95) == "small")) ? ("table-sm") : (""));
        // line 96
        echo "        <table class=\"table table-hover ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
            <thead>
                <tr>
                    ";
        // line 99
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 99)) > 0)) {
            // line 100
            echo "                        <th width=\"50\">
                            <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                <input class=\"form-check-input listActionCB\" type=\"checkbox\" />
                            </div>
                        </th>
                    ";
        }
        // line 106
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 107
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 107);
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 112));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 113
            echo "                    ";
            $context["trClass"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 113), "trClass", [0 => $context["model"]], "method", false, false, false, 113);
            // line 114
            echo "                    <tr class=\"clickableRow ";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 114), "html", null, true);
            echo "\">
                        <td class=\"cancelClickable\">
                            <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\" value=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 117), "html", null, true);
            echo "\" />
                            </div>
                        </td>
                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 121
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 121);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "                    <tr class=\"table-warning\">
                        <td colspan=\"";
            // line 126
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 126))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 126), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "            </tbody>
        </table>
    </div>
    ";
        // line 133
        echo "    <div class=\"text-center\">
        <div class=\"btn-group\">
            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 136
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 136)) {
                // line 137
                echo "                    <button type=\"button\" class=\"btn btn-light active\" onclick=\"listViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 137), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 137), "html", null, true);
                echo "');\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 137), "html", null, true);
                echo "</button>
                ";
            } else {
                // line 139
                echo "                    <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 139), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 139), "html", null, true);
                echo "');\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 139), "html", null, true);
                echo "</button>
                ";
            }
            // line 141
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "        </div>
    </div>
    <br/>
    ";
        // line 146
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 148
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 148), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 148), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 148);
        echo "
        </div>
    </div>
    ";
        // line 152
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 152)) {
            // line 153
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 153, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 155
        echo "</form>

";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 158));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 159
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 159), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 159)], "method", false, false, false, 159);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "
";
        // line 202
        echo "
";
        // line 238
        echo "
";
        // line 263
        echo "
";
        // line 278
        echo "
";
    }

    // line 163
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
            // line 164
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 164))) {
                // line 165
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 165);
                // line 166
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 166);
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
            ";
                // line 171
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 172
                    echo "                <button type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"sr-only\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 177
                        echo "                        ";
                        $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 177) == twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 177))) ? (" active") : (""));
                        // line 178
                        echo "                        ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 178))) ? ("fa-users") : ("fa-user"));
                        // line 179
                        echo "                        <a class=\"dropdown-item";
                        echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                        echo "\" href=\"#\" onclick=\"listViewSetLoadFilter('";
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 179), "html", null, true);
                        echo "');\">
                            <i class=\"fas ";
                        // line 180
                        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 180), "html", null, true);
                        echo "
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                </div>
            ";
                }
                // line 185
                echo "        </div>
        ";
                // line 186
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 186)) {
                    // line 187
                    echo "            <div class=\"btn-group ml-1\">
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"listViewSetLoadFilter('";
                    // line 188
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', '');\">
                    <i class=\"fas fa-times fa-fw\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-danger\" title=\"";
                    // line 191
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 191), "html", null, true);
                    echo "\" onclick=\"listViewSetAction('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', 'delete-filter');\">
                    <i class=\"fas fa-trash-alt fa-fw\"></i>
                </button>
            </div>
        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 195
($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 195)) {
                    // line 196
                    echo "            <button type=\"button\" class=\"btn btn-info ml-1\" data-toggle=\"modal\" data-target=\"#savefilter";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 196), "html", null, true);
                    echo "\">
                <i class=\"fas fa-save fa-fw\"></i>
            </button>
        ";
                }
                // line 200
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 203
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
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
            // line 204
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 204);
            // line 205
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 210), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 220), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\" autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 228), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"listViewSetAction('";
            // line 230
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 231), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 239
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
            // line 240
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 245), "options", [], "method", false, false, false, 245));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 246
                echo "                <a href=\"#\" class=\"dropdown-item\" onclick=\"listViewPrintAction('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 246), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 247
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 247), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 248)], "method", false, false, false, 248), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 251), "tools", [], "any", false, false, false, 251))) {
                // line 252
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 253), "tools", [], "method", false, false, false, 253));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 254
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 254), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 255
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 255), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 256
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 256)], "method", false, false, false, 256), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 259
                echo "            ";
            }
            // line 260
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 264
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
            // line 265
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 265))) {
                // line 266
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 268
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 268), "html", null, true);
                echo "\" autocomplete=\"off\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 268), "html", null, true);
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

    // line 279
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
            // line 280
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 280))) {
                // line 281
                echo "        <div class=\"form-group\">
            <div class=\"btn-group\">
                <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                    ";
                // line 284
                $context["icon"] = ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 284)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 284)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                // line 285
                echo "                    <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 286
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 286)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 286)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["label"] ?? null) : null), "html", null, true);
                echo "
                    <span class=\"caret\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 290
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 290));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 291
                    echo "                        ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 291) == $context["key"])) ? (" active") : (""));
                    // line 292
                    echo "                        ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 292) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                    // line 293
                    echo "                        <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\" onclick=\"listViewSetOrder('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 293), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                            <i class=\"";
                    // line 294
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 294), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 297
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
        return "Master/ListViewMin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  799 => 297,  788 => 294,  779 => 293,  776 => 292,  773 => 291,  769 => 290,  762 => 286,  757 => 285,  755 => 284,  750 => 281,  747 => 280,  734 => 279,  713 => 268,  709 => 266,  706 => 265,  692 => 264,  681 => 260,  678 => 259,  669 => 256,  665 => 255,  660 => 254,  656 => 253,  653 => 252,  650 => 251,  641 => 248,  637 => 247,  630 => 246,  626 => 245,  619 => 240,  604 => 239,  588 => 231,  584 => 230,  579 => 228,  568 => 220,  555 => 210,  546 => 205,  543 => 204,  529 => 203,  519 => 200,  509 => 196,  507 => 195,  498 => 191,  492 => 188,  489 => 187,  487 => 186,  484 => 185,  480 => 183,  469 => 180,  460 => 179,  457 => 178,  454 => 177,  450 => 176,  444 => 172,  442 => 171,  437 => 169,  433 => 168,  430 => 167,  427 => 166,  424 => 165,  421 => 164,  407 => 163,  402 => 278,  399 => 263,  396 => 238,  393 => 202,  390 => 161,  381 => 159,  377 => 158,  373 => 155,  367 => 153,  364 => 152,  358 => 148,  354 => 146,  349 => 142,  343 => 141,  333 => 139,  323 => 137,  320 => 136,  316 => 135,  312 => 133,  307 => 129,  296 => 126,  293 => 125,  287 => 123,  278 => 121,  274 => 120,  268 => 117,  259 => 114,  256 => 113,  251 => 112,  246 => 109,  237 => 107,  232 => 106,  224 => 100,  222 => 99,  215 => 96,  213 => 95,  210 => 94,  204 => 90,  201 => 89,  198 => 87,  189 => 85,  185 => 84,  178 => 83,  175 => 82,  168 => 78,  161 => 74,  154 => 70,  147 => 66,  142 => 64,  140 => 63,  134 => 60,  131 => 59,  129 => 58,  126 => 57,  118 => 53,  115 => 52,  112 => 51,  104 => 47,  96 => 43,  93 => 42,  91 => 41,  87 => 39,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListViewMin.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/ListViewMin.html.twig");
    }
}
