<?php

/* partners/widget.twig */
class __TwigTemplate_2692a60a4f942a0fbf8d0d1936c4c721 extends Twig_Template
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
        if (isset($context["before_widget"])) { $_before_widget_ = $context["before_widget"]; } else { $_before_widget_ = null; }
        echo $_before_widget_;
        echo "

";
        // line 3
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        if ($_title_) {
            // line 4
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
        // line 6
        echo "
";
        // line 7
        if (isset($context["partners"])) { $_partners_ = $context["partners"]; } else { $_partners_ = null; }
        if ($_partners_) {
            // line 8
            echo "    <div class=\"partners\">
        <div class=\"row\">
            ";
            // line 10
            if (isset($context["partners"])) { $_partners_ = $context["partners"]; } else { $_partners_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_partners_);
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 11
                echo "                <div class=\"span3\">
                    <div class=\"partner\">
                        <a href=\"";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["partner"])) { $_partner_ = $context["partner"]; } else { $_partner_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_partner_, "ID"), 1 => "_partner_url", 2 => true), "method"), "html", null, true);
                echo "\">
                            ";
                // line 14
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["partner"])) { $_partner_ = $context["partner"]; } else { $_partner_ = null; }
                echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_partner_, "ID")), "method");
                echo "
                        </a>
                    </div>
                </div><!-- /.span3 -->
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 19
            echo "        </div><!-- /.row -->
    </div><!-- /.partners -->
";
        }
        // line 22
        if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
        echo $_after_widget_;
    }

    public function getTemplateName()
    {
        return "partners/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  77 => 19,  64 => 14,  58 => 13,  54 => 11,  49 => 10,  45 => 8,  42 => 7,  39 => 6,  28 => 4,  25 => 3,  19 => 1,);
    }
}
