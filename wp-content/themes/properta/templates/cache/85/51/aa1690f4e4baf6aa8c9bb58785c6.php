<?php

/* properties/widget-large.twig */
class __TwigTemplate_8551aa1690f4e4baf6aa8c9bb58785c6 extends Twig_Template
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
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 3
            echo "    ";
            if (isset($context["before_title"])) { $_before_title_ = $context["before_title"]; } else { $_before_title_ = null; }
            echo $_before_title_;
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            echo twig_escape_filter($this->env, $_title_, "html", null, true);
            if (isset($context["after_title"])) { $_after_title_ = $context["after_title"]; } else { $_after_title_ = null; }
            echo $_after_title_;
            echo "
";
        }
        // line 5
        echo "
<div class=\"content\">
    ";
        // line 7
        if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
        if ($_properties_) {
            // line 8
            echo "        <div class=\"properties-grid featured\">
            <div class=\"row\">
                ";
            // line 10
            if (isset($context["properties"])) { $_properties_ = $context["properties"]; } else { $_properties_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_properties_);
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
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_type_archive_link", array(0 => "property"), "method"), "html", null, true);
        echo "\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Show all", 1 => "aviators"), "method"), "html", null, true);
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
        return array (  95 => 21,  90 => 18,  85 => 15,  70 => 13,  68 => 12,  65 => 11,  47 => 10,  43 => 8,  40 => 7,  36 => 5,  25 => 3,  22 => 2,  19 => 1,);
    }
}
