<?php

/* SonataMediaBundle:MediaAdmin:edit.html.twig */
class __TwigTemplate_7774a14de5540387b4661e7d5e2bcfd9543d53a0c76c47f0c01432b2caf5e863 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 29
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_edit.html.twig", "SonataMediaBundle:MediaAdmin:edit.html.twig", 29);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'form' => array($this, 'block_form'),
            'sonata_media_show_reference' => array($this, 'block_sonata_media_show_reference'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        $context["macros"] = $this;
        // line 29
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        button.btn.btn-sm.btn-default.pixlr-link {
            margin-bottom: 0;
        }
    </style>
";
    }

    // line 40
    public function block_form($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"row\">
        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", array())) {
            // line 43
            echo "            <div class=\"col-md-6\">
                ";
            // line 44
            $this->displayBlock('sonata_media_show_reference', $context, $blocks);
            // line 121
            echo "            </div>
        ";
        }
        // line 123
        echo "
        <div class=\"col-md-6\">
            ";
        // line 126
        echo "            ";
        $this->displayParentBlock("form", $context, $blocks);
        echo "
        </div>
    </div>

    ";
        // line 130
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pixlr", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pixlr", array()), "isEditable", array(0 => ($context["object"] ?? null)), "method"))) {
            // line 131
            echo "        <div class=\"modal fade\" id=\"pixlr-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "</h4>
                    </div>
                    <div class=\"modal-body\" id=\"pixlr-modal-body\">
                    </div>
                </div>
            </div>
        </div>

        <script type=\"text/javascript\">
            window.closeModal = function() {
                jQuery('#pixlr-modal').modal('hide');
            }

            jQuery('button.pixlr-link').on('click', function(e) {
                e.preventDefault();
                var url = jQuery(this).attr('data-href');
                jQuery(\"#pixlr-modal-body\").html('<iframe width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\" allowtransparency=\"true\" src=\"'+url+'\"></iframe>');
            });

            Admin.setup_list_modal(jQuery('#pixlr-modal'));
        </script>
    ";
        }
    }

    // line 44
    public function block_sonata_media_show_reference($context, array $blocks = array())
    {
        // line 45
        echo "                    <div class=\"box box-primary\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.media_preview", array(), "SonataMediaBundle"), "html", null, true);
        echo "</h3>
                            ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pixlr", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pixlr", array()), "isEditable", array(0 => ($context["object"] ?? null)), "method"))) {
            // line 49
            echo "                                <div class=\"box-tools pull-right\">
                                    <button class=\"btn btn-sm btn-default pixlr-link\"
                                            data-href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_pixlr_open_editor", array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "html", null, true);
            echo "\"
                                            data-toggle=\"modal\"
                                            data-target=\"#pixlr-modal\"
                                            >
                                        <i class=\"fa fa-pencil-square-o\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.edit_with_pixlr", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                    </button>
                                </div>
                            ";
        }
        // line 59
        echo "
                        </div>
                        <div class=\"box-body table-responsive\">

                            <div class=\"text-center\">
                                ";
        // line 64
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(($context["object"] ?? null), "reference", array("class" => "img-responsive img-rounded"));
        // line 65
        echo "                            </div>

                            <table class=\"table\">
                                <tr>
                                    <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.size", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "width", array()), "html", null, true);
        echo " x ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "height", array()), "html", null, true);
        echo "
                                        ";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "size", array()) > 0)) {
            echo "(";
            echo $context["macros"]->macro_bytesToSize(twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "size", array()));
            echo ")";
        }
        // line 73
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th>";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.content_type", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "contenttype", array()), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.cdn", array(), "SonataMediaBundle"), "html", null, true);
        echo "</th>
                                    <td>
                                        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "cdnisflushable", array())) {
            // line 83
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.to_be_flushed", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                        ";
        } else {
            // line 85
            echo "                                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.flushed_at", array(), "SonataMediaBundle"), "html", null, true);
            echo "
                                            ";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "cdnflushat", array())), "html", null, true);
            echo "
                                        ";
        }
        // line 88
        echo "                                    </td>
                                </tr>
                                <tr>
                                    <th><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_download", array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.protected_download_url", array(), "SonataMediaBundle"), "html", null, true);
        echo "</a></th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_media_download", array("id" => $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->getUrlsafeIdentifier(($context["object"] ?? null)))), "html", null, true);
        echo "\" />
                                        <span class=\"label label-warning\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.protected_download_url_notice", array(), "SonataMediaBundle"), "html", null, true);
        echo "</span> ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pool", array()), "downloadStrategy", array(0 => ($context["object"] ?? null)), "method"), "description", array());
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <a href=\"";
        // line 99
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), "reference");
        echo "\" target=\"_blank\">reference</a>
                                    </th>
                                    <td>
                                        <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
        // line 102
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), "reference");
        echo "\" />
                                    </td>
                                </tr>

                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_media"] ?? null), "pool", array()), "formatNamesByContext", array(0 => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "context", array())), "method"));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 107
            echo "                                    <tr>
                                        <th>
                                            <a href=\"";
            // line 109
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), $context["name"]);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
                                        </th>
                                        <td>
                                            <input type=\"text\" class=\"form-control\" onClick=\"this.select();\" readonly=\"readonly\" value=\"";
            // line 112
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->path(($context["object"] ?? null), $context["name"]);
            echo "\" />
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                            </table>
                        </div>

                    </div>
                ";
    }

    // line 14
    public function macro_bytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            ob_start();
            // line 16
            echo "    ";
            $context["kilobyte"] = 1024;
            // line 17
            echo "    ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 18
            echo "
    ";
            // line 19
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 20
                echo "        ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 21
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 22
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2) . " KB"), "html", null, true);
                echo "
    ";
            } else {
                // line 24
                echo "        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2) . " MB"), "html", null, true);
                echo "
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 24,  325 => 22,  323 => 21,  318 => 20,  316 => 19,  313 => 18,  310 => 17,  307 => 16,  305 => 15,  293 => 14,  285 => 116,  275 => 112,  267 => 109,  263 => 107,  259 => 106,  252 => 102,  246 => 99,  236 => 94,  232 => 93,  225 => 91,  220 => 88,  215 => 86,  210 => 85,  204 => 83,  202 => 82,  197 => 80,  191 => 77,  187 => 76,  182 => 73,  176 => 72,  170 => 71,  165 => 69,  159 => 65,  157 => 64,  150 => 59,  143 => 55,  136 => 51,  132 => 49,  130 => 48,  126 => 47,  122 => 45,  119 => 44,  92 => 136,  83 => 131,  81 => 130,  73 => 126,  69 => 123,  65 => 121,  63 => 44,  60 => 43,  58 => 42,  55 => 41,  52 => 40,  40 => 32,  37 => 31,  33 => 29,  31 => 12,  15 => 29,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:edit.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/edit.html.twig");
    }
}
