<?php

/* PicossSonataExtraAdminBundle:CRUD:show_progress_bar.html.twig */
class __TwigTemplate_7fffc889e8c0c5b0c5dbfb0e6f0ea1e5c16ccaf47a34936fe59307a5dee56cea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "PicossSonataExtraAdminBundle:CRUD:show_progress_bar.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        ob_start();
        // line 16
        echo "        ";
        $context["styles"] = array(0 => "info", 1 => "success", 2 => "warning", 3 => "danger");
        // line 17
        echo "        ";
        $context["style"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "style", array(), "any", true, true) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "style", array()), ($context["styles"] ?? null)))) ? ((" progress-bar-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "style", array()))) : (""));
        // line 18
        echo "        ";
        $context["striped"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "striped", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "striped", array()) == true))) ? (" progress-striped") : (""));
        // line 19
        echo "        ";
        $context["suffix"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "suffix", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "suffix", array())) : (""));
        // line 20
        echo "        <div class=\"progress";
        echo twig_escape_filter($this->env, ($context["striped"] ?? null), "html", null, true);
        echo "\">
            <div class=\"progress-bar";
        // line 21
        echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
        echo "\" role=\"progressbar\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, ((($context["value"] ?? null)) ? (($context["value"] ?? null)) : (0)), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
        echo twig_escape_filter($this->env, ((($context["value"] ?? null)) ? (($context["value"] ?? null)) : (0)), "html", null, true);
        echo "%;\">
                ";
        // line 22
        echo twig_escape_filter($this->env, ((($context["value"] ?? null)) ? (($context["value"] ?? null)) : (0)), "html", null, true);
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:show_progress_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  55 => 21,  50 => 20,  47 => 19,  44 => 18,  41 => 17,  38 => 16,  35 => 15,  32 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:show_progress_bar.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/show_progress_bar.html.twig");
    }
}
