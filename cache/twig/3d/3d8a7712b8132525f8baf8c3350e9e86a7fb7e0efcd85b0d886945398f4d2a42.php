<?php

/* chapter.html.twig */
class __TwigTemplate_60e0ba6f5af4052e40a5f0ee1bbd9ec92a5bd946df6cbac31b33007345a0fcad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docs.html.twig", "chapter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
\t\t\t<p>
\t\t\t\t";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'docs.html.twig' %}

{% block content %}
\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
\t\t\t<p>
\t\t\t\t{{ page.content }}
\t\t\t</p>
\t\t</div>
    </div>
{% endblock %}
", "chapter.html.twig", "/home/asikart/web/asikart.co/public_html/docs/user/themes/learn2/templates/chapter.html.twig");
    }
}
