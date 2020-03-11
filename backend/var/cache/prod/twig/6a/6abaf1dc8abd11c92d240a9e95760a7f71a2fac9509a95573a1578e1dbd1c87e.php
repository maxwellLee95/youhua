<?php

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_6e4bcfa2fc492f4cbfbd10531a59a666c2806019997b8834caeb4f0f7d409337 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 19
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")), "twig");
    }

    // line 25
    public function block_title($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        // line 30
        echo "
    ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", array()), "subject", array()))) {
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", array()), "toString", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 36
    public function block_navbar_title($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_list_table($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 42
        $context["batchactions"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "batchactions", array());
        // line 43
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 44
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "batch", 1 => array("filter" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\">
        ";
        }
        // line 47
        echo "
        ";
        // line 49
        echo "        <div class=\"box box-primary\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 50
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 51
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? null))));
        echo "

                ";
        // line 53
        $this->displayBlock('list_header', $context, $blocks);
        // line 54
        echo "
                ";
        // line 55
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 56
            echo "                    <table class=\"table table-bordered table-striped table-hover sonata-ba-list\">
                        ";
            // line 57
            $this->displayBlock('table_header', $context, $blocks);
            // line 96
            echo "
                        ";
            // line 97
            $this->displayBlock('table_body', $context, $blocks);
            // line 102
            echo "
                        ";
            // line 103
            $this->displayBlock('table_footer', $context, $blocks);
            // line 105
            echo "                    </table>
                ";
        } else {
            // line 107
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 125
            echo "                ";
        }
        // line 126
        echo "
                ";
        // line 127
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? null))));
        echo "
            </div>
            ";
        // line 129
        $this->displayBlock('list_footer', $context, $blocks);
        // line 230
        echo "        </div>
        ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? null)))) {
            // line 232
            echo "            </form>
        ";
        }
        // line 234
        echo "    </div>
";
    }

    // line 53
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 57
    public function block_table_header($context, array $blocks = array())
    {
        // line 58
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 61
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                // line 62
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 66
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 67
$context["field_description"], "name", array()) == "_action") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 68
                echo "                                            ";
                // line 69
                echo "                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array()))) {
                // line 70
                echo "                                            ";
                // line 71
                echo "                                        ";
            } else {
                // line 72
                echo "                                            ";
                $context["sortable"] = false;
                // line 73
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "sortable", array()))) {
                    // line 74
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 75
                    echo "                                                ";
                    $context["sort_parameters"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array())), "method");
                    // line 76
                    echo "                                                ";
                    $context["current"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_by", array()), "name", array()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sort_parameters"] ?? null), "filter", array()), "_sort_by", array())));
                    // line 77
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? null)) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 78
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "values", array()), "_sort_order", array())) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "_sort_order", array())));
                    // line 79
                    echo "                                            ";
                }
                // line 80
                echo "
                                            ";
                // line 81
                ob_start();
                // line 82
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? null)) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? null)), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? null), "html", null, true);
                }
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 83
                if (($context["sortable"] ?? null)) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? null)), "method"), "html", null, true);
                    echo "\">";
                }
                // line 84
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", array(0 => "label_icon"), "method")) {
                    // line 85
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "getOption", array(0 => "label_icon"), "method"), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 87
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["field_description"], "label", array()), array(), twig_get_attribute($this->env, $this->source, $context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 88
                if (($context["sortable"] ?? null)) {
                    echo "</a>";
                }
                // line 89
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 91
                echo "                                        ";
            }
            // line 92
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                </tr>
                            </thead>
                        ";
    }

    // line 97
    public function block_table_body($context, array $blocks = array())
    {
        // line 98
        echo "                            <tbody>
                                ";
        // line 99
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate(("outer_list_rows_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", array(), "method")), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array())), "@SonataAdmin/CRUD/base_list.html.twig", 99)->display($context);
        // line 100
        echo "                            </tbody>
                        ";
    }

    // line 103
    public function block_table_footer($context, array $blocks = array())
    {
        // line 104
        echo "                        ";
    }

    // line 107
    public function block_no_result_content($context, array $blocks = array())
    {
        // line 108
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 116
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "xmlHttpRequest", array())) {
            // line 117
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 118
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("button_create", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array())), "@SonataAdmin/CRUD/base_list.html.twig", 118)->display($context);
            // line 119
            echo "                                    </ul>
                                    ";
        }
        // line 121
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
    }

    // line 129
    public function block_list_footer($context, array $blocks = array())
    {
        // line 130
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array())) > 0)) {
            // line 131
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 133
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) {
                // line 134
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 135
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0))) {
                    // line 136
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 184
                    echo "                                    ";
                }
                // line 185
                echo "                                </div>


                                ";
                // line 189
                echo "                                ";
                $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter(($context["export_formats"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", array()))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "exportFormats", array())));
                // line 190
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 192
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "export"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? null)))) {
                    // line 193
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 196
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["export_formats"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 201
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 202
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "export", 1 => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "modelmanager", array()), "paginationparameters", array(0 => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 204
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 208
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 213
                echo "
                                    ";
                // line 214
                $this->displayBlock('pager_results', $context, $blocks);
                // line 217
                echo "                                </div>
                            ";
            }
            // line 219
            echo "                        </div>

                        ";
            // line 221
            $this->displayBlock('pager_links', $context, $blocks);
            // line 227
            echo "                    </div>
                ";
        }
        // line 229
        echo "            ";
    }

    // line 136
    public function block_batch($context, array $blocks = array())
    {
        // line 137
        echo "                                            <script>
                                                ";
        // line 138
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 166
        echo "                                            </script>

                                        ";
        // line 168
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 181
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
    }

    // line 138
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 139
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;

                                                            if (Admin.get_config('USE_ICHECK')) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
    }

    // line 168
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 169
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? null));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 177
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["options"], "label", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["options"], "translation_domain", array()), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                            </select>
                                        ";
    }

    // line 214
    public function block_pager_results($context, array $blocks = array())
    {
        // line 215
        echo "                                        ";
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_results", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array())), "@SonataAdmin/CRUD/base_list.html.twig", 215)->display($context);
        // line 216
        echo "                                    ";
    }

    // line 221
    public function block_pager_links($context, array $blocks = array())
    {
        // line 222
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 223
            echo "                                <hr/>
                                ";
            // line 224
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("pager_links", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array())), "@SonataAdmin/CRUD/base_list.html.twig", 224)->display($context);
            // line 225
            echo "                            ";
        }
        // line 226
        echo "                        ";
    }

    // line 237
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 238
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()))) {
            // line 239
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    <span class=\"badge sonata-filter-count\"></span>
                    <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["show_filter"] ?? null) : null) === true) || (null === (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["show_filter"] ?? null) : null)))) {
                    // line 251
                    echo "                        ";
                    $context["filterActive"] = ((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", array(), "method") || (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["show_filter"] ?? null) : null)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())), "method"));
                    // line 252
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 253
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 254
                    echo (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", array(), "method") || (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["show_filter"] ?? null) : null))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 264
    public function block_list_filters($context, array $blocks = array())
    {
        // line 265
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array())) {
            // line 266
            echo "        ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), array(0 => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("filter", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array()))), true);
            // line 267
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 268
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 271
            echo (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isChild", array()) && (1 == twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 272
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 276
            $context["withAdvancedFilter"] = false;
            // line 277
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "filters", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 278
                echo "                                    ";
                $context["filterActive"] = (((twig_get_attribute($this->env, $this->source, $context["filter"], "isActive", array(), "method") && (null === (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217["show_filter"] ?? null) : null))) || ((($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105["show_filter"] ?? null) : null) === true)) &&  !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isDefaultFilter", array(0 => twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())), "method"));
                // line 279
                echo "                                    ";
                $context["filterVisible"] = (((($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779["show_filter"] ?? null) : null) === true) || (null === (($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1) || $__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1 instanceof ArrayAccess ? ($__internal_3e040fa9f9bcf48a8b054d0953f4fffdaf331dc44bc1d96f1bb45abb085e61d1["show_filter"] ?? null) : null)));
                // line 280
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? null)) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? null)) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 281
                if ( !(twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()) === false)) {
                    // line 282
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 = twig_get_attribute($this->env, $this->source, (($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 = ($context["form"] ?? null)) && is_array($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866) || $__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866 instanceof ArrayAccess ? ($__internal_602f93ae9072ac758dc9cd47ca50516bbc1210f73d2a40b01287f102c3c40866[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0) || $__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0 instanceof ArrayAccess ? ($__internal_bd1cf16c37e30917ff4f54b7320429bcc2bb63615cd8a735bfe06a3f1b5c82a0["value"] ?? null) : null), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["filter"], "label", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())) ? (twig_get_attribute($this->env, $this->source, $context["filter"], "translationDomain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 284
                echo "                                        ";
                $context["attr"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 285
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 287
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f = twig_get_attribute($this->env, $this->source, (($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 = ($context["form"] ?? null)) && is_array($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7) || $__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7 instanceof ArrayAccess ? ($__internal_517751e212021442e58cf8c5cde586337a42455f06659ad64a123ef99fab52e7[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f) || $__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f instanceof ArrayAccess ? ($__internal_de222b1ef20cf829a938a4545cbb79f4996337944397dd43b1919bce7726ae2f["type"] ?? null) : null), 'widget', array("attr" => ($context["attr"] ?? null)));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 291
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 = twig_get_attribute($this->env, $this->source, (($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 = ($context["form"] ?? null)) && is_array($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18) || $__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18 instanceof ArrayAccess ? ($__internal_869a4b51bf6f65c335ddd8115360d724846983ee5a04751d683ca60a03391d18[twig_get_attribute($this->env, $this->source, $context["filter"], "formName", array())] ?? null) : null), "children", array())) && is_array($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289) || $__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289 instanceof ArrayAccess ? ($__internal_89dde7175ba0b16509237b3e9e7cf99ba9e1b72bd3e7efcbe667781538aca289["value"] ?? null) : null), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 296
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 303
                if ((($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 = twig_get_attribute($this->env, $this->source, $context["filter"], "options", array())) && is_array($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018) || $__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018 instanceof ArrayAccess ? ($__internal_90d913d778d5b09eba503796cc624cad16d1bef853f6e54f02eb01d7ed891018["advanced_filter"] ?? null) : null)) {
                    // line 304
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 305
                    echo "                                    ";
                }
                // line 306
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 311
            $context["foo"] = twig_get_attribute($this->env, $this->source, (($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 = ($context["form"] ?? null)) && is_array($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413) || $__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413 instanceof ArrayAccess ? ($__internal_5c0169d493d4872ad26d34703fc2ce22459eddaa09bc03024c8105160dc27413["_page"] ?? null) : null), "setRendered", array(), "method");
            // line 312
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 319
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 320
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 324
            if (($context["withAdvancedFilter"] ?? null)) {
                // line 325
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 328
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 332
            echo "                            </div>
                        </div>

                        ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 336
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
            // line 338
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    // line 280
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 280,  878 => 338,  867 => 336,  863 => 335,  858 => 332,  851 => 328,  846 => 325,  844 => 324,  837 => 320,  833 => 319,  827 => 316,  819 => 312,  817 => 311,  811 => 307,  797 => 306,  794 => 305,  791 => 304,  789 => 303,  775 => 296,  767 => 291,  760 => 287,  756 => 285,  753 => 284,  745 => 282,  743 => 281,  726 => 280,  723 => 279,  720 => 278,  702 => 277,  700 => 276,  693 => 272,  687 => 271,  679 => 268,  676 => 267,  673 => 266,  670 => 265,  667 => 264,  659 => 258,  646 => 254,  638 => 253,  635 => 252,  632 => 251,  627 => 250,  618 => 244,  611 => 239,  609 => 238,  606 => 237,  602 => 226,  599 => 225,  597 => 224,  594 => 223,  591 => 222,  588 => 221,  584 => 216,  581 => 215,  578 => 214,  573 => 179,  562 => 177,  558 => 176,  551 => 172,  547 => 171,  543 => 170,  538 => 169,  535 => 168,  505 => 139,  502 => 138,  496 => 182,  493 => 181,  491 => 168,  487 => 166,  485 => 138,  482 => 137,  479 => 136,  475 => 229,  471 => 227,  469 => 221,  465 => 219,  461 => 217,  459 => 214,  456 => 213,  449 => 208,  439 => 204,  434 => 202,  431 => 201,  427 => 200,  420 => 196,  415 => 193,  413 => 192,  409 => 190,  406 => 189,  401 => 185,  398 => 184,  395 => 136,  393 => 135,  390 => 134,  388 => 133,  384 => 131,  381 => 130,  378 => 129,  371 => 121,  367 => 119,  365 => 118,  362 => 117,  360 => 116,  352 => 111,  347 => 108,  344 => 107,  340 => 104,  337 => 103,  332 => 100,  330 => 99,  327 => 98,  324 => 97,  318 => 93,  312 => 92,  309 => 91,  305 => 89,  301 => 88,  296 => 87,  290 => 85,  287 => 84,  281 => 83,  259 => 82,  257 => 81,  254 => 80,  251 => 79,  248 => 78,  245 => 77,  242 => 76,  239 => 75,  236 => 74,  233 => 73,  230 => 72,  227 => 71,  225 => 70,  222 => 69,  220 => 68,  218 => 67,  215 => 66,  213 => 65,  208 => 62,  205 => 61,  201 => 60,  197 => 58,  194 => 57,  189 => 53,  184 => 234,  180 => 232,  178 => 231,  175 => 230,  173 => 129,  168 => 127,  165 => 126,  162 => 125,  159 => 107,  155 => 105,  153 => 103,  150 => 102,  148 => 97,  145 => 96,  143 => 57,  140 => 56,  138 => 55,  135 => 54,  133 => 53,  128 => 51,  122 => 50,  115 => 49,  112 => 47,  107 => 45,  102 => 44,  99 => 43,  97 => 42,  94 => 41,  91 => 40,  84 => 37,  81 => 36,  73 => 32,  71 => 31,  68 => 30,  66 => 26,  63 => 25,  59 => 19,  56 => 18,  52 => 15,  49 => 14,  40 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_list.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list.html.twig");
    }
}
