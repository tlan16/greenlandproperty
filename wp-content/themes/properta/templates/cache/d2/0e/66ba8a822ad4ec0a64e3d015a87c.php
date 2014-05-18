<?php

/* properties/overview.twig */
class __TwigTemplate_d20e66ba8a822ad4ec0a64e3d015a87c extends Twig_Template
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
        echo "<div class=\"pull-left overview\">
    <div class=\"row\">
        <div class=\"span3\">
            test
            <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Overview", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>

            <table>
                <tbody>
                <tr>
                    <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "ID", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>
                        <strong>#";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_id"), "method"), 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_id"), "method"), 0), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), "html", null, true);
        }
        echo "</strong
                    </td>
                </tr>

                ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_price"), "method"), 0)) {
            // line 17
            echo "                    <tr>
                        <th>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Price", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>
                            ";
            // line 20
            if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_custom_text"), "method"), 0)) {
                // line 21
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_custom_text"), "method"), 0), "html", null, true);
                echo "
                            ";
            } else {
                // line 23
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_price"), "method"), 0)), "method"), "html", null, true);
                echo "

                                ";
                // line 25
                if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_price_suffix"), "method"), 0)) {
                    // line 26
                    echo "                                    <span class=\"suffix\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_price_suffix"), "method"), 0), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 28
                echo "                            ";
            }
            // line 29
            echo "                        </td>
                    </tr>
                ";
        }
        // line 32
        echo "
                <tr>
                    <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_types"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 38
        if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_contracts"), "method"), 0)) {
            // line 39
            echo "                    <tr>
                        <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Contract", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_contracts"), "method"), 0), "name"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 44
        echo "
                <tr>
                    <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "locations"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 50
        if (($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_hide_baths"), "method"), 0) != "1")) {
            // line 51
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_bathrooms"), "method"), 0)) {
                // line 52
                echo "                        <tr>
                            <th>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
                echo ":</th>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_bathrooms"), "method"), 0), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 57
            echo "                ";
        }
        // line 58
        echo "
                ";
        // line 59
        if (($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_hide_beds"), "method"), 0) != "1")) {
            // line 60
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_bedrooms"), "method"), 0)) {
                // line 61
                echo "                        <tr>
                            <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
                echo ":</th>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_bedrooms"), "method"), 0), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 66
            echo "                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_area"), "method"), 0)) {
            // line 69
            echo "                    <tr>
                        <th>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_area"), "method"), 0), "html", null, true);
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "</td>
                    </tr>
                ";
        }
        // line 74
        echo "
                ";
        // line 75
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "common", 2 => "enable_rating"), "method")) {
            // line 76
            echo "                    <tr>
                        <th>
                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Rating", 1 => "aviators"), "method"), "html", null, true);
            echo ":
                        </th>
                        <td>
                            ";
            // line 81
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_templates_helpers_kk_star_ratings", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")), "method");
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 85
        echo "
                </tbody>
            </table>
        </div>
        <!-- /.span2 -->
    </div>
    <!-- /.row -->
</div><!-- /.overview -->";
    }

    public function getTemplateName()
    {
        return "properties/overview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 85,  211 => 81,  205 => 78,  201 => 76,  199 => 75,  196 => 74,  189 => 71,  185 => 70,  182 => 69,  180 => 68,  177 => 67,  174 => 66,  168 => 63,  164 => 62,  161 => 61,  158 => 60,  156 => 59,  153 => 58,  150 => 57,  144 => 54,  137 => 52,  134 => 51,  132 => 50,  122 => 46,  118 => 44,  112 => 41,  108 => 40,  105 => 39,  103 => 38,  97 => 35,  84 => 29,  81 => 28,  73 => 25,  59 => 20,  54 => 18,  51 => 17,  49 => 16,  38 => 12,  33 => 10,  25 => 5,  45 => 9,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  93 => 34,  85 => 28,  72 => 21,  69 => 20,  67 => 23,  64 => 18,  61 => 21,  53 => 16,  44 => 12,  41 => 11,  39 => 10,  36 => 6,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  142 => 48,  140 => 53,  135 => 44,  133 => 43,  126 => 47,  121 => 37,  116 => 34,  114 => 33,  107 => 28,  89 => 32,  86 => 23,  82 => 27,  78 => 19,  75 => 26,  58 => 17,  50 => 15,  40 => 5,  31 => 5,  28 => 3,);
    }
}
