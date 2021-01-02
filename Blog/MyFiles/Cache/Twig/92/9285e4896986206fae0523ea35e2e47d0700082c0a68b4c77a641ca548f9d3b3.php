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

/* Master/ListController.html.twig */
class __TwigTemplate_79cb120ae120488810938d59570041b35dde31138bd9bd8211d715d54793225e extends \Twig\Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/ListController.html.twig", 20);
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
        echo "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 29
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 34)) {
            // line 35
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 39
        echo "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 43), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 43), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "name", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 46), "homepage", [], "any", false, false, false, 46))) {
            // line 47
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 47), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 51
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 51), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 51), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 55
        echo "                </div>
                ";
        // line 57
        echo "                <div class=\"btn-group\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 60), "html", null, true);
        echo "
                        </button>
                        <div class=\"dropdown-menu\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 64
            echo "                            <a class=\"dropdown-item\" href=\"EditPageOption?code=";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "model", [], "any", false, false, false, 64), "url", [], "method", false, false, false, 64)), "html", null, true);
            echo "\">
                                <i class=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 65), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "
                            </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 text-right\">
                <h1 class=\"h3 d-none d-md-inline-block\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 74), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 74), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
                <br class=\"d-md-none\"/>
            </div>
        </div>
    </div>
";
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 85
        echo "    <ul class=\"nav nav-tabs mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 87
            echo "            <li class=\"nav-item\">
                ";
            // line 88
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 88))) ? (" active") : (""));
            // line 89
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                    <i class=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 90), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 91), "html", null, true);
            echo "</span>
                    ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 92) > 0)) {
                echo "<span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 92), "numbers", [], "method", false, false, false, 92), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 92), 1 => 0], "method", false, false, false, 92), "html", null, true);
                echo "</span>";
            }
            // line 93
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    </ul>
    <div class=\"tab-content\" id=\"mainTabsContent\">
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 98));
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
            // line 99
            echo "            ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 99))) ? (" show active") : (""));
            // line 100
            echo "            <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 101
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 101);
            // line 102
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 102));
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
        // line 105
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/ListController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 105,  264 => 102,  262 => 101,  255 => 100,  252 => 99,  235 => 98,  231 => 96,  223 => 93,  217 => 92,  213 => 91,  209 => 90,  200 => 89,  198 => 88,  195 => 87,  191 => 86,  188 => 85,  183 => 83,  179 => 82,  166 => 74,  158 => 68,  147 => 65,  140 => 64,  136 => 63,  130 => 60,  125 => 57,  122 => 55,  112 => 51,  102 => 47,  100 => 46,  92 => 43,  84 => 39,  78 => 36,  75 => 35,  73 => 34,  68 => 32,  63 => 29,  58 => 25,  56 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListController.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/ListController.html.twig");
    }
}
