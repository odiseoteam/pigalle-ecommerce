<?php

/* PigalleBundle:Cart:quickviewCart.html.twig */
class __TwigTemplate_e8c610cb6e3c8d40d0fedcf932748e43b657be417a10b4691bd302d8996fa7ad extends Twig_Template
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
        echo "<div id=\"quickviewCart\" class=\"hide\">
\t";
        // line 2
        if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "empty"))) {
            // line 3
            echo "\t<div class=\"products clearfix\">
\t\t";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "\t\t";
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant")) {
                    // line 6
                    echo "\t\t";
                    $context["productCart"] = $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant"), "product");
                    // line 7
                    echo "\t\t<div class=\"product\">
\t\t\t<div class=\"photo\">
\t\t\t\t<a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "slug"))), "html", null, true);
                    echo "\">
\t\t\t\t\t<img src=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "image"), "path"), "pigalle_60x60"), "html", null, true);
                    echo "\" alt=\"\" />
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"datosProducto\">
\t\t\t\t<h3 class=\"productName\"><a href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "slug"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "name"), "html", null, true);
                    echo "</a></h3>
\t\t\t\t<p class=\"talle\">Talle: <span>";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "variant"), "options")), "value"), "html", null, true);
                    echo "</span></p>
\t\t\t\t<p class=\"unitPrice\">Precio unitario: <span>";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "unitPrice")), "html", null, true);
                    echo "</span></p>
\t\t\t\t<p class=\"quantity\">Cantidad: <span>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "quantity"), "html", null, true);
                    echo "</span></p>
\t\t\t</div>
\t\t</div>
\t\t";
                } else {
                    // line 21
                    echo "\t\t";
                    $context["productCart"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "productCollection");
                    // line 22
                    echo "\t\t<div class=\"product\">
\t\t\t<div class=\"photo\">
\t\t\t\t<a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "slug"))), "html", null, true);
                    echo "\">
\t\t\t\t\t<img src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "image"), "path"), "pigalle_60x60"), "html", null, true);
                    echo "\" alt=\"\" />
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"datosProducto\">
\t\t\t\t<h3 class=\"productName\"><a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_product_show", array("slug" => $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "slug"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productCart"]) ? $context["productCart"] : $this->getContext($context, "productCart")), "name"), "html", null, true);
                    echo "</a></h3>
\t\t\t</div>
\t\t</div>
\t\t";
                }
                // line 33
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t</div>
\t<div class=\"foot clearfix\">
\t\t";
            // line 36
            if ($this->env->getExtension('security')->isGranted("ROLE_USER_MAYORISTA")) {
                // line 37
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pigalle_mayorista_order"), "html", null, true);
                echo "\" class=\"button checkoutButton\">REALIZAR PEDIDO</a>
\t\t";
            } else {
                // line 39
                echo "\t\t<p class=\"title\">TOTAL:</p>
\t\t<div class=\"flag\">
\t\t\t<p>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('price_extension')->priceFilter($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "total")), "html", null, true);
                echo "</p>
\t\t\t<div class=\"tail\">&nbsp;</div>
\t\t</div>
\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_checkout_start"), "html", null, true);
                echo "\" class=\"button checkoutButton\">REALIZAR COMPRA</a>
\t\t";
            }
            // line 46
            echo "\t</div>
\t";
        } else {
            // line 48
            echo "\t<div class=\"emptyCart\">
    \t<h2>&iexcl;Tu bolsa de compras se encuentra vacia!</h2>
    </div>
\t";
        }
        // line 52
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "PigalleBundle:Cart:quickviewCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  113 => 36,  76 => 21,  65 => 16,  37 => 6,  25 => 2,  287 => 4,  285 => 3,  260 => 85,  225 => 75,  199 => 61,  192 => 57,  189 => 55,  175 => 46,  166 => 41,  125 => 41,  123 => 31,  120 => 29,  95 => 17,  93 => 16,  90 => 15,  81 => 10,  54 => 29,  44 => 9,  39 => 9,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  453 => 72,  451 => 71,  443 => 70,  441 => 69,  438 => 68,  432 => 64,  424 => 62,  419 => 61,  415 => 60,  410 => 59,  408 => 58,  390 => 50,  387 => 49,  382 => 47,  372 => 43,  370 => 42,  367 => 41,  359 => 37,  356 => 36,  353 => 35,  350 => 34,  348 => 33,  345 => 32,  337 => 27,  332 => 26,  326 => 24,  324 => 23,  314 => 20,  298 => 16,  295 => 15,  290 => 13,  281 => 2,  275 => 6,  272 => 5,  267 => 3,  263 => 330,  261 => 329,  255 => 326,  253 => 325,  251 => 324,  249 => 83,  247 => 322,  244 => 321,  241 => 319,  236 => 81,  234 => 306,  231 => 305,  218 => 285,  198 => 252,  195 => 251,  193 => 242,  187 => 54,  185 => 223,  179 => 49,  174 => 213,  167 => 200,  159 => 192,  154 => 185,  147 => 173,  139 => 165,  122 => 114,  117 => 108,  114 => 107,  109 => 34,  102 => 21,  99 => 20,  97 => 57,  94 => 29,  74 => 85,  69 => 17,  405 => 57,  396 => 52,  392 => 120,  389 => 119,  385 => 48,  380 => 117,  377 => 116,  374 => 115,  371 => 114,  363 => 109,  360 => 108,  352 => 107,  347 => 106,  344 => 105,  338 => 103,  335 => 102,  333 => 101,  330 => 100,  322 => 95,  319 => 22,  317 => 21,  316 => 92,  315 => 91,  313 => 90,  310 => 89,  304 => 87,  302 => 86,  300 => 85,  297 => 84,  284 => 77,  280 => 76,  276 => 75,  271 => 74,  268 => 73,  262 => 71,  257 => 327,  254 => 68,  245 => 62,  229 => 298,  226 => 297,  223 => 74,  220 => 58,  217 => 70,  214 => 56,  211 => 67,  208 => 267,  205 => 265,  203 => 262,  200 => 261,  194 => 58,  184 => 52,  181 => 50,  176 => 38,  173 => 37,  162 => 193,  150 => 27,  142 => 166,  140 => 48,  137 => 158,  128 => 17,  124 => 128,  119 => 113,  112 => 24,  110 => 12,  107 => 23,  98 => 6,  96 => 5,  83 => 24,  75 => 1,  71 => 84,  68 => 113,  63 => 99,  53 => 67,  51 => 28,  48 => 10,  46 => 19,  36 => 8,  33 => 10,  31 => 1,  91 => 17,  88 => 16,  80 => 3,  78 => 9,  58 => 83,  29 => 2,  23 => 1,  22 => 1,  270 => 1,  266 => 64,  259 => 328,  246 => 56,  242 => 55,  239 => 313,  228 => 53,  197 => 60,  190 => 241,  186 => 44,  182 => 222,  171 => 36,  169 => 206,  165 => 30,  161 => 29,  157 => 186,  153 => 28,  149 => 38,  144 => 172,  136 => 46,  132 => 37,  130 => 18,  127 => 34,  116 => 16,  103 => 33,  89 => 46,  84 => 40,  79 => 22,  77 => 20,  72 => 13,  55 => 14,  52 => 2,  40 => 7,  43 => 34,  41 => 14,  339 => 128,  301 => 126,  296 => 119,  293 => 14,  288 => 78,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 76,  221 => 73,  216 => 274,  213 => 68,  210 => 45,  207 => 66,  204 => 65,  201 => 62,  191 => 104,  177 => 48,  172 => 45,  168 => 42,  164 => 199,  160 => 88,  152 => 179,  145 => 26,  134 => 157,  131 => 44,  129 => 35,  121 => 39,  115 => 37,  111 => 61,  104 => 22,  101 => 55,  92 => 47,  87 => 25,  82 => 32,  67 => 3,  64 => 81,  59 => 45,  49 => 20,  34 => 5,  32 => 3,  27 => 3,  66 => 82,  61 => 15,  56 => 44,  50 => 14,  45 => 10,  38 => 22,  35 => 4,  30 => 4,  28 => 3,);
    }
}
