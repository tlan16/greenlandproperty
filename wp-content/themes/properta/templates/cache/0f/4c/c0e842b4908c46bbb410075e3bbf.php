<?php

/* properties/overview.twig */
class __TwigTemplate_0f4cc0e842b4908c46bbb410075e3bbf extends Twig_Template
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
        echo "<div class=\"overview\">
    <div class=\"row\">
        <div class=\"span3\">
            <h2>";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Overview", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>

            <table>
                <tbody>
                <tr>
                    <th>";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "ID", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>
                        <strong>#";
        // line 11
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_id"), "method"), 0)) {
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_id"), "method"), 0), "html", null, true);
        } else {
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "ID"), "html", null, true);
        }
        echo "</strong
                    </td>
                </tr>

                ";
        // line 15
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price"), "method"), 0)) {
            // line 16
            echo "                    <tr>
                        <th>";
            // line 17
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Price", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>
                            ";
            // line 19
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_custom_text"), "method"), 0)) {
                // line 20
                echo "                                ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_custom_text"), "method"), 0), "html", null, true);
                echo "
                            ";
            } else {
                // line 22
                echo "                                ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price"), "method"), 0)), "method"), "html", null, true);
                echo "

                                ";
                // line 24
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price_suffix"), "method"), 0)) {
                    // line 25
                    echo "                                    <span class=\"suffix\">";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_price_suffix"), "method"), 0), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 27
                echo "                            ";
            }
            // line 28
            echo "                        </td>
                    </tr>
                ";
        }
        // line 31
        echo "
                <tr>
                    <th>";
        // line 33
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Type", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 34
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_types"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 37
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_contracts"), "method"), 0)) {
            // line 38
            echo "                    <tr>
                        <th>";
            // line 39
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Contract", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 40
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_contracts"), "method"), 0), "name"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 43
        echo "
                <tr>
                    <th>";
        // line 45
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Location", 1 => "aviators"), "method"), "html", null, true);
        echo ":</th>
                    <td>";
        // line 46
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "locations"), "method"), 0), "name"), "html", null, true);
        echo "</td>
                </tr>

                ";
        // line 49
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_hide_baths"), "method"), 0) != "1")) {
            // line 50
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bathrooms"), "method"), 0)) {
                // line 51
                echo "                        <tr>
                            <th>";
                // line 52
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bathrooms", 1 => "aviators"), "method"), "html", null, true);
                echo ":</th>
                            <td>";
                // line 53
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bathrooms"), "method"), 0), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 56
            echo "                ";
        }
        // line 57
        echo "
                ";
        // line 58
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if (($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_hide_beds"), "method"), 0) != "1")) {
            // line 59
            echo "                    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bedrooms"), "method"), 0)) {
                // line 60
                echo "                        <tr>
                            <th>";
                // line 61
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Bedrooms", 1 => "aviators"), "method"), "html", null, true);
                echo ":</th>
                            <td>";
                // line 62
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_bedrooms"), "method"), 0), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 65
            echo "                ";
        }
        // line 66
        echo "
                ";
        // line 67
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_area"), "method"), 0)) {
            // line 68
            echo "                    <tr>
                        <th>";
            // line 69
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Area", 1 => "aviators"), "method"), "html", null, true);
            echo ":</th>
                        <td>";
            // line 70
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_area"), "method"), 0), "html", null, true);
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "</td>
                    </tr>
                ";
        }
        // line 73
        echo "
                ";
        // line 74
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "common", 2 => "enable_rating"), "method")) {
            // line 75
            echo "                    <tr>
                        <th>
                            ";
            // line 77
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Rating", 1 => "aviators"), "method"), "html", null, true);
            echo ":
                        </th>
                        <td>
                            ";
            // line 80
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $this->getAttribute($_wp_, "aviators_templates_helpers_kk_star_ratings", array(0 => $this->getAttribute($_post_, "ID")), "method");
            echo "
                        </td>
                    </tr>
                ";
        }
        // line 84
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
        return array (  272 => 84,  263 => 80,  256 => 77,  252 => 75,  249 => 74,  246 => 73,  236 => 70,  231 => 69,  228 => 68,  224 => 67,  221 => 66,  218 => 65,  210 => 62,  205 => 61,  202 => 60,  197 => 59,  193 => 58,  190 => 57,  187 => 56,  179 => 53,  174 => 52,  171 => 51,  166 => 50,  162 => 49,  154 => 46,  149 => 45,  145 => 43,  137 => 40,  132 => 39,  129 => 38,  125 => 37,  117 => 34,  112 => 33,  108 => 31,  103 => 28,  100 => 27,  92 => 25,  88 => 24,  80 => 22,  72 => 20,  68 => 19,  62 => 17,  59 => 16,  55 => 15,  39 => 11,  33 => 9,  24 => 4,  19 => 1,);
    }
}
