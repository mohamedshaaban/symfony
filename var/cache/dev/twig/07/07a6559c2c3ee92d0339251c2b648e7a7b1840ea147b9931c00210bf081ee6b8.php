<?php

/* SyliusAdminBundle:Crud:index.html.twig */
class __TwigTemplate_769260c09a633918ce51ebfbf8cc84567ea5922cc4e5ada02b3655db08d3db7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 1);
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
        $__internal_435f3c41be0f5043660e03dd06456e8cc147c19e8aa44876756d46169b6844e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435f3c41be0f5043660e03dd06456e8cc147c19e8aa44876756d46169b6844e1->enter($__internal_435f3c41be0f5043660e03dd06456e8cc147c19e8aa44876756d46169b6844e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        $__internal_a8975b14a43871ef9f8e44c764012bc5723812a87e2c27250f2eeb251a25aaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8975b14a43871ef9f8e44c764012bc5723812a87e2c27250f2eeb251a25aaef->enter($__internal_a8975b14a43871ef9f8e44c764012bc5723812a87e2c27250f2eeb251a25aaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        // line 3
        $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->getSourceContext()); })()), "definition", array());
        // line 4
        $context["data"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "data", array());
        // line 5
        $context["event_prefix"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "applicationName", array()) . ".admin.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 5, $this->getSourceContext()); })()), "name", array())) . ".index");
        // line 7
        $context["header"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "pluralName", array())))) : (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "applicationName", array()) . ".ui.") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new Twig_Error_Runtime('Variable "metadata" does not exist.', 7, $this->getSourceContext()); })()), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435f3c41be0f5043660e03dd06456e8cc147c19e8aa44876756d46169b6844e1->leave($__internal_435f3c41be0f5043660e03dd06456e8cc147c19e8aa44876756d46169b6844e1_prof);

        
        $__internal_a8975b14a43871ef9f8e44c764012bc5723812a87e2c27250f2eeb251a25aaef->leave($__internal_a8975b14a43871ef9f8e44c764012bc5723812a87e2c27250f2eeb251a25aaef_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_507a59e00bab21f2d79371da32a7300c075b5688e40b65f8b411a4bc1d3b8d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507a59e00bab21f2d79371da32a7300c075b5688e40b65f8b411a4bc1d3b8d84->enter($__internal_507a59e00bab21f2d79371da32a7300c075b5688e40b65f8b411a4bc1d3b8d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0052dd598cf493f2d1a3c3aee8e7536ab382e5d0b4388e14fcbf0bf8208940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0052dd598cf493f2d1a3c3aee8e7536ab382e5d0b4388e14fcbf0bf8208940a->enter($__internal_b0052dd598cf493f2d1a3c3aee8e7536ab382e5d0b4388e14fcbf0bf8208940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_b0052dd598cf493f2d1a3c3aee8e7536ab382e5d0b4388e14fcbf0bf8208940a->leave($__internal_b0052dd598cf493f2d1a3c3aee8e7536ab382e5d0b4388e14fcbf0bf8208940a_prof);

        
        $__internal_507a59e00bab21f2d79371da32a7300c075b5688e40b65f8b411a4bc1d3b8d84->leave($__internal_507a59e00bab21f2d79371da32a7300c075b5688e40b65f8b411a4bc1d3b8d84_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_253ebe74b4ca6f47dd7c03045147332c4b4956e8a424db69c904afad522b4e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253ebe74b4ca6f47dd7c03045147332c4b4956e8a424db69c904afad522b4e61->enter($__internal_253ebe74b4ca6f47dd7c03045147332c4b4956e8a424db69c904afad522b4e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_12cd5c475bf8981a647542dce21702419d0c56cbdce178fb074eb5d7d8ab3ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cd5c475bf8981a647542dce21702419d0c56cbdce178fb074eb5d7d8ab3ec0->enter($__internal_12cd5c475bf8981a647542dce21702419d0c56cbdce178fb074eb5d7d8ab3ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 12, $this->getSourceContext()); })()) . ".before_header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 12, $this->getSourceContext()); })()))));
        echo "

";
        // line 14
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_header.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 14)->display($context);
        // line 15
        echo "
";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 16, $this->getSourceContext()); })()) . ".after_header"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 16, $this->getSourceContext()); })()))));
        echo "

";
        // line 18
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 18)->display($context);
        // line 19
        echo "
";
        // line 20
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 20, $this->getSourceContext()); })()) . ".after_content"), array("resources" => (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 20, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_12cd5c475bf8981a647542dce21702419d0c56cbdce178fb074eb5d7d8ab3ec0->leave($__internal_12cd5c475bf8981a647542dce21702419d0c56cbdce178fb074eb5d7d8ab3ec0_prof);

        
        $__internal_253ebe74b4ca6f47dd7c03045147332c4b4956e8a424db69c904afad522b4e61->leave($__internal_253ebe74b4ca6f47dd7c03045147332c4b4956e8a424db69c904afad522b4e61_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4648590be5976a842f25636b90dda5938ec8ebafe7b73b5081dad3fb8d959f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4648590be5976a842f25636b90dda5938ec8ebafe7b73b5081dad3fb8d959f4f->enter($__internal_4648590be5976a842f25636b90dda5938ec8ebafe7b73b5081dad3fb8d959f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e63f5f20eb6330f558af55bf748888eb4144f865cb2b3e1f1f6295a851688e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63f5f20eb6330f558af55bf748888eb4144f865cb2b3e1f1f6295a851688e35->enter($__internal_e63f5f20eb6330f558af55bf748888eb4144f865cb2b3e1f1f6295a851688e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 26, $this->getSourceContext()); })()) . ".stylesheets")));
        echo "
";
        
        $__internal_e63f5f20eb6330f558af55bf748888eb4144f865cb2b3e1f1f6295a851688e35->leave($__internal_e63f5f20eb6330f558af55bf748888eb4144f865cb2b3e1f1f6295a851688e35_prof);

        
        $__internal_4648590be5976a842f25636b90dda5938ec8ebafe7b73b5081dad3fb8d959f4f->leave($__internal_4648590be5976a842f25636b90dda5938ec8ebafe7b73b5081dad3fb8d959f4f_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_043a6dcdc7b34ad9558951ab3410782d218dcbffcd9cb39fb899f513db2e0b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043a6dcdc7b34ad9558951ab3410782d218dcbffcd9cb39fb899f513db2e0b4d->enter($__internal_043a6dcdc7b34ad9558951ab3410782d218dcbffcd9cb39fb899f513db2e0b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_230116d76049461aa587874f961a8fc4ab3e23d76953f8094b9a8f90c2e55a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230116d76049461aa587874f961a8fc4ab3e23d76953f8094b9a8f90c2e55a8f->enter($__internal_230116d76049461aa587874f961a8fc4ab3e23d76953f8094b9a8f90c2e55a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 32
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array(((isset($context["event_prefix"]) || array_key_exists("event_prefix", $context) ? $context["event_prefix"] : (function () { throw new Twig_Error_Runtime('Variable "event_prefix" does not exist.', 32, $this->getSourceContext()); })()) . ".javascripts")));
        echo "
";
        
        $__internal_230116d76049461aa587874f961a8fc4ab3e23d76953f8094b9a8f90c2e55a8f->leave($__internal_230116d76049461aa587874f961a8fc4ab3e23d76953f8094b9a8f90c2e55a8f_prof);

        
        $__internal_043a6dcdc7b34ad9558951ab3410782d218dcbffcd9cb39fb899f513db2e0b4d->leave($__internal_043a6dcdc7b34ad9558951ab3410782d218dcbffcd9cb39fb899f513db2e0b4d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 32,  149 => 30,  140 => 29,  128 => 26,  122 => 24,  113 => 23,  101 => 20,  98 => 19,  96 => 18,  91 => 16,  88 => 15,  86 => 14,  81 => 12,  72 => 11,  52 => 9,  42 => 1,  40 => 7,  38 => 5,  36 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% set definition = resources.definition %}
{% set data = resources.data %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.index' %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ header|trans }} {{ parent() }}{% endblock %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resources': resources}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Crud\\index.html.twig");
    }
}
