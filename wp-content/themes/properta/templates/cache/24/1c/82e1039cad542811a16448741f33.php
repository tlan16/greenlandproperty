<?php

/* properties/amenities.twig */
class __TwigTemplate_241c82e1039cad542811a16448741f33 extends Twig_Template
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
        return array (  59 => 13,  45 => 11,  42 => 10,  38 => 9,  35 => 8,  25 => 4,  21 => 2,  217 => 84,  210 => 80,  204 => 77,  200 => 75,  198 => 74,  195 => 73,  188 => 70,  184 => 69,  181 => 68,  179 => 67,  176 => 66,  173 => 65,  167 => 62,  163 => 61,  160 => 60,  157 => 59,  155 => 58,  152 => 57,  149 => 56,  143 => 53,  136 => 51,  133 => 50,  131 => 49,  121 => 45,  117 => 43,  111 => 40,  104 => 38,  102 => 37,  96 => 34,  92 => 33,  88 => 31,  83 => 28,  80 => 27,  74 => 25,  66 => 15,  60 => 20,  48 => 15,  37 => 11,  32 => 9,  24 => 4,  19 => 1,  93 => 19,  85 => 28,  72 => 24,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  53 => 17,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  144 => 51,  139 => 52,  132 => 44,  130 => 43,  125 => 46,  123 => 39,  116 => 34,  114 => 33,  107 => 39,  89 => 30,  86 => 23,  82 => 27,  78 => 19,  75 => 22,  58 => 19,  50 => 16,  40 => 5,  31 => 7,  28 => 3,);
    }
}
