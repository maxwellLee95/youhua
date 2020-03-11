<?php

/* SonataUserBundle:Form:roles_matrix_list.html.twig */
class __TwigTemplate_db73c32134eb132be2ec90d1166d6d9737fe011386a6eb53bffb443f1a9747fc extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["roles"] ?? null)));
        foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
            // line 12
            echo "    <li>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", array()), 'widget', array("label" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role_translated", array()), "value" => twig_get_attribute($this->env, $this->source, $context["attributes"], "role", array())));
            echo "</li>
    ";
            // line 13
            if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", array())) {
                // line 14
                echo "        <script>
            \$('input[value=\"";
                // line 15
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('disable');
            \$('form').on('submit', function() {
                \$('input[value=\"";
                // line 17
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"]').iCheck('enable');
            });
        </script>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:roles_matrix_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 17,  37 => 15,  34 => 14,  32 => 13,  27 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Form:roles_matrix_list.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Form/roles_matrix_list.html.twig");
    }
}
