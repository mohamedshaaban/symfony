<?php

/* SyliusAttributeBundle:Types:date.html.twig */
class __TwigTemplate_8206eb70d00f2675683b240975b3a0227e3ed9ab78e67369df8c7f4fb0d2f657 extends Twig_Template
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
        $__internal_953b4016b797fe5ca3eaa615099017c21ced1c25fe5ba0096d6bc0a235af50e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953b4016b797fe5ca3eaa615099017c21ced1c25fe5ba0096d6bc0a235af50e3->enter($__internal_953b4016b797fe5ca3eaa615099017c21ced1c25fe5ba0096d6bc0a235af50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:date.html.twig"));

        $__internal_0783168eae32bac83ea2d06bc538b6781dadef472ac7dc7455a9dfe8e14f9b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0783168eae32bac83ea2d06bc538b6781dadef472ac7dc7455a9dfe8e14f9b6c->enter($__internal_0783168eae32bac83ea2d06bc538b6781dadef472ac7dc7455a9dfe8e14f9b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:date.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["attribute"] ?? null), "attribute", array(), "any", false, true), "configuration", array(), "any", false, true), "format", array(), "array", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 2, $this->getSourceContext()); })()), "value", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 2, $this->getSourceContext()); })()), "attribute", array()), "configuration", array()), "format", array(), "array"));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 4, $this->getSourceContext()); })()), "value", array()));
            echo "
";
        }
        
        $__internal_953b4016b797fe5ca3eaa615099017c21ced1c25fe5ba0096d6bc0a235af50e3->leave($__internal_953b4016b797fe5ca3eaa615099017c21ced1c25fe5ba0096d6bc0a235af50e3_prof);

        
        $__internal_0783168eae32bac83ea2d06bc538b6781dadef472ac7dc7455a9dfe8e14f9b6c->leave($__internal_0783168eae32bac83ea2d06bc538b6781dadef472ac7dc7455a9dfe8e14f9b6c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:date.html.twig";
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
    {{ attribute.value|format_date(attribute.attribute.configuration['format']) }}
{% else %}
    {{ attribute.value|format_date }}
{% endif %}
", "SyliusAttributeBundle:Types:date.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/date.html.twig");
    }
}
