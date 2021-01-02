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

/* Login/Login.html.twig */
class __TwigTemplate_3810d7499bf0335cfc5e93afef0534927bf3594fcfa91463fe8f67fc243a5054 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <body class=\"bg-dark\">
        ";
        // line 5
        $this->displayBlock('messages', $context, $blocks);
        // line 8
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 117);
        echo "
    </body>
";
    }

    // line 5
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
        ";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <form action=\"\" method=\"post\" class=\"form\">
                <div class=\"container\">
                    <div class=\"row justify-content-md-center\">
                        <div class=\"col-md-6\">
                            <br/>
                            <div class=\"card\">
                                <a href=\"index.php\">
                                    <img class=\"card-img-top\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/horizontal-logo.png"]), "html", null, true);
        echo "\" alt=\"FacturaScripts\"/>
                                </a>
                                <div class=\"card-body\">
                                    <p class=\"card-text text-center\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 19), "html", null, true);
        echo "</p>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                                </span>
                                            </span>
                                            <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 27), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\" autofocus=\"\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-prepend\">
                                                <span class=\"input-group-text\">
                                                    <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                                </span>
                                            </span>
                                            <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 37), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-block btn-primary\">
                                        ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 41), "html", null, true);
        echo "
                                    </button>
                                </div>
                                <div class=\"card-footer text-center\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#newPasswordModal\">
                                        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 46), "html", null, true);
        echo "
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <br/><br/><br/>
            <form action=\"\" method=\"post\" class=\"form\">
                <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 60), "html", null, true);
        echo "</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 73), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 83), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 93), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <b>";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 97), "html", null, true);
        echo "</b>
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\">
                                            <span class=\"input-group-text\">
                                                <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                            </span>
                                        </span>
                                        <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\" placeholder=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 104), "html", null, true);
        echo "\" required=\"\" autocomplete=\"off\"/>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 109), "html", null, true);
        echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 110), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 110,  221 => 109,  213 => 104,  203 => 97,  196 => 93,  183 => 83,  170 => 73,  154 => 60,  137 => 46,  129 => 41,  122 => 37,  109 => 27,  98 => 19,  92 => 16,  83 => 9,  79 => 8,  72 => 6,  68 => 5,  60 => 117,  57 => 8,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Login/Login.html.twig");
    }
}
