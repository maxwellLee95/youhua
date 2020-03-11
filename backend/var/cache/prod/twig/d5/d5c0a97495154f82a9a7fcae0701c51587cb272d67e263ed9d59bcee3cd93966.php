<?php

/* admin/consumer_orders_action.html.twig */
class __TwigTemplate_b059bfe6bd92be19893867d98173e023661000373b796f11df0cffe858118fc1 extends Twig_Template
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
        // line 1
        echo "<a class=\"btn btn-sm btn-default\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_consumer_order_list", array("id" => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_orders", array(), "messages"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "admin/consumer_orders_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/consumer_orders_action.html.twig", "/data/wwwroot/www.nowhoarts.com/templates/admin/consumer_orders_action.html.twig");
    }
}
