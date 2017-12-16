<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_5abe83952bcccb9621e58ea181e26a518a4e2d576a326837e6778cad4b477eee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e63e21a2a536ca8e44075d82e16c7e07e7c15f176a5db0ac91f0861baaa3a48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63e21a2a536ca8e44075d82e16c7e07e7c15f176a5db0ac91f0861baaa3a48a->enter($__internal_e63e21a2a536ca8e44075d82e16c7e07e7c15f176a5db0ac91f0861baaa3a48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_2e295b9d3e8e1c336bc10a88e29e6851f1bb5adef0495cd2551a16e3ac1e6d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e295b9d3e8e1c336bc10a88e29e6851f1bb5adef0495cd2551a16e3ac1e6d74->enter($__internal_2e295b9d3e8e1c336bc10a88e29e6851f1bb5adef0495cd2551a16e3ac1e6d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63e21a2a536ca8e44075d82e16c7e07e7c15f176a5db0ac91f0861baaa3a48a->leave($__internal_e63e21a2a536ca8e44075d82e16c7e07e7c15f176a5db0ac91f0861baaa3a48a_prof);

        
        $__internal_2e295b9d3e8e1c336bc10a88e29e6851f1bb5adef0495cd2551a16e3ac1e6d74->leave($__internal_2e295b9d3e8e1c336bc10a88e29e6851f1bb5adef0495cd2551a16e3ac1e6d74_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_9c47a9b79277aa890763fdae4059cc47322e16d25f94120b3826db1700ff7627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c47a9b79277aa890763fdae4059cc47322e16d25f94120b3826db1700ff7627->enter($__internal_9c47a9b79277aa890763fdae4059cc47322e16d25f94120b3826db1700ff7627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_551abbbc0d1af5e644ef4039f69fe97142ba3a0036d06a6fec0e71e18a8999db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551abbbc0d1af5e644ef4039f69fe97142ba3a0036d06a6fec0e71e18a8999db->enter($__internal_551abbbc0d1af5e644ef4039f69fe97142ba3a0036d06a6fec0e71e18a8999db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 7, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 7, $this->getSourceContext()); })()));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 9, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })());
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        }
        
        $__internal_551abbbc0d1af5e644ef4039f69fe97142ba3a0036d06a6fec0e71e18a8999db->leave($__internal_551abbbc0d1af5e644ef4039f69fe97142ba3a0036d06a6fec0e71e18a8999db_prof);

        
        $__internal_9c47a9b79277aa890763fdae4059cc47322e16d25f94120b3826db1700ff7627->leave($__internal_9c47a9b79277aa890763fdae4059cc47322e16d25f94120b3826db1700ff7627_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\knplabs\\knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
