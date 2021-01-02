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

/* EditPageOption.html.twig */
class __TwigTemplate_19f98782237fe1224c7399bd10d74168b170a2c675fcd711d7f7b00f8f7dc4db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "EditPageOption.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function deleteOptions() {
            bootbox.confirm({
                title: \"";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27);
        echo "\",
                message: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 28), "html", null, true);
        echo "\",
                closeButton: false,
                buttons: {
                    cancel: {
                        label: \"<i class='fas fa-times'></i> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 32), "html", null, true);
        echo "\"
                    },
                    confirm: {
                        label: \"<i class='fas fa-check'></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 35), "html", null, true);
        echo "\",
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {
                        document.main_form.action.value = 'delete';
                        document.main_form.submit();
                    }
                }
            });
        }
    </script>
";
    }

    // line 50
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <!-- Visual macros -->
    ";
        // line 52
        $macros["__internal_d96df01267e8a1a0f9392c60823c74ca63ef25d33e836f65c46815baf32d7ddd"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 52)->unwrap();
        // line 53
        echo "
    <!-- Main Body -->
    <div class=\"container-fluid\">
        ";
        // line 56
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <!-- Header Row -->
        <div class=\"row\">
            <div class=\"col-4 d-print-none\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "backPage", [], "any", false, false, false, 61), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "back"], "method", false, false, false, 63), "html", null, true);
        echo " </span>
                    </a>
                    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 65) . "?code=") . twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 65)), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 65), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>
            <div class=\"col-7 text-right\">
                <h1 class=\"h4\">
                    ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 72), "html", null, true);
        echo "<br/>
                    <small class=\"text-info\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 73), "html", null, true);
        echo "</small>
                </h1>
            </div>
            <div class=\"col-1 text-center\">
                <i class=\"";
        // line 77
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 77)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["icon"] ?? null) : null), "html", null, true);
        echo " fa-3x\" aria-hidden=\"true\"></i>
            </div>
        </div>
        <!-- Data Row -->
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <span class=\"card-title\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "configure-columns"], "method", false, false, false, 85), "html", null, true);
        echo "</span>
                        ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 86), "admin", [], "any", false, false, false, 86)) {
            // line 87
            echo "                            <div class=\"float-right text-danger\">
                                <form action=\"#\" method=\"post\" class=\"form-inline\" role=\"form\" name=\"select_user\">
                                    <input type=\"hidden\" name=\"code\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 89), "html", null, true);
            echo "\"/>
                                    <label>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-user"], "method", false, false, false, 90), "html", null, true);
            echo "</label>
                                    &nbsp;&nbsp;
                                    ";
            // line 92
            $context["userList"] = twig_array_merge(["" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 92)], twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getUserList", [], "method", false, false, false, 92));
            // line 93
            echo "                                    ";
            echo twig_call_macro($macros["__internal_d96df01267e8a1a0f9392c60823c74ca63ef25d33e836f65c46815baf32d7ddd"], "macro_simpleSelect", ["nick", "nick", twig_get_attribute($this->env, $this->source,             // line 96
($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 96),             // line 97
($context["userList"] ?? null), false, false, ["class" => "text-danger bg-white", "onChange" => "this.form.submit()"]], 93, $context, $this->getSourceContext());
            // line 101
            echo "
                                </form>
                            </div>
                        ";
        }
        // line 105
        echo "                    </div>
                    <form action=\"#\" method=\"post\" class=\"form\" role=\"form\" name=\"main_form\">
                        <input type=\"hidden\" name=\"action\" value=\"save\"/>
                        <input type=\"hidden\" name=\"code\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedViewName", [], "any", false, false, false, 108), "html", null, true);
        echo "\"/>
                        <input type=\"hidden\" name=\"nick\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "selectedUser", [], "any", false, false, false, 109), "html", null, true);
        echo "\"/>
                        <div class=\"card-body\">
                            <!-- Main Form -->
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 112), "columns", [], "any", false, false, false, 112));
        foreach ($context['_seq'] as $context["key1"] => $context["group"]) {
            // line 113
            echo "                                ";
            echo twig_call_macro($macros["_self"], "macro_editGroup", [$context["key1"], $context["group"], ($context["i18n"] ?? null), ($context["fsc"] ?? null)], 113, $context, $this->getSourceContext());
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key1'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        </div>
                        <div class=\"card-footer\">
                            <div class=\"row\">
                                ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "model", [], "any", false, false, false, 118), "exists", [], "method", false, false, false, 118)) {
            // line 119
            echo "                                    <div class=\"col\">
                                        <button class=\"btn btn-sm btn btn-danger\" type=\"button\" onclick=\"deleteOptions();\">
                                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i> ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 121), "html", null, true);
            echo "
                                        </button>
                                    </div>
                                ";
        }
        // line 125
        echo "                                <div class=\"col text-right\">
                                    <button class=\"btn btn-sm btn btn-secondary\" type=\"reset\">
                                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i> ";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 127), "html", null, true);
        echo "
                                    </button>
                                    <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 130), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 142
    public function macro_editGroup($__key1__ = null, $__group__ = null, $__i18n__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key1" => $__key1__,
            "group" => $__group__,
            "i18n" => $__i18n__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 143
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "title", [], "any", false, false, false, 143))) {
                // line 144
                echo "        <h4 class=\"text-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "title", [], "any", false, false, false, 144)], "method", false, false, false, 144), "html", null, true);
                echo "</h4>
    ";
            }
            // line 146
            echo "    ";
            $context["titleUrlColumn"] = 5;
            // line 147
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th class=\"d-inline-block col-3\">
                        ";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title"], "method", false, false, false, 152), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-2\">
                        ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "display"], "method", false, false, false, 155), "html", null, true);
            echo "
                    </th>
                    ";
            // line 157
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 157), "admin", [], "any", false, false, false, 157)) {
                // line 158
                echo "                        ";
                $context["titleUrlColumn"] = 3;
                // line 159
                echo "                        <th class=\"d-inline-block col-1\">
                            ";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "level"], "method", false, false, false, 160), "html", null, true);
                echo "
                        </th>
                        <th class=\"d-inline-block col-1\">
                            ";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "readonly"], "method", false, false, false, 163), "html", null, true);
                echo "
                        </th>
                    ";
            }
            // line 166
            echo "                    <th class=\"d-inline-block col-1\">
                        ";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "width"], "method", false, false, false, 167), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-";
            // line 169
            echo twig_escape_filter($this->env, ($context["titleUrlColumn"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "title-url"], "method", false, false, false, 170), "html", null, true);
            echo "
                    </th>
                    <th class=\"d-inline-block col-1\">
                        ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "sort"], "method", false, false, false, 173), "html", null, true);
            echo "
                    </th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["group"] ?? null), "children", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["key2"] => $context["field"]) {
                // line 179
                echo "                    ";
                echo twig_call_macro($macros["_self"], "macro_editColumn", [($context["key1"] ?? null), $context["key2"], $context["field"], ($context["titleUrlColumn"] ?? null), ($context["i18n"] ?? null), ($context["fsc"] ?? null)], 179, $context, $this->getSourceContext());
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key2'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 186
    public function macro_editColumn($__key1__ = null, $__key2__ = null, $__field__ = null, $__titleUrlColumn__ = null, $__i18n__ = null, $__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "key1" => $__key1__,
            "key2" => $__key2__,
            "field" => $__field__,
            "titleUrlColumn" => $__titleUrlColumn__,
            "i18n" => $__i18n__,
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 187
            echo "    ";
            $macros["__internal_acaff63a87a5edbb2d8518b100471f43c25fddbfaef7fea2fb9a89d21736f753"] = $this->loadTemplate("Macro/Forms.html.twig", "EditPageOption.html.twig", 187)->unwrap();
            // line 188
            echo "    ";
            $context["masterName"] = (((($context["key1"] ?? null) . "+") . ($context["key2"] ?? null)) . "+");
            // line 189
            echo "    <tr>
        <td class=\"d-inline-block col-3\">
            ";
            // line 191
            echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 191))) ? (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, false, 191)], "method", false, false, false, 191)) : (twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, false, 191)], "method", false, false, false, 191))), "html", null, true);
            echo "
        </td>
        <td class=\"d-inline-block col-2\">
            ";
            // line 194
            echo twig_call_macro($macros["__internal_acaff63a87a5edbb2d8518b100471f43c25fddbfaef7fea2fb9a89d21736f753"], "macro_simpleSelect", [(            // line 195
($context["masterName"] ?? null) . "display"), (            // line 196
($context["masterName"] ?? null) . "display"), twig_get_attribute($this->env, $this->source,             // line 197
($context["field"] ?? null), "display", [], "any", false, false, false, 197), ["left" => twig_get_attribute($this->env, $this->source,             // line 198
($context["i18n"] ?? null), "trans", [0 => "left"], "method", false, false, false, 198), "right" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "right"], "method", false, false, false, 198), "center" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "center"], "method", false, false, false, 198), "none" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "none"], "method", false, false, false, 198)], false, false, []], 194, $context, $this->getSourceContext());
            // line 202
            echo "
        </td>
        ";
            // line 204
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 204), "admin", [], "any", false, false, false, 204)) {
                // line 205
                echo "            <td class=\"d-inline-block col-1\">
                <input type=\"number\" class=\"form-control\" name=\"";
                // line 206
                echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "level"), "html", null, true);
                echo "\" min=\"0\" max=\"99\" step=\"1\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "level", [], "any", false, false, false, 206), "html", null, true);
                echo "\"/>
            </td>
            <td class=\"d-inline-block col-1\">
                ";
                // line 209
                echo twig_call_macro($macros["__internal_acaff63a87a5edbb2d8518b100471f43c25fddbfaef7fea2fb9a89d21736f753"], "macro_simpleSelect", [(((                // line 210
($context["masterName"] ?? null) . "widget") . "+") . "readonly"), (((                // line 211
($context["masterName"] ?? null) . "widget") . "+") . "readonly"), twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                 // line 212
($context["field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["children"] ?? null) : null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "readonly", [], "any", false, false, false, 212), ["true" => twig_get_attribute($this->env, $this->source,                 // line 213
($context["i18n"] ?? null), "trans", [0 => "yes"], "method", false, false, false, 213), "false" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no"], "method", false, false, false, 213), "dinamic" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 213)], false, false, []], 209, $context, $this->getSourceContext());
                // line 217
                echo "
            </td>
        ";
            }
            // line 220
            echo "        <td class=\"d-inline-block col-1\">
            ";
            // line 221
            echo twig_call_macro($macros["__internal_acaff63a87a5edbb2d8518b100471f43c25fddbfaef7fea2fb9a89d21736f753"], "macro_simpleSelect", [(            // line 222
($context["masterName"] ?? null) . "numcolumns"), (            // line 223
($context["masterName"] ?? null) . "numcolumns"), twig_get_attribute($this->env, $this->source,             // line 224
($context["field"] ?? null), "numcolumns", [], "any", false, false, false, 224), ["0" => twig_get_attribute($this->env, $this->source,             // line 225
($context["i18n"] ?? null), "trans", [0 => "auto"], "method", false, false, false, 225), "1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5", "6" => "6", "7" => "7", "8" => "8", "9" => "9", "10" => "10", "11" => "11", "12" => "12"], false, false, []], 221, $context, $this->getSourceContext());
            // line 229
            echo "
        </td>
        <td class=\"d-inline-block col-";
            // line 231
            echo twig_escape_filter($this->env, ($context["titleUrlColumn"] ?? null), "html", null, true);
            echo "\">
            <input type=\"text\" class=\"form-control\" name=\"";
            // line 232
            echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "titleurl"), "html", null, true);
            echo "\" placeholder=\"http://\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "titleurl", [], "any", false, false, false, 232), "html", null, true);
            echo "\"/>
        </td>
        <td class=\"d-inline-block col-1\">
            <input type=\"number\" class=\"form-control\" name=\"";
            // line 235
            echo twig_escape_filter($this->env, (($context["masterName"] ?? null) . "order"), "html", null, true);
            echo "\" placeholder=\"Auto\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "order", [], "any", false, false, false, 235), "html", null, true);
            echo "\"/>
        </td>
    </tr>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "EditPageOption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 235,  466 => 232,  462 => 231,  458 => 229,  456 => 225,  455 => 224,  454 => 223,  453 => 222,  452 => 221,  449 => 220,  444 => 217,  442 => 213,  441 => 212,  440 => 211,  439 => 210,  438 => 209,  430 => 206,  427 => 205,  425 => 204,  421 => 202,  419 => 198,  418 => 197,  417 => 196,  416 => 195,  415 => 194,  409 => 191,  405 => 189,  402 => 188,  399 => 187,  381 => 186,  369 => 181,  360 => 179,  356 => 178,  348 => 173,  342 => 170,  338 => 169,  333 => 167,  330 => 166,  324 => 163,  318 => 160,  315 => 159,  312 => 158,  310 => 157,  305 => 155,  299 => 152,  292 => 147,  289 => 146,  283 => 144,  280 => 143,  264 => 142,  249 => 130,  243 => 127,  239 => 125,  232 => 121,  228 => 119,  226 => 118,  221 => 115,  212 => 113,  208 => 112,  202 => 109,  198 => 108,  193 => 105,  187 => 101,  185 => 97,  184 => 96,  182 => 93,  180 => 92,  175 => 90,  171 => 89,  167 => 87,  165 => 86,  161 => 85,  150 => 77,  143 => 73,  139 => 72,  127 => 65,  122 => 63,  117 => 61,  109 => 56,  104 => 53,  102 => 52,  99 => 51,  95 => 50,  77 => 35,  71 => 32,  64 => 28,  60 => 27,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "EditPageOption.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/EditPageOption.html.twig");
    }
}
