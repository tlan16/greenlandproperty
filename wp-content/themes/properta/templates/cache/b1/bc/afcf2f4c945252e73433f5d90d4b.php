<?php

/* properties/widget.twig */
class __TwigTemplate_b1bcafcf2f4c945252e73433f5d90d4b extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 6
        echo "
<div class=\"content\">
    ";
        // line 8
        if ((isset($context["properties"]) ? $context["properties"] : null)) {
            // line 9
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 10
                echo "            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
                echo "\">
                    ";
                // line 13
                if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method")) {
                    // line 14
                    echo "                        ";
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method");
                    echo "
                    ";
                } else {
                    // line 16
                    echo "                        <a href=\"\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
                    echo "/assets/img/property-tmp-small.png\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
                    echo "\"></a>
                    ";
                }
                // line 18
                echo "                    </a>
                </div><!-- /.image -->

                <div class=\"wrapper\">
                    <div class=\"title\">
                        <h3><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "ID")), "method"), "html", null, true);
                echo "\">
                            ";
                // line 24
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0)) {
                    // line 25
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_title"), 0), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 27
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
                    echo "
                            ";
                }
                // line 29
                echo "                        </a></h3>
                    </div><!-- /.title -->

                    <div class=\"location\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "location"), 0), "name"), "html", null, true);
                echo "</div><!-- /.location -->

                    <div class=\"price\">
                        ";
                // line 35
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0)) {
                    // line 36
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_custom_text"), 0), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 38
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_price_format", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price"), 0)), "method"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0)) {
                        echo " <span class=\"suffix\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_price_suffix"), 0), "html", null, true);
                        echo "</span>";
                    }
                    // line 39
                    echo "                        ";
                }
                // line 40
                echo "                    </div><!-- /.price -->
                </div><!-- /.wrapper -->
            </div><!-- /.property -->

            <div class=\"property-info clearfix\">
                ";
                // line 45
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0)) {
                    // line 46
                    echo "                    <div class=\"area\">
                        <i class=\"icon icon-normal-cursor-scale-up\"></i>
                        ";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_area"), 0), "html", null, true);
                    echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
                    echo "
                    </div><!-- /.area -->
                ";
                }
                // line 51
                echo "
                ";
                // line 52
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0)) {
                    // line 53
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_beds"), 0) != 1)) {
                        // line 54
                        echo "                        <div class=\"bedrooms\">
                            <i class=\"icon icon-normal-bed\"></i>
                            ";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bedrooms"), 0), "html", null, true);
                        echo "
                        </div><!-- /.bedrooms -->
                    ";
                    }
                    // line 59
                    echo "                ";
                }
                // line 60
                echo "
                ";
                // line 61
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0)) {
                    // line 62
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_hide_baths"), 0) != 1)) {
                        // line 63
                        echo "                        <div class=\"bathrooms\">
                            <i class=\"icon icon-normal-shower\"></i>
                            ";
                        // line 65
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["property"]) ? $context["property"] : null), "meta"), "_property_bathrooms"), 0), "html", null, true);
                        echo "
                        </div><!-- /.bathrooms -->
                    ";
                    }
                    // line 68
                    echo "                ";
                }
                // line 69
                echo "            </div><!-- /.info -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 71
            echo "    ";
        } else {
            // line 72
            echo "        <p>
            ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "No featured properties found.", 1 => "aviators"), "method"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 76
        echo "</div><!-- /.content -->

";
        // line 78
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "properties/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 78,  205 => 76,  199 => 73,  196 => 72,  193 => 71,  186 => 69,  183 => 68,  177 => 65,  173 => 63,  170 => 62,  168 => 61,  165 => 60,  162 => 59,  156 => 56,  152 => 54,  149 => 53,  147 => 52,  144 => 51,  137 => 48,  133 => 46,  131 => 45,  124 => 40,  121 => 39,  113 => 38,  107 => 36,  105 => 35,  99 => 32,  94 => 29,  88 => 27,  82 => 25,  80 => 24,  76 => 23,  69 => 18,  61 => 16,  55 => 14,  53 => 13,  49 => 12,  45 => 10,  40 => 9,  38 => 8,  34 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
