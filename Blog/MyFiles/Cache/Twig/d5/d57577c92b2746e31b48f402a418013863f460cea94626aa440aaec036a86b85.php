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

/* @Core/Master/MenuTemplate.html.twig */
class __TwigTemplate_f7c117662d3ee2eb24cadbc33e21fbd95bb9fae34f35763ec713c2c5e66d2ca7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 43
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        ";
        // line 56
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 57
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 59);
        echo "
    </head>
    ";
        // line 61
        $this->displayBlock('fullBody', $context, $blocks);
        // line 139
        echo "</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 26), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 31
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/favicon.ico"]), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/apple-icon-180x180.png"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/css/bootstrap.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/@fortawesome/fontawesome-free/css/all.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery/dist/jquery.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/popper.js/dist/umd/popper.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/js/bootstrap.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.locales.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 61
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "        <body>
            ";
        // line 63
        $this->displayBlock('navbar', $context, $blocks);
        // line 115
        echo "            <br/>
            ";
        // line 116
        $this->displayBlock('messages', $context, $blocks);
        // line 129
        echo "            ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 131
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 133
        echo "            <br/>
            <br/>
            <br/>
            ";
        // line 136
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 136);
        echo "
        </body>
    ";
    }

    // line 63
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                <nav class=\"navbar navbar-expand navbar-dark bg-dark sticky-top d-print-none\">
                    ";
        // line 65
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 113
        echo "                </nav>
            ";
    }

    // line 65
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "                        <a class=\"navbar-brand d-none d-sm-inline\" href=\"index.php\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 66), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/logo-white.png"]), "html", null, true);
        echo "\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                            <span class=\"d-none d-xl-inline\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 68), "nombrecorto", [], "any", false, false, false, 68), "html", null, true);
        echo "</span>
                        </a>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"navbar-nav pt-1\">
                                ";
        // line 72
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "@Core/Master/MenuTemplate.html.twig", 72)->unwrap();
        // line 73
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 74
            echo "                                    ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 74, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </ul>
                            <ul class=\"navbar-nav flex-row ml-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-xl-inline\">";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 81), "nick", [], "any", false, false, false, 81), "html", null, true);
        echo "</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 84), "url", [], "method", false, false, false, 84), "html", null, true);
        echo "\">
                                            <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 85), "nick", [], "any", false, false, false, 85), "html", null, true);
        echo "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                            <i class=\"fas fa-sign-out-alt fa-fw\" aria-hidden=\"true\"></i> ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 89), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            ";
        // line 94
        if ((($context["template"] ?? null) != "MegaSearch.html.twig")) {
            // line 95
            echo "                                <form action=\"MegaSearch\" method=\"post\" class=\"form-inline\">
                                    <button type=\"submit\" class=\"btn btn-outline-light d-xl-none\">
                                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                    </button>
                                    <div class=\"d-none d-xl-inline\">
                                        <div class=\"input-group\">
                                            <input type=\"text\" class=\"form-control\" name=\"query\" placeholder=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 101), "html", null, true);
            echo "\"/>
                                            <div class=\"input-group-append\">
                                                <button type=\"submit\" class=\"btn btn-light\">
                                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            ";
        }
        // line 111
        echo "                        </div>
                    ";
    }

    // line 116
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "                ";
        $macros["__internal_99f33b0e4d34866036203b9211d26cd984225a2c5697901aa9daf243c41e277e"] = $this->loadTemplate("Macro/Utils.html.twig", "@Core/Master/MenuTemplate.html.twig", 117)->unwrap();
        // line 118
        echo "                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            ";
        // line 121
        echo twig_call_macro($macros["__internal_99f33b0e4d34866036203b9211d26cd984225a2c5697901aa9daf243c41e277e"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 121, $context, $this->getSourceContext());
        echo "
                            ";
        // line 122
        echo twig_call_macro($macros["__internal_99f33b0e4d34866036203b9211d26cd984225a2c5697901aa9daf243c41e277e"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 122, $context, $this->getSourceContext());
        echo "
                            ";
        // line 123
        echo twig_call_macro($macros["__internal_99f33b0e4d34866036203b9211d26cd984225a2c5697901aa9daf243c41e277e"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 123, $context, $this->getSourceContext());
        echo "
                            ";
        // line 124
        echo twig_call_macro($macros["__internal_99f33b0e4d34866036203b9211d26cd984225a2c5697901aa9daf243c41e277e"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 124, $context, $this->getSourceContext());
        echo "
                        </div>
                    </div>
                </div>
            ";
    }

    // line 129
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "            ";
    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Core/Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  396 => 132,  392 => 131,  388 => 130,  384 => 129,  375 => 124,  371 => 123,  367 => 122,  363 => 121,  358 => 118,  355 => 117,  351 => 116,  346 => 111,  333 => 101,  325 => 95,  323 => 94,  315 => 89,  308 => 85,  304 => 84,  298 => 81,  291 => 76,  282 => 74,  277 => 73,  275 => 72,  268 => 68,  264 => 67,  259 => 66,  255 => 65,  250 => 113,  248 => 65,  245 => 64,  241 => 63,  234 => 136,  229 => 133,  226 => 131,  223 => 129,  221 => 116,  218 => 115,  216 => 63,  213 => 62,  209 => 61,  203 => 53,  199 => 52,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  174 => 46,  170 => 45,  164 => 39,  160 => 38,  156 => 37,  151 => 36,  147 => 35,  141 => 33,  136 => 32,  132 => 31,  123 => 26,  119 => 25,  116 => 24,  112 => 23,  108 => 139,  106 => 61,  100 => 59,  91 => 57,  86 => 56,  84 => 55,  81 => 45,  72 => 43,  67 => 42,  65 => 41,  62 => 35,  59 => 31,  57 => 23,  50 => 21,  47 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Core/Master/MenuTemplate.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Core/View/Master/MenuTemplate.html.twig");
    }
}
