<?php

/* SonataIntlBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_6634cd6701e59b2cd8db223f1b709758450720671ea1fa2c2b2b38601b43c5dc extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38b748982fc2331dad04327673efa17865cd5f007631b422165ce2ed44e982e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b748982fc2331dad04327673efa17865cd5f007631b422165ce2ed44e982e3->enter($__internal_38b748982fc2331dad04327673efa17865cd5f007631b422165ce2ed44e982e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_datetime.html.twig"));

        $__internal_e89270cb5257efa8c381d3fce06a5f72bcd139b9e66ab950285bccf4360062df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89270cb5257efa8c381d3fce06a5f72bcd139b9e66ab950285bccf4360062df->enter($__internal_e89270cb5257efa8c381d3fce06a5f72bcd139b9e66ab950285bccf4360062df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b748982fc2331dad04327673efa17865cd5f007631b422165ce2ed44e982e3->leave($__internal_38b748982fc2331dad04327673efa17865cd5f007631b422165ce2ed44e982e3_prof);

        
        $__internal_e89270cb5257efa8c381d3fce06a5f72bcd139b9e66ab950285bccf4360062df->leave($__internal_e89270cb5257efa8c381d3fce06a5f72bcd139b9e66ab950285bccf4360062df_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e20a758a0a1f0004f95996fc81d319c470d5268f5340bfef6548d475052ad327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20a758a0a1f0004f95996fc81d319c470d5268f5340bfef6548d475052ad327->enter($__internal_e20a758a0a1f0004f95996fc81d319c470d5268f5340bfef6548d475052ad327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_05668fadec3af3ed6461a3965d177e4c55e34d734fbbcd850bbd29ee8d29ce13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05668fadec3af3ed6461a3965d177e4c55e34d734fbbcd850bbd29ee8d29ce13->enter($__internal_05668fadec3af3ed6461a3965d177e4c55e34d734fbbcd850bbd29ee8d29ce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_05668fadec3af3ed6461a3965d177e4c55e34d734fbbcd850bbd29ee8d29ce13->leave($__internal_05668fadec3af3ed6461a3965d177e4c55e34d734fbbcd850bbd29ee8d29ce13_prof);

        
        $__internal_e20a758a0a1f0004f95996fc81d319c470d5268f5340bfef6548d475052ad327->leave($__internal_e20a758a0a1f0004f95996fc81d319c470d5268f5340bfef6548d475052ad327_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  67 => 23,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
", "SonataIntlBundle:CRUD:list_datetime.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
