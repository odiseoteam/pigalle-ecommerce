<?php

/* SyliusBackendBundle:Macros:misc.html.twig */
class __TwigTemplate_431d037344f6b24c0d68444fe15b1d79cc2d4d23157544aa5a9efd578cb34d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "pagination" => array(
                'method' => "getPagination",
                'arguments' => array(
                    "paginator" => null,
                    "options" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getPagination($_paginator = null, $_options = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
            "options" => $_options,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "haveToPaginate", array(), "method"), false)) : (false))) {
                // line 3
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "twitter_bootstrap_translated", ((array_key_exists("options", $context)) ? (_twig_default_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array())) : (array())));
                echo "
";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Macros:misc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 11,  115 => 9,  103 => 8,  71 => 1,  63 => 21,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 25,  137 => 23,  132 => 16,  129 => 15,  123 => 4,  117 => 98,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 38,  65 => 37,  58 => 35,  47 => 26,  44 => 15,  31 => 1,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
