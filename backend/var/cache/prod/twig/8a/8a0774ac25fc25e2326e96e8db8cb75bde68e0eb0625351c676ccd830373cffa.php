<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_f7c07c49ce234b06dfcd8aa8bb140808c251e53ca240bde21a06f5eb6f535245 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "route", array()), "name", array());
        // line 18
        echo "    ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "hasAssociationAdmin", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
($context["field_description"] ?? null), "associationadmin", array()), "id", array(0 => ($context["value"] ?? null)), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["field_description"] ?? null), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? null)), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["field_description"] ?? null), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null)), "method"))) {
            // line 22
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? null), 1 => ($context["value"] ?? null), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement(($context["value"] ?? null), ($context["field_description"] ?? null)), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 24,  43 => 22,  41 => 21,  40 => 20,  39 => 19,  37 => 18,  34 => 17,  31 => 16,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/list_orm_one_to_one.html.twig");
    }
}
