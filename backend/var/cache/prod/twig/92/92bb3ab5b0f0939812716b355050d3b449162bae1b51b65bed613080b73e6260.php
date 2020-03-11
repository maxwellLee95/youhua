<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_93c30f35615aa5e47a3781c63f0ad9aff9b24a1af0ac194f0b6aac129219a3f7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  30 => 12,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:Form:color.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/core-bundle/src/Resources/views/Form/color.html.twig");
    }
}
