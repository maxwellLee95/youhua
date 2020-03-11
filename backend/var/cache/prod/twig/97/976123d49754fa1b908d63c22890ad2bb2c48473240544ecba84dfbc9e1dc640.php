<?php

/* PicossSonataExtraAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_334971a0f5434fde44fef30f696ebef0dc4c817e7d965d27586dead6549f74ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "PicossSonataExtraAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["revisions"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 31
            echo "                            <tr class=\"";
            if (((($context["currentRevision"] ?? null) != false) && (twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()) == twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "version", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "PicossSonataExtraAdminBundle:CRUD:history.html.twig", 33)->display($context);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["revision"], "username", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 36
            if (((($context["currentRevision"] ?? null) == false) || (twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()) == twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "version", array())))) {
                // line 37
                echo "                                        /
                                    ";
            } else {
                // line 39
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => ($context["object"] ?? null), 2 => array("base_revision" => twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "version", array()), "compare_revision" => twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 41
            echo "                                </td>
                                <td>
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_view_revision", 1 => ($context["object"] ?? null), 2 => array("revision" => twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()))), "method"), "html", null, true);
            echo "\" class=\"btn btn-small btn-info revision-link\" data-loading-text=\"<i class='fa fa-refresh fa-spin'></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "\" rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-search-plus\"></i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>

                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_revert", 1 => ($context["object"] ?? null), 2 => array("revision" => twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()))), "method"), "html", null, true);
            echo "\" class=\"btn btn-small btn-success\" rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "version", array()), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-random\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_revert_revision", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </td>
                            </tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {
            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                var btn = jQuery(this);
                btn.button('loading');

                action = jQuery(this).hasClass('revision-link')
                        ? 'show'
                        : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show') {
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').fadeOut('slow', function() {
                            jQuery('#revision-detail').html(data);
                            jQuery('#revision-detail').fadeIn('slow');
                            btn.button('reset');
                        });
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  144 => 48,  138 => 47,  132 => 44,  124 => 43,  120 => 41,  110 => 39,  106 => 37,  104 => 36,  99 => 34,  95 => 33,  91 => 32,  84 => 31,  67 => 30,  60 => 26,  56 => 25,  52 => 24,  48 => 23,  44 => 22,  35 => 15,  32 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:history.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
