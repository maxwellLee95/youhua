<?php

/* PicossSonataExtraAdminBundle:CRUD:list_string_template.html.twig */
class __TwigTemplate_00530e125b0f797467fd6fc4435da258ea6ad9ccfa7c2922b79570bab38a9530 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "PicossSonataExtraAdminBundle:CRUD:list_string_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        ob_start();
        // line 16
        echo "        ";
        $context["template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "string_template", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "string_template", array())) : ("{{ value }}"));
        // line 17
        echo "        ";
        $this->loadTemplate(twig_template_from_string($this->env, ($context["template"] ?? null)), "PicossSonataExtraAdminBundle:CRUD:list_string_template.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:list_string_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list_string_template.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list_string_template.html.twig");
    }
}
