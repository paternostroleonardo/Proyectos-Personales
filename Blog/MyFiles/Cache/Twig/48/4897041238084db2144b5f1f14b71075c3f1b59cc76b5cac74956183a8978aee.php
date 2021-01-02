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

/* Wizard.html.twig */
class __TwigTemplate_99135d35c2da3c2f449a97913b4f07189e308e096ae09e5346c7aaa00543b10b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <!-- Macros Template Imports -->
    ";
        // line 24
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 24)->unwrap();
        // line 25
        echo "
    ";
        // line 26
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26), "ciudad", [], "any", false, false, false, 26)) : (""));
        // line 27
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27), "codpais", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codpais", 2 => "ESP"], "method", false, false, false, 27)));
        // line 28
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28), "provincia", [], "any", false, false, false, 28)) : (""));
        // line 29
        echo "
    <br/>
    <div class=\"container card\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"h3 mt-3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 35), "html", null, true);
        echo "
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 36), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 36), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 40), "html", null, true);
        echo "</p>
                <hr/>
            </div>
        </div>
        <form action=\"#\" method=\"post\" class=\"form\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 48
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 48), "nombre", [], "any", false, false, false, 48), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company-name"], "method", false, false, false, 48), "", ["maxlength" => "100", "required" => ""]], 48, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 53
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["nombrecorto", "nombrecorto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 53), "nombrecorto", [], "any", false, false, false, 53), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "short-name"], "method", false, false, false, 53), "", ["maxlength" => "32", "required" => ""]], 53, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 58
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 58), "cifnif", [], "any", false, false, false, 58), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cifnif"], "method", false, false, false, 58), "", ["maxlength" => "30"]], 58, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                ";
        // line 61
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 61), "email", [], "any", false, false, false, 61)))) {
            // line 62
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 64
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 64), "email", [], "any", false, false, false, 64), "email", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email"], "method", false, false, false, 64), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 64, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                ";
        }
        // line 68
        echo "                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 70
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 70), "telefono1", [], "any", false, false, false, 70), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone"], "method", false, false, false, 70), "fas fa-phone", ["maxlength" => "30"]], 70, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 75
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 75), "telefono2", [], "any", false, false, false, 75), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone2"], "method", false, false, false, 75), "fas fa-mobile-alt", ["maxlength" => "30"]], 75, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 82
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 82), "direccion", [], "any", false, false, false, 82), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "address"], "method", false, false, false, 82), "fas fa-map-marked", ["maxlength" => "100", "required" => ""]], 82, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 87
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 87), "apartado", [], "any", false, false, false, 87), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "post-office-box"], "method", false, false, false, 87), null, ["maxlength" => "10", "placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 87)]], 87, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 92
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 92), "codpostal", [], "any", false, false, false, 92), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "zip-code"], "method", false, false, false, 92), null, ["maxlength" => "10"]], 92, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 97
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "city"], "method", false, false, false, 97)], 97, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 102
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "province"], "method", false, false, false, 102)], 102, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 107
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 107), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 107), "fas fa-globe-americas"], 107, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 111
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 111), "verifyPassword", [0 => "admin"], "method", false, false, false, 111)) {
            // line 112
            echo "                <div class=\"row\">
                    <div class=\"col mt-3\">
                        <h3 class=\"h4 text-info\">
                            <i class=\"fas fa-key\" aria-hidden=\"true\"></i> ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "you-should-change-passwd"], "method", false, false, false, 115), "html", null, true);
            echo "
                        </h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
            // line 121
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 121), "nick", [], "any", false, false, false, 121), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 121), "fas fa-user", ["readonly" => ""]], 121, $context, $this->getSourceContext());
            echo "
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 125
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 125), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 125)]], 125, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 130
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 130), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 130)]], 130, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 135
        echo "            <div class=\"row mb-3 mt-2\">
                ";
        // line 136
        $context["plugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAvaliablePlugins", [], "method", false, false, false, 136);
        // line 137
        echo "                ";
        if ( !twig_test_empty(($context["plugins"] ?? null))) {
            // line 138
            echo "                    <div class=\"col-md-9\">
                        <h3 class=\"h4 text-info\">
                            <i class=\"fas fa-plug\" aria-hidden=\"true\"></i> ";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "plugins"], "method", false, false, false, 140), "html", null, true);
            echo "
                        </h3>
                        ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 143
                echo "                            <div class=\"form-check\">
                                <label class=\"form-check-label\">
                                    <input class=\"form-check-input\" type=\"checkbox\" name=\"plugins[]\" value=\"";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 145), "html", null, true);
                echo "\" checked=\"\"/>
                                    <b>";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 146), "html", null, true);
                echo "
                                </label>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                    </div>
                ";
        }
        // line 152
        echo "                <div class=\"col text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                        ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 155), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
";
    }

    // line 167
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 168
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #3A414B;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "Wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 168,  307 => 167,  292 => 155,  287 => 152,  283 => 150,  271 => 146,  267 => 145,  263 => 143,  259 => 142,  254 => 140,  250 => 138,  247 => 137,  245 => 136,  242 => 135,  234 => 130,  226 => 125,  219 => 121,  210 => 115,  205 => 112,  203 => 111,  196 => 107,  188 => 102,  180 => 97,  172 => 92,  164 => 87,  156 => 82,  146 => 75,  138 => 70,  134 => 68,  127 => 64,  123 => 62,  121 => 61,  115 => 58,  107 => 53,  99 => 48,  88 => 40,  79 => 36,  75 => 35,  67 => 29,  64 => 28,  61 => 27,  59 => 26,  56 => 25,  54 => 24,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Wizard.html.twig");
    }
}
