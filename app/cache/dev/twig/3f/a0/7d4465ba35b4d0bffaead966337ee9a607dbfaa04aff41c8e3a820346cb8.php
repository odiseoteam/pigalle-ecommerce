<?php

/* PigalleBundle:Macros:misc.html.twig */
class __TwigTemplate_3fa07d4465ba35b4d0bffaead966337ee9a607dbfaa04aff41c8e3a820346cb8 extends Twig_Template
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
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getPagination($_paginator = null)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $_paginator,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "haveToPaginate", array(), "method")) {
                // line 3
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "twitter_bootstrap_translated");
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
        return "PigalleBundle:Macros:misc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  41 => 2,  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 69,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 6,  216 => 129,  213 => 118,  210 => 116,  207 => 115,  204 => 113,  201 => 112,  191 => 104,  177 => 93,  172 => 91,  168 => 90,  164 => 89,  160 => 88,  152 => 83,  145 => 79,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 46,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 3,  27 => 1,  66 => 19,  61 => 17,  56 => 15,  50 => 14,  45 => 10,  38 => 6,  35 => 6,  30 => 1,  28 => 3,);
    }
}
