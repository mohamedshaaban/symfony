<?php

/* SonataIntlBundle:CRUD:show_decimal.html.twig */
class __TwigTemplate_a68e3416747a4a9843c00dbe448f52b8e1ac08d2d3fb01eb05eaec5b3530c854 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_decimal.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc356302b728fb798c2b46b29dff35ba99361d1e19634689d23ef48a72ca00ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc356302b728fb798c2b46b29dff35ba99361d1e19634689d23ef48a72ca00ee->enter($__internal_bc356302b728fb798c2b46b29dff35ba99361d1e19634689d23ef48a72ca00ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_decimal.html.twig"));

        $__internal_10eff73591f4cf4df73f08a58f2066bfb60410387855d4f1d558edeabcdf952c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eff73591f4cf4df73f08a58f2066bfb60410387855d4f1d558edeabcdf952c->enter($__internal_10eff73591f4cf4df73f08a58f2066bfb60410387855d4f1d558edeabcdf952c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_decimal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc356302b728fb798c2b46b29dff35ba99361d1e19634689d23ef48a72ca00ee->leave($__internal_bc356302b728fb798c2b46b29dff35ba99361d1e19634689d23ef48a72ca00ee_prof);

        
        $__internal_10eff73591f4cf4df73f08a58f2066bfb60410387855d4f1d558edeabcdf952c->leave($__internal_10eff73591f4cf4df73f08a58f2066bfb60410387855d4f1d558edeabcdf952c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2a1a7dda98b4dbfaba00293b8babcb8249ee1a36675a0d3471e70428add75a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1a7dda98b4dbfaba00293b8babcb8249ee1a36675a0d3471e70428add75a0a->enter($__internal_2a1a7dda98b4dbfaba00293b8babcb8249ee1a36675a0d3471e70428add75a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_63b1bf2e2a0cb4d958c941ee3fbccf43c68000700fe0289cc1d05f2fe76e6ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b1bf2e2a0cb4d958c941ee3fbccf43c68000700fe0289cc1d05f2fe76e6ab2->enter($__internal_63b1bf2e2a0cb4d958c941ee3fbccf43c68000700fe0289cc1d05f2fe76e6ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["attributes"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 19
            echo "        ";
            $context["textAttributes"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["locale"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 21
            echo "
        ";
            // line 22
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatDecimal((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["textAttributes"]) || array_key_exists("textAttributes", $context) ? $context["textAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "textAttributes" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->getSourceContext()); })()));
        }
        
        $__internal_63b1bf2e2a0cb4d958c941ee3fbccf43c68000700fe0289cc1d05f2fe76e6ab2->leave($__internal_63b1bf2e2a0cb4d958c941ee3fbccf43c68000700fe0289cc1d05f2fe76e6ab2_prof);

        
        $__internal_2a1a7dda98b4dbfaba00293b8babcb8249ee1a36675a0d3471e70428add75a0a->leave($__internal_2a1a7dda98b4dbfaba00293b8babcb8249ee1a36675a0d3471e70428add75a0a_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_decimal(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_decimal.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/show_decimal.html.twig");
    }
}
