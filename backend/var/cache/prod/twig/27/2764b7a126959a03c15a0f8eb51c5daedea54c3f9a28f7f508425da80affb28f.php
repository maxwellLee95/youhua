<?php

/* admin/show_image.html.twig */
class __TwigTemplate_613c99a428923455d637027c1265e7daf1eee6e7d638d9196f80dfce64ee082d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "admin/show_image.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        $context["width"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "width", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "width", array())) : (80));
        // line 4
        echo "     ";
        $context["height"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "height", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "height", array())) : (80));
        // line 5
        echo "     ";
        if (($context["value"] ?? null)) {
            // line 6
            echo "         ";
            if (twig_test_iterable(($context["value"] ?? null))) {
                // line 7
                echo "             <ul class=\"sonata-ba-show-one-to-many\">
                 ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 9
                    echo "                     <li class=\"col-md-4\">
                         <img src=\"";
                    // line 10
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "prefix", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "prefix", array()), "html", null, true);
                    }
                    echo twig_escape_filter($this->env, $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderRelationElement($context["val"], ($context["field_description"] ?? null)), "html", null, true);
                    echo "\" style=\"max-width:";
                    echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                    echo "px; max-height:";
                    echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
                    echo "px;\" />
                     </li>
                 ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "             </ul>
         ";
            } else {
                // line 15
                echo "             <img src=\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array(), "any", false, true), "prefix", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field_description"] ?? null), "options", array()), "prefix", array()), "html", null, true);
                }
                echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                echo "\" style=\"max-width:";
                echo twig_escape_filter($this->env, ($context["width"] ?? null), "html", null, true);
                echo "px; max-height:";
                echo twig_escape_filter($this->env, ($context["height"] ?? null), "html", null, true);
                echo "px;\" />
         ";
            }
            // line 17
            echo "     ";
        }
    }

    public function getTemplateName()
    {
        return "admin/show_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  77 => 15,  73 => 13,  57 => 10,  54 => 9,  50 => 8,  47 => 7,  44 => 6,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin/show_image.html.twig", "/data/wwwroot/www.nowhoarts.com/templates/admin/show_image.html.twig");
    }
}
