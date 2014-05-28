<?php

/* layout-page-properties-grid.twig */
class __TwigTemplate_729f482f4c0607999ba6ade41c81fc68 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_header", array(), "method"), "html", null, true);
        echo "

<div id=\"content\" class=\"clearfix\">
    ";
        // line 4
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "top"), "method")) {
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
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on")) {
            // line 11
            echo "                ";
            if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
                // line 12
                echo "                    <div class=\"sidebar span3\">
                        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
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
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method") && ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "hide_sidebar"), "method") != "on"))) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 19
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-top"), "method"))) {
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 24
        echo "            </div><!-- /#main -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 29
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 30
        echo "</div><!-- /#content -->

";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_footer", array(), "method"), "html", null, true);
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
        return array (  101 => 21,  95 => 32,  91 => 30,  88 => 29,  81 => 24,  78 => 23,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  59 => 18,  56 => 17,  53 => 16,  47 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  29 => 5,  26 => 4,  20 => 1,  37 => 6,  34 => 8,  31 => 4,  28 => 3,);
    }
}
