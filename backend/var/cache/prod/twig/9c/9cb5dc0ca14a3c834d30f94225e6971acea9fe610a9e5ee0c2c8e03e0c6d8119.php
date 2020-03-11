<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig */
class __TwigTemplate_266e89a7c99dc7a8eaf13c7a0bf0b8474780d5c6b3b1b20c45207176ca1efc8b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        echo "
";
        // line 14
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "hasassociationadmin", array())) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array())), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "
    <div id=\"field_container_";
            // line 20
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 21
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" >
            ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
                // line 23
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()) == "table")) {
                    // line 24
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) > 0)) {
                        // line 25
                        echo "                        ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 25)->display($context);
                        // line 26
                        echo "                    ";
                    }
                    // line 27
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) > 0)) {
                    // line 28
                    echo "                    ";
                    $context["associationAdmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array());
                    // line 29
                    echo "                    ";
                    $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 29)->display($context);
                    // line 30
                    echo "
                ";
                }
                // line 32
                echo "            ";
            } else {
                // line 33
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            ";
            }
            // line 35
            echo "
        </span>

        ";
            // line 38
            $context["display_create_button"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) &&             // line 40
($context["btn_add"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 42
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "limit", array(), "any", true, true) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 43
($context["form"] ?? null), "children", array())) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "limit", array()))));
            // line 45
            echo "
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
                // line 47
                echo "
            ";
                // line 48
                if (($context["display_create_button"] ?? null)) {
                    // line 49
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 53
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 54
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 55
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 64
                echo "
            ";
                // line 66
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 67
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()) == "table")) {
                        // line 68
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_table.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 68)->display($context);
                        // line 69
                        echo "                ";
                    } else {
                        // line 70
                        echo "                    ";
                        $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 70)->display($context);
                        // line 71
                        echo "                ";
                    }
                    // line 72
                    echo "            ";
                }
                // line 73
                echo "
            ";
                // line 75
                echo "            ";
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 75)->display($context);
                // line 76
                echo "
        ";
            } else {
                // line 78
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 79
                if (($context["display_create_button"] ?? null)) {
                    // line 80
                    echo "                    <a
                        href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 83
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 84
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 85
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 93
                echo "            </span>

            ";
                // line 95
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 95)->display($context);
                // line 96
                echo "
            ";
                // line 97
                $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", 97)->display($context);
                // line 98
                echo "        ";
            }
            // line 99
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 99,  222 => 98,  220 => 97,  217 => 96,  215 => 95,  211 => 93,  205 => 90,  199 => 87,  194 => 85,  191 => 84,  189 => 83,  188 => 81,  185 => 80,  183 => 79,  178 => 78,  174 => 76,  171 => 75,  168 => 73,  165 => 72,  162 => 71,  159 => 70,  156 => 69,  153 => 68,  150 => 67,  147 => 66,  144 => 64,  137 => 60,  131 => 57,  126 => 55,  123 => 54,  121 => 53,  120 => 51,  114 => 49,  112 => 48,  109 => 47,  107 => 46,  104 => 45,  102 => 43,  101 => 42,  100 => 40,  99 => 39,  98 => 38,  93 => 35,  87 => 33,  84 => 32,  80 => 30,  77 => 29,  74 => 28,  71 => 27,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  57 => 22,  53 => 21,  49 => 20,  46 => 19,  36 => 16,  31 => 15,  29 => 14,  26 => 13,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many.html.twig");
    }
}
