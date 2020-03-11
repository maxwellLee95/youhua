<?php

/* PicossSonataExtraAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_982fc677736359317f799494b1ac1722e62b5069a29d29cf7a758f9332e1a882 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["revision"] ?? null), "loggedAt", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PicossSonataExtraAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 12,  23 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PicossSonataExtraAdminBundle:CRUD:history_revision_timestamp.html.twig", "/data/wwwroot/www.nowhoarts.com/vendor/picoss/sonata-extra-admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
