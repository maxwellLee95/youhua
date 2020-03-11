<?php

/* PicossSonataExtraAdminBundle:CRUD:show_string_template.html.twig */
class __TwigTemplate_247b347d12d031128ddca2aa2e49a58f2adb053f8ea840215d946d4e03f5dc85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "PicossSonataExtraAdminBundle:CRUD:show_string_template.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        $context["template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "string_template", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "string_template", array())) : ("{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}"));
        // line 17
        echo "    ";
        $this->loadTemplate(twig_template_from_string($this->env, ($context["template"] ?? null)), "PicossSonataExtraAdminBundle:CRUD:show_string_template.html.twig", 17)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:show_string_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  37 => 16,  35 => 15,  32 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:show_string_template.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/show_string_template.html.twig");
    }
}
