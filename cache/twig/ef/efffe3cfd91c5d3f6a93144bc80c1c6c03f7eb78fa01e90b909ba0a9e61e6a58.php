<?php

/* mainpage.html.twig */
class __TwigTemplate_7139bfb9068a7e9f6af53a1ffdca44558a26a25a2b2d798bf250dec1f04047c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "mainpage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "




<div class=\"modular-row mainimage\">

\t<div class=\"header-bkgd\">
\t
\t\t<div class=\"wallpaper\"></div>
\t\t<div class=\"floorboard\"></div>
\t\t<div class=\"floor\"></div>
\t\t<img class=\"header-frame frame-ballerina\" src=\"";
        // line 16
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-ballerinaback.png");
        echo "\">
\t\t<img class=\"header-frame frame-frayed\" src=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-frayed.png");
        echo "\">
\t\t<img class=\"header-frame frame-girlsketch\" src=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-girlsketch.png");
        echo "\">
\t\t<img class=\"header-frame frame-pinkladies\" src=\"";
        // line 19
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-pinkladies.png");
        echo "\">
\t\t<img class=\"header-frame frame-blackdress\" src=\"";
        // line 20
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-blackdress.png");
        echo "\">
\t\t<img class=\"header-frame frame-closeup\" src=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-dresscloseup.png");
        echo "\">
\t\t<img class=\"desk\" src=\"";
        // line 22
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/desk.png");
        echo "\">
\t\t
\t</div>



</div>



\t<div class=\"modular-row intro wrapper padding\">

\t\t
\t\t\t";
        // line 35
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t
\t\t
\t\t
\t\t
\t</div>

\t<div class=\"modular-row callouts flexcontainer wrapper padding\">
\t
\t\t<div class=\"home-callout books\">

\t\t\t";
        // line 46
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "callout1", array()));
        echo "
\t\t\t<a class=\"button\" href=\"writing\">read on</a>
\t\t</div>
\t\t<div class=\"home-callout projects\">
\t\t\t";
        // line 50
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "callout2", array()));
        echo "
\t\t\t<a class=\"button\" href=\"http://doyouha.com\" target=\"_blank\">learn more</a>
\t\t</div>
\t</div>

\t<div class=\"modular-row twitter-section\">

\t\t<div class=\"wallpaper\">
\t\t\t<img class=\"header-frame frame-ballerina mobile-hide\" src=\"";
        // line 58
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-ballerinaback.png");
        echo "\">
\t\t<img class=\"header-frame frame-frayed mobile-hide\" src=\"";
        // line 59
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-frayed.png");
        echo "\">
\t\t<img class=\"header-frame frame-girlsketch mobile-hide\" src=\"";
        // line 60
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-girlsketch.png");
        echo "\">
\t\t<img class=\"header-frame frame-pinkladies mobile-hide\" src=\"";
        // line 61
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-pinkladies.png");
        echo "\">
\t\t<img class=\"header-frame frame-blackdress mobile-hide\" src=\"";
        // line 62
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-blackdress.png");
        echo "\">
\t\t<img class=\"header-frame frame-closeup mobile-hide\" src=\"";
        // line 63
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/frame-dresscloseup.png");
        echo "\">
\t\t\t<div class=\"tweet-window\">
\t\t\t\t<div class=\"tweet-mobile\">
\t\t\t\t\t<a class=\"twitter-timeline\" data-height=\"400\" href=\"https://twitter.com/HalleeAdelman\">Tweets by HalleeAdelman</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"contact\" class=\"modular-row contact-section\">

\t<h2>Learn more about <span class=\"bold\">Hallee</span> and her work.</h2>

\t\t<div class=\"flexcontainer wrapper padding\">

\t\t
\t
\t\t\t<div class=\"home-callout author-contact\">
\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "contact1", array()));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"home-callout agent-contact\">
\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t";
        // line 87
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "custom", array()), "contact2", array()));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "mainpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 87,  159 => 82,  137 => 63,  133 => 62,  129 => 61,  125 => 60,  121 => 59,  117 => 58,  106 => 50,  99 => 46,  85 => 35,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}





<div class=\"modular-row mainimage\">

\t<div class=\"header-bkgd\">
\t
\t\t<div class=\"wallpaper\"></div>
\t\t<div class=\"floorboard\"></div>
\t\t<div class=\"floor\"></div>
\t\t<img class=\"header-frame frame-ballerina\" src=\"{{url('theme://images/frame-ballerinaback.png')}}\">
\t\t<img class=\"header-frame frame-frayed\" src=\"{{url('theme://images/frame-frayed.png')}}\">
\t\t<img class=\"header-frame frame-girlsketch\" src=\"{{url('theme://images/frame-girlsketch.png')}}\">
\t\t<img class=\"header-frame frame-pinkladies\" src=\"{{url('theme://images/frame-pinkladies.png')}}\">
\t\t<img class=\"header-frame frame-blackdress\" src=\"{{url('theme://images/frame-blackdress.png')}}\">
\t\t<img class=\"header-frame frame-closeup\" src=\"{{url('theme://images/frame-dresscloseup.png')}}\">
\t\t<img class=\"desk\" src=\"{{url('theme://images/desk.png')}}\">
\t\t
\t</div>



</div>



\t<div class=\"modular-row intro wrapper padding\">

\t\t
\t\t\t{{ page.content }}
\t
\t\t
\t\t
\t\t
\t</div>

\t<div class=\"modular-row callouts flexcontainer wrapper padding\">
\t
\t\t<div class=\"home-callout books\">

\t\t\t{{header.custom.callout1|markdown}}
\t\t\t<a class=\"button\" href=\"writing\">read on</a>
\t\t</div>
\t\t<div class=\"home-callout projects\">
\t\t\t{{header.custom.callout2|markdown}}
\t\t\t<a class=\"button\" href=\"http://doyouha.com\" target=\"_blank\">learn more</a>
\t\t</div>
\t</div>

\t<div class=\"modular-row twitter-section\">

\t\t<div class=\"wallpaper\">
\t\t\t<img class=\"header-frame frame-ballerina mobile-hide\" src=\"{{url('theme://images/frame-ballerinaback.png')}}\">
\t\t<img class=\"header-frame frame-frayed mobile-hide\" src=\"{{url('theme://images/frame-frayed.png')}}\">
\t\t<img class=\"header-frame frame-girlsketch mobile-hide\" src=\"{{url('theme://images/frame-girlsketch.png')}}\">
\t\t<img class=\"header-frame frame-pinkladies mobile-hide\" src=\"{{url('theme://images/frame-pinkladies.png')}}\">
\t\t<img class=\"header-frame frame-blackdress mobile-hide\" src=\"{{url('theme://images/frame-blackdress.png')}}\">
\t\t<img class=\"header-frame frame-closeup mobile-hide\" src=\"{{url('theme://images/frame-dresscloseup.png')}}\">
\t\t\t<div class=\"tweet-window\">
\t\t\t\t<div class=\"tweet-mobile\">
\t\t\t\t\t<a class=\"twitter-timeline\" data-height=\"400\" href=\"https://twitter.com/HalleeAdelman\">Tweets by HalleeAdelman</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"contact\" class=\"modular-row contact-section\">

\t<h2>Learn more about <span class=\"bold\">Hallee</span> and her work.</h2>

\t\t<div class=\"flexcontainer wrapper padding\">

\t\t
\t
\t\t\t<div class=\"home-callout author-contact\">
\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t{{header.custom.contact1|markdown}}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"home-callout agent-contact\">
\t\t\t\t<div class=\"textbox\">
\t\t\t\t\t{{header.custom.contact2|markdown}}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

", "mainpage.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/templates/mainpage.html.twig");
    }
}
