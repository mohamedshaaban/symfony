<?php

/* SyliusShopBundle:Cart:summary.html.twig */
class __TwigTemplate_08c1037216a03c892d076f2edbf871849ae52237f9e5cab17af50adcfbf5018c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f4f5eba052bccb1e2d5bf687581098fafc420f5014e8268bd83346e1b66cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f4f5eba052bccb1e2d5bf687581098fafc420f5014e8268bd83346e1b66cb6->enter($__internal_31f4f5eba052bccb1e2d5bf687581098fafc420f5014e8268bd83346e1b66cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:summary.html.twig"));

        $__internal_c8b536bd90d907ab986d0fe036ffb55e4aa89421742e6628eb8be387c5e0953a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b536bd90d907ab986d0fe036ffb55e4aa89421742e6628eb8be387c5e0953a->enter($__internal_c8b536bd90d907ab986d0fe036ffb55e4aa89421742e6628eb8be387c5e0953a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart:summary.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 5
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 5);
        // line 7
        $context["header"] = "sylius.ui.your_shopping_cart";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f4f5eba052bccb1e2d5bf687581098fafc420f5014e8268bd83346e1b66cb6->leave($__internal_31f4f5eba052bccb1e2d5bf687581098fafc420f5014e8268bd83346e1b66cb6_prof);

        
        $__internal_c8b536bd90d907ab986d0fe036ffb55e4aa89421742e6628eb8be387c5e0953a->leave($__internal_c8b536bd90d907ab986d0fe036ffb55e4aa89421742e6628eb8be387c5e0953a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4436f57d8c4d300689d011bd35ba925d7d211dff46388641bb74b0e66e3d826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4436f57d8c4d300689d011bd35ba925d7d211dff46388641bb74b0e66e3d826->enter($__internal_c4436f57d8c4d300689d011bd35ba925d7d211dff46388641bb74b0e66e3d826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a227669c95164abb6f1c337b73d105556d512fcf8ad7945bca8bfc7693860a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a227669c95164abb6f1c337b73d105556d512fcf8ad7945bca8bfc7693860a06->enter($__internal_a227669c95164abb6f1c337b73d105556d512fcf8ad7945bca8bfc7693860a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_a227669c95164abb6f1c337b73d105556d512fcf8ad7945bca8bfc7693860a06->leave($__internal_a227669c95164abb6f1c337b73d105556d512fcf8ad7945bca8bfc7693860a06_prof);

        
        $__internal_c4436f57d8c4d300689d011bd35ba925d7d211dff46388641bb74b0e66e3d826->leave($__internal_c4436f57d8c4d300689d011bd35ba925d7d211dff46388641bb74b0e66e3d826_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_feb9631ec8602590ece50e2f8321c60c358ca0f81ada442473316541ea6b0ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb9631ec8602590ece50e2f8321c60c358ca0f81ada442473316541ea6b0ecb->enter($__internal_feb9631ec8602590ece50e2f8321c60c358ca0f81ada442473316541ea6b0ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1d7be9908689501cbc24b454643e8b017e841877b555ac63e6cfe94314e8f751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7be9908689501cbc24b454643e8b017e841877b555ac63e6cfe94314e8f751->enter($__internal_1d7be9908689501cbc24b454643e8b017e841877b555ac63e6cfe94314e8f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 12, $this->getSourceContext()); })()), "empty", array())) {
            // line 13
            echo "        ";
            $this->loadTemplate("@SyliusShop/Cart/Summary/_header.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 13)->display($context);
            // line 14
            echo "
        ";
            // line 15
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_content_header", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 15, $this->getSourceContext()); })()))));
            echo "

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                ";
            // line 19
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 19, $this->getSourceContext()); })()))));
            echo "

                ";
            // line 21
            $this->loadTemplate("@SyliusShop/Cart/Summary/_items.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 21)->display($context);
            // line 22
            echo "
                ";
            // line 23
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 23, $this->getSourceContext()); })()))));
            echo "
            </div>
            <div class=\"five wide column\">
                ";
            // line 26
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 26, $this->getSourceContext()); })()))));
            echo "

                ";
            // line 28
            $this->loadTemplate("@SyliusShop/Cart/Summary/_totals.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 28)->display($context);
            // line 29
            echo "
                ";
            // line 30
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 30, $this->getSourceContext()); })()))));
            echo "

                ";
            // line 32
            $this->loadTemplate("@SyliusShop/Cart/Summary/_checkout.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 32)->display($context);
            // line 33
            echo "            </div>
        </div>

        ";
            // line 36
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_suggestions", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 36, $this->getSourceContext()); })()))));
            echo "

        ";
            // line 38
            $this->loadTemplate("@SyliusShop/Cart/Summary/_suggestions.html.twig", "SyliusShopBundle:Cart:summary.html.twig", 38)->display($context);
            // line 39
            echo "    ";
        } else {
            // line 40
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.your_cart_is_empty");
            echo "
    ";
        }
        
        $__internal_1d7be9908689501cbc24b454643e8b017e841877b555ac63e6cfe94314e8f751->leave($__internal_1d7be9908689501cbc24b454643e8b017e841877b555ac63e6cfe94314e8f751_prof);

        
        $__internal_feb9631ec8602590ece50e2f8321c60c358ca0f81ada442473316541ea6b0ecb->leave($__internal_feb9631ec8602590ece50e2f8321c60c358ca0f81ada442473316541ea6b0ecb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart:summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  138 => 39,  136 => 38,  131 => 36,  126 => 33,  124 => 32,  119 => 30,  116 => 29,  114 => 28,  109 => 26,  103 => 23,  100 => 22,  98 => 21,  93 => 19,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  68 => 11,  48 => 9,  38 => 1,  36 => 7,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set header = 'sylius.ui.your_shopping_cart' %}

{% block title %}{{ parent() }} | {{ header|trans }}{% endblock %}

{% block content %}
    {% if not cart.empty %}
        {% include '@SyliusShop/Cart/Summary/_header.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.cart.summary.after_content_header', {'cart': cart}) }}

        <div class=\"ui stackable grid\">
            <div class=\"eleven wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_items', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_items.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_items', {'cart': cart}) }}
            </div>
            <div class=\"five wide column\">
                {{ sonata_block_render_event('sylius.shop.cart.summary.before_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_totals.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.cart.summary.after_totals', {'cart': cart}) }}

                {% include '@SyliusShop/Cart/Summary/_checkout.html.twig' %}
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.cart.summary.before_suggestions', {'cart': cart}) }}

        {% include '@SyliusShop/Cart/Summary/_suggestions.html.twig' %}
    {% else %}
        {{ messages.info('sylius.ui.your_cart_is_empty') }}
    {% endif %}
{% endblock %}
", "SyliusShopBundle:Cart:summary.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/summary.html.twig");
    }
}
