<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e2b372ed55ed8b63cccadfe546ba5862f021a16027d85d9eeb26e173eb803c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046739de8dcc3142d75978b768dc9a568e7d0c84d93b92b67f50c390f70c1583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046739de8dcc3142d75978b768dc9a568e7d0c84d93b92b67f50c390f70c1583->enter($__internal_046739de8dcc3142d75978b768dc9a568e7d0c84d93b92b67f50c390f70c1583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_664b81ca4b244cdc543218fcd4ea8772d05b344072dabd75d235185df017311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664b81ca4b244cdc543218fcd4ea8772d05b344072dabd75d235185df017311c->enter($__internal_664b81ca4b244cdc543218fcd4ea8772d05b344072dabd75d235185df017311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046739de8dcc3142d75978b768dc9a568e7d0c84d93b92b67f50c390f70c1583->leave($__internal_046739de8dcc3142d75978b768dc9a568e7d0c84d93b92b67f50c390f70c1583_prof);

        
        $__internal_664b81ca4b244cdc543218fcd4ea8772d05b344072dabd75d235185df017311c->leave($__internal_664b81ca4b244cdc543218fcd4ea8772d05b344072dabd75d235185df017311c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b644c25fe63dbbf44af781704038dfd16f2f752cc184d3b0317800675e1c0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b644c25fe63dbbf44af781704038dfd16f2f752cc184d3b0317800675e1c0c6->enter($__internal_6b644c25fe63dbbf44af781704038dfd16f2f752cc184d3b0317800675e1c0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e9a5c5006e7b83efe8dcab4a422c30b5b9079d2100436d3efb0005919e3f609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9a5c5006e7b83efe8dcab4a422c30b5b9079d2100436d3efb0005919e3f609->enter($__internal_3e9a5c5006e7b83efe8dcab4a422c30b5b9079d2100436d3efb0005919e3f609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e9a5c5006e7b83efe8dcab4a422c30b5b9079d2100436d3efb0005919e3f609->leave($__internal_3e9a5c5006e7b83efe8dcab4a422c30b5b9079d2100436d3efb0005919e3f609_prof);

        
        $__internal_6b644c25fe63dbbf44af781704038dfd16f2f752cc184d3b0317800675e1c0c6->leave($__internal_6b644c25fe63dbbf44af781704038dfd16f2f752cc184d3b0317800675e1c0c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df32509f428ecab6e8ee26828d3541ded1971415f61d0abb9fc4775302d70258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df32509f428ecab6e8ee26828d3541ded1971415f61d0abb9fc4775302d70258->enter($__internal_df32509f428ecab6e8ee26828d3541ded1971415f61d0abb9fc4775302d70258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a5599a4f3e1b56cc9587c126789e626bed95bfc33217e6cb539b6b454d5fe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5599a4f3e1b56cc9587c126789e626bed95bfc33217e6cb539b6b454d5fe96->enter($__internal_3a5599a4f3e1b56cc9587c126789e626bed95bfc33217e6cb539b6b454d5fe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a5599a4f3e1b56cc9587c126789e626bed95bfc33217e6cb539b6b454d5fe96->leave($__internal_3a5599a4f3e1b56cc9587c126789e626bed95bfc33217e6cb539b6b454d5fe96_prof);

        
        $__internal_df32509f428ecab6e8ee26828d3541ded1971415f61d0abb9fc4775302d70258->leave($__internal_df32509f428ecab6e8ee26828d3541ded1971415f61d0abb9fc4775302d70258_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a941279739937f8ef3aa55734f0b92009d87c265526b0fca884e43bb9cdb2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a941279739937f8ef3aa55734f0b92009d87c265526b0fca884e43bb9cdb2af->enter($__internal_8a941279739937f8ef3aa55734f0b92009d87c265526b0fca884e43bb9cdb2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df5a6f55878a0c7cf68032d3425dad639d4d3337ee9b8497c75460eed9dac399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5a6f55878a0c7cf68032d3425dad639d4d3337ee9b8497c75460eed9dac399->enter($__internal_df5a6f55878a0c7cf68032d3425dad639d4d3337ee9b8497c75460eed9dac399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_df5a6f55878a0c7cf68032d3425dad639d4d3337ee9b8497c75460eed9dac399->leave($__internal_df5a6f55878a0c7cf68032d3425dad639d4d3337ee9b8497c75460eed9dac399_prof);

        
        $__internal_8a941279739937f8ef3aa55734f0b92009d87c265526b0fca884e43bb9cdb2af->leave($__internal_8a941279739937f8ef3aa55734f0b92009d87c265526b0fca884e43bb9cdb2af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
