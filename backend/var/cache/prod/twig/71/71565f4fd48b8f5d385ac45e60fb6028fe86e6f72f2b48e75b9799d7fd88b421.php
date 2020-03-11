<?php

/* SonataMediaBundle:Extra:pixlr_exit.html.twig */
class __TwigTemplate_0aebb62c56c849340579754aac38ca16a3ea9a9abdf59fdada9e10970fa4d185 extends Twig_Template
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
        // line 11
        echo "<!DOCTYPE html>
<html class=\"no-js\">
    <head>
    </head>

    <body>
        <script type=\"text/javascript\">
            if (window.parent && \"undefined\" !== window.parent.closeModal) {
                window.parent.closeModal();
            }
        </script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Extra:pixlr_exit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Extra:pixlr_exit.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Extra/pixlr_exit.html.twig");
    }
}
