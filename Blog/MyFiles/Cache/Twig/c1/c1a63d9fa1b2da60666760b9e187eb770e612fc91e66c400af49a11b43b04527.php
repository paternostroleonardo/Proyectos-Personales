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

/* Master/PanelController.html.twig */
class __TwigTemplate_d03abb710aa5fabe8dd87d5555bb17e1542827caf6314f75087c3bd5551ac5c4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/PanelController.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 24
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        echo "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 40
        echo "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", [0 => "list"], "method", false, false, false, 41), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)], "method", false, false, false, 41), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 44), "primaryDescription", [], "method", false, false, false, 44);
        echo "
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 52
        echo "            <div class=\"col-md-4 col-6 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 54), "url", [0 => "list"], "method", false, false, false, 54), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 56), "html", null, true);
        echo "</span>
                    </a>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", [0 => "edit"], "method", false, false, false, 58), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 58), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 63
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 63, $context, $this->getSourceContext());
        echo "
            </div>
            ";
        // line 66
        echo "            <div class=\"col-md-3 col-6 text-center\">
                ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 67) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 67), "btnNew", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 68), "url", [0 => "new"], "method", false, false, false, 68), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 70), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 73
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 73)) {
            // line 74
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 74, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 76
        echo "            </div>
            ";
        // line 78
        echo "            <div class=\"col-md-4 text-right\">
                <h1 class=\"h4 d-none d-md-inline-block\">
                    ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 80)], "method", false, false, false, 80), "html", null, true);
        echo "<br/>
                    ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 81)) {
            // line 82
            echo "                        <small class=\"text-info\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 82), "primaryDescription", [], "method", false, false, false, 82);
            echo "</small>
                    ";
        } else {
            // line 84
            echo "                        <small class=\"text-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 84), "html", null, true);
            echo "</small>
                    ";
        }
        // line 86
        echo "                </h1>
            </div>
            ";
        // line 89
        echo "            <div class=\"col-md-1 text-center\">
                <div class=\"d-none d-md-inline-block\">
                    ";
        // line 91
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 91);
        // line 92
        echo "                    ";
        if (twig_test_empty(($context["image"] ?? null))) {
            // line 93
            echo "                        <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 93), "html", null, true);
            echo " fa-3x\" aria-hidden=\"true\"></i>
                    ";
        } else {
            // line 95
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 95), "html", null, true);
            echo "\" class=\"img-thumbnail\" style=\"margin-bottom: 10px;\"/>
                    ";
        }
        // line 97
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 103
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 104));
        // line 105
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 108
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 108)) > 1)) {
            // line 109
            echo "                <div class=\"col-lg-2 d-none d-lg-inline-block\">
                    <div class=\"nav flex-column nav-pills\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 112
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 112))) ? (" active") : (""));
                // line 113
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 113), "active", [], "any", false, false, false, 113)) ? ("") : (" disabled"));
                // line 114
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab\" data-toggle=\"pill\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 115
                if (((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 115) >= 1) && ($context["viewName"] != twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 115)))) {
                    // line 116
                    echo "                                    <span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 116), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 118
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 118), "html", null, true);
                echo " fa-fw d-none d-xl-inline-block\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 118), "html", null, true);
                echo "
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                    </div>
                </div>
            ";
        }
        // line 124
        echo "            ";
        // line 125
        echo "            ";
        $context["rightPanelClass"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 125)) > 1)) ? ("col-lg-10") : ("col"));
        // line 126
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["rightPanelClass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 128
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 128)) > 1)) {
            // line 129
            echo "                    <div class=\"nav nav-tabs d-lg-none\" role=\"tablist\">
                        ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 131
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 131))) ? (" active") : (""));
                // line 132
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 132), "active", [], "any", false, false, false, 132)) ? ("") : (" disabled"));
                // line 133
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab2\" data-toggle=\"pill\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 134
                if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 134) > 1)) {
                    echo "<span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 134), "html", null, true);
                    echo "</span>";
                }
                // line 135
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 135), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </div>
                ";
        }
        // line 140
        echo "                ";
        // line 141
        echo "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 142));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 143
            echo "                        ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 143))) ? (" show active") : (""));
            // line 144
            echo "                        <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "-tab\">
                            ";
            // line 145
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 145);
            // line 146
            echo "                            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 146));
            echo "
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 155
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 156
            echo "    <div class=\"btn-group\">
        <div class=\"dropdown\">
            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 160), "html", null, true);
            echo "</span>
            </button>
            <div class=\"dropdown-menu\">
                ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 164
                echo "                    <a class=\"dropdown-item\" href=\"EditPageOption?code=";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "&url=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 164), "url", [], "method", false, false, false, 164)), "html", null, true);
                echo "\">
                        <i class=\"";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 165), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 165), "html", null, true);
                echo "
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 173
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 174
            echo "    <div class=\"btn-group\">
        <a href=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 175), "url", [], "method", false, false, false, 175), "html", null, true);
            echo "&action=export&option=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 175), "defaultOption", [], "method", false, false, false, 175), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-sm btn-light\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "print"], "method", false, false, false, 177), "html", null, true);
            echo "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-light dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more"], "method", false, false, false, 180), "html", null, true);
            echo "</span>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 183
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 183), "options", [], "method", false, false, false, 183));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 184
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 184), "url", [], "method", false, false, false, 184), "html", null, true);
                echo "&action=export&option=";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"dropdown-item\">
                    <i class=\"";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 185), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 186)], "method", false, false, false, 186), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 189), "tools", [], "any", false, false, false, 189))) {
                // line 190
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 191), "tools", [], "method", false, false, false, 191));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 192
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 192), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 193
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 193), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 194)], "method", false, false, false, 194), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 197
                echo "            ";
            }
            // line 198
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/PanelController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 198,  559 => 197,  550 => 194,  546 => 193,  541 => 192,  537 => 191,  534 => 190,  531 => 189,  522 => 186,  518 => 185,  511 => 184,  507 => 183,  501 => 180,  495 => 177,  488 => 175,  485 => 174,  470 => 173,  458 => 168,  447 => 165,  440 => 164,  436 => 163,  430 => 160,  424 => 156,  409 => 155,  401 => 149,  383 => 146,  381 => 145,  372 => 144,  369 => 143,  352 => 142,  349 => 141,  347 => 140,  343 => 138,  333 => 135,  327 => 134,  315 => 133,  312 => 132,  309 => 131,  305 => 130,  302 => 129,  299 => 128,  294 => 126,  291 => 125,  289 => 124,  284 => 121,  272 => 118,  266 => 116,  264 => 115,  252 => 114,  249 => 113,  246 => 112,  242 => 111,  238 => 109,  235 => 108,  231 => 105,  228 => 104,  224 => 103,  216 => 97,  208 => 95,  202 => 93,  199 => 92,  197 => 91,  193 => 89,  189 => 86,  183 => 84,  177 => 82,  175 => 81,  171 => 80,  167 => 78,  164 => 76,  158 => 74,  155 => 73,  149 => 70,  143 => 68,  141 => 67,  138 => 66,  132 => 63,  123 => 58,  118 => 56,  113 => 54,  109 => 52,  99 => 44,  91 => 41,  88 => 40,  82 => 37,  79 => 36,  77 => 35,  72 => 33,  67 => 30,  62 => 26,  59 => 25,  57 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelController.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/PanelController.html.twig");
    }
}
