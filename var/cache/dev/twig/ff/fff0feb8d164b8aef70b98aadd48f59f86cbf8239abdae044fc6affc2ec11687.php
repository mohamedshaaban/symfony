<?php

/* @SyliusShop/Product/Show/_addToCart.html.twig */
class __TwigTemplate_931a8f2fcded34280cd64a93899bc6e6728be6736e17b42d57dde8ecfc972ebc extends Twig_Template
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
        $__internal_5922141d65e8de46d84c5b4378d354e4f79bbd2cb2be3a5c5595a87062b2b02c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5922141d65e8de46d84c5b4378d354e4f79bbd2cb2be3a5c5595a87062b2b02c->enter($__internal_5922141d65e8de46d84c5b4378d354e4f79bbd2cb2be3a5c5595a87062b2b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        $__internal_0146633034cd1f5886b3e284f6abc6783d6aacc8af1eae1eb7f3cab11adb0b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0146633034cd1f5886b3e284f6abc6783d6aacc8af1eae1eb7f3cab11adb0b82->enter($__internal_0146633034cd1f5886b3e284f6abc6783d6aacc8af1eae1eb7f3cab11adb0b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_addToCart.html.twig"));

        // line 1
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 1, $this->getSourceContext()); })()), "variant", array()), "product", array());
        // line 2
        echo "
";
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 4
        echo "
<div class=\"ui segment\" id=\"sylius-product-selecting-variant\">
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.before_add_to_cart", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 6, $this->getSourceContext()); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_ajax_cart_add_item", array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 8, $this->getSourceContext()); })()), "id", array()))), "attr" => array("id" => "sylius-product-adding-to-cart", "class" => "ui loadable form", "novalidate" => "novalidate", "data-redirect" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 8, $this->getSourceContext()); })()), "getRedirectRoute", array(0 => "summary"), "method")))));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        echo "
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
    ";
        // line 11
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 11, $this->getSourceContext()); })()), "simple", array())) {
            // line 12
            echo "        ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 12, $this->getSourceContext()); })()), "variantSelectionMethodChoice", array())) {
                // line 13
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "@SyliusShop/Product/Show/_addToCart.html.twig", 15)->display($context);
                // line 16
                echo "        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "cartItem", array()), "quantity", array()), 'row');
        echo "

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.add_to_cart_form", array("product" => (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->getSourceContext()); })()), "order_item" => (isset($context["order_item"]) || array_key_exists("order_item", $context) ? $context["order_item"] : (function () { throw new Twig_Error_Runtime('Variable "order_item" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

    <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_to_cart"), "html", null, true);
        echo "</button>
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_5922141d65e8de46d84c5b4378d354e4f79bbd2cb2be3a5c5595a87062b2b02c->leave($__internal_5922141d65e8de46d84c5b4378d354e4f79bbd2cb2be3a5c5595a87062b2b02c_prof);

        
        $__internal_0146633034cd1f5886b3e284f6abc6783d6aacc8af1eae1eb7f3cab11adb0b82->leave($__internal_0146633034cd1f5886b3e284f6abc6783d6aacc8af1eae1eb7f3cab11adb0b82_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_addToCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  85 => 23,  81 => 22,  76 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  41 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = order_item.variant.product %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

<div class=\"ui segment\" id=\"sylius-product-selecting-variant\">
    {{ sonata_block_render_event('sylius.shop.product.show.before_add_to_cart', {'product': product, 'order_item': order_item}) }}

    {{ form_start(form, {'action': path('sylius_shop_ajax_cart_add_item', {'productId': product.id}), 'attr': {'id': 'sylius-product-adding-to-cart', 'class': 'ui loadable form', 'novalidate': 'novalidate', 'data-redirect': path(configuration.getRedirectRoute('summary'))}}) }}
    {{ form_errors(form) }}
    <div class=\"ui red label bottom pointing hidden sylius-validation-error\" id=\"sylius-cart-validation-error\"></div>
    {% if not product.simple %}
        {% if product.variantSelectionMethodChoice %}
            {% include '@SyliusShop/Product/Show/_variants.html.twig' %}
        {% else %}
            {% include '@SyliusShop/Product/Show/_options.html.twig' %}
        {% endif %}
    {% endif %}
    {{ form_row(form.cartItem.quantity) }}

    {{ sonata_block_render_event('sylius.shop.product.show.add_to_cart_form', {'product': product, 'order_item': order_item}) }}

    <button type=\"submit\" class=\"ui huge primary icon labeled button\"><i class=\"cart icon\"></i> {{ 'sylius.ui.add_to_cart'|trans }}</button>
    {{ form_row(form._token) }}
    {{ form_end(form, {'render_rest': false}) }}
</div>
", "@SyliusShop/Product/Show/_addToCart.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_addToCart.html.twig");
    }
}
