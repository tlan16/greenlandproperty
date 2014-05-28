<?php

/* archive-property.twig */
class __TwigTemplate_46873ab7bf2785aae7b4be23b234d02c extends Twig_Template
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
        if ((!(isset($context["title"]) ? $context["title"] : null))) {
            // line 5
            echo "        <h1 class=\"page-header\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Properties", 1 => "aviators"), "method"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 7
            echo "        <h1 class=\"page-header\">";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "display_sort_bar"), "method")) {
            // line 11
            echo "        <div class=\"clearfix\">
            ";
            // line 12
            $this->env->loadTemplate("properties/sort.twig")->display($context);
            // line 13
            echo "        </div>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "posts")) > 0)) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp_query"]) ? $context["wp_query"] : null), "the_post", array(), "method"), "html", null, true);
            echo "

        <div class=\"properties-";
            // line 19
            if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                echo "rows";
            } else {
                echo "grid";
            }
            echo "\">
            <div class=\"row\">
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
                // line 22
                echo "                    ";
                if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "properties", 2 => "type"), "method") == "row")) {
                    // line 23
                    echo "                        ";
                    $this->env->loadTemplate("properties/property-row.twig")->display($context);
                    // line 24
                    echo "                    ";
                } else {
                    // line 25
                    echo "                        <div class=\"span3\">
                            ";
                    // line 26
                    $this->env->loadTemplate("properties/property-box-small.twig")->display($context);
                    // line 27
                    echo "                        </div><!-- /.span3 -->
                    ";
                }
                // line 29
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "            </div><!-- /.row -->
        </div><!-- /.properties-grid -->

        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_paging_nav", array(0 => "", 1 => 2, 2 => (isset($context["wp_query"]) ? $context["wp_query"] : null)), "method"), "html", null, true);
            echo "
    ";
        } else {
            // line 35
            echo "        <div class=\"clearfix\">
            <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "No posts found.", 1 => "aviators"), "method"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "archive-property.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 36,  139 => 35,  134 => 33,  129 => 30,  115 => 29,  111 => 27,  109 => 26,  106 => 25,  103 => 24,  100 => 23,  97 => 22,  80 => 21,  71 => 19,  65 => 17,  63 => 16,  60 => 15,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
