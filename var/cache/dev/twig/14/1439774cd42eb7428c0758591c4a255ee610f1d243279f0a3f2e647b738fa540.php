<?php

/* SyliusShopBundle:Checkout/Address:_form.html.twig */
class __TwigTemplate_4b05532473fdac9ff3c827c6da5393956a25f4b7539ce918621496d9366034f5 extends Twig_Template
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
        $__internal_e2ea105902624c40a8a0037c4f21812c70c57a7945031a2bf98162639a0f5214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ea105902624c40a8a0037c4f21812c70c57a7945031a2bf98162639a0f5214->enter($__internal_e2ea105902624c40a8a0037c4f21812c70c57a7945031a2bf98162639a0f5214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_form.html.twig"));

        $__internal_519192dae91e53cc478baa73636d1d9d928da63b71b107d1747759f7c7358ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519192dae91e53cc478baa73636d1d9d928da63b71b107d1747759f7c7358ca4->enter($__internal_519192dae91e53cc478baa73636d1d9d928da63b71b107d1747759f7c7358ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_form.html.twig"));

        // line 1
        echo "<div id=\"sylius-shipping-address\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 2)->display($context);
        // line 3
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping_address"), "html", null, true);
        echo "</h3>
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "customer", array(), "any", true, true)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Common/Form/_login.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 5)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "customer", array()))));
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 7)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "shippingAddress", array()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 7, $this->getSourceContext()); })()))));
        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "differentBillingAddress", array()), 'row', array("attr" => array("data-toggles" => "sylius-billing-address")));
        echo "

    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.shipping_address_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()))));
        echo "
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    ";
        // line 15
        $this->loadTemplate("@SyliusShop/Checkout/Address/_addressBookSelect.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 15)->display($context);
        // line 16
        echo "    <h3 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.billing_address"), "html", null, true);
        echo "</h3>
    ";
        // line 17
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Checkout/Address:_form.html.twig", 17)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "billingAddress", array()), "order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()))));
        // line 18
        echo "
    ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.billing_address_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_e2ea105902624c40a8a0037c4f21812c70c57a7945031a2bf98162639a0f5214->leave($__internal_e2ea105902624c40a8a0037c4f21812c70c57a7945031a2bf98162639a0f5214_prof);

        
        $__internal_519192dae91e53cc478baa73636d1d9d928da63b71b107d1747759f7c7358ca4->leave($__internal_519192dae91e53cc478baa73636d1d9d928da63b71b107d1747759f7c7358ca4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  69 => 18,  67 => 17,  62 => 16,  60 => 15,  52 => 10,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sylius-shipping-address\">
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.shipping_address'|trans }}</h3>
    {% if form.customer is defined %}
        {% include '@SyliusShop/Common/Form/_login.html.twig' with {'form': form.customer} %}
    {% endif %}
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.shippingAddress, 'order': order} %}
    {{ form_row(form.differentBillingAddress, {'attr': {'data-toggles': 'sylius-billing-address'}}) }}

    {{ sonata_block_render_event('sylius.shop.checkout.address.shipping_address_form', {'order': order}) }}
</div>

<div id=\"sylius-billing-address\">
    <div class=\"ui hidden divider\"></div>
    {% include '@SyliusShop/Checkout/Address/_addressBookSelect.html.twig' %}
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.billing_address'|trans }}</h3>
    {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form.billingAddress, 'order': order} %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.billing_address_form', {'order': order}) }}
</div>
", "SyliusShopBundle:Checkout/Address:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Address/_form.html.twig");
    }
}
