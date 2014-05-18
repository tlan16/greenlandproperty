<?php

/* layout.twig */
class __TwigTemplate_249550386c160df93540459976efdea1 extends Twig_Template
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
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            // line 11
            echo "                <div class=\"sidebar span3\">
                    ";
            // line 12
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_sidebar", array(0 => "sidebar-primary"), "method"), "html", null, true);
            echo "
                </div><!-- /#sidebar -->
            ";
        }
        // line 15
        echo "
            <div id=\"main\" class=\"";
        // line 16
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_active_sidebar", array(0 => "sidebar-primary"), "method")) {
            echo "span9";
        } else {
            echo "span12";
        }
        echo "\">
                ";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "content-top"), "method"))) {
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "content-bottom"), "method"))) {
        }
        // line 22
        echo "            </div><!-- /#main -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    ";
        // line 27
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "dynamic_sidebar", array(0 => "bottom"), "method")) {
        }
        // line 28
        echo "</div><!-- /#content -->

";
        // line 30
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_footer", array(), "method"), "html", null, true);
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
        return array (  102 => 19,  97 => 30,  93 => 28,  89 => 27,  82 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  57 => 16,  54 => 15,  47 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  27 => 4,  20 => 1,  31 => 5,  28 => 3,);
    }
}
