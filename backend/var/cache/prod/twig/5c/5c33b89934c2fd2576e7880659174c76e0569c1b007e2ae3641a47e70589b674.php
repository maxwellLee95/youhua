<?php

/* PicossSonataExtraAdminBundle:CRUD:list_label.html.twig */
class __TwigTemplate_7ea552fd8c87c849e928966a2778068fc31b2691fe38465a96f9f3e73839a29a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "PicossSonataExtraAdminBundle:CRUD:list_label.html.twig", 12);
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
        $context["styles"] = array(0 => "primary", 1 => "success", 2 => "info", 3 => "warning", 4 => "danger");
        // line 17
        echo "        ";
        $context["style"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "style", array(), "any", true, true) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "style", array()), ($context["styles"] ?? null)))) ? ((" label-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "style", array()))) : (" label-default"));
        // line 18
        echo "        <span class=\"label";
        echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:list_label.html.twig";
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
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list_label.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list_label.html.twig");
    }
}
