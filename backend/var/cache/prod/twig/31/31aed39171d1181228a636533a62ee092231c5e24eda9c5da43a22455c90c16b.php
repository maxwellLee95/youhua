<?php

/* PicossSonataExtraAdminBundle:CRUD:list__action_sort.html.twig */
class __TwigTemplate_cf02cc37ba0037d4ad040f112aaf0829bb0673a7c7ec105265a384ca3f481642 extends Twig_Template
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
        // line 12
        $context["moves"] = array(0 => array("way" => twig_constant("Picoss\\SonataExtraAdminBundle\\Handler\\SortableHandler::MOVE_TOP"), "icon" => "glyphicon-arrow-up"), 1 => array("way" => twig_constant("Picoss\\SonataExtraAdminBundle\\Handler\\SortableHandler::MOVE_UP"), "icon" => "glyphicon-chevron-up"), 2 => array("way" => twig_constant("Picoss\\SonataExtraAdminBundle\\Handler\\SortableHandler::MOVE_DOWN"), "icon" => "glyphicon-chevron-down"), 3 => array("way" => twig_constant("Picoss\\SonataExtraAdminBundle\\Handler\\SortableHandler::MOVE_BOTTOM"), "icon" => "glyphicon-arrow-down"));
        // line 18
        echo "
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["moves"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["move"]) {
            // line 20
            echo "    ";
            ob_start();
            // line 21
            echo "    ";
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("action_move_" . twig_get_attribute($this->env, $this->source, $context["move"], "way", array())), array(), "PicossSonataExtraAdminBundle");
            // line 22
            echo "
    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "move", 1 => ($context["object"] ?? null), 2 => array("position" => twig_get_attribute($this->env, $this->source, $context["move"], "way", array()))), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
        <i class=\"glyphicon ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["move"], "icon", array()), "html", null, true);
            echo "\"></i>
        ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), "hide_label", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, ($context["actions"] ?? null), "hide_label", array()) == false))) {
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            }
            // line 26
            echo "    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['move'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:list__action_sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 26,  54 => 25,  50 => 24,  44 => 23,  41 => 22,  38 => 21,  35 => 20,  31 => 19,  28 => 18,  26 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list__action_sort.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list__action_sort.html.twig");
    }
}
