<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_8f40ec1f5b60278a09e75be7657bed7d870be30f0bfcd64c75cb66371eedecd8 extends Twig_Template
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
        // line 11
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"panel panel-default ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()))) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array())) {
                // line 19
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 21
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())) {
                // line 22
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), array(), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())), "html", null, true);
                echo "
                    ";
            } else {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
                echo "
                    ";
            }
            // line 26
            echo "                </h4>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"panel-body\">
            <div class=\"media\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 33
            echo "                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feed"], "title", array()), "html", null, true);
            echo "</a>
                        </h5>
                        ";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["feed"], "description", array());
            echo "
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                    No feeds available.
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  104 => 40,  96 => 37,  87 => 35,  83 => 33,  78 => 32,  73 => 29,  68 => 26,  62 => 24,  56 => 22,  53 => 21,  47 => 19,  45 => 18,  41 => 16,  39 => 15,  34 => 14,  31 => 13,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataBlockBundle:Block:block_core_rss.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_rss.html.twig");
    }
}
