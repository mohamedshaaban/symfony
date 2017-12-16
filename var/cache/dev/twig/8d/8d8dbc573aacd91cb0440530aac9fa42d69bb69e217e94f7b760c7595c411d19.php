<?php

/* SyliusAdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_0a76bcef48b260b0d262129c5ae5e7b0fa7e94065722a719bde9a3d22c78174d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da3d1f4b53cd6a7d2787d4e1c265494744830d18ada50be9cdde33973d74c151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3d1f4b53cd6a7d2787d4e1c265494744830d18ada50be9cdde33973d74c151->enter($__internal_da3d1f4b53cd6a7d2787d4e1c265494744830d18ada50be9cdde33973d74c151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $__internal_66a8f3a5d1b32e487d99ebbb3dc9e13391ff28647faca114d9800dd4dec46963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a8f3a5d1b32e487d99ebbb3dc9e13391ff28647faca114d9800dd4dec46963->enter($__internal_66a8f3a5d1b32e487d99ebbb3dc9e13391ff28647faca114d9800dd4dec46963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da3d1f4b53cd6a7d2787d4e1c265494744830d18ada50be9cdde33973d74c151->leave($__internal_da3d1f4b53cd6a7d2787d4e1c265494744830d18ada50be9cdde33973d74c151_prof);

        
        $__internal_66a8f3a5d1b32e487d99ebbb3dc9e13391ff28647faca114d9800dd4dec46963->leave($__internal_66a8f3a5d1b32e487d99ebbb3dc9e13391ff28647faca114d9800dd4dec46963_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_694db032132b2fed58b5d5c048ef5003874cef354bf489f404d5d52ca3438850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694db032132b2fed58b5d5c048ef5003874cef354bf489f404d5d52ca3438850->enter($__internal_694db032132b2fed58b5d5c048ef5003874cef354bf489f404d5d52ca3438850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56c090d1877907476a28cd7734afc6137ec9dfa24dcf68b977f7dc8c040ca2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c090d1877907476a28cd7734afc6137ec9dfa24dcf68b977f7dc8c040ca2c2->enter($__internal_56c090d1877907476a28cd7734afc6137ec9dfa24dcf68b977f7dc8c040ca2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.dashboard"), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_56c090d1877907476a28cd7734afc6137ec9dfa24dcf68b977f7dc8c040ca2c2->leave($__internal_56c090d1877907476a28cd7734afc6137ec9dfa24dcf68b977f7dc8c040ca2c2_prof);

        
        $__internal_694db032132b2fed58b5d5c048ef5003874cef354bf489f404d5d52ca3438850->leave($__internal_694db032132b2fed58b5d5c048ef5003874cef354bf489f404d5d52ca3438850_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c40b149be8c0db1fda3a2819c433eda26ec7bdce61f38cfda5158f935722c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c40b149be8c0db1fda3a2819c433eda26ec7bdce61f38cfda5158f935722c53->enter($__internal_2c40b149be8c0db1fda3a2819c433eda26ec7bdce61f38cfda5158f935722c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e92e0fa2dc17a3278f9d215556bfacea19c352670486357e1856efcfa735b2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92e0fa2dc17a3278f9d215556bfacea19c352670486357e1856efcfa735b2d0->enter($__internal_e92e0fa2dc17a3278f9d215556bfacea19c352670486357e1856efcfa735b2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.before_header", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 7, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 7, $this->getSourceContext()); })()))));
        echo "

";
        // line 9
        $this->loadTemplate("@SyliusAdmin/Dashboard/_header.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 9)->display($context);
        // line 10
        echo "
";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_header", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 11, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Dashboard/_menu.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_menu", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 15, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Dashboard/_statistics.html.twig", "SyliusAdminBundle:Dashboard:index.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_statistics", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 19, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_customer_latest", array("count" => 5, "template" => "@SyliusAdmin/Dashboard/_customers.html.twig")));
        echo "
    </div>
    <div class=\"column\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_order_latest_in_channel", array("channelCode" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 26, $this->getSourceContext()); })()), "code", array()), "count" => 5, "template" => "@SyliusAdmin/Dashboard/_orders.html.twig")));
        echo "
    </div>
</div>

";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.after_content", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 30, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 30, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e92e0fa2dc17a3278f9d215556bfacea19c352670486357e1856efcfa735b2d0->leave($__internal_e92e0fa2dc17a3278f9d215556bfacea19c352670486357e1856efcfa735b2d0_prof);

        
        $__internal_2c40b149be8c0db1fda3a2819c433eda26ec7bdce61f38cfda5158f935722c53->leave($__internal_2c40b149be8c0db1fda3a2819c433eda26ec7bdce61f38cfda5158f935722c53_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  116 => 26,  110 => 23,  103 => 19,  100 => 18,  98 => 17,  93 => 15,  90 => 14,  88 => 13,  83 => 11,  80 => 10,  78 => 9,  73 => 7,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% block title %}{{ 'sylius.ui.dashboard'|trans }} {{ parent() }}{% endblock %}

{% block content %}

{{ sonata_block_render_event('sylius.admin.dashboard.before_header', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_header.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_header', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_menu.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_menu', {'channel': channel, 'statistics': statistics}) }}

{% include '@SyliusAdmin/Dashboard/_statistics.html.twig' %}

{{ sonata_block_render_event('sylius.admin.dashboard.after_statistics', {'channel': channel, 'statistics': statistics}) }}

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        {{ render(url('sylius_admin_partial_customer_latest', {'count': 5, 'template': '@SyliusAdmin/Dashboard/_customers.html.twig'})) }}
    </div>
    <div class=\"column\">
        {{ render(path('sylius_admin_partial_order_latest_in_channel', {'channelCode': channel.code, 'count': 5, 'template': '@SyliusAdmin/Dashboard/_orders.html.twig'})) }}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.dashboard.after_content', {'channel': channel, 'statistics': statistics}) }}
{% endblock %}
", "SyliusAdminBundle:Dashboard:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/index.html.twig");
    }
}
