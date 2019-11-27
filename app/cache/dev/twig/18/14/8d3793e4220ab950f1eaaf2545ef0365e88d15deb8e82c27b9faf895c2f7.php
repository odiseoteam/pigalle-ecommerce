<?php

/* SyliusBackendBundle:Product/Form:_properties.html.twig */
class __TwigTemplate_18148d3793e4220ab950f1eaaf2545ef0365e88d15deb8e82c27b9faf895c2f7 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"properties\">
    <div id=\"sylius-assortment-product-properties\" class=\"collection-container\" data-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, ("<div id=\"sylius_product_properties___name__\">" . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "property"), 'row', array("attr" => array("class" => "input-xlarge property-chooser")))));
        echo twig_escape_filter($this->env, ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "value"), 'row', array("attr" => array("class" => "input-xlarge"))) . "</div>"));
        echo "\">
        ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"));
        foreach ($context['_seq'] as $context["_key"] => $context["propertyForm"]) {
            // line 4
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["propertyForm"]) ? $context["propertyForm"] : $this->getContext($context, "propertyForm")), 'widget', array("attr" => array("class" => "input-xlarge")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propertyForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "properties"), "vars"), "prototype"), "vars"), "prototypes"));
        foreach ($context['_seq'] as $context["key"] => $context["prototype"]) {
            // line 7
            echo "            <div id=\"property-prototype_";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\" class=\"property-prototypes\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'widget', array("attr" => array("class" => "input-xlarge"))));
            echo "\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['prototype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <div class=\"control-group\">
        <div class=\"controls\">
            <a href=\"#\" class=\"btn btn-success\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-product-properties\" data-collection=\"sylius-assortment-product-properties\">
                ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.add_property"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_properties.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  59 => 9,  48 => 7,  27 => 3,  58 => 11,  54 => 10,  50 => 9,  33 => 5,  25 => 2,  55 => 15,  43 => 6,  40 => 8,  35 => 6,  30 => 3,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 8,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 6,  37 => 5,  34 => 4,  29 => 3,);
    }
}
