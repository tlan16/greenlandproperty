<?php

/* layout.twig */
class __TwigTemplate_b76a1aed05d541579c3d1078676599ab extends Twig_Template
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            // line 11
            echo "                <div class=\"sidebar span3\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
            echo "
                </div><!-- /#sidebar -->
            ";
        }
        // line 15
        echo "
            <div id=\"main\" class=\"";
        // line 16
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 17
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-top"), "method"))) {
        }
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
                ";
        // line 21
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 22
        echo "            </div><!-- /#main -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 27
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 28
        echo "</div><!-- /#content -->

";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_footer", array(), "method"), "html", null, true);
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  85 => 28,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  61 => 17,  53 => 16,  44 => 12,  41 => 11,  39 => 10,  36 => 9,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  144 => 51,  139 => 49,  132 => 44,  130 => 43,  125 => 40,  123 => 39,  116 => 34,  114 => 33,  107 => 28,  89 => 30,  86 => 23,  82 => 27,  78 => 19,  75 => 22,  58 => 17,  50 => 15,  40 => 5,  31 => 4,  28 => 3,);
    }
}
