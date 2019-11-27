<?php

/* SyliusBackendBundle:Macros:alerts.html.twig */
class __TwigTemplate_b216a2646493750b5bd54ec9f63d1eb722733b3c1d2b5f3cf43f486f34a61c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "success" => array(
                'method' => "getSuccess",
                'arguments' => array(
                    "text" => null,
                ),
            ),
            "info" => array(
                'method' => "getInfo",
                'arguments' => array(
                    "text" => null,
                ),
            ),
            "error" => array(
                'method' => "getError",
                'arguments' => array(
                    "text" => null,
                ),
            ),
            "warning" => array(
                'method' => "getWarning",
                'arguments' => array(
                    "text" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 14
        echo "
";
        // line 21
        echo "
";
    }

    // line 1
    public function getSuccess($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"alert alert-success\">
    <h4 class=\"alert-heading\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.success"), "html", null, true);
            echo "</h4>
    ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getInfo($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<div class=\"alert alert-info\">
    <h4 class=\"alert-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.info"), "html", null, true);
            echo "</h4>
    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getError($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<div class=\"alert alert-error\">
    <h4 class=\"alert-heading\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.error"), "html", null, true);
            echo "</h4>
    ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getWarning($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div class=\"alert alert-warning\">
    <h4 class=\"alert-heading\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.warning"), "html", null, true);
            echo "</h4>
    ";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
            echo "
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
        return "SyliusBackendBundle:Macros:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 25,  164 => 23,  139 => 18,  107 => 11,  52 => 21,  49 => 14,  36 => 5,  27 => 2,  22 => 1,  55 => 7,  34 => 4,  100 => 9,  98 => 12,  93 => 11,  82 => 10,  62 => 7,  38 => 3,  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 4,  67 => 13,  53 => 6,  51 => 6,  48 => 5,  46 => 7,  41 => 5,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 24,  153 => 22,  147 => 16,  135 => 17,  121 => 15,  115 => 9,  103 => 10,  71 => 3,  63 => 12,  57 => 1,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 16,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 8,  83 => 2,  69 => 18,  65 => 37,  58 => 10,  47 => 26,  44 => 7,  31 => 3,  26 => 1,  77 => 50,  73 => 27,  68 => 2,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 6,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
