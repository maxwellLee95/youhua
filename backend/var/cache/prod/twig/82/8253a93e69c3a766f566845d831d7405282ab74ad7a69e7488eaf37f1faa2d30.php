<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_bf0cd76c3f57a117cb61dcc9628b7554300a90b4fdb689a2b46bdbdfcfa12df8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", array())) {
            // line 6
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attributes", array());
            // line 7
            $context["is_dropdown"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? null)) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if ((isset($context["matcher"]) || array_key_exists("matcher", $context))) {
                echo " ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, ($context["matcher"] ?? null), "isCurrent", array(0 => ($context["item"] ?? null)), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 24
($context["matcher"] ?? null), "isAncestor", array(0 => ($context["item"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentClass", array())));
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 30
($context["item"] ?? null), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ancestorClass", array())));
                }
            }
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "firstClass", array())));
            }
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? null)) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? null), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? null))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? null), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? null)) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source,             // line 62
($context["item"] ?? null), "uri", array())) && ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "current", array()) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? null)) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->macro_attributes(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge(($context["classes"] ?? null), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => twig_join_filter(($context["classes"] ?? null), " ")));
        // line 111
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->macro_attributes(($context["attributes"] ?? null));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 123
($context["item"] ?? null), "label", array()), twig_get_attribute($this->env, $this->source,         // line 124
($context["item"] ?? null), "getExtra", array(0 => "translation_params", 1 => array()), "method"), twig_get_attribute($this->env, $this->source,         // line 125
($context["item"] ?? null), "getExtra", array(0 => "translation_domain", 1 => ((twig_get_attribute($this->env, $this->source,         // line 127
($context["item"] ?? null), "getParent", array(), "method")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 127,  281 => 125,  280 => 124,  279 => 123,  278 => 122,  275 => 121,  266 => 116,  260 => 114,  258 => 113,  253 => 112,  251 => 111,  249 => 110,  247 => 109,  245 => 108,  243 => 107,  240 => 106,  237 => 105,  229 => 101,  223 => 99,  221 => 98,  216 => 97,  213 => 96,  210 => 95,  202 => 91,  196 => 89,  194 => 88,  187 => 87,  184 => 86,  181 => 85,  175 => 81,  171 => 79,  169 => 78,  166 => 77,  159 => 72,  157 => 71,  152 => 68,  148 => 65,  144 => 63,  142 => 62,  139 => 61,  137 => 60,  133 => 59,  130 => 57,  128 => 56,  125 => 54,  123 => 53,  120 => 51,  117 => 49,  115 => 48,  113 => 47,  110 => 45,  108 => 44,  106 => 43,  103 => 41,  100 => 39,  98 => 38,  95 => 36,  93 => 35,  89 => 31,  87 => 30,  85 => 29,  83 => 28,  81 => 27,  77 => 25,  75 => 24,  73 => 23,  71 => 22,  68 => 21,  66 => 19,  63 => 17,  59 => 15,  57 => 14,  55 => 12,  52 => 10,  50 => 9,  48 => 8,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  37 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Core/tab_menu_template.html.twig");
    }
}
