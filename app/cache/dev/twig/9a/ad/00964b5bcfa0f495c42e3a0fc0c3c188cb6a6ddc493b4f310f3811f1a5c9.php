<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_9aad00964b5bcfa0f495c42e3a0fc0c3c188cb6a6ddc493b4f310f3811f1a5c9 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
        </a>
    </div>
    <style type=\"text/css\">
        ";
            // line 22
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 1,  80 => 21,  272 => 94,  257 => 92,  230 => 81,  220 => 75,  211 => 73,  182 => 69,  138 => 53,  97 => 28,  90 => 25,  206 => 78,  192 => 71,  185 => 70,  176 => 65,  157 => 58,  152 => 51,  147 => 49,  136 => 42,  115 => 37,  112 => 36,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  378 => 120,  375 => 119,  368 => 115,  350 => 112,  335 => 110,  318 => 104,  281 => 94,  277 => 93,  271 => 90,  260 => 87,  248 => 83,  242 => 82,  237 => 80,  233 => 82,  227 => 79,  172 => 60,  131 => 49,  128 => 38,  125 => 37,  74 => 18,  49 => 12,  60 => 12,  47 => 8,  34 => 3,  31 => 3,  817 => 473,  814 => 472,  803 => 470,  799 => 469,  795 => 467,  782 => 466,  756 => 461,  753 => 460,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  697 => 451,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  667 => 446,  656 => 445,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 435,  613 => 434,  576 => 399,  558 => 396,  541 => 395,  538 => 394,  536 => 393,  531 => 391,  526 => 389,  270 => 136,  225 => 93,  214 => 90,  208 => 87,  199 => 85,  189 => 82,  179 => 64,  173 => 75,  124 => 41,  113 => 41,  88 => 25,  81 => 22,  373 => 118,  367 => 123,  363 => 121,  361 => 120,  334 => 113,  331 => 112,  328 => 111,  322 => 106,  319 => 108,  316 => 107,  313 => 106,  310 => 105,  307 => 99,  298 => 98,  293 => 100,  284 => 97,  253 => 92,  241 => 85,  197 => 75,  195 => 75,  166 => 62,  155 => 52,  141 => 54,  135 => 51,  132 => 51,  129 => 40,  98 => 39,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 9,  37 => 4,  200 => 76,  187 => 66,  184 => 80,  181 => 64,  170 => 63,  163 => 60,  149 => 61,  130 => 50,  127 => 42,  120 => 40,  96 => 38,  92 => 33,  89 => 24,  52 => 14,  94 => 27,  66 => 14,  388 => 160,  385 => 159,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 114,  352 => 149,  342 => 116,  339 => 145,  333 => 141,  327 => 108,  325 => 107,  320 => 135,  314 => 131,  311 => 100,  306 => 128,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 96,  273 => 95,  268 => 94,  264 => 105,  258 => 103,  252 => 100,  247 => 97,  245 => 85,  240 => 93,  234 => 81,  231 => 88,  228 => 87,  226 => 86,  221 => 77,  215 => 79,  209 => 77,  207 => 72,  202 => 71,  196 => 73,  193 => 68,  190 => 70,  183 => 63,  177 => 59,  174 => 64,  169 => 56,  162 => 61,  154 => 47,  151 => 46,  146 => 55,  143 => 55,  110 => 36,  106 => 32,  103 => 24,  100 => 23,  91 => 32,  85 => 22,  79 => 28,  64 => 23,  42 => 6,  39 => 8,  82 => 18,  75 => 27,  72 => 26,  57 => 12,  50 => 9,  45 => 11,  43 => 11,  40 => 5,  25 => 2,  249 => 90,  167 => 60,  160 => 59,  148 => 46,  142 => 57,  134 => 44,  123 => 40,  118 => 43,  114 => 37,  111 => 47,  109 => 33,  104 => 43,  101 => 31,  95 => 27,  86 => 35,  83 => 29,  77 => 20,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 7,  32 => 3,  412 => 183,  403 => 180,  399 => 179,  396 => 178,  391 => 177,  389 => 176,  381 => 121,  379 => 158,  372 => 165,  365 => 161,  358 => 157,  351 => 118,  344 => 147,  337 => 114,  330 => 140,  315 => 129,  308 => 129,  301 => 102,  296 => 97,  291 => 95,  288 => 98,  279 => 113,  276 => 96,  274 => 111,  265 => 89,  262 => 103,  254 => 86,  251 => 96,  246 => 88,  243 => 86,  238 => 83,  232 => 87,  224 => 77,  222 => 76,  212 => 82,  205 => 75,  198 => 71,  194 => 69,  191 => 74,  188 => 66,  180 => 65,  175 => 62,  171 => 62,  168 => 60,  165 => 59,  159 => 58,  156 => 56,  153 => 51,  150 => 50,  144 => 48,  137 => 47,  133 => 41,  126 => 35,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 32,  102 => 31,  99 => 28,  93 => 37,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 17,  67 => 24,  62 => 22,  56 => 5,  48 => 8,  46 => 9,  41 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
