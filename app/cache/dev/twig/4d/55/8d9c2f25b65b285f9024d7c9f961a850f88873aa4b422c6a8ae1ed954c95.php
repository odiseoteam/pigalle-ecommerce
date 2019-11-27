<?php

/* PigalleBundle::gallery.html.twig */
class __TwigTemplate_4d558d9c2f25b65b285f9024d7c9f961a850f88873aa4b422c6a8ae1ed954c95 extends Twig_Template
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
        return "PigalleBundle::gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  38 => 12,  71 => 17,  65 => 15,  63 => 14,  59 => 13,  55 => 12,  50 => 10,  44 => 9,  40 => 7,  34 => 11,  32 => 4,  26 => 3,  22 => 1,);
    }
}
