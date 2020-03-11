<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9e3e34bd435f1accd708a6a9d6b0a612436d5b3dd0eb41d6cb60266e73ce50a1 extends Twig_Template
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
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "/data/wwwroot/www.nowhoarts.com/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
