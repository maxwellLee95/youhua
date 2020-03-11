<?php

/* SonataMediaBundle:Gallery:view.html.twig */
class __TwigTemplate_3d6ec268018443cf7f119d373b35cba5286697bc01f2625140ce30f1e3cc12b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
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
";
        // line 14
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 19
        echo "
<h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

<div class=\"sonata-media-gallery-media-list\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "GalleryHasMedias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["galleryHasMedia"]) {
            // line 24
            echo "        <div class=\"media sonata-media-gallery-media-item\">
            <a class=\"pull-left sonata-media-gallery-media-item-link\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_media_view", array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", array())))), "html", null, true);
            echo "\">
                ";
            // line 26
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", array()), twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "defaultFormat", array()), array("class" => "media-object"));
            // line 27
            echo "            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", array()), "name", array()), "html", null, true);
            echo "</h4>
                <p>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["galleryHasMedia"], "media", array()), "description", array());
            echo "</p>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryHasMedia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    // line 14
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => "gallery_view", "gallery" => ($context["gallery"] ?? null), "current_uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 16,  82 => 15,  79 => 14,  74 => 34,  64 => 30,  60 => 29,  56 => 27,  54 => 26,  50 => 25,  47 => 24,  43 => 23,  37 => 20,  34 => 19,  32 => 14,  29 => 13,  27 => 12,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Gallery:view.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Gallery/view.html.twig");
    }
}
