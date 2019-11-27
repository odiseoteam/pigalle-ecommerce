<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_6a59531dbc61848900b0b669afd5a089c160e258c6945ff283ebd45b8208c1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path"))) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url")), "html", null, true);
                echo "\" ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) ? $context["link_attr"] : $this->getContext($context, "link_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter((isset($context["image_path"]) ? $context["image_path"] : $this->getContext($context, "image_path")), (isset($context["image_filter"]) ? $context["image_filter"] : $this->getContext($context, "image_filter"))), "html", null, true);
            echo "\" ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) ? $context["image_attr"] : $this->getContext($context, "image_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) ? $context["link_url"] : $this->getContext($context, "link_url"))) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 17,  88 => 16,  80 => 12,  78 => 11,  58 => 8,  29 => 2,  23 => 1,  22 => 1,  270 => 65,  266 => 64,  259 => 59,  246 => 56,  242 => 55,  239 => 54,  228 => 53,  197 => 43,  190 => 39,  186 => 38,  182 => 37,  171 => 32,  169 => 31,  165 => 30,  161 => 29,  157 => 28,  153 => 27,  149 => 26,  144 => 24,  136 => 21,  132 => 19,  130 => 18,  127 => 17,  116 => 16,  103 => 12,  89 => 11,  84 => 14,  79 => 6,  77 => 5,  72 => 4,  55 => 3,  52 => 2,  40 => 6,  43 => 3,  41 => 2,  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 69,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 48,  216 => 129,  213 => 118,  210 => 45,  207 => 115,  204 => 113,  201 => 44,  191 => 104,  177 => 34,  172 => 91,  168 => 90,  164 => 89,  160 => 88,  152 => 83,  145 => 79,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 7,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 3,  27 => 1,  66 => 19,  61 => 9,  56 => 15,  50 => 14,  45 => 10,  38 => 5,  35 => 4,  30 => 1,  28 => 3,);
    }
}
