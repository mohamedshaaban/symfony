<?php

/* SyliusShopBundle:Checkout:address.html.twig */
class __TwigTemplate_c2a5270164f649f12c1452cdfc8b49872a2527af7234605b0dab7e21b532260d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 1);
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
        $__internal_06569d60f97c86a55141bc29659e033acf9caf9ff0ea7965decd63cde15d848a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06569d60f97c86a55141bc29659e033acf9caf9ff0ea7965decd63cde15d848a->enter($__internal_06569d60f97c86a55141bc29659e033acf9caf9ff0ea7965decd63cde15d848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

        $__internal_8a9c2d586573a81bf8ba2396058027b1f8ed5646763f95ece54615597c6ce98b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9c2d586573a81bf8ba2396058027b1f8ed5646763f95ece54615597c6ce98b->enter($__internal_8a9c2d586573a81bf8ba2396058027b1f8ed5646763f95ece54615597c6ce98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06569d60f97c86a55141bc29659e033acf9caf9ff0ea7965decd63cde15d848a->leave($__internal_06569d60f97c86a55141bc29659e033acf9caf9ff0ea7965decd63cde15d848a_prof);

        
        $__internal_8a9c2d586573a81bf8ba2396058027b1f8ed5646763f95ece54615597c6ce98b->leave($__internal_8a9c2d586573a81bf8ba2396058027b1f8ed5646763f95ece54615597c6ce98b_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc4b7c722ae79fa2f7b888a951bc9f573b83f866380e84e2bde6e87b1968cd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4b7c722ae79fa2f7b888a951bc9f573b83f866380e84e2bde6e87b1968cd66->enter($__internal_fc4b7c722ae79fa2f7b888a951bc9f573b83f866380e84e2bde6e87b1968cd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93c0e8799e4bb7e9410b97ea9fec6bc31d77b36010e030d7e24985dc73356988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c0e8799e4bb7e9410b97ea9fec6bc31d77b36010e030d7e24985dc73356988->enter($__internal_93c0e8799e4bb7e9410b97ea9fec6bc31d77b36010e030d7e24985dc73356988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_steps", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui segment\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_form", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'errors');
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 19
        $this->loadTemplate("@SyliusShop/Checkout/Address/_form.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 19)->display($context);
        // line 20
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_navigation", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->getSourceContext()); })()))));
        echo "

                    ";
        // line 24
        $this->loadTemplate("@SyliusShop/Checkout/Address/_navigation.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 24)->display($context);
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_summary", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 33
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 33)->display(array_merge($context, array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 33, $this->getSourceContext()); })()))));
        // line 34
        echo "
            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 35, $this->getSourceContext()); })()))));
        echo "

            ";
        // line 37
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 37)->display($context);
        // line 38
        echo "
            ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_support", array("order" => (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 39, $this->getSourceContext()); })()))));
        echo "
        </div>
    </div>
";
        
        $__internal_93c0e8799e4bb7e9410b97ea9fec6bc31d77b36010e030d7e24985dc73356988->leave($__internal_93c0e8799e4bb7e9410b97ea9fec6bc31d77b36010e030d7e24985dc73356988_prof);

        
        $__internal_fc4b7c722ae79fa2f7b888a951bc9f573b83f866380e84e2bde6e87b1968cd66->leave($__internal_fc4b7c722ae79fa2f7b888a951bc9f573b83f866380e84e2bde6e87b1968cd66_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:address.html.twig";
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
    {% include '@SyliusShop/Checkout/_steps.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui segment\">
                {{ sonata_block_render_event('sylius.shop.checkout.address.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_address'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    {{ form_errors(form) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/Address/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.address.before_navigation', {'order': order}) }}

                    {% include '@SyliusShop/Checkout/Address/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.address.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.address.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.address.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/address.html.twig");
    }
}
