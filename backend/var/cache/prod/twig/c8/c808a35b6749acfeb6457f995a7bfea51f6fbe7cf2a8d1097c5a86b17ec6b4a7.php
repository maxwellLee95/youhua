<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_b4c16e743b9f8287eb4602eb5a0aefa2dbf9ca2e2519bc1ea7971cd1c715e19c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
            'sonata_roles_matrix_widget' => array($this, 'block_sonata_roles_matrix_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('sonata_roles_matrix_widget', $context, $blocks);
    }

    // line 12
    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"editable\">
        <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 16
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 18
        if ((twig_length_filter($this->env, ($context["read_only_choices"] ?? null)) > 0)) {
            // line 19
            echo "    <div class=\"readonly\">
        <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["read_only_choices"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 23
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_sonata_roles_matrix_widget($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    ";
        echo $this->extensions['Sonata\UserBundle\Twig\RolesMatrixExtension']->renderMatrix($this->env, ($context["form"] ?? null));
        echo "
    <ul class=\"list-unstyled\">
        ";
        // line 35
        echo $this->extensions['Sonata\UserBundle\Twig\RolesMatrixExtension']->renderRolesList($this->env, ($context["form"] ?? null));
        echo "
    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  90 => 33,  88 => 32,  85 => 31,  77 => 25,  68 => 23,  64 => 22,  59 => 20,  56 => 19,  54 => 18,  49 => 16,  45 => 15,  42 => 14,  40 => 13,  37 => 12,  33 => 31,  30 => 30,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataUserBundle:Form:form_admin_fields.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/user-bundle/src/Resources/views/Form/form_admin_fields.html.twig");
    }
}
