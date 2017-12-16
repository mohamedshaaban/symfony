<?php

/* SyliusShopBundle:Checkout:complete.html.twig */
class __TwigTemplate_2b404a17753cbcd62a571c038dd97a17c86415c1f6af2e626743b0375948ed51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4bac5d9dea67fc2f9cd8afb96211ada7abb77bdcae76711042dbae3d9a79139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bac5d9dea67fc2f9cd8afb96211ada7abb77bdcae76711042dbae3d9a79139->enter($__internal_f4bac5d9dea67fc2f9cd8afb96211ada7abb77bdcae76711042dbae3d9a79139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        $__internal_fdfaac6069541450ed20ad8879fedeaaf989c58de2c6bd2a8eea4f5e70503d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfaac6069541450ed20ad8879fedeaaf989c58de2c6bd2a8eea4f5e70503d30->enter($__internal_fdfaac6069541450ed20ad8879fedeaaf989c58de2c6bd2a8eea4f5e70503d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:complete.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4bac5d9dea67fc2f9cd8afb96211ada7abb77bdcae76711042dbae3d9a79139->leave($__internal_f4bac5d9dea67fc2f9cd8afb96211ada7abb77bdcae76711042dbae3d9a79139_prof);

        
        $__internal_fdfaac6069541450ed20ad8879fedeaaf989c58de2c6bd2a8eea4f5e70503d30->leave($__internal_fdfaac6069541450ed20ad8879fedeaaf989c58de2c6bd2a8eea4f5e70503d30_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d32e5c95a9eb0641ea0c7c99eff030695e0f2a8cf1321dae7a6be3c9372d81d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32e5c95a9eb0641ea0c7c99eff030695e0f2a8cf1321dae7a6be3c9372d81d1->enter($__internal_d32e5c95a9eb0641ea0c7c99eff030695e0f2a8cf1321dae7a6be3c9372d81d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0c36bc7a289f47d4d2c978bfa88f34ea6adf1546b5884de0be206626015f49ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c36bc7a289f47d4d2c978bfa88f34ea6adf1546b5884de0be206626015f49ea->enter($__internal_0c36bc7a289f47d4d2c978bfa88f34ea6adf1546b5884de0be206626015f49ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 6)->display(array_merge($context, array("active" => "complete", "orderTotal" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "total", array()))));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 11
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_header.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 11)->display($context);
        // line 12
        echo "
        ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_content_header", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 15
        $this->loadTemplate("SyliusUiBundle::_flashes.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 15)->display($context);
        // line 16
        echo "
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_complete"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'errors');
        echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 21, $this->getSourceContext()); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 23
        $this->loadTemplate("SyliusShopBundle:Common/Order:_summary.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 23)->display($context);
        // line 24
        echo "
            ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.after_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 25, $this->getSourceContext()); })()))));
        echo "

            <div class=\"ui hidden divider\"></div>
            ";
        // line 28
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_form.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 28)->display($context);
        // line 29
        echo "
            ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.complete.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 30, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 32
        $this->loadTemplate("@SyliusShop/Checkout/Complete/_navigation.html.twig", "SyliusShopBundle:Checkout:complete.html.twig", 32)->display($context);
        // line 33
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_0c36bc7a289f47d4d2c978bfa88f34ea6adf1546b5884de0be206626015f49ea->leave($__internal_0c36bc7a289f47d4d2c978bfa88f34ea6adf1546b5884de0be206626015f49ea_prof);

        
        $__internal_d32e5c95a9eb0641ea0c7c99eff030695e0f2a8cf1321dae7a6be3c9372d81d1->leave($__internal_d32e5c95a9eb0641ea0c7c99eff030695e0f2a8cf1321dae7a6be3c9372d81d1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:complete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 35,  120 => 34,  117 => 33,  115 => 32,  110 => 30,  107 => 29,  105 => 28,  99 => 25,  96 => 24,  94 => 23,  89 => 21,  83 => 18,  79 => 17,  76 => 16,  74 => 15,  69 => 13,  66 => 12,  64 => 11,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'complete', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.complete.after_steps', {'order': order}) }}

    <div class=\"ui padded segment\">
        {% include '@SyliusShop/Checkout/Complete/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.checkout.complete.after_content_header', {'order': order}) }}

        {% include 'SyliusUiBundle::_flashes.html.twig' %}

        {{ form_start(form, {'action': path('sylius_shop_checkout_complete'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {{ form_errors(form) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_summary', {'order': order, 'form': form}) }}

            {% include 'SyliusShopBundle:Common/Order:_summary.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.after_summary', {'order': order}) }}

            <div class=\"ui hidden divider\"></div>
            {% include '@SyliusShop/Checkout/Complete/_form.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.complete.before_navigation', {'order': order}) }}

            {% include '@SyliusShop/Checkout/Complete/_navigation.html.twig' %}

            {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:complete.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/complete.html.twig");
    }
}
