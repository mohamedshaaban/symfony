<?php

/* SyliusShopBundle:Checkout:_steps.html.twig */
class __TwigTemplate_94bf86bf4852587c6f1ca5c41449a0d20b5600d0ea07d9d982dd6f545fece87d extends Twig_Template
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
        $__internal_76a8da7c1b42aba8d3322cdb39f24f2416aa1224fa1747610f52ecb0188720e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a8da7c1b42aba8d3322cdb39f24f2416aa1224fa1747610f52ecb0188720e1->enter($__internal_76a8da7c1b42aba8d3322cdb39f24f2416aa1224fa1747610f52ecb0188720e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_steps.html.twig"));

        $__internal_83b607b39cff9943b7d4dfe6b6a977a4d9ea861fe19332e354a6ee221272446d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b607b39cff9943b7d4dfe6b6a977a4d9ea861fe19332e354a6ee221272446d->enter($__internal_83b607b39cff9943b7d4dfe6b6a977a4d9ea861fe19332e354a6ee221272446d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_steps.html.twig"));

        // line 1
        if (( !array_key_exists("active", $context) || ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 1, $this->getSourceContext()); })()) == "address"))) {
            // line 2
            echo "    ";
            $context["steps"] = array("address" => "active", "select_shipping" => "disabled", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 3
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->getSourceContext()); })()) == "select_shipping")) {
            // line 4
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "active", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 5
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 5, $this->getSourceContext()); })()) == "select_payment")) {
            // line 6
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "active", "complete" => "disabled");
        } else {
            // line 8
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "completed", "complete" => "active");
        }
        // line 10
        echo "
";
        // line 11
        $context["order_requires_payment"] = call_user_func_array($this->env->getFunction('sylius_is_payment_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->getSourceContext()); })())));
        // line 12
        $context["order_requires_shipping"] = call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 12, $this->getSourceContext()); })())));
        // line 13
        echo "
";
        // line 14
        $context["steps_count"] = "four";
        // line 15
        if (( !(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 15, $this->getSourceContext()); })()) &&  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "    ";
            $context["steps_count"] = "two";
        } elseif (( !        // line 17
(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 17, $this->getSourceContext()); })()) ||  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 17, $this->getSourceContext()); })()))) {
            // line 18
            echo "    ";
            $context["steps_count"] = "three";
        }
        // line 20
        echo "
<div class=\"ui ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["steps_count"]) || array_key_exists("steps_count", $context) ? $context["steps_count"] : (function () { throw new Twig_Error_Runtime('Variable "steps_count" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " steps\">
    <a class=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 22, $this->getSourceContext()); })()), "address", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address");
        echo "\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.fill_in_your_billing_and_shipping_addresses"), "html", null, true);
        echo "</div>
        </div>
    </a>
    ";
        // line 29
        if ((isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 29, $this->getSourceContext()); })())) {
            // line 30
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 30, $this->getSourceContext()); })()), "select_shipping", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_shipping");
            echo "\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_how_your_goods_will_be_delivered"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 38
        echo "    ";
        if ((isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 39, $this->getSourceContext()); })()), "select_payment", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_payment");
            echo "\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payment"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_how_you_will_pay"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 47
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 47, $this->getSourceContext()); })()), "complete", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_complete");
        echo "\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.complete"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.review_and_confirm_your_order"), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
        
        $__internal_76a8da7c1b42aba8d3322cdb39f24f2416aa1224fa1747610f52ecb0188720e1->leave($__internal_76a8da7c1b42aba8d3322cdb39f24f2416aa1224fa1747610f52ecb0188720e1_prof);

        
        $__internal_83b607b39cff9943b7d4dfe6b6a977a4d9ea861fe19332e354a6ee221272446d->leave($__internal_83b607b39cff9943b7d4dfe6b6a977a4d9ea861fe19332e354a6ee221272446d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 51,  147 => 50,  138 => 47,  131 => 43,  127 => 42,  118 => 39,  115 => 38,  108 => 34,  104 => 33,  95 => 30,  93 => 29,  87 => 26,  83 => 25,  75 => 22,  71 => 21,  68 => 20,  64 => 18,  62 => 17,  59 => 16,  57 => 15,  55 => 14,  52 => 13,  50 => 12,  48 => 11,  45 => 10,  41 => 8,  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if active is not defined or active == 'address' %}
    {% set steps = {'address': 'active', 'select_shipping': 'disabled', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_shipping' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'active', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_payment' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'active', 'complete': 'disabled'} %}
{% else %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'completed', 'complete': 'active'} %}
{% endif %}

{% set order_requires_payment = sylius_is_payment_required(order) %}
{% set order_requires_shipping = sylius_is_shipping_required(order) %}

{% set steps_count = 'four' %}
{% if not order_requires_payment and not order_requires_shipping %}
    {% set steps_count = 'two' %}
{% elseif not order_requires_payment or not order_requires_shipping %}
    {% set steps_count = 'three' %}
{% endif %}

<div class=\"ui {{ steps_count }} steps\">
    <a class=\"{{ steps['address'] }} step\" href=\"{{ path('sylius_shop_checkout_address') }}\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.address'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.fill_in_your_billing_and_shipping_addresses'|trans }}</div>
        </div>
    </a>
    {% if order_requires_shipping %}
    <a class=\"{{ steps['select_shipping'] }} step\" href=\"{{ path('sylius_shop_checkout_select_shipping') }}\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.shipping'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_your_goods_will_be_delivered'|trans }}</div>
        </div>
    </a>
    {% endif %}
    {% if order_requires_payment %}
    <a class=\"{{ steps['select_payment'] }} step\" href=\"{{ path('sylius_shop_checkout_select_payment') }}\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.payment'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_you_will_pay'|trans }}</div>
        </div>
    </a>
    {% endif %}
    <div class=\"{{ steps['complete'] }} step\" href=\"{{ path('sylius_shop_checkout_complete') }}\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.complete'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.review_and_confirm_your_order'|trans }}</div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout:_steps.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/_steps.html.twig");
    }
}
