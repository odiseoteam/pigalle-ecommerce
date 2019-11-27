<?php

/* SyliusBackendBundle:Product/Form:_main.html.twig */
class __TwigTemplate_3eabc83ff70eed30e406bd89a61725310c5b5d3c92965b06301c47dfd5a8691b extends Twig_Template
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
        echo "<div class=\"tab-pane active\" id=\"main\">
\t";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "sku"), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row', array("attr" => array("class" => "input-xxlarge")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "slug"), 'row', array("attr" => array("class" => "input-xxlarge")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row', array("attr" => array("class" => "input-xxlarge", "rows" => 10)));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "shortDescription"), 'row', array("attr" => array("class" => "input-xxlarge", "rows" => 3)));
        echo "
    <hr />
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isFeatured"), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "price"), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceWithoutDiscount"), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "onHand"), 'row');
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  50 => 9,  33 => 4,  25 => 2,  55 => 15,  43 => 9,  40 => 8,  35 => 6,  30 => 4,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 8,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 6,  37 => 5,  34 => 5,  29 => 3,);
    }
}
