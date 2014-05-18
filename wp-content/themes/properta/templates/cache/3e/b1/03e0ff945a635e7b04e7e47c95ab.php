<?php

/* helpers/footer.twig */
class __TwigTemplate_3eb103e0ff945a635e7b04e7e47c95ab extends Twig_Template
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
        if (((((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-bottom-left"), "method") || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-bottom-right"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-1"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-2"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-3"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-4"), "method"))) {
            // line 3
            echo "                <div id=\"footer-wrapper\">                
                    ";
            // line 4
            if (((($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-1"), "method") || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-2"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-3"), "method")) || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-4"), "method"))) {
                echo "                    
                        <div id=\"footer-top\">
                            <div id=\"footer-top-inner\" class=\"container\">
                                <div class=\"row\">
                                    <div class=\"span3\">
                                        ";
                // line 9
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-1"), "method"))) {
                }
                // line 10
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 13
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-2"), "method"))) {
                }
                // line 14
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 17
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-3"), "method"))) {
                }
                // line 18
                echo "                                    </div>

                                    <div class=\"span3\">
                                        ";
                // line 21
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-4"), "method"))) {
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
            if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-bottom-left"), "method") || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "footer-bottom-right"), "method"))) {
                // line 29
                echo "                        <div class=\"footer-bottom\">
                            <div id=\"footer\" class=\"footer container\">
                                <div id=\"footer-inner\">
                                    <div class=\"row\">
                                        <div class=\"span6\">
                                            ";
                // line 34
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-bottom-left"), "method"))) {
                }
                // line 35
                echo "                                        </div><!-- /.copyright -->

                                         <div class=\"span6\">
                                            ";
                // line 38
                if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "footer-bottom-right"), "method"))) {
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method")) {
            // line 49
            echo "        <script type=\"text/javascript\">
            var _gaq=[[\"_setAccount\", \"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "google_analytics", 1 => "tracking", 2 => "code"), "method"), "html", null, true);
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
        return array (  124 => 57,  121 => 56,  112 => 50,  109 => 49,  107 => 48,  104 => 47,  100 => 45,  92 => 39,  89 => 38,  84 => 35,  81 => 34,  74 => 29,  72 => 28,  69 => 27,  62 => 22,  59 => 21,  54 => 18,  51 => 17,  46 => 14,  43 => 13,  38 => 10,  35 => 9,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
