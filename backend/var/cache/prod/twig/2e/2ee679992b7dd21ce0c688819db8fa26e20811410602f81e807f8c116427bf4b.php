<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_df0ec00717cc9435b3408dfac1ec873bd86b2315c5ad57baf7504fb1e6b8ad8b extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array())), "html", null, true);
            echo "
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 16
($context["sonata_admin"] ?? null), "edit", array()) == "inline")) {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "formfielddescriptions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 18
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["form"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["field_description"], "name", array())] ?? null) : null), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 21
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
                // line 23
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array()), "id", array(0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", array())), "method")) {
                    // line 25
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", array("code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 26
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 27
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "id", array(0 => twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "value", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 28
($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 29
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array()))));
                    // line 30
                    echo "
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 31
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()))) {
                    // line 32
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 36
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 41
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" >
                ";
                // line 42
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
                echo "
            </span>
        ";
            }
            // line 45
            echo "
        <div id=\"field_actions_";
            // line 46
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 47
            $context["display_btn_list"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "list"), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && ($context["btn_list"] ?? null));
            // line 48
            echo "            ";
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? null));
            // line 49
            echo "            ";
            if ((($context["display_btn_list"] ?? null) || ($context["display_btn_add"] ?? null))) {
                // line 50
                echo "            <div class=\"btn-group\">
                ";
                // line 51
                if (($context["display_btn_list"] ?? null)) {
                    // line 52
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                    // line 53
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_list"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if (($context["display_btn_add"] ?? null)) {
                    // line 63
                    echo "                    <a  href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                    // line 64
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_add"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 72
                echo "            </div>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if (((((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "list") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && ($context["btn_delete"] ?? null))) {
                // line 76
                echo "                <a  href=\"\"
                    onclick=\"return remove_selected_element_";
                // line 77
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-danger btn-sm sonata-ba-action\"
                    title=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-minus-circle\"></i>
                    ";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["btn_delete"] ?? null), array(), ($context["btn_catalogue"] ?? null)), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 85
            echo "        </div>

        ";
            // line 87
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", 87)->display($context);
            // line 88
            echo "    </div>

    ";
            // line 90
            $this->loadTemplate("@SonataDoctrineORMAdmin/CRUD/edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", 90)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 90,  213 => 88,  211 => 87,  207 => 85,  201 => 82,  195 => 79,  190 => 77,  187 => 76,  185 => 75,  182 => 74,  178 => 72,  172 => 69,  166 => 66,  161 => 64,  156 => 63,  154 => 62,  151 => 61,  145 => 58,  139 => 55,  134 => 53,  129 => 52,  127 => 51,  124 => 50,  121 => 49,  118 => 48,  116 => 47,  112 => 46,  109 => 45,  103 => 42,  98 => 41,  92 => 38,  88 => 36,  82 => 33,  79 => 32,  77 => 31,  74 => 30,  72 => 29,  71 => 28,  70 => 27,  69 => 26,  67 => 25,  65 => 24,  60 => 23,  58 => 22,  53 => 21,  43 => 18,  38 => 17,  36 => 16,  31 => 15,  29 => 14,  26 => 13,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_to_one.html.twig");
    }
}
