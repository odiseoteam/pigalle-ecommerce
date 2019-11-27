<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_f0dc8e93c4955101073eefddc4a112bab29deb8c62a08ee5d764e5b5e9974f0f extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  73 => 26,  24 => 2,  141 => 57,  126 => 47,  118 => 43,  108 => 40,  47 => 10,  60 => 14,  57 => 21,  26 => 3,  62 => 8,  42 => 6,  146 => 52,  113 => 36,  76 => 21,  65 => 24,  37 => 6,  25 => 2,  287 => 4,  285 => 3,  260 => 85,  225 => 75,  199 => 90,  192 => 57,  189 => 55,  175 => 46,  166 => 70,  125 => 41,  123 => 31,  120 => 44,  95 => 21,  93 => 16,  90 => 20,  81 => 40,  54 => 12,  44 => 9,  39 => 7,  1191 => 330,  1185 => 329,  1179 => 328,  1173 => 327,  1167 => 326,  1161 => 325,  1155 => 324,  1149 => 323,  1143 => 322,  1127 => 316,  1120 => 315,  1118 => 314,  1115 => 313,  1092 => 309,  1067 => 308,  1065 => 307,  1062 => 306,  1050 => 301,  1045 => 300,  1043 => 299,  1040 => 298,  1031 => 292,  1025 => 290,  1022 => 289,  1017 => 288,  1015 => 287,  1012 => 286,  1005 => 281,  996 => 279,  992 => 278,  989 => 277,  986 => 276,  984 => 275,  981 => 274,  973 => 270,  971 => 269,  968 => 268,  961 => 263,  958 => 262,  950 => 257,  946 => 256,  942 => 255,  939 => 254,  937 => 253,  934 => 252,  926 => 248,  924 => 244,  922 => 243,  919 => 242,  897 => 235,  894 => 234,  891 => 233,  888 => 232,  885 => 231,  882 => 230,  879 => 229,  876 => 228,  873 => 227,  870 => 226,  867 => 225,  865 => 224,  862 => 223,  854 => 217,  851 => 216,  849 => 215,  846 => 214,  838 => 210,  835 => 209,  833 => 208,  830 => 207,  822 => 203,  819 => 202,  817 => 201,  814 => 200,  806 => 196,  803 => 195,  801 => 194,  798 => 193,  790 => 189,  787 => 188,  785 => 187,  782 => 186,  774 => 182,  771 => 181,  769 => 180,  766 => 179,  758 => 175,  756 => 174,  753 => 173,  745 => 169,  742 => 168,  740 => 167,  737 => 166,  729 => 162,  726 => 161,  724 => 160,  722 => 159,  719 => 158,  712 => 153,  702 => 152,  697 => 151,  694 => 150,  688 => 148,  685 => 147,  683 => 146,  680 => 145,  672 => 139,  670 => 138,  669 => 137,  668 => 136,  667 => 135,  662 => 134,  656 => 132,  653 => 131,  651 => 130,  648 => 129,  639 => 123,  635 => 122,  631 => 121,  627 => 120,  622 => 119,  616 => 117,  613 => 116,  611 => 115,  608 => 114,  592 => 110,  590 => 109,  587 => 108,  571 => 104,  569 => 103,  566 => 102,  549 => 98,  537 => 96,  530 => 93,  528 => 92,  523 => 91,  520 => 90,  502 => 89,  500 => 88,  497 => 87,  488 => 82,  485 => 81,  482 => 80,  476 => 78,  474 => 77,  469 => 76,  466 => 75,  463 => 74,  453 => 72,  451 => 71,  443 => 70,  441 => 69,  438 => 68,  432 => 64,  424 => 62,  419 => 61,  415 => 60,  410 => 59,  408 => 58,  390 => 50,  387 => 49,  382 => 47,  372 => 43,  370 => 42,  367 => 41,  359 => 37,  356 => 36,  353 => 35,  350 => 34,  348 => 33,  345 => 32,  337 => 27,  332 => 26,  326 => 24,  324 => 23,  314 => 20,  298 => 16,  295 => 15,  290 => 13,  281 => 2,  275 => 6,  272 => 5,  267 => 3,  263 => 330,  261 => 329,  255 => 326,  253 => 325,  251 => 324,  249 => 83,  247 => 322,  244 => 321,  241 => 319,  236 => 81,  234 => 306,  231 => 305,  218 => 285,  198 => 252,  195 => 251,  193 => 242,  187 => 54,  185 => 223,  179 => 49,  174 => 73,  167 => 200,  159 => 66,  154 => 63,  147 => 173,  139 => 56,  122 => 114,  117 => 108,  114 => 107,  109 => 34,  102 => 19,  99 => 20,  97 => 22,  94 => 35,  74 => 85,  69 => 25,  405 => 57,  396 => 52,  392 => 120,  389 => 119,  385 => 48,  380 => 117,  377 => 116,  374 => 115,  371 => 114,  363 => 109,  360 => 108,  352 => 107,  347 => 106,  344 => 105,  338 => 103,  335 => 102,  333 => 101,  330 => 100,  322 => 95,  319 => 22,  317 => 21,  316 => 92,  315 => 91,  313 => 90,  310 => 89,  304 => 87,  302 => 86,  300 => 85,  297 => 84,  284 => 77,  280 => 76,  276 => 75,  271 => 74,  268 => 73,  262 => 71,  257 => 327,  254 => 68,  245 => 62,  229 => 298,  226 => 297,  223 => 74,  220 => 58,  217 => 70,  214 => 56,  211 => 67,  208 => 267,  205 => 265,  203 => 262,  200 => 261,  194 => 58,  184 => 52,  181 => 50,  176 => 74,  173 => 37,  162 => 193,  150 => 27,  142 => 166,  140 => 48,  137 => 158,  128 => 17,  124 => 46,  119 => 113,  112 => 24,  110 => 12,  107 => 23,  98 => 6,  96 => 9,  83 => 19,  75 => 16,  71 => 14,  68 => 113,  63 => 99,  53 => 15,  51 => 28,  48 => 5,  46 => 8,  36 => 5,  33 => 5,  31 => 1,  91 => 6,  88 => 19,  80 => 3,  78 => 28,  58 => 13,  29 => 3,  23 => 1,  22 => 1,  270 => 1,  266 => 64,  259 => 328,  246 => 56,  242 => 55,  239 => 313,  228 => 53,  197 => 60,  190 => 84,  186 => 82,  182 => 222,  171 => 72,  169 => 71,  165 => 30,  161 => 67,  157 => 186,  153 => 28,  149 => 38,  144 => 172,  136 => 55,  132 => 37,  130 => 18,  127 => 34,  116 => 16,  103 => 33,  89 => 28,  84 => 40,  79 => 22,  77 => 11,  72 => 25,  55 => 14,  52 => 19,  40 => 7,  43 => 8,  41 => 14,  339 => 128,  301 => 126,  296 => 119,  293 => 14,  288 => 78,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 76,  221 => 73,  216 => 274,  213 => 68,  210 => 45,  207 => 66,  204 => 65,  201 => 62,  191 => 104,  177 => 48,  172 => 45,  168 => 42,  164 => 199,  160 => 88,  152 => 179,  145 => 59,  134 => 157,  131 => 44,  129 => 35,  121 => 39,  115 => 42,  111 => 61,  104 => 24,  101 => 40,  92 => 20,  87 => 25,  82 => 29,  67 => 12,  64 => 81,  59 => 9,  49 => 14,  34 => 5,  32 => 4,  27 => 2,  66 => 9,  61 => 15,  56 => 44,  50 => 14,  45 => 12,  38 => 4,  35 => 6,  30 => 4,  28 => 4,);
    }
}