<?php

/* SonataFormatterBundle:Ckeditor:upload.html.twig */
class __TwigTemplate_0ce4311395cb50256f2e2eaa48c20ed73055a001e95981629491a82894aa83a8 extends Twig_Template
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
        echo "<script>window.parent.CKEDITOR.tools.callFunction(";
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \"";
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), twig_escape_filter($this->env, ($context["format"] ?? null), "js"));
        echo "\");</script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Ckeditor:upload.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Ckeditor/upload.html.twig");
    }
}
