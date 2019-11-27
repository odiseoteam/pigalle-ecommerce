<?php

/* SyliusBackendBundle:Product/Form:_options.html.twig */
class __TwigTemplate_710d14812d24e39ab48aad7def07651aeb65f2d2402416112e9b73b779b72d92 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"options\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "options", array(), "any", true, true)) {
            // line 3
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options"), 'row', array("attr" => array("class" => "input-xlarge")));
            echo "
    ";
        }
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  58 => 11,  54 => 10,  50 => 9,  33 => 5,  25 => 2,  55 => 15,  43 => 9,  40 => 8,  35 => 6,  30 => 4,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 8,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 6,  37 => 5,  34 => 5,  29 => 3,);
    }
}
