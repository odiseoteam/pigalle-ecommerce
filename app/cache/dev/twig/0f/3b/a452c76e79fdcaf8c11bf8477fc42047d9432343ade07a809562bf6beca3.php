<?php

/* SyliusBackendBundle:Product:index.html.twig */
class __TwigTemplate_0f3ba452c76e79fdcaf8c11bf8477fc42047d9432343ade07a809562bf6beca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusBackendBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["buttons"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:buttons.html.twig");
        // line 4
        $context["__internal_890afa11294cc0d2b87be525d4f1765a759615ddc3b9001372bff0a8d2745a00"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:misc.html.twig");
        // line 5
        $context["__internal_3d70e94ffb01c9b3a869954f3fe81cc0bd078df6e6553f891174fc1ede785b86"] = $this->env->loadTemplate("SyliusBackendBundle:Product:list.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
    <h1>";
        // line 9
        echo $this->env->getExtension('translator')->trans("sylius.product.index_header");
        echo "</h1>
</div>

<div class=\"well well-small\">
    ";
        // line 13
        echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "create", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_create"), 1 => $this->env->getExtension('translator')->trans("sylius.product.create")));
        echo "
    ";
        // line 16
        echo "</div>

<div class=\"row-fluid\">
    <div class=\"span5\">
        ";
        // line 20
        echo $this->callMacro($context["__internal_890afa11294cc0d2b87be525d4f1765a759615ddc3b9001372bff0a8d2745a00"], "pagination", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "
    </div>
    <div class=\"span7\">
        ";
        // line 23
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sylius_backend_product_filter_form"), array());
        // line 24
        echo "    </div>
</div>

";
        // line 27
        echo $this->callMacro($context["__internal_3d70e94ffb01c9b3a869954f3fe81cc0bd078df6e6553f891174fc1ede785b86"], "list", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "
";
        // line 28
        echo $this->callMacro($context["__internal_890afa11294cc0d2b87be525d4f1765a759615ddc3b9001372bff0a8d2745a00"], "pagination", array(0 => (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  73 => 27,  68 => 24,  66 => 23,  60 => 20,  54 => 16,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
