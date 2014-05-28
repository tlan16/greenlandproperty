<?php

/* properties/enquire.twig */
class __TwigTemplate_9c3759886fbb1dae48a1e05e7ef09490 extends Twig_Template
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
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "    ";
            echo (isset($context["before_title"]) ? $context["before_title"] : null);
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo (isset($context["after_title"]) ? $context["after_title"] : null);
            echo "
";
        }
        // line 6
        echo "
<div class=\"content\">
    <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/aviators/plugins/properties/enquire.php\">

        ";
        // line 10
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_name"), "method"))) {
            // line 11
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputName\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Name", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_phone"), "method"))) {
            // line 25
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputPhone\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Phone", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date"), "method"))) {
            // line 39
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_from"), "method"))) {
            // line 53
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date From", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_date_to"), "method"))) {
            // line 66
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputDate\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Date To", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_email"), "method"))) {
            // line 79
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputEmail\">
                    ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Email", 1 => "aviators"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "properties", 1 => "fields", 2 => "hide_message"), "method"))) {
            // line 93
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"inputMessage\">
                    ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Message", 1 => "aviators"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["post_id"]) ? $context["post_id"] : null), "html", null, true);
        echo "\">
            <button class=\"btn btn-primary arrow-right\">";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Send", 1 => "aviators"), "method"), "html", null, true);
        echo "</button>
        </div>
        <!-- /.form-actions -->
    </form>
</div><!-- /.content -->

";
        // line 114
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
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
        return array (  209 => 114,  200 => 108,  196 => 107,  192 => 105,  179 => 95,  175 => 93,  173 => 92,  170 => 91,  157 => 81,  153 => 79,  151 => 78,  148 => 77,  136 => 68,  132 => 66,  130 => 65,  127 => 64,  115 => 55,  111 => 53,  109 => 52,  106 => 51,  93 => 41,  89 => 39,  87 => 38,  84 => 37,  71 => 27,  67 => 25,  65 => 24,  62 => 23,  49 => 13,  45 => 11,  43 => 10,  38 => 8,  34 => 6,  26 => 4,  24 => 3,  19 => 1,);
    }
}
