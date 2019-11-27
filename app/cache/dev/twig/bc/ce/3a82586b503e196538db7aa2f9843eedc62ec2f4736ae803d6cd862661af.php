<?php

/* SyliusBackendBundle:Option:macros.html.twig */
class __TwigTemplate_bcce3a82586b503e196538db7aa2f9843eedc62ec2f4736ae803d6cd862661af extends Twig_Template
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
                    "options" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getList($_options = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $_options,
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
            if ((twig_length_filter($this->env, (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))) > 0)) {
                // line 7
                echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", "#id");
                echo "</th>
                <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("name", $this->env->getExtension('translator')->trans("sylius.option.name"));
                echo "</th>
                <th>";
                // line 12
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("presentation", $this->env->getExtension('translator')->trans("sylius.option.presentation"));
                echo "</th>
                <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.option.values"), "html", null, true);
                echo "</th>
                <th>";
                // line 14
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("updatedAt", $this->env->getExtension('translator')->trans("sylius.option.updated_at"));
                echo "</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 20
                    echo "            <tr>
                <td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "name"), "html", null, true);
                    echo "</td>
                <td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "presentation"), "html", null, true);
                    echo "</td>
                <td>
                    <ul>
                        ";
                    // line 26
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "values"));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 27
                        echo "                        <li>";
                        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                        echo "</li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                    </ul>
                </td>
                <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "updatedAt")), "html", null, true);
                    echo "</td>
                <td>
                    <div class=\"pull-right\">
                    ";
                    // line 34
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_option_update", array("id" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id")))));
                    echo "
                    ";
                    // line 35
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_option_delete", array("id" => $this->getAttribute((isset($context["option"]) ? $context["option"] : $this->getContext($context, "option")), "id")))));
                    echo "
                   </div>
                </td>
            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </tbody>
    </table>
";
            } else {
                // line 43
                echo $this->callMacro((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")), "info", array(0 => $this->env->getExtension('translator')->trans("sylius.option.no_results")));
                echo "
";
            }
            // line 45
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
        return "SyliusBackendBundle:Option:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 45,  146 => 43,  141 => 40,  130 => 35,  126 => 34,  120 => 31,  116 => 29,  107 => 27,  103 => 26,  97 => 23,  93 => 22,  89 => 21,  86 => 20,  82 => 19,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  44 => 3,  41 => 2,  64 => 18,  60 => 17,  56 => 16,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
