<?php

/* SyliusBackendBundle:Product:_form.html.twig */
class __TwigTemplate_3055f0695f8eebde4858cf23bffc0c0d7d5e7b0b019a58094b0b3af6e98b940a extends Twig_Template
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
        echo "<div class=\"form-container\">
<fieldset>
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 4
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_tabs.html.twig")->display($context);
        // line 5
        echo "    <div class=\"tab-content\">
        ";
        // line 6
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_main.html.twig")->display($context);
        // line 7
        echo "        ";
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_options.html.twig")->display($context);
        // line 8
        echo "        ";
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_properties.html.twig")->display($context);
        // line 9
        echo "        ";
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_categorization.html.twig")->display($context);
        // line 10
        echo "        ";
        $this->env->loadTemplate("SyliusBackendBundle:Product/Form:_images.html.twig")->display($context);
        // line 11
        echo "    </div>
</fieldset>
</div>

";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  43 => 9,  40 => 8,  35 => 6,  30 => 4,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 10,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 7,  37 => 7,  34 => 5,  29 => 3,);
    }
}
