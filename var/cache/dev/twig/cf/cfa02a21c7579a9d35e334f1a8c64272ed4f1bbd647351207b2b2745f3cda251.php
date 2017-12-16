<?php

/* SyliusShopBundle:Checkout:selectShipping.html.twig */
class __TwigTemplate_3e2e5932910151417b40afded033c4e4c1a2be2a68b4f83e4e76b537069a7dca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 1);
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
        $__internal_0b341cd59110118629598c4cd3969463ebb961ebe6f6c240beb16679e0b7e076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b341cd59110118629598c4cd3969463ebb961ebe6f6c240beb16679e0b7e076->enter($__internal_0b341cd59110118629598c4cd3969463ebb961ebe6f6c240beb16679e0b7e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

        $__internal_b60af579bf17f8aa0ed2cf193cb97b52188c1282b9f501bbb04a9046c6be5a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60af579bf17f8aa0ed2cf193cb97b52188c1282b9f501bbb04a9046c6be5a8d->enter($__internal_b60af579bf17f8aa0ed2cf193cb97b52188c1282b9f501bbb04a9046c6be5a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectShipping.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b341cd59110118629598c4cd3969463ebb961ebe6f6c240beb16679e0b7e076->leave($__internal_0b341cd59110118629598c4cd3969463ebb961ebe6f6c240beb16679e0b7e076_prof);

        
        $__internal_b60af579bf17f8aa0ed2cf193cb97b52188c1282b9f501bbb04a9046c6be5a8d->leave($__internal_b60af579bf17f8aa0ed2cf193cb97b52188c1282b9f501bbb04a9046c6be5a8d_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d65b4b30dcbae235978ab452b42864e0a47c5cf5483f9a9692d51c49f6001bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d65b4b30dcbae235978ab452b42864e0a47c5cf5483f9a9692d51c49f6001bf->enter($__internal_1d65b4b30dcbae235978ab452b42864e0a47c5cf5483f9a9692d51c49f6001bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7901821dd054a1f45f987eb14dc50f897e7cf60c63f10b650304935a2ab800e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7901821dd054a1f45f987eb14dc50f897e7cf60c63f10b650304935a2ab800e9->enter($__internal_7901821dd054a1f45f987eb14dc50f897e7cf60c63f10b650304935a2ab800e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 6)->display(array_merge($context, array("active" => "select_shipping", "orderTotal" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "total", array()))));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_shipping"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 19
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_form.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 19)->display($context);
        // line 20
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

                    ";
        // line 24
        $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_navigation.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 24)->display($context);
        // line 25
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 33
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 33)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->getSourceContext()); })()))));
        // line 34
        echo "
            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 35, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 37
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectShipping.html.twig", 37)->display($context);
        // line 38
        echo "
            ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_shipping.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 39, $this->getSourceContext()); })()))));
        echo "
        </div>
    </div>
";
        
        $__internal_7901821dd054a1f45f987eb14dc50f897e7cf60c63f10b650304935a2ab800e9->leave($__internal_7901821dd054a1f45f987eb14dc50f897e7cf60c63f10b650304935a2ab800e9_prof);

        
        $__internal_1d65b4b30dcbae235978ab452b42864e0a47c5cf5483f9a9692d51c49f6001bf->leave($__internal_1d65b4b30dcbae235978ab452b42864e0a47c5cf5483f9a9692d51c49f6001bf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:selectShipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  125 => 38,  123 => 37,  118 => 35,  115 => 34,  113 => 33,  108 => 31,  101 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 22,  83 => 20,  81 => 19,  75 => 16,  71 => 15,  66 => 13,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_shipping', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-shipping-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_shipping'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectShipping/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_navigation', {'order': order}) }}

                    {% include '@SyliusShop/Checkout/SelectShipping/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_shipping.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectShipping.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/selectShipping.html.twig");
    }
}
