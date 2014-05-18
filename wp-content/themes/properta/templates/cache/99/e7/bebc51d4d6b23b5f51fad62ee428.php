<?php

/* helpers/messages.twig */
class __TwigTemplate_99e7bebc51d4d6b23b5f51fad62ee428 extends Twig_Template
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
        // line 2
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_flash_has_messages", array(), "method")) {
            // line 3
            echo "    <div class=\"span12\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_flash_get_messages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <div class=\"alert ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "level"), "html", null, true);
                echo "\">
                ";
                // line 6
                echo $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message");
                echo "
            </div><!-- /.alert -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 9
            echo "    </div><!-- /.span12 -->
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  93 => 19,  85 => 28,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  53 => 16,  44 => 12,  41 => 11,  39 => 10,  36 => 6,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  142 => 48,  140 => 47,  135 => 44,  133 => 43,  126 => 39,  121 => 37,  116 => 34,  114 => 33,  107 => 28,  89 => 30,  86 => 23,  82 => 27,  78 => 19,  75 => 22,  58 => 17,  50 => 15,  40 => 5,  31 => 5,  28 => 3,);
    }
}
