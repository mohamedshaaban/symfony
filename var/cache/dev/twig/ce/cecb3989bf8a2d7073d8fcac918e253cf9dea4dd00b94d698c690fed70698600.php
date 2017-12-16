<?php

/* SyliusAdminBundle:Order/Show/Summary:_totals.html.twig */
class __TwigTemplate_15e0d0370268d226ae593cc4f3e305ce7409939b624815a24abf9fe20588f0b2 extends Twig_Template
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
        $__internal_0b337c185280aea1f7fd85215e38a20b3cff1a548a9d6e6b9fdc6a21580acee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b337c185280aea1f7fd85215e38a20b3cff1a548a9d6e6b9fdc6a21580acee6->enter($__internal_0b337c185280aea1f7fd85215e38a20b3cff1a548a9d6e6b9fdc6a21580acee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig"));

        $__internal_8badfc593753de0dc42711fab229cd57e3ca2c62bc2adccbccd27f5f86133325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8badfc593753de0dc42711fab229cd57e3ca2c62bc2adccbccd27f5f86133325->enter($__internal_8badfc593753de0dc42711fab229cd57e3ca2c62bc2adccbccd27f5f86133325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", 1);
        // line 2
        echo "

";
        // line 4
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 5
        $context["orderShippingPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT");
        // line 6
        $context["itemPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT");
        // line 7
        $context["shippingAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::SHIPPING_ADJUSTMENT");
        // line 8
        $context["taxAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::TAX_ADJUSTMENT");
        // line 9
        echo "
";
        // line 10
        $context["orderShippingPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderShippingPromotionAdjustment"]) || array_key_exists("orderShippingPromotionAdjustment", $context) ? $context["orderShippingPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotionAdjustment" does not exist.', 10, $this->getSourceContext()); })())), "method")));
        // line 11
        echo "
<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</strong>:
        ";
        // line 15
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->getSourceContext()); })()), "itemsTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </th>
</tr>
<tr>
    <td colspan=\"";
        // line 19
        echo (((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 19, $this->getSourceContext()); })())) ? (2) : (4));
        echo "\" id=\"shipping-charges\">
        ";
        // line 20
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->getSourceContext()); })()), "adjustments", array(0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "shippingAdjustment" does not exist.', 20, $this->getSourceContext()); })())), "method"), "isEmpty", array(), "method")) {
            // line 21
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->getSourceContext()); })()), "adjustments", array(0 => (isset($context["shippingAdjustment"]) || array_key_exists("shippingAdjustment", $context) ? $context["shippingAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "shippingAdjustment" does not exist.', 22, $this->getSourceContext()); })())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["adjustment"]) {
                // line 23
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["adjustment"], "label", array()), "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 27
                echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), $context["adjustment"], "amount", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->getSourceContext()); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adjustment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        ";
        } else {
            // line 34
            echo "            <p><small>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_shipping_charges"), "html", null, true);
            echo "</small></p>
        ";
        }
        // line 36
        echo "    </td>
    ";
        // line 37
        if ( !twig_test_empty((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 37, $this->getSourceContext()); })()))) {
            // line 38
            echo "    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderShippingPromotions"]) || array_key_exists("orderShippingPromotions", $context) ? $context["orderShippingPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderShippingPromotions" does not exist.', 40, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 41
                echo "                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">";
                // line 43
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</div>
                        <div class=\"description\">
                            ";
                // line 45
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 45, $this->getSourceContext()); })()), "currencyCode", array()));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        </div>
    </td>
    ";
        }
        // line 53
        echo "    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 55
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->getSourceContext()); })()), "shippingTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 55, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        ";
        // line 60
        $context["taxAdjustments"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 60, $this->getSourceContext()); })()), "getAdjustmentsRecursively", array(0 => (isset($context["taxAdjustment"]) || array_key_exists("taxAdjustment", $context) ? $context["taxAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustment" does not exist.', 60, $this->getSourceContext()); })())), "method");
        // line 61
        echo "        ";
        if ( !twig_test_empty((isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustments" does not exist.', 61, $this->getSourceContext()); })()))) {
            // line 62
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array((isset($context["taxAdjustments"]) || array_key_exists("taxAdjustments", $context) ? $context["taxAdjustments"] : (function () { throw new Twig_Error_Runtime('Variable "taxAdjustments" does not exist.', 63, $this->getSourceContext()); })()))));
            foreach ($context['_seq'] as $context["taxLabel"] => $context["taxAmount"]) {
                // line 64
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 66
                echo twig_escape_filter($this->env, $context["taxLabel"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 68
                echo $context["money"]->macro_format($context["taxAmount"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 68, $this->getSourceContext()); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['taxLabel'], $context['taxAmount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </div>
        ";
        } else {
            // line 75
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_taxes"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 77
        echo "    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 80
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 80, $this->getSourceContext()); })()), "taxTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 80, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        ";
        // line 85
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 85, $this->getSourceContext()); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotionAdjustment" does not exist.', 85, $this->getSourceContext()); })())), "method")));
        // line 86
        echo "        ";
        if ( !twig_test_empty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 86, $this->getSourceContext()); })()))) {
            // line 87
            echo "            <div class=\"ui relaxed divided list\">
                ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 88, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["label"] => $context["amount"]) {
                // line 89
                echo "                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">";
                // line 91
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</span>
                            <div class=\"description\">
                                ";
                // line 93
                echo $context["money"]->macro_format($context["amount"], twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 93, $this->getSourceContext()); })()), "currencyCode", array()));
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['amount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </div>
        ";
        } else {
            // line 100
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_promotion"), "html", null, true);
            echo ".</p>
        ";
        }
        // line 102
        echo "    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotion_total"), "html", null, true);
        echo "</strong>:
        ";
        // line 105
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 105, $this->getSourceContext()); })()), "orderPromotionTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 105, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo "</strong>:
        ";
        // line 111
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 111, $this->getSourceContext()); })()), "total", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 111, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
    </td>
</tr>
";
        
        $__internal_0b337c185280aea1f7fd85215e38a20b3cff1a548a9d6e6b9fdc6a21580acee6->leave($__internal_0b337c185280aea1f7fd85215e38a20b3cff1a548a9d6e6b9fdc6a21580acee6_prof);

        
        $__internal_8badfc593753de0dc42711fab229cd57e3ca2c62bc2adccbccd27f5f86133325->leave($__internal_8badfc593753de0dc42711fab229cd57e3ca2c62bc2adccbccd27f5f86133325_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 111,  274 => 110,  266 => 105,  262 => 104,  258 => 102,  252 => 100,  248 => 98,  237 => 93,  232 => 91,  228 => 89,  224 => 88,  221 => 87,  218 => 86,  216 => 85,  208 => 80,  204 => 79,  200 => 77,  194 => 75,  190 => 73,  179 => 68,  174 => 66,  170 => 64,  166 => 63,  163 => 62,  160 => 61,  158 => 60,  150 => 55,  146 => 54,  143 => 53,  138 => 50,  127 => 45,  122 => 43,  118 => 41,  114 => 40,  110 => 38,  108 => 37,  105 => 36,  99 => 34,  95 => 32,  84 => 27,  79 => 25,  75 => 23,  71 => 22,  68 => 21,  66 => 20,  62 => 19,  55 => 15,  51 => 14,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  37 => 7,  35 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}


{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderShippingPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_SHIPPING_PROMOTION_ADJUSTMENT') %}
{% set itemPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_ITEM_PROMOTION_ADJUSTMENT') %}
{% set shippingAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::SHIPPING_ADJUSTMENT') %}
{% set taxAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::TAX_ADJUSTMENT') %}

{% set orderShippingPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderShippingPromotionAdjustment)) %}

<tr>
    <th colspan=\"8\" id=\"items-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.subtotal'|trans }}</strong>:
        {{ money.format(order.itemsTotal ,order.currencyCode) }}
    </th>
</tr>
<tr>
    <td colspan=\"{{ orderShippingPromotions ? 2 : 4 }}\" id=\"shipping-charges\">
        {% if not order.adjustments(shippingAdjustment).isEmpty() %}
            <div class=\"ui relaxed divided list\">
                {% for adjustment in order.adjustments(shippingAdjustment) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ adjustment.label }}</span>
                            <div class=\"description\">
                                {{ money.format(adjustment.amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p><small>{{ 'sylius.ui.no_shipping_charges'|trans }}</small></p>
        {% endif %}
    </td>
    {% if not orderShippingPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-shipping-discounts\">
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderShippingPromotions %}
                <div class=\"item\">
                    <div class=\"content\">
                        <div class=\"header\">{{ label }}</div>
                        <div class=\"description\">
                            {{ money.format(amount, order.currencyCode) }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </td>
    {% endif %}
    <td colspan=\"4\" id=\"shipping-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.shipping_total'|trans }}</strong>:
        {{ money.format(order.shippingTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"taxes\">
        {% set taxAdjustments = order.getAdjustmentsRecursively(taxAdjustment) %}
        {% if taxAdjustments is not empty %}
            <div class=\"ui relaxed divided list\">
                {% for taxLabel, taxAmount in sylius_aggregate_adjustments(taxAdjustments) %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ taxLabel }}</span>
                            <div class=\"description\">
                                {{ money.format(taxAmount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_taxes'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"tax-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.tax_total'|trans }}</strong>:
        {{ money.format(order.taxTotal ,order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"4\" id=\"promotion-discounts\">
        {% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}
        {% if not orderPromotions is empty %}
            <div class=\"ui relaxed divided list\">
                {% for label, amount in orderPromotions %}
                    <div class=\"item\">
                        <div class=\"content\">
                            <span class=\"header\">{{ label }}</span>
                            <div class=\"description\">
                                {{ money.format(amount, order.currencyCode) }}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p>{{ 'sylius.ui.no_promotion'|trans }}.</p>
        {% endif %}
    </td>
    <td colspan=\"4\" id=\"promotion-total\" class=\"right aligned\">
        <strong>{{ 'sylius.ui.promotion_total'|trans }}</strong>:
        {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
    </td>
</tr>
<tr>
    <td colspan=\"8\" id=\"total\" class=\"ui large header right aligned\">
        <strong>{{ 'sylius.ui.total'|trans }}</strong>:
        {{ money.format(order.total, order.currencyCode) }}
    </td>
</tr>
", "SyliusAdminBundle:Order/Show/Summary:_totals.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/Summary/_totals.html.twig");
    }
}
