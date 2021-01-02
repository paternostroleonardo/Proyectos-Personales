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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_4d9d6093bffc3469eac292aece8c8391cada645af63a0e8475e6797d4dd4d001 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 23));
        // line 24
        echo "    ";
        $context["firstViewName"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 24);
        // line 25
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 28
        twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => ($context["firstViewName"] ?? null)], "method", false, false, false, 28);
        // line 29
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 29));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 34
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 34)) > 2)) {
            // line 35
            echo "                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 36));
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
                // line 37
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 37), "active", [], "any", false, false, false, 37) && ($context["viewName"] != ($context["firstViewName"] ?? null)))) {
                    // line 38
                    echo "                                <li class=\"nav-item\">
                                    ";
                    // line 39
                    $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 39)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 39) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 39) == 2)))) ? (" active") : (""));
                    // line 40
                    echo "                                    <a href=\"#";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\" class=\"nav-link";
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\">
                                        <i class=\"";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 42), "html", null, true);
                    echo "</span>
                                        ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 43) > 0)) {
                        // line 44
                        echo "                                            <span class=\"badge badge-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 44), "numbers", [], "method", false, false, false, 44), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 44), 1 => 0], "method", false, false, false, 44), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 46
                    echo "                                    </a>
                                </li>
                            ";
                }
                // line 49
                echo "                        ";
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
            // line 50
            echo "                    </ul>
                ";
        }
        // line 52
        echo "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 53));
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
            // line 54
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 54), "active", [], "any", false, false, false, 54) && ($context["viewName"] != ($context["firstViewName"] ?? null)))) {
                // line 55
                echo "                            ";
                $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 55)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 55) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55) == 2)))) ? (" show active") : (""));
                // line 56
                echo "                            <div class=\"tab-pane";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tabpanel\">
                                ";
                // line 57
                twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 57);
                // line 58
                echo "                                ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 58));
                echo "
                            </div>
                        ";
            }
            // line 61
            echo "                    ";
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
        // line 62
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerBottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 62,  192 => 61,  185 => 58,  183 => 57,  176 => 56,  173 => 55,  170 => 54,  153 => 53,  150 => 52,  146 => 50,  132 => 49,  127 => 46,  121 => 44,  119 => 43,  115 => 42,  111 => 41,  102 => 40,  100 => 39,  97 => 38,  94 => 37,  77 => 36,  74 => 35,  72 => 34,  63 => 29,  61 => 28,  56 => 25,  53 => 24,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelControllerBottom.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/PanelControllerBottom.html.twig");
    }
}
