<?php

/* @Framework/Form/tel_widget.html.php */
class __TwigTemplate_adf6160f27fddeeeeaa7c1c9153974b5fca46b78a0e617e1db0dbaea9d2ed3fc extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'tel'));
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/tel_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/tel_widget.html.php", "/data/wwwroot/www.nowhoarts.com/vendor/symfony/framework-bundle/Resources/views/Form/tel_widget.html.php");
    }
}
