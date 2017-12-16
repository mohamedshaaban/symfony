<?php

/* SonataIntlBundle:CRUD:show_date.html.twig */
class __TwigTemplate_f4f75ac25ba69efc729f360e696f11756d0863d4d30bf0ecbbef4e440608a65f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_25a8fa0f9c70301fd4fc1c2a70ad831eca272fbfc0254e2a9fa8d36d33723556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a8fa0f9c70301fd4fc1c2a70ad831eca272fbfc0254e2a9fa8d36d33723556->enter($__internal_25a8fa0f9c70301fd4fc1c2a70ad831eca272fbfc0254e2a9fa8d36d33723556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_date.html.twig"));

        $__internal_1e8a75bc5b17c358b94e94661ee17022d4181e1b8ae780724df370150e164422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8a75bc5b17c358b94e94661ee17022d4181e1b8ae780724df370150e164422->enter($__internal_1e8a75bc5b17c358b94e94661ee17022d4181e1b8ae780724df370150e164422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25a8fa0f9c70301fd4fc1c2a70ad831eca272fbfc0254e2a9fa8d36d33723556->leave($__internal_25a8fa0f9c70301fd4fc1c2a70ad831eca272fbfc0254e2a9fa8d36d33723556_prof);

        
        $__internal_1e8a75bc5b17c358b94e94661ee17022d4181e1b8ae780724df370150e164422->leave($__internal_1e8a75bc5b17c358b94e94661ee17022d4181e1b8ae780724df370150e164422_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_277da7043a187cd96aad7c45dd5df4a0bbab2b41131417fcb53eb33cf24c8f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277da7043a187cd96aad7c45dd5df4a0bbab2b41131417fcb53eb33cf24c8f93->enter($__internal_277da7043a187cd96aad7c45dd5df4a0bbab2b41131417fcb53eb33cf24c8f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8f49bf9664c3e03df82eb3342caf53b2819324438bff32106e559e8daaa7278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f49bf9664c3e03df82eb3342caf53b2819324438bff32106e559e8daaa7278b->enter($__internal_8f49bf9664c3e03df82eb3342caf53b2819324438bff32106e559e8daaa7278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "
        ";
            // line 23
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["pattern"]) || array_key_exists("pattern", $context) ? $context["pattern"] : (function () { throw new Twig_Error_Runtime('Variable "pattern" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["timezone"]) || array_key_exists("timezone", $context) ? $context["timezone"] : (function () { throw new Twig_Error_Runtime('Variable "timezone" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["dateType"]) || array_key_exists("dateType", $context) ? $context["dateType"] : (function () { throw new Twig_Error_Runtime('Variable "dateType" does not exist.', 23, $this->getSourceContext()); })()));
        }
        
        $__internal_8f49bf9664c3e03df82eb3342caf53b2819324438bff32106e559e8daaa7278b->leave($__internal_8f49bf9664c3e03df82eb3342caf53b2819324438bff32106e559e8daaa7278b_prof);

        
        $__internal_277da7043a187cd96aad7c45dd5df4a0bbab2b41131417fcb53eb33cf24c8f93->leave($__internal_277da7043a187cd96aad7c45dd5df4a0bbab2b41131417fcb53eb33cf24c8f93_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {% set pattern = field_description.options.pattern|default(null) %}
        {% set locale = field_description.options.locale|default(null) %}
        {% set timezone = field_description.options.timezone|default(null) %}
        {% set dateType = field_description.options.dateType|default(null) %}

        {{ value | format_date(pattern, locale, timezone, dateType) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_date.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
