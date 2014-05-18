<?php

/* agents/widget.twig */
class __TwigTemplate_a3e101087a99dc185649171712abe39b extends Twig_Template
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
        if (isset($context["agents"])) { $_agents_ = $context["agents"]; } else { $_agents_ = null; }
        if ($_agents_) {
            // line 2
            echo "    ";
            if (isset($context["before_widget"])) { $_before_widget_ = $context["before_widget"]; } else { $_before_widget_ = null; }
            echo $_before_widget_;
            echo "

    ";
            // line 4
            if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
            if ($_title_) {
                // line 5
                echo "        ";
                if (isset($context["before_title"])) { $_before_title_ = $context["before_title"]; } else { $_before_title_ = null; }
                echo $_before_title_;
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo twig_escape_filter($this->env, $_title_, "html", null, true);
                if (isset($context["after_title"])) { $_after_title_ = $context["after_title"]; } else { $_after_title_ = null; }
                echo $_after_title_;
                echo "
    ";
            }
            // line 7
            echo "
    <div class=\"content\">
        ";
            // line 9
            if (isset($context["agents"])) { $_agents_ = $context["agents"]; } else { $_agents_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_agents_);
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 10
                echo "            <div class=\"agent clearfix\">
                <div class=\"image\">
                    <a href=\"";
                // line 12
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_agent_, "ID")), "method"), "html", null, true);
                echo "\">
                        ";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_agent_, "ID")), "method")) {
                    // line 14
                    echo "                            ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                    echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_agent_, "ID")), "method");
                    echo "
                        ";
                } else {
                    // line 16
                    echo "                            <img src=\"";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
                    echo "/assets/img/agent-tmp.png\" alt=\"";
                    if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_agent_, "post_title"), "html", null, true);
                    echo "\">
                        ";
                }
                // line 18
                echo "                    </a>
                </div><!-- /.image -->

                <div class=\"name\">
                    <a href=\"";
                // line 22
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_agent_, "ID")), "method"), "html", null, true);
                echo "\">";
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_agent_, "post_title"), "html", null, true);
                echo "</a>
                </div><!-- /.name -->

                <div class=\"phone\">
                    <i class=\"icon icon-normal-phone\"></i>
                    ";
                // line 27
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_agent_, "meta"), "_agent_mobile"), 0), "html", null, true);
                echo "
                </div><!-- /.phone -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:";
                // line 32
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_agent_, "meta"), "_agent_email"), 0), "html", null, true);
                echo "\">";
                if (isset($context["agent"])) { $_agent_ = $context["agent"]; } else { $_agent_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_agent_, "meta"), "_agent_email"), 0), "html", null, true);
                echo "</a>
                </div><!-- /.email -->
            </div><!-- /.agent -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 36
            echo "    </div><!-- /.content -->

    ";
            // line 38
            if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
            echo $_after_widget_;
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "agents/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  126 => 36,  112 => 32,  103 => 27,  90 => 22,  84 => 18,  74 => 16,  66 => 14,  62 => 13,  56 => 12,  52 => 10,  47 => 9,  43 => 7,  32 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
