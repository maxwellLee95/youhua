<?php

/* PicossSonataExtraAdminBundle:CRUD:trash.html.twig */
class __TwigTemplate_ef87a47f04f4b656e53f499204dc005bd88dfc26e6cbba1c3b4d1c3a9bbf80ae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "PicossSonataExtraAdminBundle:CRUD:trash.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'table_body' => array($this, 'block_table_body'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "PicossSonataExtraAdminBundle:CRUD:trash.html.twig", 15)->display($context);
    }

    // line 57
    public function block_table_body($context, array $blocks = array())
    {
        // line 58
        echo "    <tbody>
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 60
            echo "        <tr>
            ";
            // line 61
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "getTemplate", array(0 => "inner_trash_list_row"), "method"), "PicossSonataExtraAdminBundle:CRUD:trash.html.twig", 61)->display($context);
            // line 62
            echo "        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </tbody>
";
    }

    // line 67
    public function block_list_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:trash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 67,  84 => 64,  69 => 62,  67 => 61,  64 => 60,  47 => 59,  44 => 58,  41 => 57,  37 => 15,  34 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:trash.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/trash.html.twig");
    }
}
