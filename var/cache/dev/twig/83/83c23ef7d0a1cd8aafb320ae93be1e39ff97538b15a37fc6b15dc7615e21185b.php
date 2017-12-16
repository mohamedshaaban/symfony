<?php

/* SyliusAdminBundle:Order:history.html.twig */
class __TwigTemplate_c1a1d030877a184b5cd9c7f8125c65b66fd0373417d1bc3e19bcc1e4279c17aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Order:history.html.twig", 1);
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
        $__internal_6ca7f8ba81dfc621560bb421fa3bd8fa17d31c87e6ba4fb654297beae0185731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca7f8ba81dfc621560bb421fa3bd8fa17d31c87e6ba4fb654297beae0185731->enter($__internal_6ca7f8ba81dfc621560bb421fa3bd8fa17d31c87e6ba4fb654297beae0185731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:history.html.twig"));

        $__internal_c2e2dfdb8e245e5a5ea515d339e5c79c8216ea7ab3d16281a5df659eb59133ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e2dfdb8e245e5a5ea515d339e5c79c8216ea7ab3d16281a5df659eb59133ea->enter($__internal_c2e2dfdb8e245e5a5ea515d339e5c79c8216ea7ab3d16281a5df659eb59133ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order:history.html.twig"));

        // line 3
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order:history.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca7f8ba81dfc621560bb421fa3bd8fa17d31c87e6ba4fb654297beae0185731->leave($__internal_6ca7f8ba81dfc621560bb421fa3bd8fa17d31c87e6ba4fb654297beae0185731_prof);

        
        $__internal_c2e2dfdb8e245e5a5ea515d339e5c79c8216ea7ab3d16281a5df659eb59133ea->leave($__internal_c2e2dfdb8e245e5a5ea515d339e5c79c8216ea7ab3d16281a5df659eb59133ea_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c2af063b1279bda6df01abc85a945e703b3da4ca0623ec1e3efeb00cffed5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2af063b1279bda6df01abc85a945e703b3da4ca0623ec1e3efeb00cffed5c3->enter($__internal_0c2af063b1279bda6df01abc85a945e703b3da4ca0623ec1e3efeb00cffed5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50cc9292fcaa9cd070a2de5bd84a17a1ee9ea7d8cba8485dc436686465a4172e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cc9292fcaa9cd070a2de5bd84a17a1ee9ea7d8cba8485dc436686465a4172e->enter($__internal_50cc9292fcaa9cd070a2de5bd84a17a1ee9ea7d8cba8485dc436686465a4172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 5, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_50cc9292fcaa9cd070a2de5bd84a17a1ee9ea7d8cba8485dc436686465a4172e->leave($__internal_50cc9292fcaa9cd070a2de5bd84a17a1ee9ea7d8cba8485dc436686465a4172e_prof);

        
        $__internal_0c2af063b1279bda6df01abc85a945e703b3da4ca0623ec1e3efeb00cffed5c3->leave($__internal_0c2af063b1279bda6df01abc85a945e703b3da4ca0623ec1e3efeb00cffed5c3_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fa1d6eda53e83c7ec2eb1d25ee4a92ef14d8f46282c8f00973255919ba27261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa1d6eda53e83c7ec2eb1d25ee4a92ef14d8f46282c8f00973255919ba27261->enter($__internal_1fa1d6eda53e83c7ec2eb1d25ee4a92ef14d8f46282c8f00973255919ba27261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cbfbcd7a6c27515f3997d607f0ee0928ab2d3df003a1f3807bf986c42f1835b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfbcd7a6c27515f3997d607f0ee0928ab2d3df003a1f3807bf986c42f1835b7->enter($__internal_cbfbcd7a6c27515f3997d607f0ee0928ab2d3df003a1f3807bf986c42f1835b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.before_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 8, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        ";
        // line 12
        $this->loadTemplate("@SyliusAdmin/Order/History/_header.html.twig", "SyliusAdminBundle:Order:history.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div class=\"four wide right aligned column\">
        ";
        // line 15
        $this->loadTemplate("@SyliusAdmin/Order/History/_actions.html.twig", "SyliusAdminBundle:Order:history.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
</div>

";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_header", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "

";
        // line 21
        $this->loadTemplate("@SyliusAdmin/Order/History/_breadcrumb.html.twig", "SyliusAdminBundle:Order:history.html.twig", 21)->display($context);
        // line 22
        echo "
";
        // line 23
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_breadcrumb", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 23, $this->getSourceContext()); })()))));
        echo "

<div class=\"ui one column grid\">
    <div class=\"column\">
        ";
        // line 27
        $this->loadTemplate("@SyliusAdmin/Order/History/_addresses.html.twig", "SyliusAdminBundle:Order:history.html.twig", 27)->display($context);
        // line 28
        echo "    </div>
</div>

";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.order.history.after_content", array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 31, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cbfbcd7a6c27515f3997d607f0ee0928ab2d3df003a1f3807bf986c42f1835b7->leave($__internal_cbfbcd7a6c27515f3997d607f0ee0928ab2d3df003a1f3807bf986c42f1835b7_prof);

        
        $__internal_1fa1d6eda53e83c7ec2eb1d25ee4a92ef14d8f46282c8f00973255919ba27261->leave($__internal_1fa1d6eda53e83c7ec2eb1d25ee4a92ef14d8f46282c8f00973255919ba27261_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  116 => 28,  114 => 27,  107 => 23,  104 => 22,  102 => 21,  97 => 19,  92 => 16,  90 => 15,  86 => 13,  84 => 12,  77 => 8,  68 => 7,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import '@SyliusUi/Macro/labels.html.twig' as label %}

{% block title %}{{ 'sylius.ui.order'|trans }} #{{ order.number }} - {{ 'sylius.ui.order_history'|trans }} {{ parent() }}{% endblock %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.order.history.before_header', {'resource': resource}) }}

<div class=\"ui stackable two column grid\">
    <div class=\"twelve wide column\">
        {% include '@SyliusAdmin/Order/History/_header.html.twig' %}
    </div>
    <div class=\"four wide right aligned column\">
        {% include '@SyliusAdmin/Order/History/_actions.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.history.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Order/History/_breadcrumb.html.twig' %}

{{ sonata_block_render_event('sylius.admin.order.history.after_breadcrumb', {'resource': resource}) }}

<div class=\"ui one column grid\">
    <div class=\"column\">
        {% include '@SyliusAdmin/Order/History/_addresses.html.twig' %}
    </div>
</div>

{{ sonata_block_render_event('sylius.admin.order.history.after_content', {'resource': resource}) }}
{% endblock %}
", "SyliusAdminBundle:Order:history.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/history.html.twig");
    }
}
