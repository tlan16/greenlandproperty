<?php

/* content-agent.twig */
class __TwigTemplate_40ab8112b926e5c21b5a38662f47d526 extends Twig_Template
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
        echo "<div class=\"agent span3\">
        <div class=\"image\">
            <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method")), "method"), "html", null, true);
        echo "\">
                ";
        // line 4
        if ($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method")), "method")) {
            // line 5
            echo "                    ";
            echo $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_post_thumbnail", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method")), "method");
            echo "
                ";
        } else {
            // line 7
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/agent-tmp.png\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["property"]) ? $context["property"] : null), "post_title"), "html", null, true);
            echo "\">
                ";
        }
        // line 9
        echo "            </a>
        </div><!-- /.image -->

        <div class=\"body\">
            <h3>
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_permalink", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "the_title", array(), "method"), "html", null, true);
        echo "</a>
            </h3>

        </div><!-- /.body -->

        <div class=\"info\">
            <div class=\"box\">
                <div class=\"phone\">
                    <i class=\"icon icon-normal-mobile-phone\"></i>
                    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method"), 1 => "_agent_mobile", 2 => true), "method"), "html", null, true);
        echo "
                </div><!-- /.phone -->
                <div class=\"office\">
                    <i class=\"icon icon-normal-phone\"></i>
                    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method"), 1 => "_agent_phone", 2 => true), "method"), "html", null, true);
        echo "
                </div><!-- /.office -->

                <div class=\"email\">
                    <i class=\"icon icon-normal-mail\"></i>
                    <a href=\"mailto:";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "\">
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_the_ID", array(), "method"), 1 => "_agent_email", 2 => true), "method"), "html", null, true);
        echo "
                    </a>
                </div><!-- /.email -->
            </div><!-- /.box -->
        </div><!-- /.info -->
</div><!-- /.agent -->


";
    }

    public function getTemplateName()
    {
        return "content-agent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  79 => 32,  71 => 27,  64 => 23,  50 => 14,  43 => 9,  35 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
