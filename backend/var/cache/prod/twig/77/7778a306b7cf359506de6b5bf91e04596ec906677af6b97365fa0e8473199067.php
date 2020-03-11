<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_058d781f2a2ab8ac155844413740f94dd6ef67b4a37c5648ac8bf1e238fcf7a2 extends Twig_Template
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
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["show_empty_boxes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "container", array()), "getParameter", array(0 => "sonata.admin.configuration.global_search.empty_boxes"), "method");
        // line 16
        echo "    ";
        $context["visibility_class"] = ("sonata-search-result-" . ($context["show_empty_boxes"] ?? null));
        // line 17
        echo "    ";
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", array(), "method")))) {
            // line 18
            echo "        ";
            $context["visibility_class"] = "sonata-search-result-show";
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    <div class=\"col-lg-4 col-md-6 search-box-item ";
        // line 21
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"box box-solid ";
        // line 22
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
            <div class=\"box-header with-border ";
        // line 23
        echo twig_escape_filter($this->env, ($context["visibility_class"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 24
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array()), "")) : (""));
        // line 25
        echo "                ";
        echo ($context["icon"] ?? null);
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 31
        if ((($context["pager"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getNbResults", array(), "method") > 0))) {
            // line 32
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 33
($context["admin"] ?? null), "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "create"), "method"))) {
            // line 34
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 38
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasAccess", array(0 => "list"), "method"))) {
            // line 39
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        echo "                </div>
            </div>
            ";
        // line 45
        if ((($context["pager"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", array(), "method")))) {
            // line 46
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["pager"] ?? null), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 49
                echo "                            ";
                $context["link"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 50
                echo "                            ";
                if (($context["link"] ?? null)) {
                    // line 51
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 53
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 55
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 59
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  156 => 61,  152 => 59,  147 => 56,  141 => 55,  135 => 53,  127 => 51,  124 => 50,  121 => 49,  117 => 48,  113 => 46,  111 => 45,  107 => 43,  99 => 39,  96 => 38,  88 => 34,  86 => 33,  81 => 32,  79 => 31,  72 => 27,  66 => 25,  64 => 24,  60 => 23,  56 => 22,  52 => 21,  49 => 20,  46 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  22 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Block:block_search_result.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_search_result.html.twig");
    }
}
