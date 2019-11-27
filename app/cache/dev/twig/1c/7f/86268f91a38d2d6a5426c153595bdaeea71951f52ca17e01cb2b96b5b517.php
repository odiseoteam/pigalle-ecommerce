<?php

/* SyliusBackendBundle:Order:macros.html.twig */
class __TwigTemplate_1c7f86268f91a38d2d6a5426c153595bdaeea71951f52ca17e01cb2b96b5b517 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "list" => array(
                'method' => "getList",
                'arguments' => array(
                    "orders" => null,
                    "user" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getList($_orders = null, $_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "orders" => $_orders,
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
";
            // line 3
            $context["buttons"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:buttons.html.twig");
            // line 4
            $context["alerts"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:alerts.html.twig");
            // line 5
            echo "
";
            // line 6
            $context["router_paramters"] = (((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) ? (array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))) : (array()));
            // line 7
            echo "
";
            // line 8
            if ((twig_length_filter($this->env, (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) > 0)) {
                // line 9
                echo "<table id=\"orders\" class=\"table\">
    <thead>
        <tr>
            <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("createdAt", $this->env->getExtension('translator')->trans("sylius.order.created_at"), null, null, (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters")));
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("number", $this->env->getExtension('translator')->trans("sylius.order.number"), null, null, (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters")));
                echo "</th>
            ";
                // line 15
                echo "            ";
                // line 16
                echo "            <th>";
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("user", $this->env->getExtension('translator')->trans("sylius.order.user"), null, null, (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters")));
                echo "</th>
            <th>";
                // line 17
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("total", $this->env->getExtension('translator')->trans("sylius.order.total"), null, null, (isset($context["router_paramters"]) ? $context["router_paramters"] : $this->getContext($context, "router_paramters")));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 23
                    echo "        <tr>
            <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "createdAt"), "d/m/Y g:ia"), "html", null, true);
                    echo "</td>
            <td>
                <a href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                <strong>#";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "number"), "html", null, true);
                    echo "</strong>
                </a>
            </td>
            ";
                    // line 31
                    echo "            ";
                    // line 32
                    echo "            <td><a href=\"mailto:";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user", array(), "any", false, true), "email"), "john@example.com")) : ("john@example.com")), "html", null, true);
                    echo "\" class=\"btn btn-link\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "user", array(), "any", false, true), "email"), "john@example.com")) : ("john@example.com")), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "total")), "html", null, true);
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 36
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "show", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_order_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id")))));
                    echo "
                ";
                    // line 38
                    echo "                ";
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_order_delete", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id")))));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "    </tbody>
</table>
";
            } else {
                // line 46
                echo "    ";
                if ((!(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))))) {
                    // line 47
                    echo "        ";
                    echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.user.order.no_results")));
                    echo "
    ";
                } else {
                    // line 49
                    echo "        ";
                    echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.order.no_results")));
                    echo "
    ";
                }
            }
            // line 52
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Order:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 52,  155 => 49,  149 => 47,  146 => 46,  112 => 32,  104 => 27,  100 => 26,  95 => 24,  92 => 23,  88 => 22,  80 => 17,  75 => 16,  73 => 15,  69 => 13,  65 => 12,  60 => 9,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 3,  187 => 60,  183 => 59,  178 => 57,  174 => 56,  170 => 54,  161 => 51,  157 => 50,  154 => 49,  150 => 48,  141 => 43,  137 => 41,  129 => 38,  125 => 36,  119 => 33,  113 => 23,  110 => 31,  102 => 17,  89 => 15,  85 => 14,  78 => 11,  71 => 17,  58 => 8,  54 => 14,  47 => 11,  43 => 2,  39 => 7,  36 => 6,  31 => 1,  29 => 3,);
    }
}
