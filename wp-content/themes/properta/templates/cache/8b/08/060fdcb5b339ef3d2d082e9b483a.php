<?php

/* helpers/header.twig */
class __TwigTemplate_8b08060fdcb5b339ef3d2d082e9b483a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if IE 8]>
<html class=\"ie ie8\" ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "language_attributes", array(), "method"), "html", null, true);
        echo ">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "language_attributes", array(), "method"), "html", null, true);
        echo ">
<!--<![endif]-->

<head>
    <meta charset=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bloginfo", array(0 => "charset"), "method"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"author\" content=\"Aviators, http://themes.byaviators.com\">

    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/img/favicon.png\" type=\"image/png\">
    <link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
    <link rel=\"pingback\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bloginfo", array(0 => "pingback_url"), "method"), "html", null, true);
        echo "\">

    <!--[if lt IE 9]>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
        echo "/assets/js/html5.js\" type=\"text/javascript\"></script>
    <![endif]-->

    ";
        // line 25
        echo twig_escape_filter($this->env, aviators_templates_helpers_wp_head(), "html", null, true);
        echo "

    <title>";
        // line 27
        echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_title", array(0 => "|", 1 => false, 2 => "right"), "method");
        echo "</title>
</head>

<body class=\"";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_body_class"));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "function_exists", array(0 => "icl_sitepress_activate"), "method")) {
            // line 38
            echo "                    <div class=\"languages\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "do_action", array(0 => "icl_language_selector"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
        echo "\">
                           ";
        // line 45
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_logo"), "method")) {
            // line 46
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_logo"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                           ";
        } else {
            // line 48
            echo "                               <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/logo.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
            echo "\">
                           ";
        }
        // line 50
        echo "                       </a>
                   </div><!-- /.logo -->

                   ";
        // line 54
        echo "                   ";
        if (($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_title_is_hidden"), "method") == "")) {
            // line 55
            echo "                       ";
            if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "name"), "method")) {
                // line 56
                echo "                           <div class=\"site-name\">
                               <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "wpurl"), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Home", 1 => "aviators"), "method"), "html", null, true);
                echo "\" class=\"brand\">
                                   ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_bloginfo", array(0 => "name"), "method"), "html", null, true);
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
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "is_hidden"), "method"))) {
            // line 69
            echo "                    <li class=\"first leaf facebook\">
                      <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "facebook", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"facebook\"><i>F</i></a>
                    </li>
                  ";
        }
        // line 73
        echo "
                  ";
        // line 74
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "is_hidden"), "method"))) {
            // line 75
            echo "                    <li class=\"leaf flickr\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "flickr", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"flickr\"><i>n</i></a></li>
                  ";
        }
        // line 77
        echo "
                  ";
        // line 78
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "is_hidden"), "method"))) {
            // line 79
            echo "                    <li class=\"leaf google-plus\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "google_plus", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"google\"><i>g</i></a></li>
                  ";
        }
        // line 81
        echo "
                  ";
        // line 82
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "is_hidden"), "method"))) {
            // line 83
            echo "                    <li class=\"leaf linkedin\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "linkedin", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"linkedin\"><i>l</i></a></li>
                  ";
        }
        // line 85
        echo "
                  ";
        // line 86
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "is_hidden"), "method"))) {
            // line 87
            echo "                    <li class=\"leaf twitter\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "twitter", 2 => "link"), "method"), "html", null, true);
            echo "\" class=\"twitter\"><i>T</i></a></li>
                  ";
        }
        // line 89
        echo "
                  ";
        // line 90
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "is_hidden"), "method"))) {
            // line 91
            echo "                    <li class=\"last leaf vimeo\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "aviators_settings_get_value", array(0 => "socialize", 1 => "vimeo", 2 => "link"), "method"), "html", null, true);
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "is_user_logged_in", array(), "method")) {
            // line 99
            echo "                       ";
            echo (isset($context["authenticated_menu"]) ? $context["authenticated_menu"] : null);
            echo "
                   ";
        } else {
            // line 101
            echo "                       ";
            echo (isset($context["anonymous_menu"]) ? $context["anonymous_menu"] : null);
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
        echo (isset($context["main_menu"]) ? $context["main_menu"] : null);
        echo "
                </div>

                ";
        // line 118
        if ((!$this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_call_to_action_is_hidden"), "method"))) {
            // line 119
            echo "                  <div class=\"pull-right\">

                          <a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_call_to_action_url"), "method"), "html", null, true);
            echo "\" class=\"list-property\">
                              <span class=\"link\">";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_theme_mod", array(0 => "header_call_to_action_text"), "method"), "html", null, true);
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
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "function_exists", array(0 => "bcn_display"), "method")) {
            // line 132
            echo "                   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "bcn_display"), "html", null, true);
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
        return array (  313 => 134,  307 => 132,  305 => 131,  300 => 128,  291 => 122,  287 => 121,  283 => 119,  281 => 118,  275 => 115,  265 => 107,  260 => 103,  254 => 101,  248 => 99,  246 => 98,  243 => 97,  238 => 93,  232 => 91,  230 => 90,  227 => 89,  221 => 87,  219 => 86,  216 => 85,  210 => 83,  208 => 82,  205 => 81,  199 => 79,  197 => 78,  194 => 77,  188 => 75,  186 => 74,  183 => 73,  177 => 70,  174 => 69,  172 => 68,  168 => 66,  164 => 63,  161 => 62,  154 => 58,  148 => 57,  145 => 56,  142 => 55,  139 => 54,  134 => 50,  126 => 48,  118 => 46,  116 => 45,  110 => 44,  107 => 43,  103 => 40,  97 => 38,  95 => 37,  77 => 30,  71 => 27,  66 => 25,  60 => 22,  54 => 19,  49 => 17,  42 => 13,  35 => 9,  29 => 6,  23 => 3,  19 => 1,);
    }
}
