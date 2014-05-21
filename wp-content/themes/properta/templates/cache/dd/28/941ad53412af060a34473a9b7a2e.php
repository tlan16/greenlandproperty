<?php

/* properties/property-box-small.twig */
class __TwigTemplate_dd28941ad53412af060a34473a9b7a2e extends Twig_Template
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
        echo "<div class=\"property\">
    <div class=\"image\">
        <div class=\"content\">
            <a href=\"";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\">
                ";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($_wp_, "aviators_core_get_post_teaser", array(0 => $this->getAttribute($_property_, "ID")), "method")) {
            // line 6
            echo "                    <div class=\"description\"><p>";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_core_get_post_teaser", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
            echo "</p></div>
                ";
        }
        // line 8
        echo "            ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method")) {
            // line 9
            echo "                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aq_resize", array(0 => $this->getAttribute($_wp_, "wp_get_attachment_url", array(0 => $this->getAttribute($_wp_, "get_post_thumbnail_id", array(0 => $this->getAttribute($_property_, "ID")), "method"), 1 => "full"), "method"), 1 => 270, 2 => 200, 3 => "true"), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 11
            echo "                <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "\">
            ";
        }
        // line 13
        echo "            </a>
        </div><!-- /.content -->


        ";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "common", 2 => "disable_contract_type_label"), "method") != "on")) {
            // line 18
            echo "            ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_contracts"), "method"), 0)) {
                // line 19
                echo "                <div class=\"rent-sale\">
                    ";
                // line 20
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "property_contracts"), "method"), 0), "name"), "html", null, true);
                echo "
                </div><!-- /.rent-sale -->
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div class=\"price\">
            ";
        // line 26
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_custom_text"), 0)) {
            // line 27
            echo "                ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_custom_text"), 0), "html", null, true);
            echo "
            ";
        } else {
            // line 29
            echo "                ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_price"), 0)), "method"), "html", null, true);
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_price_suffix"), 0)) {
                echo " <span class=\"suffix\">";
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_price_suffix"), 0), "html", null, true);
                echo "</span>";
            }
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </div><!-- /.price -->

        ";
        // line 33
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_reduced"), 0)) {
            // line 34
            echo "            <div class=\"reduced\">
                ";
            // line 35
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Reduced", 1 => "aviators"), "method"), "html", null, true);
            echo "
            </div><!-- /.reduced -->
        ";
        }
        // line 38
        echo "    </div><!-- /.image -->

    <div class=\"info\">
        <div class=\"title clearfix\">
            <h2><a href=\"";
        // line 42
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
        echo "\">
                ";
        // line 43
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0)) {
            // line 44
            echo "                    ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0), "html", null, true);
            echo "
                ";
        } else {
            // line 46
            echo "                    ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
            echo "
                ";
        }
        // line 48
        echo "            </a></h2>
        </div><!-- /.title -->

        <div class=\"location\">";
        // line 51
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "location"), 0), "name"), "html", null, true);
        echo "</div><!-- /.location -->
    </div><!-- /.info -->

</div><!-- /.property -->

<div class=\"property-info clearfix\">
    ";
        // line 57
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0)) {
            // line 58
            echo "        <div class=\"area\">
            <i class=\"icon icon-normal-cursor-scale-up\"></i>
            ";
            // line 60
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0), "html", null, true);
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "
        </div><!-- /.area -->
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_hide_beds"), 0) != 1)) {
            // line 65
            echo "        ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0)) {
                // line 66
                echo "            <div class=\"bedrooms\">
                <i class=\"icon icon-normal-bed\"></i>
                ";
                // line 68
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0), "html", null, true);
                echo "
            </div><!-- /.bedrooms -->
        ";
            }
            // line 71
            echo "    ";
        }
        // line 72
        echo "
    ";
        // line 73
        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_hide_baths"), 0))) {
            // line 74
            echo "        ";
            if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
            if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0)) {
                // line 75
                echo "            <div class=\"bathrooms\">
                <i class=\"icon icon-normal-shower\"></i>
                ";
                // line 77
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0), "html", null, true);
                echo "
            </div><!-- /.bathrooms -->
        ";
            }
            // line 80
            echo "    ";
        }
        // line 81
        echo "</div><!-- /.property-info -->

";
    }

    public function getTemplateName()
    {
        return "properties/property-box-small.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 81,  247 => 80,  240 => 77,  236 => 75,  232 => 74,  229 => 73,  226 => 72,  223 => 71,  216 => 68,  212 => 66,  208 => 65,  205 => 64,  202 => 63,  193 => 60,  189 => 58,  186 => 57,  176 => 51,  171 => 48,  164 => 46,  157 => 44,  154 => 43,  148 => 42,  142 => 38,  135 => 35,  132 => 34,  129 => 33,  125 => 31,  122 => 30,  110 => 29,  103 => 27,  100 => 26,  96 => 24,  93 => 23,  82 => 19,  77 => 18,  74 => 17,  58 => 11,  42 => 8,  34 => 6,  30 => 5,  24 => 4,  95 => 21,  90 => 18,  85 => 20,  70 => 13,  68 => 13,  65 => 11,  47 => 9,  43 => 8,  40 => 7,  36 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
