<?php

/* SonataIntlBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_58943dd921c00896d552b05111d960dd027f34b4805578b7c4659b9e4f2b5fb1 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataIntlBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b74c944caf62572f73b3c508251b595e1a44fe7202407d1bebba4723fa5b186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b74c944caf62572f73b3c508251b595e1a44fe7202407d1bebba4723fa5b186->enter($__internal_2b74c944caf62572f73b3c508251b595e1a44fe7202407d1bebba4723fa5b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_currency.html.twig"));

        $__internal_92fb1bf750454e42bf76689fca8eb7dd3cc1015b6be5cc475695a3e3a627f554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fb1bf750454e42bf76689fca8eb7dd3cc1015b6be5cc475695a3e3a627f554->enter($__internal_92fb1bf750454e42bf76689fca8eb7dd3cc1015b6be5cc475695a3e3a627f554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b74c944caf62572f73b3c508251b595e1a44fe7202407d1bebba4723fa5b186->leave($__internal_2b74c944caf62572f73b3c508251b595e1a44fe7202407d1bebba4723fa5b186_prof);

        
        $__internal_92fb1bf750454e42bf76689fca8eb7dd3cc1015b6be5cc475695a3e3a627f554->leave($__internal_92fb1bf750454e42bf76689fca8eb7dd3cc1015b6be5cc475695a3e3a627f554_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_badeb107ebe6a7027dd0c1a80a8a6d6fa9cd1fb321794b1d819b72208b8a1c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badeb107ebe6a7027dd0c1a80a8a6d6fa9cd1fb321794b1d819b72208b8a1c07->enter($__internal_badeb107ebe6a7027dd0c1a80a8a6d6fa9cd1fb321794b1d819b72208b8a1c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a396cb63ea2877e3c8b337f4bf7470a3c8f785662edb2d91d71ba3fdc14cfce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a396cb63ea2877e3c8b337f4bf7470a3c8f785662edb2d91d71ba3fdc14cfce4->enter($__internal_a396cb63ea2877e3c8b337f4bf7470a3c8f785662edb2d91d71ba3fdc14cfce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a396cb63ea2877e3c8b337f4bf7470a3c8f785662edb2d91d71ba3fdc14cfce4->leave($__internal_a396cb63ea2877e3c8b337f4bf7470a3c8f785662edb2d91d71ba3fdc14cfce4_prof);

        
        $__internal_badeb107ebe6a7027dd0c1a80a8a6d6fa9cd1fb321794b1d819b72208b8a1c07->leave($__internal_badeb107ebe6a7027dd0c1a80a8a6d6fa9cd1fb321794b1d819b72208b8a1c07_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:list_currency.html.twig";
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
", "SonataIntlBundle:CRUD:list_currency.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
