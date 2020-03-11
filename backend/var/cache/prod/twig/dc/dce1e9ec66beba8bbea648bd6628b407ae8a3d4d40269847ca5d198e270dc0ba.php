<?php

/* SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_44b3f09036d685d464c4cb5ce7151281b66214f95e7f31b849680c8a5dcfa1a0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", 12);
        $this->blocks = array(
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/list_outer_rows_mosaic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        // line 15
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
";
    }

    // line 18
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        // line 19
        echo "    <span class=\"mosaic-box-label label label-primary pull-right\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>

    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "width", array()), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "length", array()) > 0)) {
            // line 23
            echo "        (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "length", array()), "html", null, true);
            echo ")
    ";
        }
        // line 25
        echo "
    <br />

    ";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array()))) {
            // line 29
            echo "       ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array()), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array())))) {
            // line 33
            echo "        ~
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array()))) {
            // line 37
            echo "        &copy; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array()), "html", null, true);
            echo "
    ";
        }
        // line 39
        echo "
";
    }

    // line 42
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 44
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 45
($context["admin"] ?? null), "isGranted", array(0 => "SHOW", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "show"), "method"))) {
            // line 46
            echo "        <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "show", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", array()), 40), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", array()), 40), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 48,  125 => 46,  123 => 45,  116 => 44,  113 => 43,  110 => 42,  105 => 39,  99 => 37,  97 => 36,  94 => 35,  90 => 33,  88 => 32,  85 => 31,  79 => 29,  77 => 28,  72 => 25,  66 => 23,  63 => 22,  53 => 21,  47 => 19,  44 => 18,  37 => 15,  34 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:list_outer_rows_mosaic.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/list_outer_rows_mosaic.html.twig");
    }
}
