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

/* Master/EditListView.html.twig */
class __TwigTemplate_1c08fbce877e18b090bbe3fa1e2940c7cf74692a5286f56961f764ec22bed3b2 extends \Twig\Template
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
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    var editListViewDeleteCancel = \"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 23), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 26), "html", null, true);
        echo "\";
</script>

";
        // line 30
        echo "<div class=\"row\">
    ";
        // line 31
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 31);
        // line 32
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 32);
        echo "
</div>

";
        // line 36
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 36), "btnNew", [], "any", false, false, false, 36)) {
            // line 37
            echo "    ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 37)) . "New");
            // line 38
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"action\" value=\"insert\"/>
        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 40), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 41), "newToken", [], "method", false, false, false, 41), "html", null, true);
            echo "\"/>
        <div class=\"card bg-light mb-2\">
            <div class=\"card-header\">
                <button class=\"btn btn-outline-success\" type=\"button\" data-toggle=\"collapse\" data-target=\"#";
            // line 44
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 46), "html", null, true);
            echo "
                </button>
                &nbsp;
                ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 49)], "method", false, false, false, 49), "html", null, true);
            echo "
            </div>
            <div class=\"collapse\" id=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                <div class=\"card-body\">
                    <div class=\"row\">
                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 55
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 55)], "method", false, false, false, 55);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    </div>
                    <div class=\"row\">
                        <div class=\"col-12 text-right\">
                            <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 62), "html", null, true);
            echo "</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
        }
        // line 71
        echo "
";
        // line 73
        echo "<div>
    ";
        // line 74
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 74);
        // line 75
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 75);
        echo "
</div>

";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 80
            echo "    ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 80)) . $context["counter"]);
            // line 81
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"action\" value=\"edit\"/>
        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 83), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"code\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 84), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 85), "newToken", [], "method", false, false, false, 85), "html", null, true);
            echo "\"/>
        <div class=\"card mb-2\">
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 90
                echo "                        ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => $context["model"]], "method", false, false, false, 90);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                </div>
                <div class=\"row\">
                    ";
            // line 94
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 94), "btnDelete", [], "any", false, false, false, 94)) {
                // line 95
                echo "                        <div class=\"col\">
                            <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"editListViewDelete('";
                // line 96
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 96) . $context["counter"]), "html", null, true);
                echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 98), "html", null, true);
                echo "</span>
                            </button>
                        </div>
                    ";
            }
            // line 102
            echo "                    <div class=\"col\">
                        ";
            // line 104
            echo "                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 104);
            // line 105
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 105) . $context["counter"])], "method", false, false, false, 105);
            echo "
                    </div>
                    <div class=\"col text-right\">
                        ";
            // line 108
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 108), "btnUndo", [], "any", false, false, false, 108)) {
                // line 109
                echo "                            <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 111), "html", null, true);
                echo "</span>
                            </button>
                        ";
            }
            // line 114
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 114), "btnSave", [], "any", false, false, false, 114)) {
                // line 115
                echo "                            <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 117), "html", null, true);
                echo "</span>
                            </button>
                        ";
            }
            // line 120
            echo "                    </div>
                </div>
            </div>
        </div>
    </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
<br/>

";
        // line 130
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 130)) > 0)) {
            // line 131
            echo "    ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 131)) . "Offset");
            // line 132
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 133), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"offset\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 134), "html", null, true);
            echo "\"/>
        <div class=\"text-center\">
            <div class=\"btn-group\">
                ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 138
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 138)) {
                    // line 139
                    echo "                        <button type=\"button\" class=\"btn btn-light active\" onclick=\"editListViewSetOffset('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 139), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 139), "html", null, true);
                    echo "');\">
                            ";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 140), "html", null, true);
                    echo "
                        </button>
                    ";
                } else {
                    // line 143
                    echo "                        <button type=\"button\" class=\"btn btn-light\" onclick=\"editListViewSetOffset('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 143), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 143), "html", null, true);
                    echo "');\">
                            ";
                    // line 144
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 144), "html", null, true);
                    echo "
                        </button>
                    ";
                }
                // line 147
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "            </div>
        </div>
    </form>
    <br/>
";
        }
        // line 153
        echo "
";
        // line 155
        echo "<div class=\"row\">
    ";
        // line 156
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 156);
        // line 157
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 157), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 157);
        echo "
</div>

";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 161));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 162
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 162), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 162)], "method", false, false, false, 162);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 162,  360 => 161,  353 => 157,  351 => 156,  348 => 155,  345 => 153,  338 => 148,  332 => 147,  326 => 144,  319 => 143,  313 => 140,  306 => 139,  303 => 138,  299 => 137,  293 => 134,  289 => 133,  284 => 132,  281 => 131,  279 => 130,  274 => 126,  263 => 120,  257 => 117,  253 => 115,  250 => 114,  244 => 111,  240 => 109,  238 => 108,  231 => 105,  228 => 104,  225 => 102,  218 => 98,  213 => 96,  210 => 95,  208 => 94,  204 => 92,  195 => 90,  191 => 89,  184 => 85,  180 => 84,  176 => 83,  170 => 81,  167 => 80,  163 => 79,  156 => 75,  154 => 74,  151 => 73,  148 => 71,  136 => 62,  129 => 57,  120 => 55,  116 => 54,  110 => 51,  105 => 49,  99 => 46,  94 => 44,  88 => 41,  84 => 40,  78 => 38,  75 => 37,  73 => 36,  66 => 32,  64 => 31,  61 => 30,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListView.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/EditListView.html.twig");
    }
}
