<?php

/* helpers/header.twig */
class __TwigTemplate_d1f2ef9a9eedcf2d29aadef7ff0c9263 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 7]>
<html class=\"ie ie7\" ";
        // line 3
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if IE 8]>
<html class=\"ie ie8\" ";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html ";
        // line 9
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "language_attributes", array(), "method"), "html", null, true);
        echo ">
<!--<![endif]-->

<head>
    <meta charset=\"";
        // line 13
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "charset"), "method"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Aviators, http://themes.byaviators.com\">

    <link rel=\"shortcut icon\" href=\"";
        // line 17
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/img/favicon.png\" type=\"image/png\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"";
        // line 19
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bloginfo", array(0 => "pingback_url"), "method"), "html", null, true);
        echo "\">

    <!--[if lt IE 9]>
    <script src=\"";
        // line 22
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    ";
        // line 25
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_head(), "html", null, true);
        echo "

    <title>";
        // line 27
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo $this->getAttribute($_wp_, "wp_title", array(0 => "|", 1 => false, 2 => "right"), "method");
        echo "</title>
</head>

<body class=\"";
        // line 30
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_wp_, "get_body_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "\">


<div class=\"top\">
   <div class=\"container\">
       <div class=\"top-inner inverted\">
           <div class=\"header clearfix\">
               ";
        // line 37
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "function_exists", array(0 => "icl_sitepress_activate"), "method")) {
            // line 38
            echo "                    <div class=\"languages\">";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "do_action", array(0 => "icl_language_selector"), "method"), "html", null, true);
            echo "</div>
               ";
        }
        // line 40
        echo "
               <div class=\"branding pull-left\">
                   ";
        // line 43
        echo "                   <div class=\"logo\">
                       <a href=\"";
        // line 44
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\" title=\"";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
        echo "\">
                           ";
        // line 45
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method")) {
            // line 46
            echo "                               <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_logo"), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                           ";
        } else {
            // line 48
            echo "                               <img src=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/logo.png\" alt=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                           ";
        }
        // line 50
        echo "                       </a>
                   </div><!-- /.logo -->

                   ";
        // line 54
        echo "                   ";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if (($this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_title_is_hidden"), "method") == "")) {
            // line 55
            echo "                       ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            if ($this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method")) {
                // line 56
                echo "                           <div class=\"site-name\">
                               <a href=\"";
                // line 57
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
                echo "\" class=\"brand\">
                                   ";
                // line 58
                if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_bloginfo", array(0 => "name"), "method"), "html", null, true);
                echo "
                               </a>
                           </div><!-- /.site-name -->
                       ";
            }
            // line 62
            echo "                   ";
        }
        // line 63
        echo "               </div>

               ";
        // line 66
        echo "               <div class=\"contact-top\">
                <ul class=\"menu nav\">
                  ";
        // line 68
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "is_hidden"), "method"))) {
            // line 69
            echo "                    <li class=\"first leaf facebook\">
                      <a href=\"";
            // line 70
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"facebook\"><i>F</i></a>
                    </li>
                  ";
        }
        // line 73
        echo "
                  ";
        // line 74
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "is_hidden"), "method"))) {
            // line 75
            echo "                    <li class=\"leaf flickr\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"flickr\"><i>n</i></a></li>
                  ";
        }
        // line 77
        echo "
                  ";
        // line 78
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "is_hidden"), "method"))) {
            // line 79
            echo "                    <li class=\"leaf google-plus\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"google\"><i>g</i></a></li>
                  ";
        }
        // line 81
        echo "
                  ";
        // line 82
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "is_hidden"), "method"))) {
            // line 83
            echo "                    <li class=\"leaf linkedin\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"linkedin\"><i>l</i></a></li>
                  ";
        }
        // line 85
        echo "
                  ";
        // line 86
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "is_hidden"), "method"))) {
            // line 87
            echo "                    <li class=\"leaf twitter\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"twitter\"><i>T</i></a></li>
                  ";
        }
        // line 89
        echo "
                  ";
        // line 90
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "is_hidden"), "method"))) {
            // line 91
            echo "                    <li class=\"last leaf vimeo\"><a href=\"";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"vimeo\"><i>v</i></a></li>
                  ";
        }
        // line 93
        echo "                </ul>
               </div>

               ";
        // line 97
        echo "               <div class=\"user-area pull-right\">
                   ";
        // line 98
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "is_user_logged_in", array(), "method")) {
            // line 99
            echo "                       ";
            if (isset($context["authenticated_menu"])) { $_authenticated_menu_ = $context["authenticated_menu"]; } else { $_authenticated_menu_ = null; }
            echo $_authenticated_menu_;
            echo "
                   ";
        } else {
            // line 101
            echo "                       ";
            if (isset($context["anonymous_menu"])) { $_anonymous_menu_ = $context["anonymous_menu"]; } else { $_anonymous_menu_ = null; }
            echo $_anonymous_menu_;
            echo "
                   ";
        }
        // line 103
        echo "               </div><!-- /.user-area -->
           </div><!-- /.header -->

           ";
        // line 107
        echo "            <div class=\"navigation navbar clearfix\">
                <div class=\"pull-left\">
                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>

                    ";
        // line 115
        if (isset($context["main_menu"])) { $_main_menu_ = $context["main_menu"]; } else { $_main_menu_ = null; }
        echo $_main_menu_;
        echo "
                </div>

                ";
        // line 118
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ((!$this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_is_hidden"), "method"))) {
            // line 119
            echo "                  <div class=\"pull-right\">

                          <a href=\"";
            // line 121
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_url"), "method"), "html", null, true);
            echo "\" class=\"list-property\">
                              <span class=\"link\">";
            // line 122
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_theme_mod", array(0 => "header_call_to_action_text"), "method"), "html", null, true);
            echo "</span>
                              <div class=\"ribbon\"><span class=\"icon icon-normal-circle-plus\"></span></div>
                          </a>
                      <!-- /.list-property -->
                  </div><!-- /.pull-right -->
                ";
        }
        // line 128
        echo "
            </div>
           <div class=\"breadcrumb pull-left\">
               ";
        // line 131
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        if ($this->getAttribute($_wp_, "function_exists", array(0 => "bcn_display"), "method")) {
            // line 132
            echo "                   ";
            if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "bcn_display"), "html", null, true);
            echo "
               ";
        }
        // line 134
        echo "           </div><!-- /.breadcrumb -->
       </div>
   </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "helpers/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 134,  351 => 132,  348 => 131,  343 => 128,  333 => 122,  328 => 121,  324 => 119,  321 => 118,  314 => 115,  304 => 107,  299 => 103,  292 => 101,  285 => 99,  282 => 98,  279 => 97,  274 => 93,  267 => 91,  264 => 90,  261 => 89,  254 => 87,  251 => 86,  248 => 85,  241 => 83,  238 => 82,  235 => 81,  228 => 79,  225 => 78,  222 => 77,  215 => 75,  212 => 74,  209 => 73,  202 => 70,  199 => 69,  196 => 68,  192 => 66,  188 => 63,  185 => 62,  177 => 58,  169 => 57,  166 => 56,  162 => 55,  158 => 54,  153 => 50,  143 => 48,  133 => 46,  130 => 45,  122 => 44,  119 => 43,  115 => 40,  108 => 38,  105 => 37,  85 => 30,  78 => 27,  73 => 25,  66 => 22,  59 => 19,  53 => 17,  45 => 13,  37 => 9,  30 => 6,  23 => 3,  19 => 1,);
    }
}
