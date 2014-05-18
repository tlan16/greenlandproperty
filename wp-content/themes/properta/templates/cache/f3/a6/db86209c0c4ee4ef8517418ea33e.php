<?php

/* helpers/footer.twig */
class __TwigTemplate_f3a6db86209c0c4ee4ef8517418ea33e extends Twig_Template
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
        echo "
            ";
        // line 2
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (((((($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-bottom-left"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-bottom-right"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-1"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-2"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-3"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-4"), "method"))) {
            // line 3
            echo "                <div id=\"footer-wrapper\">                
                    ";
            // line 4
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (((($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-1"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-2"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-3"), "method")) || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-4"), "method"))) {
                echo "                    
                        <div id=\"footer-top\">
                            <div id=\"footer-top-inner\" class=\"container\">
                                <div class=\"row\">
                                    <div class=\"span3\">
                                        ";
                // line 9
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-1"), "method"))) {
                }
                // line 10
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-2"), "method"))) {
                }
                // line 14
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 17
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-3"), "method"))) {
                }
                // line 18
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 21
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-4"), "method"))) {
                }
                // line 22
                echo "                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /#footer-top-inner -->
                        </div><!-- /#footer-top -->            
                    ";
            }
            // line 27
            echo "                    
                    ";
            // line 28
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-bottom-left"), "method") || $this->getAttribute($_wp_, "is_active_sidebar", array(0 => "footer-bottom-right"), "method"))) {
                // line 29
                echo "                        <div class=\"footer-bottom\">
                            <div id=\"footer\" class=\"footer container\">
                                <div id=\"footer-inner\">
                                    <div class=\"row\">
                                        <div class=\"span6\">
                                            ";
                // line 34
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-bottom-left"), "method"))) {
                }
                // line 35
                echo "                                        </div><!-- /.copyright -->

                                         <div class=\"span6\">
                                            ";
                // line 38
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "footer-bottom-right"), "method"))) {
                }
                // line 39
                echo "                                        </div><!-- /.span6 -->
                                    </div><!-- /.row -->
                                </div><!-- /#footer-inner -->
                            </div><!-- /#footer -->
                        </div>
                    ";
            }
            // line 45
            echo "                </div><!-- /#footer-wrapper -->
            ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method")) {
            // line 49
            echo "        <script type=\"text/javascript\">
            var _gaq=[[\"_setAccount\", \"";
            // line 50
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method"), "html", null, true);
            echo "\"],[\"_trackPageview\"]];
            (function(d,t){ var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
                g.src=\"//www.google-analytics.com/ga.js\";
                s.parentNode.insertBefore(g,s) }(document,\"script\"));
        </script>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_footer(), "html", null, true);
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "helpers/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 57,  132 => 56,  122 => 50,  119 => 49,  116 => 48,  113 => 47,  109 => 45,  101 => 39,  97 => 38,  92 => 35,  88 => 34,  81 => 29,  78 => 28,  75 => 27,  68 => 22,  64 => 21,  59 => 18,  55 => 17,  50 => 14,  46 => 13,  41 => 10,  37 => 9,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
