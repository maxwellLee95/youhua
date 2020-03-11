<?php

/* SonataMediaBundle:Gallery:index.html.twig */
class __TwigTemplate_42381768aa314a13e929e3758d34053f7f7bf1b312c673f155d965bb59a4d97f extends Twig_Template
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
";
        // line 12
        // token for sonata_template_box, however the box is disabled
        // line 13
        echo "
<ul>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galleries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_media_gallery_view", array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["gallery"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  36 => 16,  32 => 15,  28 => 13,  26 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Gallery:index.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Gallery/index.html.twig");
    }
}
