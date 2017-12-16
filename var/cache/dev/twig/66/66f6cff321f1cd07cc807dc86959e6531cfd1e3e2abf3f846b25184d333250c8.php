<?php

/* SonataIntlBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_7ddb8621392b0e1d72acb8a14fe54bad6009ddff3a14aa2a452203ebe82f9ba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_ec97a6008ba1a202d3b89bafeb04ce04237ce7d881dd90dc335947f46a8d00e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec97a6008ba1a202d3b89bafeb04ce04237ce7d881dd90dc335947f46a8d00e2->enter($__internal_ec97a6008ba1a202d3b89bafeb04ce04237ce7d881dd90dc335947f46a8d00e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_currency.html.twig"));

        $__internal_60afe942db075fc807df30956b9b4a511a2951b44d5d337744b1b2edfb8b84bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60afe942db075fc807df30956b9b4a511a2951b44d5d337744b1b2edfb8b84bb->enter($__internal_60afe942db075fc807df30956b9b4a511a2951b44d5d337744b1b2edfb8b84bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec97a6008ba1a202d3b89bafeb04ce04237ce7d881dd90dc335947f46a8d00e2->leave($__internal_ec97a6008ba1a202d3b89bafeb04ce04237ce7d881dd90dc335947f46a8d00e2_prof);

        
        $__internal_60afe942db075fc807df30956b9b4a511a2951b44d5d337744b1b2edfb8b84bb->leave($__internal_60afe942db075fc807df30956b9b4a511a2951b44d5d337744b1b2edfb8b84bb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_896fb04789912d59db5296ad686e3d4c1d450133459dd8ffb375bbfe816c4887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896fb04789912d59db5296ad686e3d4c1d450133459dd8ffb375bbfe816c4887->enter($__internal_896fb04789912d59db5296ad686e3d4c1d450133459dd8ffb375bbfe816c4887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f906ac35e352ab0cee6b57f3241f3696898c0fdcb9b4b4cb1ecda82dc11d782d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f906ac35e352ab0cee6b57f3241f3696898c0fdcb9b4b4cb1ecda82dc11d782d->enter($__internal_f906ac35e352ab0cee6b57f3241f3696898c0fdcb9b4b4cb1ecda82dc11d782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            $context["currency"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "currency", array());
            // line 19
            echo "        ";
            $context["attributes"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "attributes", array()), array())) : (array()));
            // line 20
            echo "        ";
            $context["textAttributes"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "textAttributes", array()), array())) : (array()));
            // line 21
            echo "        ";
            $context["locale"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "locale", array()), null)) : (null));
            // line 22
            echo "
        ";
            // line 23
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\NumberExtension')->formatCurrency((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["textAttributes"]) || array_key_exists("textAttributes", $context) ? $context["textAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "textAttributes" does not exist.', 23, $this->getSourceContext()); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 23, $this->getSourceContext()); })()));
        }
        
        $__internal_f906ac35e352ab0cee6b57f3241f3696898c0fdcb9b4b4cb1ecda82dc11d782d->leave($__internal_f906ac35e352ab0cee6b57f3241f3696898c0fdcb9b4b4cb1ecda82dc11d782d_prof);

        
        $__internal_896fb04789912d59db5296ad686e3d4c1d450133459dd8ffb375bbfe816c4887->leave($__internal_896fb04789912d59db5296ad686e3d4c1d450133459dd8ffb375bbfe816c4887_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_currency.html.twig";
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

{% block field %}
    {%- if value is null -%}
        &nbsp;
    {%- else -%}
        {% set currency = field_description.options.currency %}
        {% set attributes = field_description.options.attributes|default({}) %}
        {% set textAttributes = field_description.options.textAttributes|default({}) %}
        {% set locale = field_description.options.locale|default(null) %}

        {{ value | number_format_currency(currency, attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_currency.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
