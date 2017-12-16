<?php

/* SyliusAdminBundle:Crud:create.html.twig */
class __TwigTemplate_904c9aeac1be47abefb45dcba314e0a3df3d564d3930e08ec17625ca1ead0f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d66927d112fdfff62d9a6007da41fcbdc1f4e6eb1cce2a2f357f29a97a135283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66927d112fdfff62d9a6007da41fcbdc1f4e6eb1cce2a2f357f29a97a135283->enter($__internal_d66927d112fdfff62d9a6007da41fcbdc1f4e6eb1cce2a2f357f29a97a135283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        $__internal_5df8856080a307f2c7087c77175624451b87dd853c43820b574d8146351edabf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df8856080a307f2c7087c77175624451b87dd853c43820b574d8146351edabf->enter($__internal_5df8856080a307f2c7087c77175624451b87dd853c43820b574d8146351edabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.new_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.new_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "name", array())) . ".create");
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66927d112fdfff62d9a6007da41fcbdc1f4e6eb1cce2a2f357f29a97a135283->leave($__internal_d66927d112fdfff62d9a6007da41fcbdc1f4e6eb1cce2a2f357f29a97a135283_prof);

        
        $__internal_5df8856080a307f2c7087c77175624451b87dd853c43820b574d8146351edabf->leave($__internal_5df8856080a307f2c7087c77175624451b87dd853c43820b574d8146351edabf_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_79862125e0a4662ebe5ffe0cb3302182642c423be8b15ae60e8661c1d9e41d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79862125e0a4662ebe5ffe0cb3302182642c423be8b15ae60e8661c1d9e41d8e->enter($__internal_79862125e0a4662ebe5ffe0cb3302182642c423be8b15ae60e8661c1d9e41d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3557c4475ee62c06fc98e9ed9d0fff74266d3a0c1d4169482fb2270a86f589e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3557c4475ee62c06fc98e9ed9d0fff74266d3a0c1d4169482fb2270a86f589e0->enter($__internal_3557c4475ee62c06fc98e9ed9d0fff74266d3a0c1d4169482fb2270a86f589e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_3557c4475ee62c06fc98e9ed9d0fff74266d3a0c1d4169482fb2270a86f589e0->leave($__internal_3557c4475ee62c06fc98e9ed9d0fff74266d3a0c1d4169482fb2270a86f589e0_prof);

        
        $__internal_79862125e0a4662ebe5ffe0cb3302182642c423be8b15ae60e8661c1d9e41d8e->leave($__internal_79862125e0a4662ebe5ffe0cb3302182642c423be8b15ae60e8661c1d9e41d8e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f9b5d2a6f3d14916dc10cda6f97b7f9d4722c3dccd570ee78e02d1d05466339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f9b5d2a6f3d14916dc10cda6f97b7f9d4722c3dccd570ee78e02d1d05466339->enter($__internal_8f9b5d2a6f3d14916dc10cda6f97b7f9d4722c3dccd570ee78e02d1d05466339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eb6d77ccd53c5d255a6d0218bace7386aaeb7be1ce4a56f9f71211d44412c2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6d77ccd53c5d255a6d0218bace7386aaeb7be1ce4a56f9f71211d44412c2dc->enter($__internal_eb6d77ccd53c5d255a6d0218bace7386aaeb7be1ce4a56f9f71211d44412c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 11, $this->getSourceContext()); })()) . ".before_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_header.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 15, $this->getSourceContext()); })()) . ".after_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Crud/Create/_content.html.twig", "SyliusAdminBundle:Crud:create.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 19, $this->getSourceContext()); })()) . ".after_content"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_eb6d77ccd53c5d255a6d0218bace7386aaeb7be1ce4a56f9f71211d44412c2dc->leave($__internal_eb6d77ccd53c5d255a6d0218bace7386aaeb7be1ce4a56f9f71211d44412c2dc_prof);

        
        $__internal_8f9b5d2a6f3d14916dc10cda6f97b7f9d4722c3dccd570ee78e02d1d05466339->leave($__internal_8f9b5d2a6f3d14916dc10cda6f97b7f9d4722c3dccd570ee78e02d1d05466339_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3669445301876388d2daafe03c478a7963fc38b07dd275edabd03644704bfd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3669445301876388d2daafe03c478a7963fc38b07dd275edabd03644704bfd3->enter($__internal_a3669445301876388d2daafe03c478a7963fc38b07dd275edabd03644704bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_796aeae6b82cc911be98da4d4a40fe01061e8b04f5f6b1601da2e7d3adaea384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796aeae6b82cc911be98da4d4a40fe01061e8b04f5f6b1601da2e7d3adaea384->enter($__internal_796aeae6b82cc911be98da4d4a40fe01061e8b04f5f6b1601da2e7d3adaea384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 25, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_796aeae6b82cc911be98da4d4a40fe01061e8b04f5f6b1601da2e7d3adaea384->leave($__internal_796aeae6b82cc911be98da4d4a40fe01061e8b04f5f6b1601da2e7d3adaea384_prof);

        
        $__internal_a3669445301876388d2daafe03c478a7963fc38b07dd275edabd03644704bfd3->leave($__internal_a3669445301876388d2daafe03c478a7963fc38b07dd275edabd03644704bfd3_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91393d9c44489f640e818881a5db9dea94238a910f43a5d96b4895aea3e422f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91393d9c44489f640e818881a5db9dea94238a910f43a5d96b4895aea3e422f6->enter($__internal_91393d9c44489f640e818881a5db9dea94238a910f43a5d96b4895aea3e422f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b0e7d266f8fda3cd760550bcd21537c1206406e52f1e67a39f21b3a3dd76e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0e7d266f8fda3cd760550bcd21537c1206406e52f1e67a39f21b3a3dd76e01->enter($__internal_3b0e7d266f8fda3cd760550bcd21537c1206406e52f1e67a39f21b3a3dd76e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 31, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_3b0e7d266f8fda3cd760550bcd21537c1206406e52f1e67a39f21b3a3dd76e01->leave($__internal_3b0e7d266f8fda3cd760550bcd21537c1206406e52f1e67a39f21b3a3dd76e01_prof);

        
        $__internal_91393d9c44489f640e818881a5db9dea94238a910f43a5d96b4895aea3e422f6->leave($__internal_91393d9c44489f640e818881a5db9dea94238a910f43a5d96b4895aea3e422f6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 31,  147 => 29,  138 => 28,  126 => 25,  120 => 23,  111 => 22,  99 => 19,  96 => 18,  94 => 17,  89 => 15,  86 => 14,  84 => 13,  79 => 11,  70 => 10,  50 => 6,  40 => 1,  38 => 8,  36 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.new_'~metadata.name) %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.create' %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Create/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Create/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resource': resource}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Crud/create.html.twig");
    }
}
