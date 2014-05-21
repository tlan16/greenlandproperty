<?php

/* settings/fields/boolean.twig */
class __TwigTemplate_ad1238e32a939a07fefe6ab543c17202 extends Twig_Template
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
        echo "<input type=\"checkbox\" ";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        if ($_value_) {
            echo "checked=\"checked\"";
        }
        echo " name=\"";
        if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_args_, "id"), "html", null, true);
        echo "\" id=\"";
        if (isset($context["args"])) { $_args_ = $context["args"]; } else { $_args_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_args_, "id"), "html", null, true);
        echo "\">

";
        // line 3
        if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
        if ($this->getAttribute($_option_, "description")) {
            // line 4
            echo "    <p class=\"description\">";
            if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_option_, "description"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields/boolean.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  34 => 3,  19 => 1,);
    }
}
