<?php

/* SyliusBackendBundle:Variant:_form.html.twig */
class __TwigTemplate_a818db92aa0bbfe0a1e9ed33fd390d726acdc033ed7e58c04e68ebfe3ddf28dd extends Twig_Template
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
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "options", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options")) > 0))) {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options"));
            foreach ($context['_seq'] as $context["_key"] => $context["optionForm"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["optionForm"]) ? $context["optionForm"] : $this->getContext($context, "optionForm")), 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "onHand"), 'row');
        echo "
</fieldset>
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Variant:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  54 => 10,  49 => 9,  46 => 8,  37 => 6,  32 => 5,  30 => 4,  26 => 3,  22 => 1,  53 => 12,  51 => 11,  45 => 10,  39 => 7,  36 => 6,  33 => 5,  28 => 3,);
    }
}
