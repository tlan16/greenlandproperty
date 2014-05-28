<?php

/* properties/properties-grid.twig */
class __TwigTemplate_272bf9d8571dfc07ed49c264524d2550 extends Twig_Template
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method")) {
            // line 2
            echo "    <h1 class=\"page-header\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
            echo "</h1>
";
        } else {
            // line 4
            echo "    <h1>&nbsp;</h1>
";
        }
        // line 6
        echo "
<div class=\"properties-grid\">
    <div class=\"";
        // line 8
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method") > 3)) {
            echo "row-fluid";
        } else {
            echo "row";
        }
        echo "\">
        ";
        // line 9
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
            echo "            <div class=\"span3\">
                ";
            // line 11
            $this->env->loadTemplate("properties/property-box-small.twig")->display(array_merge($context, array("property" => (isset($context["post"]) ? $context["post"] : null))));
            // line 12
            echo "            </div>

            ";
            // line 14
            if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") % $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method")) == 0)) {
                // line 15
                echo "                </div>
                <div class=\"";
                // line 16
                if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method") > 3)) {
                    echo "row-fluid";
                } else {
                    echo "row";
                }
                echo "\">
            ";
            }
            // line 18
            echo "        ";
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
        // line 19
        echo "    </div><!-- /.row -->
</div><!-- /.properties-grid -->";
    }

    public function getTemplateName()
    {
        return "properties/properties-grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 19,  83 => 18,  74 => 16,  71 => 15,  69 => 14,  65 => 12,  63 => 11,  60 => 10,  43 => 9,  35 => 8,  21 => 2,  45 => 9,  27 => 4,  24 => 3,  22 => 2,  19 => 1,  101 => 21,  95 => 32,  91 => 30,  88 => 29,  81 => 24,  78 => 23,  75 => 22,  73 => 21,  70 => 20,  67 => 19,  59 => 18,  56 => 17,  53 => 16,  47 => 13,  44 => 12,  41 => 11,  39 => 10,  36 => 6,  29 => 5,  26 => 4,  20 => 1,  37 => 6,  34 => 8,  31 => 6,  28 => 3,);
    }
}
