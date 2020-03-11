<?php

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_ec853cd17a13723e822347c90ad343bee2104b1cfc3245862f0bac94d9e44f6b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 4
        if (( !twig_test_empty(($context["value"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "providerReference", array()))) {
            // line 5
            echo "                ";
            if ((((isset($context["sonata_admin_enabled"]) || array_key_exists("sonata_admin_enabled", $context)) && ($context["sonata_admin_enabled"] ?? null)) &&  !(twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array()) === false))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array()), "getConfigurationPool", array(), "method"), "adminByAdminCode", array(0 => "sonata.media.admin.media"), "method"), "generateObjectUrl", array(0 => "edit", 1 => ($context["value"] ?? null)), "method"), "html", null, true);
                echo "\">
                        <strong>";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", array()), "html", null, true);
                echo "</strong>
                    </a>
                ";
            } else {
                // line 10
                echo "                    <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "name", array()), "html", null, true);
                echo "</strong>
                ";
            }
            // line 12
            echo "            ";
        } else {
            // line 13
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no_linked_media", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong>
            ";
        }
        // line 15
        echo "        </div>

        <div class=\"col-md-3 pull-left\"><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_headline_information", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
        <div class=\"col-md-2 pull-left\"><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_media", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-4 pull-left\">
            ";
        // line 22
        if (( !twig_test_empty(($context["value"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "providerReference", array()))) {
            // line 23
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    ";
            // line 24
            echo $this->env->getExtension('Sonata\MediaBundle\Twig\Extension\MediaExtension')->thumbnail(($context["value"] ?? null), "admin", array("class" => "img-polaroid media-object"));
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                <div class=\"pull-left\" style=\"margin-right: 5px\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
                </div>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"col-md-3 pull-left\">
            ";
        // line 33
        if (( !twig_test_empty(($context["value"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "providerReference", array()))) {
            // line 34
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "context", array()), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 38
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_type", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["provider"] ?? null) : null), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
                <br />
                <strong>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("widget_label_context", array(), "SonataMediaBundle"), "html", null, true);
            echo ":</strong> <span type=\"label\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["context"] ?? null) : null), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span>
            ";
        }
        // line 42
        echo "        </div>
        <div class=\"col-md-2 pull-left\">
            ";
        // line 44
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 44,  136 => 42,  129 => 40,  121 => 38,  114 => 36,  106 => 34,  104 => 33,  100 => 31,  94 => 28,  91 => 27,  87 => 25,  85 => 24,  82 => 23,  80 => 22,  73 => 18,  69 => 17,  65 => 15,  59 => 13,  56 => 12,  50 => 10,  44 => 7,  39 => 6,  36 => 5,  34 => 4,  30 => 2,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:Form:media_widgets.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/Form/media_widgets.html.twig");
    }
}
