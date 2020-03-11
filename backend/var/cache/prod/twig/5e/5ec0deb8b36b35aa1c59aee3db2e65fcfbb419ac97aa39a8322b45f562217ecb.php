<?php

/* SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig */
class __TwigTemplate_023e2d95d9aadd9d234c89c1b4b54d9eb359f0e79b1235e3396c347f3ae80155 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", 12);
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
            <p>";
        // line 43
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? null)), "FOSUserBundle"), "html", null, true));
        echo "</p>
            <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_user_admin_security_login");
        echo "\">
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "
            </a>
        </div>
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

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 37,  110 => 36,  102 => 33,  99 => 32,  97 => 31,  93 => 30,  90 => 29,  87 => 28,  77 => 45,  73 => 44,  69 => 43,  66 => 42,  64 => 28,  60 => 26,  57 => 25,  51 => 23,  46 => 20,  41 => 17,  36 => 14,  27 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Admin/Security/Resetting:checkEmail.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Security/Resetting/checkEmail.html.twig");
    }
}
