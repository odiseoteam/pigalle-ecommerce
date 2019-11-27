<?php

/* SyliusBackendBundle:Macros:buttons.html.twig */
class __TwigTemplate_c1ff0d341f6b5afc3920d4b3c32f6d853fe2fdb65694b230bb0dee676e6bc185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "show" => array(
                'method' => "getShow",
                'arguments' => array(
                    "url" => null,
                    "message" => null,
                ),
            ),
            "create" => array(
                'method' => "getCreate",
                'arguments' => array(
                    "url" => null,
                    "message" => null,
                ),
            ),
            "edit" => array(
                'method' => "getEdit",
                'arguments' => array(
                    "url" => null,
                    "message" => null,
                ),
            ),
            "delete" => array(
                'method' => "getDelete",
                'arguments' => array(
                    "url" => null,
                    "message" => null,
                ),
            ),
            "manage" => array(
                'method' => "getManage",
                'arguments' => array(
                    "url" => null,
                    "message" => null,
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
        // line 31
        echo "
";
    }

    // line 1
    public function getShow($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn\">
   <i class=\"icon-book\"></i>
    ";
            // line 4
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.show")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getCreate($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-primary\">
    <i class=\"icon-plus-sign\"></i>
    ";
            // line 11
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.create")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getEdit($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn\">
    <i class=\"icon-pencil\"></i>
    ";
            // line 18
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.edit")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getDelete($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<form action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" method=\"post\" style=\"display: inline;\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <button class=\"btn btn-danger\">
        <i class=\"icon-trash\"></i>
        ";
            // line 27
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.delete")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "
    </button>
</form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getManage($_url = null, $_message = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $_url,
            "message" => $_message,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" class=\"btn btn-success\">
    <i class=\"icon-pencil\"></i>
    ";
            // line 35
            echo twig_escape_filter($this->env, ((twig_test_empty((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) ? ($this->env->getExtension('translator')->trans("sylius.manage")) : ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))), "html", null, true);
            echo "
</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 11,  115 => 9,  103 => 8,  71 => 1,  63 => 21,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 25,  137 => 23,  132 => 16,  129 => 15,  123 => 4,  117 => 98,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 38,  65 => 37,  58 => 35,  47 => 26,  44 => 15,  31 => 4,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
