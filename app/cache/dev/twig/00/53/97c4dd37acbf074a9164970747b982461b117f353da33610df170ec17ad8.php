<?php

/* SyliusBackendBundle:Product/Form:_categorization.html.twig */
class __TwigTemplate_005397c4dd37acbf074a9164970747b982461b117f353da33610df170ec17ad8 extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"categorization\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "taxons"));
        foreach ($context['_seq'] as $context["_key"] => $context["taxonomyForm"]) {
            // line 3
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["taxonomyForm"]) ? $context["taxonomyForm"] : $this->getContext($context, "taxonomyForm")), 'row', array("attr" => array("class" => "input-xlarge")));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxonomyForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_categorization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  65 => 13,  59 => 9,  48 => 7,  27 => 3,  58 => 11,  54 => 10,  50 => 9,  33 => 5,  25 => 2,  55 => 15,  43 => 6,  40 => 8,  35 => 6,  30 => 3,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 8,  53 => 4,  49 => 11,  46 => 8,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 6,  37 => 5,  34 => 4,  29 => 3,);
    }
}
