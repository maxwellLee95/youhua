<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_1269c8c6cf54e93f9618ccfb5c5e976e75fb7e090bda4dc4215c04f37458a9f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "elements", array())) - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "isXmlHttpRequest", array())) ? ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "has", array(0 => "_action"), "method") + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "                ";
            ob_start();
            // line 25
            echo "                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 30
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 32
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 35
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 38
            echo "                            </div>

                            ";
            // line 44
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 45
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 49
            echo "                            </div>
                        </div>

                        ";
            // line 53
            echo "                        ";
            $context["export_formats"] = (((isset($context["export_formats"]) || array_key_exists("export_formats", $context))) ? (_twig_default_filter(($context["export_formats"] ?? null), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getExportFormats", array()))) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getExportFormats", array())));
            // line 54
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 56
            if (((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? null)) > 0)) || ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "export"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, ($context["export_formats"] ?? null))))) {
                // line 57
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 59
                echo "                                &nbsp;
                            ";
            }
            // line 61
            echo "
                            ";
            // line 62
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 65
            echo "                        </div>
                    </div>
                ";
            $context["mosaic_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 68
            echo "                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\"
                     objectId=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">
                    ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "edit", 1 => $context["object"]), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
                // line 71
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], ($context["admin"] ?? null)))), "method"), "html", null, true);
                echo "\">
                            ";
                // line 73
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                        </a>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 75
($context["admin"] ?? null), "hasAccess", array(0 => "show", 1 => $context["object"]), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "show"), "method"))) {
                // line 76
                echo "                        <a class=\"mosaic-inner-link\"
                           href=\"";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "show", 1 => array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier($context["object"], ($context["admin"] ?? null)))), "method"), "html", null, true);
                echo "\">
                            ";
                // line 78
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 81
                echo "                        ";
                echo twig_escape_filter($this->env, ($context["mosaic_content"] ?? null), "html", null, true);
                echo "
                    ";
            }
            // line 83
            echo "                </div>

                ";
            // line 85
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 4) == 0)) {
                // line 86
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 88
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2) == 0)) {
                // line 89
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 91
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    </td>
</tr>
";
    }

    // line 32
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        // line 33
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
    }

    // line 35
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        // line 36
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "</span>
                                ";
    }

    // line 45
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        // line 46
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "description", array()), "html", null, true);
        echo "
                                ";
    }

    // line 62
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        // line 63
        echo "                                ";
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["meta"] ?? null), "title", array()), 40), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 63,  236 => 62,  230 => 47,  225 => 46,  222 => 45,  215 => 36,  212 => 35,  205 => 33,  202 => 32,  195 => 92,  181 => 91,  177 => 89,  174 => 88,  170 => 86,  168 => 85,  164 => 83,  158 => 81,  152 => 78,  148 => 77,  145 => 76,  143 => 75,  138 => 73,  134 => 72,  131 => 71,  129 => 70,  125 => 69,  122 => 68,  117 => 65,  115 => 62,  112 => 61,  108 => 59,  102 => 57,  100 => 56,  96 => 54,  93 => 53,  88 => 49,  86 => 45,  83 => 44,  79 => 38,  76 => 35,  74 => 32,  70 => 30,  66 => 25,  63 => 24,  60 => 23,  43 => 22,  38 => 20,  27 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
