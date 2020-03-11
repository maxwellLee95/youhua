<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_1e64f0a436e3aa7128a4d5e6ff7c7355233762bd3c9cc7eca08c182e98009d56 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttributes", array()), array("class" => "sidebar-menu", "data-widget" => "tree"));
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "request"), "method")) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "request"), "method")) : (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "roles"), "method")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["sonata_admin"] ?? null), "adminPool", array()), "getOption", array(0 => "role_super_admin"), "method")));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? null)) {
                    // line 14
                    $context["display"] = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayed", array()) && (((isset($context["display"]) || array_key_exists("display", $context))) ? (_twig_default_filter(($context["display"] ?? null))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), array("branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"));
            // line 20
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? null);
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        if (((isset($context["is_link"]) || array_key_exists("is_link", $context)) && ($context["is_link"] ?? null))) {
            echo (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter(($context["icon"] ?? null))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "label", array()), array(), (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context))) ? (_twig_default_filter(($context["translation_domain"] ?? null), "messages")) : ("messages"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 53,  146 => 49,  143 => 47,  141 => 46,  139 => 45,  134 => 44,  131 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 22,  75 => 21,  73 => 20,  70 => 19,  68 => 18,  60 => 14,  55 => 13,  53 => 12,  51 => 10,  48 => 9,  43 => 6,  41 => 5,  39 => 4,  36 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
