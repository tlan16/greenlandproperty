<?php

/* shortcodes/faq.twig */
class __TwigTemplate_4bd15169116df466239dab620169b874 extends Twig_Template
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
        echo "<div class=\"accordion\" id=\"faq";
        echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
        echo "\">
    <div class=\"accordion-group\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 4
            echo "            <div class=\"accordion-heading\">
                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#faq";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo "\" href=\"#collapse";
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\">
                    <i class=\"icon icon-normal-circle-plus\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "post_title"), "html", null, true);
            echo "
                </a>
            </div><!-- /.accordion-heading -->

            <div id=\"collapse";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" class=\"accordion-body collapse\">
                <div class=\"accordion-inner\">
                    ";
            // line 12
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "post_content");
            echo "
                </div><!-- /.accordion-inner -->
            </div><!-- /.accordion-body -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "    </div><!-- /.accordion-group -->
</div><!-- /.accordion -->";
    }

    public function getTemplateName()
    {
        return "shortcodes/faq.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 16,  65 => 12,  59 => 10,  52 => 6,  45 => 5,  42 => 4,  25 => 3,  19 => 1,);
    }
}
