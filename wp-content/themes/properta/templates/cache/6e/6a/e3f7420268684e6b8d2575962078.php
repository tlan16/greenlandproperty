<?php

/* helpers/searchform.twig */
class __TwigTemplate_6e6ae3f7420268684e6b8d2575962078 extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\">


        <input class=\"search-query form-text\" placeholder=";
        // line 5
        echo "\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Search", 1 => "aviators"), "method"), "html", null, true);
        echo "\"";
        echo " type=\"text\" name=\"s\" id=\"s\" value=\"";
        if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
        if ($this->getAttribute($_q_, "s")) {
            if (isset($context["q"])) { $_q_ = $context["q"]; } else { $_q_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_q_, "s"), "html", null, true);
        }
        echo "\">
        <button type=\"submit\" class=\"btn\">";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Search", 1 => "aviators"), "method"), "html", null, true);
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
        return array (  42 => 6,  29 => 5,  22 => 2,  19 => 1,);
    }
}
