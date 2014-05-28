<?php

/* page-properties-grid.twig */
class __TwigTemplate_73dd04d145c7506a5855ca190ed1e826 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_type_archive_link", array(0 => "property"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Show all", 1 => "aviators"), "method"), "html", null, true);
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
