<?php

/* @SonataAdmin/CRUD/base_history.html.twig */
class __TwigTemplate_9dc0cb332b2a6c5a65efb2e0e57644e7916b28cb3fb1323260fd5d3839955c1d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "@SonataAdmin/CRUD/base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_history.html.twig", 15)->display($context);
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
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
            // line 36
            echo "                            <tr class=\"";
            if (((($context["currentRevision"] ?? null) != false) && (twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()) == twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate($this->extensions['Sonata\AdminBundle\Twig\Extension\TemplateRegistryExtension']->getAdminTemplate("history_revision_timestamp", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "code", array())), "@SonataAdmin/CRUD/base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["revision"], "username", array()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_view_revision", 1 => ($context["object"] ?? null), 2 => array("revision" => twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if (((($context["currentRevision"] ?? null) == false) || (twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()) == twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => ($context["object"] ?? null), 2 => array("base_revision" => twig_get_attribute($this->env, $this->source, ($context["currentRevision"] ?? null), "rev", array()), "compare_revision" => twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
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
        // line 50
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

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  136 => 47,  126 => 45,  122 => 43,  120 => 42,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  92 => 36,  75 => 35,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  42 => 19,  39 => 18,  35 => 15,  32 => 14,  23 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/base_history.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_history.html.twig");
    }
}
