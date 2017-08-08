<?php

/* partials/base.html.twig */
class __TwigTemplate_4b7888ab1c1aa7434aa03a03b4be6a08f97aad2e89a1cd1dcf4a8ebc9b3221a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>
<body id=\"top\" class=\"";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">

<div id=\"layout\">

    <!-- Menu toggle -->
    <a href=\"#menu\" id=\"menuLink\" class=\"menu-link\">
        <!-- Hamburger icon -->
        <span></span>
    </a>
";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "
 <div id=\"main\">
    <div class=\"header-band\">
                <div class=\"wallpaper\">

                </div>
            </div>
     <!--   <div class=\"header\">
            <h1>Page Title</h1>
            <h2>A subtitle for your page goes here</h2>
        </div>
    -->
";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 110
        echo " </section>
</div>
";
        // line 112
        $this->displayBlock('bottom', $context, $blocks);
        // line 115
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "http://yui.yahooapis.com/pure/0.6.0/pure-min.css", 1 => 100), "method");
        // line 18
        echo "      <!--  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99), "method");
        echo " -->
       ";
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 20
        echo "       ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/main.css", 1 => 98), "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/ui.js", 1 => 99), "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 98), "method");
        // line 28
        echo "    ";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "

    <div id=\"menu\">
        <div class=\"pure-menu\">

            <div id=\"logo\">
                <h3>
                    <a href=\"";
        // line 50
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" >
                    ";
        // line 51
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", array()), "title", array());
        echo "
                    <img src=\"";
        // line 52
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/hallee_logo.png");
        echo "\" >
                    </a>
                </h3>
            </div>
            ";
        // line 56
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 61
        echo "            <div class=\"social\">
              <a id=\"mailLink\" class=\"fa fa-envelope\" title=\"\" href=\"/#contact\"></a>
              <a class=\"fa fa-twitter\" title=\"\" target=\"_blank\" href=\"https://twitter.com/halleeadelman\"></a>
              <a class=\"fa fa-facebook\" title=\"\" target=\"_blank\" href=\"https://www.facebook.com/hallee\"></a>
            </div>
        </div>
    </div>
";
    }

    // line 56
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 57
        echo "            <nav class=\"main-nav\">
                ";
        // line 58
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "            </nav>
            ";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "    
        <div id=\"content\" class=\"wrapper padding\">

        <div class=\"mainlogo\">
            <img src=\"";
        // line 86
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/hallee-title-logo.png");
        echo "\">
        </div>
        ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "        </div>
   
";
    }

    // line 88
    public function block_content($context, array $blocks = array())
    {
    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        // line 94
        echo "    <div class=\"footer text-center\">
        
            <div class=\"footer-band-one\">
                <div class=\"middle-band\">
                    <div class=\"footer-img\">
                        <img src=\"";
        // line 99
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/sneakers.png");
        echo "\" >
                    </div>
                    <span class=\"copyright\">&copy; Hallee Adelman 2017</span>
                </div>
            </div>
            <div class=\"footer-band-two\">
                <div class=\"wallpaper middle-band\"></div>
            </div>
        </div>
    </div>
";
    }

    // line 112
    public function block_bottom($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
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
        return array (  284 => 113,  281 => 112,  266 => 99,  259 => 94,  256 => 93,  251 => 88,  245 => 89,  243 => 88,  238 => 86,  232 => 82,  229 => 81,  224 => 59,  222 => 58,  219 => 57,  216 => 56,  205 => 61,  203 => 56,  196 => 52,  192 => 51,  188 => 50,  179 => 43,  176 => 42,  172 => 28,  169 => 27,  166 => 26,  163 => 25,  160 => 24,  156 => 21,  153 => 20,  151 => 19,  146 => 18,  143 => 17,  140 => 16,  132 => 29,  130 => 24,  124 => 22,  122 => 16,  117 => 14,  113 => 13,  110 => 12,  108 => 11,  97 => 7,  94 => 6,  91 => 5,  84 => 115,  82 => 112,  78 => 110,  76 => 93,  73 => 92,  71 => 81,  57 => 69,  55 => 42,  43 => 33,  40 => 32,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('http://yui.yahooapis.com/pure/0.6.0/pure-min.css', 100) %}
      <!--  {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %} -->
       {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
       {% do assets.addCss('theme://css/main.css', 98) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/ui.js', 99) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 98) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div id=\"layout\">

    <!-- Menu toggle -->
    <a href=\"#menu\" id=\"menuLink\" class=\"menu-link\">
        <!-- Hamburger icon -->
        <span></span>
    </a>
{% block header %}


    <div id=\"menu\">
        <div class=\"pure-menu\">

            <div id=\"logo\">
                <h3>
                    <a href=\"{{ base_url == '' ? '/' : base_url }}\" >
                    {{ config.site.title }}
                    <img src=\"{{url('theme://images/hallee_logo.png')}}\" >
                    </a>
                </h3>
            </div>
            {% block header_navigation %}
            <nav class=\"main-nav\">
                {% include 'partials/navigation.html.twig' %}
            </nav>
            {% endblock %}
            <div class=\"social\">
              <a id=\"mailLink\" class=\"fa fa-envelope\" title=\"\" href=\"/#contact\"></a>
              <a class=\"fa fa-twitter\" title=\"\" target=\"_blank\" href=\"https://twitter.com/halleeadelman\"></a>
              <a class=\"fa fa-facebook\" title=\"\" target=\"_blank\" href=\"https://www.facebook.com/hallee\"></a>
            </div>
        </div>
    </div>
{% endblock %}

 <div id=\"main\">
    <div class=\"header-band\">
                <div class=\"wallpaper\">

                </div>
            </div>
     <!--   <div class=\"header\">
            <h1>Page Title</h1>
            <h2>A subtitle for your page goes here</h2>
        </div>
    -->
{% block body %}
    
        <div id=\"content\" class=\"wrapper padding\">

        <div class=\"mainlogo\">
            <img src=\"{{url('theme://images/hallee-title-logo.png')}}\">
        </div>
        {% block content %}{% endblock %}
        </div>
   
{% endblock %}

{% block footer %}
    <div class=\"footer text-center\">
        
            <div class=\"footer-band-one\">
                <div class=\"middle-band\">
                    <div class=\"footer-img\">
                        <img src=\"{{url('theme://images/sneakers.png')}}\" >
                    </div>
                    <span class=\"copyright\">&copy; Hallee Adelman 2017</span>
                </div>
            </div>
            <div class=\"footer-band-two\">
                <div class=\"wallpaper middle-band\"></div>
            </div>
        </div>
    </div>
{% endblock %}
 </section>
</div>
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/templates/partials/base.html.twig");
    }
}
