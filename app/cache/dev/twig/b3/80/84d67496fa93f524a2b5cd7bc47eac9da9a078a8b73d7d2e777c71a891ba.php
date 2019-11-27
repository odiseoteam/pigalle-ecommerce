<?php

/* PigalleBundle::layout.html.twig */
class __TwigTemplate_b38084d67496fa93f524a2b5cd7bc47eac9da9a078a8b73d7d2e777c71a891ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'featured_products' => array($this, 'block_featured_products'),
            'javascripts' => array($this, 'block_javascripts'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["cart"] = $this->env->getExtension('sylius_cart')->getCurrentCart();
        // line 3
        $context["settings"] = $this->env->getExtension('sylius_settings')->getSettings("general");
        // line 4
        echo "<html>
    <head>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "Pigalle - Venta de calzado online")) : ("Pigalle - Venta de calzado online")), "html", null, true);
        echo "\">
        <meta name=\"keywords\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_keywords"), "pigalle, calzado, eshop, compra, online-store, store")) : ("pigalle, calzado, eshop, compra, online-store, store")), "html", null, true);
        echo "\">
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->

        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        ";
        // line 21
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    </head>
    <body>
    \t<div id=\"fb-root\"></div>
\t\t<script>(function(d, s, id) {
\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t  if (d.getElementById(id)) return;
\t\t  js = d.createElement(s); js.id = id;
\t\t  js.src = \"//connect.facebook.net/es_LA/all.js#xfbml=1&appId=493058447438923\";
\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t
\t\t<div id=\"header\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PigalleBundle:Main:newsletterSubscribeWidget"));
        echo "
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t";
        // line 48
        echo $this->env->getExtension('knp_menu')->render("pigalle.menu.user");
        echo "
\t\t\t\t\t<div class=\"cartItems\">
\t\t\t\t\t\t<a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_summary"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalItems"), "html", null, true);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 55
        echo "\t\t\t\t";
        $this->env->loadTemplate("PigalleBundle:Cart:quickviewCart.html.twig")->display($context);
        // line 56
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<div id=\"menu\">
\t\t\t<div class=\"container\">\t\t
\t\t\t\t";
        // line 61
        echo $this->env->getExtension('knp_menu')->render("pigalle.menu.main_left", array("currentClass" => "active"));
        echo "
\t\t\t\t<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_homepage"), "html", null, true);
        echo "\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pigalle/images/logo-pigalle.png"), "html", null, true);
        echo "\" alt=\"Pigalle\" /></a>
\t\t\t\t";
        // line 63
        echo $this->env->getExtension('knp_menu')->render("pigalle.menu.main_right", array("currentClass" => "active", "allow_safe_labels" => true));
        echo "
\t\t\t</div>
\t\t</div>
  
\t\t<div id=\"content\">
\t\t\t";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "\t\t\t";
        $this->displayBlock('featured_products', $context, $blocks);
        // line 70
        echo "\t\t</div>
\t\t\t\t
\t\t<div id=\"footer\">
    \t\t<div class=\"socaloFooter\"></div>
        \t<div class=\"footerContent\">
            \t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<h3>MAPA DEL SITIO</h3>
\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('knp_menu')->render("pigalle.menu.footer");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<h3>TÉRMINOS</h3>
\t\t\t\t\t\t\t<p>El uso de este sitio web implica la aceptación de los <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("terminos_y_condiciones.pdf"), "html", null, true);
        echo "\" target=\"_blank\"><u>TÉRMINOS Y CONDICIONES</u></a> y de las <a href=\"#\"><u>POLÍTICAS DE PRIVACIDAD</u></a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<!--  \t<h3>FAQ's</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_faq"), "html", null, true);
        echo "#faq1\">Lorem ipsum dolor sit?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_faq"), "html", null, true);
        echo "#faq2\">Lorem ipsum dolor sit?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_faq"), "html", null, true);
        echo "#faq3\">Lorem ipsum dolor sit?</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_faq"), "html", null, true);
        echo "#faq4\">Lorem ipsum dolor sit?</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_faq"), "html", null, true);
        echo "\">Ver Más</a></p>
\t\t\t\t\t\t-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<h3>DATA FISCAL</h3>
\t\t\t\t\t\t\t<p>PIGALLE ACCESORI SA <br />IVA RESPONSABLE INSCRIPTO <br />Las Heras 670<br /> Ramos Mejía (C.P. 1704)<br /> Buenos Aires</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2 dataFiscal\">
\t\t\t\t\t\t\t<a href=\"http://qr.afip.gob.ar/?qr=ap0Wygcx_4LZycOiAxiZLg,,\" target=\"_F960AFIPInfo\"><img src=\"http://www.afip.gob.ar/images/f960/DATAWEB.jpg\" border=\"0\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span2 logo\">
\t\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pigalle/images/pigalle-copyright.png"), "html", null, true);
        echo "\" alt=\"Logo Pigalle Copyright\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    
\t\t";
        // line 112
        echo "\t\t";
        $this->env->loadTemplate("PigalleBundle::gallery.html.twig")->display($context);
        // line 113
        echo "\t\t
\t\t";
        // line 115
        echo "\t\t";
        $this->env->loadTemplate("PigalleBundle::quickview.html.twig")->display($context);
        // line 116
        echo "\t\t
        ";
        // line 118
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "title"), "Pigalle")) : ("Pigalle")), "html", null, true);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c1bcf36_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_bootstrap.no-responsive.no-icons.min_1.css");
            // line 30
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "c1bcf36_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_css?family=Lato:300,400,700_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "c1bcf36_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_css?family=Croissant+One_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "c1bcf36_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_bootstrap-image-gallery.min_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "c1bcf36_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_main_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "c1bcf36_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend_sections_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "c1bcf36"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1bcf36") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/frontend.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "        ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
    }

    // line 69
    public function block_featured_products($context, array $blocks = array())
    {
    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        // line 119
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2353dcb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend_jquery-1.10.0.min_1.js");
            // line 126
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "2353dcb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "2353dcb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend_jquery.elevateZoom-2.6.0.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "2353dcb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend_jquery.scrollPagination_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "2353dcb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend_main_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "2353dcb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2353dcb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/frontend.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 128
        echo "        ";
    }

    public function getTemplateName()
    {
        return "PigalleBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 69,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 6,  216 => 129,  213 => 118,  210 => 116,  207 => 115,  204 => 113,  201 => 112,  191 => 104,  177 => 93,  172 => 91,  168 => 90,  164 => 89,  160 => 88,  152 => 83,  145 => 79,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 46,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 3,  27 => 1,  66 => 19,  61 => 17,  56 => 15,  50 => 14,  45 => 10,  38 => 6,  35 => 6,  30 => 2,  28 => 3,);
    }
}
