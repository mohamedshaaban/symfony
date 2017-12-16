<?php

/* SyliusAdminBundle:Order/Show/Summary:_item.html.twig */
class __TwigTemplate_e27a88204bdd7501d888238af3aa7dfd95e41bf17a0e1cd1855c4012116934c6 extends Twig_Template
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
        $__internal_142666a88f622baa5ebe64e3526be62eab044959117a6a935c293636834e8481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_142666a88f622baa5ebe64e3526be62eab044959117a6a935c293636834e8481->enter($__internal_142666a88f622baa5ebe64e3526be62eab044959117a6a935c293636834e8481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        $__internal_4d792f1cf7ff9de7755a05199e0b3b5fe1af1423407c896026cf2ea604e6f6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d792f1cf7ff9de7755a05199e0b3b5fe1af1423407c896026cf2ea604e6f6cb->enter($__internal_4d792f1cf7ff9de7755a05199e0b3b5fe1af1423407c896026cf2ea604e6f6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 5
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 6
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 7
        echo "
";
        // line 8
        $context["variant"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->getSourceContext()); })()), "variant", array());
        // line 9
        $context["product"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["variant"]) || array_key_exists("variant", $context) ? $context["variant"] : (function () { throw new Twig_Error_Runtime('Variable "variant" does not exist.', 9, $this->getSourceContext()); })()), "product", array());
        // line 10
        echo "
<tr>
    <td class=\"single line\">
        ";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Product/_info.html.twig", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", 13)->display($context);
        // line 14
        echo "    </td>
    <td class=\"right aligned unit-price\">
        ";
        // line 16
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->getSourceContext()); })()), "unitPrice", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discounted-unit-price\">
        ";
        // line 19
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 19, $this->getSourceContext()); })()), "discountedUnitPrice", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned quantity\">
        ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "quantity", array()), "html", null, true);
        echo "
    </td>
    <td class=\"right aligned subtotal\">
        ";
        // line 25
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "subtotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned discount\">
        ";
        // line 28
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "getAdjustmentsTotalRecursively", array(0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotionAdjustment" does not exist.', 28, $this->getSourceContext()); })())), "method"), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned tax\">
        ";
        // line 31
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->getSourceContext()); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 31, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
    <td class=\"right aligned total\">
        ";
        // line 34
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 34, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        
        $__internal_142666a88f622baa5ebe64e3526be62eab044959117a6a935c293636834e8481->leave($__internal_142666a88f622baa5ebe64e3526be62eab044959117a6a935c293636834e8481_prof);

        
        $__internal_4d792f1cf7ff9de7755a05199e0b3b5fe1af1423407c896026cf2ea604e6f6cb->leave($__internal_4d792f1cf7ff9de7755a05199e0b3b5fe1af1423407c896026cf2ea604e6f6cb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  86 => 31,  80 => 28,  74 => 25,  68 => 22,  62 => 19,  56 => 16,  52 => 14,  50 => 13,  45 => 10,  43 => 9,  41 => 8,  38 => 7,  36 => 6,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set variant = item.variant %}
{% set product = variant.product %}

<tr>
    <td class=\"single line\">
        {% include '@SyliusAdmin/Product/_info.html.twig' %}
    </td>
    <td class=\"right aligned unit-price\">
        {{ money.format(item.unitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned discounted-unit-price\">
        {{ money.format(item.discountedUnitPrice, order.currencyCode) }}
    </td>
    <td class=\"right aligned quantity\">
        {{ item.quantity }}
    </td>
    <td class=\"right aligned subtotal\">
        {{ money.format(item.subtotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned discount\">
        {{ money.format(item.getAdjustmentsTotalRecursively(orderPromotionAdjustment), order.currencyCode) }}
    </td>
    <td class=\"right aligned tax\">
        {{ money.format(item.taxTotal, order.currencyCode) }}
    </td>
    <td class=\"right aligned total\">
        {{ money.format(item.total, order.currencyCode) }}
    </td>
</tr>
", "SyliusAdminBundle:Order/Show/Summary:_item.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/Summary/_item.html.twig");
    }
}
