<?php

/* SyliusUiBundle:Security:login.html.twig */
class __TwigTemplate_b842160100f7e7a344711728b38a9eedbabbb08fcaf5c4c5d4d74f8357076313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/centered.html.twig", "SyliusUiBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4765c302036f834d4f3b94cf5267f57a7a7871a685019b78d08ae07cfdd7dba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4765c302036f834d4f3b94cf5267f57a7a7871a685019b78d08ae07cfdd7dba1->enter($__internal_4765c302036f834d4f3b94cf5267f57a7a7871a685019b78d08ae07cfdd7dba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:login.html.twig"));

        $__internal_563ae9fd6e5df8f361f06cfa421de2d57a98927d0f6cf929ea3722b32b190258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563ae9fd6e5df8f361f06cfa421de2d57a98927d0f6cf929ea3722b32b190258->enter($__internal_563ae9fd6e5df8f361f06cfa421de2d57a98927d0f6cf929ea3722b32b190258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4765c302036f834d4f3b94cf5267f57a7a7871a685019b78d08ae07cfdd7dba1->leave($__internal_4765c302036f834d4f3b94cf5267f57a7a7871a685019b78d08ae07cfdd7dba1_prof);

        
        $__internal_563ae9fd6e5df8f361f06cfa421de2d57a98927d0f6cf929ea3722b32b190258->leave($__internal_563ae9fd6e5df8f361f06cfa421de2d57a98927d0f6cf929ea3722b32b190258_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_90d2cc2751bf758e6ca3af93983ad69a7ba879f18090e96e81181d8e36455c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d2cc2751bf758e6ca3af93983ad69a7ba879f18090e96e81181d8e36455c8f->enter($__internal_90d2cc2751bf758e6ca3af93983ad69a7ba879f18090e96e81181d8e36455c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4218e42ad85911aa089b0a928a98e740079b0b46a76a9d07a8b5010872eedc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4218e42ad85911aa089b0a928a98e740079b0b46a76a9d07a8b5010872eedc64->enter($__internal_4218e42ad85911aa089b0a928a98e740079b0b46a76a9d07a8b5010872eedc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "SyliusUiBundle:Security:login.html.twig", 4)->display($context);
        
        $__internal_4218e42ad85911aa089b0a928a98e740079b0b46a76a9d07a8b5010872eedc64->leave($__internal_4218e42ad85911aa089b0a928a98e740079b0b46a76a9d07a8b5010872eedc64_prof);

        
        $__internal_90d2cc2751bf758e6ca3af93983ad69a7ba879f18090e96e81181d8e36455c8f->leave($__internal_90d2cc2751bf758e6ca3af93983ad69a7ba879f18090e96e81181d8e36455c8f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Layout/centered.html.twig' %}

{% block content %}
{% include '@SyliusUi/Security/_login.html.twig' %}
{% endblock %}
", "SyliusUiBundle:Security:login.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Security/login.html.twig");
    }
}
