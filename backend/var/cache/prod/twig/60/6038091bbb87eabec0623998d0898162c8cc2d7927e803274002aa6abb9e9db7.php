<?php

/* PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig */
class __TwigTemplate_55dfe83334789fe44500163a19a58980b2d9dab3c2ae195afc7fe0a6475a9a13 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? null), "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig", 17)->display($context);
        echo "</li>
";
    }

    // line 20
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "sidemenu", array(0 => ($context["action"] ?? null)), "method"), array("currentClass" => "active"), "list");
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_history_revert", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_history_revert_confirmation", array("%object%" => twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => ($context["object"] ?? null)), "method")), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_revert", 1 => ($context["object"] ?? null), 2 => array("revision" => ($context["revision"] ?? null))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-random\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_history_revert", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method"))) {
            // line 38
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("history_revert_or", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit\"></i>
                            ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_history_list", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 44
        echo "                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 44,  104 => 42,  99 => 40,  93 => 38,  91 => 37,  87 => 36,  82 => 34,  78 => 33,  72 => 30,  66 => 27,  60 => 23,  57 => 22,  51 => 20,  45 => 17,  41 => 16,  36 => 15,  33 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:history_revert.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/history_revert.html.twig");
    }
}
