<?php

/* properties/widget.twig */
class __TwigTemplate_f7293398ab61f98cebffee2694260973 extends Twig_Template
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
        if (isset($context["before_widget"])) { $_before_widget_ = $context["before_widget"]; } else { $_before_widget_ = null; }
        echo $_before_widget_;
        echo "

";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 4
            echo "    ";
            if (isset($context["before_title"])) { $_before_title_ = $context["before_title"]; } else { $_before_title_ = null; }
            echo $_before_title_;
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            if (isset($context["after_title"])) { $_after_title_ = $context["after_title"]; } else { $_after_title_ = null; }
            echo $_after_title_;
            echo "
";
        }
        // line 6
        echo "
<div class=\"content\">
    ";
        // line 8
        if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
        if ($_properties_) {
            // line 9
            echo "        ";
            if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_properties_);
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 10
                echo "            <div class=\"property clearfix\">
                <div class=\"image\">
                    <a href=\"";
                // line 12
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
                echo "\">
                    ";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method")) {
                    // line 14
                    echo "                        ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_property_, "ID")), "method");
                    echo "
                    ";
                } else {
                    // line 16
                    echo "                        <a href=\"\"><img src=\"";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
                    echo "/assets/img/property-tmp-small.png\" alt=\"";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
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
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_property_, "ID")), "method"), "html", null, true);
                echo "\">
                            ";
                // line 24
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0)) {
                    // line 25
                    echo "                                ";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_title"), 0), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 27
                    echo "                                ";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_property_, "post_title"), "html", null, true);
                    echo "
                            ";
                }
                // line 29
                echo "                        </a></h3>
                    </div><!-- /.title -->

                    <div class=\"location\">";
                // line 32
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "location"), 0), "name"), "html", null, true);
                echo "</div><!-- /.location -->

                    <div class=\"price\">
                        ";
                // line 35
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_custom_text"), 0)) {
                    // line 36
                    echo "                            ";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_custom_text"), 0), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 38
                    echo "                            ";
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
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0)) {
                    // line 46
                    echo "                    <div class=\"area\">
                        <i class=\"icon icon-normal-cursor-scale-up\"></i>
                        ";
                    // line 48
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_area"), 0), "html", null, true);
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "units", 2 => "area"), "method");
                    echo "
                    </div><!-- /.area -->
                ";
                }
                // line 51
                echo "
                ";
                // line 52
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0)) {
                    // line 53
                    echo "                    ";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_hide_beds"), 0) != 1)) {
                        // line 54
                        echo "                        <div class=\"bedrooms\">
                            <i class=\"icon icon-normal-bed\"></i>
                            ";
                        // line 56
                        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bedrooms"), 0), "html", null, true);
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
                if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                if ($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0)) {
                    // line 62
                    echo "                    ";
                    if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_hide_baths"), 0) != 1)) {
                        // line 63
                        echo "                        <div class=\"bathrooms\">
                            <i class=\"icon icon-normal-shower\"></i>
                            ";
                        // line 65
                        if (isset($context["property"])) { $_property_ = $context["property"]; } else { $_property_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_property_, "meta"), "_property_bathrooms"), 0), "html", null, true);
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
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "No featured properties found.", 1 => "aviators"), "method"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 76
        echo "</div><!-- /.content -->

";
        // line 78
        if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
        echo $_after_widget_;
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
        return array (  246 => 78,  242 => 76,  235 => 73,  232 => 72,  229 => 71,  222 => 69,  219 => 68,  212 => 65,  208 => 63,  204 => 62,  201 => 61,  198 => 60,  195 => 59,  188 => 56,  184 => 54,  180 => 53,  177 => 52,  174 => 51,  165 => 48,  161 => 46,  158 => 45,  151 => 40,  148 => 39,  136 => 38,  129 => 36,  126 => 35,  119 => 32,  114 => 29,  107 => 27,  100 => 25,  97 => 24,  91 => 23,  84 => 18,  74 => 16,  66 => 14,  62 => 13,  56 => 12,  52 => 10,  46 => 9,  43 => 8,  39 => 6,  28 => 4,  25 => 3,  19 => 1,);
    }
}
