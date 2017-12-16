<?php

/* SonataIntlBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_947883323b0674897a0362d8bd51e20725cc2f727bad44bf13427b562e9d1b94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d58cc4cc8584a61e060ff61439ec83b380826d4526f497d92a54a02c25844f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d58cc4cc8584a61e060ff61439ec83b380826d4526f497d92a54a02c25844f->enter($__internal_25d58cc4cc8584a61e060ff61439ec83b380826d4526f497d92a54a02c25844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_percent.html.twig"));

        $__internal_80d3b11abc579d23266a2b00279ace96f62438d2879612b5023565ff7d1ae83e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d3b11abc579d23266a2b00279ace96f62438d2879612b5023565ff7d1ae83e->enter($__internal_80d3b11abc579d23266a2b00279ace96f62438d2879612b5023565ff7d1ae83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d58cc4cc8584a61e060ff61439ec83b380826d4526f497d92a54a02c25844f->leave($__internal_25d58cc4cc8584a61e060ff61439ec83b380826d4526f497d92a54a02c25844f_prof);

        
        $__internal_80d3b11abc579d23266a2b00279ace96f62438d2879612b5023565ff7d1ae83e->leave($__internal_80d3b11abc579d23266a2b00279ace96f62438d2879612b5023565ff7d1ae83e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_829e8d36363c76118679724f0b007d6eb7fd7afcf031cf069445f3dec1bb9317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829e8d36363c76118679724f0b007d6eb7fd7afcf031cf069445f3dec1bb9317->enter($__internal_829e8d36363c76118679724f0b007d6eb7fd7afcf031cf069445f3dec1bb9317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ef011c4105b6c90ae9e533084008b8ab736ff774eeb0b38993af6238d53d6154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef011c4105b6c90ae9e533084008b8ab736ff774eeb0b38993af6238d53d6154->enter($__internal_ef011c4105b6c90ae9e533084008b8ab736ff774eeb0b38993af6238d53d6154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatPercent((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["textAttributes"]) || array_key_exists("textAttributes", $context) ? $context["textAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "textAttributes" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 22, $this->getSourceContext()); })()));
        }
        
        $__internal_ef011c4105b6c90ae9e533084008b8ab736ff774eeb0b38993af6238d53d6154->leave($__internal_ef011c4105b6c90ae9e533084008b8ab736ff774eeb0b38993af6238d53d6154_prof);

        
        $__internal_829e8d36363c76118679724f0b007d6eb7fd7afcf031cf069445f3dec1bb9317->leave($__internal_829e8d36363c76118679724f0b007d6eb7fd7afcf031cf069445f3dec1bb9317_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_percent(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_percent.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
