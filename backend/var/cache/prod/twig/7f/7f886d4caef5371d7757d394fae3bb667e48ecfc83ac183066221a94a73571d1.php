<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_3f7bbb8731dc79c306246eadd9b6ec74fd793abc200fb0e36a6cd578061a76ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/empty_layout.html.twig", "SonataFormatterBundle:Ckeditor:browser.html.twig", 12);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["ckParameters"] = array("CKEditor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"));
        // line 47
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            padding: 20px 15px;
        }
        .wrapper {
            background: #ecf0f5 !important;
        }
    </style>

";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
    }

    // line 45
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 71
    public function block_list_table($context, array $blocks = array())
    {
        // line 72
        echo "    <div class=\"col-xs-6 col-md-3\">
        ";
        // line 73
        if ( !(null === ($context["root_category"] ?? null))) {
            // line 74
            echo "            ";
            echo $context["tree"]->macro_navigate_child(array(0 => ($context["root_category"] ?? null)), ($context["admin"] ?? null), true, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "values", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["category"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["value"] ?? null) : null), 1);
            echo "
        ";
        }
        // line 76
        echo "    </div>

    <div class=\"col-xs-12 col-md-9\">
        <div class=\"box box-primary\">
            <div class=\"box-body ";
        // line 80
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 81
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? null))));
        echo "

                ";
        // line 83
        $this->displayBlock('list_header', $context, $blocks);
        // line 84
        echo "
                ";
        // line 85
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 86
            echo "                    <table class=\"table table-bordered table-striped\">
                        ";
            // line 87
            $this->displayBlock('table_header', $context, $blocks);
            // line 115
            echo "
                        ";
            // line 116
            $this->displayBlock('table_body', $context, $blocks);
            // line 140
            echo "
                        ";
            // line 141
            $this->displayBlock('table_footer', $context, $blocks);
            // line 143
            echo "                    </table>
                ";
        } else {
            // line 145
            echo "                    <div class=\"callout callout-info\">
                        ";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 149
        echo "
                ";
        // line 150
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? null))));
        echo "
            </div>
            ";
        // line 152
        $this->displayBlock('list_footer', $context, $blocks);
        // line 221
        echo "        </div>
    </div>
";
    }

    // line 83
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 87
    public function block_table_header($context, array $blocks = array())
    {
        // line 88
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 91
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", array(0 => "code"), "method") == "_batch") || (twig_get_attribute($this->env, $this->source, $context["field_description"], "name", array()) == "_action"))) {
                // line 92
                echo "                                            ";
                // line 93
                echo "                                        ";
            } else {
                // line 94
                echo "                                            ";
                $context["sortable"] = false;
                // line 95
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "sortable", array()))) {
                    // line 96
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 97
                    echo "                                                ";
                    $context["sort_parameters"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array())), "method"), ($context["ckParameters"] ?? null));
                    // line 98
                    echo "                                                ";
                    $context["current"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sort_parameters"] ?? null), "filter", array()), "_sort_by", array())));
                    // line 99
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 100
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_order", array())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "_sort_order", array())));
                    // line 101
                    echo "                                            ";
                }
                // line 102
                echo "
                                            ";
                // line 103
                ob_start();
                // line 104
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                echo "\">
                                                    ";
                // line 105
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => ($context["sort_parameters"] ?? null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 106
                echo "                                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "trans", array(0 => twig_get_attribute($this->env, $this->source, $context["field_description"], "label", array())), "method"), "html", null, true);
                echo "
                                                        ";
                // line 107
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 108
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 110
                echo "                                        ";
            }
            // line 111
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 116
    public function block_table_body($context, array $blocks = array())
    {
        // line 117
        echo "                            <tbody>
                                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 119
            echo "                                    <tr>
                                        <td colspan=\"";
            // line 120
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "elements", array())) - 1), "html", null, true);
            echo "\">
                                            <div>
                                                <a href=\"";
            // line 122
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail($context["object"], "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                                <strong><a href=\"";
            // line 124
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["object"], "name", array()), "html", null, true);
            echo "</a></strong> <br />
                                                ";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["object"], "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, $context["object"], "width", array())) {
                echo ": ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["object"], "width", array()), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["object"], "height", array())) {
                    echo "x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["object"], "height", array()), "html", null, true);
                }
                echo "px";
            }
            // line 126
            echo "
                                                ";
            // line 127
            if ((twig_length_filter($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["formats"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["object"], "id", array())] ?? null) : null)) > 0)) {
                // line 128
                echo "                                                    - ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                                    ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["formats"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["object"], "id", array())] ?? null) : null));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 130
                    echo "                                                        <a href=\"";
                    echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path($context["object"], $context["name"]);
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a> ";
                    if (twig_get_attribute($this->env, $this->source, $context["format"], "width", array())) {
                        echo "(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "width", array()), "html", null, true);
                        if (twig_get_attribute($this->env, $this->source, $context["format"], "height", array())) {
                            echo "x";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["format"], "height", array()), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 131
                    echo "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "                                                ";
            }
            // line 133
            echo "                                                <br />
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                            </tbody>
                        ";
    }

    // line 141
    public function block_table_footer($context, array $blocks = array())
    {
        // line 142
        echo "                        ";
    }

    // line 152
    public function block_list_footer($context, array $blocks = array())
    {
        // line 153
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 154
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 156
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) {
                // line 157
                echo "                                <div class=\"pull-right\">
                                    ";
                // line 158
                $this->displayBlock('pager_results', $context, $blocks);
                // line 180
                echo "                                </div>

                                ";
                // line 182
                $this->displayBlock('pager_links', $context, $blocks);
                // line 216
                echo "                            ";
            }
            // line 217
            echo "                        </div>
                    </div>
                ";
        }
        // line 220
        echo "            ";
    }

    // line 158
    public function block_pager_results($context, array $blocks = array())
    {
        // line 159
        echo "                                        ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 163
        echo "
                                        ";
        // line 164
        $this->displayBlock('num_results', $context, $blocks);
        // line 168
        echo "
                                        ";
        // line 169
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 179
        echo "                                    ";
    }

    // line 159
    public function block_num_pages($context, array $blocks = array())
    {
        // line 160
        echo "                                            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
                                            &nbsp;-&nbsp;
                                        ";
    }

    // line 164
    public function block_num_results($context, array $blocks = array())
    {
        // line 165
        echo "                                            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 166
        echo "                                            &nbsp;-&nbsp;
                                        ";
    }

    // line 169
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 170
        echo "                                            <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                            <select class=\"per-page small\" id=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                                ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 173
            echo "                                                    <option ";
            if (($context["per_page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filter" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), array("_per_page" => $context["per_page"]))), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
            echo "\">
                                                        ";
            // line 174
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                    </option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                                            </select>
                                        ";
    }

    // line 182
    public function block_pager_links($context, array $blocks = array())
    {
        // line 183
        echo "                                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 184
            echo "                                        <hr/>
                                        <div class=\"text-center\">
                                            <ul class=\"pagination\">
                                                ";
            // line 187
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
                // line 188
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => 1), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                                ";
            }
            // line 190
            echo "
                                                ";
            // line 191
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "previouspage", array()))) {
                // line 192
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "previouspage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                                ";
            }
            // line 194
            echo "
                                                ";
            // line 196
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "getLinks", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "getOption", array(0 => "pager_links"), "method")), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 197
                echo "                                                    ";
                if (($context["page"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()))) {
                    // line 198
                    echo "                                                        <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => $context["page"]), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                } else {
                    // line 200
                    echo "                                                        <li><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => $context["page"]), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                                    ";
                }
                // line 202
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "
                                                ";
            // line 204
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array()))) {
                // line 205
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                                ";
            }
            // line 207
            echo "
                                                ";
            // line 208
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "page", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nextpage", array())))) {
                // line 209
                echo "                                                    <li><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastpage", array())), "method"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                                ";
            }
            // line 211
            echo "                                            </ul>
                                        </div>

                                    ";
        }
        // line 215
        echo "                                ";
    }

    // line 225
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 226
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()))) {
            // line 227
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                    <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-filter\"></i>
                        ";
            // line 232
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                    </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
            // line 236
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["show_filter"] ?? null) : null) === true) || (null === (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["show_filter"] ?? null) : null)))) {
                    // line 237
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 238
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa ";
                    // line 239
                    echo (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", array(), "method") || (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["show_filter"] ?? null) : null))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "trans", array(0 => twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()), 1 => array(), 2 => twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 249
    public function block_list_filters($context, array $blocks = array())
    {
        // line 250
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array())) {
            // line 251
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "filter"), "method")), true);
            // line 252
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 253
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 256
            echo (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", array()) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 257
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 262
                echo "                                    <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((((($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["show_filter"] ?? null) : null) === true) || (null === (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["show_filter"] ?? null) : null)))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", array(), "method") && (null === (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866["show_filter"] ?? null) : null))) || ((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["show_filter"] ?? null) : null) === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 263
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()) === false)) {
                    // line 264
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = twig_get_attribute($this->env, $this->source, (($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7["value"] ?? null) : null), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "trans", array(0 => twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()), 1 => array(), 2 => twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 266
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array(), "any", false, true), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 267
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 269
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = twig_get_attribute($this->env, $this->source, (($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18["type"] ?? null) : null), 'widget', array("attr" => ($context["attr"] ?? null)));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 273
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = twig_get_attribute($this->env, $this->source, (($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7) || $__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7 instanceof ArrayAccess ? ($__internal_a5ce050c56e2fa0d875fbc5d7e5a277df72ffc991bd0164f3c078803c5d7b4e7[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["value"] ?? null) : null), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 278
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 289
            $context["foo"] = twig_get_attribute($this->env, $this->source, (($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c) || $__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c instanceof ArrayAccess ? ($__internal_c3328b7afe486068cdbdc8d1c3c828eef7c877ecbd31cfd5c6604f285bf56a4c["_page"] ?? null) : null), "setRendered", array(), "method");
            // line 290
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 294
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn\" href=\"";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filters" => "reset"), ($context["ckParameters"] ?? null))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 298
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                <div class=\"form-group\">
                                    <a href=\"#\" data-toggle=\"advanced-filter\">
                                        <i class=\"fa fa-cogs\"></i>
                                        ";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>
                            </div>
                        </div>

                        ";
            // line 311
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "persistentParameters", array()), ($context["ckParameters"] ?? null)));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 312
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 48
    public function macro_navigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category" => $__current_category__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "    ";
            $context["tree"] = $this;
            // line 50
            echo "    ";
            if ((($context["root"] ?? null) && (twig_length_filter($this->env, ($context["collection"] ?? null)) == 0))) {
                // line 51
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "trans", array(0 => "warning_no_category", 1 => array(), 2 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", array())), "method"), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 55
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 57
                echo "            <li>
                <div class=\"sonata-tree__item";
                // line 58
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "id", array()) == ($context["current_category"] ?? null))) {
                    echo " is-active";
                }
                echo "\"";
                if ((($context["depth"] ?? null) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["element"], "parent", array()) || ($context["root"] ?? null))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 60
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("category" => twig_get_attribute($this->env, $this->source, $context["element"], "id", array())))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", array()), "html", null, true);
                echo "</a>
                </div>

                ";
                // line 63
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "children", array()))) {
                    // line 64
                    echo "                    ";
                    echo $context["tree"]->macro_navigate_child(twig_get_attribute($this->env, $this->source, $context["element"], "children", array()), ($context["admin"] ?? null), false, ($context["current_category"] ?? null), (($context["depth"] ?? null) + 1));
                    echo "
                ";
                }
                // line 66
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  915 => 68,  908 => 66,  902 => 64,  900 => 63,  891 => 60,  887 => 59,  877 => 58,  874 => 57,  870 => 56,  863 => 55,  857 => 52,  854 => 51,  851 => 50,  848 => 49,  832 => 48,  823 => 314,  812 => 312,  808 => 311,  799 => 305,  789 => 298,  785 => 297,  779 => 294,  771 => 290,  769 => 289,  763 => 285,  746 => 278,  738 => 273,  731 => 269,  727 => 267,  724 => 266,  716 => 264,  714 => 263,  699 => 262,  695 => 261,  688 => 257,  682 => 256,  674 => 253,  671 => 252,  668 => 251,  665 => 250,  662 => 249,  654 => 243,  641 => 239,  633 => 238,  630 => 237,  625 => 236,  618 => 232,  611 => 227,  609 => 226,  606 => 225,  602 => 215,  596 => 211,  588 => 209,  586 => 208,  583 => 207,  575 => 205,  573 => 204,  570 => 203,  564 => 202,  556 => 200,  548 => 198,  545 => 197,  540 => 196,  537 => 194,  529 => 192,  527 => 191,  524 => 190,  516 => 188,  514 => 187,  509 => 184,  506 => 183,  503 => 182,  498 => 177,  489 => 174,  480 => 173,  476 => 172,  472 => 171,  465 => 170,  462 => 169,  457 => 166,  454 => 165,  451 => 164,  441 => 160,  438 => 159,  434 => 179,  432 => 169,  429 => 168,  427 => 164,  424 => 163,  421 => 159,  418 => 158,  414 => 220,  409 => 217,  406 => 216,  404 => 182,  400 => 180,  398 => 158,  395 => 157,  393 => 156,  389 => 154,  386 => 153,  383 => 152,  379 => 142,  376 => 141,  371 => 138,  361 => 133,  358 => 132,  352 => 131,  337 => 130,  333 => 129,  328 => 128,  326 => 127,  323 => 126,  312 => 125,  306 => 124,  299 => 122,  294 => 120,  291 => 119,  287 => 118,  284 => 117,  281 => 116,  275 => 112,  269 => 111,  266 => 110,  262 => 108,  258 => 107,  253 => 106,  247 => 105,  235 => 104,  233 => 103,  230 => 102,  227 => 101,  224 => 100,  221 => 99,  218 => 98,  215 => 97,  212 => 96,  209 => 95,  206 => 94,  203 => 93,  201 => 92,  198 => 91,  194 => 90,  190 => 88,  187 => 87,  182 => 83,  176 => 221,  174 => 152,  169 => 150,  166 => 149,  160 => 146,  157 => 145,  153 => 143,  151 => 141,  148 => 140,  146 => 116,  143 => 115,  141 => 87,  138 => 86,  136 => 85,  133 => 84,  131 => 83,  126 => 81,  120 => 80,  114 => 76,  108 => 74,  106 => 73,  103 => 72,  100 => 71,  95 => 45,  85 => 37,  75 => 31,  72 => 30,  55 => 17,  52 => 16,  48 => 12,  46 => 47,  44 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Ckeditor:browser.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Ckeditor/browser.html.twig");
    }
}
