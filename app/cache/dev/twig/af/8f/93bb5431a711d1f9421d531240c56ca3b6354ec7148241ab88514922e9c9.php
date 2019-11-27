<?php

/* SyliusBackendBundle::forms.html.twig */
class __TwigTemplate_af8f93bb5431a711d1f9421d531240c56ca3b6354ec7148241ab88514922e9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'field_row' => array($this, 'block_field_row'),
            'field_errors' => array($this, 'block_field_errors'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_label' => array($this, 'block_form_label'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('field_row', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('field_errors', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('form_errors', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('form_label', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('date_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('time_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 4
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        // line 5
        if (("file" == (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
            // line 6
            echo "        <span class=\"btn large file-overlay\"><i class=\"icon-folder-open\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.form.choose_file"), "html", null, true);
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_field_row($context, array $blocks = array())
    {
        // line 12
        ob_start();
        // line 13
        echo "    <div class=\"control-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array())), "empty_value" => ((array_key_exists("empty_value", $context)) ? (_twig_default_filter((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), null)) : (null))));
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 23
    public function block_field_errors($context, array $blocks = array())
    {
        // line 24
        ob_start();
        // line 25
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 26
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                echo "        <div class=\"help-block\">
          ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 35
    public function block_form_errors($context, array $blocks = array())
    {
        // line 36
        ob_start();
        // line 37
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 38
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 39
                echo "        <div class=\"alert alert-error\">
            ";
                // line 40
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                // line 44
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 51
    public function block_form_label($context, array $blocks = array())
    {
        // line 52
        ob_start();
        // line 53
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 54
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 55
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 56
                echo "        ";
            }
            // line 57
            echo "        ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 58
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 59
                echo "        ";
            }
            // line 60
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label") . (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? (" required") : (" optional")))));
            // line 61
            echo "        <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 69
        ob_start();
        // line 70
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 71
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 73
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 74
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
                ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
                ";
            // line 77
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
                ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")))));
            echo "
            </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 84
    public function block_date_widget($context, array $blocks = array())
    {
        // line 85
        ob_start();
        // line 86
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 87
            echo "    ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
";
        } else {
            // line 89
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "inline")) : ("inline"))));
            // line 90
            echo "            ";
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 91
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . " input-small")))), "{{ month }}" =>             // line 92
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . " input-mini")))), "{{ day }}" =>             // line 93
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class"), "")) : ("")) . " input-mini"))))));
            // line 94
            echo "
        ";
            // line 95
            $this->displayBlock("help", $context, $blocks);
            echo "
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 100
    public function block_time_widget($context, array $blocks = array())
    {
        // line 101
        ob_start();
        // line 102
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 105
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 106
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', array("attr" => array("size" => "1", "class" => "input-mini")));
            }
            // line 108
            echo "        </div>
        ";
            // line 109
            $this->displayBlock("help", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        ob_start();
        // line 116
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "control-group"));
        // line 117
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 119
            echo "                <div class=\"control-choice-input\">
                    ";
            // line 120
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
                    ";
            // line 121
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle::forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  405 => 124,  396 => 121,  392 => 120,  389 => 119,  385 => 118,  380 => 117,  377 => 116,  374 => 115,  371 => 114,  363 => 109,  360 => 108,  352 => 107,  347 => 106,  344 => 105,  338 => 103,  335 => 102,  333 => 101,  330 => 100,  322 => 95,  319 => 94,  317 => 93,  316 => 92,  315 => 91,  313 => 90,  310 => 89,  304 => 87,  302 => 86,  300 => 85,  297 => 84,  284 => 77,  280 => 76,  276 => 75,  271 => 74,  268 => 73,  262 => 71,  257 => 69,  254 => 68,  245 => 62,  229 => 61,  226 => 60,  223 => 59,  220 => 58,  217 => 57,  214 => 56,  211 => 55,  208 => 54,  205 => 53,  203 => 52,  200 => 51,  194 => 47,  184 => 40,  181 => 39,  176 => 38,  173 => 37,  162 => 31,  150 => 27,  142 => 25,  140 => 24,  137 => 23,  128 => 17,  124 => 16,  119 => 14,  112 => 13,  110 => 12,  107 => 11,  98 => 6,  96 => 5,  83 => 4,  75 => 1,  71 => 114,  68 => 113,  63 => 99,  53 => 67,  51 => 51,  48 => 50,  46 => 35,  36 => 11,  33 => 10,  31 => 1,  91 => 17,  88 => 16,  80 => 3,  78 => 2,  58 => 83,  29 => 2,  23 => 1,  22 => 1,  270 => 65,  266 => 64,  259 => 70,  246 => 56,  242 => 55,  239 => 54,  228 => 53,  197 => 43,  190 => 39,  186 => 44,  182 => 37,  171 => 36,  169 => 31,  165 => 30,  161 => 29,  157 => 28,  153 => 28,  149 => 26,  144 => 24,  136 => 21,  132 => 19,  130 => 18,  127 => 17,  116 => 16,  103 => 12,  89 => 11,  84 => 14,  79 => 6,  77 => 5,  72 => 4,  55 => 3,  52 => 2,  40 => 6,  43 => 34,  41 => 23,  339 => 128,  301 => 126,  296 => 119,  293 => 118,  288 => 78,  283 => 68,  279 => 32,  235 => 30,  230 => 22,  227 => 21,  221 => 48,  216 => 129,  213 => 118,  210 => 45,  207 => 115,  204 => 113,  201 => 44,  191 => 104,  177 => 34,  172 => 91,  168 => 35,  164 => 89,  160 => 88,  152 => 83,  145 => 26,  134 => 70,  131 => 69,  129 => 68,  121 => 63,  115 => 62,  111 => 61,  104 => 56,  101 => 55,  92 => 50,  87 => 48,  82 => 7,  67 => 33,  64 => 21,  59 => 18,  49 => 11,  34 => 4,  32 => 3,  27 => 1,  66 => 100,  61 => 84,  56 => 68,  50 => 14,  45 => 10,  38 => 22,  35 => 4,  30 => 1,  28 => 3,);
    }
}
