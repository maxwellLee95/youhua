<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_6d366a562c64897e35c27e98bc90006ad9d06f63c253a85d32ce31ee09cbfaf3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
            'sonata_simple_formatter_type_widget' => array($this, 'block_sonata_simple_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["format_field"] ?? null)] ?? null) : null), 'widget');
        echo "
        ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["format_field_options"] ?? null), "choices", array())) > 1)) {
            // line 7
            echo "            <i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
            echo "</i>
        ";
        }
        // line 9
        echo "    </div>

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[($context["source_field"] ?? null)] ?? null) : null), 'widget');
        echo "
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[($context["format_field"] ?? null)] ?? null) : null), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[($context["source_field"] ?? null)] ?? null) : null), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();

                ";
        // line 24
        echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[($context["source_field"] ?? null)] ?? null) : null), "vars", array()), "id", array()));
        echo "

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        ";
        // line 43
        $this->loadTemplate("@SonataFormatter/Form/ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 43)->display(array_merge($context, array("ckeditor_field_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[($context["source_field"] ?? null)] ?? null) : null), "vars", array()), "id", array()))));
        // line 44
        echo "                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", array())) && is_array($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779) || $__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779 instanceof ArrayAccess ? ($__internal_921de08f973aabd87ecb31654784e2efda7404f12bd27e8e56991608c76e7779[($context["format_field"] ?? null)] ?? null) : null), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
    }

    // line 62
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        // line 63
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->

    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "');

            ";
        // line 77
        if ((($context["format"] ?? null) == "textile")) {
            // line 78
            echo "                elms.markItUp(markitup_sonataTextileSettings);
            ";
        } elseif ((        // line 79
($context["format"] ?? null) == "markdown")) {
            // line 80
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);
            ";
        } elseif ((        // line 81
($context["format"] ?? null) == "bbcode")) {
            // line 82
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);
            ";
        } elseif ((        // line 83
($context["format"] ?? null) == "rawhtml")) {
            // line 84
            echo "                elms.markItUp(markitup_sonataHtmlSettings);
            ";
        } elseif ((        // line 85
($context["format"] ?? null) == "richhtml")) {
            // line 86
            echo "                ";
            $this->loadTemplate("@SonataFormatter/Form/ckeditor.html.twig", "SonataFormatterBundle:Form:formatter.html.twig", 86)->display(array_merge($context, array("ckeditor_field_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "id", array()))));
            // line 87
            echo "            ";
        }
        // line 88
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 92
        echo twig_escape_filter($this->env, ($context["format"] ?? null), "html", null, true);
        echo "');
                ";
        // line 93
        if ((($context["format"] ?? null) == "rawhtml")) {
            // line 94
            echo "                    parent.addClass('html');
                ";
        }
        // line 96
        echo "            }

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  196 => 96,  192 => 94,  190 => 93,  186 => 92,  180 => 88,  177 => 87,  174 => 86,  172 => 85,  169 => 84,  167 => 83,  164 => 82,  162 => 81,  159 => 80,  157 => 79,  154 => 78,  152 => 77,  147 => 75,  135 => 66,  130 => 63,  127 => 62,  119 => 57,  104 => 44,  102 => 43,  80 => 24,  74 => 21,  70 => 20,  58 => 11,  54 => 9,  48 => 7,  46 => 6,  42 => 5,  37 => 2,  34 => 1,  30 => 62,  27 => 61,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataFormatterBundle:Form:formatter.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Form/formatter.html.twig");
    }
}
