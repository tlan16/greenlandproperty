<?php

/* settings/fields/select.twig */
class __TwigTemplate_a317a05d31ae97d80b3a6f7c67ae8743 extends Twig_Template
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
        echo "<select name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["args"]) ? $context["args"] : null), "id"), "html", null, true);
        echo "\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["args"]) ? $context["args"] : null), "option"), "choices"));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 3
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "key"), "html", null, true);
            echo "\" ";
            if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "key"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "value"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "</select>

";
        // line 7
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description")) {
            // line 8
            echo "    <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  49 => 7,  45 => 5,  30 => 3,  26 => 2,  19 => 1,);
    }
}
