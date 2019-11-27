<?php

/* PigalleBundle:Product:featuredProducts.html.twig */
class __TwigTemplate_2898c52493b0ef2f499598d9e2a85b9f377155016294c8604276c0014e9b0989 extends Twig_Template
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
        $context["__internal_2859c1d095eff87caf0529c87f0e5843434f422318ac41957b6bd5331199ef35"] = $this->env->loadTemplate("PigalleBundle:Product:macros.html.twig");
        // line 2
        echo "
<div class=\"socaloGris\"></div>
<div class=\"container featuredProducts\">
\t<div class=\"tab\">Productos Destacados</div>
\t";
        // line 6
        echo $this->callMacro($context["__internal_2859c1d095eff87caf0529c87f0e5843434f422318ac41957b6bd5331199ef35"], "grid", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), 1 => 4));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:featuredProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 2,  22 => 1,  57 => 19,  54 => 18,  46 => 13,  37 => 6,  34 => 5,  29 => 3,);
    }
}
