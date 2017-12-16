<?php

/* SyliusShopBundle:Order:show.html.twig */
class __TwigTemplate_56721238ea458b6f645d40524428de847f529553f215eb122a910b4b139a94ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Order:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1ef535a322a9751f96cd14a5ad6b8f999b42e500675fb927ed646198c8b47e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ef535a322a9751f96cd14a5ad6b8f999b42e500675fb927ed646198c8b47e6->enter($__internal_f1ef535a322a9751f96cd14a5ad6b8f999b42e500675fb927ed646198c8b47e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:show.html.twig"));

        $__internal_78064946c864d9743602559665c42cf813ad751cf627eb25df72432ec7b88154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78064946c864d9743602559665c42cf813ad751cf627eb25df72432ec7b88154->enter($__internal_78064946c864d9743602559665c42cf813ad751cf627eb25df72432ec7b88154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:show.html.twig"));

        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Order:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ef535a322a9751f96cd14a5ad6b8f999b42e500675fb927ed646198c8b47e6->leave($__internal_f1ef535a322a9751f96cd14a5ad6b8f999b42e500675fb927ed646198c8b47e6_prof);

        
        $__internal_78064946c864d9743602559665c42cf813ad751cf627eb25df72432ec7b88154->leave($__internal_78064946c864d9743602559665c42cf813ad751cf627eb25df72432ec7b88154_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a099f9ac808861642d03c1cb8f45e7af21188c4df6e7493aeed648f00d80cdd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a099f9ac808861642d03c1cb8f45e7af21188c4df6e7493aeed648f00d80cdd1->enter($__internal_a099f9ac808861642d03c1cb8f45e7af21188c4df6e7493aeed648f00d80cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a0a4fadae2bd4f70234ac802d5d5337ae299e4afbd6dfbc7600824d18e16acdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a4fadae2bd4f70234ac802d5d5337ae299e4afbd6dfbc7600824d18e16acdb->enter($__internal_a0a4fadae2bd4f70234ac802d5d5337ae299e4afbd6dfbc7600824d18e16acdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"ui segment\">
        ";
        // line 7
        $this->loadTemplate("@SyliusShop/Order/_summary.html.twig", "SyliusShopBundle:Order:show.html.twig", 7)->display($context);
        // line 8
        echo "
        ";
        // line 9
        if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 9, $this->getSourceContext()); })()), "paymentState", array()), array(0 => "awaiting_payment"))) {
            // line 10
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_order_show", array("tokenValue" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()), "tokenValue", array()))), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
            echo "
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            ";
            // line 13
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_form.html.twig", "SyliusShopBundle:Order:show.html.twig", 13)->display($context);
            // line 14
            echo "            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pay"), "html", null, true);
            echo "
            </button>

            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "_token", array()), 'row');
            echo "
            ";
            // line 20
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
            echo "
        ";
        } else {
            // line 22
            echo "            ";
            echo $context["messages"]->macro_info("sylius.ui.you_can_no_longer_change_payment_method_of_this_order");
            echo "
        ";
        }
        // line 24
        echo "    </div>
";
        
        $__internal_a0a4fadae2bd4f70234ac802d5d5337ae299e4afbd6dfbc7600824d18e16acdb->leave($__internal_a0a4fadae2bd4f70234ac802d5d5337ae299e4afbd6dfbc7600824d18e16acdb_prof);

        
        $__internal_a099f9ac808861642d03c1cb8f45e7af21188c4df6e7493aeed648f00d80cdd1->leave($__internal_a099f9ac808861642d03c1cb8f45e7af21188c4df6e7493aeed648f00d80cdd1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  90 => 22,  85 => 20,  81 => 19,  75 => 16,  71 => 14,  69 => 13,  62 => 10,  60 => 9,  57 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% block content %}
    <div class=\"ui segment\">
        {% include '@SyliusShop/Order/_summary.html.twig' %}

        {% if order.paymentState in ['awaiting_payment'] %}
            {{ form_start(form, {'action': path('sylius_shop_order_show', {'tokenValue': order.tokenValue}), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

            {% include '@SyliusShop/Checkout/SelectPayment/_form.html.twig' %}
            <div class=\"ui hidden divider\"></div>
            <button type=\"submit\" class=\"ui large blue icon labeled button\" id=\"sylius-pay-link\">
                <i class=\"check icon\"></i> {{ 'sylius.ui.pay'|trans }}
            </button>

            {{ form_row(form._token) }}
            {{ form_end(form, {'render_rest': false}) }}
        {% else %}
            {{ messages.info('sylius.ui.you_can_no_longer_change_payment_method_of_this_order') }}
        {% endif %}
    </div>
{% endblock %}
", "SyliusShopBundle:Order:show.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Order/show.html.twig");
    }
}
