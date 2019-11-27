<?php

/* PigalleBundle:Product:quickview.html.twig */
class __TwigTemplate_5a24c2dcfffa81a06e85db934f3398be01375f576aa1ffc902a1cc9d335abdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_6774e78dcf774bf4d6c53432441a8d736d08cd17ba447295850011427910e0a7"] = $this->env->loadTemplate("PigalleBundle:Product:macros.html.twig");
        // line 2
        echo "
";
        // line 3
        echo $this->callMacro($context["__internal_6774e78dcf774bf4d6c53432441a8d736d08cd17ba447295850011427910e0a7"], "productDetails", array(0 => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))));
        echo "
<script type=\"text/javascript\">
<!--
\$(document).ready(function()
{
\tsetupProductDetails(false);
});
//-->
</script>\t";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:quickview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  24 => 2,  22 => 1,);
    }
}
