<?php

/* SyliusBackendBundle::layout.html.twig */
class __TwigTemplate_5a3fd470fa48dbd68abf5cec0c01bc6b96ab85ae2f624c98cb2d021c402c071c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        ";
        // line 15
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
    \t<div class=\"navbar\">
  \t\t\t<div class=\"navbar-inner\">
      \t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
        \t\t\t<span class=\"icon-bar\"></span>
        \t\t\t<span class=\"icon-bar\"></span>
        \t\t\t<span class=\"icon-bar\"></span>
      \t\t\t</a>      \t\t\t
    \t\t\t<a class=\"brand\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_backend_dashboard"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.meta.title"), "html", null, true);
        echo "</a>
    \t\t\t<div class=\"nav-collapse collapse\">
    \t\t\t\t";
        // line 37
        echo $this->env->getExtension('knp_menu')->render("sylius_backend.menu.main", array("template" => "SyliusBackendBundle::menu_main.html.twig", "currentClass" => "active"));
        echo "
    \t\t\t\t";
        // line 38
        echo $this->env->getExtension('knp_menu')->render("sylius_backend.menu.main_account", array("template" => "SyliusBackendBundle::menu_main.html.twig", "currentClass" => "active"));
        echo "
\t\t\t\t</div>
  \t\t\t</div>
\t\t</div>
\t\t
\t\t";
        // line 50
        echo "\t\t
\t\t<div id=\"content\" class=\"container-fluid\">
\t\t\t<div class=\"row-fluid\">
                <div class=\"span2\">
                \t";
        // line 54
        echo $this->env->getExtension('knp_menu')->render("sylius_backend.menu.dashboard", array("template" => "SyliusBackendBundle::menu_dashboard.html.twig", "currentClass" => "active"));
        echo "
                </div>
                <div class=\"span10\">                
\t\t\t\t\t";
        // line 69
        echo "\t\t
\t\t\t        ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"container-fluid\">
\t\t\t<hr />
\t\t\t<footer><p>&copy; <a href=\"http://www.pigalle.com.ar\">Pigalle</a>, 2012 - ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p></footer>
\t\t</div>
\t\t
\t\t";
        // line 81
        echo "\t\t";
        $this->env->loadTemplate("SyliusBackendBundle::gallery.html.twig")->display($context);
        // line 82
        echo "\t\t
        ";
        // line 84
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.backend.meta.title"), "html", null, true);
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0c7f960_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend_bootstrap-combined.min_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "0c7f960_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend_font-awesome_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "0c7f960_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend_bootstrap-image-gallery.min_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "0c7f960_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend_select2_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "0c7f960_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend_backend_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "0c7f960"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0c7f960") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/backend.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "        ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
    }

    // line 84
    public function block_javascripts($context, array $blocks = array())
    {
        // line 85
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "135f653_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_jquery-1.10.0.min_1.js");
            // line 95
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_form-collection_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_form-spinner_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_select2_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_backend_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_load-image_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "135f653_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend_bootstrap-image-gallery.min_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "135f653"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_135f653") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/backend.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 97
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 97,  192 => 95,  187 => 85,  184 => 84,  179 => 70,  175 => 25,  137 => 23,  132 => 16,  129 => 15,  123 => 4,  117 => 98,  114 => 84,  111 => 82,  108 => 81,  102 => 77,  94 => 71,  92 => 70,  89 => 69,  83 => 54,  69 => 38,  65 => 37,  58 => 35,  47 => 26,  44 => 15,  31 => 4,  26 => 1,  77 => 50,  73 => 27,  68 => 24,  66 => 23,  60 => 20,  54 => 16,  50 => 13,  43 => 9,  40 => 8,  37 => 7,  32 => 5,  30 => 4,  28 => 3,);
    }
}
