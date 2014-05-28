<?php

/* content.twig */
class __TwigTemplate_f0e43534ca4bb937aa8acd8cf10a9def extends Twig_Template
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
        echo "<article id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_ID", array(), "method"), "html", null, true);
        echo "\" class=\"clearfix ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\">
    ";
        // line 3
        echo "    <header class=\"entry-header\">

        ";
        // line 5
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_single", array(), "method")) {
            // line 6
            echo "            <h1 class=\"page-header entry-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_title", array(), "method"), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 8
            echo "            <h1 class=\"page-header entry-title\">
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_permalink", array(), "method"), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_title", array(), "method"), "html", null, true);
            echo "</a>
            </h1>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_entry_meta", array(), "method") || $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_edit_post_link", array(), "method"))) {
            // line 14
            echo "            <div class=\"entry-meta\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_entry_meta", array(), "method"), "html", null, true);
            echo "
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_edit_post_link", array(), "method"), "html", null, true);
            echo "
            </div><!-- .entry-meta -->
        ";
        }
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "has_post_thumbnail", array(), "method") && (!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "post_password_required", array(), "method")))) {
            // line 22
            echo "            <div class=\"entry-thumbnail\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_post_thumbnail", array(), "method"), "html", null, true);
            echo "
            </div><!-- /.entry-thumbnail -->
        ";
        }
        // line 26
        echo "    </header><!-- .entry-header -->

    ";
        // line 29
        echo "    ";
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_search", array(), "method")) {
            // line 30
            echo "        <div class=\"entry-summary\">
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_excerpt", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-summary -->
    ";
        } else {
            // line 34
            echo "        <div class=\"entry-content\">
            ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_the_content", array(), "method"), "html", null, true);
            echo "
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_link_pages", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-content -->
    ";
        }
        // line 39
        echo "</article><!-- /#post -->
";
    }

    public function getTemplateName()
    {
        return "content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 36,  109 => 35,  106 => 34,  100 => 31,  97 => 30,  94 => 29,  90 => 26,  84 => 23,  81 => 22,  78 => 21,  75 => 19,  69 => 16,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  49 => 9,  46 => 8,  40 => 6,  38 => 5,  34 => 3,  19 => 1,);
    }
}
