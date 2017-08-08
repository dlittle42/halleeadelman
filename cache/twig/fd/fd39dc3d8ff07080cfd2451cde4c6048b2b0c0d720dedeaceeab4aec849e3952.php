<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_b35c26eca895a9072561529dc798cef555ac05668a6043468b37fa9a441816f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"list-item h-entry\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">

        
        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 12
            echo "            <h2>
                ";
            // line 13
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 14
                echo "                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                ";
            }
            // line 16
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h2>
        ";
        } else {
            // line 19
            echo "            <h2><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" class=\"u-url\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 21
        echo "        <div class=\"list-blog-date\">

                <time class=\"dt-published\" datetime=\"";
        // line 23
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "c");
        echo "\">
                    <span>";
        // line 24
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</span>
                    <em>";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y");
        echo "</em>
                </time>
       
        </div>
        
        ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 31
            echo "        <span class=\"tags\">
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 33
                echo "            <a href=\"";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["blog"] ?? null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\" class=\"p-category\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </span>
        ";
        }
        // line 37
        echo "        ";
        if (($context["header_image"] ?? null)) {
            // line 38
            echo "            ";
            if (($context["header_image_file"] ?? null)) {
                // line 39
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), ($context["header_image_file"] ?? null), array(), "array");
                // line 40
                echo "                    <h1>Step one</h1>
            ";
            } else {
                // line 42
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
                // line 43
                echo "                ";
                if (($context["header_image_media"] ?? null)) {
                    // line 44
                    echo "               <div class=\"featured\">
                    <img src=";
                    // line 45
                    echo $this->getAttribute(($context["header_image_media"] ?? null), "url", array());
                    echo " />
               </div>
               ";
                }
                // line 48
                echo "            ";
            }
            // line 49
            echo "         <!--   ";
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropZoom", array(0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)), "method"), "html", array());
            echo " -->
        ";
        }
        // line 51
        echo "
    </div>

    <div class=\"list-blog-padding \">

    ";
        // line 56
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 57
            echo "        <div class=\"e-content\">        
            ";
            // line 58
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>
        ";
            // line 60
            if ( !($context["truncate"] ?? null)) {
                // line 61
                echo "        ";
                $context["show_prev_next"] = true;
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 64
            echo "        <div class=\"p-summary e-content clearfix\">
            ";
            // line 65
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "
            <p><a href=\"";
            // line 66
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p>
        </div>
    ";
        } elseif (        // line 68
($context["truncate"] ?? null)) {
            // line 69
            echo "        <div class=\"p-summary e-content clearfix\">
            ";
            // line 70
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
          <!--  <p><a href=\"";
            // line 71
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.CONTINUE_READING");
            echo "</a></p> -->
        </div>
    ";
        } else {
            // line 74
            echo "        <div class=\"e-content\">
            ";
            // line 75
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "
        </div>

        ";
            // line 78
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 79
                echo "            ";
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 79)->display($context);
                // line 80
                echo "        ";
            }
            // line 81
            echo "
        ";
            // line 82
            $context["show_prev_next"] = true;
            // line 83
            echo "    ";
        }
        // line 84
        echo "
    ";
        // line 85
        if (($context["show_prev_next"] ?? null)) {
            // line 86
            echo "
        <p class=\"prev-next\">
            ";
            // line 88
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 89
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.PREV_POST");
                echo " </a>
            ";
            }
            // line 91
            echo "            ";
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 92
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"> ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("BLOG.ITEM.NEXT_POST");
                echo "</a>
            ";
            }
            // line 94
            echo "
            
        </p>
    ";
        }
        // line 98
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 98,  268 => 94,  260 => 92,  257 => 91,  249 => 89,  247 => 88,  243 => 86,  241 => 85,  238 => 84,  235 => 83,  233 => 82,  230 => 81,  227 => 80,  224 => 79,  222 => 78,  216 => 75,  213 => 74,  205 => 71,  201 => 70,  198 => 69,  196 => 68,  189 => 66,  185 => 65,  182 => 64,  179 => 63,  176 => 62,  173 => 61,  171 => 60,  166 => 58,  163 => 57,  161 => 56,  154 => 51,  148 => 49,  145 => 48,  139 => 45,  136 => 44,  133 => 43,  130 => 42,  126 => 40,  123 => 39,  120 => 38,  117 => 37,  113 => 35,  99 => 33,  95 => 32,  92 => 31,  90 => 30,  82 => 25,  78 => 24,  74 => 23,  70 => 21,  62 => 19,  53 => 16,  47 => 14,  45 => 13,  42 => 12,  40 => 11,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"list-item h-entry\">

    {% set header_image = page.header.header_image|defined(true) %}
    {% set header_image_width  = page.header.header_image_width|defined(900) %}
    {% set header_image_height = page.header.header_image_height|defined(300) %}
    {% set header_image_file = page.header.header_image_file %}

    <div class=\"list-blog-header\">

        
        {% if page.header.link %}
            <h2>
                {% if page.header.continue_link is not sameas(false) %}
                <a href=\"{{ page.url }}\"><i class=\"fa fa-angle-double-right u-url\"></i></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\" class=\"u-url\">{{ page.title }}</a>
            </h2>
        {% else %}
            <h2><a href=\"{{ page.url }}\" class=\"u-url\">{{ page.title }}</a></h2>
        {% endif %}
        <div class=\"list-blog-date\">

                <time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
                    <span>{{ page.date|date(\"M\") }}</span>
                    <em>{{ page.date|date(\"Y\") }}</em>
                </time>
       
        </div>
        
        {% if page.taxonomy.tag %}
        <span class=\"tags\">
            {% for tag in page.taxonomy.tag %}
            <a href=\"{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\" class=\"p-category\">{{ tag }}</a>
            {% endfor %}
        </span>
        {% endif %}
        {% if header_image %}
            {% if header_image_file %}
                {% set header_image_media = page.media.images[header_image_file] %}
                    <h1>Step one</h1>
            {% else %}
                {% set header_image_media = page.media.images|first %}
                {% if header_image_media %}
               <div class=\"featured\">
                    <img src={{ header_image_media.url }} />
               </div>
               {% endif %}
            {% endif %}
         <!--   {{ header_image_media.cropZoom(header_image_width, header_image_height).html }} -->
        {% endif %}

    </div>

    <div class=\"list-blog-padding \">

    {% if page.header.continue_link is sameas(false) %}
        <div class=\"e-content\">        
            {{ page.content }}
        </div>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <div class=\"p-summary e-content clearfix\">
            {{ page.summary }}
            <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p>
        </div>
    {% elseif truncate %}
        <div class=\"p-summary e-content clearfix\">
            {{ page.content }}
          <!--  <p><a href=\"{{ page.url }}\">{{ 'BLOG.ITEM.CONTINUE_READING'|t }}</a></p> -->
        </div>
    {% else %}
        <div class=\"e-content\">
            {{ page.content }}
        </div>

        {% if config.plugins.comments.enabled %}
            {% include 'partials/comments.html.twig' %}
        {% endif %}

        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">{{ 'BLOG.ITEM.PREV_POST'|t }} </a>
            {% endif %}
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"> {{ 'BLOG.ITEM.NEXT_POST'|t }}</a>
            {% endif %}

            
        </p>
    {% endif %}

    </div>
</div>
", "partials/blog_item.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/templates/partials/blog_item.html.twig");
    }
}
