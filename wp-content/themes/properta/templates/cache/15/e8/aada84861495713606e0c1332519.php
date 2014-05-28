<?php

/* properties/widget-large.twig */
class __TwigTemplate_15e8aada84861495713606e0c1332519 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 3
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 5
        echo "
<div class=\"content\">
    ";
        // line 7
        if ((isset($context["properties"]) ? $context["properties"] : null)) {
            // line 8
            echo "        <div class=\"properties-grid featured\">
            <div class=\"row\">
                ";
            // line 10
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
                // line 11
                echo "                   <div class=\"span3\">
                    ";
                // line 12
                $this->env->loadTemplate("properties/property-box-small.twig")->display($context);
                // line 13
                echo "                   </div><!-- /.span4 -->
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "            </div>
        </div><!-- /.properties-grid -->
    ";
        }
        // line 18
        echo "</div><!-- /.content -->

<div class=\"show-all\">
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_type_archive_link", array(0 => "property"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Show all", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
    <hr>
</div>";
    }

    public function getTemplateName()
    {
        return "properties/widget-large.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 18,  79 => 15,  64 => 13,  62 => 12,  59 => 11,  42 => 10,  38 => 8,  36 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
