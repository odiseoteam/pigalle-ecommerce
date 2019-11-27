<?php

/* SyliusBackendBundle:Variant:create.html.twig */
class __TwigTemplate_358a30bab47ef7405db33598fe37ba7a1bb227b11ea9f765ed21eef84a7439ce extends Twig_Template
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
        $context["__internal_55fa33732a8b8cf872060293211ec4f6653decf203ddcfbb9a0709dcdc6d8ffa"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\">
<h1>";
        // line 7
        echo $this->env->getExtension('translator')->trans("sylius.variant.create_header");
        echo "</h1>
</div>

<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_variant_create", array("productId" => $this->getAttribute($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product"), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 11
        $this->env->loadTemplate("SyliusBackendBundle:Variant:_form.html.twig")->display($context);
        // line 12
        echo "    ";
        echo $this->callMacro($context["__internal_55fa33732a8b8cf872060293211ec4f6653decf203ddcfbb9a0709dcdc6d8ffa"], "create", array());
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Variant:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  51 => 11,  45 => 10,  39 => 7,  36 => 6,  33 => 5,  28 => 3,);
    }
}
