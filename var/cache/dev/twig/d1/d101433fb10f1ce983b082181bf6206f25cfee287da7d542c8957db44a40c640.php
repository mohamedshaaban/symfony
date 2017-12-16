<?php

/* SyliusShopBundle:Product:_info.html.twig */
class __TwigTemplate_d6b1463feffda08ce4f15de53ea7fe071044521ef2222a19e2332078da20ffd0 extends Twig_Template
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
        $__internal_09067893572f1963a4095b94624dcb0ab319320b6ba996ca8a5a4f6f45ac02a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09067893572f1963a4095b94624dcb0ab319320b6ba996ca8a5a4f6f45ac02a8->enter($__internal_09067893572f1963a4095b94624dcb0ab319320b6ba996ca8a5a4f6f45ac02a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_info.html.twig"));

        $__internal_e561ea5acfafcb2e0516cab7bc783534dac5b6293beced8efb8a39ee59851496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e561ea5acfafcb2e0516cab7bc783534dac5b6293beced8efb8a39ee59851496->enter($__internal_e561ea5acfafcb2e0516cab7bc783534dac5b6293beced8efb8a39ee59851496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_info.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 1, $this->getSourceContext()); })()), "product", array());
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        $this->loadTemplate("@SyliusShop/Product/_mainImage.html.twig", "SyliusShopBundle:Product:_info.html.twig", 4)->display(array_merge($context, array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "filter" => "sylius_shop_product_tiny_thumbnail")));
        // line 5
        echo "    <div class=\"content\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_show", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "translation", array()), "locale", array()))), "html", null, true);
        echo "\" class=\"sylius-product-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</a>
        <span class=\"sub header sylius-product-variant-code\">
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 8, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 12
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "hasOptions", array(), "method")) {
            // line 13
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 14, $this->getSourceContext()); })()), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 15
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        } elseif ( !(null === twig_get_attribute($this->env, $this->getSourceContext(),         // line 20
(isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 20, $this->getSourceContext()); })()), "name", array()))) {
            // line 21
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 23, $this->getSourceContext()); })()), "name", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_09067893572f1963a4095b94624dcb0ab319320b6ba996ca8a5a4f6f45ac02a8->leave($__internal_09067893572f1963a4095b94624dcb0ab319320b6ba996ca8a5a4f6f45ac02a8_prof);

        
        $__internal_e561ea5acfafcb2e0516cab7bc783534dac5b6293beced8efb8a39ee59851496->leave($__internal_e561ea5acfafcb2e0516cab7bc783534dac5b6293beced8efb8a39ee59851496_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  76 => 20,  73 => 19,  64 => 16,  59 => 15,  55 => 14,  52 => 13,  50 => 12,  43 => 8,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% include '@SyliusShop/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_shop_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <a href=\"{{ path('sylius_shop_product_show', {'slug': product.slug, '_locale': product.translation.locale}) }}\" class=\"sylius-product-name\">{{ product.name }}</a>
        <span class=\"sub header sylius-product-variant-code\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif variant.name is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ variant.name }}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Product:_info.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/_info.html.twig");
    }
}
