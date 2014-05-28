<?php

/* single.twig */
class __TwigTemplate_08cd6a9d44984cdeb3293bff35f637c7 extends Twig_Template
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
            echo "        ";
            $this->env->loadTemplate("helpers/content-loop.twig")->display($context);
            // line 6
            echo "
        ";
            // line 7
            if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_open", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method")), "method")) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "comments_template", array(), "method"), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
