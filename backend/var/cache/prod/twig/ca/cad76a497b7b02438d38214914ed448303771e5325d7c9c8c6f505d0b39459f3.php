<?php

/* @SonataAdmin/CRUD/base_edit.html.twig */
class __TwigTemplate_b2b63896785e591e2d9decdd9ddb2f4e2fb9b23bc37278f7bffc221a8fcb6d94 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $_trait_0 = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 38);
        // line 38
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@SonataAdmin/CRUD/base_edit_form.html.twig".'" cannot be used as a trait.', 38, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime('Block "form" is not defined in trait "@SonataAdmin/CRUD/base_edit_form.html.twig".', 38, $this->source);
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter(($context["objectId"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => ($context["object"] ?? null)), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        // line 28
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_edit.html.twig", 28)->display($context);
    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 32
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => $this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getGlobalTemplate("tab_menu_template")), "twig");
    }

    // line 40
    public function block_form($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  99 => 40,  95 => 32,  92 => 31,  88 => 28,  85 => 27,  78 => 24,  75 => 23,  67 => 19,  61 => 17,  58 => 16,  56 => 15,  53 => 14,  44 => 12,  16 => 38,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_edit.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
