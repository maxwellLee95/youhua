<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ceeb5c8dc0d2f88feae2b8e2328b5e027551e34d449d3bc19cb92ceb97b71a26 extends Twig_Template
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
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "/data/wwwroot/www.nowhoarts.com/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
