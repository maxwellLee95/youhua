<?php

/* PicossSonataExtraAdminBundle:CRUD:untrash.html.twig */
class __TwigTemplate_304f72c8d584ff90738e5b6970d3c24e365cdfbfa3a8690fa4ccd70169e44fb1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "PicossSonataExtraAdminBundle:CRUD:untrash.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "PicossSonataExtraAdminBundle:CRUD:untrash.html.twig", 15)->display($context);
    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_restore", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_restore_confirmation", array("%object%" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => ($context["object"] ?? null)), "method")), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "untrash", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-reply fa-lg\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_restore", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "trash"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "edit", 1 => ($context["object"] ?? null)), "method"))) {
            // line 36
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("restore_or", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "trash"), "method"), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-list\"></i>
                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_trash", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 42
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:untrash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  93 => 40,  88 => 38,  82 => 36,  80 => 35,  76 => 34,  71 => 32,  67 => 31,  61 => 28,  55 => 25,  49 => 21,  46 => 20,  40 => 18,  36 => 15,  33 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:untrash.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/untrash.html.twig");
    }
}
