<?php

/* SonataIntlBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_2be85862308cdf27712247c313d59f9fe3ba2d8278c13f98acfd317fb33b9097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_3fa67af5c7f3bf6c297938b25f6469aa852638282e455c11d0367d07b34538e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa67af5c7f3bf6c297938b25f6469aa852638282e455c11d0367d07b34538e9->enter($__internal_3fa67af5c7f3bf6c297938b25f6469aa852638282e455c11d0367d07b34538e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_datetime.html.twig"));

        $__internal_03bb0f684a0d095f5c43a090976560d1b2b5dd465603d17e7babe26cb20c70ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03bb0f684a0d095f5c43a090976560d1b2b5dd465603d17e7babe26cb20c70ea->enter($__internal_03bb0f684a0d095f5c43a090976560d1b2b5dd465603d17e7babe26cb20c70ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fa67af5c7f3bf6c297938b25f6469aa852638282e455c11d0367d07b34538e9->leave($__internal_3fa67af5c7f3bf6c297938b25f6469aa852638282e455c11d0367d07b34538e9_prof);

        
        $__internal_03bb0f684a0d095f5c43a090976560d1b2b5dd465603d17e7babe26cb20c70ea->leave($__internal_03bb0f684a0d095f5c43a090976560d1b2b5dd465603d17e7babe26cb20c70ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_09bdd96207d3b6c2c0bea89dd50392b40efe6d17392b6294bf7fec7f7c07850f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09bdd96207d3b6c2c0bea89dd50392b40efe6d17392b6294bf7fec7f7c07850f->enter($__internal_09bdd96207d3b6c2c0bea89dd50392b40efe6d17392b6294bf7fec7f7c07850f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8ab0323b2cc063937ce8293e574c869ce481731b6615ad6e565d484d62940efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab0323b2cc063937ce8293e574c869ce481731b6615ad6e565d484d62940efd->enter($__internal_8ab0323b2cc063937ce8293e574c869ce481731b6615ad6e565d484d62940efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["pattern"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "pattern", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "pattern", array()), null)) : (null));
            // line 19
            echo "        ";
            $context["locale"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 20
            echo "        ";
            $context["timezone"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array()), null)) : (null));
            // line 21
            echo "        ";
            $context["dateType"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "dateType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "dateType", array()), null)) : (null));
            // line 22
            echo "        ";
            $context["timeType"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timeType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "timeType", array()), null)) : (null));
            // line 23
            echo "
        ";
            // line 24
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["pattern"]) || array_key_exists("pattern", $context) ? $context["pattern"] : (function () { throw new Twig_Error_Runtime('Variable "pattern" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["timezone"]) || array_key_exists("timezone", $context) ? $context["timezone"] : (function () { throw new Twig_Error_Runtime('Variable "timezone" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["dateType"]) || array_key_exists("dateType", $context) ? $context["dateType"] : (function () { throw new Twig_Error_Runtime('Variable "dateType" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["timeType"]) || array_key_exists("timeType", $context) ? $context["timeType"] : (function () { throw new Twig_Error_Runtime('Variable "timeType" does not exist.', 24, $this->getSourceContext()); })()));
        }
        
        $__internal_8ab0323b2cc063937ce8293e574c869ce481731b6615ad6e565d484d62940efd->leave($__internal_8ab0323b2cc063937ce8293e574c869ce481731b6615ad6e565d484d62940efd_prof);

        
        $__internal_09bdd96207d3b6c2c0bea89dd50392b40efe6d17392b6294bf7fec7f7c07850f->leave($__internal_09bdd96207d3b6c2c0bea89dd50392b40efe6d17392b6294bf7fec7f7c07850f_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {% set pattern = field_description.options.pattern|default(null) %}
        {% set locale = field_description.options.locale|default(null) %}
        {% set timezone = field_description.options.timezone|default(null) %}
        {% set dateType = field_description.options.dateType|default(null) %}
        {% set timeType = field_description.options.timeType|default(null) %}

        {{ value | format_datetime(pattern, locale, timezone, dateType, timeType) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_datetime.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
