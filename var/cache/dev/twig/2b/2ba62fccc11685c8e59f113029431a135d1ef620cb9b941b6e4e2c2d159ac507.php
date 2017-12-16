<?php

/* SyliusShopBundle:Product/Show:_imageVariants.html.twig */
class __TwigTemplate_8c1eaf1e3f8ded75b74b1a227ab89408f61ad413f801875c77632db254808e7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3134f76dabb398bebe2bbe92416cb77548c5a47207b1c94eba2927cd91d50b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3134f76dabb398bebe2bbe92416cb77548c5a47207b1c94eba2927cd91d50b1e->enter($__internal_3134f76dabb398bebe2bbe92416cb77548c5a47207b1c94eba2927cd91d50b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_imageVariants.html.twig"));

        $__internal_3b2a909087a511238bf5efcc610a9b31f76fcbc6a610d10c59a63a0d814413c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2a909087a511238bf5efcc610a9b31f76fcbc6a610d10c59a63a0d814413c3->enter($__internal_3b2a909087a511238bf5efcc610a9b31f76fcbc6a610d10c59a63a0d814413c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_imageVariants.html.twig"));

        // line 1
        echo "<div class=\"sylius-image-variants\">
";
        // line 2
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 2, $this->getSourceContext()); })()), "getVariantSelectionMethod", array(), "method") == "match")) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 3, $this->getSourceContext()); })()), "productVariants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 4
                echo "    <div data-variant-options=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "optionValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["option"], "code", array()), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 7, $this->getSourceContext()); })()), "productVariants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 8
                echo "    <div data-variant-code=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["variant"], "code", array()), "html", null, true);
                echo "\"></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 11
        echo "</div>
";
        
        $__internal_3134f76dabb398bebe2bbe92416cb77548c5a47207b1c94eba2927cd91d50b1e->leave($__internal_3134f76dabb398bebe2bbe92416cb77548c5a47207b1c94eba2927cd91d50b1e_prof);

        
        $__internal_3b2a909087a511238bf5efcc610a9b31f76fcbc6a610d10c59a63a0d814413c3->leave($__internal_3b2a909087a511238bf5efcc610a9b31f76fcbc6a610d10c59a63a0d814413c3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_imageVariants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  58 => 8,  53 => 7,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sylius-image-variants\">
{% if product.getVariantSelectionMethod() == 'match' %}
    {% for variant in image.productVariants %}
    <div data-variant-options=\"{% for option in variant.optionValues %}{{ option.code }} {% endfor %}\"></div>
    {% endfor %}
{% else %}
    {% for variant in image.productVariants %}
    <div data-variant-code=\"{{ variant.code }}\"></div>
    {% endfor %}
{% endif %}
</div>
", "SyliusShopBundle:Product/Show:_imageVariants.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_imageVariants.html.twig");
    }
}
