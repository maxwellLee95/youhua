<?php

/* SonataUserBundle:Admin/Security/Resetting:reset.html.twig */
class __TwigTemplate_5c5aa8e4d0ec64f1d191aaa2bb30031de9625c8f1d3f1f190c338e71639626c2 extends Twig_Template
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
            'sonata_user_reset_form' => array($this, 'block_sonata_user_reset_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", 12);
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
        $this->displayBlock('sonata_user_reset_form', $context, $blocks);
        // line 67
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
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_image", 1 => "both"))) {
            // line 32
            echo "                        <div>
                            <img style=\"width:64px;\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "title", array()), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 36
        echo "                    ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "getOption", array(0 => "title_mode"), "method"), array(0 => "single_text", 1 => "both"))) {
            // line 37
            echo "                        <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin_pool"] ?? null), "title", array()), "html", null, true);
            echo "</span>
                    ";
        }
        // line 39
        echo "                </a>
            </div>
        ";
    }

    // line 43
    public function block_sonata_user_reset_form($context, array $blocks = array())
    {
        // line 44
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_resetting_reset", array("token" => ($context["token"] ?? null)))));
        echo "
                    <div class=\"form-group\">
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.new_password", array(), "FOSUserBundle"))));
        // line 50
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.new_password_confirmation", array(), "FOSUserBundle"))));
        // line 56
        echo "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">
                                ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </button>
                        </div>
                    </div>
                ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 65,  146 => 61,  139 => 56,  137 => 53,  132 => 50,  130 => 47,  125 => 45,  120 => 44,  117 => 43,  111 => 39,  105 => 37,  102 => 36,  94 => 33,  91 => 32,  89 => 31,  85 => 30,  82 => 29,  79 => 28,  72 => 67,  70 => 43,  67 => 42,  65 => 28,  61 => 26,  58 => 25,  52 => 23,  47 => 20,  42 => 17,  37 => 14,  28 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Admin/Security/Resetting:reset.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Security/Resetting/reset.html.twig");
    }
}
