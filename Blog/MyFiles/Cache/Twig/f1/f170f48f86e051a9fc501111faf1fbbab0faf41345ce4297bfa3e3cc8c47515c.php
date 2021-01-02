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

/* AdminPlugins.html.twig */
class __TwigTemplate_8fd8af7f5adf3ee1b1b8cec11de3b0ee83f34b5daa28c23f0bc5ec046b69e749 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid mb-2\">
        ";
        // line 24
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group d-xs-none\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 28), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 28), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 31
        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 31)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 31), "homepage", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 32), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 36
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 36), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 36), "html", null, true);
            echo "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 40
        echo "                </div>
                ";
        // line 41
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 42
            echo "                    <button class=\"btn btn-sm btn-success\" type=\"button\" data-toggle=\"modal\" data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 44), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 47
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
        echo "?action=rebuild\" class=\"btn btn-sm btn-outline-warning\">
                    <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rebuild"], "method", false, false, false, 49), "html", null, true);
        echo "</span>
                </a>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 54
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 54)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null)], "method", false, false, false, 54));
        // line 55
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 55)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>

    ";
        // line 61
        $context["allPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAllPlugins", [], "method", false, false, false, 61);
        // line 62
        echo "    ";
        $context["installedPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPlugins", [], "method", false, false, false, 62);
        // line 63
        echo "
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed-plugins"], "method", false, false, false, 67), "html", null, true);
        echo "
                ";
        // line 68
        if ((twig_length_filter($this->env, ($context["installedPlugins"] ?? null)) > 0)) {
            // line 69
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), "html", null, true);
            echo "</span>
                ";
        }
        // line 71
        echo "            </a>
        </li>
        ";
        // line 73
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 74
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more-plugins"], "method", false, false, false, 77), "html", null, true);
            echo "</span>
                    ";
            // line 78
            if ((twig_length_filter($this->env, ($context["allPlugins"] ?? null)) > 0)) {
                // line 79
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["allPlugins"] ?? null)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 81
            echo "                </a>
            </li>
        ";
        }
        // line 84
        echo "    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["installedPlugins"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 89
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 90
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 91
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allPlugins"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 94
        echo "    </div>

    ";
        // line 97
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 98
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 98), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"upload\" />
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add-new-plugin"], "method", false, false, false, 104), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 105), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"plugin\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-plugin-zip-file"], "method", false, false, false, 111), "html", null, true);
            echo "</label>
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required=\"\"/>
                                <small class=\"form-text text-muted\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 113)]], "method", false, false, false, 113), "html", null, true);
            echo "</small>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 117), "html", null, true);
            echo "</button>
                            <button type=\"submit\" class=\"btn btn-primary\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 118), "html", null, true);
            echo "</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 129
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 130
            echo "        <script type=\"text/javascript\">
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 133
            echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 133);
            echo "\",
                    message: \"";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 134), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 138), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 141), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            window.location = \"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 147), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName;
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 156
    public function macro_showAllPlugins($__fsc__ = null, $__i18n__ = null, $__allPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allPlugins" => $__allPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 157
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 161), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 162), "html", null, true);
            echo "</th>
                    <th>";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 163), "html", null, true);
            echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 169
                echo "                    ";
                $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 169) >= 1)) ? ("table-info") : ((((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 169) == 0)) ? ("table-danger") : ("table-warning"))));
                // line 170
                echo "                    <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 170), "html", null, true);
                echo "\" data-target=\"_blank\">
                        <td>";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 171), "html", null, true);
                echo "</td>
                        <td class=\"text-right\">v";
                // line 172
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 172), "html", null, true);
                echo "</td>
                        <td>";
                // line 173
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 173), "html", null, true));
                echo "</td>
                        <td class=\"text-center\">
                            ";
                // line 175
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "installed", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i>
                                ";
                    // line 177
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed"], "method", false, false, false, 177), "html", null, true);
                    echo "
                            ";
                }
                // line 179
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 182
                echo "                    <tr class=\"table-warning\">
                        <td colspan=\"4\"><b>";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 183), "html", null, true);
                echo "</b></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 191
    public function macro_showInstalledPlugins($__fsc__ = null, $__i18n__ = null, $__installedPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "installedPlugins" => $__installedPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 192
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 196), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 197), "html", null, true);
            echo "</th>
                    <th>";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 198), "html", null, true);
            echo "</th>
                    <th></th>
                    <th class=\"text-center\">";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 200), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installedPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 205
                echo "                    ";
                $context["trClass"] = " class=\"table-danger\"";
                // line 206
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 206)) {
                    // line 207
                    echo "                        ";
                    $context["trClass"] = " class=\"table-success\"";
                    // line 208
                    echo "                    ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 208)) {
                    // line 209
                    echo "                        ";
                    $context["trClass"] = "";
                    // line 210
                    echo "                    ";
                }
                // line 211
                echo "                    <tr";
                echo ($context["trClass"] ?? null);
                echo ">
                        <td>";
                // line 212
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 212), "html", null, true);
                echo "</td>
                        ";
                // line 213
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 213) == 0)) {
                    // line 214
                    echo "                            <td class=\"text-right text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 214), "html", null, true);
                    echo "</td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 215
$context["plugin"], "version", [], "any", false, false, false, 215) < 1)) {
                    // line 216
                    echo "                            <td class=\"text-right text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 216), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 218
                    echo "                            <td class=\"text-right\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 218), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 220
                echo "                        <td>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 220), "html", null, true));
                echo "</td>
                        ";
                // line 221
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "                            <td></td>
                            <td>
                                <a class=\"btn btn-block btn-sm btn-secondary\" href=\"";
                    // line 224
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 224), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 224), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                    // line 226
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "disable"], "method", false, false, false, 226), "html", null, true);
                    echo "</span>
                                </a>
                            </td>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 229
$context["plugin"], "compatible", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "                            <td>
                                ";
                    // line 231
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 232
                        echo "                                    <a class=\"btn btn-block btn-sm btn-danger\" href=\"#\" onclick=\"deletePlugin('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 232), "html", null, true);
                        echo "')\">
                                        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">";
                        // line 234
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 234), "html", null, true);
                        echo "</span>
                                    </a>
                                ";
                    }
                    // line 237
                    echo "                            </td>
                            <td>
                                <a class=\"btn btn-block btn-sm btn-success\" href=\"";
                    // line 239
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 239), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 239), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                    // line 241
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "enable"], "method", false, false, false, 241), "html", null, true);
                    echo "</span>
                                </a>
                            </td>
                        ";
                } else {
                    // line 245
                    echo "                            <td colspan=\"2\"></td>
                        ";
                }
                // line 247
                echo "                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 249
                echo "                    <tr class=\"table-warning\">
                        <td colspan=\"5\"><b>";
                // line 250
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 250), "html", null, true);
                echo "</b></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 253,  593 => 250,  590 => 249,  584 => 247,  580 => 245,  573 => 241,  566 => 239,  562 => 237,  556 => 234,  550 => 232,  548 => 231,  545 => 230,  543 => 229,  537 => 226,  530 => 224,  526 => 222,  524 => 221,  519 => 220,  513 => 218,  507 => 216,  505 => 215,  500 => 214,  498 => 213,  494 => 212,  489 => 211,  486 => 210,  483 => 209,  480 => 208,  477 => 207,  474 => 206,  471 => 205,  466 => 204,  459 => 200,  454 => 198,  450 => 197,  446 => 196,  440 => 192,  425 => 191,  413 => 186,  404 => 183,  401 => 182,  394 => 179,  389 => 177,  386 => 176,  384 => 175,  379 => 173,  375 => 172,  371 => 171,  364 => 170,  361 => 169,  356 => 168,  348 => 163,  344 => 162,  340 => 161,  334 => 157,  319 => 156,  307 => 147,  298 => 141,  292 => 138,  285 => 134,  281 => 133,  276 => 130,  274 => 129,  269 => 128,  265 => 127,  253 => 118,  249 => 117,  242 => 113,  237 => 111,  228 => 105,  224 => 104,  214 => 98,  211 => 97,  207 => 94,  201 => 91,  198 => 90,  196 => 89,  191 => 87,  186 => 84,  181 => 81,  175 => 79,  173 => 78,  169 => 77,  164 => 74,  162 => 73,  158 => 71,  152 => 69,  150 => 68,  146 => 67,  140 => 63,  137 => 62,  135 => 61,  123 => 55,  121 => 54,  113 => 49,  107 => 47,  101 => 44,  97 => 42,  95 => 41,  92 => 40,  82 => 36,  72 => 32,  70 => 31,  62 => 28,  55 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/AdminPlugins.html.twig");
    }
}
