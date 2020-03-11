<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0ddb666b79c6e0923a8e6ee14b5d83dfa41c4ff83d59e6de2c2e5de602a02a93 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/number_widget.html.php", "/data/wwwroot/www.nowhoarts.com/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
