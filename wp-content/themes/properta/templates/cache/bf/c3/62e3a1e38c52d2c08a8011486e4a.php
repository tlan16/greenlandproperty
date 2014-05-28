<?php

/* archive.twig */
class __TwigTemplate_bfc362e3a1e38c52d2c08a8011486e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "have_posts", array(), "method")) {
            // line 5
            echo "        <header class=\"archive-header\">
            <h1 class=\"page-header archive-title\">
                ";
            // line 7
            if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_day", array(), "method")) {
                // line 8
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "printf", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Daily Archives: %s", 1 => "aviators"), "method"), 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_date", array(), "method")), "method"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_month", array(), "method")) {
                // line 10
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "printf", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Monthly Archives: %s", 1 => "aviators"), "method"), 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_date", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "F Y", 1 => "monthly archives date format", 2 => "aviators"), "method")), "method")), "method"), "html", null, true);
                echo "
                ";
            } elseif ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_year", array(), "method")) {
                // line 12
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "printf", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Yearly Archives: %s", 1 => "twentythirteen"), "method"), 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_date", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Y", 1 => "yearly archives date format", 2 => "aviators"), "method")), "method")), "method"), "html", null, true);
                echo "
                ";
            } else {
                // line 14
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Archives", 1 => "aviators"), "method"), "html", null, true);
                echo "
                ";
            }
            // line 16
            echo "            </h1><!-- /.page-header -->
        </header><!-- .archive-header -->
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $this->env->loadTemplate("helpers/content-loop.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "archive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  69 => 19,  64 => 16,  58 => 14,  52 => 12,  46 => 10,  40 => 8,  38 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
