<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_1d771bf9b2ee0c6d8f6531e7436f513b0a7f66033d52d8f8410e54ac8d632e2c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["acl"] = $this->loadTemplate("@SonataAdmin/CRUD/base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form(($context["aclRolesForm"] ?? null), ($context["permissions"] ?? null), "td_role", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), ($context["object"] ?? null));
        echo "
    ";
    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form(($context["aclUsersForm"] ?? null), ($context["permissions"] ?? null), "td_username", ($context["admin"] ?? null), twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), ($context["object"] ?? null));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  65 => 24,  58 => 22,  55 => 21,  50 => 24,  47 => 21,  44 => 20,  40 => 15,  37 => 14,  33 => 12,  31 => 18,  25 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_acl.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl.html.twig");
    }
}
