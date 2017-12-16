<?php

/* SyliusShopBundle:Checkout:selectPayment.html.twig */
class __TwigTemplate_da7ab646a6d0467384b5628e055ce7f7f1deddd309a03b6e8718338fec485815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 1);
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
        $__internal_9c73f1dac2fb17ae6abc63f2db0ff4020a7502b7df3292a8bb03662eda5df4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c73f1dac2fb17ae6abc63f2db0ff4020a7502b7df3292a8bb03662eda5df4d0->enter($__internal_9c73f1dac2fb17ae6abc63f2db0ff4020a7502b7df3292a8bb03662eda5df4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        $__internal_10cb76b37e6078ef9aec0334e13eb1b81c37dcb512cc14abcb0aaddbdece3b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cb76b37e6078ef9aec0334e13eb1b81c37dcb512cc14abcb0aaddbdece3b76->enter($__internal_10cb76b37e6078ef9aec0334e13eb1b81c37dcb512cc14abcb0aaddbdece3b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:selectPayment.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "SyliusUiBundle:Form:theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c73f1dac2fb17ae6abc63f2db0ff4020a7502b7df3292a8bb03662eda5df4d0->leave($__internal_9c73f1dac2fb17ae6abc63f2db0ff4020a7502b7df3292a8bb03662eda5df4d0_prof);

        
        $__internal_10cb76b37e6078ef9aec0334e13eb1b81c37dcb512cc14abcb0aaddbdece3b76->leave($__internal_10cb76b37e6078ef9aec0334e13eb1b81c37dcb512cc14abcb0aaddbdece3b76_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d2a4275b9d07f091d19207a4970cc65d014736bc2948be0f3d3d52c160e2487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2a4275b9d07f091d19207a4970cc65d014736bc2948be0f3d3d52c160e2487->enter($__internal_4d2a4275b9d07f091d19207a4970cc65d014736bc2948be0f3d3d52c160e2487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bf58c9f2e7ba6a9a224db40f10a9bde58b0b56c6790706cced8e1fddf2b84362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf58c9f2e7ba6a9a224db40f10a9bde58b0b56c6790706cced8e1fddf2b84362->enter($__internal_bf58c9f2e7ba6a9a224db40f10a9bde58b0b56c6790706cced8e1fddf2b84362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 6)->display(array_merge($context, array("active" => "select_payment", "orderTotal" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "total", array()))));
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_select_payment"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 19
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 19)->display($context);
        // line 20
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "
                    ";
        // line 23
        $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_navigation.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 23)->display($context);
        // line 24
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 30, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 32
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 32)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 32, $this->getSourceContext()); })()))));
        // line 33
        echo "
            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 34, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 36
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:selectPayment.html.twig", 36)->display($context);
        // line 37
        echo "
            ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.select_payment.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->getSourceContext()); })()))));
        echo "
        </div>
    </div>
";
        
        $__internal_bf58c9f2e7ba6a9a224db40f10a9bde58b0b56c6790706cced8e1fddf2b84362->leave($__internal_bf58c9f2e7ba6a9a224db40f10a9bde58b0b56c6790706cced8e1fddf2b84362_prof);

        
        $__internal_4d2a4275b9d07f091d19207a4970cc65d014736bc2948be0f3d3d52c160e2487->leave($__internal_4d2a4275b9d07f091d19207a4970cc65d014736bc2948be0f3d3d52c160e2487_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:selectPayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  124 => 37,  122 => 36,  117 => 34,  114 => 33,  112 => 32,  107 => 30,  100 => 26,  96 => 25,  93 => 24,  91 => 23,  87 => 22,  83 => 20,  81 => 19,  75 => 16,  71 => 15,  66 => 13,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form 'SyliusUiBundle:Form:theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' with {'active': 'select_payment', 'orderTotal': order.total} %}

    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui padded segment\" id=\"sylius-payment-methods\">
                {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_select_payment'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_navigation', {'order': order}) }}
                    {% include '@SyliusShop/Checkout/SelectPayment/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.select_payment.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:selectPayment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/selectPayment.html.twig");
    }
}
