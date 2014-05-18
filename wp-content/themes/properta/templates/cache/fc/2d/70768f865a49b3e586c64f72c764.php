<?php

/* single-property.twig */
class __TwigTemplate_fc2d70768f865a49b3e586c64f72c764 extends Twig_Template
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_title", 2 => true), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_title", 2 => true), "method"), "html", null, true);
            echo ", ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_title"), "html", null, true);
        echo ",</h1>
    <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_post_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "locations"), "method"), 0), "name"), "html", null, true);
        echo "</span>

    <div class=\"property-detail\">

    <div class=\"row\">
        <div class=\"span6 gallery\">
            <div class=\"preview\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_slides", 2 => true), "method"), 0), "imgurl"), "html", null, true);
        echo "\" alt=\"\">
            </div>

            <div class=\"content\">
                <ul>
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_slides", 2 => true), "method"));
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
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["slide"]) ? $context["slide"] : null), "imgurl"), "html", null, true);
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

        <div class=\"overview\">
            ";
        // line 33
        $this->env->loadTemplate("properties/overview.twig")->display($context);
        // line 34
        echo "        </div>
    </div>

        <h2>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "About Property", 1 => "aviators"), "method"), "html", null, true);
        echo "</h2>

        ";
        // line 39
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "do_shortcode", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "apply_filters", array(0 => "the_content", 1 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_content")), "method")), "method");
        echo "

        <div class=\"row\">
            <div class=\"span6\">
                ";
        // line 43
        $this->env->loadTemplate("properties/amenities.twig")->display($context);
        // line 44
        echo "            </div>

            <div class=\"span3\">
                ";
        // line 47
        $this->env->loadTemplate("properties/property-map.twig")->display($context);
        // line 48
        echo "            </div>

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
        return array (  142 => 48,  140 => 47,  135 => 44,  133 => 43,  126 => 39,  121 => 37,  116 => 34,  114 => 33,  107 => 28,  89 => 24,  86 => 23,  82 => 21,  78 => 19,  75 => 18,  58 => 17,  50 => 12,  40 => 5,  31 => 4,  28 => 3,);
    }
}
