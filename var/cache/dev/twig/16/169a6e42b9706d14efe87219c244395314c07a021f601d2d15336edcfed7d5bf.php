<?php

/* SyliusShopBundle:Cart/Summary:_totals.html.twig */
class __TwigTemplate_665f436b639b33f86e30890c345f2869302b94ef36f2cc8c27dd37ce3d11a801 extends Twig_Template
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
        $__internal_e797916e157a35b43397ffd5d8b41479e07050ec5896f19a945b1707df633184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e797916e157a35b43397ffd5d8b41479e07050ec5896f19a945b1707df633184->enter($__internal_e797916e157a35b43397ffd5d8b41479e07050ec5896f19a945b1707df633184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_totals.html.twig"));

        $__internal_b503dccdf6260f1901a4754bac3be1c4c9b6acb2804f85b33e9a1dd21e6ed04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b503dccdf6260f1901a4754bac3be1c4c9b6acb2804f85b33e9a1dd21e6ed04f->enter($__internal_b503dccdf6260f1901a4754bac3be1c4c9b6acb2804f85b33e9a1dd21e6ed04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Cart/Summary:_totals.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary"), "html", null, true);
        echo "</h2>

    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 6, $this->getSourceContext()); })()))));
        echo "

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">";
        // line 12
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 12, $this->getSourceContext()); })()), "taxTotal", array()));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">";
        // line 16
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 16, $this->getSourceContext()); })()), "shippingTotal", array()));
        echo "</td>
        </tr>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 18, $this->getSourceContext()); })()), "orderPromotionTotal", array())) {
            // line 19
            echo "        <tr>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.discount"), "html", null, true);
            echo ":</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">";
            // line 21
            echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 21, $this->getSourceContext()); })()), "orderPromotionTotal", array()));
            echo "</td>
        </tr>
        ";
        }
        // line 24
        echo "        <tr style=\"font-size: 2em;\">
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_total"), "html", null, true);
        echo ":</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">";
        // line 26
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 26, $this->getSourceContext()); })()), "total", array()));
        echo "</td>
        </tr>
        ";
        // line 28
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 28, $this->getSourceContext()); })()), "currencyCode", array()) === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sylius"]) || array_key_exists("sylius", $context) ? $context["sylius"] : (function () { throw new Twig_Error_Runtime('Variable "sylius" does not exist.', 28, $this->getSourceContext()); })()), "currencyCode", array()))) {
            // line 29
            echo "            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.base_currency_order_total"), "html", null, true);
            echo ":</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">";
            // line 31
            echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 31, $this->getSourceContext()); })()), "currencyCode", array()));
            echo "</td>
            </tr>
        ";
        }
        // line 34
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_e797916e157a35b43397ffd5d8b41479e07050ec5896f19a945b1707df633184->leave($__internal_e797916e157a35b43397ffd5d8b41479e07050ec5896f19a945b1707df633184_prof);

        
        $__internal_b503dccdf6260f1901a4754bac3be1c4c9b6acb2804f85b33e9a1dd21e6ed04f->leave($__internal_b503dccdf6260f1901a4754bac3be1c4c9b6acb2804f85b33e9a1dd21e6ed04f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 34,  99 => 31,  95 => 30,  92 => 29,  90 => 28,  85 => 26,  81 => 25,  78 => 24,  72 => 21,  68 => 20,  65 => 19,  63 => 18,  58 => 16,  54 => 15,  48 => 12,  44 => 11,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\">
    <h2 class=\"ui dividing header\">{{ 'sylius.ui.summary'|trans }}</h2>

    {{ sonata_block_render_event('sylius.shop.cart.summary.totals', {'cart': cart}) }}

    <table class=\"ui very basic table\">
        <tbody>
        <tr>
            <td>{{ 'sylius.ui.tax'|trans }}:</td>
            <td id=\"sylius-cart-tax-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.taxTotal) }}</td>
        </tr>
        <tr>
            <td>{{ 'sylius.ui.shipping'|trans }}:</td>
            <td id=\"sylius-cart-shipping-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.shippingTotal) }}</td>
        </tr>
        {% if cart.orderPromotionTotal %}
        <tr>
            <td>{{ 'sylius.ui.discount'|trans }}:</td>
            <td id=\"sylius-cart-promotion-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.orderPromotionTotal) }}</td>
        </tr>
        {% endif %}
        <tr style=\"font-size: 2em;\">
            <td>{{ 'sylius.ui.order_total'|trans }}:</td>
            <td id=\"sylius-cart-grand-total\" class=\"right aligned\">{{ money.convertAndFormat(cart.total) }}</td>
        </tr>
        {% if cart.currencyCode is not same as(sylius.currencyCode) %}
            <tr>
                <td>{{ 'sylius.ui.base_currency_order_total'|trans }}:</td>
                <td id=\"sylius-cart-base-grand-total\" class=\"right aligned\">{{ money.format(cart.total, cart.currencyCode) }}</td>
            </tr>
        {% endif %}
        </tbody>
    </table>
</div>
", "SyliusShopBundle:Cart/Summary:_totals.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_totals.html.twig");
    }
}
