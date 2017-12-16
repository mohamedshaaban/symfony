<?php

/* @SyliusUi/Grid/Filter/string.html.twig */
class __TwigTemplate_afff47cf61530713e97744872a8f7230b70af81b65311685c946ce7bb5fdf34a extends Twig_Template
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
        $__internal_c09a7ac5652a057a9f9c6f2385ec0b254b571bb19d86e46c65e20cfaef34888b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c09a7ac5652a057a9f9c6f2385ec0b254b571bb19d86e46c65e20cfaef34888b->enter($__internal_c09a7ac5652a057a9f9c6f2385ec0b254b571bb19d86e46c65e20cfaef34888b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/string.html.twig"));

        $__internal_811de7e6987f16dbb312abb9adc7f53c20be3f29cd724c87a20532e21f4c18a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811de7e6987f16dbb312abb9adc7f53c20be3f29cd724c87a20532e21f4c18a5->enter($__internal_811de7e6987f16dbb312abb9adc7f53c20be3f29cd724c87a20532e21f4c18a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/string.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array(), "any", true, true)) {
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "type", array()), 'row', array("label" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 4, $this->getSourceContext()); })()), "label", array())));
            echo "
";
        }
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "value", array()), 'row', array("label" => ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "type", array(), "any", true, true)) ? (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "value", array()), "vars", array()), "label", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 6, $this->getSourceContext()); })()), "label", array())))));
        echo "
";
        
        $__internal_c09a7ac5652a057a9f9c6f2385ec0b254b571bb19d86e46c65e20cfaef34888b->leave($__internal_c09a7ac5652a057a9f9c6f2385ec0b254b571bb19d86e46c65e20cfaef34888b_prof);

        
        $__internal_811de7e6987f16dbb312abb9adc7f53c20be3f29cd724c87a20532e21f4c18a5->leave($__internal_811de7e6987f16dbb312abb9adc7f53c20be3f29cd724c87a20532e21f4c18a5_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Filter/string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% if form.type is defined %}
{{ form_row(form.type, {'label': filter.label}) }}
{% endif %}
{{ form_row(form.value, {'label': form.type is defined ? form.value.vars.label : filter.label}) }}
", "@SyliusUi/Grid/Filter/string.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Filter\\string.html.twig");
    }
}
