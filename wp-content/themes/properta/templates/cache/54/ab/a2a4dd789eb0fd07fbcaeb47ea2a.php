<?php

/* properties/amenities.twig */
class __TwigTemplate_54aba2a4dd789eb0fd07fbcaeb47ea2a extends Twig_Template
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
        if ((isset($context["amenities"]) ? $context["amenities"] : null)) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"span6\">
            <h2>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "General amenities", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

            <div class=\"row\">
                ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["amenities"]) ? $context["amenities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 8
                echo "                    <ul class=\"span2\">
                        ";
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["column"]) ? $context["column"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                    // line 10
                    echo "
                            <li class=\"";
                    // line 11
                    if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "has_term", array(0 => $this->getAttribute((isset($context["amenity"]) ? $context["amenity"] : null), "term_id"), 1 => "amenities", 2 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method")) {
                        echo "checked";
                    } else {
                        echo "plain";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["amenity"]) ? $context["amenity"] : null), "name"), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['amenity'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 13
                echo "                    </ul><!-- /.span2 -->
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "            </div><!-- /.row -->
        </div><!-- /.span12 -->
    </div><!-- /.row -->
";
        }
    }

    public function getTemplateName()
    {
        return "properties/amenities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  42 => 10,  35 => 8,  21 => 2,  218 => 85,  211 => 81,  205 => 78,  201 => 76,  199 => 75,  196 => 74,  189 => 71,  185 => 70,  182 => 69,  180 => 68,  177 => 67,  174 => 66,  168 => 63,  164 => 62,  161 => 61,  158 => 60,  156 => 59,  153 => 58,  150 => 57,  144 => 54,  137 => 52,  134 => 51,  132 => 50,  122 => 46,  118 => 44,  112 => 41,  108 => 40,  105 => 39,  103 => 38,  97 => 35,  84 => 29,  81 => 28,  73 => 25,  59 => 13,  54 => 18,  51 => 17,  49 => 16,  38 => 9,  33 => 10,  25 => 4,  45 => 11,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  93 => 34,  85 => 28,  72 => 21,  69 => 20,  67 => 23,  64 => 18,  61 => 21,  53 => 16,  44 => 12,  41 => 11,  39 => 10,  36 => 6,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  142 => 48,  140 => 53,  135 => 44,  133 => 43,  126 => 47,  121 => 37,  116 => 34,  114 => 33,  107 => 28,  89 => 32,  86 => 23,  82 => 27,  78 => 19,  75 => 26,  58 => 17,  50 => 15,  40 => 5,  31 => 7,  28 => 3,);
    }
}
