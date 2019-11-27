<?php

/* SyliusBackendBundle::menu_dashboard.html.twig */
class __TwigTemplate_f0a3ae82900e1c863483da2fd531a3c68c566c940a00861b559fdddc7f481f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );

        $this->macros = array(
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

    public function getTemplateName()
    {
        return "SyliusBackendBundle::menu_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  34 => 4,  100 => 13,  98 => 12,  93 => 11,  82 => 10,  62 => 7,  38 => 3,  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 15,  67 => 13,  53 => 6,  51 => 6,  48 => 5,  46 => 6,  41 => 5,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 22,  153 => 18,  147 => 16,  135 => 15,  121 => 35,  115 => 9,  103 => 8,  71 => 14,  63 => 12,  57 => 7,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 40,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 4,  83 => 2,  69 => 18,  65 => 37,  58 => 10,  47 => 26,  44 => 3,  31 => 3,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 2,  40 => 8,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
