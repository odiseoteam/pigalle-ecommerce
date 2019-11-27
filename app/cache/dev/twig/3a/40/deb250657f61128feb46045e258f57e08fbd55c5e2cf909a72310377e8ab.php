<?php

/* SyliusBackendBundle:Product:filterForm.html.twig */
class __TwigTemplate_3a40deb250657f61128feb46045e258f57e08fbd55c5e2cf909a72310377e8ab extends Twig_Template
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
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_index"), "html", null, true);
        echo "\" class=\"form-inline well well-small\">
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'label');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
&nbsp;
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sku"), 'label');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sku"), 'widget');
        echo "
<button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-filter\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.filter"), "html", null, true);
        echo "</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product:filterForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  27 => 2,  22 => 1,  55 => 7,  34 => 4,  100 => 13,  98 => 12,  93 => 11,  82 => 10,  62 => 7,  38 => 3,  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 15,  67 => 13,  53 => 6,  51 => 6,  48 => 5,  46 => 6,  41 => 5,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 35,  115 => 9,  103 => 8,  71 => 14,  63 => 12,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 40,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 18,  65 => 37,  58 => 10,  47 => 26,  44 => 7,  31 => 3,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 6,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
