<?php

/* partials/base.html.twig */
class __TwigTemplate_ad159cbe2764e60a4d43b5261d3d6289a73432c05a0b569d3b52beed3c151476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["github_link_position"] = ((array_key_exists("github_link_position", $context)) ? (($context["github_link_position"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array())));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 43
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    ";
        // line 44
        $this->displayBlock('sidebar', $context, $blocks);
        // line 56
        echo "
    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 95
        echo " </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 21
        echo "
        ";
        // line 22
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 38
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 44
    public function block_sidebar($context, array $blocks = array())
    {
        // line 45
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 48
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 48)->display($context);
        echo "</a>
                ";
        // line 49
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "                ";
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 50)->display($context);
        // line 51
        echo "            </div>
        </div>
        ";
        // line 53
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "    </nav>
    ";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 64
        $this->displayBlock('topbar', $context, $blocks);
        // line 77
        echo "
            ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
            ";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "
        </div>
        ";
        // line 87
        $this->displayBlock('navigation', $context, $blocks);
        // line 88
        echo "    </section>
    ";
    }

    // line 64
    public function block_topbar($context, array $blocks = array())
    {
        if (((($context["github_link_position"] ?? null) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 65
            echo "            <div id=\"top-bar\">
                ";
            // line 66
            if ((($context["github_link_position"] ?? null) == "top")) {
                // line 67
                echo "                <div id=\"top-github-link\">
                ";
                // line 68
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 68)->display($context);
                // line 69
                echo "                </div>
                ";
            }
            // line 71
            echo "
                ";
            // line 72
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 73
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 73)->display($context);
                // line 74
                echo "                ";
            }
            // line 75
            echo "            </div>
            ";
        }
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "                ";
        if ((($context["github_link_position"] ?? null) == "bottom")) {
            // line 82
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 82)->display($context);
            // line 83
            echo "                ";
        }
        // line 84
        echo "            ";
    }

    // line 87
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 90
    public function block_analytics($context, array $blocks = array())
    {
        // line 91
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 92
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 92)->display($context);
            // line 93
            echo "        ";
        }
        // line 94
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 94,  318 => 93,  315 => 92,  312 => 91,  309 => 90,  304 => 87,  300 => 84,  297 => 83,  294 => 82,  291 => 81,  288 => 80,  283 => 78,  277 => 75,  274 => 74,  271 => 73,  269 => 72,  266 => 71,  262 => 69,  260 => 68,  257 => 67,  255 => 66,  252 => 65,  248 => 64,  243 => 88,  241 => 87,  237 => 85,  235 => 80,  232 => 79,  230 => 78,  227 => 77,  225 => 64,  217 => 58,  214 => 57,  209 => 54,  207 => 53,  203 => 51,  200 => 50,  198 => 49,  192 => 48,  187 => 45,  184 => 44,  177 => 38,  174 => 37,  171 => 36,  168 => 35,  165 => 34,  162 => 33,  159 => 32,  156 => 31,  150 => 28,  147 => 27,  144 => 26,  141 => 25,  138 => 24,  135 => 23,  133 => 22,  130 => 21,  127 => 20,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  112 => 15,  107 => 40,  105 => 31,  102 => 30,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  74 => 8,  71 => 7,  68 => 6,  62 => 95,  59 => 90,  57 => 57,  54 => 56,  52 => 44,  46 => 43,  43 => 42,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set github_link_position = github_link_position is defined ? github_link_position : theme_config.github.position %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/theme.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/featherlight.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}

        {{ assets.css() }}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/featherlight.min.js') %}
        {% do assets.addJs('theme://js/clipboard.min.js') %}
        {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}
        {% do assets.addJs('theme://js/learn.js') %}
        {{ assets.js() }}
    {% endblock %}

    {% endblock %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
    {% block sidebar %}
    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a>
                {% include 'partials/search.html.twig' %}
                {% include 'partials/langswitcher.html.twig' %}
            </div>
        </div>
        {% include 'partials/sidebar.html.twig' %}
    </nav>
    {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            {% block topbar %}{% if  github_link_position == 'top' or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {% if  github_link_position == 'top' %}
                <div id=\"top-github-link\">
                {% include 'partials/github_link.html.twig' %}
                </div>
                {% endif %}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {% block footer %}
                {% if  github_link_position == 'bottom' %}
                {% include 'partials/github_note.html.twig' %}
                {% endif %}
            {% endblock %}

        </div>
        {% block navigation %}{% endblock %}
    </section>
    {% endblock %}
    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include 'partials/analytics.html.twig' %}
        {% endif %}
    {% endblock %}
 </body>
</html>
", "partials/base.html.twig", "/home/asikart/web/asikart.co/public_html/docs/user/themes/learn2/templates/partials/base.html.twig");
    }
}
