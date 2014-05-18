<?php

/* helpers/content-loop.twig */
class __TwigTemplate_6c855ded80ccf2981e7f49c7caff63bf extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "have_posts", array(), "method")) {
            // line 2
            echo "    ";
            if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_posts_);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 3
                echo "        ";
                if (isset($context["wp_query"])) { $_wp_query_ = $context["wp_query"]; } else { $_wp_query_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_query_, "the_post", array(), "method"), "html", null, true);
                echo "
        ";
                // line 4
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content", 1 => $this->getAttribute($_wp_, "get_post_format", array(), "method")), "method"), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } else {
            // line 7
            echo "    ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_part", array(0 => "content", 1 => "none"), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "helpers/content-loop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  49 => 9,  39 => 6,  33 => 5,  25 => 3,  22 => 2,  19 => 1,  102 => 19,  97 => 30,  93 => 28,  89 => 27,  82 => 22,  78 => 21,  75 => 20,  73 => 19,  70 => 18,  66 => 17,  57 => 16,  54 => 15,  47 => 12,  44 => 7,  41 => 10,  38 => 9,  36 => 8,  27 => 4,  20 => 1,  31 => 5,  28 => 3,);
    }
}
