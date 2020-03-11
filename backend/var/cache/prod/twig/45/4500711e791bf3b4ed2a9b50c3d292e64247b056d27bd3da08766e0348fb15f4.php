<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_02f5c4a64c0c0f68816b2931b2368a18156af8b2b743de2c4cff0a897dbb0b14 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "
    ";
        // line 15
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 17
($context["route"] ?? null)) && twig_get_attribute($this->env, $this->source,         // line 18
($context["admin"] ?? null), "hasRoute", array(0 => ($context["route"] ?? null)), "method")) && twig_get_attribute($this->env, $this->source,         // line 19
($context["admin"] ?? null), "hasAccess", array(0 => ($context["route"] ?? null), 1 => ((twig_in_filter(($context["route"] ?? null), array(0 => "show", 1 => "edit"))) ? (($context["object"] ?? null)) : (null))), "method"))) {
            // line 21
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => ($context["route"] ?? null), 1 => ($context["object"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 22
            $this->displayBlock('field', $context, $blocks);
            // line 35
            echo "</a>
    ";
        } else {
            // line 37
            echo "        ";
            $context["isEditable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "editable", array())) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? null)), "method"));
            // line 38
            echo "        ";
            $context["xEditableType"] = $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getXEditableType(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", array()));
            // line 39
            echo "
        ";
            // line 40
            if ((($context["isEditable"] ?? null) && ($context["xEditableType"] ?? null))) {
                // line 41
                echo "            ";
                $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_set_object_field_value", twig_array_merge(((twig_get_attribute($this->env, $this->source,                 // line 43
($context["admin"] ?? null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getPersistentParameters", array()), array())) : (array())), array("context" => "list", "field" => twig_get_attribute($this->env, $this->source,                 // line 45
($context["field_description"] ?? null), "name", array()), "objectId" => twig_get_attribute($this->env, $this->source,                 // line 46
($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "code" => twig_get_attribute($this->env, $this->source,                 // line 47
($context["admin"] ?? null), "code", array(0 => ($context["object"] ?? null)), "method"))));
                // line 50
                echo "
            ";
                // line 51
                if (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", array()) == "date") &&  !twig_test_empty(($context["value"] ?? null)))) {
                    // line 52
                    echo "                ";
                    $context["data_value"] = twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "format", array(0 => "Y-m-d"), "method");
                    // line 53
                    echo "            ";
                } elseif (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "type", array()) == "boolean") && twig_test_empty(($context["value"] ?? null)))) {
                    // line 54
                    echo "                ";
                    $context["data_value"] = 0;
                    // line 55
                    echo "            ";
                } else {
                    // line 56
                    echo "                ";
                    $context["data_value"] = ($context["value"] ?? null);
                    // line 57
                    echo "            ";
                }
                // line 58
                echo "
            <span ";
                // line 59
                $this->displayBlock('field_span_attributes', $context, $blocks);
                // line 64
                echo ">
                ";
                // line 65
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 68
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 70
            echo "    ";
        }
        // line 71
        echo "</td>
";
    }

    // line 22
    public function block_field($context, array $blocks = array())
    {
        // line 23
        echo "                ";
        ob_start();
        // line 24
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 25
            echo "                    ";
            $context["collapse"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "collapse", array());
            // line 26
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
                ";
        }
        // line 33
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 34
        echo "            ";
    }

    // line 59
    public function block_field_span_attributes($context, array $blocks = array())
    {
        echo "class=\"x-editable\"
                  data-type=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? null), "html", null, true);
        echo "\"
                  data-value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["data_value"] ?? null), "html", null, true);
        echo "\"
                  data-title=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "translationDomain", array())), "html", null, true);
        echo "\"
                  data-pk=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\"
                  data-url=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  190 => 63,  186 => 62,  182 => 61,  178 => 60,  173 => 59,  169 => 34,  166 => 33,  160 => 31,  153 => 29,  149 => 28,  145 => 27,  142 => 26,  139 => 25,  136 => 24,  133 => 23,  130 => 22,  125 => 71,  122 => 70,  116 => 68,  110 => 65,  107 => 64,  105 => 59,  102 => 58,  99 => 57,  96 => 56,  93 => 55,  90 => 54,  87 => 53,  84 => 52,  82 => 51,  79 => 50,  77 => 47,  76 => 46,  75 => 45,  74 => 43,  72 => 41,  70 => 40,  67 => 39,  64 => 38,  61 => 37,  57 => 35,  55 => 22,  51 => 21,  49 => 19,  48 => 18,  47 => 17,  46 => 16,  45 => 15,  42 => 14,  40 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_list_field.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_list_field.html.twig");
    }
}
