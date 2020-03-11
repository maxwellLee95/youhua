<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig */
class __TwigTemplate_4b15540ba1a3c704f54b48caca6663e21fee25517cad1da41c8d96fd6cd0fbde extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field($context, array $blocks = array())
    {
        // line 17
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 18
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "route", array()), "name", array());
        // line 19
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 20
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "hasassociationadmin", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 21
($context["field_description"] ?? null), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? null)), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 22
($context["field_description"] ?? null), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? null), 1 => $context["element"]), "method"))) {
                // line 23
                echo "            <li>
                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? null), 1 => $context["element"], 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], ($context["field_description"] ?? null)), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 29
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["element"], ($context["field_description"] ?? null)), "html", null, true);
                echo "</li>
        ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  70 => 31,  64 => 29,  57 => 25,  53 => 24,  50 => 23,  48 => 22,  47 => 21,  45 => 20,  40 => 19,  38 => 18,  35 => 17,  32 => 16,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_many.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/show_orm_one_to_many.html.twig");
    }
}