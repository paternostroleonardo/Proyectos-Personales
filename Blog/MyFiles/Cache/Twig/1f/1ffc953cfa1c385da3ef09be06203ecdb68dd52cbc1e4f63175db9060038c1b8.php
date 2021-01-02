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

/* SendMail.html.twig */
class __TwigTemplate_d14df8782be75d9c279836064472f19d0890eea98d4a7de6bbd5823aded39d02 extends \Twig\Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "SendMail.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 26), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"action\" value=\"send\"/>
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send-mail"], "method", false, false, false, 30), "html", null, true);
        echo "
                        </div>
                        <div class=\"card-body\">
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "to"], "method", false, false, false, 36), "html", null, true);
        echo "</span>
                                    </div>
                                    ";
        // line 38
        $context["emails"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 38), "getToAddresses", [], "method", false, false, false, 38))) ? ("") : ((twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 38), "getToAddresses", [], "method", false, false, false, 38), ",") . ", ")));
        // line 39
        echo "                                    <input type=\"text\" id=\"email\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, ($context["emails"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" required=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-to"], "method", false, false, false, 39), "html", null, true);
        echo "\"/>
                                    <div class=\"input-group-append\">
                                        <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 41), "html", null, true);
        echo "\" onclick=\"\$('#fgCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 43), "html", null, true);
        echo "
                                        </button>
                                        <button type=\"button\" class=\"btn btn-outline-secondary\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 45), "html", null, true);
        echo "\" onclick=\"\$('#fgBCC').show();
                                                \$(this).hide();\">
                                            ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 47), "html", null, true);
        echo "
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div id=\"fgCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cc"], "method", false, false, false, 55), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-cc\" name=\"email-cc\" class=\"form-control\" placeholder=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-cc"], "method", false, false, false, 57), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div id=\"fgBCC\" class=\"form-group\" style=\"display: none;\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "bcc"], "method", false, false, false, 63), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" id=\"email-bcc\" name=\"email-bcc\" class=\"form-control\" placeholder=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email-bcc"], "method", false, false, false, 65), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 71), "html", null, true);
        echo "</span>
                                    </div>
                                    <input type=\"text\" name=\"subject\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 73), "title", [], "any", false, false, false, 73), "html", null, true);
        echo "\" class=\"form-control\" required=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subject"], "method", false, false, false, 73), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <textarea name=\"body\" rows=\"4\" class=\"form-control\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 77), "text", [], "any", false, false, false, 77), "html", null, true);
        echo "</textarea>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <input type=\"file\" name=\"uploads[]\" multiple=\"\"/>
                                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "newMail", [], "any", false, false, false, 83), "getAttachmentNames", [], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 84
            echo "                                            <p class=\"mt-2\">
                                                <i class=\"fas fa-file fa-fw\" aria-hidden=\"true\"></i> ";
            // line 85
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "
                                            </p>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                    </div>
                                </div>
                                <div class=\"col-sm-6 text-right\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "send"], "method", false, false, false, 92), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        function split(val) {
            return val.split(/,\\s*/);
        }
        function extractLast(term) {
            return split(term).pop();
        }
        \$(document).ready(function () {
            var cacheQuery = {};
            \$(\"#email,#email-cc,#email-bcc\")
                    // don't navigate away from the field on tab when selecting an item
                    .on(\"keydown\", function (event) {
                        if (event.keyCode === \$.ui.keyCode.TAB && \$(this).autocomplete(\"instance\").menu.active) {
                            event.preventDefault();
                        }
                    })
                    .autocomplete({
                        minLength: 0,
                        source: function (request, response) {
                            // Avoid re-query the same
                            var term = request.term;
                            if (term in cacheQuery) {
                                response(cacheQuery[term]);
                                return;
                            }

                            \$.getJSON(\"SendMail\", {
                                action: 'autocomplete',
                                source: 'contactos',
                                field: 'email',
                                title: 'email',
                                term: extractLast(request.term)
                            }, function (data) {
                                cacheQuery[ term ] = data;
                                response(data);
                            });
                        },
                        focus: function () {
                            // Prevent value inserted on focus
                            return false;
                        },
                        select: function (event, ui) {
                            var terms = split(this.value);
                            // Remove the current input
                            terms.pop();
                            // Add the selected item
                            terms.push(ui.item.value);
                            // Add placeholder to get the comma-and-space at the end
                            terms.push(\"\");
                            this.value = terms.join(\", \");
                            return false;
                        }
                    });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SendMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 105,  201 => 104,  186 => 92,  180 => 88,  171 => 85,  168 => 84,  164 => 83,  155 => 77,  146 => 73,  141 => 71,  132 => 65,  127 => 63,  118 => 57,  113 => 55,  102 => 47,  97 => 45,  92 => 43,  87 => 41,  79 => 39,  77 => 38,  72 => 36,  63 => 30,  56 => 26,  51 => 23,  47 => 22,  36 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "SendMail.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/SendMail.html.twig");
    }
}
