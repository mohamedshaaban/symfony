<?php

/* @SyliusShop/Product/Show/_inventory.html.twig */
class __TwigTemplate_5ae9783af4fcc083b5ad6be2a2f393d1c09ba007b21513f98bc33bdce7954b86 extends Twig_Template
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
        $__internal_c7ce1e8a074b058e7932a68a51429b63bd8d342d074427d1f5937f50f65f025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ce1e8a074b058e7932a68a51429b63bd8d342d074427d1f5937f50f65f025a->enter($__internal_c7ce1e8a074b058e7932a68a51429b63bd8d342d074427d1f5937f50f65f025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_inventory.html.twig"));

        $__internal_56dbebbd5af2ac5ef0ef21c0fa61b837573360772f75b9daa2047c280e1a7a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dbebbd5af2ac5ef0ef21c0fa61b837573360772f75b9daa2047c280e1a7a09->enter($__internal_56dbebbd5af2ac5ef0ef21c0fa61b837573360772f75b9daa2047c280e1a7a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_inventory.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method") || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "variants", array()), "first", array())))))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_outOfStock.html.twig", "@SyliusShop/Product/Show/_inventory.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_cart_add_item", array("template" => "@SyliusShop/Product/Show/_addToCart.html.twig", "productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "id", array()))));
            echo "
";
        }
        
        $__internal_c7ce1e8a074b058e7932a68a51429b63bd8d342d074427d1f5937f50f65f025a->leave($__internal_c7ce1e8a074b058e7932a68a51429b63bd8d342d074427d1f5937f50f65f025a_prof);

        
        $__internal_56dbebbd5af2ac5ef0ef21c0fa61b837573360772f75b9daa2047c280e1a7a09->leave($__internal_56dbebbd5af2ac5ef0ef21c0fa61b837573360772f75b9daa2047c280e1a7a09_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_inventory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if product.variants.empty() or product.simple and not sylius_inventory_is_available(product.variants.first) %}
    {% include '@SyliusShop/Product/Show/_outOfStock.html.twig' %}
{% else %}
    {{ render(url('sylius_shop_partial_cart_add_item', {'template': '@SyliusShop/Product/Show/_addToCart.html.twig', 'productId': product.id})) }}
{% endif %}
", "@SyliusShop/Product/Show/_inventory.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_inventory.html.twig");
    }
}
