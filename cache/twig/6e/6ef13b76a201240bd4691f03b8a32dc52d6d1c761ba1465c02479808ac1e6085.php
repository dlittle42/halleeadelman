<?php

/* modular/mainimage.html.twig */
class __TwigTemplate_1150ff304d19608826749086313af9c66e9d36612d9557d145578e7a52c14d23 extends Twig_Template
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
<div class=\"modular-row mainimage\">

    ";
        // line 4
        echo ($context["content"] ?? null);
        echo "


</div>
<div class=\"modular-row contact\">
<h2>Contact Info</h2>
\t
\t<p><a href=\"mailTo:hallee@adlemans.net\">Hallee Adelman</a> - author and founder, World of Ha<p>

\t<p><a href=\"mailTo:jill@jillcorcoranliteraryagency.com\">Jill Corcoran</a> at Jill Corcoran Literary<p>

  
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/mainimage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
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
<div class=\"modular-row mainimage\">

    {{ content }}


</div>
<div class=\"modular-row contact\">
<h2>Contact Info</h2>
\t
\t<p><a href=\"mailTo:hallee@adlemans.net\">Hallee Adelman</a> - author and founder, World of Ha<p>

\t<p><a href=\"mailTo:jill@jillcorcoranliteraryagency.com\">Jill Corcoran</a> at Jill Corcoran Literary<p>

  
</div>
", "modular/mainimage.html.twig", "/Applications/MAMP/htdocs/halleeadelman.com/user/themes/antimatter/templates/modular/mainimage.html.twig");
    }
}
