<?php

/* SyliusBackendBundle::gallery.html.twig */
class __TwigTemplate_5188c00733ccbcfe4c42bae03308ceef2121d21ae38fdc3f95413eecea6c6f22 extends Twig_Template
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
        echo "<div id=\"modal-gallery\" class=\"modal modal-gallery hide fade\" tabindex=\"-1\">
    <div class=\"modal-header\">
        <a class=\"close\" data-dismiss=\"modal\">&times;</a>

        <h3 class=\"modal-title\"></h3>
    </div>
    <div class=\"modal-body\">
        <div class=\"modal-image\"></div>
    </div>
    <div class=\"modal-footer\">
        <a class=\"btn btn-info modal-prev\"><i class=\"icon-arrow-left icon-white\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.gallery.previous"), "html", null, true);
        echo "</a>
        <a class=\"btn btn-primary modal-next\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.gallery.next"), "html", null, true);
        echo " <i class=\"icon-arrow-right icon-white\"></i></a>
        <a class=\"btn btn-success modal-play modal-slideshow\" data-slideshow=\"5000\"><i class=\"icon-play icon-white\"></i>
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.gallery.slideshow"), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle::gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 25,  164 => 23,  139 => 18,  107 => 11,  52 => 21,  49 => 14,  36 => 5,  27 => 2,  22 => 1,  55 => 7,  34 => 11,  100 => 9,  98 => 12,  93 => 11,  82 => 10,  62 => 7,  38 => 12,  210 => 72,  205 => 70,  200 => 67,  189 => 62,  185 => 61,  181 => 60,  169 => 54,  165 => 53,  161 => 51,  155 => 49,  150 => 47,  145 => 46,  143 => 45,  128 => 39,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  91 => 22,  87 => 21,  79 => 16,  75 => 4,  67 => 13,  53 => 6,  51 => 6,  48 => 5,  46 => 7,  41 => 5,  45 => 3,  220 => 35,  214 => 33,  202 => 32,  167 => 24,  153 => 22,  147 => 16,  135 => 17,  121 => 15,  115 => 9,  103 => 10,  71 => 3,  63 => 12,  57 => 1,  248 => 97,  192 => 95,  187 => 27,  184 => 84,  179 => 23,  175 => 57,  137 => 42,  132 => 16,  129 => 15,  123 => 4,  117 => 34,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 8,  83 => 2,  69 => 18,  65 => 37,  58 => 10,  47 => 26,  44 => 7,  31 => 3,  26 => 1,  77 => 50,  73 => 27,  68 => 2,  66 => 31,  60 => 14,  54 => 16,  50 => 13,  43 => 14,  40 => 6,  37 => 7,  32 => 5,  30 => 1,  28 => 3,);
    }
}
