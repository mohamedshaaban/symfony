<?php

/* SyliusAdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_a54f0c2f8e99db3875a39dbfbc0cbd128033a1d82c7e1feb9b192cc23fca5abd extends Twig_Template
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
        $__internal_af99f45700945391bb317182fcf8f6e7ddac321c3c908cbd84e9aee89bec561b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af99f45700945391bb317182fcf8f6e7ddac321c3c908cbd84e9aee89bec561b->enter($__internal_af99f45700945391bb317182fcf8f6e7ddac321c3c908cbd84e9aee89bec561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $__internal_c4ec51765d7bcc69c85f1eb5fe237ada61a24be06e82b185d156e4a33106b45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ec51765d7bcc69c85f1eb5fe237ada61a24be06e82b185d156e4a33106b45d->enter($__internal_c4ec51765d7bcc69c85f1eb5fe237ada61a24be06e82b185d156e4a33106b45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af99f45700945391bb317182fcf8f6e7ddac321c3c908cbd84e9aee89bec561b->leave($__internal_af99f45700945391bb317182fcf8f6e7ddac321c3c908cbd84e9aee89bec561b_prof);

        
        $__internal_c4ec51765d7bcc69c85f1eb5fe237ada61a24be06e82b185d156e4a33106b45d->leave($__internal_c4ec51765d7bcc69c85f1eb5fe237ada61a24be06e82b185d156e4a33106b45d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0190cc50cc287508e004fcf5f791f1de702c090d4d021ec578575b38888bf225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0190cc50cc287508e004fcf5f791f1de702c090d4d021ec578575b38888bf225->enter($__internal_0190cc50cc287508e004fcf5f791f1de702c090d4d021ec578575b38888bf225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a53e7d60ee797834465fe5230fed56fb69af4ac66f8b6ed4c5bcac479f3e657b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53e7d60ee797834465fe5230fed56fb69af4ac66f8b6ed4c5bcac479f3e657b->enter($__internal_a53e7d60ee797834465fe5230fed56fb69af4ac66f8b6ed4c5bcac479f3e657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.dashboard"), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a53e7d60ee797834465fe5230fed56fb69af4ac66f8b6ed4c5bcac479f3e657b->leave($__internal_a53e7d60ee797834465fe5230fed56fb69af4ac66f8b6ed4c5bcac479f3e657b_prof);

        
        $__internal_0190cc50cc287508e004fcf5f791f1de702c090d4d021ec578575b38888bf225->leave($__internal_0190cc50cc287508e004fcf5f791f1de702c090d4d021ec578575b38888bf225_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_9025319e9b1cd1d0a53074ef05d03844c91d2d8fdf81ebac6621784608c7c1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9025319e9b1cd1d0a53074ef05d03844c91d2d8fdf81ebac6621784608c7c1c3->enter($__internal_9025319e9b1cd1d0a53074ef05d03844c91d2d8fdf81ebac6621784608c7c1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fed011fcea2bb9307ae92c370314af831308a0f48070efaa2452bc50de69337f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed011fcea2bb9307ae92c370314af831308a0f48070efaa2452bc50de69337f->enter($__internal_fed011fcea2bb9307ae92c370314af831308a0f48070efaa2452bc50de69337f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fed011fcea2bb9307ae92c370314af831308a0f48070efaa2452bc50de69337f->leave($__internal_fed011fcea2bb9307ae92c370314af831308a0f48070efaa2452bc50de69337f_prof);

        
        $__internal_9025319e9b1cd1d0a53074ef05d03844c91d2d8fdf81ebac6621784608c7c1c3->leave($__internal_9025319e9b1cd1d0a53074ef05d03844c91d2d8fdf81ebac6621784608c7c1c3_prof);

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
", "SyliusAdminBundle:Dashboard:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\index.html.twig");
    }
}
