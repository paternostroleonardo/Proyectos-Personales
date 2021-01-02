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

/* Master/PanelControllerTop.html.twig */
class __TwigTemplate_acebc777f17f36995fea1d975aec42185337493a490a8152e45eb1c78c1ff86c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerTop.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                <ul class=\"nav nav-tabs mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 28
            echo "                        <li class=\"nav-item\">
                            ";
            // line 29
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 29))) ? (" active") : (""));
            // line 30
            echo "                            ";
            $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 30), "active", [], "any", false, false, false, 30)) ? ("") : (" disabled"));
            // line 31
            echo "                            <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                                <i class=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 32), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                                ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 34) > 0)) {
                echo "<span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 34), "numbers", [], "method", false, false, false, 34), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 34), 1 => 0], "method", false, false, false, 34), "html", null, true);
                echo "</span>";
            }
            // line 35
            echo "                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </ul>
                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 40));
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
            // line 41
            echo "                        ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 41))) ? (" show active") : (""));
            // line 42
            echo "                        <div class=\"tab-pane";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                            ";
            // line 43
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 43);
            // line 44
            echo "                            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 44));
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
        // line 47
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerTop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  133 => 44,  131 => 43,  124 => 42,  121 => 41,  104 => 40,  100 => 38,  92 => 35,  86 => 34,  82 => 33,  78 => 32,  68 => 31,  65 => 30,  63 => 29,  60 => 28,  56 => 27,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelControllerTop.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/PanelControllerTop.html.twig");
    }
}
