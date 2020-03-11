<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_74c5f214720e546f48b8584b1d09af531ba3f1f628443efc1f6745a887a2baa6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list.html.twig", "SonataMediaBundle:MediaAdmin:list.html.twig", 12);
        $this->blocks = array(
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_list_table($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "values", array(), "any", false, true), "category", array(), "array", false, true), "value", array(), "array", true, true)) {
            // line 42
            echo "        <div class=\"col-xs-6 col-md-3\">
            ";
            // line 43
            echo $context["tree"]->macro_navigate_child(array(0 => ($context["root_category"] ?? null)), ($context["admin"] ?? null), true, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, ($context["datagrid"] ?? null), "values", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["category"] ?? null) : null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["value"] ?? null) : null), 1);
            echo "
        </div>
        <div class=\"col-xs-12 col-md-9 no-padding\">
            ";
            // line 46
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 49
            echo "        ";
            $this->displayParentBlock("list_table", $context, $blocks);
            echo "
    ";
        }
    }

    // line 16
    public function macro_navigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__current_category_id__ = null, $__depth__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "current_category_id" => $__current_category_id__,
            "depth" => $__depth__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context["tree"] = $this;
            // line 18
            echo "
    ";
            // line 19
            if ((($context["root"] ?? null) && (twig_length_filter($this->env, ($context["collection"] ?? null)) == 0))) {
                // line 20
                echo "        <div>
            <p class=\"bg-warning\">";
                // line 21
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("warning_no_category", array(), twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "translationdomain", array())), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            // line 24
            echo "    <ul";
            if (($context["root"] ?? null)) {
                echo " class=\"sonata-tree sonata-tree--small js-treeview sonata-tree--toggleable\"";
            }
            echo ">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !(null === $context["element"])) {
                    // line 26
                    echo "            <li>
                <div class=\"sonata-tree__item";
                    // line 27
                    if ((twig_get_attribute($this->env, $this->source, $context["element"], "id", array()) == ($context["current_category_id"] ?? null))) {
                        echo " is-active";
                    }
                    echo "\"";
                    if ((($context["depth"] ?? null) < 2)) {
                        echo " data-treeview-toggled";
                    }
                    echo ">
                    ";
                    // line 28
                    if ((twig_get_attribute($this->env, $this->source, $context["element"], "parent", array()) || ($context["root"] ?? null))) {
                        echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                    }
                    // line 29
                    echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "all", array()), array("category" => twig_get_attribute($this->env, $this->source, $context["element"], "id", array())))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", array()), "html", null, true);
                    echo "</a>
                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo $context["tree"]->macro_navigate_child(twig_get_attribute($this->env, $this->source, $context["element"], "children", array()), ($context["admin"] ?? null), false, ($context["current_category_id"] ?? null), (($context["depth"] ?? null) + 1));
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  143 => 35,  137 => 33,  135 => 32,  126 => 29,  122 => 28,  112 => 27,  109 => 26,  104 => 25,  97 => 24,  91 => 21,  88 => 20,  86 => 19,  83 => 18,  80 => 17,  64 => 16,  56 => 49,  50 => 46,  44 => 43,  41 => 42,  38 => 41,  35 => 40,  31 => 12,  29 => 14,  15 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataMediaBundle:MediaAdmin:list.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/media-bundle/src/Resources/views/MediaAdmin/list.html.twig");
    }
}
