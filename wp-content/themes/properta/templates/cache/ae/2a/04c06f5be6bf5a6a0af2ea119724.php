<?php

/* page-properties-grid.twig */
class __TwigTemplate_ae2a04c06f5be6bf5a6a0af2ea119724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-page-properties-grid.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-page-properties-grid.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("properties/properties-grid.twig")->display($context);
        // line 5
        echo "    <div class=\"show-all\">
        <a href=\"";
        // line 6
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "get_post_type_archive_link", array(0 => "property"), "method"), "html", null, true);
        echo "\">";
        if (isset($context["wp"])) { $_wp_ = $context["wp"]; } else { $_wp_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_wp_, "__", array(0 => "Show all", 1 => "aviators"), "method"), "html", null, true);
        echo "</a>
    </div>
    <hr>
";
    }

    public function getTemplateName()
    {
        return "page-properties-grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
