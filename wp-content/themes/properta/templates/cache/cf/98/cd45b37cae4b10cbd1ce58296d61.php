<?php

/* helpers/searchform.twig */
class __TwigTemplate_cf98cd45b37cae4b10cbd1ce58296d61 extends Twig_Template
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
        echo "<div class=\"content\">
<form method=\"get\" class=\"site-search\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\">


        <input class=\"search-query form-text\" placeholder=";
        // line 5
        echo "\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Search", 1 => "aviators"), "method"), "html", null, true);
        echo "\"";
        echo " type=\"text\" name=\"s\" id=\"s\" value=\"";
        if ($this->getAttribute((isset($context["q"]) ? $context["q"] : null), "s")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["q"]) ? $context["q"] : null), "s"), "html", null, true);
        }
        echo "\">
        <button type=\"submit\" class=\"btn\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Search", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>

</form><!-- /.site-search -->
</div><!-- /.inner -->";
    }

    public function getTemplateName()
    {
        return "helpers/searchform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
