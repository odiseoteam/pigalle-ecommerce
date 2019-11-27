<?php

/* SyliusBackendBundle:Variant:list.html.twig */
class __TwigTemplate_1b997c404a583c78127f224310c7e2432711ef461f54202221adc1a221be7a8f extends Twig_Template
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
                    "variants" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getList($_variants = null)
    {
        $context = $this->env->mergeGlobals(array(
            "variants" => $_variants,
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
            if ((twig_length_filter($this->env, (isset($context["variants"]) ? $context["variants"] : $this->getContext($context, "variants"))) > 0)) {
                // line 7
                echo "<table class=\"table\" id=\"variants\">
    <thead>
        <tr>
            <th>id</th>
            <th>";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.last_update"), "html", null, true);
                echo "</th>
            <th>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.options"), "html", null, true);
                echo "</th>
            <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.stock"), "html", null, true);
                echo "</th>
            <th>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.price"), "html", null, true);
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["variants"]) ? $context["variants"] : $this->getContext($context, "variants")));
                foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                    // line 20
                    echo "        ";
                    $context["product"] = $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "product");
                    // line 21
                    echo "        <tr>
            <td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id"), "html", null, true);
                    echo "</td>
            <td><span class=\"label label-info\">";
                    // line 23
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "updatedAt"), "d/m/Y g:ia"), "html", null, true);
                    echo "</span></td>
            <td>
                <ul>
                    ";
                    // line 26
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 27
                        echo "                        <li><strong>";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "value"), "html", null, true);
                        echo "</li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                </ul>
            </td>
            <td><span class=\"badge badge-";
                    // line 31
                    echo (($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "inStock")) ? ("success") : ("important"));
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "onHand"), "html", null, true);
                    echo "</span></td>
            <td>";
                    // line 32
                    echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "price"));
                    echo "</td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 35
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_variant_update", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id")))));
                    echo "
                ";
                    // line 36
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_variant_delete", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "id" => $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "id")))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "    </tbody>
</table>
";
            } else {
                // line 44
                echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.variant.no_results")));
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
        return "SyliusBackendBundle:Variant:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  122 => 32,  116 => 31,  103 => 27,  99 => 26,  93 => 23,  89 => 22,  86 => 21,  83 => 20,  79 => 19,  71 => 14,  67 => 13,  63 => 12,  59 => 11,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  44 => 3,  41 => 2,  247 => 90,  241 => 87,  237 => 86,  232 => 83,  230 => 82,  220 => 75,  216 => 74,  212 => 72,  206 => 70,  201 => 68,  196 => 67,  194 => 66,  187 => 64,  184 => 63,  178 => 60,  175 => 59,  171 => 57,  162 => 55,  158 => 54,  155 => 53,  153 => 52,  148 => 44,  144 => 49,  136 => 44,  132 => 36,  128 => 35,  124 => 41,  120 => 40,  112 => 29,  106 => 32,  102 => 30,  91 => 27,  84 => 26,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  65 => 19,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
