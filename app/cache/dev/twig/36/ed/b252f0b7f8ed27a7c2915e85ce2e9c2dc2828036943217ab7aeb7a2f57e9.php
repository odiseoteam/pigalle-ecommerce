<?php

/* SyliusBackendBundle:Product:update.html.twig */
class __TwigTemplate_36edb252f0b7f8ed27a7c2915e85ce2e9c2dc2828036943217ab7aeb7a2f57e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusBackendBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $context["__internal_8e5aed675097057cc71bf33a071a1d8c87bb8209e78f467fcae56705371c624d"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:actions.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8594173_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8594173_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8594173_prototype-handler_1.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "8594173_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8594173_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8594173_dynamic-property-types_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "8594173"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8594173") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8594173.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"page-header\">
<h1>";
        // line 17
        echo $this->env->getExtension('translator')->trans("sylius.product.update_header");
        echo "</h1>
</div>

<form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-horizontal\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    <input type=\"hidden\" name=\"_method\" value=\"PUT\">
    ";
        // line 22
        $this->env->loadTemplate("SyliusBackendBundle:Product:_form.html.twig")->display($context);
        // line 23
        echo "    ";
        echo $this->callMacro($context["__internal_8e5aed675097057cc71bf33a071a1d8c87bb8209e78f467fcae56705371c624d"], "update", array());
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 7,  37 => 6,  34 => 5,  29 => 3,);
    }
}
