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

/* Master/BusinessDocumentView.html.twig */
class __TwigTemplate_cbf2cd2bef13120a409d340e3b57ba8cb3d7924d2bfff3166668cfd5efdbb9e6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extras' => [$this, 'block_extras'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    businessDocViewLineData = ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getLineData", [], "method", false, false, false, 23);
        echo ";
    businessDocViewFormName = \"form";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 24), "html", null, true);
        echo "\";
    businessDocViewUrl = \"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 25), "url", [0 => "edit"], "method", false, false, false, 25);
        echo "\";
    function businessDocViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 28), "html", null, true);
        echo "\",
            message: \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 29), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 33), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 36), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

<form id=\"form";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 52), "html", null, true);
        echo "\" action=\"#\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 55), "primaryColumnValue", [], "method", false, false, false, 55), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumn", [], "method", false, false, false, 56), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumnValue", [], "method", false, false, false, 56), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idestado\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 57), "idestado", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"doc_idestado\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 58), "newToken", [], "method", false, false, false, 58), "html", null, true);
        echo "\"/>
    <div class=\"form-row\">
        ";
        // line 60
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 60), "codalmacen", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "Almacen"], "method", false, false, false, 60)], 60, $context, $this->getSourceContext());
        echo "
        ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 61), "subjectColumn", [], "method", false, false, false, 61) == "codcliente")) {
            // line 62
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customerSelect", [($context["i18n"] ?? null), "codcliente", "codcliente", twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 62)], 62, $context, $this->getSourceContext());
            echo "
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["currentView"] ?? null), "model", [], "any", false, false, false, 63), "subjectColumn", [], "method", false, false, false, 63) == "codproveedor")) {
            // line 64
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_supplierSelect", [($context["i18n"] ?? null), "codproveedor", "codproveedor", twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 64)], 64, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 66
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codserie", "codserie", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 66), "codserie", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
        ";
        // line 67
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_fecha", "fecha", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 67), "fecha", [], "any", false, false, false, 67), "text", "fas fa-calendar-alt", ["class" => "form-control datepicker"]], 67, $context, $this->getSourceContext());
        echo "
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCustomFields", [], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 69
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customInput", [("doc_" . twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 69)), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 69), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getViewModelValue", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 69), 1 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 69)], "method", false, false, false, 69), "text", twig_get_attribute($this->env, $this->source, $context["field"], "icon", [], "any", false, false, false, 69), ["placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 69)], "method", false, false, false, 69)]], 69, $context, $this->getSourceContext());
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codpago", "codpago", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 71), "codpago", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "FormaPago"], "method", false, false, false, 71)], 71, $context, $this->getSourceContext());
        echo "
        ";
        // line 72
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_coddivisa", "coddivisa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 72), "coddivisa", [], "any", false, false, false, 72), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "Divisa"], "method", false, false, false, 72)], 72, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"doc_total\" name=\"total\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 75), "total", [], "any", false, false, false, 75), "html", null, true);
        echo "\" class=\"form-control text-right\" disabled=\"\" />
                <div class=\"input-group-append\">
                    ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 77), "btnSave", [], "any", false, false, false, 77)) {
            // line 78
            echo "                        <button type=\"button\" class=\"btn btn-primary\" onclick=\"businessDocViewSave();\">
                            <i class=\"fas fa-save\" aria-hidden=\"true\"></i>
                        </button>
                    ";
        }
        // line 82
        echo "                </div>
            </div>
        </div>
        ";
        // line 85
        echo twig_call_macro($macros["_self"], "macro_statusSelect", [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 85), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 85, $context, $this->getSourceContext());
        echo "
    </div>
    ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 87), "exists", [], "method", false, false, false, 87)) {
            // line 88
            echo "        <div class=\"row\">
            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 89), "parentDocuments", [], "method", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["parentDoc"]) {
                // line 90
                echo "                <div class=\"col\">
                    <div class=\"alert alert-warning text-center\">
                        <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i> ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["parentDoc"], "modelClassName", [], "method", false, false, false, 92)], "method", false, false, false, 92), "html", null, true);
                echo "
                        <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parentDoc"], "url", [], "method", false, false, false, 93), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["parentDoc"], "primaryDescription", [], "method", false, false, false, 93), "html", null, true);
                echo "</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentDoc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 97), "femail", [], "any", false, false, false, 97)) {
                // line 98
                echo "                <div class=\"col\">
                    <div class=\"alert alert-info text-center\">
                        <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 100), "femail", [], "any", false, false, false, 100), "html", null, true);
                echo "
                    </div>
                </div>
            ";
            }
            // line 104
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 104), "paid", [], "method", false, false, false, 104)) {
                // line 105
                echo "                <div class=\"col\">
                    <div class=\"alert alert-success text-center\">
                        <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i> ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "paid"], "method", false, false, false, 107), "html", null, true);
                echo "
                    </div>
                </div>
            ";
            }
            // line 111
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 111), "editable", [], "any", false, false, false, 111) == false)) {
                // line 112
                echo "                <div class=\"col\">
                    <div class=\"alert alert-danger text-center\">
                        <i class=\"fas fa-lock fa-fw\"></i> ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 114), "html", null, true);
                echo "
                    </div>
                </div>
            ";
            }
            // line 118
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 118), "childrenDocuments", [], "method", false, false, false, 118));
            foreach ($context['_seq'] as $context["_key"] => $context["childrenDoc"]) {
                // line 119
                echo "                <div class=\"col\">
                    <div class=\"alert alert-success text-center\">
                        <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i> ";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["childrenDoc"], "modelClassName", [], "method", false, false, false, 121)], "method", false, false, false, 121), "html", null, true);
                echo "
                        <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childrenDoc"], "url", [], "method", false, false, false, 122), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childrenDoc"], "primaryDescription", [], "method", false, false, false, 122), "html", null, true);
                echo "</a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childrenDoc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "        </div>
    ";
        }
        // line 128
        echo "    <div id=\"document-lines\"></div>
    <div class=\"form-row mt-2\">
        ";
        // line 130
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocSubType", [], "any", false, false, false, 130)) {
            // line 131
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codsubtipodoc", "codsubtipodoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 131), "codsubtipodoc", [], "any", false, false, false, 131), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "BusinessDocSubType"], "method", false, false, false, 131), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-subtype"], "method", false, false, false, 131)], 131, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 133
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocOperation", [], "any", false, false, false, 133)) {
            // line 134
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codoperaciondoc", "codoperaciondoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 134), "codoperaciondoc", [], "any", false, false, false, 134), twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getSelectValues", [0 => "BusinessDocTypeOperation"], "method", false, false, false, 134), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-operation"], "method", false, false, false, 134)], 134, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 136
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_netosindto", "netosindto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 136), "netosindto", [], "any", false, false, false, 136), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 136)], 136, $context, $this->getSourceContext());
        echo "
        ";
        // line 137
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 137), "dtopor1", [], "any", false, false, false, 137), "number", "", ["class" => "form-control"], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 137)], 137, $context, $this->getSourceContext());
        echo "
        ";
        // line 138
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 138), "dtopor2", [], "any", false, false, false, 138), "number", "", ["class" => "form-control"], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 138)], 138, $context, $this->getSourceContext());
        echo "
        ";
        // line 139
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_neto", "neto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 139), "neto", [], "any", false, false, false, 139), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "net"], "method", false, false, false, 139)], 139, $context, $this->getSourceContext());
        echo "
        ";
        // line 140
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totaliva", "totaliva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 140), "totaliva", [], "any", false, false, false, 140), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "vat"], "method", false, false, false, 140)], 140, $context, $this->getSourceContext());
        echo "
        ";
        // line 141
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 141), "totalrecargo", [], "any", false, false, false, 141) != 0)) {
            // line 142
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalrecargo", "totalrecargo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 142), "totalrecargo", [], "any", false, false, false, 142), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "re"], "method", false, false, false, 142)], 142, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 144
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 144), "totalirpf", [], "any", false, false, false, 144) != 0)) {
            // line 145
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalirpf", "totalirpf", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 145), "totalirpf", [], "any", false, false, false, 145), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "irpf"], "method", false, false, false, 145)], 145, $context, $this->getSourceContext());
            echo "
        ";
        }
        // line 147
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_total2", "total", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 147), "total", [], "any", false, false, false, 147), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 147)], 147, $context, $this->getSourceContext());
        echo "
    </div>
    <div class=\"form-row mb-2\">
        <div class=\"col\">
            <textarea name=\"observaciones\" class=\"form-control\" placeholder=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 151), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 151), "observaciones", [], "any", false, false, false, 151);
        echo "</textarea>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col\">
            ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 156) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 156), "btnDelete", [], "any", false, false, false, 156))) {
            // line 157
            echo "                <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"businessDocViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 157), "html", null, true);
            echo "');\">
                    <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 159), "html", null, true);
            echo "</span>
                </button>
            ";
        }
        // line 162
        echo "        </div>
        ";
        // line 163
        $this->displayBlock('extras', $context, $blocks);
        // line 165
        echo "        <div class=\"col text-right\">
            ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 166), "btnUndo", [], "any", false, false, false, 166)) {
            // line 167
            echo "                <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 167), "url", [], "method", false, false, false, 167), "html", null, true);
            echo "\">
                    <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 169), "html", null, true);
            echo "</span>
                </a>
            ";
        }
        // line 172
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 172), "btnSave", [], "any", false, false, false, 172)) {
            // line 173
            echo "                <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"businessDocViewSave();\">
                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 174), "html", null, true);
            echo "
                </button>
            ";
        }
        // line 177
        echo "        </div>
    </div>
</form>

";
        // line 199
        echo "
";
        // line 226
        echo "
";
        // line 248
        echo "
";
        // line 270
        echo "
";
    }

    // line 163
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 164
        echo "        ";
    }

    // line 181
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 182
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 183
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 184
                    echo "            <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"/>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "    ";
            } else {
                // line 187
                echo "        <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
            ";
                // line 188
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
            <select id=\"";
                // line 189
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 191
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 192
                    echo $context["option"];
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 200
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 201
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        ";
            // line 202
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
        ";
            // line 203
            if (($context["icon"] ?? null)) {
                // line 204
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 207
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 211
            echo "
            <input type=\"";
            // line 212
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo ($context["value"] ?? null);
            echo "\"
                   ";
            // line 213
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 213)) {
                // line 214
                echo "                       class=\"form-control\"
                   ";
            }
            // line 216
            echo "
                   ";
            // line 217
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 218
                echo "                       ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo " /> ";
            // line 220
            echo "
            ";
            // line 221
            if (($context["icon"] ?? null)) {
                // line 222
                echo "            </div>
        ";
            }
            // line 224
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 227
    public function macro_customerSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 228
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 231)) {
                // line 232
                echo "                    <a href=\"EditCliente?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 232), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 236
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-customer"], "method", false, false, false, 236), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 240
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 241
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 241), "html", null, true);
            echo "\"/>
            <input type=\"text\" id=\"";
            // line 242
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombrecliente", [], "any", false, false, false, 242);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 243
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Cliente\" data-fieldcode=\"codcliente\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 244), "html", null, true);
            echo "\" autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 249
    public function macro_supplierSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 250
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 253
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 253)) {
                // line 254
                echo "                    <a href=\"EditProveedor?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 254), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 258
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-supplier"], "method", false, false, false, 258), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 262
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 263
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 263), "html", null, true);
            echo "\"/>
            <input type=\"text\" id=\"";
            // line 264
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombre", [], "any", false, false, false, 264);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 265
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Proveedor\" data-fieldcode=\"codproveedor\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 266
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "supplier"], "method", false, false, false, 266), "html", null, true);
            echo "\" autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 271
    public function macro_statusSelect($__model__ = null, $__view__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "model" => $__model__,
            "view" => $__view__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 272
            echo "    <div class=\"col mb-2\">
        <div class=\"dropdown\">
            ";
            // line 274
            $context["status"] = twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getStatus", [], "method", false, false, false, 274);
            // line 275
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "generadoc", [], "any", false, false, false, 275)) {
                // line 276
                echo "                <button class=\"btn btn-block btn-secondary\" type=\"button\">
                    <i class=\"";
                // line 277
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 277), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 277), "html", null, true);
                echo "
                </button>
            ";
            } else {
                // line 280
                echo "                <button class=\"btn btn-block btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 281), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 281), "html", null, true);
                echo "
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 284
                $context["showDocumentStitcher"] = false;
                // line 285
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentStatus", [], "any", false, false, false, 285));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 286
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "idestado", [], "any", false, false, false, 286) == twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 286))) {
                        // line 287
                        echo "                            <a class=\"dropdown-item active\" href=\"#\">
                                <i class=\"";
                        // line 288
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 288), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 288), "html", null, true);
                        echo "
                            </a>
                        ";
                    } else {
                        // line 291
                        echo "                            <a class=\"dropdown-item\" href=\"#\" onclick=\"\$('#doc_idestado').val('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 291), "html", null, true);
                        echo "');
                                    businessDocViewSave();\">
                                ";
                        // line 293
                        if (twig_get_attribute($this->env, $this->source, $context["status"], "generadoc", [], "any", false, false, false, 293)) {
                            // line 294
                            echo "                                    ";
                            $context["showDocumentStitcher"] = true;
                            // line 295
                            echo "                                ";
                        }
                        // line 296
                        echo "                                <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 296), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 296), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 299
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 300) && ($context["showDocumentStitcher"] ?? null))) {
                    // line 301
                    echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"DocumentStitcher?model=";
                    // line 302
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "modelClassName", [], "method", false, false, false, 302), "html", null, true);
                    echo "&codes=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 302), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-magic fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 303
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "group-or-split"], "method", false, false, false, 303), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 306
                echo "                </div>
            ";
            }
            // line 308
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
        return "Master/BusinessDocumentView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  908 => 308,  904 => 306,  898 => 303,  892 => 302,  889 => 301,  886 => 300,  880 => 299,  871 => 296,  868 => 295,  865 => 294,  863 => 293,  857 => 291,  849 => 288,  846 => 287,  843 => 286,  838 => 285,  836 => 284,  828 => 281,  825 => 280,  817 => 277,  814 => 276,  811 => 275,  809 => 274,  805 => 272,  790 => 271,  777 => 266,  773 => 265,  767 => 264,  759 => 263,  756 => 262,  746 => 258,  738 => 254,  736 => 253,  731 => 250,  714 => 249,  701 => 244,  697 => 243,  691 => 242,  683 => 241,  680 => 240,  670 => 236,  662 => 232,  660 => 231,  655 => 228,  638 => 227,  628 => 224,  624 => 222,  622 => 221,  619 => 220,  617 => 219,  606 => 218,  602 => 217,  599 => 216,  595 => 214,  593 => 213,  583 => 212,  580 => 211,  573 => 207,  568 => 204,  566 => 203,  562 => 202,  559 => 201,  540 => 200,  528 => 195,  519 => 192,  510 => 191,  506 => 190,  500 => 189,  496 => 188,  493 => 187,  490 => 186,  477 => 184,  472 => 183,  469 => 182,  451 => 181,  447 => 164,  443 => 163,  438 => 270,  435 => 248,  432 => 226,  429 => 199,  423 => 177,  417 => 174,  414 => 173,  411 => 172,  405 => 169,  399 => 167,  397 => 166,  394 => 165,  392 => 163,  389 => 162,  383 => 159,  377 => 157,  375 => 156,  365 => 151,  357 => 147,  351 => 145,  348 => 144,  342 => 142,  340 => 141,  336 => 140,  332 => 139,  328 => 138,  324 => 137,  319 => 136,  313 => 134,  310 => 133,  304 => 131,  302 => 130,  298 => 128,  294 => 126,  282 => 122,  278 => 121,  274 => 119,  269 => 118,  262 => 114,  258 => 112,  255 => 111,  248 => 107,  244 => 105,  241 => 104,  234 => 100,  230 => 98,  227 => 97,  215 => 93,  211 => 92,  207 => 90,  203 => 89,  200 => 88,  198 => 87,  193 => 85,  188 => 82,  182 => 78,  180 => 77,  175 => 75,  169 => 72,  164 => 71,  155 => 69,  151 => 68,  147 => 67,  142 => 66,  136 => 64,  134 => 63,  129 => 62,  127 => 61,  123 => 60,  118 => 58,  114 => 57,  108 => 56,  104 => 55,  100 => 54,  95 => 52,  76 => 36,  70 => 33,  63 => 29,  59 => 28,  53 => 25,  49 => 24,  45 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/BusinessDocumentView.html.twig", "/home1/innertec/facturascripts.innertechnology.co/Dinamic/View/Master/BusinessDocumentView.html.twig");
    }
}
