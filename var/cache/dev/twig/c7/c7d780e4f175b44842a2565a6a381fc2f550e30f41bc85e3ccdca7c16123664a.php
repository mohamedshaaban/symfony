<?php

/* SyliusAdminBundle:Crud:create.html.twig */
class __TwigTemplate_709caa4140622591e8b000af9a73cb87067fce3d9ba6bcb33737222b65d53449 extends Twig_Template
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
        $__internal_b0b1f61fa8c33836d25e99b41aa5aaed8ad075e7d120c1870b22e29779f234b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b1f61fa8c33836d25e99b41aa5aaed8ad075e7d120c1870b22e29779f234b9->enter($__internal_b0b1f61fa8c33836d25e99b41aa5aaed8ad075e7d120c1870b22e29779f234b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        $__internal_2521a5ab02eda3652e9483e236b163e85620e98044295e3030552f60af0c8a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2521a5ab02eda3652e9483e236b163e85620e98044295e3030552f60af0c8a15->enter($__internal_2521a5ab02eda3652e9483e236b163e85620e98044295e3030552f60af0c8a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:create.html.twig"));

        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.new_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.new_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "name", array())) . ".create");
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0b1f61fa8c33836d25e99b41aa5aaed8ad075e7d120c1870b22e29779f234b9->leave($__internal_b0b1f61fa8c33836d25e99b41aa5aaed8ad075e7d120c1870b22e29779f234b9_prof);

        
        $__internal_2521a5ab02eda3652e9483e236b163e85620e98044295e3030552f60af0c8a15->leave($__internal_2521a5ab02eda3652e9483e236b163e85620e98044295e3030552f60af0c8a15_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc2f6617254995ca0a44dbc97f3704043c6f18929c15fc9c56ee47251351cd20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2f6617254995ca0a44dbc97f3704043c6f18929c15fc9c56ee47251351cd20->enter($__internal_cc2f6617254995ca0a44dbc97f3704043c6f18929c15fc9c56ee47251351cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31851946e40ee3bf575bded6e447e5e547dbe7b0ca2c6f1098aac109234fee4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31851946e40ee3bf575bded6e447e5e547dbe7b0ca2c6f1098aac109234fee4e->enter($__internal_31851946e40ee3bf575bded6e447e5e547dbe7b0ca2c6f1098aac109234fee4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_31851946e40ee3bf575bded6e447e5e547dbe7b0ca2c6f1098aac109234fee4e->leave($__internal_31851946e40ee3bf575bded6e447e5e547dbe7b0ca2c6f1098aac109234fee4e_prof);

        
        $__internal_cc2f6617254995ca0a44dbc97f3704043c6f18929c15fc9c56ee47251351cd20->leave($__internal_cc2f6617254995ca0a44dbc97f3704043c6f18929c15fc9c56ee47251351cd20_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ebaf0a8cbdcde84e63aacd14ea17967c9e2212bbc92b6843370e1e5a874ba13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebaf0a8cbdcde84e63aacd14ea17967c9e2212bbc92b6843370e1e5a874ba13->enter($__internal_1ebaf0a8cbdcde84e63aacd14ea17967c9e2212bbc92b6843370e1e5a874ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3059fe38143aea072944d83ac124743f3183f060a7d9dcf4f43eb19283aa8174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3059fe38143aea072944d83ac124743f3183f060a7d9dcf4f43eb19283aa8174->enter($__internal_3059fe38143aea072944d83ac124743f3183f060a7d9dcf4f43eb19283aa8174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3059fe38143aea072944d83ac124743f3183f060a7d9dcf4f43eb19283aa8174->leave($__internal_3059fe38143aea072944d83ac124743f3183f060a7d9dcf4f43eb19283aa8174_prof);

        
        $__internal_1ebaf0a8cbdcde84e63aacd14ea17967c9e2212bbc92b6843370e1e5a874ba13->leave($__internal_1ebaf0a8cbdcde84e63aacd14ea17967c9e2212bbc92b6843370e1e5a874ba13_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c93554b9fef78d00521a98fd8f9c3c58453126f6caad421117a84bfd0cde5b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93554b9fef78d00521a98fd8f9c3c58453126f6caad421117a84bfd0cde5b9c->enter($__internal_c93554b9fef78d00521a98fd8f9c3c58453126f6caad421117a84bfd0cde5b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cebdd39ee9cad7fe515e7266861b46deda0cdf39b8f401ade9bb4d9f1efe375a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebdd39ee9cad7fe515e7266861b46deda0cdf39b8f401ade9bb4d9f1efe375a->enter($__internal_cebdd39ee9cad7fe515e7266861b46deda0cdf39b8f401ade9bb4d9f1efe375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 25, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_cebdd39ee9cad7fe515e7266861b46deda0cdf39b8f401ade9bb4d9f1efe375a->leave($__internal_cebdd39ee9cad7fe515e7266861b46deda0cdf39b8f401ade9bb4d9f1efe375a_prof);

        
        $__internal_c93554b9fef78d00521a98fd8f9c3c58453126f6caad421117a84bfd0cde5b9c->leave($__internal_c93554b9fef78d00521a98fd8f9c3c58453126f6caad421117a84bfd0cde5b9c_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a5d2edb6999c68dfede7eefa4e63866258e0496795effb80251361bd41c9e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d2edb6999c68dfede7eefa4e63866258e0496795effb80251361bd41c9e03->enter($__internal_7a5d2edb6999c68dfede7eefa4e63866258e0496795effb80251361bd41c9e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3d1b2b18c98b31a62cf68bc483e1fe6e8299fb3ec0774950660063022251c19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1b2b18c98b31a62cf68bc483e1fe6e8299fb3ec0774950660063022251c19a->enter($__internal_3d1b2b18c98b31a62cf68bc483e1fe6e8299fb3ec0774950660063022251c19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 31, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_3d1b2b18c98b31a62cf68bc483e1fe6e8299fb3ec0774950660063022251c19a->leave($__internal_3d1b2b18c98b31a62cf68bc483e1fe6e8299fb3ec0774950660063022251c19a_prof);

        
        $__internal_7a5d2edb6999c68dfede7eefa4e63866258e0496795effb80251361bd41c9e03->leave($__internal_7a5d2edb6999c68dfede7eefa4e63866258e0496795effb80251361bd41c9e03_prof);

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
", "SyliusAdminBundle:Crud:create.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\create.html.twig");
    }
}
