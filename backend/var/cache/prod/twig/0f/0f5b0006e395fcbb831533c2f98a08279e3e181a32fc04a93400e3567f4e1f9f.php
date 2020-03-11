<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_084e94a6d4681c423a86aa0d1aa01e9dee7daa71c60e89da14713f9c901e92bf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->macro_attributes(($context["listAttributes"] ?? null));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  42 => 7,  40 => 6,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "knp_menu_ordered.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
