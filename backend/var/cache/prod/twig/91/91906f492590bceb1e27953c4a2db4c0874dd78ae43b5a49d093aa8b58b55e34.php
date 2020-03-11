<?php

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_672936fbcc6762892eef26f9b2535bcce4ae4429d79146e89039216ab4395c49 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => ($context["url"] ?? null)), "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 70
            echo "
            ";
            // line 71
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 74
            echo "
            ";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
            echo "

            ";
            // line 77
            $this->displayBlock('formactions', $context, $blocks);
            // line 129
            echo "        </form>
    ";
        }
        // line 131
        echo "
    ";
        // line 132
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
        echo "

";
    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => ($context["url"] ?? null), 1 => array("id" => (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))), "uniqid" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array()), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 27
        echo "                <div class=\"row\">
            ";
    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array())) == 1) && ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array()))) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null) != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if (($context["has_tab"] ?? null)) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array())) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()));
                // line 39
                echo "                                    <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "has", array(0 => "_tab"), "method") && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "_tab"), "method") == ($context["_tab_name"] ?? null)))) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#";
                // line 40
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "label", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                echo "
                                        </a>
                                    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 48
                echo "                                    ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array())) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()));
                // line 49
                echo "                                    <div class=\"tab-pane fade";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "has", array(0 => "_tab"), "method") && twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "_tab"), "method") == ($context["_tab_name"] ?? null)))) {
                    echo " in active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 52
                if ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", array()) != false)) {
                    // line 53
                    echo "                                                    <p>
                                                        ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                    echo "
                                                    </p>
                                                ";
                }
                // line 57
                echo "
                                                ";
                // line 58
                echo $context["form_helper"]->macro_render_groups(($context["admin"] ?? null), ($context["form"] ?? null), (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["form_tab"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["groups"] ?? null) : null), ($context["has_tab"] ?? null));
                echo "
                                            </div>
                                        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 66
            echo "                        ";
            echo $context["form_helper"]->macro_render_groups(($context["admin"] ?? null), ($context["form"] ?? null), twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "formtabs", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["default"] ?? null) : null), "groups", array()), ($context["has_tab"] ?? null));
            echo "
                    ";
        }
        // line 68
        echo "                </div>
            ";
    }

    // line 71
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 72
        echo "                </div>
            ";
    }

    // line 77
    public function block_formactions($context, array $blocks = array())
    {
        // line 78
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 79
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 127
        echo "                </div>
            ";
    }

    // line 79
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        // line 80
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isxmlhttprequest", array())) {
            // line 81
            echo "                        ";
            // line 82
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))))) {
                // line 83
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                            ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "delete"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "delete", 1 => ($context["object"] ?? null)), "method"))) {
                    // line 85
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 93
            echo "                    ";
        } else {
            // line 94
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "supportsPreviewMode", array())) {
                // line 95
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 100
            echo "                        ";
            // line 101
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))))) {
                // line 102
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "list"), "method"))) {
                    // line 105
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 107
                echo "
                            ";
                // line 108
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "delete"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "delete", 1 => ($context["object"] ?? null)), "method"))) {
                    // line 109
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 112
                echo "
                            ";
                // line 113
                if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isAclEnabled", array(), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "acl"), "method")) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "acl", 1 => ($context["object"] ?? null)), "method"))) {
                    // line 114
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "acl", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 116
                echo "                        ";
            } else {
                // line 117
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 118
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 120
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasroute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "list"), "method"))) {
                    // line 121
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 123
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 125
            echo "                    ";
        }
        // line 126
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  465 => 126,  462 => 125,  456 => 123,  450 => 121,  447 => 120,  441 => 118,  438 => 117,  435 => 116,  427 => 114,  425 => 113,  422 => 112,  415 => 110,  410 => 109,  408 => 108,  405 => 107,  399 => 105,  397 => 104,  391 => 102,  388 => 101,  386 => 100,  380 => 97,  376 => 95,  373 => 94,  370 => 93,  364 => 91,  361 => 90,  355 => 87,  351 => 86,  346 => 85,  344 => 84,  339 => 83,  336 => 82,  334 => 81,  331 => 80,  328 => 79,  323 => 127,  321 => 79,  318 => 78,  315 => 77,  310 => 72,  307 => 71,  302 => 68,  296 => 66,  291 => 63,  272 => 58,  269 => 57,  263 => 54,  260 => 53,  258 => 52,  247 => 49,  244 => 48,  227 => 47,  223 => 45,  205 => 41,  199 => 40,  192 => 39,  189 => 38,  172 => 37,  168 => 35,  166 => 34,  162 => 32,  159 => 31,  156 => 30,  151 => 27,  148 => 26,  143 => 21,  137 => 17,  130 => 132,  127 => 131,  123 => 129,  121 => 77,  116 => 75,  113 => 74,  111 => 71,  108 => 70,  106 => 30,  103 => 29,  101 => 26,  96 => 24,  92 => 22,  89 => 21,  85 => 20,  82 => 19,  78 => 18,  73 => 17,  70 => 15,  66 => 14,  63 => 13,  57 => 10,  54 => 9,  52 => 8,  49 => 7,  46 => 6,  40 => 3,  37 => 2,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_edit_form.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
