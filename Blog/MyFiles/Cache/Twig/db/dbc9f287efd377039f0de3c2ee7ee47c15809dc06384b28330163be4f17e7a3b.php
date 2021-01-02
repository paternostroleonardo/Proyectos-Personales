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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_54c650c691d33cb6c797dec4ea2e64e6726f762626180b4e95a33380bfe5dbdc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Core/Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Core/Master/MenuTemplate.html.twig", "Master/MenuTemplate.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/Argon/assets/css/argon.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/Argon/assets/vendor/nucleo/css/nucleo.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/@fortawesome/fontawesome-free/css/all.min.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.css"]), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Plugins/Argon/assets/css/custom.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 11
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    
    ";
        // line 13
        $context["theme"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "argon", 1 => "theme"], "method", false, false, false, 13);
        // line 14
        echo "    ";
        if (((($context["theme"] ?? null) == "") || (($context["theme"] ?? null) == null))) {
            // line 15
            echo "        ";
            $context["theme"] = "default";
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $context["navbarTheme"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "bootswatch", 1 => "navbar-theme"], "method", false, false, false, 18);
        // line 19
        echo "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-";
        echo twig_escape_filter($this->env, ($context["theme"] ?? null), "html", null, true);
        echo " sticky-top d-print-none\">
        ";
        // line 20
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 23
        echo "    </nav>
";
    }

    // line 20
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        $this->displayParentBlock("navbarContent", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 21,  110 => 20,  105 => 23,  103 => 20,  98 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 14,  82 => 13,  79 => 12,  75 => 11,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/MenuTemplate.html.twig");
    }
}
