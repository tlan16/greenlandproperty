<?php

/* layout-right.twig */
class __TwigTemplate_ec05f84d6fdd13010e48306ac26826c3 extends Twig_Template
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
        echo "            <div id=\"main\" class=\"";
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 10
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-top"), "method"))) {
        }
        // line 11
        echo "
                ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "
                ";
        // line 14
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 15
        echo "            </div><!-- /#main -->

            ";
        // line 17
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            // line 18
            echo "                <div class=\"sidebar span3\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
            echo "
                </div><!-- /#sidebar -->
            ";
        }
        // line 22
        echo "        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 25
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 26
        echo "</div><!-- /#content -->

";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_footer", array(), "method"), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 12,  86 => 28,  82 => 26,  79 => 25,  74 => 22,  68 => 19,  65 => 18,  63 => 17,  59 => 15,  56 => 14,  53 => 13,  51 => 12,  48 => 11,  45 => 10,  36 => 9,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  31 => 4,  28 => 3,);
    }
}
