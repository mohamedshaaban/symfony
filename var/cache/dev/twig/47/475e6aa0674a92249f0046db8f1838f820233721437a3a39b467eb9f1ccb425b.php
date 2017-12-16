<?php

/* SyliusShopBundle:Product/Show:_addToCart.html.twig */
class __TwigTemplate_274129d4262de99131b835007ad329a920ffff33b3942a2ca02ce7ddabb89b3b extends Twig_Template
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
        $__internal_eb91256e41519b9eda0186729576593ba786896824c1c47dfaac2e41a2de7851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb91256e41519b9eda0186729576593ba786896824c1c47dfaac2e41a2de7851->enter($__internal_eb91256e41519b9eda0186729576593ba786896824c1c47dfaac2e41a2de7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_addToCart.html.twig"));

        $__internal_1830d832a001ddb8110d24567ac38576d98d2db6e1b8e99616d630d944ae1367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1830d832a001ddb8110d24567ac38576d98d2db6e1b8e99616d630d944ae1367->enter($__internal_1830d832a001ddb8110d24567ac38576d98d2db6e1b8e99616d630d944ae1367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_addToCart.html.twig"));

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
                $this->loadTemplate("@SyliusShop/Product/Show/_variants.html.twig", "SyliusShopBundle:Product/Show:_addToCart.html.twig", 13)->display($context);
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "            ";
                $this->loadTemplate("@SyliusShop/Product/Show/_options.html.twig", "SyliusShopBundle:Product/Show:_addToCart.html.twig", 15)->display($context);
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
        
        $__internal_eb91256e41519b9eda0186729576593ba786896824c1c47dfaac2e41a2de7851->leave($__internal_eb91256e41519b9eda0186729576593ba786896824c1c47dfaac2e41a2de7851_prof);

        
        $__internal_1830d832a001ddb8110d24567ac38576d98d2db6e1b8e99616d630d944ae1367->leave($__internal_1830d832a001ddb8110d24567ac38576d98d2db6e1b8e99616d630d944ae1367_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_addToCart.html.twig";
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
", "SyliusShopBundle:Product/Show:_addToCart.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_addToCart.html.twig");
    }
}
