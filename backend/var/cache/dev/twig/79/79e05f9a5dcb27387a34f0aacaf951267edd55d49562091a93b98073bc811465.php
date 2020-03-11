<?php

/* @SonataFormatter/Form/formatter.html.twig */
class __TwigTemplate_80a73d1469da41610ba4bf9c4085d5a6f3d92b9a39e226271fc4efffcdf026c1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataFormatter/Form/formatter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataFormatter/Form/formatter.html.twig"));

        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('sonata_simple_formatter_type_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_formatter_type_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_formatter_type_widget"));

        // line 2
        echo "
    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "children", array()), (isset($context["format_field"]) || array_key_exists("format_field", $context) ? $context["format_field"] : (function () { throw new Twig_Error_Runtime('Variable "format_field" does not exist.', 5, $this->source); })()), array(), "array"), 'widget');
        echo "
        ";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["format_field_options"]) || array_key_exists("format_field_options", $context) ? $context["format_field_options"] : (function () { throw new Twig_Error_Runtime('Variable "format_field_options" does not exist.', 6, $this->source); })()), "choices", array())) > 1)) {
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "children", array()), (isset($context["source_field"]) || array_key_exists("source_field", $context) ? $context["source_field"] : (function () { throw new Twig_Error_Runtime('Variable "source_field" does not exist.', 11, $this->source); })()), array(), "array"), 'widget');
        echo "
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "children", array()), (isset($context["format_field"]) || array_key_exists("format_field", $context) ? $context["format_field"] : (function () { throw new Twig_Error_Runtime('Variable "format_field" does not exist.', 20, $this->source); })()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').change(function(event) {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "children", array()), (isset($context["source_field"]) || array_key_exists("source_field", $context) ? $context["source_field"] : (function () { throw new Twig_Error_Runtime('Variable "source_field" does not exist.', 21, $this->source); })()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "');
                elms.markItUpRemove();

                ";
        // line 24
        echo $this->extensions['FOS\CKEditorBundle\Twig\CKEditorExtension']->renderDestroy(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "children", array()), (isset($context["source_field"]) || array_key_exists("source_field", $context) ? $context["source_field"] : (function () { throw new Twig_Error_Runtime('Variable "source_field" does not exist.', 24, $this->source); })()), array(), "array"), "vars", array()), "id", array()));
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
        $this->loadTemplate("@SonataFormatter/Form/ckeditor.html.twig", "@SonataFormatter/Form/formatter.html.twig", 43)->display(array_merge($context, array("ckeditor_field_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "children", array()), (isset($context["source_field"]) || array_key_exists("source_field", $context) ? $context["source_field"] : (function () { throw new Twig_Error_Runtime('Variable "source_field" does not exist.', 43, $this->source); })()), array(), "array"), "vars", array()), "id", array()))));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->source); })()), "children", array()), (isset($context["format_field"]) || array_key_exists("format_field", $context) ? $context["format_field"] : (function () { throw new Twig_Error_Runtime('Variable "format_field" does not exist.', 57, $this->source); })()), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_sonata_simple_formatter_type_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_simple_formatter_type_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_simple_formatter_type_widget"));

        // line 63
        echo "
    <!-- widget: sonata_simple_formatter_type_widget -->

    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), 'widget');
        echo "

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            ";
        // line 77
        if (((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 77, $this->source); })()) == "textile")) {
            // line 78
            echo "                elms.markItUp(markitup_sonataTextileSettings);
            ";
        } elseif ((        // line 79
(isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 79, $this->source); })()) == "markdown")) {
            // line 80
            echo "                elms.markItUp(markitup_sonataMarkdownSettings);
            ";
        } elseif ((        // line 81
(isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 81, $this->source); })()) == "bbcode")) {
            // line 82
            echo "                elms.markItUp(markitup_sonataBBCodeSettings);
            ";
        } elseif ((        // line 83
(isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 83, $this->source); })()) == "rawhtml")) {
            // line 84
            echo "                elms.markItUp(markitup_sonataHtmlSettings);
            ";
        } elseif ((        // line 85
(isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 85, $this->source); })()) == "richhtml")) {
            // line 86
            echo "                ";
            $this->loadTemplate("@SonataFormatter/Form/ckeditor.html.twig", "@SonataFormatter/Form/formatter.html.twig", 86)->display(array_merge($context, array("ckeditor_field_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 86, $this->source); })()), "vars", array()), "id", array()))));
            // line 87
            echo "            ";
        }
        // line 88
        echo "
            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "');
                ";
        // line 93
        if (((isset($context["format"]) || array_key_exists("format", $context) ? $context["format"] : (function () { throw new Twig_Error_Runtime('Variable "format" does not exist.', 93, $this->source); })()) == "rawhtml")) {
            // line 94
            echo "                    parent.addClass('html');
                ";
        }
        // line 96
        echo "            }

        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataFormatter/Form/formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  226 => 96,  222 => 94,  220 => 93,  216 => 92,  210 => 88,  207 => 87,  204 => 86,  202 => 85,  199 => 84,  197 => 83,  194 => 82,  192 => 81,  189 => 80,  187 => 79,  184 => 78,  182 => 77,  177 => 75,  165 => 66,  160 => 63,  151 => 62,  137 => 57,  122 => 44,  120 => 43,  98 => 24,  92 => 21,  88 => 20,  76 => 11,  72 => 9,  66 => 7,  64 => 6,  60 => 5,  55 => 2,  46 => 1,  36 => 62,  33 => 61,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block sonata_formatter_type_widget %}

    <!-- widget: sonata_formatter_type_widget -->
    <div style=\"margin-bottom: 5px;\">
        {{ form_widget(form.children[format_field]) }}
        {% if format_field_options.choices|length > 1 %}
            <i>{{ \"please_select_format_method\"|trans({}, \"SonataFormatterBundle\") }}</i>
        {% endif %}
    </div>

    {{ form_widget(form.children[source_field]) }}
    <script>
        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#{{ form.children[format_field].vars.id }}').change(function(event) {
                var elms = jQuery('#{{ form.children[source_field].vars.id }}');
                elms.markItUpRemove();

                {{ ckeditor_destroy(form.children[source_field].vars.id) }}

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
                        {% include '@SonataFormatter/Form/ckeditor.html.twig' with {'ckeditor_field_id': form.children[source_field].vars.id} %}
                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#{{ form.children[format_field].vars.id }}').trigger('change');
        });
    </script>
{% endblock sonata_formatter_type_widget %}

{% block sonata_simple_formatter_type_widget %}

    <!-- widget: sonata_simple_formatter_type_widget -->

    {{ form_widget(form) }}

    <script>
        jQuery(document).ready(function() {
            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            var elms = jQuery('#{{ form.vars.id }}');

            {% if format == 'textile' %}
                elms.markItUp(markitup_sonataTextileSettings);
            {% elseif format == 'markdown' %}
                elms.markItUp(markitup_sonataMarkdownSettings);
            {% elseif format == 'bbcode' %}
                elms.markItUp(markitup_sonataBBCodeSettings);
            {% elseif format == 'rawhtml' %}
                elms.markItUp(markitup_sonataHtmlSettings);
            {% elseif format == 'richhtml' %}
                {% include '@SonataFormatter/Form/ckeditor.html.twig' with {'ckeditor_field_id': form.vars.id} %}
            {% endif %}

            var parent = elms.parents('div.markItUp');

            if (parent) {
                parent.addClass('{{ format }}');
                {% if format == 'rawhtml' %}
                    parent.addClass('html');
                {% endif %}
            }

        });
    </script>
{% endblock sonata_simple_formatter_type_widget %}
", "@SonataFormatter/Form/formatter.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/formatter-bundle/src/Resources/views/Form/formatter.html.twig");
    }
}
