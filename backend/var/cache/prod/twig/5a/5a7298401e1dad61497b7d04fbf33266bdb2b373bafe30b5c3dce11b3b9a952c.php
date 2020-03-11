<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig */
class __TwigTemplate_97cf22d31a492c5f27054ecd641121dc174fd3c17b763df24f1070a22238362a extends Twig_Template
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
<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 15
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs').sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> div',
        stop: apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 22
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            var parent = jQuery(element).closest('.nav-tabs-custom');
            var tabs = parent.find('> .nav-tabs');
            jQuery('.sonata-ba-sortable-handler', tabs).remove();
            \$('<li class=\"sonata-ba-sortable-handler pull-right\"></li>')
                    .prepend('<span class=\"ui-icon ui-icon-grip-solid-horizontal\"></span>')
                    .appendTo(tabs);
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 35
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs .sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 41
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 43
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " .sonata-ba-tabs').sortable('refresh');
    });

    apply_position_value_";
        // line 46
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "();
</script>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  87 => 43,  83 => 42,  79 => 41,  66 => 35,  48 => 24,  43 => 22,  37 => 19,  30 => 15,  26 => 13,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many_sortable_script_tabs.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_one_to_many_sortable_script_tabs.html.twig");
    }
}
