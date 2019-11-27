<?php

/* PigalleBundle:Product:macros.html.twig */
class __TwigTemplate_b2300324729240a67cd8f3bddc8e1099737aa9b8041461d01a9e2dd7da2d7b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
            "grid" => array(
                'method' => "getGrid",
                'arguments' => array(
                    "products" => null,
                    "size" => 3,
                ),
            ),
            "productDetails" => array(
                'method' => "getProductDetails",
                'arguments' => array(
                    "product" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        echo "
";
    }

    // line 1
    public function getGrid($_products = null, $_size = 3)
    {
        $context = $this->env->mergeGlobals(array(
            "products" => $_products,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<div class=\"row-fluid\">
\t";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "\t<div class=\"span";
                echo twig_escape_filter($this->env, (12 / (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))), "html", null, true);
                echo "\">
\t\t";
                // line 5
                $this->env->loadTemplate("PigalleBundle:Product:_product.html.twig")->display($context);
                // line 6
                echo "\t</div>
\t";
                // line 7
                if ((0 == ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))))) {
                    // line 8
                    echo "</div>
<div class=\"row-fluid\">
\t";
                }
                // line 11
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getProductDetails($_product = null)
    {
        $context = $this->env->mergeGlobals(array(
            "product" => $_product,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "
";
            // line 18
            $context["form"] = $this->env->getExtension('sylius_cart')->getItemFormView(array("product" => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))));
            // line 19
            echo "
<div class=\"productDetails row-fluid\">
\t<div class=\"span6 fotoDetalle\"><img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "pigalle_460x460"), "html", null, true);
            echo "\" data-zoom-image=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image"), "path"), "pigalle_900x900"), "html", null, true);
            echo "\" /></div>
\t<div class=\"span6 datos\">
\t\t<div id=\"productGalleryZoomContainer\"></div>
\t\t<form action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_cart_item_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id"))), "html", null, true);
            echo "\" method=\"post\">
\t\t\t<div class=\"datosProducto\">
\t\t\t\t<h3 class=\"productName\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</h3>
\t\t\t\t<p class=\"description\">";
            // line 27
            echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "")) : (""));
            echo "</p>
\t\t\t\t<div class=\"botonCompras\"";
            // line 28
            echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) ? (" style=\"top: 23px;\"") : (""));
            echo ">&nbsp;</div>
\t\t\t\t<div class=\"";
            // line 29
            echo (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) ? ("flagOferta") : ("flag"));
            echo "\">
\t\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "masterVariant"), "price")), "html", null, true);
            echo "</p>
\t\t\t\t\t";
            // line 31
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isOffer")) {
                // line 32
                echo "\t\t\t\t\t<p class=\"oferta\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceWithoutDiscount")), "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t<div class=\"tail\">&nbsp;</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"share\">
\t\t\t\t\t<li class=\"pinterest\"><a href=\"#\"><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pigalle/images/pinterest.png"), "html", null, true);
            echo "\" /></a></li>
\t\t\t\t\t<!-- <li class=\"email\"><a href=\"#\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pigalle/images/sobre.png"), "html", null, true);
            echo "\" /></a></li>  -->
\t\t\t\t\t<li class=\"facebookLike\"><div class=\"fb-like\" data-href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug"))), "html", null, true);
            echo "\" data-send=\"false\" data-layout=\"button_count\" data-width=\"450\" data-show-faces=\"false\" data-font=\"verdana\"></div></li>
\t\t\t\t</ul>
\t\t\t</div>\t\t\t\t
\t\t\t<div class=\"photos\" id=\"productGallery\">
\t\t\t\t";
            // line 43
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 44
                echo "\t\t\t\t<a href=\"#\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\" data-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "pigalle_460x460"), "html", null, true);
                echo "\" data-zoom-image=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "pigalle_900x900"), "html", null, true);
                echo "\">
\t\t\t\t\t<img class=\"img-polaroid\" src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "pigalle_60x60"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
                echo "\" />
\t\t\t\t</a>
\t    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t</div>\t\t\t\t
\t\t\t<div class=\"talles\" data-trigger=\"manual\" data-placement=\"top\" data-content=\"Debes seleccionar el talle.\">
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<p class=\"span2\">Talle:</p>
\t\t\t\t\t<ul class=\"span10 talleList\">
\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variants"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                if ((($this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "available") && $this->env->getExtension('sylius_inventory')->isStockAvailable((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")))) && (twig_length_filter($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options")) > 0))) {
                    // line 54
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                    // line 55
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variant"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), 'widget', array("attr" => array("class" => "toggle")));
                    echo "
\t\t\t\t\t\t\t";
                    // line 56
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "variant"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), 'label', (twig_test_empty($_label_ = $this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["variant"]) ? $context["variant"] : $this->getContext($context, "variant")), "options")), "value")) ? array() : array("label" => $_label_)));
                    echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<p class=\"span2\">Cantidad:</p>
\t\t\t\t\t<div class=\"span10\">
\t\t\t\t\t\t";
            // line 64
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantity"), 'widget', array("attr" => array("class" => "quantity"), "empty_value" => "1"));
            echo "
\t            \t\t";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t\t
\t\t\t<button type=\"submit\" class=\"button addToCartButton\">AGREGAR A LA BOLSA DE COMPRAS</button>
\t\t</form>
\t</div>
</div>\t

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Product:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 65,  266 => 64,  259 => 59,  246 => 56,  242 => 55,  239 => 54,  228 => 53,  197 => 43,  190 => 39,  186 => 38,  182 => 37,  171 => 32,  169 => 31,  165 => 30,  161 => 29,  157 => 28,  153 => 27,  149 => 26,  144 => 24,  136 => 21,  132 => 19,  130 => 18,  127 => 17,  116 => 16,  103 => 12,  89 => 11,  84 => 8,  79 => 6,  77 => 5,  72 => 4,  55 => 3,  52 => 2,  40 => 1,  43 => 3,  41 => 2,  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 69,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 48,  216 => 129,  213 => 118,  210 => 45,  207 => 115,  204 => 113,  201 => 44,  191 => 104,  177 => 34,  172 => 91,  168 => 90,  164 => 89,  160 => 88,  152 => 83,  145 => 79,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 7,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 3,  27 => 1,  66 => 19,  61 => 17,  56 => 15,  50 => 14,  45 => 10,  38 => 6,  35 => 15,  30 => 1,  28 => 3,);
    }
}
