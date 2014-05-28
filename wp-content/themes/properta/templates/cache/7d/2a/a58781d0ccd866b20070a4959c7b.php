<?php

/* settings/fields/textarea.twig */
class __TwigTemplate_7d2aa58781d0ccd866b20070a4959c7b extends Twig_Template
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
        echo "<textarea type=\"text\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\" class=\"<?php print \$args['option']->class; ?>\" cols=\"60\" rows=\"3\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>

";
        // line 3
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description")) {
            // line 4
            echo "    <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  29 => 3,  19 => 1,);
    }
}
