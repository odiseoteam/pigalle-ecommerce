<?php

/* PigalleBundle:Product:index.html.twig */
class __TwigTemplate_7f626a8d08732a785d99964c9b7574d8b8f6b5146a91786db6b4b801c6726c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PigalleBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $context["__internal_c9b9c9b37223df4bd3a6d2c9e07cbea01887c6aeb25c00eb82ec2f4a2607b790"] = $this->env->loadTemplate("PigalleBundle:Macros:misc.html.twig");
        // line 4
        $context["__internal_fe5c3cee55fc8e02cf6866574a8d3e168e0d4ce6880a4f8aa5790b12fdc8727c"] = $this->env->loadTemplate("PigalleBundle:Product:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"shop\">
\t<div class=\"contentTitle\"><h3 class=\"titleSection container\">Online Store</h3></div>
\t<div class=\"container content\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"filters span3\">
\t\t\t\t";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PigalleBundle:Product:filters", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"))));
        echo "
\t\t\t</div>
\t\t\t<div class=\"products scrollPagination span9\" data-sp-total-pages=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")), "getNbPages"), "html", null, true);
        echo "\" data-sp-load-url=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getUri"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 15
        echo $this->callMacro($context["__internal_c9b9c9b37223df4bd3a6d2c9e07cbea01887c6aeb25c00eb82ec2f4a2607b790"], "pagination", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "
\t\t\t\t<div class=\"grid spContent\">\t\t\t
\t\t\t\t\t";
        // line 17
        echo $this->callMacro($context["__internal_fe5c3cee55fc8e02cf6866574a8d3e168e0d4ce6880a4f8aa5790b12fdc8727c"], "grid", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "
\t\t\t\t</div>
\t\t\t\t";
        // line 19
        echo $this->callMacro($context["__internal_c9b9c9b37223df4bd3a6d2c9e07cbea01887c6aeb25c00eb82ec2f4a2607b790"], "pagination", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  61 => 17,  56 => 15,  50 => 14,  45 => 12,  38 => 7,  35 => 6,  30 => 4,  28 => 3,);
    }
}
