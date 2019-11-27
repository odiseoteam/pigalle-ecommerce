<?php

/* SyliusBackendBundle:Product/Form:_tabs.html.twig */
class __TwigTemplate_7dfbf0826b67a15160bca9f9935f56f40aa14f50800a68adf678ac41222ab743 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
    <li class=\"active\"><a href=\"#main\" data-toggle=\"tab\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.product"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#categorization\" data-toggle=\"tab\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.categorization"), "html", null, true);
        echo "</a></li>
    <li><a href=\"#images\" data-toggle=\"tab\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.tabs.images"), "html", null, true);
        echo "</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  25 => 2,  55 => 15,  43 => 9,  40 => 8,  35 => 6,  30 => 4,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 10,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 7,  37 => 7,  34 => 5,  29 => 3,);
    }
}
