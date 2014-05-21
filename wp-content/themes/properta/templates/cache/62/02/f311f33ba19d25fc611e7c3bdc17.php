<?php

/* properties/amenities.twig */
class __TwigTemplate_6202f311f33ba19d25fc611e7c3bdc17 extends Twig_Template
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
        if (isset($context["amenities"])) { $_amenities_ = $context["amenities"]; } else { $_amenities_ = null; }
        if ($_amenities_) {
            // line 2
            echo "    <div class=\"row\">
        <div class=\"span6\">
            <h2>";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "General amenities", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

            <div class=\"row\">
                ";
            // line 7
            if (isset($context["amenities"])) { $_amenities_ = $context["amenities"]; } else { $_amenities_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_amenities_);
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 8
                echo "                    <ul class=\"span2\">
                        ";
                // line 9
                if (isset($context["column"])) { $_column_ = $context["column"]; } else { $_column_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_column_);
                foreach ($context['_seq'] as $context["_key"] => $context["amenity"]) {
                    // line 10
                    echo "
                            <li class=\"";
                    // line 11
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["amenity"])) { $_amenity_ = $context["amenity"]; } else { $_amenity_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    if ($this->getAttribute($_wp_, "has_term", array(0 => $this->getAttribute($_amenity_, "term_id"), 1 => "amenities", 2 => $this->getAttribute($_post_, "ID")), "method")) {
                        echo "checked";
                    } else {
                        echo "plain";
                    }
                    echo "\">";
                    if (isset($context["amenity"])) { $_amenity_ = $context["amenity"]; } else { $_amenity_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_amenity_, "name"), "html", null, true);
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
        return array (  74 => 15,  67 => 13,  49 => 11,  46 => 10,  41 => 9,  38 => 8,  26 => 4,  22 => 2,  272 => 84,  263 => 80,  256 => 77,  252 => 75,  249 => 74,  246 => 73,  236 => 70,  231 => 69,  228 => 68,  224 => 67,  221 => 66,  218 => 65,  210 => 62,  205 => 61,  202 => 60,  197 => 59,  193 => 58,  190 => 57,  187 => 56,  179 => 53,  174 => 52,  171 => 51,  166 => 50,  162 => 49,  154 => 46,  149 => 45,  145 => 43,  137 => 40,  132 => 39,  129 => 38,  125 => 37,  117 => 34,  112 => 33,  108 => 31,  103 => 28,  100 => 27,  92 => 25,  88 => 24,  80 => 22,  72 => 20,  68 => 19,  62 => 17,  59 => 16,  55 => 15,  39 => 11,  33 => 7,  24 => 4,  19 => 1,);
    }
}
