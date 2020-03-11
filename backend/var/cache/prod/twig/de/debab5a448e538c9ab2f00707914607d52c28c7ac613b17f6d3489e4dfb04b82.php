<?php

/* SonataMediaBundle:Block:block_gallery_list.html.twig */
class __TwigTemplate_ebdb4c4d2a629618c4662ee0bcd8be25adc51b6960b1c8e009a095e136847ebb extends Twig_Template
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
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_gallery_list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))) {
            // line 6
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array())) {
                // line 9
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 11
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())) {
                // line 12
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), array(), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())), "html", null, true);
                echo "
                    ";
            } else {
                // line 14
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
                echo "
                    ";
            }
            // line 16
            echo "                </h4>
            </div>
        ";
        }
        // line 19
        echo "
        <div class=\"panel-body\">
            <div class=\"list-group\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 23
            echo "                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mode", array()) == "admin") && (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)))) {
                // line 24
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "edit", 2 => array("id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", array()), "context" => twig_get_attribute($this->env, $this->source, $context["gallery"], "context", array()))), "method"), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["gallery"], "enabled", array())) {
                    // line 26
                    echo "                                <span class=\"label label-success pull-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_gallery_enabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                } else {
                    // line 28
                    echo "                                <span class=\"label label-danger pull-right\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_gallery_disabled", array(), "SonataMediaBundle"), "html", null, true);
                    echo "</span>
                            ";
                }
                // line 30
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            } else {
                // line 33
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_media_gallery_view", array("id" => twig_get_attribute($this->env, $this->source, $context["gallery"], "id", array()))), "html", null, true);
                echo "\" class=\"list-group-item\">
                            ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["gallery"], "name", array()), "html", null, true);
                echo "
                        </a>
                    ";
            }
            // line 37
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                    <span class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_galleries_found", array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>

            ";
        // line 42
        if (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "mode", array()) == "admin") && (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)))) {
            // line 43
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "context", array())) {
                // line 44
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "list", 2 => array("context" => twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "context", array()))), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 47
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "url", array(0 => "sonata.media.admin.gallery", 1 => "list"), "method"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-list\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("view_all_galleries", array(), "SonataMediaBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  164 => 50,  155 => 47,  146 => 44,  143 => 43,  141 => 42,  137 => 40,  128 => 38,  123 => 37,  117 => 34,  112 => 33,  105 => 30,  99 => 28,  93 => 26,  91 => 25,  86 => 24,  83 => 23,  78 => 22,  73 => 19,  68 => 16,  62 => 14,  56 => 12,  53 => 11,  47 => 9,  45 => 8,  41 => 6,  39 => 5,  34 => 4,  31 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_gallery_list.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_gallery_list.html.twig");
    }
}
