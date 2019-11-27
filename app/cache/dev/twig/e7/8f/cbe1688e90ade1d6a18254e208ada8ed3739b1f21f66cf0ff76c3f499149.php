<?php

/* SyliusBackendBundle:User:macros.html.twig */
class __TwigTemplate_e78fcbe1688e90ade1d6a18254e208ada8ed3739b1f21f66cf0ff76c3f499149 extends Twig_Template
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
                    "users" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getList($_users = null)
    {
        $context = $this->env->mergeGlobals(array(
            "users" => $_users,
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
            echo "
";
            // line 5
            if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) > 0)) {
                // line 6
                echo "<table id=\"users\" class=\"table table-bordered\">
    <thead>
        <tr>
            <th>";
                // line 9
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("id", $this->env->getExtension('translator')->trans("sylius.user.id"));
                echo "</th>
            <th>";
                // line 10
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("email", $this->env->getExtension('translator')->trans("sylius.user.email"));
                echo "</th>
            <th>";
                // line 11
                echo $this->env->getExtension('sylius_resource')->renderSortingLink("enabled", $this->env->getExtension('translator')->trans("sylius.user.enabled"));
                echo "</th>
            <th>Es mayorista?</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        ";
                // line 17
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 18
                    echo "        <tr>
            <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"), "html", null, true);
                    echo "</td>
            <td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
                    echo "</td>
            <td>
                <span class=\"label label-";
                    // line 22
                    echo (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled")) ? ("success") : ("important"));
                    echo "\">
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "enabled")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                </span>
            </td>
            <td>
            \t<a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_user_toggle_mayorista", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
                    echo "\">
            \t<span class=\"label label-";
                    // line 28
                    echo (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_USER_MAYORISTA"), "method")) ? ("success") : ("important"));
                    echo "\">
                    ";
                    // line 29
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "hasRole", array(0 => "ROLE_USER_MAYORISTA"), "method")) ? ($this->env->getExtension('translator')->trans("sylius.yes")) : ($this->env->getExtension('translator')->trans("sylius.no"))), "html", null, true);
                    echo "
                </span>
                </a>
            </td>
            <td>
                <div class=\"btn-group pull-right\">
                \t";
                    // line 35
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "show", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))));
                    echo "
                \t";
                    // line 36
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_user_update", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))));
                    echo "
                \t";
                    // line 37
                    echo $this->callMacro((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('routing')->getPath("sylius_backend_user_delete", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id")))));
                    echo "
                </div>
            </td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </tbody>
</table>
";
            } else {
                // line 45
                echo "<div class=\"alert alert-info\">
    <h4 class=\"alert-heading\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.alert.info"), "html", null, true);
                echo "</h4>
    ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.user.no_results"), "html", null, true);
                echo "
</div>
";
            }
            // line 50
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
        return "SyliusBackendBundle:User:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  144 => 46,  136 => 42,  121 => 36,  117 => 35,  108 => 29,  93 => 23,  84 => 20,  77 => 18,  64 => 11,  56 => 9,  51 => 6,  49 => 5,  44 => 3,  41 => 2,  30 => 1,  162 => 52,  155 => 49,  149 => 47,  146 => 46,  112 => 32,  104 => 28,  100 => 27,  95 => 24,  92 => 23,  88 => 22,  80 => 19,  75 => 16,  73 => 17,  69 => 13,  65 => 12,  60 => 10,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  46 => 4,  187 => 60,  183 => 59,  178 => 57,  174 => 56,  170 => 54,  161 => 51,  157 => 50,  154 => 50,  150 => 48,  141 => 45,  137 => 41,  129 => 38,  125 => 37,  119 => 33,  113 => 23,  110 => 31,  102 => 17,  89 => 22,  85 => 14,  78 => 11,  71 => 17,  58 => 8,  54 => 14,  47 => 11,  43 => 2,  39 => 7,  36 => 6,  31 => 1,  29 => 3,);
    }
}
