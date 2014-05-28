<?php

/* layout-fullwidth.twig */
class __TwigTemplate_e10a326537ee0092822d1ff716a7a9fa extends Twig_Template
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

            <div id=\"main\" class=\"span12\">
                ";
        // line 12
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-top"), "method"))) {
        }
        // line 13
        echo "
                ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "
                ";
        // line 16
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 17
        echo "            </div><!-- /#main -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 21
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 22
        echo "</div><!-- /#content -->

";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_footer", array(), "method"), "html", null, true);
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-fullwidth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  68 => 24,  64 => 22,  61 => 21,  55 => 17,  52 => 16,  49 => 15,  47 => 14,  44 => 13,  41 => 12,  36 => 9,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  46 => 14,  38 => 9,  31 => 4,  28 => 3,);
    }
}
