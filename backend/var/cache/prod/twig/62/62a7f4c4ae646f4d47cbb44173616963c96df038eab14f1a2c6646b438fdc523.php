<?php

/* PicossSonataExtraAdminBundle:CRUD:list_progress_bar.html.twig */
class __TwigTemplate_10af82e018cb7f876d3e091e3f4bba372a4c94c42d18e5a3d14213ef4fdef07e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "PicossSonataExtraAdminBundle:CRUD:list_progress_bar.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
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
        echo "        <div class=\"progress ";
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
        return "PicossSonataExtraAdminBundle:CRUD:list_progress_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  54 => 21,  49 => 20,  46 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list_progress_bar.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list_progress_bar.html.twig");
    }
}
