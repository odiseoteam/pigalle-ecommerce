<?php

/* SyliusBackendBundle:Macros:actions.html.twig */
class __TwigTemplate_66acb575cfe669b40ede10596220a776c2753a90a9b3f9c2733cba31c585ac84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "create" => array(
                'method' => "getCreate",
                'arguments' => array(
                ),
            ),
            "update" => array(
                'method' => "getUpdate",
                'arguments' => array(
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 1
    public function getCreate()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-large\"><i class=\"icon-ok\"></i> ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.create"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "headers"), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-large\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
            echo "</a>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getUpdate()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<div class=\"form-actions\">
    <button type=\"submit\" class=\"btn btn-primary btn-large\"><i class=\"icon-save\"></i> ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.save_changes"), "html", null, true);
            echo "</button>
    <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "headers"), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" class=\"btn btn-large\"><i class=\"icon-remove\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.cancel"), "html", null, true);
            echo "</a>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Macros:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 3,  46 => 2,  32 => 7,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 7,  37 => 1,  34 => 5,  29 => 3,);
    }
}
