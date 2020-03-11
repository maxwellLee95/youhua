<?php

/* PicossSonataExtraAdminBundle:CRUD:list_trash_inner_row.html.twig */
class __TwigTemplate_bac33640f2553ba88c0223e3da3488e97316b10242781e3c1b81acaf87a9c32c extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["field_description"], "name", array()) == "_action")) {
                // line 14
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? null)), "method") && twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method"))) {
                    // line 15
                    echo "            <td class=\"sonata-ba-list-field sonata-ba-list-field-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field_description"], "type", array()), "html", null, true);
                    echo "\" objectId=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\">
                <div class=\"btn-group\">
                    <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "generateObjectUrl", array(0 => "untrash", 1 => ($context["object"] ?? null)), "method"), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_untrash", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
                    echo "\">
                        <i class=\"fa fa-reply\"></i>
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action_restore", array(), "PicossSonataExtraAdminBundle"), "html", null, true);
                    echo "
                    </a>
                </div>
            </td>
        ";
                }
                // line 24
                echo "    ";
            } else {
                // line 25
                echo "        ";
                echo $this->extensions['Sonata\AdminBundle\Twig\Extension\SonataAdminExtension']->renderListElement($this->env, ($context["object"] ?? null), $context["field_description"]);
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:list_trash_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  51 => 19,  44 => 17,  36 => 15,  33 => 14,  30 => 13,  26 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:list_trash_inner_row.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/list_trash_inner_row.html.twig");
    }
}
