<?php

/* single-property.twig */
class __TwigTemplate_866f5bb85cf22811a1d1c2a0cb677c6b extends Twig_Template
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_title", 2 => true), "method")) {
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_title", 2 => true), "method"), "html", null, true);
            echo ", ";
        }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "post_title"), "html", null, true);
        echo ",</h1>
    <span>";
        // line 5
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "wp_get_post_terms", array(0 => $this->getAttribute($_post_, "ID"), 1 => "locations"), "method"), 0), "name"), "html", null, true);
        echo "</span>

    <div class=\"property-detail\">

    <div class=\"row\">
        <div class=\"span6 gallery\">
            <div class=\"preview\">
                <img src=\"";
        // line 12
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method"), 0), "imgurl"), "html", null, true);
        echo "\" alt=\"\">
            </div>

            <div class=\"content\">
                <ul>
                    ";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_post_, "ID"), 1 => "_property_slides", 2 => true), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 18
            echo "                        ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 19
                echo "                            <li class=\"active\">
                        ";
            } else {
                // line 21
                echo "                            <li>
                        ";
            }
            // line 23
            echo "                            <div class=\"thumb\">
                                <a href=\"#\"><img src=\"";
            // line 24
            if (isset($context["slide"])) { $_slide_ = $context["slide"]; } else { $_slide_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_slide_, "imgurl"), "html", null, true);
            echo "\" alt=\"\"></a>
                            </div>
                        </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "                </ul>
            </div><!-- /.content -->
        </div>

        <div class=\"overview span3\">
            ";
        // line 33
        $this->env->loadTemplate("properties/overview.twig")->display($context);
        // line 34
        echo "        </div>
    </div>

        <div class=\"row\">
            <div class=\"span6\">
                ";
        // line 39
        $this->env->loadTemplate("properties/amenities.twig")->display($context);
        // line 40
        echo "            </div>

            <div class=\"span3\">
                ";
        // line 43
        $this->env->loadTemplate("properties/property-map.twig")->display($context);
        // line 44
        echo "            </div>

        </div>
        <div>
        
        <h2>";
        // line 49
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "About Property", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>

        ";
        // line 51
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_wp_, "do_shortcode", array(0 => $this->getAttribute($_wp_, "apply_filters", array(0 => "the_content", 1 => $this->getAttribute($_post_, "post_content")), "method")), "method");
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "single-property.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 51,  152 => 49,  145 => 44,  143 => 43,  138 => 40,  136 => 39,  129 => 34,  127 => 33,  120 => 28,  101 => 24,  98 => 23,  94 => 21,  90 => 19,  86 => 18,  67 => 17,  57 => 12,  45 => 5,  31 => 4,  28 => 3,);
    }
}
