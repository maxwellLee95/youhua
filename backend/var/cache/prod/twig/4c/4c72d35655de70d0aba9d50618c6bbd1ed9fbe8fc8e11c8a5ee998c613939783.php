<?php

/* SonataFormatterBundle:Form:ckeditor.html.twig */
class __TwigTemplate_331978d1e0a158a11eccf301646fddc76fc2cb29237ff8b7c9c813994f7cd774 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ckeditor_plugins"] ?? null));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 2
            echo "\t";
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ckeditor_templates"] ?? null));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 6
            echo "\t";
            echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderTemplate($context["template_name"], $context["template"]);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
";
        // line 9
        if ((isset($context["ckeditor_style_sets"]) || array_key_exists("ckeditor_style_sets", $context))) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ckeditor_style_sets"] ?? null));
            foreach ($context['_seq'] as $context["style_set_name"] => $context["style_set"]) {
                // line 11
                echo "        ";
                echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderStylesSet($context["style_set_name"], $context["style_set"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['style_set_name'], $context['style_set'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 14
        echo "
";
        // line 15
        echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderWidget(($context["ckeditor_field_id"] ?? null), ($context["ckeditor_configuration"] ?? null), array("input_sync" => true));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  75 => 15,  72 => 14,  62 => 11,  57 => 10,  55 => 9,  52 => 8,  43 => 6,  39 => 5,  36 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:ckeditor.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Form/ckeditor.html.twig");
    }
}
