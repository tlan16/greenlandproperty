<?php

/* shortcodes/pricing.twig */
class __TwigTemplate_2e391c6c4bba8d7357cd2e84973b42a7 extends Twig_Template
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
        echo "<div class=\"pricing boxed\">
    <div class=\"column ";
        // line 2
        if (((isset($context["promoted"]) ? $context["promoted"] : null) == "yes")) {
            echo "promoted";
        }
        echo "\">
        ";
        // line 3
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 4
            echo "            <h2>";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h2>
        ";
        }
        // line 6
        echo "
        <div class=\"content\">
            <div class=\"price\">
                ";
        // line 9
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 10
            echo "                    <h3>";
            echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
            echo "</h3>
                ";
        }
        // line 12
        echo "
                ";
        // line 13
        if ((isset($context["subtitle"]) ? $context["subtitle"] : null)) {
            // line 14
            echo "                    <h4>";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : null), "html", null, true);
            echo "</h4>
                ";
        }
        // line 16
        echo "            </div>
            ";
        // line 17
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_content");
        echo "

            ";
        // line 19
        if (((isset($context["link"]) ? $context["link"] : null) && (isset($context["button_text"]) ? $context["button_text"] : null))) {
            // line 20
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
            echo "\" class=\"btn btn-primary btn-large\">";
            echo twig_escape_filter($this->env, (isset($context["button_text"]) ? $context["button_text"] : null), "html", null, true);
            echo "</a>
            ";
        }
        // line 22
        echo "        </div><!-- /.content -->
    </div><!-- /.column -->
</div><!-- /.pricing -->";
    }

    public function getTemplateName()
    {
        return "shortcodes/pricing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  70 => 20,  68 => 19,  63 => 17,  60 => 16,  54 => 14,  52 => 13,  49 => 12,  43 => 10,  41 => 9,  36 => 6,  30 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
