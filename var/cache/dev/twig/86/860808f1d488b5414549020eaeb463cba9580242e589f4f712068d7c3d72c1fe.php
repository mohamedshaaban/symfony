<?php

/* SyliusAdminBundle:Crud:update.html.twig */
class __TwigTemplate_69ab3a8496fc55431fc11236c672d9ec6655c4f1196eea0f975815968e4ec2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 1);
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
        $__internal_cdc56f023badf65fd0f85aa7f106273a24f694f41ded5a12949d0767231abdfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc56f023badf65fd0f85aa7f106273a24f694f41ded5a12949d0767231abdfe->enter($__internal_cdc56f023badf65fd0f85aa7f106273a24f694f41ded5a12949d0767231abdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        $__internal_d3a7f978d1effe2ee9b88e9ba5b858e6b75bc5c5be41607657f7e46db4874634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a7f978d1effe2ee9b88e9ba5b858e6b75bc5c5be41607657f7e46db4874634->enter($__internal_d3a7f978d1effe2ee9b88e9ba5b858e6b75bc5c5be41607657f7e46db4874634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:update.html.twig"));

        // line 3
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.edit_") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 3, $this->getSourceContext()); })()), "name", array()))));
        // line 4
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 4, $this->getSourceContext()); })()), "name", array())) . ".update");
        // line 8
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), array(0 => "@SyliusAdmin/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc56f023badf65fd0f85aa7f106273a24f694f41ded5a12949d0767231abdfe->leave($__internal_cdc56f023badf65fd0f85aa7f106273a24f694f41ded5a12949d0767231abdfe_prof);

        
        $__internal_d3a7f978d1effe2ee9b88e9ba5b858e6b75bc5c5be41607657f7e46db4874634->leave($__internal_d3a7f978d1effe2ee9b88e9ba5b858e6b75bc5c5be41607657f7e46db4874634_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7382ebeda1ac52b7226d6dd3ad69d79557b391b17a43adb1aaf1ac4d7888c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7382ebeda1ac52b7226d6dd3ad69d79557b391b17a43adb1aaf1ac4d7888c14->enter($__internal_d7382ebeda1ac52b7226d6dd3ad69d79557b391b17a43adb1aaf1ac4d7888c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3bd66c6670e9dc348084c3eb1f0d5555fedf023238a36b8e3521f2bda6c56bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bd66c6670e9dc348084c3eb1f0d5555fedf023238a36b8e3521f2bda6c56bb->enter($__internal_f3bd66c6670e9dc348084c3eb1f0d5555fedf023238a36b8e3521f2bda6c56bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 6, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f3bd66c6670e9dc348084c3eb1f0d5555fedf023238a36b8e3521f2bda6c56bb->leave($__internal_f3bd66c6670e9dc348084c3eb1f0d5555fedf023238a36b8e3521f2bda6c56bb_prof);

        
        $__internal_d7382ebeda1ac52b7226d6dd3ad69d79557b391b17a43adb1aaf1ac4d7888c14->leave($__internal_d7382ebeda1ac52b7226d6dd3ad69d79557b391b17a43adb1aaf1ac4d7888c14_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_7d66c4acd452211b221cef550aec926e627bedbd7947927d2cca48c26b7cc345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d66c4acd452211b221cef550aec926e627bedbd7947927d2cca48c26b7cc345->enter($__internal_7d66c4acd452211b221cef550aec926e627bedbd7947927d2cca48c26b7cc345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9638c10dc78b92b9e92b70d357ac4b596b27a1845e34c268d6e1f7dc7cee4776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9638c10dc78b92b9e92b70d357ac4b596b27a1845e34c268d6e1f7dc7cee4776->enter($__internal_9638c10dc78b92b9e92b70d357ac4b596b27a1845e34c268d6e1f7dc7cee4776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 11, $this->getSourceContext()); })()) . ".before_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 11, $this->getSourceContext()); })()))));
        echo "

";
        // line 13
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_header.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 13)->display($context);
        // line 14
        echo "
";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 15, $this->getSourceContext()); })()) . ".after_header"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 15, $this->getSourceContext()); })()))));
        echo "

";
        // line 17
        $this->loadTemplate("@SyliusAdmin/Crud/Update/_content.html.twig", "SyliusAdminBundle:Crud:update.html.twig", 17)->display($context);
        // line 18
        echo "
";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 19, $this->getSourceContext()); })()) . ".after_content"), array("resource" => (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 19, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9638c10dc78b92b9e92b70d357ac4b596b27a1845e34c268d6e1f7dc7cee4776->leave($__internal_9638c10dc78b92b9e92b70d357ac4b596b27a1845e34c268d6e1f7dc7cee4776_prof);

        
        $__internal_7d66c4acd452211b221cef550aec926e627bedbd7947927d2cca48c26b7cc345->leave($__internal_7d66c4acd452211b221cef550aec926e627bedbd7947927d2cca48c26b7cc345_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_582be2fd03a1ae73d9a175232a610c9ceae41c4f4d616c613339f9d6d3d7ef85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582be2fd03a1ae73d9a175232a610c9ceae41c4f4d616c613339f9d6d3d7ef85->enter($__internal_582be2fd03a1ae73d9a175232a610c9ceae41c4f4d616c613339f9d6d3d7ef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11797c2a4b223712a1f5af41ef1c640b749f17d1d44a73fcd7c06533c3aa2313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11797c2a4b223712a1f5af41ef1c640b749f17d1d44a73fcd7c06533c3aa2313->enter($__internal_11797c2a4b223712a1f5af41ef1c640b749f17d1d44a73fcd7c06533c3aa2313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 25, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_11797c2a4b223712a1f5af41ef1c640b749f17d1d44a73fcd7c06533c3aa2313->leave($__internal_11797c2a4b223712a1f5af41ef1c640b749f17d1d44a73fcd7c06533c3aa2313_prof);

        
        $__internal_582be2fd03a1ae73d9a175232a610c9ceae41c4f4d616c613339f9d6d3d7ef85->leave($__internal_582be2fd03a1ae73d9a175232a610c9ceae41c4f4d616c613339f9d6d3d7ef85_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71e204d99afba7ba481019e0ea191aed610631fa3888d848ade0ae30a0f16648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e204d99afba7ba481019e0ea191aed610631fa3888d848ade0ae30a0f16648->enter($__internal_71e204d99afba7ba481019e0ea191aed610631fa3888d848ade0ae30a0f16648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6314be1c31c737af3bb7ed8b3546f67bca1a54eb4313363fe00d40156d00bddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6314be1c31c737af3bb7ed8b3546f67bca1a54eb4313363fe00d40156d00bddf->enter($__internal_6314be1c31c737af3bb7ed8b3546f67bca1a54eb4313363fe00d40156d00bddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 31, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_6314be1c31c737af3bb7ed8b3546f67bca1a54eb4313363fe00d40156d00bddf->leave($__internal_6314be1c31c737af3bb7ed8b3546f67bca1a54eb4313363fe00d40156d00bddf_prof);

        
        $__internal_71e204d99afba7ba481019e0ea191aed610631fa3888d848ade0ae30a0f16648->leave($__internal_71e204d99afba7ba481019e0ea191aed610631fa3888d848ade0ae30a0f16648_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:update.html.twig";
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

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.edit_'~metadata.name) %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.update' %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% form_theme form '@SyliusAdmin/Form/theme.html.twig' %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resource': resource}) }}

{% include '@SyliusAdmin/Crud/Update/_content.html.twig' %}

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
", "SyliusAdminBundle:Crud:update.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\update.html.twig");
    }
}
