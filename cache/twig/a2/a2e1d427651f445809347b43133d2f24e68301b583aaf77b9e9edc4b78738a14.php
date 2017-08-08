<?php

/* partials/navigation.html.twig */
class __TwigTemplate_85496e1b0fe01915aac597444be4cf648c83baaac089ed4f4ac4f195e9bf32ef extends Twig_Template
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
        echo "

";
        // line 26
        echo "
<ul class=\"pure-menu-list\">
    ";
        // line 28
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 29
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("selected") : (""));
                // line 33
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " pure-menu-item\">
                <a href=\"";
                // line 34
                echo $this->getAttribute($context["page"], "url", array());
                echo "\" class=\"pure-menu-link\">
                    ";
                // line 35
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 36
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 42
            echo "        <li class=\"pure-menu-item\">
            <a href=\"";
            // line 43
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\" class=\"pure-menu-link\">
                ";
            // line 44
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 45
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <li class=\" pure-menu-item\" di=\"mailLink\">
        <a href=\"/#contact\" class=\"pure-menu-link\">Contact</a>
    </li>
</ul>

";
    }

    // line 3
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 5
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 6
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 7
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo " pure-menu-item\">
                <a href=\"";
                    // line 8
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"pure-menu-link\">
                    ";
                    // line 9
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 10
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul class=\"pure-menu-list\">
                    ";
                    // line 13
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo " pure-menu-item\">
                <a href=\"";
                    // line 18
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"pure-menu-link\">
                    ";
                    // line 19
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 20
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 24,  177 => 20,  171 => 19,  167 => 18,  162 => 17,  155 => 13,  148 => 10,  142 => 9,  138 => 8,  133 => 7,  130 => 6,  127 => 5,  122 => 4,  110 => 3,  101 => 49,  90 => 45,  84 => 44,  80 => 43,  77 => 42,  72 => 41,  69 => 40,  58 => 36,  52 => 35,  48 => 34,  43 => 33,  40 => 32,  35 => 31,  29 => 29,  27 => 28,  23 => 26,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }} pure-menu-item\">
                <a href=\"{{ p.url }}\" class=\"pure-menu-link\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                <ul class=\"pure-menu-list\">
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }} pure-menu-item\">
                <a href=\"{{ p.url }}\" class=\"pure-menu-link\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"pure-menu-list\">
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page }} pure-menu-item\">
                <a href=\"{{ page.url }}\" class=\"pure-menu-link\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li class=\"pure-menu-item\">
            <a href=\"{{ mitem.url }}\" class=\"pure-menu-link\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
    <li class=\" pure-menu-item\" di=\"mailLink\">
        <a href=\"/#contact\" class=\"pure-menu-link\">Contact</a>
    </li>
</ul>

", "partials/navigation.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/themes/hallee-theme/templates/partials/navigation.html.twig");
    }
}
