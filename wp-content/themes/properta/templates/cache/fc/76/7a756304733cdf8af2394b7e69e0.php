<?php

/* properties/enquire.twig */
class __TwigTemplate_fc767a756304733cdf8af2394b7e69e0 extends Twig_Template
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
<div class=\"content\">
    <form method=\"post\" action=\"";
        // line 8
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/aviators/plugins/properties/enquire.php\">

        ";
        // line 10
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_name"), "method"))) {
            // line 11
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputName\">
                    ";
            // line 13
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Name", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputName\" name=\"name\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_phone"), "method"))) {
            // line 25
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputPhone\">
                    ";
            // line 27
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Phone", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"text\" id=\"inputPhone\" name=\"phone\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 37
        echo "
        ";
        // line 38
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date"), "method"))) {
            // line 39
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 41
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Date", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 51
        echo "
        ";
        // line 52
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_from"), "method"))) {
            // line 53
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 55
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Date From", 1 => "aviators"), "method"), "html", null, true);
            echo "
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date_from\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_to"), "method"))) {
            // line 66
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 68
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Date To", 1 => "aviators"), "method"), "html", null, true);
            echo "
                </label>

                <div class=\"controls\">
                    <input type=\"date\" id=\"inputDate\" name=\"date_to\" >
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 77
        echo "
        ";
        // line 78
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_email"), "method"))) {
            // line 79
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputEmail\">
                    ";
            // line 81
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Email", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <input type=\"email\" id=\"inputEmail\" name=\"email\" required=\"required\">
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_message"), "method"))) {
            // line 93
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputMessage\">
                    ";
            // line 95
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Message", 1 => "aviators"), "method"), "html", null, true);
            echo "
                    <span class=\"form-required\" title=\"This field is required.\">*</span>
                </label>

                <div class=\"controls\">
                    <textarea id=\"inputMessage\" name=\"message\" required=\"required\"></textarea>
                </div>
                <!-- /.controls -->
            </div><!-- /.control-group -->
        ";
        }
        // line 105
        echo "
        <div class=\"form-actions\">
            <input type=\"hidden\" name=\"post_id\" value=\"";
        // line 107
        if (isset($context["post_id"])) { $_post_id_ = $context["post_id"]; } else { $_post_id_ = null; }
        echo twig_escape_filter($this->env, $_post_id_, "html", null, true);
        echo "\">
            <button class=\"btn btn-primary arrow-right\">";
        // line 108
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Send", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
        </div>
        <!-- /.form-actions -->
    </form>
</div><!-- /.content -->

";
        // line 114
        if (isset($context["after_widget"])) { $_after_widget_ = $context["after_widget"]; } else { $_after_widget_ = null; }
        echo $_after_widget_;
    }

    public function getTemplateName()
    {
        return "properties/enquire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 114,  221 => 108,  216 => 107,  212 => 105,  198 => 95,  194 => 93,  191 => 92,  188 => 91,  174 => 81,  170 => 79,  167 => 78,  164 => 77,  151 => 68,  147 => 66,  144 => 65,  141 => 64,  128 => 55,  124 => 53,  121 => 52,  118 => 51,  104 => 41,  100 => 39,  97 => 38,  94 => 37,  80 => 27,  76 => 25,  73 => 24,  70 => 23,  56 => 13,  52 => 11,  49 => 10,  43 => 8,  39 => 6,  28 => 4,  25 => 3,  19 => 1,);
    }
}
