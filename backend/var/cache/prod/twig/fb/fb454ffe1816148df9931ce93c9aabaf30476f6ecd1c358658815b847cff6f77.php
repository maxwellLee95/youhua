<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_d6d64316380c52f9fcf09ac46a7e5d6bbb851c9687329af16db927422d709317 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["items_per_column"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["groups"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "dashboardgroups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((($context["display_group"] ?? null) == false)) {
                    // line 9
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", array(0 => "create"), "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge(array(0 => $context["group"]), ($context["groups"] ?? null));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, ($context["groups"] ?? null)) / ($context["items_per_column"] ?? null)), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if ((($context["column_count"] ?? null) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, (($context["column_count"] ?? null) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groups"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["group"], "roles", array())) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")));
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? null)) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted($context["role"]);
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if (($context["display"] ?? null)) {
                // line 28
                echo "
                ";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array()) || ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["items_per_column"] ?? null)) == 0))) {
                    // line 30
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    ";
                    } else {
                        // line 34
                        echo "                        </ul>
                    ";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if ((($context["column_count"] ?? null) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / ($context["column_count"] ?? null))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) % ($context["items_per_column"] ?? null)) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">
                    ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["group"], "icon", array());
                echo "
                    ";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group"], "label", array()), array(), twig_get_attribute($this->env, $this->source, $context["group"], "label_catalogue", array())), "html", null, true);
                echo "
                </li>

                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 49
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->source, $context["admin"], "hasAccess", array(0 => "create"), "method"))) {
                        // line 50
                        echo "                        ";
                        if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["admin"], "subClasses", array()))) {
                            // line 51
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 52
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["admin"], "label", array()), array(), twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a>
                            </li>
                        ";
                        } else {
                            // line 55
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, $context["admin"], "subclasses", array())));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 56
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 57
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin"], "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["subclass"], array(), twig_get_attribute($this->env, $this->source, $context["admin"], "translationdomain", array())), "html", null, true);
                                echo "</a>
                                </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 60
                            echo "                        ";
                        }
                        // line 61
                        echo "                    ";
                    }
                    // line 62
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "
                ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    // line 65
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                }
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  269 => 72,  255 => 71,  251 => 69,  245 => 65,  243 => 64,  240 => 63,  234 => 62,  231 => 61,  228 => 60,  217 => 57,  214 => 56,  209 => 55,  201 => 52,  198 => 51,  195 => 50,  192 => 49,  188 => 48,  182 => 45,  178 => 44,  175 => 43,  171 => 41,  169 => 40,  166 => 39,  158 => 37,  155 => 36,  151 => 34,  146 => 31,  143 => 30,  141 => 29,  138 => 28,  136 => 27,  133 => 26,  126 => 25,  123 => 24,  117 => 23,  114 => 22,  97 => 21,  94 => 20,  88 => 19,  84 => 17,  82 => 16,  79 => 15,  73 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  49 => 8,  46 => 7,  43 => 6,  39 => 5,  36 => 4,  33 => 3,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Core:add_block.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Core/add_block.html.twig");
    }
}
