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

/* Email/NewTemplate.html.twig */
class __TwigTemplate_f15086c0df14d13c340ce85bd8aaed620b35efd3ba0000b515a9d8936f10d32f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <style type=\"text/css\">
            ";
        // line 8
        $this->displayBlock('css', $context, $blocks);
        // line 54
        echo "        </style>
        ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </head>
    <body>
        <div id=\"body\">
            ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "        </div>
    </body>
</html>
";
    }

    // line 8
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                #body {
                    background-color: #E8EAED;
                    color: black;
                }
                .container {
                    background-color: #FFFFFF;
                    border-radius: 5px;
                    color: black;
                    font-size: 1em;
                    padding: 10px;
                }
                .company {
                    color: #3D67AC;
                    font-size: 2em;
                    font-weight: bold;
                }
                .footer {
                    font-size: 10px;
                    color: black;
                    padding: 10px;
                }
                .btn {
                    border-radius: 5px;
                    background-color: #2E7EFA;
                    color: #FFFFFF;
                }
                .btn a {
                    padding: 10px;
                    font-family: Helvetica, Arial, sans-serif;
                    font-size: 14px;
                    border-radius: 5px;
                    background-color: #2E7EFA;
                    color: #FFFFFF; 
                    text-decoration: none;
                    font-weight: bold;
                    display: inline-block;
                }
                .company a {
                    color: #3D67AC;
                    text-decoration: none;
                }
                .text-center {
                    text-align: center;
                }
            ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "        ";
    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                <table width=\"100%\">
                    <tr>
                        <td></td>
                        <td>
                            <h3 class=\"company text-center\">
                                ";
        // line 66
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["empresa"] ?? null), "web", [], "any", false, false, false, 66))) {
            // line 67
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empresa"] ?? null), "nombrecorto", [], "any", false, false, false, 67), "html", null, true);
            echo "
                                ";
        } else {
            // line 69
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empresa"] ?? null), "web", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["empresa"] ?? null), "nombrecorto", [], "any", false, false, false, 70), "html", null, true);
            echo "
                                    </a>
                                ";
        }
        // line 73
        echo "                            </h3>
                            <div class=\"container\">
                                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mainBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 76
            echo "                                    ";
            echo twig_get_attribute($this->env, $this->source, $context["block"], "render", [], "method", false, false, false, 76);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </div>
                            <div class=\"footer\">
                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["footerBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 81
            echo "                                    ";
            echo twig_get_attribute($this->env, $this->source, $context["block"], "render", [], "method", false, false, false, 81);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </div>
                        </td>
                        <td></td>
                    </tr>
                </table>
            ";
    }

    public function getTemplateName()
    {
        return "Email/NewTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  188 => 81,  184 => 80,  180 => 78,  171 => 76,  167 => 75,  163 => 73,  157 => 70,  152 => 69,  146 => 67,  144 => 66,  137 => 61,  133 => 60,  129 => 56,  125 => 55,  77 => 9,  73 => 8,  66 => 89,  64 => 60,  59 => 57,  57 => 55,  54 => 54,  52 => 8,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Email/NewTemplate.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Email/NewTemplate.html.twig");
    }
}
