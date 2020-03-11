<?php

/* admin/order_edit_action.html.twig */
class __TwigTemplate_ad91f9d53fb535fbf57bc2ab6ef79b4d950b853e472839a7cbe487d857fb565b extends Twig_Template
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
        // line 1
        if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method")) && twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "status", array()), $this->extensions['Fresh\DoctrineEnumBundle\Twig\Extension\EnumValuesAsArrayTwigExtension']->getEnumValuesAsArray("OrderActionType")))) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "admin/order_edit_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/order_edit_action.html.twig", "/data/wwwroot/www.nowhoarts.com/templates/admin/order_edit_action.html.twig");
    }
}
