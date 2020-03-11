<?php

/* @SonataAdmin/CRUD/base_show.html.twig */
class __TwigTemplate_aa97631649230eea46fab59daeb56f98150c10f13e6b40ef3cc6e590e9543ca2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_show", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => ($context["object"] ?? null)), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        // line 23
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_show.html.twig", 23)->display($context);
    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")), "twig");
        // line 30
        echo "
";
    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array())) == 1) && ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array()))) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null) != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if (($context["has_tab"] ?? null)) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array())) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()));
                // line 45
                echo "                        <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "has", array(0 => "_tab"), "method") && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) == 1)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "_tab"), "method") == ($context["_tab_name"] ?? null)))) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#";
                // line 46
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["show_tab"], "label", array()), array(), ((twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->source, $context["show_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        ";
                $context["_tab_name"] = ((("tab_" . twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "uniqid", array())) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()));
                // line 56
                echo "                        <div
                            class=\"tab-pane fade";
                // line 57
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "has", array(0 => "_tab"), "method") && twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "_tab"), "method") == ($context["_tab_name"] ?? null)))) {
                    echo " in active";
                }
                echo "\"
                            id=\"";
                // line 58
                echo twig_escape_filter($this->env, ($context["_tab_name"] ?? null), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 62
                if ((twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", array()) != false)) {
                    // line 63
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->source, $context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 65
                echo "
                                    ";
                // line 66
                $context["groups"] = twig_get_attribute($this->env, $this->source, $context["show_tab"], "groups", array());
                // line 67
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable(twig_get_attribute($this->env, $this->source,         // line 74
($context["admin"] ?? null), "showtabs", array()))) {
            // line 75
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showtabs", array()), "default", array()), "groups", array());
            // line 76
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 78
        echo "
    </div>

    ";
        // line 81
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => ($context["admin"] ?? null), "object" => ($context["object"] ?? null))));
        echo "
";
    }

    // line 84
    public function block_show_groups($context, array $blocks = array())
    {
        // line 85
        echo "    <div class=\"row\">
        ";
        // line 86
        $this->displayBlock('field_row', $context, $blocks);
        // line 118
        echo "
    </div>
";
    }

    // line 86
    public function block_field_row($context, array $blocks = array())
    {
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 88
            echo "                ";
            $context["show_group"] = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "showgroups", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["code"]] ?? null) : null);
            // line 89
            echo "
                <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((((isset($context["no_padding"]) || array_key_exists("no_padding", $context))) ? (_twig_default_filter(($context["no_padding"] ?? null), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 94
            $this->displayBlock('show_title', $context, $blocks);
            // line 97
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 103
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 110
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                                </tbody>
                            </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        ";
    }

    // line 94
    public function block_show_title($context, array $blocks = array())
    {
        // line 95
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "label", array()), array(), ((twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["show_group"] ?? null), "translation_domain", array()), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
    }

    // line 103
    public function block_show_field($context, array $blocks = array())
    {
        // line 104
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["elements"] ?? null), ($context["field_name"] ?? null), array(), "array", true, true)) {
            // line 106
            echo "                                                ";
            echo $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderViewElement($this->env, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["elements"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[($context["field_name"] ?? null)] ?? null) : null), ($context["object"] ?? null));
            echo "
                                            ";
        }
        // line 108
        echo "                                        </tr>
                                    ";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 108,  388 => 106,  386 => 105,  383 => 104,  380 => 103,  373 => 95,  370 => 94,  366 => 117,  347 => 111,  333 => 110,  330 => 103,  313 => 102,  306 => 97,  304 => 94,  298 => 91,  292 => 90,  289 => 89,  286 => 88,  268 => 87,  265 => 86,  259 => 118,  257 => 86,  254 => 85,  251 => 84,  245 => 81,  240 => 78,  234 => 76,  231 => 75,  229 => 74,  225 => 72,  205 => 67,  203 => 66,  200 => 65,  194 => 63,  192 => 62,  185 => 58,  179 => 57,  176 => 56,  173 => 55,  156 => 54,  151 => 51,  133 => 47,  127 => 46,  120 => 45,  117 => 44,  100 => 43,  96 => 41,  94 => 40,  91 => 39,  89 => 38,  84 => 36,  80 => 34,  77 => 33,  72 => 30,  69 => 27,  66 => 26,  62 => 23,  59 => 22,  52 => 19,  49 => 18,  42 => 15,  39 => 14,  30 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_show.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show.html.twig");
    }
}
