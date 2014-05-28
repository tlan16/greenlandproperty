<?php

/* search.twig */
class __TwigTemplate_4570428338ca97f2191ec075431b4154 extends Twig_Template
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
        echo "\t<h1 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Search Results for", 1 => "aviators"), "method"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_search_query", array(), "method"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "have_posts", array(), "method")) {
            // line 7
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "the_post", array(), "method"), "html", null, true);
                echo "
            ";
                // line 9
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_type") == "property")) {
                    // line 10
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_part", array(0 => "content-property", 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_format", array(), "method")), "method"), "html", null, true);
                    echo "
            ";
                } else {
                    // line 12
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_part", array(0 => "content", 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_format", array(), "method")), "method"), "html", null, true);
                    echo "
            ";
                }
                // line 14
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_part", array(0 => "content", 1 => "none"), "method"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  71 => 15,  65 => 14,  59 => 12,  53 => 10,  51 => 9,  46 => 8,  41 => 7,  39 => 6,  31 => 4,  28 => 3,);
    }
}
