<?php

/* properties/property-box-small.twig */
class __TwigTemplate_9b99d90b87263eef4661dbb5a6e961d2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">
                ";
        // line 5
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_core_get_post_teaser", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
            // line 6
            echo "                    <div class=\"description\"><p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_core_get_post_teaser", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
            echo "</p></div>
                ";
        }
        // line 8
        echo "            ";
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
            // line 9
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aq_resize", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_attachment_url", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_thumbnail_id", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), 1 => "full"), "method"), 1 => 270, 2 => 200, 3 => "true"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "\">
            ";
        } else {
            // line 11
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "\">
            ";
        }
        // line 13
        echo "            </a>
        </div><!-- /.content -->


        ";
        // line 17
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "common", 2 => "disable_contract_type_label"), "method") != "on")) {
            // line 18
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_contracts"), "method"), 0)) {
                // line 19
                echo "                <div class=\"rent-sale\">
                    ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_contracts"), "method"), 0), "name"), "html", null, true);
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0)) {
            // line 27
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0), "html", null, true);
            echo "
            ";
        } else {
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price"), 0)), "method"), "html", null, true);
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0)) {
                echo " <span class=\"suffix\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0), "html", null, true);
                echo "</span>";
            }
            // line 30
            echo "            ";
        }
        // line 31
        echo "        </div><!-- /.price -->

        ";
        // line 33
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_reduced"), 0)) {
            // line 34
            echo "            <div class=\"reduced\">
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Reduced", 1 => "aviators"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">
                ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0)) {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0), "html", null, true);
            echo "
                ";
        } else {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "
                ";
        }
        // line 48
        echo "            </a></h2>
        </div><!-- /.title -->

        <div class=\"location\">";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location"), 0), "name"), "html", null, true);
        echo "</div><!-- /.location -->
    </div><!-- /.info -->

</div><!-- /.property -->

<div class=\"property-info clearfix\">
    ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0)) {
            // line 58
            echo "        <div class=\"area\">
            <i class=\"icon icon-normal-cursor-scale-up\"></i>
            ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0), "html", null, true);
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "
        </div><!-- /.area -->
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_beds"), 0) != 1)) {
            // line 65
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0)) {
                // line 66
                echo "            <div class=\"bedrooms\">
                <i class=\"icon icon-normal-bed\"></i>
                ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0), "html", null, true);
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
        if ((!$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_baths"), 0))) {
            // line 74
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0)) {
                // line 75
                echo "            <div class=\"bathrooms\">
                <i class=\"icon icon-normal-shower\"></i>
                ";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0), "html", null, true);
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
        return array (  209 => 81,  206 => 80,  200 => 77,  196 => 75,  193 => 74,  191 => 73,  188 => 72,  185 => 71,  179 => 68,  175 => 66,  172 => 65,  170 => 64,  167 => 63,  160 => 60,  156 => 58,  154 => 57,  145 => 51,  140 => 48,  134 => 46,  128 => 44,  126 => 43,  122 => 42,  116 => 38,  110 => 35,  107 => 34,  105 => 33,  101 => 31,  98 => 30,  84 => 27,  82 => 26,  78 => 24,  75 => 23,  69 => 20,  63 => 18,  55 => 13,  47 => 11,  36 => 8,  30 => 6,  28 => 5,  90 => 29,  87 => 20,  81 => 16,  66 => 19,  64 => 13,  61 => 17,  44 => 11,  39 => 9,  31 => 6,  29 => 5,  26 => 4,  24 => 4,  19 => 1,);
    }
}
