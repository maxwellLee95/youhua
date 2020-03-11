<?php

/* PicossSonataExtraAdminBundle:Button:trash_button.html.twig */
class __TwigTemplate_889cce38aaddb7fd5402b2b3707a3292e175fa09a28ee1cfb9bf4edab92ca676 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "trash"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "trash"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_trash", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:Button:trash_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  31 => 14,  28 => 13,  26 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:Button:trash_button.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/Button/trash_button.html.twig");
    }
}
