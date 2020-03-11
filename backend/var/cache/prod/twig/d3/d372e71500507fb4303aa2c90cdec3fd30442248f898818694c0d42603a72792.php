<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_5e01f1ed502cfc25782e34065834f21bca13e3155a351fca8088f424373c3034 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 22
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 28
        echo ($context["id"] ?? null);
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_append_form_element", (array("code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "code", array()), "elementId" =>         // line 39
($context["id"] ?? null), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 40
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "uniqid", array()), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
($context["sonata_admin"] ?? null), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }
                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_";
        // line 52
        echo ($context["id"] ?? null);
        echo "');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 62
        echo ($context["id"] ?? null);
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 68
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 69
        echo ($context["id"] ?? null);
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 76
        echo ($context["id"] ?? null);
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 80
        echo ($context["id"] ?? null);
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 85
        echo ($context["id"] ?? null);
        echo " = jQuery(\"#field_widget_";
        echo ($context["id"] ?? null);
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 89
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 89,  122 => 85,  114 => 80,  107 => 76,  97 => 69,  93 => 68,  84 => 62,  71 => 52,  59 => 43,  58 => 42,  57 => 41,  56 => 40,  55 => 39,  54 => 38,  53 => 37,  41 => 28,  33 => 22,  30 => 20,  27 => 18,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_association_script.html.twig");
    }
}
