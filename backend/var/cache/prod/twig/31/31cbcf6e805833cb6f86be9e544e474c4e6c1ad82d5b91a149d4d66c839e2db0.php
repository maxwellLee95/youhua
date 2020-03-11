<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_915b1e8221458f99924c5769c047981a1615ff1a712a8266267cc93c5b0c8aa5 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $context["associationadmin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "field_description", array()), "associationadmin", array());
        // line 24
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 34
        echo "
    var field_dialog_form_list_link_";
        // line 35
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 36
        echo ($context["id"] ?? null);
        echo "();

        var target = jQuery(this);

        if (target.attr('href').length === 0 || target.attr('href') === '#') {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 47
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 49
        echo ($context["id"] ?? null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 53
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 60
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 62
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 63
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 65
        echo ($context["id"] ?? null);
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 72
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 74
        echo ($context["id"] ?? null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 75
        echo ($context["id"] ?? null);
        echo "').trigger('change');

        field_dialog_";
        // line 77
        echo ($context["id"] ?? null);
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 81
        echo ($context["id"] ?? null);
        echo "  =  function() {
        Admin.log('[";
        // line 82
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 86
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_list_link_";
        echo ($context["id"] ?? null);
        echo ");
        jQuery('form', field_dialog_";
        // line 87
        echo ($context["id"] ?? null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 92
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 101
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 103
        echo ($context["id"] ?? null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 104
        echo ($context["id"] ?? null);
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 106
        echo ($context["id"] ?? null);
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 113
        echo ($context["id"] ?? null);
        echo " = function(event) {

        initialize_popup_";
        // line 115
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 120
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 124
        echo ($context["id"] ?? null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 132
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 135
        echo ($context["id"] ?? null);
        echo ".html(html);

                field_dialog_title_";
        // line 137
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 139
        echo ($context["id"] ?? null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 141
        echo ($context["id"] ?? null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 144
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 146
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 152
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 153
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 160
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 162
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 170
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 173
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 174
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 176
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 180
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 181
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 184
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 186
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the edit link
    var field_dialog_form_edit_";
        // line 192
        echo ($context["id"] ?? null);
        echo " = function(event) {
        initialize_popup_";
        // line 193
        echo ($context["id"] ?? null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 200
        echo ($context["id"] ?? null);
        echo ".html('');

        Admin.log('[";
        // line 202
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] edit link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 210
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_edit] ajax success', field_dialog_";
        echo ($context["id"] ?? null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 213
        echo ($context["id"] ?? null);
        echo ".html(html);
                field_dialog_title_";
        // line 214
        echo ($context["id"] ?? null);
        echo ".html(\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "label", array()), array(), twig_get_attribute($this->env, $this->source, ($context["associationadmin"] ?? null), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 216
        echo ($context["id"] ?? null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 220
        echo ($context["id"] ?? null);
        echo ").on('click', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
                jQuery('form', field_dialog_";
        // line 221
        echo ($context["id"] ?? null);
        echo ").on('submit', field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 224
        echo ($context["id"] ?? null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 226
        echo ($context["id"] ?? null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 232
        echo ($context["id"] ?? null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (
            this.nodeName === 'A'
            && (
                element.attr('href').length === 0
                || element.attr('href')[0] === '#'
                || element.attr('href').substr(0, 11) === 'javascript:'
            )
        ) {
            Admin.log('[";
        // line 245
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] element is an anchor or a script, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 252
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 254
        echo ($context["id"] ?? null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 268
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 278
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 286
        echo ($context["id"] ?? null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 291
        echo ($context["id"] ?? null);
        echo ".modal('hide');

                    ";
        // line 293
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 294
            echo "                        ";
            // line 298
            echo "                        jQuery('#";
            echo ($context["id"] ?? null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 299
            echo ($context["id"] ?? null);
            echo "').change();

                    ";
        } else {
            // line 302
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 304
            echo ($context["id"] ?? null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 305
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_retrieve_form_element", array("elementId" =>             // line 306
($context["id"] ?? null), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 307
($context["sonata_admin"] ?? null), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 308
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "id", array(0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 309
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 310
($context["sonata_admin"] ?? null), "admin", array()), "root", array()), "code", array())));
            // line 311
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 316
            echo ($context["id"] ?? null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 317
            echo ($context["id"] ?? null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 324
            echo ($context["id"] ?? null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 329
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 334
        echo ($context["id"] ?? null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 336
        echo ($context["id"] ?? null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 339
        echo ($context["id"] ?? null);
        echo ").submit(field_dialog_form_action_";
        echo ($context["id"] ?? null);
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 346
        echo ($context["id"] ?? null);
        echo "         = false;
    var field_dialog_content_";
        // line 347
        echo ($context["id"] ?? null);
        echo " = false;
    var field_dialog_title_";
        // line 348
        echo ($context["id"] ?? null);
        echo "   = false;

    function initialize_popup_";
        // line 350
        echo ($context["id"] ?? null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 352
        echo ($context["id"] ?? null);
        echo ") {
            field_dialog_";
        // line 353
        echo ($context["id"] ?? null);
        echo "         = jQuery(\"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_content_";
        // line 354
        echo ($context["id"] ?? null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");
            field_dialog_title_";
        // line 355
        echo ($context["id"] ?? null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo ($context["id"] ?? null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 358
        echo ($context["id"] ?? null);
        echo ");

            Admin.log('[";
        // line 360
        echo ($context["id"] ?? null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 367
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 369
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 374
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 378
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    ";
        // line 388
        echo "    // this function initializes the popup
    // this can only be done this way as popup can be cascaded
    function start_field_dialog_form_edit_";
        // line 390
        echo ($context["id"] ?? null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 395
        echo ($context["id"] ?? null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_edit_";
        // line 399
        echo ($context["id"] ?? null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 406
        echo ($context["id"] ?? null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 407
        echo ($context["id"] ?? null);
        echo ");
    }

    ";
        // line 410
        if ((twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "edit", array()) == "list")) {
            // line 411
            echo "        ";
            // line 414
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 416
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 420
            echo ($context["id"] ?? null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 424
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 431
            echo ($context["id"] ?? null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 436
            echo ($context["id"] ?? null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 443
            echo ($context["id"] ?? null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 446
            echo ($context["id"] ?? null);
            echo " option').get(0)) {
                jQuery('#";
            // line 447
            echo ($context["id"] ?? null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 450
            echo ($context["id"] ?? null);
            echo "').val('');
            jQuery('#";
            // line 451
            echo ($context["id"] ?? null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 458
            echo "
        // update the label
        jQuery('#";
            // line 460
            echo ($context["id"] ?? null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 462
            echo ($context["id"] ?? null);
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 464
            echo ($context["id"] ?? null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 467
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => twig_get_attribute($this->env, $this->source,             // line 469
($context["associationadmin"] ?? null), "uniqid", array()), "code" => twig_get_attribute($this->env, $this->source,             // line 470
($context["associationadmin"] ?? null), "code", array()), "linkParameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 471
($context["sonata_admin"] ?? null), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 472
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 475
            echo ($context["id"] ?? null);
            echo "').html(html);
                }
            });

            ";
            // line 479
            if (($context["btn_edit"] ?? null)) {
                // line 480
                echo "                var edit_button_url = '";
                echo twig_get_attribute($this->env, $this->source,                 // line 481
($context["associationadmin"] ?? null), "generateUrl", array(0 => "edit", 1 => array("id" => "OBJECT_ID")), "method");
                // line 482
                echo "'.replace('OBJECT_ID', jQuery(this).val());

                jQuery('#field_actions_";
                // line 484
                echo ($context["id"] ?? null);
                echo " a.btn-warning').attr('href', edit_button_url);
            ";
            }
            // line 486
            echo "        });

    ";
        }
        // line 489
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  870 => 489,  865 => 486,  860 => 484,  856 => 482,  854 => 481,  852 => 480,  850 => 479,  843 => 475,  838 => 472,  836 => 471,  835 => 470,  834 => 469,  833 => 467,  823 => 464,  818 => 462,  813 => 460,  809 => 458,  802 => 451,  798 => 450,  792 => 447,  788 => 446,  782 => 443,  772 => 436,  764 => 431,  754 => 424,  747 => 420,  740 => 416,  736 => 414,  734 => 411,  732 => 410,  726 => 407,  722 => 406,  712 => 399,  705 => 395,  697 => 390,  693 => 388,  683 => 378,  676 => 374,  668 => 369,  664 => 367,  657 => 360,  652 => 358,  644 => 355,  638 => 354,  632 => 353,  628 => 352,  623 => 350,  618 => 348,  614 => 347,  610 => 346,  598 => 339,  592 => 336,  587 => 334,  580 => 329,  572 => 324,  562 => 317,  558 => 316,  551 => 311,  549 => 310,  548 => 309,  547 => 308,  546 => 307,  545 => 306,  544 => 305,  540 => 304,  536 => 302,  530 => 299,  525 => 298,  523 => 294,  521 => 293,  516 => 291,  508 => 286,  497 => 278,  484 => 268,  467 => 254,  462 => 252,  452 => 245,  436 => 232,  427 => 226,  422 => 224,  414 => 221,  408 => 220,  401 => 216,  394 => 214,  390 => 213,  382 => 210,  371 => 202,  366 => 200,  356 => 193,  352 => 192,  343 => 186,  338 => 184,  330 => 181,  324 => 180,  317 => 176,  310 => 174,  306 => 173,  298 => 170,  287 => 162,  282 => 160,  272 => 153,  268 => 152,  259 => 146,  254 => 144,  248 => 141,  243 => 139,  236 => 137,  231 => 135,  225 => 132,  214 => 124,  207 => 120,  199 => 115,  194 => 113,  184 => 106,  179 => 104,  175 => 103,  170 => 101,  158 => 92,  150 => 87,  144 => 86,  137 => 82,  133 => 81,  126 => 77,  121 => 75,  117 => 74,  112 => 72,  102 => 65,  97 => 63,  93 => 62,  88 => 60,  78 => 53,  71 => 49,  66 => 47,  52 => 36,  48 => 35,  45 => 34,  38 => 24,  36 => 23,  33 => 22,  30 => 20,  27 => 18,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/edit_orm_many_association_script.html.twig");
    }
}
