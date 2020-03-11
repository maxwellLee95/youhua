<?php

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_b0aed30abc0eab79d6fbd635ac443651c48e9ecc60f1c43582a185a3ed16ec18 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 11
        $this->parent = $this->loadTemplate("@SonataBlock/Block/block_base.html.twig", "SonataMediaBundle:Block:block_gallery.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
            'element_indicator' => array($this, 'block_element_indicator'),
            'element_display' => array($this, 'block_element_display'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataBlock/Block/block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array())) {
            // line 15
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "class", array()), "html", null, true);
            echo "\">
            ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "title", array())) {
                // line 17
                echo "                <h3>
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
                echo "                </h3>
            ";
            }
            // line 28
            echo "
            ";
            // line 29
            // token for sonata_template_box, however the box is disabled
            // line 30
            echo "
            <div id=\"carousel-";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"carousel slide\"
                 data-interval=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "pauseTime", array()), "html", null, true);
            echo "\"
                 ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "startPaused", array()) != 1)) {
                echo "data-ride=\"carousel\"";
            }
            // line 34
            echo "            >

                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 39
                echo "                        ";
                $this->displayBlock("element_indicator", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["elements"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 46
                echo "                        ";
                $this->displayBlock("element_display", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "id", array()), "html", null, true);
            echo "\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"></span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "id", array()), "html", null, true);
            echo "\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\"></span>
                </a>
            </div>
        </div>
    ";
        }
    }

    // line 62
    public function block_element_indicator($context, array $blocks = array())
    {
        // line 63
        echo "    <li data-target=\"#carousel-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "id", array()), "html", null, true);
        echo "\" data-slide-to=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", array()), "html", null, true);
        echo "\"";
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", array())) {
            echo " class=\"active\"";
        }
        echo "></li>
";
    }

    // line 66
    public function block_element_display($context, array $blocks = array())
    {
        // line 67
        echo "    <div class=\"item";
        if (twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "first", array())) {
            echo " active";
        }
        echo "\">
        ";
        // line 68
        echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->media(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "media", array()), twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "format", array()), array());
        // line 69
        echo "        <div class=\"carousel-caption\">
            <h4>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "title", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "caption", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 71,  230 => 70,  227 => 69,  225 => 68,  218 => 67,  215 => 66,  202 => 63,  199 => 62,  188 => 54,  182 => 51,  177 => 48,  160 => 46,  143 => 45,  137 => 41,  120 => 39,  103 => 38,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  82 => 30,  80 => 29,  77 => 28,  73 => 26,  67 => 24,  61 => 22,  58 => 21,  52 => 19,  50 => 18,  47 => 17,  45 => 16,  40 => 15,  37 => 14,  34 => 13,  15 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Block:block_gallery.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Block/block_gallery.html.twig");
    }
}
