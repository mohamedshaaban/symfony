<?php

/* SyliusShopBundle:Common/Order/Table:_shipping.html.twig */
class __TwigTemplate_02dc4182ff6ebc5ebc20c1ade5eb6c670084de935b8b53f7cccc1df48ce2e8fa extends Twig_Template
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
        $__internal_695ecbeae0e297ae9ae5cef64a31225579f64eb7bb156551360eb48099615a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695ecbeae0e297ae9ae5cef64a31225579f64eb7bb156551360eb48099615a06->enter($__internal_695ecbeae0e297ae9ae5cef64a31225579f64eb7bb156551360eb48099615a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig"));

        $__internal_9e7db06923550547820931e2fa1d0dfd4e1a1851db221e5a9d8ec3b40425d3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7db06923550547820931e2fa1d0dfd4e1a1851db221e5a9d8ec3b40425d3a1->enter($__internal_9e7db06923550547820931e2fa1d0dfd4e1a1851db221e5a9d8ec3b40425d3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 4
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 4, $this->getSourceContext()); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotionAdjustment" does not exist.', 4, $this->getSourceContext()); })())), "method")));
        // line 5
        echo "
";
        // line 6
        if ( !twig_test_empty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 6, $this->getSourceContext()); })()))) {
            // line 7
            echo "    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 9, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 10
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 12
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 14
                echo $context["money"]->macro_convertAndFormat($context["amount"]);
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </div>
    </td>
";
        }
        // line 22
        echo "<td colspan=\"";
        if ( !twig_test_empty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 22, $this->getSourceContext()); })()))) {
            echo "2";
        } else {
            echo "4";
        }
        echo "\" class=\"right aligned\" id=\"shipping-total\">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_total"), "html", null, true);
        echo ":
    ";
        // line 24
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->getSourceContext()); })()), "shippingTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
</td>
";
        
        $__internal_695ecbeae0e297ae9ae5cef64a31225579f64eb7bb156551360eb48099615a06->leave($__internal_695ecbeae0e297ae9ae5cef64a31225579f64eb7bb156551360eb48099615a06_prof);

        
        $__internal_9e7db06923550547820931e2fa1d0dfd4e1a1851db221e5a9d8ec3b40425d3a1->leave($__internal_9e7db06923550547820931e2fa1d0dfd4e1a1851db221e5a9d8ec3b40425d3a1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 23,  72 => 22,  67 => 19,  56 => 14,  51 => 12,  47 => 10,  43 => 9,  39 => 7,  37 => 6,  34 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

{% if not orderShippingPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderShippingPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.convertAndFormat(amount) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
{% endif %}
<td colspan=\"{% if not orderShippingPromotions is empty %}2{% else %}4{% endif %}\" class=\"right aligned\" id=\"shipping-total\">
    {{ 'sylius.ui.shipping_total'|trans }}:
    {{ money.format(order.shippingTotal, order.currencyCode) }}
</td>
", "SyliusShopBundle:Common/Order/Table:_shipping.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_shipping.html.twig");
    }
}
