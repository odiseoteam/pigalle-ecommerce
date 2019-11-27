<?php

/* SyliusBackendBundle:Option:index.html.twig */
class __TwigTemplate_4c8067960eaff8fb9990f3ca8517a5639734a7c6a33e95fde277a99fa07793a0 extends Twig_Template
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
        $context["__internal_2335d9e841e121d794554ee27745445be7d840296e5f563fbb6455744360f2aa"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:misc.html.twig");
        // line 5
        $context["__internal_81b2ae3396af97e8fd9428124b9ed1aaeb694417be1cf52a36067b5c55750577"] = $this->env->loadTemplate("SyliusBackendBundle:Option:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
    <h1>";
        // line 9
        echo $this->env->getExtension('translator')->trans("sylius.option.index_header");
        echo "</h1>
</div>

<div class=\"well\">
    ";
        // line 13
        echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "create", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_option_create"), 1 => $this->env->getExtension('translator')->trans("sylius.option.create")));
        echo "
</div>

";
        // line 16
        echo $this->callMacro($context["__internal_2335d9e841e121d794554ee27745445be7d840296e5f563fbb6455744360f2aa"], "pagination", array(0 => (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))));
        echo "
";
        // line 17
        echo $this->callMacro($context["__internal_81b2ae3396af97e8fd9428124b9ed1aaeb694417be1cf52a36067b5c55750577"], "list", array(0 => (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))));
        echo "
";
        // line 18
        echo $this->callMacro($context["__internal_2335d9e841e121d794554ee27745445be7d840296e5f563fbb6455744360f2aa"], "pagination", array(0 => (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Option:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  60 => 17,  56 => 16,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
