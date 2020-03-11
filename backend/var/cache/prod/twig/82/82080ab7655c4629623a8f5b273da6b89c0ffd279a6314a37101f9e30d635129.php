<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_224879073a6b4d7f5fc74d89c5e440f8ac3ed5e98c38fd8feaee755e1ac635a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        <meta data-sonata-admin='";
        // line 34
        echo json_encode(array("config" => array("CONFIRM_EXIT" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method"), "USE_SELECT2" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method"), "USE_ICHECK" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method"), "USE_STICKYFORMS" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")), "translations" => array("CONFIRM_EXIT" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm_exit", array(), "SonataAdminBundle"))));
        // line 44
        echo "'
        >

        ";
        // line 47
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "
        <title>
        ";
        // line 83
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 109
        echo "        </title>
    </head>
    <body
            ";
        // line 112
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 118
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 222
        echo "
        ";
        // line 223
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 361
        echo "    </div>

    ";
        // line 363
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 364
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    </body>
</html>
";
    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 47
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 48
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 49
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 56
        echo "
            ";
        // line 57
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 62
        echo "
            ";
        // line 64
        echo "            ";
        $context["localeForMoment"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForMoment($context);
        // line 65
        echo "            ";
        if (($context["localeForMoment"] ?? null)) {
            // line 66
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" .             // line 68
($context["localeForMoment"] ?? null)) . ".js")), "html", null, true);
            // line 70
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            $context["localeForSelect2"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getCanonicalizedLocaleForSelect2($context);
            // line 76
            echo "                ";
            if (($context["localeForSelect2"] ?? null)) {
                // line 77
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . ($context["localeForSelect2"] ?? null)) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 79
            echo "            ";
        }
        // line 80
        echo "        ";
    }

    // line 54
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        // line 55
        echo "            ";
    }

    // line 57
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        // line 58
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 59
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            ";
    }

    // line 83
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 84
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 86
        if ( !twig_test_empty(($context["_title"] ?? null))) {
            // line 87
            echo "                ";
            echo strip_tags(($context["_title"] ?? null));
            echo "
            ";
        } else {
            // line 89
            echo "                ";
            if ((isset($context["action"]) || array_key_exists("action", $context))) {
                // line 90
                echo "                    -
                    ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 92
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        // line 93
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) != 2)) {
                            // line 94
                            echo "                                &gt;
                            ";
                        }
                        // line 97
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 98
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", array());
                        // line 99
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 100
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 103
                        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                        echo "
                        ";
                    }
                    // line 105
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                ";
            }
            // line 107
            echo "            ";
        }
        // line 108
        echo "        ";
    }

    // line 112
    public function block_body_attributes($context, array $blocks = array())
    {
        // line 113
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "cookies", array()), "get", array(0 => "sonata_sidebar_hide"), "method")) {
            // line 115
            echo "sidebar-collapse";
        }
        // line 116
        echo "\"";
    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 220
        echo "            </header>
        ";
    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" 
                           role=\"button\" title=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("toggle_navigation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 151
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 190
        echo "                        </div>

                        ";
        // line 192
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 218
        echo "                    </nav>
                ";
    }

    // line 151
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 152
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 153
        if (( !twig_test_empty(($context["_breadcrumb"] ?? null)) || (isset($context["action"]) || array_key_exists("action", $context)))) {
            // line 154
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 155
            if (twig_test_empty(($context["_breadcrumb"] ?? null))) {
                // line 156
                echo "                                                ";
                if ((isset($context["action"]) || array_key_exists("action", $context))) {
                    // line 157
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["breadcrumbs_builder"] ?? null), "breadcrumbs", array(0 => ($context["admin"] ?? null), 1 => ($context["action"] ?? null)), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 158
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 159
                        $context["label"] = twig_get_attribute($this->env, $this->source, $context["menu"], "label", array());
                        // line 160
                        if ( !(($context["translation_domain"] ?? null) === false)) {
                            // line 161
                            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? null));
                        }
                        // line 164
                        if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                            // line 165
                            echo "                                                            <li>
                                                                ";
                            // line 166
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu"], "uri", array()))) {
                                // line 167
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 168
                                if (twig_get_attribute($this->env, $this->source, $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 169
                                    echo ($context["label"] ?? null);
                                } else {
                                    // line 171
                                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                }
                                // line 173
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 175
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 177
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 179
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 181
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 182
                    echo "                                                ";
                }
                // line 183
                echo "                                            ";
            } else {
                // line 184
                echo "                                                ";
                echo ($context["_breadcrumb"] ?? null);
                echo "
                                            ";
            }
            // line 186
            echo "                                        </ol>
                                    ";
        }
        // line 188
        echo "                                </div>
                            ";
    }

    // line 192
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 193
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")))) {
            // line 194
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 196
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 204
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 214
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 217
        echo "                        ";
    }

    // line 196
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        // line 197
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 201
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("add_block"), "SonataAdminBundle::standard_layout.html.twig", 201)->display($context);
        // line 202
        echo "                                            </li>
                                        ";
    }

    // line 204
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        // line 205
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 210
        $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("user_block"), "SonataAdminBundle::standard_layout.html.twig", 210)->display($context);
        // line 211
        echo "                                                </ul>
                                            </li>
                                        ";
    }

    // line 223
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 224
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 257
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 259
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 359
        echo "            </div>
        ";
    }

    // line 224
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 225
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 227
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 254
        echo "                    </section>
                </aside>
            ";
    }

    // line 227
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 228
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 242
        echo "
                            ";
        // line 243
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 247
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 253
        echo "                        ";
    }

    // line 228
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 229
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "search"), "method")) {
            // line 230
            echo "                                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                        <div class=\"input-group custom-search-form\">
                                            <input type=\"text\" name=\"q\" value=\"";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                ";
        }
        // line 241
        echo "                            ";
    }

    // line 243
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 244
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 245
        echo "                                ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("sonata_admin_sidebar", array("template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("knp_menu_template")));
        echo "
                            ";
    }

    // line 247
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 248
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 249
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 251
        echo "                                </p>
                            ";
    }

    // line 249
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        // line 250
        echo "                                    ";
    }

    // line 259
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 260
        echo "                    <section class=\"content-header\">

                        ";
        // line 262
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 320
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 323
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 357
        echo "                    </section>
                ";
    }

    // line 262
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 263
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 319
        echo "                        ";
    }

    // line 263
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 264
        echo "                                ";
        if (((( !twig_test_empty(($context["_navbar_title"] ?? null)) ||  !twig_test_empty(        // line 265
($context["_tab_menu"] ?? null))) ||  !twig_test_empty(        // line 266
($context["_actions"] ?? null))) ||  !twig_test_empty(        // line 267
($context["_list_filters_actions"] ?? null)))) {
            // line 269
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 271
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 278
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 280
            if ( !twig_test_empty(($context["_tab_menu"] ?? null))) {
                // line 281
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 282
                echo ($context["_tab_menu"] ?? null);
                echo "
                                                    </div>
                                                ";
            }
            // line 285
            echo "
                                                ";
            // line 286
            if (((((isset($context["admin"]) || array_key_exists("admin", $context)) && (isset($context["action"]) || array_key_exists("action", $context))) && (($context["action"] ?? null) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", array())) > 1))) {
                // line 287
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 288
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 289
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 291
                echo "                                                    </div>
                                                ";
            }
            // line 293
            echo "
                                                ";
            // line 294
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 310
            echo "
                                                ";
            // line 311
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? null))) {
                // line 312
                echo "                                                    ";
                echo ($context["_list_filters_actions"] ?? null);
                echo "
                                                ";
            }
            // line 314
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 318
        echo "                            ";
    }

    // line 271
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 272
        echo "                                                ";
        if ( !twig_test_empty(($context["_navbar_title"] ?? null))) {
            // line 273
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 274
            echo ($context["_navbar_title"] ?? null);
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 277
        echo "                                            ";
    }

    // line 294
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        // line 295
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter(($context["_actions"] ?? null), array("<li>" => "", "</li>" => ""))))) {
            // line 296
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 297
            if ((twig_length_filter($this->env, twig_split_filter($this->env, ($context["_actions"] ?? null), "</a>")) > 2)) {
                // line 298
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 299
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 301
                echo ($context["_actions"] ?? null);
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 305
                echo "                                                            ";
                echo ($context["_actions"] ?? null);
                echo "
                                                        ";
            }
            // line 307
            echo "                                                        </ul>
                                                    ";
        }
        // line 309
        echo "                                                ";
    }

    // line 323
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 324
        echo "
                            ";
        // line 325
        $this->displayBlock('notice', $context, $blocks);
        // line 328
        echo "
                            ";
        // line 329
        if ( !twig_test_empty(($context["_preview"] ?? null))) {
            // line 330
            echo "                                <div class=\"sonata-ba-preview\">";
            echo ($context["_preview"] ?? null);
            echo "</div>
                            ";
        }
        // line 332
        echo "
                            ";
        // line 333
        if ( !twig_test_empty(($context["_content"] ?? null))) {
            // line 334
            echo "                                <div class=\"sonata-ba-content\">";
            echo ($context["_content"] ?? null);
            echo "</div>
                            ";
        }
        // line 336
        echo "
                            ";
        // line 337
        if ( !twig_test_empty(($context["_show"] ?? null))) {
            // line 338
            echo "                                <div class=\"sonata-ba-show\">";
            echo ($context["_show"] ?? null);
            echo "</div>
                            ";
        }
        // line 340
        echo "
                            ";
        // line 341
        if ( !twig_test_empty(($context["_form"] ?? null))) {
            // line 342
            echo "                                <div class=\"sonata-ba-form\">";
            echo ($context["_form"] ?? null);
            echo "</div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty(($context["_list_filters"] ?? null))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo ($context["_list_filters"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "
                            ";
        // line 351
        if ( !twig_test_empty(($context["_list_table"] ?? null))) {
            // line 352
            echo "                                <div class=\"row\">
                                    ";
            // line 353
            echo ($context["_list_table"] ?? null);
            echo "
                                </div>
                            ";
        }
        // line 356
        echo "                        ";
    }

    // line 325
    public function block_notice($context, array $blocks = array())
    {
        // line 326
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 326)->display($context);
        // line 327
        echo "                            ";
    }

    // line 364
    public function block_bootlint($context, array $blocks = array())
    {
        // line 365
        echo "            ";
        // line 366
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1050 => 366,  1048 => 365,  1045 => 364,  1041 => 327,  1038 => 326,  1035 => 325,  1031 => 356,  1025 => 353,  1022 => 352,  1020 => 351,  1017 => 350,  1011 => 347,  1008 => 346,  1006 => 345,  1003 => 344,  997 => 342,  995 => 341,  992 => 340,  986 => 338,  984 => 337,  981 => 336,  975 => 334,  973 => 333,  970 => 332,  964 => 330,  962 => 329,  959 => 328,  957 => 325,  954 => 324,  951 => 323,  947 => 309,  943 => 307,  937 => 305,  930 => 301,  925 => 299,  922 => 298,  920 => 297,  917 => 296,  914 => 295,  911 => 294,  907 => 277,  901 => 274,  898 => 273,  895 => 272,  892 => 271,  888 => 318,  882 => 314,  876 => 312,  874 => 311,  871 => 310,  869 => 294,  866 => 293,  862 => 291,  847 => 289,  843 => 288,  840 => 287,  838 => 286,  835 => 285,  829 => 282,  826 => 281,  824 => 280,  820 => 278,  818 => 271,  814 => 269,  812 => 267,  811 => 266,  810 => 265,  808 => 264,  805 => 263,  801 => 319,  798 => 263,  795 => 262,  790 => 357,  788 => 323,  783 => 320,  781 => 262,  777 => 260,  774 => 259,  770 => 250,  767 => 249,  762 => 251,  760 => 249,  757 => 248,  754 => 247,  747 => 245,  744 => 244,  738 => 243,  734 => 241,  720 => 232,  714 => 230,  711 => 229,  708 => 228,  704 => 253,  701 => 247,  698 => 244,  696 => 243,  693 => 242,  690 => 228,  687 => 227,  681 => 254,  679 => 227,  675 => 225,  672 => 224,  667 => 359,  665 => 259,  661 => 257,  658 => 224,  655 => 223,  649 => 211,  647 => 210,  640 => 205,  637 => 204,  632 => 202,  630 => 201,  624 => 197,  621 => 196,  617 => 217,  612 => 214,  609 => 204,  607 => 196,  603 => 194,  600 => 193,  597 => 192,  592 => 188,  588 => 186,  582 => 184,  579 => 183,  576 => 182,  562 => 181,  556 => 179,  552 => 177,  546 => 175,  542 => 173,  539 => 171,  536 => 169,  534 => 168,  529 => 167,  527 => 166,  524 => 165,  522 => 164,  519 => 161,  517 => 160,  515 => 159,  513 => 158,  495 => 157,  492 => 156,  490 => 155,  487 => 154,  485 => 153,  482 => 152,  479 => 151,  474 => 218,  472 => 192,  468 => 190,  466 => 151,  459 => 147,  455 => 146,  451 => 144,  448 => 143,  444 => 142,  440 => 140,  434 => 138,  431 => 137,  423 => 135,  421 => 134,  416 => 133,  413 => 132,  410 => 131,  402 => 127,  398 => 125,  395 => 124,  390 => 220,  387 => 143,  384 => 131,  382 => 124,  379 => 123,  376 => 122,  372 => 116,  369 => 115,  367 => 114,  364 => 113,  361 => 112,  357 => 108,  354 => 107,  351 => 106,  337 => 105,  332 => 103,  329 => 100,  327 => 99,  325 => 98,  323 => 97,  319 => 94,  316 => 93,  313 => 92,  296 => 91,  293 => 90,  290 => 89,  284 => 87,  282 => 86,  276 => 84,  273 => 83,  269 => 61,  260 => 59,  255 => 58,  252 => 57,  248 => 55,  245 => 54,  241 => 80,  238 => 79,  232 => 77,  229 => 76,  226 => 75,  223 => 74,  220 => 72,  216 => 70,  214 => 68,  212 => 66,  209 => 65,  206 => 64,  203 => 62,  201 => 57,  198 => 56,  195 => 54,  192 => 53,  188 => 51,  179 => 49,  174 => 48,  171 => 47,  164 => 29,  161 => 28,  155 => 26,  148 => 371,  145 => 370,  142 => 364,  140 => 363,  136 => 361,  134 => 223,  131 => 222,  129 => 122,  123 => 118,  121 => 112,  116 => 109,  114 => 83,  110 => 81,  108 => 53,  105 => 52,  103 => 47,  98 => 44,  96 => 39,  95 => 38,  94 => 37,  93 => 36,  92 => 34,  89 => 33,  87 => 28,  82 => 26,  79 => 25,  77 => 23,  75 => 22,  73 => 21,  71 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  55 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle::standard_layout.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
