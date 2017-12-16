<?php

/* @SyliusShop/Product/Show/_imageVariants.html.twig */
class __TwigTemplate_a4bbe115bec3166886358cd29ba00ee6b5d57a89871879dff43abc3a496b4407 extends Twig_Template
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
        $__internal_6f1d145c6264b60ec661263060605bd9d74af34a104c50ab5a1c7d5954ea35f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1d145c6264b60ec661263060605bd9d74af34a104c50ab5a1c7d5954ea35f2->enter($__internal_6f1d145c6264b60ec661263060605bd9d74af34a104c50ab5a1c7d5954ea35f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_imageVariants.html.twig"));

        $__internal_950461e3e6c374e0cf535c82357f0284338a9cbb149afdf85c5b892939114c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950461e3e6c374e0cf535c82357f0284338a9cbb149afdf85c5b892939114c2f->enter($__internal_950461e3e6c374e0cf535c82357f0284338a9cbb149afdf85c5b892939114c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_imageVariants.html.twig"));

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
        
        $__internal_6f1d145c6264b60ec661263060605bd9d74af34a104c50ab5a1c7d5954ea35f2->leave($__internal_6f1d145c6264b60ec661263060605bd9d74af34a104c50ab5a1c7d5954ea35f2_prof);

        
        $__internal_950461e3e6c374e0cf535c82357f0284338a9cbb149afdf85c5b892939114c2f->leave($__internal_950461e3e6c374e0cf535c82357f0284338a9cbb149afdf85c5b892939114c2f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_imageVariants.html.twig";
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
", "@SyliusShop/Product/Show/_imageVariants.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_imageVariants.html.twig");
    }
}
