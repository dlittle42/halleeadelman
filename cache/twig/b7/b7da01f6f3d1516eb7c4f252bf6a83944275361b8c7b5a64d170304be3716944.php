<?php

/* partials/owl-carousel.html.twig */
class __TwigTemplate_adceb54023bc35bd328d87794198d080113b11557c3858372623a33b5e720160 extends Twig_Template
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
        $context["owl_id"] = ("owl-" . ($context["hash"] ?? null));
        // line 2
        echo "<div class=\"owl-carousel owl-theme\" id=\"";
        echo ($context["owl_id"] ?? null);
        echo "\">
    ";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->regexReplace(($context["owl_items"] ?? null), "(^
?<p>|</p>\$)", "");
        echo "
</div>
<script>
    \$(document).ready(function(){
        \$(\"#";
        // line 7
        echo ($context["owl_id"] ?? null);
        echo "\").owlCarousel({
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["params"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["param"]) {
            // line 9
            echo "            ";
            echo $context["name"];
            echo ": ";
            echo $context["param"];
            echo ",
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        });
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "partials/owl-carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  42 => 9,  38 => 8,  34 => 7,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set owl_id = 'owl-' ~ hash %}
<div class=\"owl-carousel owl-theme\" id=\"{{ owl_id }}\">
    {{ owl_items|regex_replace('(^\\n?<p>|<\\/p>\$)','') }}
</div>
<script>
    \$(document).ready(function(){
        \$(\"#{{ owl_id }}\").owlCarousel({
            {% for name,param in params %}
            {{ name }}: {{ param }},
            {% endfor %}
        });
    });
</script>

", "partials/owl-carousel.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/plugins/shortcode-owl-carousel/templates/partials/owl-carousel.html.twig");
    }
}
