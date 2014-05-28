<?php

/* content-property.twig */
class __TwigTemplate_a68a492f01f25bb1e5785750205931de extends Twig_Template
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
        echo "<div class=\"properties-rows\">
    <div class=\"row\">
        ";
        // line 3
        $this->env->loadTemplate("properties/property-row.twig")->display($context);
        // line 4
        echo "    </div><!-- /.row-->
</div><!-- /.properties-rows -->
";
    }

    public function getTemplateName()
    {
        return "content-property.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  23 => 3,  19 => 1,);
    }
}
