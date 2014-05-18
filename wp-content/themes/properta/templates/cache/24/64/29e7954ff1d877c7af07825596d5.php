<?php

/* properties/properties-grid.twig */
class __TwigTemplate_246429e7954ff1d877c7af07825596d5 extends Twig_Template
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
        if ($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method")) {
            // line 2
            echo "    <h1 class=\"page-header\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "title"), "method"), "html", null, true);
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method") > 3)) {
            echo "row-fluid";
        } else {
            echo "row";
        }
        echo "\">
        ";
        // line 9
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
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
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            $this->env->loadTemplate("properties/property-box-small.twig")->display(array_merge($context, array("property" => $_post_)));
            // line 12
            echo "            </div>

            ";
            // line 14
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ((($this->getAttribute($_loop_, "index") % $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method")) == 0)) {
                // line 15
                echo "                </div>
                <div class=\"";
                // line 16
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (($this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "homepage", 2 => "cols"), "method") > 3)) {
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
        return array (  105 => 19,  91 => 18,  81 => 16,  78 => 15,  74 => 14,  70 => 12,  67 => 11,  46 => 9,  33 => 6,  29 => 4,  22 => 2,  19 => 1,  111 => 21,  104 => 32,  100 => 30,  96 => 29,  89 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  73 => 19,  64 => 10,  61 => 17,  58 => 16,  51 => 13,  48 => 12,  44 => 11,  41 => 10,  38 => 9,  36 => 8,  27 => 4,  20 => 1,  37 => 8,  34 => 5,  31 => 5,  28 => 3,);
    }
}
