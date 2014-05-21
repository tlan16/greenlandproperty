<?php

/* helpers/messages.twig */
class __TwigTemplate_609ed43e67582a5c7f88aa7802080034 extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_flash_has_messages", array(), "method")) {
            // line 3
            echo "    <div class=\"span12\">
        ";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "aviators_flash_get_messages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "            <div class=\"alert ";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_message_, "level"), "html", null, true);
                echo "\">
                ";
                // line 6
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo $this->getAttribute($_message_, "message");
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
        return array (  49 => 9,  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  102 => 19,  97 => 30,  93 => 28,  89 => 27,  82 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  54 => 15,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  27 => 4,  20 => 1,  158 => 51,  152 => 49,  145 => 44,  143 => 43,  138 => 40,  136 => 39,  129 => 34,  127 => 33,  120 => 28,  101 => 24,  98 => 23,  94 => 21,  90 => 19,  86 => 18,  67 => 17,  57 => 16,  45 => 5,  31 => 5,  28 => 4,);
    }
}
