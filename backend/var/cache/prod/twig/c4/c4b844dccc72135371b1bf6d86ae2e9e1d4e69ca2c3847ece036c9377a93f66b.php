<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_ce5618c53169d269df19c19f72ff2b534cd4e2c2b1020e3ad35cc223978c1696 extends Twig_Template
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
        echo "

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", array()), "html", null, true);
        echo "\"
    src=\"//player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "src", array()), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "width", array()), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "height", array()), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "frameborder", array()), "html", null, true);
        echo "\"
    ";
        // line 19
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", array()))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "class", array()), "html", null, true);
            echo "\"";
        }
        // line 20
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_fullscreen", array())) {
            echo "allowfullscreen mozallowfullscreen webkitallowfullscreen";
        }
        echo ">
</iframe>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  50 => 19,  46 => 18,  42 => 17,  38 => 16,  32 => 15,  28 => 14,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Provider:view_vimeo.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Provider/view_vimeo.html.twig");
    }
}
