<?php

/* SyliusAdminBundle:PromotionCoupon:index.html.twig */
class __TwigTemplate_468c869ed4f1b8d68d1fd3da2421ca39cff16f903e13570c80d6fe0165b48274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 1);
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
        $__internal_ad85a5458500c5285ca2603ed144e6c2cd61db35b491e6229613fbbec0646ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad85a5458500c5285ca2603ed144e6c2cd61db35b491e6229613fbbec0646ed5->enter($__internal_ad85a5458500c5285ca2603ed144e6c2cd61db35b491e6229613fbbec0646ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:index.html.twig"));

        $__internal_905353f0886e02c1541ca08c49c2b1e3a2fc025d109d4861c173884c9d47a39f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905353f0886e02c1541ca08c49c2b1e3a2fc025d109d4861c173884c9d47a39f->enter($__internal_905353f0886e02c1541ca08c49c2b1e3a2fc025d109d4861c173884c9d47a39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 3);
        // line 5
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 5, $this->getSourceContext()); })()), "definition", array());
        // line 6
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()), "data", array());
        // line 8
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 8, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad85a5458500c5285ca2603ed144e6c2cd61db35b491e6229613fbbec0646ed5->leave($__internal_ad85a5458500c5285ca2603ed144e6c2cd61db35b491e6229613fbbec0646ed5_prof);

        
        $__internal_905353f0886e02c1541ca08c49c2b1e3a2fc025d109d4861c173884c9d47a39f->leave($__internal_905353f0886e02c1541ca08c49c2b1e3a2fc025d109d4861c173884c9d47a39f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_91fd17330d8cbc2f218080c24b3b23129d85990dc126a29d1e8431c53994fbe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fd17330d8cbc2f218080c24b3b23129d85990dc126a29d1e8431c53994fbe4->enter($__internal_91fd17330d8cbc2f218080c24b3b23129d85990dc126a29d1e8431c53994fbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7439dc80a49102f1a0699dab9863442c3bf61f9df5de00d7126c8e8ac83121e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7439dc80a49102f1a0699dab9863442c3bf61f9df5de00d7126c8e8ac83121e1->enter($__internal_7439dc80a49102f1a0699dab9863442c3bf61f9df5de00d7126c8e8ac83121e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_7439dc80a49102f1a0699dab9863442c3bf61f9df5de00d7126c8e8ac83121e1->leave($__internal_7439dc80a49102f1a0699dab9863442c3bf61f9df5de00d7126c8e8ac83121e1_prof);

        
        $__internal_91fd17330d8cbc2f218080c24b3b23129d85990dc126a29d1e8431c53994fbe4->leave($__internal_91fd17330d8cbc2f218080c24b3b23129d85990dc126a29d1e8431c53994fbe4_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c168328065b3462f13582ba7284da7414a3b539976efd5fe33c9aeb0da23020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c168328065b3462f13582ba7284da7414a3b539976efd5fe33c9aeb0da23020->enter($__internal_6c168328065b3462f13582ba7284da7414a3b539976efd5fe33c9aeb0da23020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_29320728ee5deb501bb7bcc82c12a3edc2603127f4ed82f190c293d944d4433d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29320728ee5deb501bb7bcc82c12a3edc2603127f4ed82f190c293d944d4433d->enter($__internal_29320728ee5deb501bb7bcc82c12a3edc2603127f4ed82f190c293d944d4433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.before_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "

    <div class=\"ui stackable two column grid\">
        ";
        // line 16
        $this->loadTemplate("@SyliusAdmin/PromotionCoupon/Index/_header.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 16)->display($context);
        // line 17
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_actions.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 17)->display($context);
        // line 18
        echo "    </div>

    ";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.after_header", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "

    ";
        // line 22
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:PromotionCoupon:index.html.twig", 22)->display($context);
        // line 23
        echo "    
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.promotion_coupon.index.after_content", array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 24, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_29320728ee5deb501bb7bcc82c12a3edc2603127f4ed82f190c293d944d4433d->leave($__internal_29320728ee5deb501bb7bcc82c12a3edc2603127f4ed82f190c293d944d4433d_prof);

        
        $__internal_6c168328065b3462f13582ba7284da7414a3b539976efd5fe33c9aeb0da23020->leave($__internal_6c168328065b3462f13582ba7284da7414a3b539976efd5fe33c9aeb0da23020_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 24,  102 => 23,  100 => 22,  95 => 20,  91 => 18,  88 => 17,  86 => 16,  79 => 13,  70 => 12,  50 => 10,  40 => 1,  38 => 8,  36 => 6,  34 => 5,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set definition = resources.definition %}
{% set data = resources.data %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.before_header', {'resources': resources}) }}

    <div class=\"ui stackable two column grid\">
        {% include '@SyliusAdmin/PromotionCoupon/Index/_header.html.twig' %}
        {% include '@SyliusAdmin/Crud/Index/_actions.html.twig' %}
    </div>

    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.after_header', {'resources': resources}) }}

    {% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}
    
    {{ sonata_block_render_event('sylius.admin.promotion_coupon.index.after_content', {'resources': resources}) }}
{% endblock %}
", "SyliusAdminBundle:PromotionCoupon:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/index.html.twig");
    }
}
