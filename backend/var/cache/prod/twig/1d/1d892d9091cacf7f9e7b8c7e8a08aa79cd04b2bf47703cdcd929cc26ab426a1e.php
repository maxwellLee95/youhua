<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_2d5c04efb98958f0edd66856f5db2247da84de4e2c212f7291d306b6a8f3b6f9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())) {
            // line 14
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 15
            echo "        ";
            $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sonata_user_admin_security_logout");
            // line 16
            echo "        ";
            $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_logout", array(), "SonataUserBundle");
            // line 17
            echo "        ";
            $context["_profile_uri"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "userAdmin", array()), "isGranted", array(0 => "EDIT", 1 => twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())), "method")) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "userAdmin", array()), "generateUrl", array(0 => "edit", 1 => array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()))), "method")) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "userAdmin", array()), "generateUrl", array(0 => "show", 1 => array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "id", array()))), "method")));
            // line 18
            echo "        ";
            $context["_profile_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("user_block_profile", array(), "SonataUserBundle");
            // line 19
            echo "        ";
            $context["_user_image"] = ((twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "defaultAvatar", array())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "defaultAvatar", array()))) : (null));
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            // line 22
            echo "
        ";
            // line 23
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN") && twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "impersonating", array()))) {
                // line 24
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 25
                echo "            ";
                $context["_logout_uri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "impersonating", array()), "route", array()), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_user"] ?? null), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit")));
                // line 26
                echo "            ";
                $context["_logout_text"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("switch_user_exit", array(), "SonataUserBundle");
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        <li class=\"user-header ";
            // line 29
            echo twig_escape_filter($this->env, ($context["_bg_class"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 30
            if (($context["_user_image"] ?? null)) {
                // line 31
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, ($context["_user_image"] ?? null), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 33
            echo "            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 42
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["_profile_uri"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, ($context["_profile_text"] ?? null), "html", null, true);
            echo "</a>
            </div>

            <div class=\"pull-right\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, ($context["_logout_uri"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, ($context["_logout_text"] ?? null), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  102 => 45,  97 => 42,  90 => 33,  84 => 31,  82 => 30,  78 => 29,  75 => 28,  72 => 27,  69 => 26,  66 => 25,  63 => 24,  61 => 23,  58 => 22,  56 => 21,  54 => 20,  51 => 19,  48 => 18,  45 => 17,  42 => 16,  39 => 15,  36 => 14,  33 => 13,  27 => 12,  24 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Admin/Core:user_block.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Admin/Core/user_block.html.twig");
    }
}
