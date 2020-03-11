<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_0b991a4dc8f9f233d59f9305e6051a14cf5584d0c2a6a80ed3b64cade1ff0413 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 16
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        // line 27
        ob_start();
        // line 28
        if (((isset($context["sonata_help"]) || array_key_exists("sonata_help", $context)) && ($context["sonata_help"] ?? null))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo ($context["sonata_help"] ?? null);
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 41
        echo "    ";
        if ((($context["type"] ?? null) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
    ";
        // line 50
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_number_widget($context, array $blocks = array())
    {
        // line 54
        $this->displayParentBlock("number_widget", $context, $blocks);
        echo "
    ";
        // line 55
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 58
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 59
        $this->displayParentBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 60
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 64
    public function block_money_widget($context, array $blocks = array())
    {
        // line 65
        if ((($context["money_pattern"] ?? null) == "{{ widget }}")) {
            // line 66
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 68
            echo "        ";
            $context["currencySymbol"] = twig_trim_filter(twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")));
            // line 69
            echo "        ";
            if (preg_match("/^{{ widget }}/", ($context["money_pattern"] ?? null))) {
                // line 70
                echo "            <div class=\"input-group\">";
                // line 71
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 72
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 74
($context["money_pattern"] ?? null))) {
                // line 75
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 76
                echo twig_escape_filter($this->env, ($context["currencySymbol"] ?? null), "html", null, true);
                echo "</span>";
                // line 77
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 78
                echo "</div>
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
    }

    // line 84
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        ob_start();
        // line 86
        echo "        ";
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? null), "text")) : ("text"));
        // line 87
        echo "        <div class=\"input-group\">
            ";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
        ";
        // line 91
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 95
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 96
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 97
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 98
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 100
            echo "<div class=\"checkbox\">";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 102
            echo "</div>";
        }
    }

    // line 106
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 107
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 108
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 111
            echo "<div class=\"radio\">";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 113
            echo "</div>";
        }
    }

    // line 118
    public function block_form_label($context, array $blocks = array())
    {
        // line 119
        ob_start();
        // line 120
        echo "    ";
        if (( !(($context["label"] ?? null) === false) && ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["form_type"] ?? null) : null) == "horizontal"))) {
            // line 121
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 122
            echo "    ";
        }
        // line 123
        echo "
    ";
        // line 124
        $context["label_class"] = ((((isset($context["label_class"]) || array_key_exists("label_class", $context))) ? (_twig_default_filter(($context["label_class"] ?? null), "")) : ("")) . " control-label");
        // line 125
        echo "
    ";
        // line 126
        if ( !(($context["label"] ?? null) === false)) {
            // line 127
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => ((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["label_class"] ?? null))));
            // line 128
            echo "
        ";
            // line 129
            if ( !($context["compound"] ?? null)) {
                // line 130
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("for" => ($context["id"] ?? null)));
                // line 131
                echo "        ";
            }
            // line 132
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 133
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 134
                echo "        ";
            }
            // line 135
            echo "
        ";
            // line 136
            if (twig_test_empty(($context["label"] ?? null))) {
                // line 137
                if (((isset($context["label_format"]) || array_key_exists("label_format", $context)) &&  !twig_test_empty(($context["label_format"] ?? null)))) {
                    // line 138
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                     // line 139
($context["name"] ?? null), "%id%" =>                     // line 140
($context["id"] ?? null)));
                } else {
                    // line 143
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 146
            echo "
        <label";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 148
            if ((($context["translation_domain"] ?? null) === false)) {
                // line 149
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 150
($context["sonata_admin"] ?? null), "admin", array())) {
                // line 151
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
            } else {
                // line 153
                echo "                ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array())))), "html", null, true);
                echo "
            ";
            }
            // line 155
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 160
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 161
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 164
    public function block_radio_label($context, array $blocks = array())
    {
        // line 165
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 168
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 169
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array())) {
            // line 170
            echo "        ";
            $context["translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array());
            // line 171
            echo "    ";
        }
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 174
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 175
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 176
                echo "        ";
            }
            // line 177
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 178
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 179
                echo "        ";
            }
            // line 180
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 181
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 184
            echo ($context["widget"] ?? null);
            // line 185
            if ( !(($context["label"] ?? null) === false)) {
                // line 186
                echo "<span class=\"control-label__text\">
                    ";
                // line 187
                if ((($context["translation_domain"] ?? null) === false)) {
                    // line 188
                    echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                } else {
                    // line 190
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                }
                // line 192
                echo "</span>";
            }
            // line 194
            echo "</label>
    ";
        }
    }

    // line 198
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 201
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 203
            echo "        <li>
            ";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => "", "translation_domain" =>             // line 207
($context["choice_translation_domain"] ?? null)));
            // line 208
            echo " ";
            // line 209
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 215
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 216
        ob_start();
        // line 217
        echo "    ";
        if (((($context["required"] ?? null) && (isset($context["placeholder"]) || array_key_exists("placeholder", $context))) && (null === ($context["placeholder"] ?? null)))) {
            // line 218
            echo "        ";
            $context["required"] = false;
            // line 219
            echo "    ";
        } elseif ((((((($context["required"] ?? null) && (isset($context["empty_value"]) || array_key_exists("empty_value", $context))) && (isset($context["empty_value_in_choices"]) || array_key_exists("empty_value_in_choices", $context))) && (null === ($context["empty_value"] ?? null))) &&  !($context["empty_value_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 220
            echo "        ";
            $context["required"] = false;
            // line 221
            echo "    ";
        }
        // line 222
        echo "
    ";
        // line 223
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control")));
        // line 224
        echo "    ";
        if ((((isset($context["sortable"]) || array_key_exists("sortable", $context)) && ($context["sortable"] ?? null)) && ($context["multiple"] ?? null))) {
            // line 225
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 227
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if (($context["multiple"] ?? null)) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 228
            if (((isset($context["empty_value"]) || array_key_exists("empty_value", $context)) &&  !(null === ($context["empty_value"] ?? null)))) {
                // line 229
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 230
                if ((($context["empty_value"] ?? null) != "")) {
                    // line 231
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array())) {
                        // line 232
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 234
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["empty_value"] ?? null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                    }
                    // line 236
                    echo "                    ";
                }
                // line 237
                echo "                </option>
            ";
            } elseif ((            // line 238
(isset($context["placeholder"]) || array_key_exists("placeholder", $context)) &&  !(null === ($context["placeholder"] ?? null)))) {
                // line 239
                echo "                <option value=\"\"";
                if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 240
                if ((($context["placeholder"] ?? null) != "")) {
                    // line 241
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array())) {
                        // line 242
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)), "html", null, true);
                    } else {
                        // line 244
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())), "html", null, true);
                    }
                    // line 246
                    echo "                    ";
                }
                // line 247
                echo "                </option>
            ";
            }
            // line 249
            echo "            ";
            if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
                // line 250
                echo "                ";
                $context["options"] = ($context["preferred_choices"] ?? null);
                // line 251
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 252
                if ((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0)) {
                    // line 253
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                    echo "</option>
                ";
                }
                // line 255
                echo "            ";
            }
            // line 256
            echo "            ";
            $context["options"] = ($context["choices"] ?? null);
            // line 257
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 263
    public function block_date_widget($context, array $blocks = array())
    {
        // line 264
        ob_start();
        // line 265
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 266
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 268
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 269
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 270
                echo "        ";
            }
            // line 271
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-4")) : ("col-sm-4"));
            // line 272
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 273
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (((("<div class=\"" .             // line 274
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 275
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 276
($context["input_wrapper_class"] ?? null)) . "\">") . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 277
            echo "
        </div>
    ";
        }
        // line 280
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 281
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 286
    public function block_time_widget($context, array $blocks = array())
    {
        // line 287
        ob_start();
        // line 288
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 289
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 291
            echo "        ";
            if (( !(isset($context["row"]) || array_key_exists("row", $context)) || (($context["row"] ?? null) == true))) {
                // line 292
                echo "            ";
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
                // line 293
                echo "        ";
            }
            // line 294
            echo "        ";
            $context["input_wrapper_class"] = (((isset($context["input_wrapper_class"]) || array_key_exists("input_wrapper_class", $context))) ? (_twig_default_filter(($context["input_wrapper_class"] ?? null), "col-sm-6")) : ("col-sm-6"));
            // line 295
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 296
            echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
            echo "\">
                ";
            // line 297
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 299
            if (($context["with_minutes"] ?? null)) {
                // line 300
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 301
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 304
            echo "            ";
            if (($context["with_seconds"] ?? null)) {
                // line 305
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, ($context["input_wrapper_class"] ?? null), "html", null, true);
                echo "\">
                    ";
                // line 306
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 309
            echo "        </div>
    ";
        }
        // line 311
        echo "    ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 315
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 316
        ob_start();
        // line 317
        echo "    ";
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 318
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 320
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " row")));
            // line 321
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 322
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'errors');
            echo "
            ";
            // line 323
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'errors');
            echo "

            ";
            // line 325
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 326
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 327
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 330
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 332
            echo "
            ";
            // line 333
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 334
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 335
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 338
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 340
            echo "        </div>
    ";
        }
        // line 342
        echo "    ";
        if ( !(isset($context["datepicker_use_button"]) || array_key_exists("datepicker_use_button", $context))) {
            // line 343
            echo "        ";
            $this->displayBlock("sonata_help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 348
    public function block_form_row($context, array $blocks = array())
    {
        // line 349
        echo "    ";
        $context["show_label"] = (((isset($context["show_label"]) || array_key_exists("show_label", $context))) ? (_twig_default_filter(($context["show_label"] ?? null), true)) : (true));
        // line 350
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 351
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 352
            echo "            ";
            $context["label"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), ($context["label"] ?? null))) : (($context["label"] ?? null)));
            // line 353
            echo "        ";
        }
        // line 354
        echo "
        ";
        // line 355
        $context["div_class"] = "sonata-ba-field";
        // line 356
        echo "
        ";
        // line 357
        if ((($context["label"] ?? null) === false)) {
            // line 358
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-collection-row-without-label");
            // line 359
            echo "        ";
        }
        // line 360
        echo "
        ";
        // line 361
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ((($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["form_type"] ?? null) : null) == "horizontal"))) {
            // line 362
            echo "            ";
            // line 363
            echo "            ";
            if (((($context["label"] ?? null) === false) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 364
                echo "                ";
                if (twig_in_filter("collection", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 365
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-12");
                    // line 366
                    echo "                ";
                } else {
                    // line 367
                    echo "                    ";
                    $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9 col-sm-offset-3");
                    // line 368
                    echo "                ";
                }
                // line 369
                echo "            ";
            } else {
                // line 370
                echo "                ";
                $context["div_class"] = (($context["div_class"] ?? null) . " col-sm-9");
                // line 371
                echo "            ";
            }
            // line 372
            echo "        ";
        }
        // line 373
        echo "
        ";
        // line 374
        if (($context["show_label"] ?? null)) {
            // line 375
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', (twig_test_empty($_label_ = (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter(($context["label"] ?? null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 377
        echo "
        ";
        // line 378
        if (((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null))) {
            // line 379
            echo "            ";
            $context["div_class"] = ((((($context["div_class"] ?? null) . " sonata-ba-field-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array())) . "-") . twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()));
            // line 380
            echo "        ";
        }
        // line 381
        echo "
        ";
        // line 382
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 383
            echo "            ";
            $context["div_class"] = (($context["div_class"] ?? null) . " sonata-ba-field-error");
            // line 384
            echo "        ";
        }
        // line 385
        echo "
        <div class=\"";
        // line 386
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 387
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 388
        echo "
            ";
        // line 389
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 390
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 391
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 394
        echo "
            ";
        // line 395
        if ((((isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context)) && ($context["sonata_admin_enabled"] ?? null)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 396
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "help", array()), array(), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationDomain", array()))));
            echo "</span>
            ";
        }
        // line 398
        echo "        </div>
    </div>
";
    }

    // line 402
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 403
        $context["show_label"] = false;
        // line 404
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 407
    public function block_radio_row($context, array $blocks = array())
    {
        // line 408
        $context["show_label"] = false;
        // line 409
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 412
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        // line 413
        ob_start();
        // line 414
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 415
        if (($context["allow_delete"] ?? null)) {
            // line 416
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 424
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'row', array("label" => false));
        echo "
        ";
        // line 425
        if (($context["allow_delete"] ?? null)) {
            // line 426
            echo "                </div>
            </div>
        ";
        }
        // line 429
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 433
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        // line 434
        ob_start();
        // line 435
        echo "    ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 436
            echo "        ";
            $context["child"] = ($context["prototype"] ?? null);
            // line 437
            echo "        ";
            $context["allow_delete_backup"] = ($context["allow_delete"] ?? null);
            // line 438
            echo "        ";
            $context["allow_delete"] = true;
            // line 439
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-prototype" =>             $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["prototype"] ?? null), "vars", array()), "name", array()), "class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : (""))));
            // line 440
            echo "        ";
            $context["allow_delete"] = ($context["allow_delete_backup"] ?? null);
            // line 441
            echo "    ";
        }
        // line 442
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 445
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        ";
        // line 448
        if (($context["allow_add"] ?? null)) {
            // line 449
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i></a></div>
        ";
        }
        // line 451
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 455
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 456
        echo "    ";
        ob_start();
        // line 457
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 458
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

            ";
        // line 460
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

            ";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 463
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 465
        echo "
            ";
        // line 466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 471
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 472
        echo "    ";
        ob_start();
        // line 473
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'label');
        echo "

            ";
        // line 477
        $context["div_class"] = "";
        // line 478
        echo "            ";
        if (((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "options", array())) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["form_type"] ?? null) : null) == "horizontal")) {
            // line 479
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 480
            echo "            ";
        }
        // line 481
        echo "
            <div class=\"";
        // line 482
        echo twig_escape_filter($this->env, ($context["div_class"] ?? null), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 484
        echo "                ";
        $context["sonata_help"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", array()), "sonata_help", array());
        // line 485
        echo "                ";
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "
            </div>

            ";
        // line 488
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 489
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 490
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["child"] ?? null), 'errors');
            echo "
                </div>
            ";
        }
        // line 493
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 497
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        // line 498
        echo "    ";
        $this->loadTemplate(($context["template"] ?? null), "SonataAdminBundle:Form:form_admin_fields.html.twig", 498)->display($context);
    }

    // line 501
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        // line 502
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 504
        echo "    ";
        $context["main_form_name"] = twig_slice($this->env, ($context["id"] ?? null), 0, ((twig_length_filter($this->env, ($context["id"] ?? null)) - twig_length_filter($this->env, ($context["name"] ?? null))) - 1));
        // line 505
        echo "    ";
        if (($context["expanded"] ?? null)) {
            // line 506
            echo "        ";
            $context["js_selector"] = (((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null)) . " input");
            // line 507
            echo "        ";
            $context["js_event"] = "ifChecked";
            // line 508
            echo "    ";
        } else {
            // line 509
            echo "        ";
            $context["js_selector"] = ((("#" . ($context["main_form_name"] ?? null)) . "_") . ($context["name"] ?? null));
            // line 510
            echo "        ";
            $context["js_event"] = "change";
            // line 511
            echo "    ";
        }
        // line 512
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 514
        echo json_encode(($context["all_fields"] ?? null));
        echo ",
                map = ";
        // line 515
        echo json_encode(($context["map"] ?? null));
        echo ",
                showMaskChoiceEl = jQuery(\"";
        // line 516
        echo twig_escape_filter($this->env, ($context["js_selector"] ?? null), "html", null, true);
        echo "\");

            showMaskChoiceEl.on(\"";
        // line 518
        echo twig_escape_filter($this->env, ($context["js_event"] ?? null), "html", null, true);
        echo "\", function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val) {
                var controlGroupIdFunc = function (field) {
                    // Most of fields are named with an underscore
                    var defaultFieldId = '#sonata-ba-field-container-";
        // line 525
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "_' + field;

                    // Some fields may be named with a dash (like keys of immutable array form type)
                    if (jQuery(defaultFieldId).length === 0) {
                        return '#sonata-ba-field-container-";
        // line 529
        echo twig_escape_filter($this->env, ($context["main_form_name"] ?? null), "html", null, true);
        echo "-' + field;
                    }

                    return defaultFieldId;
                };

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });

                if (map[val]) {
                    jQuery.each(map[val], function (i, field) {
                        jQuery(controlGroupIdFunc(field)).show();
                    });
                }
            }

            ";
        // line 546
        if (twig_test_empty(($context["value"] ?? null))) {
            // line 547
            echo "                choice_field_mask_show(showMaskChoiceEl.val());
            ";
        } else {
            // line 549
            echo "                choice_field_mask_show('";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "');
            ";
        }
        // line 551
        echo "        });

    </script>
";
    }

    // line 556
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        // line 557
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 561
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'), ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1447 => 561,  1435 => 557,  1432 => 556,  1425 => 551,  1419 => 549,  1415 => 547,  1413 => 546,  1393 => 529,  1386 => 525,  1376 => 518,  1371 => 516,  1367 => 515,  1363 => 514,  1359 => 512,  1356 => 511,  1353 => 510,  1350 => 509,  1347 => 508,  1344 => 507,  1341 => 506,  1338 => 505,  1335 => 504,  1330 => 502,  1327 => 501,  1322 => 498,  1319 => 497,  1313 => 493,  1307 => 490,  1304 => 489,  1302 => 488,  1295 => 485,  1292 => 484,  1289 => 483,  1277 => 482,  1274 => 481,  1271 => 480,  1268 => 479,  1265 => 478,  1263 => 477,  1258 => 475,  1246 => 473,  1243 => 472,  1240 => 471,  1232 => 466,  1229 => 465,  1212 => 463,  1195 => 462,  1190 => 460,  1185 => 458,  1180 => 457,  1177 => 456,  1174 => 455,  1168 => 451,  1164 => 449,  1162 => 448,  1157 => 447,  1140 => 445,  1123 => 444,  1119 => 443,  1114 => 442,  1111 => 441,  1108 => 440,  1105 => 439,  1102 => 438,  1099 => 437,  1096 => 436,  1093 => 435,  1091 => 434,  1088 => 433,  1082 => 429,  1077 => 426,  1075 => 425,  1070 => 424,  1060 => 416,  1058 => 415,  1055 => 414,  1053 => 413,  1050 => 412,  1045 => 409,  1043 => 408,  1040 => 407,  1035 => 404,  1033 => 403,  1030 => 402,  1024 => 398,  1018 => 396,  1016 => 395,  1013 => 394,  1007 => 391,  1004 => 390,  1002 => 389,  999 => 388,  996 => 387,  992 => 386,  989 => 385,  986 => 384,  983 => 383,  981 => 382,  978 => 381,  975 => 380,  972 => 379,  970 => 378,  967 => 377,  961 => 375,  959 => 374,  956 => 373,  953 => 372,  950 => 371,  947 => 370,  944 => 369,  941 => 368,  938 => 367,  935 => 366,  932 => 365,  929 => 364,  926 => 363,  924 => 362,  922 => 361,  919 => 360,  916 => 359,  913 => 358,  911 => 357,  908 => 356,  906 => 355,  903 => 354,  900 => 353,  897 => 352,  895 => 351,  886 => 350,  883 => 349,  880 => 348,  871 => 343,  868 => 342,  864 => 340,  858 => 338,  852 => 335,  849 => 334,  847 => 333,  844 => 332,  838 => 330,  832 => 327,  829 => 326,  827 => 325,  822 => 323,  818 => 322,  813 => 321,  810 => 320,  804 => 318,  801 => 317,  799 => 316,  796 => 315,  788 => 311,  784 => 309,  778 => 306,  773 => 305,  770 => 304,  764 => 301,  759 => 300,  757 => 299,  752 => 297,  748 => 296,  743 => 295,  740 => 294,  737 => 293,  734 => 292,  731 => 291,  725 => 289,  722 => 288,  720 => 287,  717 => 286,  708 => 281,  705 => 280,  700 => 277,  698 => 276,  697 => 275,  696 => 274,  695 => 273,  690 => 272,  687 => 271,  684 => 270,  681 => 269,  678 => 268,  672 => 266,  669 => 265,  667 => 264,  664 => 263,  654 => 257,  651 => 256,  648 => 255,  642 => 253,  640 => 252,  635 => 251,  632 => 250,  629 => 249,  625 => 247,  622 => 246,  619 => 244,  616 => 242,  613 => 241,  611 => 240,  604 => 239,  602 => 238,  599 => 237,  596 => 236,  593 => 234,  590 => 232,  587 => 231,  585 => 230,  578 => 229,  576 => 228,  568 => 227,  562 => 225,  559 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  539 => 217,  537 => 216,  534 => 215,  528 => 211,  521 => 209,  519 => 208,  517 => 207,  516 => 204,  513 => 203,  509 => 202,  504 => 201,  501 => 200,  499 => 199,  496 => 198,  490 => 194,  487 => 192,  484 => 190,  481 => 188,  479 => 187,  476 => 186,  474 => 185,  472 => 184,  457 => 183,  454 => 182,  451 => 181,  448 => 180,  445 => 179,  442 => 178,  439 => 177,  436 => 176,  433 => 175,  430 => 174,  427 => 173,  425 => 172,  422 => 171,  419 => 170,  416 => 169,  413 => 168,  409 => 165,  406 => 164,  402 => 161,  399 => 160,  392 => 155,  386 => 153,  383 => 151,  381 => 150,  379 => 149,  377 => 148,  362 => 147,  359 => 146,  355 => 143,  352 => 140,  351 => 139,  350 => 138,  348 => 137,  346 => 136,  343 => 135,  340 => 134,  337 => 133,  334 => 132,  331 => 131,  328 => 130,  326 => 129,  323 => 128,  320 => 127,  318 => 126,  315 => 125,  313 => 124,  310 => 123,  307 => 122,  304 => 121,  301 => 120,  299 => 119,  296 => 118,  291 => 113,  289 => 112,  287 => 111,  284 => 109,  282 => 108,  280 => 107,  277 => 106,  272 => 102,  270 => 101,  268 => 100,  265 => 98,  263 => 97,  261 => 96,  258 => 95,  251 => 91,  245 => 88,  242 => 87,  239 => 86,  236 => 85,  233 => 84,  228 => 81,  225 => 80,  221 => 78,  219 => 77,  216 => 76,  213 => 75,  211 => 74,  205 => 72,  203 => 71,  201 => 70,  198 => 69,  195 => 68,  192 => 66,  190 => 65,  187 => 64,  183 => 60,  179 => 59,  176 => 58,  172 => 55,  168 => 54,  165 => 53,  159 => 50,  154 => 49,  151 => 48,  148 => 47,  141 => 44,  138 => 43,  135 => 42,  132 => 41,  129 => 40,  126 => 39,  122 => 36,  118 => 35,  115 => 34,  106 => 29,  104 => 28,  102 => 27,  99 => 26,  94 => 23,  90 => 22,  87 => 21,  78 => 19,  74 => 18,  71 => 17,  66 => 16,  64 => 15,  61 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Form:form_admin_fields.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
