<?php

/* SyliusBackendBundle:Product/Form:_images.html.twig */
class __TwigTemplate_393c9f9788bacfb99ec0287c1de929039ee174f00ec059970b45d1bd6d9f0d8d extends Twig_Template
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
        echo "<div class=\"tab-pane\" id=\"images\">
    <div id=\"sylius-assortment-product-images\" data-toggle=\"modal-gallery\" data-target=\"#modal-gallery\" class=\"collection-container\" data-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "images"), "vars"), "prototype"), 'widget'));
        echo "\">
        ";
        // line 3
        $context["images"] = $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images");
        // line 4
        echo "
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "images"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 6
            echo "        <div class=\"sylius-assortment-variant-images-image\">
            <div class=\"control-group\">
                <div class=\"controls\">
                    ";
            // line 9
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path")) > 0)) {
                // line 10
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_gallery"), "html", null, true);
                echo "\"  data-gallery=\"gallery\">
                        <img class=\"img-polaroid\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "sylius_60x60"), "html", null, true);
                echo "\" alt=\"\" />
                    </a>
                    ";
            }
            // line 14
            echo "                    &nbsp;
                    ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterVariant"), "images"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"), "file"), 'widget');
            echo "
                    &nbsp;
                    <a href=\"#\" class=\"btn btn-danger\" data-collection-button=\"delete\" data-prototype=\"sylius-assortment-product-images\" data-collection=\"sylius-assortment-product-images\"><i class=\"icon-trash\"></i>&nbsp;";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.delete_image"), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>

    <div class=\"control-group\">
        <div class=\"controls\">
            <a href=\"#\" class=\"btn btn-success\" data-collection-button=\"add\" data-prototype=\"sylius-assortment-product-images\" data-collection=\"sylius-assortment-product-images\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sylius.variant.add_image"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SyliusBackendBundle:Product/Form:_images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  96 => 22,  77 => 17,  72 => 15,  63 => 11,  56 => 9,  51 => 6,  31 => 4,  38 => 5,  65 => 13,  59 => 9,  48 => 7,  27 => 3,  58 => 10,  54 => 10,  50 => 9,  33 => 5,  25 => 2,  55 => 15,  43 => 6,  40 => 8,  35 => 6,  30 => 3,  26 => 3,  22 => 1,  85 => 11,  81 => 10,  78 => 9,  69 => 14,  53 => 4,  49 => 11,  46 => 8,  32 => 5,  88 => 23,  86 => 22,  79 => 20,  73 => 17,  70 => 16,  67 => 15,  45 => 11,  41 => 6,  37 => 5,  34 => 5,  29 => 3,);
    }
}
