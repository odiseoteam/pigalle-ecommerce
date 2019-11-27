<?php

/* PigalleBundle:Main:newsletter_subscribe_widget.html.twig */
class __TwigTemplate_0e35aa77ed65da70eb7f8b65ea2f892120a271a0752a4bce1fe2db1824be4fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form class=\"newsletter\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gecko_newsletter_subscriber_subscribe"), "html", null, true);
        echo "\" method=\"post\">
\t<span class=\"title\">NEWSLETTER:</span> 
\t";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "INGRESA E-MAIL")));
        echo "
\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo " 
\t<button type=\"submit\">ENVIAR</button>
</form>";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Main:newsletter_subscribe_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,  270 => 65,  266 => 64,  259 => 59,  246 => 56,  242 => 55,  239 => 54,  228 => 53,  197 => 43,  190 => 39,  186 => 38,  182 => 37,  171 => 32,  169 => 31,  165 => 30,  161 => 29,  157 => 28,  153 => 27,  149 => 26,  144 => 24,  136 => 21,  132 => 19,  130 => 18,  127 => 17,  116 => 16,  103 => 12,  89 => 11,  84 => 8,  79 => 6,  77 => 5,  72 => 4,  55 => 3,  52 => 2,  40 => 1,  43 => 3,  41 => 2,  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 69,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 48,  216 => 129,  213 => 118,  210 => 45,  207 => 115,  204 => 113,  201 => 44,  191 => 104,  177 => 34,  172 => 91,  168 => 90,  164 => 89,  160 => 88,  152 => 83,  145 => 79,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 7,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 4,  27 => 1,  66 => 19,  61 => 17,  56 => 15,  50 => 14,  45 => 10,  38 => 6,  35 => 15,  30 => 1,  28 => 3,);
    }
}
