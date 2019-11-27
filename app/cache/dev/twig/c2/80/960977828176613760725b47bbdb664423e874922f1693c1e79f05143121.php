<?php

/* PigalleBundle:Product:show.html.twig */
class __TwigTemplate_c280960977828176613760725b47bbdb664423e874922f1693c1e79f05143121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PigalleBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'featured_products' => array($this, 'block_featured_products'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PigalleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_20e6791bddcc233d374a9e51f13a9c4b826aea0483f0f766c2724538a7e447a0"] = $this->env->loadTemplate("PigalleBundle:Product:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"detalleProducto\">
\t<div class=\"container\">
\t\t<h3 class=\"titleSection\">Online Store</h3>
\t\t<div class=\"direction\">
\t\t\t<a class=\"pull-left\" onclick=\"history.back();\">VOLVER</a>
\t\t\t<!-- <a class=\"pull-right\">ANTERIOR / SIGUIENTE</a>  -->
\t\t</div>
\t\t";
        // line 13
        echo $this->callMacro($context["__internal_20e6791bddcc233d374a9e51f13a9c4b826aea0483f0f766c2724538a7e447a0"], "productDetails", array(0 => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))));
        echo "
\t</div>
</div>
";
    }

    // line 18
    public function block_featured_products($context, array $blocks = array())
    {
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PigalleBundle:Product:featuredProducts"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  54 => 18,  46 => 13,  37 => 6,  34 => 5,  29 => 3,);
    }
}
