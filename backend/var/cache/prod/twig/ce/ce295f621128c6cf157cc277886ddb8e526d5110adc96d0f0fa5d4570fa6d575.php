<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_1fb451514f9e257c84237688c8891ab601b0adac870b151ab6475c7f54a8c7ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_element"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["edit"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? null), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_element"] ?? null), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if ((($context["inline"] ?? null) == "natural")) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 28,  90 => 25,  86 => 23,  82 => 21,  76 => 19,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  55 => 29,  53 => 28,  49 => 26,  47 => 25,  44 => 24,  42 => 14,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
