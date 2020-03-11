<?php

/* PicossSonataExtraAdminBundle:CRUD:list_image.html.twig */
class __TwigTemplate_4b32464b700c3393d14d0ded38b6a9cc6e092a19de175b50a144fa0e85473222 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "PicossSonataExtraAdminBundle:CRUD:list_image.html.twig", 12);
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
        $context["width"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "width", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "width", array())) : (50));
        // line 17
        echo "        ";
        $context["height"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "height", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "height", array())) : (50));
        // line 18
        echo "        ";
        if (($context["value"] ?? null)) {
            // line 19
            echo "            <img src=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "prefix", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "prefix", array()), "html", null, true);
            }
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" style=\"max-width:";
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "px; max-height:";
            echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
            echo "px;\"/>
        ";
        } else {
            // line 21
            echo "            <div class=\"no-image\" style=\"width:";
            echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
            echo "px; height:";
            echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
            echo "px;\"></div>
        ";
        }
        // line 23
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:list_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  59 => 21,  46 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list_image.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list_image.html.twig");
    }
}
