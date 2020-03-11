<?php

/* admin/consumer_receipt_infos_action.html.twig */
class __TwigTemplate_72d54bc733736e9f409f76c73a4a7dadbf11bd4aae11fa108a0e4117cceaef7e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_consumer_receiptinfo_list", array("id" => twig_get_attribute($this->env, $this->source, ($context["object"] ?? null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_receipt_infos", array(), "messages"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "admin/consumer_receipt_infos_action.html.twig";
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
        return new Twig_Source("", "admin/consumer_receipt_infos_action.html.twig", "/data/wwwroot/www.nowhoarts.com/templates/admin/consumer_receipt_infos_action.html.twig");
    }
}
