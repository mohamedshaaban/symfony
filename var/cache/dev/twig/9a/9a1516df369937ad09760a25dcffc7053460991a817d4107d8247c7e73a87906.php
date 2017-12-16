<?php

/* SyliusShopBundle:Common/Form:_province.html.twig */
class __TwigTemplate_1aa1f6aca2c9d692d969a0354412d2d0e029093db11f76be589a08ee489abaea extends Twig_Template
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
        $__internal_c586d404ffe9166d3236bef8ba3b6d648da4b3911b3ac20ca6136082892d51f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c586d404ffe9166d3236bef8ba3b6d648da4b3911b3ac20ca6136082892d51f5->enter($__internal_c586d404ffe9166d3236bef8ba3b6d648da4b3911b3ac20ca6136082892d51f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_province.html.twig"));

        $__internal_2b9839ca6043027fb0e7620a5a57dea2755734498798d3687bff50f4be21d400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9839ca6043027fb0e7620a5a57dea2755734498798d3687bff50f4be21d400->enter($__internal_2b9839ca6043027fb0e7620a5a57dea2755734498798d3687bff50f4be21d400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Form:_province.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'label');
        echo "

";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 4
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "ui dropdown")));
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
            echo "
";
        }
        
        $__internal_c586d404ffe9166d3236bef8ba3b6d648da4b3911b3ac20ca6136082892d51f5->leave($__internal_c586d404ffe9166d3236bef8ba3b6d648da4b3911b3ac20ca6136082892d51f5_prof);

        
        $__internal_2b9839ca6043027fb0e7620a5a57dea2755734498798d3687bff50f4be21d400->leave($__internal_2b9839ca6043027fb0e7620a5a57dea2755734498798d3687bff50f4be21d400_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Form:_province.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  32 => 4,  30 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_label(form) }}

{% if form.vars.choices is defined %}
    {{ form_widget(form, {'attr': {'class': 'ui dropdown'}}) }}
{% else %}
    {{ form_widget(form) }}
{% endif %}
", "SyliusShopBundle:Common/Form:_province.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Form/_province.html.twig");
    }
}
