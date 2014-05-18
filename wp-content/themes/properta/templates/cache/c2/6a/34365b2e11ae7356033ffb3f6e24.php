<?php

/* properties/carousel.twig */
class __TwigTemplate_c26a34365b2e11ae7356033ffb3f6e24 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        echo "

";
        // line 3
        if ((isset($context["properties"]) ? $context["properties"] : null)) {
            // line 4
            echo "
    ";
            // line 5
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 6
                echo "        ";
                echo (isset($context["before_title"]) ? $context["before_title"] : null);
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo (isset($context["after_title"]) ? $context["after_title"] : null);
                echo "
    ";
            }
            // line 8
            echo "
    <div class=\"carousel\">
        <ul class=\"bxslider properties-grid unstyled\">
            ";
            // line 11
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
                // line 12
                echo "                <li>
                    ";
                // line 13
                $this->env->loadTemplate("properties/property-box-small.twig")->display($context);
                // line 14
                echo "                </li>
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
            // line 16
            echo "        </ul>
    </div>

";
        }
        // line 20
        echo "
";
        // line 21
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "properties/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  87 => 20,  81 => 16,  66 => 14,  64 => 13,  61 => 12,  44 => 11,  39 => 8,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
