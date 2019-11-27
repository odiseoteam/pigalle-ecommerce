<?php

/* SyliusBackendBundle::menu_main.html.twig */
class __TwigTemplate_400174d5d68e6c4dbbf18b74c81854892dcdf621081306e4a9d6db5733442546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'spanElement' => array($this, 'block_spanElement'),
        );

        $this->macros = array(
            "attributes" => array(
                'method' => "getAttributes",
                'arguments' => array(
                    "attributes" => null,
                ),
            ),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method")) {
            echo "<i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>";
        }
        // line 5
        echo "    ";
        if ((!$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "iconOnly"), "method"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label")), "html", null, true);
        }
        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "data-image"), "method")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "data-image"), "method"), "sylius_16x16", true), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "\" class=\"menu-thumbnail\"/>";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttribute", array(0 => "with_divider"), "method")) {
            echo "<li class=\"divider\"></li>";
        }
    }

    // line 18
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<a";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren")) {
            echo " <b class=\"caret\">";
        }
        echo "</b></a>";
    }

    // line 10
    public function getAttributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 12
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 13
                    echo sprintf(" %s=\"%s\"", (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), ((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === true)) ? (twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) : (twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle::menu_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  98 => 12,  93 => 11,  82 => 10,  62 => 7,  38 => 3,  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 15,  67 => 13,  53 => 6,  51 => 6,  48 => 5,  46 => 4,  41 => 4,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 35,  115 => 9,  103 => 8,  71 => 14,  63 => 12,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 40,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 18,  65 => 37,  58 => 10,  47 => 26,  44 => 3,  31 => 1,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 8,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
