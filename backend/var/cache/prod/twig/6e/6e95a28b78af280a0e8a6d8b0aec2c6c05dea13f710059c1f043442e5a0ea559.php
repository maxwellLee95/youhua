<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_fd16e711b0539aab5c1da7a664cba886186aacd02768d2b31bad04aef4253081 extends Twig_Template
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
        if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "canAccessObject", array(0 => "show", 1 => ($context["object"] ?? null)), "method") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "show", array())) > 0)) && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "show"), "method"))) {
            // line 12
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "show", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
            ";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  28 => 13,  25 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Button:show_button.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Button/show_button.html.twig");
    }
}
