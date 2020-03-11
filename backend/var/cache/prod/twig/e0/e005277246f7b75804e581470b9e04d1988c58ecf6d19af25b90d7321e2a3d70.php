<?php

/* SonataUserBundle:Form:roles_matrix.html.twig */
class __TwigTemplate_90ff4e08366adc4467c08d3b3f6fc17e2fb3716b98e787a15dc60a9ee14a4faf extends Twig_Template
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
        echo "<table class=\"table table-condensed\">
    <thead>
    <tr>
        <th></th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(($context["permission_labels"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 16
            echo "            <th> ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " </th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_roles"] ?? null));
        foreach ($context['_seq'] as $context["admin_label"] => $context["roles"]) {
            // line 22
            echo "        <tr>
            <th>";
            // line 23
            echo twig_escape_filter($this->env, $context["admin_label"], "html", null, true);
            echo "</th>
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($context["roles"]));
            foreach ($context['_seq'] as $context["role"] => $context["attributes"]) {
                // line 25
                echo "                <td>
                    ";
                // line 26
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["attributes"], "form", array()), 'widget', array("label" => false));
                echo "
                    ";
                // line 27
                if ( !twig_get_attribute($this->env, $this->source, $context["attributes"], "is_granted", array())) {
                    // line 28
                    echo "                        <script>
                            \$('input[value=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('disable');
                            \$('form').on('submit', function() {
                                \$('input[value=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "\"]').iCheck('enable');
                            });
                        </script>
                    ";
                }
                // line 35
                echo "                </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['role'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['admin_label'], $context['roles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:roles_matrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 39,  93 => 37,  86 => 35,  79 => 31,  74 => 29,  71 => 28,  69 => 27,  65 => 26,  62 => 25,  58 => 24,  54 => 23,  51 => 22,  47 => 21,  42 => 18,  33 => 16,  29 => 15,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Form:roles_matrix.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Form/roles_matrix.html.twig");
    }
}
