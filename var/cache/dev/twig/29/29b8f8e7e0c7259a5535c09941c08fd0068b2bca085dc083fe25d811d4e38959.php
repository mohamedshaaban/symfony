<?php

/* SonataIntlBundle:CRUD:list_date.html.twig */
class __TwigTemplate_94fd7e6ee46c0885ea8d092be1b042258b92460cb6883d13d4eb9c625ac1d4be extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e873651e6ad530db8aba8f6730849eda5ad636266fbc5897fd0939fcfb568d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e873651e6ad530db8aba8f6730849eda5ad636266fbc5897fd0939fcfb568d16->enter($__internal_e873651e6ad530db8aba8f6730849eda5ad636266fbc5897fd0939fcfb568d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_date.html.twig"));

        $__internal_3eb098577e23831436733a341f940c7831bf2967a67ad2247436fcfa78f25858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb098577e23831436733a341f940c7831bf2967a67ad2247436fcfa78f25858->enter($__internal_3eb098577e23831436733a341f940c7831bf2967a67ad2247436fcfa78f25858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e873651e6ad530db8aba8f6730849eda5ad636266fbc5897fd0939fcfb568d16->leave($__internal_e873651e6ad530db8aba8f6730849eda5ad636266fbc5897fd0939fcfb568d16_prof);

        
        $__internal_3eb098577e23831436733a341f940c7831bf2967a67ad2247436fcfa78f25858->leave($__internal_3eb098577e23831436733a341f940c7831bf2967a67ad2247436fcfa78f25858_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_42263fce20dc866f0ff9a3f5829545cfb994e4bb93740dde78077b4f6bb492dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42263fce20dc866f0ff9a3f5829545cfb994e4bb93740dde78077b4f6bb492dd->enter($__internal_42263fce20dc866f0ff9a3f5829545cfb994e4bb93740dde78077b4f6bb492dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ce6fbf12c6b5838da34195af6dd49fe96ab39d5c1f174d0d883462dfd69356d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6fbf12c6b5838da34195af6dd49fe96ab39d5c1f174d0d883462dfd69356d1->enter($__internal_ce6fbf12c6b5838da34195af6dd49fe96ab39d5c1f174d0d883462dfd69356d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ce6fbf12c6b5838da34195af6dd49fe96ab39d5c1f174d0d883462dfd69356d1->leave($__internal_ce6fbf12c6b5838da34195af6dd49fe96ab39d5c1f174d0d883462dfd69356d1_prof);

        
        $__internal_42263fce20dc866f0ff9a3f5829545cfb994e4bb93740dde78077b4f6bb492dd->leave($__internal_42263fce20dc866f0ff9a3f5829545cfb994e4bb93740dde78077b4f6bb492dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  64 => 22,  61 => 21,  58 => 20,  55 => 19,  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
", "SonataIntlBundle:CRUD:list_date.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
