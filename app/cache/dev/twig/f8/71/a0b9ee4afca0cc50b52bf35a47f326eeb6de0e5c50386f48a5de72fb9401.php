<?php

/* PigalleBundle:Product:_product.html.twig */
class __TwigTemplate_f871a0b9ee4afca0cc50b52bf35a47f326eeb6de0e5c50386f48a5de72fb9401 extends Twig_Template
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
        echo "<div class=\"product-box\">
\t<div class=\"imagenProducto\">
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_quickview", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" class=\"quickviewButton\" data-toggle=\"modal\" data-target=\"#quickviewModal\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pigalle/images/quickview_eye.png"), "html", null, true);
        echo "\" alt=\"Quickview button\" /></a>
\t\t";
        // line 4
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image")) {
            // line 5
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "pigalle_220x220"), "html", null, true);
            echo "\" alt=\"Producto\" />
\t\t";
        }
        // line 7
        echo "\t</div>
\t<div class=\"pull-left descripcionProducto\">
\t\t<h3><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</a></h3>
\t\t<p>";
        // line 10
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "shortDescription"), 50), "html", null, true);
        echo "</p>
\t</div>\t\t\t
\t<div class=\"pull-right ";
        // line 12
        echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) ? ("flagOferta") : ("flag"));
        echo "\">
\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price")), "html", null, true);
        echo "</p>
\t\t";
        // line 14
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) {
            // line 15
            echo "\t\t<p class=\"oferta\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceWithoutDiscount")), "html", null, true);
            echo "</p>
\t\t";
        }
        // line 17
        echo "\t\t<div class=\"tail\">&nbsp;</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  65 => 15,  63 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 9,  40 => 7,  34 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
