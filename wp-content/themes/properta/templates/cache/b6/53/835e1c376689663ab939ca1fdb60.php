<?php

/* properties/property-row.twig */
class __TwigTemplate_b653835e1c376689663ab939ca1fdb60 extends Twig_Template
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
        echo "<div class=\"property span9\">
    <div class=\"row\">
        <div class=\"span3\">
            <div class=\"image\">
                <div class=\"content\">
                    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">
                    ";
        // line 7
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
            // line 8
            echo "                        ";
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method");
            echo "
                    ";
        } else {
            // line 10
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/property-tmp-small.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "\">
                    ";
        }
        // line 12
        echo "                    </a>
                </div><!-- /.content -->
            </div><!-- /.image -->
        </div>

        <div class=\"body span6\">
            <div class=\"title-price row\">
                <div class=\"title span4\">
                    <h2><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
        echo "</a></h2>
                </div><!-- /.title -->

                <div class=\"price\">
                    ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0)) {
            // line 25
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0), "html", null, true);
            echo "
                    ";
        } else {
            // line 27
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price"), 0)), "method"), "html", null, true);
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0)) {
                echo " <span class=\"suffix\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0), "html", null, true);
                echo "</span>";
            }
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                </div><!-- /.price -->
            </div><!-- /.title -->

            <div class=\"location\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location"), 0), "name"), "html", null, true);
        echo "</div><!-- /.location -->

            <div class=\"body\">                
                <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_core_get_post_teaser", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "</p>
            </div><!-- /.body -->

            <div class=\"property-info clearfix\">
                ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0)) {
            // line 40
            echo "                    <div class=\"area\">
                        <i class=\"icon icon-normal-cursor-scale-up\"></i>
                        ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0), "html", null, true);
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
            echo "
                    </div><!-- /.area -->
                ";
        }
        // line 45
        echo "
                ";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_beds"), 0) != 1)) {
            // line 47
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0)) {
                // line 48
                echo "                        <div class=\"bedrooms\">
                            <i class=\"icon icon-normal-bed\"></i>
                            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0), "html", null, true);
                echo "
                        </div><!-- /.bedrooms -->
                    ";
            }
            // line 53
            echo "                ";
        }
        // line 54
        echo "
                ";
        // line 55
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_baths"), 0) != 1)) {
            // line 56
            echo "                    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0)) {
                // line 57
                echo "                        <div class=\"bathrooms\">
                            <i class=\"icon icon-normal-shower\"></i>
                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0), "html", null, true);
                echo "
                        </div><!-- /.bathrooms -->
                    ";
            }
            // line 62
            echo "                ";
        }
        // line 63
        echo "
                <div class=\"more-info\">
                    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "More Info", 1 => "aviators"), "method"), "html", null, true);
        echo "<i class=\"icon icon-normal-right-arrow-circle\"></i></a>
                </div>
            </div><!-- /.info -->
        </div><!-- /.body -->
    </div><!-- /.row -->
</div><!-- /.property -->
";
    }

    public function getTemplateName()
    {
        return "properties/property-row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 65,  157 => 63,  154 => 62,  148 => 59,  144 => 57,  141 => 56,  139 => 55,  136 => 54,  133 => 53,  127 => 50,  123 => 48,  120 => 47,  118 => 46,  115 => 45,  108 => 42,  104 => 40,  102 => 39,  95 => 35,  89 => 32,  84 => 29,  81 => 28,  73 => 27,  67 => 25,  65 => 24,  56 => 20,  46 => 12,  38 => 10,  32 => 8,  30 => 7,  26 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
