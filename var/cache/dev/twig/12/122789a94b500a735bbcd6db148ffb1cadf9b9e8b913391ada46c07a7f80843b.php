<?php

/* SyliusShopBundle:Product/Show:_inventory.html.twig */
class __TwigTemplate_43a82a6ceca70e90ec3d77d8c8d983afac5b603e718461ccf106f066855a6726 extends Twig_Template
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
        $__internal_a597f0e0dfe856db959b0ef7f2c8ee008abd7740cb38154c72c9b11e3acdc857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a597f0e0dfe856db959b0ef7f2c8ee008abd7740cb38154c72c9b11e3acdc857->enter($__internal_a597f0e0dfe856db959b0ef7f2c8ee008abd7740cb38154c72c9b11e3acdc857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_inventory.html.twig"));

        $__internal_fabb55b1b0ff5dfea8890d52221af3eeea3e36f4259ba31f6dffce1cd680adb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabb55b1b0ff5dfea8890d52221af3eeea3e36f4259ba31f6dffce1cd680adb5->enter($__internal_fabb55b1b0ff5dfea8890d52221af3eeea3e36f4259ba31f6dffce1cd680adb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_inventory.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "variants", array()), "empty", array(), "method") || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "simple", array()) &&  !call_user_func_array($this->env->getFunction('sylius_inventory_is_available')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 1, $this->getSourceContext()); })()), "variants", array()), "first", array())))))) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Product/Show/_outOfStock.html.twig", "SyliusShopBundle:Product/Show:_inventory.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_cart_add_item", array("template" => "@SyliusShop/Product/Show/_addToCart.html.twig", "productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->getSourceContext()); })()), "id", array()))));
            echo "
";
        }
        
        $__internal_a597f0e0dfe856db959b0ef7f2c8ee008abd7740cb38154c72c9b11e3acdc857->leave($__internal_a597f0e0dfe856db959b0ef7f2c8ee008abd7740cb38154c72c9b11e3acdc857_prof);

        
        $__internal_fabb55b1b0ff5dfea8890d52221af3eeea3e36f4259ba31f6dffce1cd680adb5->leave($__internal_fabb55b1b0ff5dfea8890d52221af3eeea3e36f4259ba31f6dffce1cd680adb5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_inventory.html.twig";
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
", "SyliusShopBundle:Product/Show:_inventory.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_inventory.html.twig");
    }
}
