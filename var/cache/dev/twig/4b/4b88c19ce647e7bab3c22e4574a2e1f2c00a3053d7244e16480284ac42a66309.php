<?php

/* SonataIntlBundle:CRUD:list_decimal.html.twig */
class __TwigTemplate_8cf8210b629d2724753795c6d6c659fd99d0138a8be3e4dc5bd406b709a0ee76 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_decimal.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceeab7ba310659b51c74655c70d76b8f854a9c43c6da124b431c09f10d748d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceeab7ba310659b51c74655c70d76b8f854a9c43c6da124b431c09f10d748d9f->enter($__internal_ceeab7ba310659b51c74655c70d76b8f854a9c43c6da124b431c09f10d748d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $__internal_ecd8784d7d6af1dec2646be0b0ab5dbf28dc918ca3128500906d98834233a55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd8784d7d6af1dec2646be0b0ab5dbf28dc918ca3128500906d98834233a55f->enter($__internal_ecd8784d7d6af1dec2646be0b0ab5dbf28dc918ca3128500906d98834233a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_decimal.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceeab7ba310659b51c74655c70d76b8f854a9c43c6da124b431c09f10d748d9f->leave($__internal_ceeab7ba310659b51c74655c70d76b8f854a9c43c6da124b431c09f10d748d9f_prof);

        
        $__internal_ecd8784d7d6af1dec2646be0b0ab5dbf28dc918ca3128500906d98834233a55f->leave($__internal_ecd8784d7d6af1dec2646be0b0ab5dbf28dc918ca3128500906d98834233a55f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0d2d00ec1642394aa4ed86ba3f6bd8ca2e4340741a7b3629fb69302840cf8575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2d00ec1642394aa4ed86ba3f6bd8ca2e4340741a7b3629fb69302840cf8575->enter($__internal_0d2d00ec1642394aa4ed86ba3f6bd8ca2e4340741a7b3629fb69302840cf8575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d38a1609454026e3def2695c46c6de4c1b7cdce081eb10fa1c5edc020c36b1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a1609454026e3def2695c46c6de4c1b7cdce081eb10fa1c5edc020c36b1c0->enter($__internal_d38a1609454026e3def2695c46c6de4c1b7cdce081eb10fa1c5edc020c36b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_d38a1609454026e3def2695c46c6de4c1b7cdce081eb10fa1c5edc020c36b1c0->leave($__internal_d38a1609454026e3def2695c46c6de4c1b7cdce081eb10fa1c5edc020c36b1c0_prof);

        
        $__internal_0d2d00ec1642394aa4ed86ba3f6bd8ca2e4340741a7b3629fb69302840cf8575->leave($__internal_0d2d00ec1642394aa4ed86ba3f6bd8ca2e4340741a7b3629fb69302840cf8575_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_decimal.html.twig";
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

        {{ value | number_format_decimal(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:list_decimal.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_decimal.html.twig");
    }
}
