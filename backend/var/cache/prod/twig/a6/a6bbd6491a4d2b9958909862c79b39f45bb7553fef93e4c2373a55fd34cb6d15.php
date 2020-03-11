<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_0b8f72a95c46c2ee51885ec9180dec8906c3e24584f132c545b0fa9a43a52941 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_element"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'widget');
    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
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

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["field_element"] ?? null), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 21,  73 => 19,  67 => 17,  64 => 16,  61 => 15,  55 => 14,  47 => 26,  45 => 25,  41 => 23,  38 => 15,  36 => 14,  30 => 13,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
