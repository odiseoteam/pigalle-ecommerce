<?php

/* SyliusBackendBundle:Product:show.html.twig */
class __TwigTemplate_2ad70c91fe9010a11f28ba40c2633a79ecac5fdbf175919c1f01d7f51bd9269e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusBackendBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusBackendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_440278331f072745db5a84d5d069c282fea31746a1769483561b447811af4dee"] = $this->env->loadTemplate("SyliusBackendBundle:Variant:list.html.twig");
        // line 4
        $context["buttons"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:buttons.html.twig");
        // line 5
        $context["alerts"] = $this->env->loadTemplate("SyliusBackendBundle:Macros:alerts.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"page-header\">
<h1>";
        // line 9
        echo $this->env->getExtension('translator')->trans("sylius.product.show_header", array("%product%" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name")));
        echo "</h1>
</div>

<div class=\"well well-small\">
    ";
        // line 13
        echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "manage", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_index"), 1 => $this->env->getExtension('translator')->trans("sylius.product.manage")));
        echo "
    ";
        // line 14
        echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_update", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id")))));
        echo "
    ";
        // line 15
        echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_product_delete", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id")))));
        echo "
</div>

<div class=\"well\">
    <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</h3>
    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description"), "html", null, true);
        echo "</p>
</div>

";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images")) > 0)) {
            // line 24
            echo "<div class=\"well\" data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\">
\t";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                echo "\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_gallery"), "html", null, true);
                echo "\" data-gallery=\"gallery\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\">
\t\t<img class=\"img-polaroid\" src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "pigalle_60x60"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\" />
\t</a>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</div>
";
        } else {
            // line 32
            echo "\t";
            echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.product.no_images")));
            echo "
";
        }
        // line 34
        echo "
<hr>
<table class=\"table table-bordered\">
    <thead>
        <tr>
            <th>id</th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.name"), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.categorization"), "html", null, true);
        echo "</th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.stock"), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.price"), "html", null, true);
        echo "</th>
            <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.is_featured"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"), "html", null, true);
        echo "</td>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
        echo "</td>
            <td>
                ";
        // line 52
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "taxons")) > 0)) {
            // line 53
            echo "                <ul>
                ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "taxons"));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 55
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["taxon"]) ? $context["taxon"] : $this->getContext($context, "taxon")), "name"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </ul>
                ";
        } else {
            // line 59
            echo "                    <span class=\"label label-info\">
                        <i class=\"icon-list-alt icon-white\"></i> ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.product.no_taxons"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 63
        echo "            </td>
            <td><span class=\"badge badge-";
        // line 64
        echo (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "inStock")) ? ("success") : ("important"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "onHand"), "html", null, true);
        echo "</span></td>
            <td>
            \t";
        // line 66
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) {
            // line 67
            echo "            \t<span class=\"label label-warning\">";
            echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
            echo "</span>
            \t<span class=\"label label-success linethrough\">";
            // line 68
            echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getPriceWithoutDiscount"));
            echo "</span>
            \t";
        } else {
            // line 70
            echo "            \t<span class=\"label label-success\">";
            echo $this->env->getExtension('sylius_money')->formatMoney($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price"));
            echo "</span>
            \t";
        }
        // line 72
        echo "            </td>
            <td>
                <span class=\"label label-";
        // line 74
        echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isFeatured")) ? ("success") : ("important"));
        echo "\">
                    ";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isFeatured")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
        echo "
                </span>
            </td>
        </tr>
    </tbody>
</table>

";
        // line 82
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "hasOptions")) {
            // line 83
            echo "<hr>
<h3>Talles del producto</h3>
<div class=\"well well-small\">
    ";
            // line 86
            echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "create", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_variant_create", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), 1 => $this->env->getExtension('translator')->trans("sylius.variant.create")));
            echo "
    ";
            // line 87
            echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "manage", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_variant_generate", array("productId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), 1 => $this->env->getExtension('translator')->trans("sylius.product.generate_variants")));
            echo "
</div>

";
            // line 90
            echo $this->callMacro($context["__internal_440278331f072745db5a84d5d069c282fea31746a1769483561b447811af4dee"], "list", array(0 => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants")));
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 90,  241 => 87,  237 => 86,  232 => 83,  230 => 82,  220 => 75,  216 => 74,  212 => 72,  206 => 70,  201 => 68,  196 => 67,  194 => 66,  187 => 64,  184 => 63,  178 => 60,  175 => 59,  171 => 57,  162 => 55,  158 => 54,  155 => 53,  153 => 52,  148 => 50,  144 => 49,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  112 => 34,  106 => 32,  102 => 30,  91 => 27,  84 => 26,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  65 => 19,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
