<?php

/* SyliusBackendBundle:Product:list.html.twig */
class __TwigTemplate_b427394fd64773f398986d9c3f5b1e702ce3fd3e3d5b376f184be02ef65347ef extends Twig_Template
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
                    "products" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getList($_products = null)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
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
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) > 0)) {
                // line 7
                echo "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
            <th></th>
            <th>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.sku"), "html", null, true);
                echo "</th>
            <th>";
                // line 13
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.product.name"));
                echo "</th>
            <th>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.price"), "html", null, true);
                echo "</th>
            <th>";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.is_featured"), "html", null, true);
                echo "</th>
            <th>";
                // line 16
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.product.updated_at"));
                echo "</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 22
                    echo "        <tr>
            <td>
                <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
                    echo "
                </a>
            </td>
            <td>
                <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"thumbnail thumbnail-image\">
                    <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", false, true), "path"), "http://placehold.it/50x40")) : ("http://placehold.it/50x40")), "sylius_50x40"), "html", null, true);
                    echo "\" alt=\"\" />
                </a>
            </td>
            <td>
                <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\" class=\"btn btn-link\">
                    ";
                    // line 35
                    echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "sku"), $this->env->getExtension('translator')->trans("sylius.product.no_sku"))) : ($this->env->getExtension('translator')->trans("sylius.product.no_sku")));
                    echo "
                </a>
            </td>
            <td>
                <a href=\"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
                    echo "\">
                    <strong>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                    echo "</strong>
                </a>
                <p>";
                    // line 42
                    echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "shortDescription"), 50), "html", null, true);
                    echo "</p>
            </td>
            <td>
            \t";
                    // line 45
                    if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) {
                        // line 46
                        echo "            \t<span class=\"label label-warning\">";
                        echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
                        echo "</span>
            \t<span class=\"label label-success linethrough\">";
                        // line 47
                        echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPriceWithoutDiscount"));
                        echo "</span>
            \t";
                    } else {
                        // line 49
                        echo "            \t<span class=\"label label-success\">";
                        echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
                        echo "</span>
            \t";
                    }
                    // line 51
                    echo "            </td>
            <td>
                <span class=\"label label-";
                    // line 53
                    echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isFeatured")) ? ("success") : ("important"));
                    echo "\">
                    ";
                    // line 54
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isFeatured")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                </span>
            </td>
            <td><span class=\"label label-info\">";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "updatedAt"), "d/m/Y g:ia"), "html", null, true);
                    echo "</span></td>
            <td>
                <div class=\"pull-right\">
                ";
                    // line 60
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "show", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_show", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id")))));
                    echo "
                ";
                    // line 61
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id")))));
                    echo "
                ";
                    // line 62
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id")))));
                    echo "
                </div>
            </td>
        </tr>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "    </tbody>
</table>
";
            } else {
                // line 70
                echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.no_results")));
                echo "
";
            }
            // line 72
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
        return "SyliusBackendBundle:Product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 15,  67 => 13,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  41 => 2,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 35,  115 => 9,  103 => 8,  71 => 14,  63 => 12,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 40,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 38,  65 => 37,  58 => 10,  47 => 26,  44 => 3,  31 => 1,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 8,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
