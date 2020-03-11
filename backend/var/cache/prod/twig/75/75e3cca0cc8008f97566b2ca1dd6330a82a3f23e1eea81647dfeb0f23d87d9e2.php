<?php

/* SonataFormatterBundle:Block:block_formatter.html.twig */
class __TwigTemplate_73a20dc1b003b9c457e7f8cbf1a2bc467f465db0bd820398e0e70957e7b992a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataFormatterBundle:Block:block_formatter.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Block:block_formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 15,  31 => 14,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Block:block_formatter.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Block/block_formatter.html.twig");
    }
}
