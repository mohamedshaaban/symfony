<?php

/* SyliusAttributeBundle:Types:datetime.html.twig */
class __TwigTemplate_2f87f82d03e37d3462a13d9edcc2fb28159855047fde21e2685ea8c298389227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e077c30683cc42242a408c97a3e10457bda8e560272639967b050dc620afe41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e077c30683cc42242a408c97a3e10457bda8e560272639967b050dc620afe41e->enter($__internal_e077c30683cc42242a408c97a3e10457bda8e560272639967b050dc620afe41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:datetime.html.twig"));

        $__internal_ec753b304e56bb7053db61cd57662c3b0a6197466e019460aeab6e776f111d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec753b304e56bb7053db61cd57662c3b0a6197466e019460aeab6e776f111d05->enter($__internal_ec753b304e56bb7053db61cd57662c3b0a6197466e019460aeab6e776f111d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:datetime.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["attribute"] ?? null), "attribute", array(), "any", false, true), "configuration", array(), "any", false, true), "format", array(), "array", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 2, $this->getSourceContext()); })()), "value", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 2, $this->getSourceContext()); })()), "attribute", array()), "configuration", array()), "format", array(), "array"));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 4, $this->getSourceContext()); })()), "value", array()));
            echo "
";
        }
        
        $__internal_e077c30683cc42242a408c97a3e10457bda8e560272639967b050dc620afe41e->leave($__internal_e077c30683cc42242a408c97a3e10457bda8e560272639967b050dc620afe41e_prof);

        
        $__internal_ec753b304e56bb7053db61cd57662c3b0a6197466e019460aeab6e776f111d05->leave($__internal_ec753b304e56bb7053db61cd57662c3b0a6197466e019460aeab6e776f111d05_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.attribute.configuration['format'] is defined %}
    {{ attribute.value|format_datetime(attribute.attribute.configuration['format']) }}
{% else %}
    {{ attribute.value|format_datetime }}
{% endif %}
", "SyliusAttributeBundle:Types:datetime.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/datetime.html.twig");
    }
}
