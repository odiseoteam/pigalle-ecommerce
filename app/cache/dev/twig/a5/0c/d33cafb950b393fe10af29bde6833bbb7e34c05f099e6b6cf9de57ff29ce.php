<?php

/* knp_menu.html.twig */
class __TwigTemplate_a50cd33cafb950b393fe10af29bde6833bbb7e34c05f099e6b6cf9de57ff29ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
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

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('children', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('item', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('linkElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('spanElement', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren") && (!($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth") === 0))) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren"))) {
            // line 22
            echo "    ";
            $context["knp_menu"] = $this;
            // line 23
            echo "    <ul";
            echo $this->callMacro((isset($context["knp_menu"]) ? $context["knp_menu"] : $this->getContext($context, "knp_menu")), "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))));
            echo ">
        ";
            // line 24
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 29
    public function block_children($context, array $blocks = array())
    {
        // line 31
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 32
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 34
        if ((!(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")))) {
            // line 35
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth") - 1)));
        }
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 42
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
    }

    // line 45
    public function block_item($context, array $blocks = array())
    {
        // line 46
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed")) {
            // line 48
            $context["classes"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 49
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 50
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass")));
            } elseif ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth")), "method")) {
                // line 52
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass")));
            }
            // line 54
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst")) {
                // line 55
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass")));
            }
            // line 57
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass")));
            }
            // line 60
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes");
            // line 61
            if ((!twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes"))))) {
                // line 62
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 65
            echo "    ";
            $context["knp_menu"] = $this;
            // line 66
            echo "    <li";
            echo $this->callMacro((isset($context["knp_menu"]) ? $context["knp_menu"] : $this->getContext($context, "knp_menu")), "attributes", array(0 => (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes"))));
            echo ">";
            // line 67
            if (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"))) && ((!$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink")))) {
                // line 68
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 70
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 73
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 74
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level"))));
            // line 75
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes"), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 76
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 81
    public function block_linkElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri"), "html", null, true);
        echo "\"";
        echo $this->callMacro((isset($context["knp_menu"]) ? $context["knp_menu"] : $this->getContext($context, "knp_menu")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 83
    public function block_spanElement($context, array $blocks = array())
    {
        $context["knp_menu"] = $this;
        echo "<span";
        echo $this->callMacro((isset($context["knp_menu"]) ? $context["knp_menu"] : $this->getContext($context, "knp_menu")), "attributes", array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 85
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels") && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label"), "html", null, true);
        }
    }

    // line 1
    public function getAttributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) && (!((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) === false)))) {
                    // line 4
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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 4,  285 => 3,  260 => 85,  225 => 75,  199 => 61,  192 => 57,  189 => 55,  175 => 46,  166 => 41,  125 => 32,  123 => 31,  120 => 29,  95 => 17,  93 => 16,  90 => 15,  81 => 10,  54 => 29,  44 => 15,  39 => 9,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  453 => 72,  451 => 71,  443 => 70,  441 => 69,  438 => 68,  432 => 64,  424 => 62,  419 => 61,  415 => 60,  410 => 59,  408 => 58,  390 => 50,  387 => 49,  382 => 47,  372 => 43,  370 => 42,  367 => 41,  359 => 37,  356 => 36,  353 => 35,  350 => 34,  348 => 33,  345 => 32,  337 => 27,  332 => 26,  326 => 24,  324 => 23,  314 => 20,  298 => 16,  295 => 15,  290 => 13,  281 => 2,  275 => 6,  272 => 5,  267 => 3,  263 => 330,  261 => 329,  255 => 326,  253 => 325,  251 => 324,  249 => 83,  247 => 322,  244 => 321,  241 => 319,  236 => 81,  234 => 306,  231 => 305,  218 => 285,  198 => 252,  195 => 251,  193 => 242,  187 => 54,  185 => 223,  179 => 49,  174 => 213,  167 => 200,  159 => 192,  154 => 185,  147 => 173,  139 => 165,  122 => 114,  117 => 108,  114 => 107,  109 => 101,  102 => 21,  99 => 20,  97 => 57,  94 => 56,  74 => 85,  69 => 83,  405 => 57,  396 => 52,  392 => 120,  389 => 119,  385 => 48,  380 => 117,  377 => 116,  374 => 115,  371 => 114,  363 => 109,  360 => 108,  352 => 107,  347 => 106,  344 => 105,  338 => 103,  335 => 102,  333 => 101,  330 => 100,  322 => 95,  319 => 22,  317 => 21,  316 => 92,  315 => 91,  313 => 90,  310 => 89,  304 => 87,  302 => 86,  300 => 85,  297 => 84,  284 => 77,  280 => 76,  276 => 75,  271 => 74,  268 => 73,  262 => 71,  257 => 327,  254 => 68,  245 => 62,  229 => 298,  226 => 297,  223 => 74,  220 => 58,  217 => 70,  214 => 56,  211 => 67,  208 => 267,  205 => 265,  203 => 262,  200 => 261,  194 => 58,  184 => 52,  181 => 50,  176 => 38,  173 => 37,  162 => 193,  150 => 27,  142 => 166,  140 => 24,  137 => 158,  128 => 17,  124 => 128,  119 => 113,  112 => 24,  110 => 12,  107 => 23,  98 => 6,  96 => 5,  83 => 11,  75 => 1,  71 => 84,  68 => 113,  63 => 99,  53 => 67,  51 => 28,  48 => 50,  46 => 19,  36 => 8,  33 => 10,  31 => 1,  91 => 17,  88 => 16,  80 => 3,  78 => 9,  58 => 83,  29 => 2,  23 => 1,  22 => 1,  270 => 1,  266 => 64,  259 => 328,  246 => 56,  242 => 55,  239 => 313,  228 => 53,  197 => 60,  190 => 241,  186 => 44,  182 => 222,  171 => 36,  169 => 206,  165 => 30,  161 => 29,  157 => 186,  153 => 28,  149 => 38,  144 => 172,  136 => 21,  132 => 37,  130 => 18,  127 => 34,  116 => 16,  103 => 12,  89 => 46,  84 => 40,  79 => 31,  77 => 20,  72 => 13,  55 => 3,  52 => 2,  40 => 6,  43 => 34,  41 => 14,  339 => 128,  301 => 126,  296 => 119,  293 => 14,  288 => 78,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 76,  221 => 73,  216 => 274,  213 => 68,  210 => 45,  207 => 66,  204 => 65,  201 => 62,  191 => 104,  177 => 48,  172 => 45,  168 => 42,  164 => 199,  160 => 88,  152 => 179,  145 => 26,  134 => 157,  131 => 69,  129 => 35,  121 => 63,  115 => 62,  111 => 61,  104 => 22,  101 => 55,  92 => 47,  87 => 41,  82 => 32,  67 => 3,  64 => 81,  59 => 45,  49 => 20,  34 => 4,  32 => 3,  27 => 1,  66 => 82,  61 => 80,  56 => 44,  50 => 14,  45 => 10,  38 => 22,  35 => 4,  30 => 1,  28 => 3,);
    }
}
