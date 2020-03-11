<?php

/* SonataUserBundle:Admin/Security:login.html.twig */
class __TwigTemplate_c733f5da82a875b165735baae7c36ee62f544a0bb587aba33b4184d129342a6f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'login_box_header' => array($this, 'block_login_box_header'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataUserBundle:Admin/Security:login.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc login-page\"";
    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 26
        echo "
    <div class=\"login-box\">
        ";
        // line 28
        $this->displayBlock('login_box_header', $context, $blocks);
        // line 42
        echo "        <div class=\"login-box-body\">
            ";
        // line 43
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 123
        echo "        </div>
    </div>

";
    }

    // line 28
    public function block_login_box_header($context, array $blocks = array())
    {
        // line 29
        echo "            <div class=\"login-logo\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
        echo "\">
                    ";
        // line 31
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_image", 1 => "both"))) {
            // line 32
            echo "                        <div>
                            <img style=\"width:64px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_text", 1 => "both"))) {
            // line 37
            echo "                        <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                    ";
        }
        // line 39
        echo "                </a>
            </div>
        ";
    }

    // line 43
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 44
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 51
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                ";
        // line 52
        if ((isset($context["qrCodeUrl"]) || array_key_exists("qrCodeUrl", $context))) {
            // line 53
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <p align=\"middle\"> <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["qrCodeUrl"] ?? null), "html", null, true);
            echo "\" alt=\"QR-code\"></p>
                            <p align=\"middle\">";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_code_secret", array(), "SonataUserBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, ($context["qrSecret"] ?? null), "html", null, true);
            echo "</p>
                            <p align=\"middle\">
                                <a href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("qr_go_next", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                            </p>
                        </div>
                    </div>
                ";
        } elseif (((        // line 62
(isset($context["two_step_submit"]) || array_key_exists("two_step_submit", $context))) ? (_twig_default_filter(($context["two_step_submit"] ?? null), false)) : (false))) {
            // line 63
            echo "                    <form method=\"POST\" role=\"form\">
                        ";
            // line 64
            if ((($context["state"] ?? null) == "error")) {
                // line 65
                echo "                            <div class=\"alert alert-error\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_two_step_code_error", array(), "SonataUserBundle"), "html", null, true);
                echo "</div>
                        ";
            }
            // line 67
            echo "                        <label for=\"_code\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_two_step_code", array(), "SonataUserBundle"), "html", null, true);
            echo "</label>
                        <div class=\"input-group input-group-lg\">
                            <input type=\"text\" class=\"form-control\" id=\"_code\" name=\"_code\" autocomplete='off' />
                            <span class=\"input-group-btn\">
                                <input class=\"btn btn-primary\"
                                    id=\"_submit\"
                                    name=\"_submit\"
                                    type=\"submit\"
                                    value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                            </span>
                        </div>
                        <span class=\"help-block sonata-ba-field-help\">";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_two_step_code_help", array(), "SonataUserBundle"), "html", null, true);
            echo "</span>
                    </form>
                ";
        } else {
            // line 81
            echo "                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_security_check");
            echo "\" method=\"post\" role=\"form\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\"/>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"username\"
                                name=\"_username\"
                                placeholder=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"text\"
                                value=\"";
            // line 91
            echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
            echo "\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        </div>

                        <div class=\"form-group has-feedback\">
                            <input class=\"form-control\"
                                id=\"password\"
                                name=\"_password\"
                                placeholder=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
            echo "\"
                                required=\"required\"
                                type=\"password\"/>
                            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-8\">
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </label>
                                </div>
                            </div>
                            <div class=\"col-xs-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </form>

                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["reset_route"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                ";
        }
        // line 122
        echo "            ";
    }

    // line 44
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 45
        echo "                    ";
        if (($context["error"] ?? null)) {
            // line 46
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 50
        echo "                ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 50,  273 => 47,  270 => 46,  267 => 45,  264 => 44,  260 => 122,  253 => 120,  245 => 115,  237 => 110,  223 => 99,  212 => 91,  206 => 88,  197 => 82,  192 => 81,  186 => 78,  180 => 75,  168 => 67,  162 => 65,  160 => 64,  157 => 63,  155 => 62,  146 => 58,  139 => 56,  135 => 55,  131 => 53,  129 => 52,  124 => 51,  121 => 44,  118 => 43,  112 => 39,  106 => 37,  103 => 36,  95 => 33,  92 => 32,  90 => 31,  86 => 30,  83 => 29,  80 => 28,  73 => 123,  71 => 43,  68 => 42,  66 => 28,  62 => 26,  59 => 25,  53 => 23,  48 => 20,  43 => 17,  38 => 14,  29 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Admin/Security:login.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Security/login.html.twig");
    }
}
