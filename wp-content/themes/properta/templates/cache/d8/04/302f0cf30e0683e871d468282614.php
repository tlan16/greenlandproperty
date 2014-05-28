<?php

/* settings/fields/select_post_type_for_submission.twig */
class __TwigTemplate_d804302f0cf30e0683e871d468282614 extends Twig_Template
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
    <option value=\"\">---</option>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_types"]) ? $context["post_types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post_type"]) {
            // line 4
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post_type"]) ? $context["post_type"] : null), "name"), "html", null, true);
            echo "\" ";
            if (((isset($context["value"]) ? $context["value"] : null) == $this->getAttribute((isset($context["post_type"]) ? $context["post_type"] : null), "name"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post_type"]) ? $context["post_type"] : null), "labels"), "name"), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_type'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "</select>

";
        // line 8
        if ($this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description")) {
            // line 9
            echo "    <p class=\"description\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : null), "description"), "html", null, true);
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "settings/fields/select_post_type_for_submission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  50 => 8,  46 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
