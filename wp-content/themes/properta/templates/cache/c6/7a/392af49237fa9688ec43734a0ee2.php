<?php

/* content.twig */
class __TwigTemplate_c67a392af49237fa9688ec43734a0ee2 extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_ID", array(), "method"), "html", null, true);
        echo "\" class=\"clearfix ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_post_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_single", array(), "method")) {
            // line 6
            echo "            <h1 class=\"page-header entry-title\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</h1>
        ";
        } else {
            // line 8
            echo "            <h1 class=\"page-header entry-title\">
                <a href=\"";
            // line 9
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_permalink", array(), "method"), "html", null, true);
            echo "\" rel=\"bookmark\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_title", array(), "method"), "html", null, true);
            echo "</a>
            </h1>
        ";
        }
        // line 12
        echo "
        ";
        // line 13
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_entry_meta", array(), "method") || $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"))) {
            // line 14
            echo "            <div class=\"entry-meta\">
                ";
            // line 15
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_entry_meta", array(), "method"), "html", null, true);
            echo "
                ";
            // line 16
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_edit_post_link", array(), "method"), "html", null, true);
            echo "
            </div><!-- .entry-meta -->
        ";
        }
        // line 19
        echo "
        ";
        // line 21
        echo "        ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "has_post_thumbnail", array(), "method") && (!$this->getAttribute($_wp_, "post_password_required", array(), "method")))) {
            // line 22
            echo "            <div class=\"entry-thumbnail\">
                ";
            // line 23
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_post_thumbnail", array(), "method"), "html", null, true);
            echo "
            </div><!-- /.entry-thumbnail -->
        ";
        }
        // line 26
        echo "    </header><!-- .entry-header -->

    ";
        // line 29
        echo "    ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_search", array(), "method")) {
            // line 30
            echo "        <div class=\"entry-summary\">
            ";
            // line 31
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "the_excerpt", array(), "method"), "html", null, true);
            echo "
        </div><!-- .entry-summary -->
    ";
        } else {
            // line 34
            echo "        <div class=\"entry-content\">
            ";
            // line 35
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_the_content", array(), "method"), "html", null, true);
            echo "
            ";
            // line 36
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_link_pages", array(), "method"), "html", null, true);
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
        return array (  135 => 39,  128 => 36,  123 => 35,  120 => 34,  113 => 31,  110 => 30,  106 => 29,  102 => 26,  95 => 23,  92 => 22,  88 => 21,  85 => 19,  78 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  54 => 9,  51 => 8,  44 => 6,  41 => 5,  37 => 3,  19 => 1,);
    }
}
