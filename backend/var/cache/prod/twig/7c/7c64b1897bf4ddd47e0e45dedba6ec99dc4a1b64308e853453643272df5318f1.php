<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_bae7a3f3254c41a0bb23edd47cee1c0aff8bbae028de5f3e2ea673199678ac08 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array())) {
            // line 16
            echo "            <h3>
                ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array())) {
                // line 18
                echo "                    <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                ";
            }
            // line 20
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())) {
                // line 21
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), array(), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())), "html", null, true);
                echo "
                ";
            } else {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
                echo "
                ";
            }
            // line 25
            echo "            </h3>
        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        if ((($context["media"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array()))) {
            // line 30
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(($context["media"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array()), array());
            // line 31
            echo "            ";
        } else {
            // line 32
            echo "                ";
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  85 => 33,  83 => 32,  80 => 31,  77 => 30,  75 => 29,  71 => 27,  67 => 25,  61 => 23,  55 => 21,  52 => 20,  46 => 18,  44 => 17,  41 => 16,  39 => 15,  34 => 14,  31 => 13,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_media.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_media.html.twig");
    }
}
