<?php

/* archive-agent.twig */
class __TwigTemplate_712c55624954df35ee1c38448705ead6 extends Twig_Template
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
        echo "    <h1 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Agents", 1 => "aviators"), "method"), "html", null, true);
        echo "</h1>

    <div class=\"our-agents-large\">
        <div class=\"row-fluid\">
            ";
        // line 8
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "have_posts", array(), "method")) {
            // line 9
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 10
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "the_post", array(), "method"), "html", null, true);
                echo "
                    ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_part", array(0 => "content-agent", 1 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_format", array(), "method")), "method"), "html", null, true);
                echo "
                    
                    ";
                // line 13
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % 4) == 0)) {
                    // line 14
                    echo "                        </div><div class=\"row-fluid\">
                    ";
                }
                // line 15
                echo "                    
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "            ";
        } else {
            // line 18
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_part", array(0 => "content", 1 => "none"), "method"), "html", null, true);
            echo "
            ";
        }
        // line 20
        echo "        </div>
    </div><!-- /.our-agents-large -->

    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_paging_nav", array(), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "archive-agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 23,  99 => 20,  93 => 18,  90 => 17,  75 => 15,  71 => 14,  69 => 13,  64 => 11,  59 => 10,  41 => 9,  39 => 8,  31 => 4,  28 => 3,);
    }
}
