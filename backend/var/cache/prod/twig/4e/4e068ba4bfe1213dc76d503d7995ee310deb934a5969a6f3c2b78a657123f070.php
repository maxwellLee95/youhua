<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_f05ed7c8b5129ae17d3f686b20e8ea75db86b408578d6edef6f585d0572b93d2 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\CoreBundle\Twig\Extension\FlashMessageRuntime')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = (((isset($context["domain"]) || array_key_exists("domain", $context))) ? (($context["domain"] ?? null)) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getRuntime('Sonata\CoreBundle\Twig\Extension\FlashMessageRuntime')->getFlashMessages($context["type"], ($context["domain"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Sonata\CoreBundle\Twig\Extension\StatusRuntime')->statusClass($context["type"]), "html", null, true);
                echo " alert-dismissable\">
            <button
                type=\"button\"
                class=\"close\"
                data-dismiss=\"alert\"
                aria-hidden=\"true\"
                aria-label=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message_close", array(), "SonataCoreBundle"), "html", null, true);
                echo "\"
            >&times;</button>
            ";
                // line 22
                echo $context["message"];
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  45 => 20,  35 => 14,  30 => 13,  27 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataCoreBundle:FlashMessage:render.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/sonata-project/core-bundle/src/Resources/views/FlashMessage/render.html.twig");
    }
}
