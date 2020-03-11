<?php

/* SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig */
class __TwigTemplate_808d58e8e4ef099912666cf1481a23d137abaa97cdc7541b050a56fa30329565 extends Twig_Template
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
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "hasassociationadmin", array())) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array())), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 16
            echo "
    <div id=\"field_container_";
            // line 17
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 18
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" >
            ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
                // line 20
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()) == "table")) {
                    // line 21
                    echo "                    ";
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) > 0)) {
                        // line 22
                        echo "                        ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_table.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 22)->display($context);
                        // line 23
                        echo "                    ";
                    }
                    // line 24
                    echo "                ";
                } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) > 0)) {
                    // line 25
                    echo "                    ";
                    $context["associationAdmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array());
                    // line 26
                    echo "                    ";
                    $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_inline_tabs.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 26)->display($context);
                    // line 27
                    echo "
                ";
                }
                // line 29
                echo "            ";
            } else {
                // line 30
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            ";
            }
            // line 32
            echo "
        </span>

        ";
            // line 35
            $context["display_create_button"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasAccess", array(0 => "create"), "method")) &&             // line 37
($context["btn_add"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 39
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "limit", array(), "any", true, true) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 40
($context["form"] ?? null), "children", array())) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "limit", array()))));
            // line 42
            echo "
        ";
            // line 43
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
                // line 44
                echo "
            ";
                // line 45
                if (($context["display_create_button"] ?? null)) {
                    // line 46
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 50
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 51
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 52
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 57
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 61
                echo "
            ";
                // line 63
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "sortable", array(), "any", true, true)) {
                    // line 64
                    echo "                ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()) == "table")) {
                        // line 65
                        echo "                    ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 65)->display($context);
                        // line 66
                        echo "                ";
                    } else {
                        // line 67
                        echo "                    ";
                        $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_to_many_sortable_script_tabs.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 67)->display($context);
                        // line 68
                        echo "                ";
                    }
                    // line 69
                    echo "            ";
                }
                // line 70
                echo "
            ";
                // line 72
                echo "            ";
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_one_script.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 72)->display($context);
                // line 73
                echo "
        ";
            } else {
                // line 75
                echo "            <span id=\"field_actions_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 76
                if (($context["display_create_button"] ?? null)) {
                    // line 77
                    echo "                    <a
                        href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 80
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    // line 81
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                    >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 87
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 90
                echo "            </span>

            ";
                // line 92
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 92)->display($context);
                // line 93
                echo "
            ";
                // line 94
                $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", 94)->display($context);
                // line 95
                echo "        ";
            }
            // line 96
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 96,  216 => 95,  214 => 94,  211 => 93,  209 => 92,  205 => 90,  199 => 87,  193 => 84,  188 => 82,  185 => 81,  183 => 80,  182 => 78,  179 => 77,  177 => 76,  172 => 75,  168 => 73,  165 => 72,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  147 => 65,  144 => 64,  141 => 63,  138 => 61,  131 => 57,  125 => 54,  120 => 52,  117 => 51,  115 => 50,  114 => 48,  108 => 46,  106 => 45,  103 => 44,  101 => 43,  98 => 42,  96 => 40,  95 => 39,  94 => 37,  93 => 36,  92 => 35,  87 => 32,  81 => 30,  78 => 29,  74 => 27,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  59 => 22,  56 => 21,  53 => 20,  51 => 19,  47 => 18,  43 => 17,  40 => 16,  30 => 13,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD/Association:edit_one_to_many.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_one_to_many.html.twig");
    }
}
