<?php

/* SonataIntlBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_6d75f902f5ec4012692a885194d25538fe362c611d3d10d91dfdc0b073aa432b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataIntlBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_834869862fee993080dc99a0df759231d861a9a06ba8198f092ccaa166245d81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834869862fee993080dc99a0df759231d861a9a06ba8198f092ccaa166245d81->enter($__internal_834869862fee993080dc99a0df759231d861a9a06ba8198f092ccaa166245d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_percent.html.twig"));

        $__internal_9644c5f7436cd2818e882a232b7921caacf74b56e7fdc7d16f38894f2cf5267e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9644c5f7436cd2818e882a232b7921caacf74b56e7fdc7d16f38894f2cf5267e->enter($__internal_9644c5f7436cd2818e882a232b7921caacf74b56e7fdc7d16f38894f2cf5267e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_834869862fee993080dc99a0df759231d861a9a06ba8198f092ccaa166245d81->leave($__internal_834869862fee993080dc99a0df759231d861a9a06ba8198f092ccaa166245d81_prof);

        
        $__internal_9644c5f7436cd2818e882a232b7921caacf74b56e7fdc7d16f38894f2cf5267e->leave($__internal_9644c5f7436cd2818e882a232b7921caacf74b56e7fdc7d16f38894f2cf5267e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_789df033797c56247ce94d59ffce8d0536ca8902094837566428f83c427a1143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789df033797c56247ce94d59ffce8d0536ca8902094837566428f83c427a1143->enter($__internal_789df033797c56247ce94d59ffce8d0536ca8902094837566428f83c427a1143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f37cdcb30aba02a027567b7fc8e74792e90f8229bcd060740dda602730b18fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37cdcb30aba02a027567b7fc8e74792e90f8229bcd060740dda602730b18fce->enter($__internal_f37cdcb30aba02a027567b7fc8e74792e90f8229bcd060740dda602730b18fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_f37cdcb30aba02a027567b7fc8e74792e90f8229bcd060740dda602730b18fce->leave($__internal_f37cdcb30aba02a027567b7fc8e74792e90f8229bcd060740dda602730b18fce_prof);

        
        $__internal_789df033797c56247ce94d59ffce8d0536ca8902094837566428f83c427a1143->leave($__internal_789df033797c56247ce94d59ffce8d0536ca8902094837566428f83c427a1143_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:show_percent.html.twig";
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

        {{ value | number_format_percent(attributes, textAttributes, locale) }}
    {%- endif -%}
{% endblock %}
", "SonataIntlBundle:CRUD:show_percent.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
