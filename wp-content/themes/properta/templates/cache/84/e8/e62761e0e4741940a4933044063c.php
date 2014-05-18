<?php

/* agencies/widget.twig */
class __TwigTemplate_84e8e62761e0e4741940a4933044063c extends Twig_Template
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
        if (isset($context["agencies"])) { $_agencies_ = $context["agencies"]; } else { $_agencies_ = null; }
        if ($_agencies_) {
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
            if (isset($context["agencies"])) { $_agencies_ = $context["agencies"]; } else { $_agencies_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_agencies_);
            foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
                // line 10
                echo "            <div class=\"agency clearfix\">
                <div class=\"header\">
                    <div class=\"image\">
                        <a href=\"";
                // line 13
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_agency_, "ID")), "method"), "html", null, true);
                echo "\">
                            ";
                // line 14
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                if ($this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_agency_, "ID")), "method")) {
                    // line 15
                    echo "                                ";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo $this->getAttribute($_wp_, "get_the_post_thumbnail", array(0 => $this->getAttribute($_agency_, "ID")), "method");
                    echo "
                            ";
                } else {
                    // line 17
                    echo "                                <img src=\"";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
                    echo "/assets/img/agency-small-tmp.png\" alt=\"";
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_agency_, "post_title"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 19
                echo "                        </a>
                    </div>
                    <!-- /.image -->

                    <div class=\"info\">
                        <h2>";
                // line 24
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_agency_, "post_title"), "html", null, true);
                echo "</h2>

                        <div class=\"properties-count\">
                            <span class=\"number\">";
                // line 27
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_agencies_get_properties_count", array(0 => $this->getAttribute($_agency_, "ID")), "method"), "html", null, true);
                echo "</span> ";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "properties", 1 => "aviators"), "method"), "html", null, true);
                echo "
                        </div>
                        <!-- /.properties-count -->

                        <a href=\"";
                // line 31
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_permalink", array(0 => $this->getAttribute($_agency_, "ID")), "method"), "html", null, true);
                echo "\" class=\"btn\">";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "View profile", 1 => "aviators"), "method"), "html", null, true);
                echo "</a>
                    </div>
                    <!-- /.info -->
                </div>
                <!-- /.header -->

                ";
                // line 37
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_address", 2 => true), "method")) {
                    // line 38
                    echo "                    <div class=\"address\">
                        ";
                    // line 39
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_address", 2 => true), "method"), "html", null, true));
                    echo "
                    </div><!-- /.address -->
                ";
                }
                // line 42
                echo "
                ";
                // line 43
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_email", 2 => true), "method")) {
                    // line 44
                    echo "                    <div class=\"email\">
                        <a href=\"";
                    // line 45
                    if (isset($context["contact_page"])) { $_contact_page_ = $context["contact_page"]; } else { $_contact_page_ = null; }
                    echo twig_escape_filter($this->env, $_contact_page_, "html", null, true);
                    echo "?id=";
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_agency_, "ID"), "html", null, true);
                    echo "\">";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Contact", 1 => "aviators"), "method"), "html", null, true);
                    echo "</a>
                    </div><!-- /.email -->
                ";
                }
                // line 48
                echo "
                ";
                // line 49
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_phone", 2 => true), "method")) {
                    // line 50
                    echo "                    <div class=\"phone\">
                        ";
                    // line 51
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_phone", 2 => true), "method"), "html", null, true);
                    echo "
                    </div><!-- /.phone -->
                ";
                }
                // line 54
                echo "
                ";
                // line 55
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                if ($this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_url", 2 => true), "method")) {
                    // line 56
                    echo "                    <div class=\"url\">
                        <a href=\"";
                    // line 57
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_url", 2 => true), "method"), "html", null, true);
                    echo "\">";
                    if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                    if (isset($context["agency"])) { $_agency_ = $context["agency"]; } else { $_agency_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_meta", array(0 => $this->getAttribute($_agency_, "ID"), 1 => "_agency_url", 2 => true), "method"), "html", null, true);
                    echo "</a>
                    </div>
                ";
                }
                // line 60
                echo "            </div><!-- /.agency -->
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 62
            echo "    </div><!-- /.content -->

    ";
            // line 64
            if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
            echo $_after_widget_;
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "agencies/widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 64,  210 => 62,  203 => 60,  191 => 57,  188 => 56,  184 => 55,  181 => 54,  173 => 51,  170 => 50,  166 => 49,  163 => 48,  150 => 45,  147 => 44,  143 => 43,  140 => 42,  132 => 39,  129 => 38,  125 => 37,  111 => 31,  99 => 27,  92 => 24,  85 => 19,  75 => 17,  67 => 15,  63 => 14,  57 => 13,  52 => 10,  47 => 9,  43 => 7,  32 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }
}
