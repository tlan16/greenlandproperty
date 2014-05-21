<?php

/* settings/wrapper.twig */
class __TwigTemplate_7bee3ffeb2e2d139ece33c0c6207966b extends Twig_Template
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
        echo "<form method=\"post\" action=\"options.php\" enctype=\"multipart/form-data\">
    <div class=\"aviators\">
        <div class=\"aviators-wrapper clear\">
            <h2 class=\"page-title\">
                ";
        // line 5
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "

                ";
        // line 7
        if (isset($context["page_title"])) { $_page_title_ = $context["page_title"]; } else { $_page_title_ = null; }
        if ($_page_title_) {
            // line 8
            echo "                    / ";
            if (isset($context["page_title"])) { $_page_title_ = $context["page_title"]; } else { $_page_title_ = null; }
            echo twig_escape_filter($this->env, $_page_title_, "html", null, true);
            echo "
                ";
        }
        // line 10
        echo "
                ";
        // line 11
        if (isset($context["active_tab_title"])) { $_active_tab_title_ = $context["active_tab_title"]; } else { $_active_tab_title_ = null; }
        if ($_active_tab_title_) {
            // line 12
            echo "                    / ";
            if (isset($context["active_tab_title"])) { $_active_tab_title_ = $context["active_tab_title"]; } else { $_active_tab_title_ = null; }
            echo twig_escape_filter($this->env, $_active_tab_title_, "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </h2>

            <div class=\"aviators-actions\">
                ";
        // line 17
        if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
        echo $_submit_;
        echo "
            </div>

            <div class=\"aviators-main\">
                <div class=\"aviators-inner\">
                    ";
        // line 22
        if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
        if ($_tabs_) {
            // line 23
            echo "                        <div class=\"aviators-sidebar\">
                            ";
            // line 24
            if (isset($context["settings_tabs"])) { $_settings_tabs_ = $context["settings_tabs"]; } else { $_settings_tabs_ = null; }
            echo twig_escape_filter($this->env, $_settings_tabs_, "html", null, true);
            echo "
                            ";
            // line 25
            if (isset($context["tabs"])) { $_tabs_ = $context["tabs"]; } else { $_tabs_ = null; }
            echo $_tabs_;
            echo "
                        </div><!-- /.aviators-tabs -->
                    ";
        }
        // line 28
        echo "
                    <div class=\"aviators-content\">
                        ";
        // line 30
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "settings_errors"), "html", null, true);
        echo "

                        ";
        // line 32
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_forms_);
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 33
            echo "                            ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "settings_fields", array(0 => $_form_), "method"), "html", null, true);
            echo "
                            ";
            // line 34
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "do_settings_sections", array(0 => $_form_), "method"), "html", null, true);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "
                    </div>
                    <!-- /.aviators-content -->
                </div>
                <!-- /.aviators-inner -->
            </div>
            <!-- /.aviators-main -->

            <div class=\"aviators-actions bottom\">
                ";
        // line 45
        if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
        echo $_submit_;
        echo "
            </div>

        </div>
        <!-- /.aviators-wrapper -->
    </div>
    <!-- /.aviators -->
</form>";
    }

    public function getTemplateName()
    {
        return "settings/wrapper.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 45,  118 => 36,  108 => 34,  101 => 33,  96 => 32,  90 => 30,  86 => 28,  79 => 25,  74 => 24,  71 => 23,  68 => 22,  59 => 17,  54 => 14,  47 => 12,  44 => 11,  41 => 10,  34 => 8,  31 => 7,  25 => 5,  19 => 1,);
    }
}
