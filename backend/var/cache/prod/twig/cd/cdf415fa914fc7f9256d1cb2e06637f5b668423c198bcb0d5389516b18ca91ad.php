<?php

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_417ea0b09c859eb945a430505cdde4c077998b715f5b608dea027e3b165203bf extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_block"] ?? null), "templates", array()), "block_base", array()), "SonataMediaBundle:Block:block_feature_media.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", array()), "html", null, true);
        echo "\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "orientation", array()), "html", null, true);
        echo "\">
            ";
        // line 18
        if ((($context["media"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array()))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(($context["media"] ?? null), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array()), array());
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array())) {
            // line 26
            echo "            <h3>
                ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array())) {
                // line 28
                echo "                    <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                ";
            }
            // line 30
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())) {
                // line 31
                echo "                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), array(), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "translation_domain", array())), "html", null, true);
                echo "
                ";
            } else {
                // line 33
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array()), "html", null, true);
                echo "
                ";
            }
            // line 35
            echo "            </h3>
        ";
        }
        // line 37
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "content", array()), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 39,  95 => 37,  91 => 35,  85 => 33,  79 => 31,  76 => 30,  70 => 28,  68 => 27,  65 => 26,  63 => 25,  59 => 23,  56 => 22,  54 => 21,  51 => 20,  48 => 19,  46 => 18,  42 => 17,  37 => 15,  34 => 14,  31 => 13,  22 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_feature_media.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_feature_media.html.twig");
    }
}
