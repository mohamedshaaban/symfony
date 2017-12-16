<?php

/* SyliusShopBundle:Common/Order/Table:_promotion.html.twig */
class __TwigTemplate_a34c49dbf536f2070138fdd83746547c52af60fd450a7b6d752a05a10924d322 extends Twig_Template
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
        $__internal_eff849c96221e69b2481049873aa20eabf1586f5b60b021cc498305855f31822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff849c96221e69b2481049873aa20eabf1586f5b60b021cc498305855f31822->enter($__internal_eff849c96221e69b2481049873aa20eabf1586f5b60b021cc498305855f31822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig"));

        $__internal_927b3d5ea8b05d6ca7387762648993b1ca98a5077bb57b8b86cc7b15d9e24c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927b3d5ea8b05d6ca7387762648993b1ca98a5077bb57b8b86cc7b15d9e24c45->enter($__internal_927b3d5ea8b05d6ca7387762648993b1ca98a5077bb57b8b86cc7b15d9e24c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["orderPromotionAdjustment"] = twig_constant("Sylius\\Component\\Core\\Model\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT");
        // line 4
        $context["orderPromotions"] = call_user_func_array($this->env->getFunction('sylius_aggregate_adjustments')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 4, $this->getSourceContext()); })()), "getAdjustmentsRecursively", array(0 => (isset($context["orderPromotionAdjustment"]) || array_key_exists("orderPromotionAdjustment", $context) ? $context["orderPromotionAdjustment"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotionAdjustment" does not exist.', 4, $this->getSourceContext()); })())), "method")));
        // line 5
        echo "
";
        // line 6
        if ( !twig_test_empty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 6, $this->getSourceContext()); })()))) {
            // line 7
            echo "    <td colspan=\"2\" id=\"promotion-discounts\">
        <div class=\"ui relaxed divided list\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 9, $this->getSourceContext()); })()));
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
        if ( !twig_test_empty((isset($context["orderPromotions"]) || array_key_exists("orderPromotions", $context) ? $context["orderPromotions"] : (function () { throw new Twig_Error_Runtime('Variable "orderPromotions" does not exist.', 22, $this->getSourceContext()); })()))) {
            echo "2";
        } else {
            echo "4";
        }
        echo "\" id=\"promotion-total\" class=\"right aligned\">
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotion_total"), "html", null, true);
        echo ":
    ";
        // line 24
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->getSourceContext()); })()), "orderPromotionTotal", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 24, $this->getSourceContext()); })()), "currencyCode", array()));
        echo "
</td>
";
        
        $__internal_eff849c96221e69b2481049873aa20eabf1586f5b60b021cc498305855f31822->leave($__internal_eff849c96221e69b2481049873aa20eabf1586f5b60b021cc498305855f31822_prof);

        
        $__internal_927b3d5ea8b05d6ca7387762648993b1ca98a5077bb57b8b86cc7b15d9e24c45->leave($__internal_927b3d5ea8b05d6ca7387762648993b1ca98a5077bb57b8b86cc7b15d9e24c45_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_promotion.html.twig";
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

{% set orderPromotionAdjustment = constant('Sylius\\\\Component\\\\Core\\\\Model\\\\AdjustmentInterface::ORDER_PROMOTION_ADJUSTMENT') %}
{% set orderPromotions = sylius_aggregate_adjustments(order.getAdjustmentsRecursively(orderPromotionAdjustment)) %}

{% if not orderPromotions is empty %}
    <td colspan=\"2\" id=\"promotion-discounts\">
        <div class=\"ui relaxed divided list\">
            {% for label, amount in orderPromotions %}
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
<td colspan=\"{% if not orderPromotions is empty %}2{% else %}4{% endif %}\" id=\"promotion-total\" class=\"right aligned\">
    {{ 'sylius.ui.promotion_total'|trans }}:
    {{ money.format(order.orderPromotionTotal, order.currencyCode) }}
</td>
", "SyliusShopBundle:Common/Order/Table:_promotion.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_promotion.html.twig");
    }
}
