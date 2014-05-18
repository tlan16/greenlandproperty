<?php

/* layout-page-properties-grid.twig */
class __TwigTemplate_56a5b5a81c3a0081d0072c1c862397d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_header", array(), "method"), "html", null, true);
        echo "

<div id=\"content\" class=\"clearfix\">
    ";
        // line 4
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "top"), "method")) {
        }
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $this->env->loadTemplate("helpers/messages.twig")->display($context);
        // line 9
        echo "
            ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on")) {
            // line 11
            echo "                ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
                // line 12
                echo "                    <div class=\"sidebar span3\">
                        ";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
                echo "
                    </div><!-- /#sidebar -->
                ";
            }
            // line 16
            echo "            ";
        }
        // line 17
        echo "
            <div id=\"main\" class=\"";
        // line 18
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method") && ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on"))) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "content-top"), "method"))) {
        }
        // line 20
        echo "
                ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "
                ";
        // line 23
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 24
        echo "            </div><!-- /#main -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 29
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 30
        echo "</div><!-- /#content -->

";
        // line 32
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_footer", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-page-properties-grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  104 => 32,  100 => 30,  96 => 29,  89 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  73 => 19,  64 => 18,  61 => 17,  58 => 16,  51 => 13,  48 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  27 => 4,  20 => 1,  37 => 6,  34 => 5,  31 => 5,  28 => 3,);
    }
}
