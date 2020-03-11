<?php

/* SonataAdminBundle:CRUD:display_boolean.html.twig */
class __TwigTemplate_8bfc961464b9b8200b486130b467e466d8cf41c5d7e95c03459038ca20b9373a extends Twig_Template
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
        // line 12
        ob_start();
        // line 13
        echo "    ";
        if (($context["value"] ?? null)) {
            // line 14
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_yes", array(), "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_type_no", array(), "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "inverse", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "inverse", array()), false)) : (false))) ? ( !($context["value"] ?? null)) : (($context["value"] ?? null)))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 25,  57 => 24,  54 => 23,  51 => 22,  48 => 21,  45 => 20,  43 => 19,  40 => 18,  37 => 17,  34 => 16,  31 => 15,  28 => 14,  25 => 13,  23 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:display_boolean.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/display_boolean.html.twig");
    }
}
