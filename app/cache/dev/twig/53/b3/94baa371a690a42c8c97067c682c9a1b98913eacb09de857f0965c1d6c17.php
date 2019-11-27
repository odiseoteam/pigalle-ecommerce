<?php

/* SyliusBackendBundle:Dashboard:main.html.twig */
class __TwigTemplate_53b394baa371a690a42c8c97067c682c9a1b98913eacb09de857f0965c1d6c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SyliusBackendBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $context["__internal_04aa8baa8cb3632bdd8803fe5be730ee6fefef07ef9e08671953eb623522763a"] = $this->env->loadTemplate("SyliusBackendBundle:Order:macros.html.twig");
        // line 4
        $context["__internal_b638a7f4a6f367a1e2773b286b4659b1090c3bc30749da68196d858a59d7bb49"] = $this->env->loadTemplate("SyliusBackendBundle:User:macros.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cc7bea7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc7bea7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cc7bea7_Chart.min_1.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
            foreach ($context['_seq'] as $context["id"] => $context["chart"]) {
                // line 15
                echo "                new Chart(\$('#";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "').get(0).getContext('2d')).";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "type"), "html", null, true);
                echo "(";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "data"));
                echo ");
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        });
    </script>
";
        } else {
            // asset "cc7bea7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cc7bea7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cc7bea7.js");
            // line 11
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
            foreach ($context['_seq'] as $context["id"] => $context["chart"]) {
                // line 15
                echo "                new Chart(\$('#";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "').get(0).getContext('2d')).";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "type"), "html", null, true);
                echo "(";
                echo twig_jsonencode_filter($this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "data"));
                echo ");
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['chart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        });
    </script>
";
        }
        unset($context["asset_url"]);
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-header\">
\t<h1>Pigalle Administración - Dashboard <small> Resumen de la tienda</small></h1>
</div>

";
        // line 31
        echo "
<table class=\"table\">
    <thead>
        <tr>
            <th>";
        // line 35
        echo "Ingresos de la última semana";
        echo "</th>
            <th>";
        // line 36
        echo "Pedidos realizados en la última semana";
        echo "</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter((isset($context["revenue"]) ? $context["revenue"] : $this->getContext($context, "revenue"))), "html", null, true);
        echo "</td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["ordersCount"]) ? $context["ordersCount"] : $this->getContext($context, "ordersCount")), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<div class=\"row-fluid\">
    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["charts"]) ? $context["charts"] : $this->getContext($context, "charts")));
        foreach ($context['_seq'] as $context["id"] => $context["chart"]) {
            // line 49
            echo "        <div class=\"span6\">
            <h3>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")), "label")), "html", null, true);
            echo "</h3>
            <canvas id=\"";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" width=\"600\" height=\"400\"></canvas>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['chart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>

<h3>";
        // line 56
        echo "Últimos pedidos";
        echo "</h3>
";
        // line 57
        echo $this->callMacro($context["__internal_04aa8baa8cb3632bdd8803fe5be730ee6fefef07ef9e08671953eb623522763a"], "list", array(0 => (isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))));
        echo "

<h3>";
        // line 59
        echo "Últimos usuarios registrados";
        echo "</h3>
";
        // line 60
        echo $this->callMacro($context["__internal_b638a7f4a6f367a1e2773b286b4659b1090c3bc30749da68196d858a59d7bb49"], "list", array(0 => (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Dashboard:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 60,  183 => 59,  178 => 57,  174 => 56,  170 => 54,  161 => 51,  157 => 50,  154 => 49,  150 => 48,  141 => 42,  137 => 41,  129 => 36,  125 => 35,  119 => 31,  113 => 23,  110 => 22,  102 => 17,  89 => 15,  85 => 14,  78 => 11,  71 => 17,  58 => 15,  54 => 14,  47 => 11,  43 => 8,  39 => 7,  36 => 6,  31 => 4,  29 => 3,);
    }
}
