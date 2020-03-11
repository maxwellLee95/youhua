<?php

/* SonataMediaBundle:MediaAdmin:inner_row_media.html.twig */
class __TwigTemplate_fa00a7cde0eccec922203afc8ea3391fcf944c32199a2687d743ddc6de825a07 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", 12);
        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_row($context, array $blocks = array())
    {
        // line 15
        echo "
    <div class=\"col-sm-12\">
        <div class=\"pull-left\">
            ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 19
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["object"] ?? null), "admin", array("width" => 90));
            echo "</a>
            ";
        } else {
            // line 21
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["object"] ?? null), "admin", array("height" => 90));
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>
        <span class=\"badge pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
        echo "</span>
        ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
            // line 26
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "method"), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "name", array()), "html", null, true);
            echo "</strong></a>
        ";
        } else {
            // line 28
            echo "            <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "name", array()), "html", null, true);
            echo "</strong>
        ";
        }
        // line 30
        echo "

        <br />
        ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "width", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "width", array()), "html", null, true);
            if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "height", array())) {
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "height", array()), "html", null, true);
            }
            echo "px";
        }
        // line 34
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "length", array()) > 0)) {
            // line 35
            echo "            (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "length", array()), "html", null, true);
            echo ")
        ";
        }
        // line 37
        echo "
        <br />

        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array()))) {
            // line 41
            echo "           ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array()), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "
        ";
        // line 44
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array())) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "authorname", array())))) {
            // line 45
            echo "            ~
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array()))) {
            // line 49
            echo "            &copy; ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "copyright", array()), "html", null, true);
            echo "
        ";
        }
        // line 51
        echo "
        ";
        // line 53
        echo "        ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  145 => 56,  143 => 55,  141 => 54,  139 => 53,  136 => 51,  130 => 49,  128 => 48,  125 => 47,  121 => 45,  119 => 44,  116 => 43,  110 => 41,  108 => 40,  103 => 37,  97 => 35,  94 => 34,  84 => 33,  79 => 30,  73 => 28,  65 => 26,  63 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  42 => 19,  40 => 18,  35 => 15,  32 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:inner_row_media.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/inner_row_media.html.twig");
    }
}
