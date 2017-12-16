<?php

/* @SyliusUi/Grid/Filter/boolean.html.twig */
class __TwigTemplate_1bfbba6978f58d55e8f3fd0e2ec001545b2690bed983d967799ee64007074a1e extends Twig_Template
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
        $__internal_6940bd338f38297d10d943cde4d4c0cf5b8ebcd0d699f0ccdfe20bea97eceb0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6940bd338f38297d10d943cde4d4c0cf5b8ebcd0d699f0ccdfe20bea97eceb0b->enter($__internal_6940bd338f38297d10d943cde4d4c0cf5b8ebcd0d699f0ccdfe20bea97eceb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/boolean.html.twig"));

        $__internal_f7fcf0a7cc330c6e53d33c7e9241a9bf6f538f0ac7faeb7fc57ef57ec00c0c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fcf0a7cc330c6e53d33c7e9241a9bf6f538f0ac7faeb7fc57ef57ec00c0c7f->enter($__internal_f7fcf0a7cc330c6e53d33c7e9241a9bf6f538f0ac7faeb7fc57ef57ec00c0c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Grid/Filter/boolean.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'row', array("label" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array())));
        echo "
";
        
        $__internal_6940bd338f38297d10d943cde4d4c0cf5b8ebcd0d699f0ccdfe20bea97eceb0b->leave($__internal_6940bd338f38297d10d943cde4d4c0cf5b8ebcd0d699f0ccdfe20bea97eceb0b_prof);

        
        $__internal_f7fcf0a7cc330c6e53d33c7e9241a9bf6f538f0ac7faeb7fc57ef57ec00c0c7f->leave($__internal_f7fcf0a7cc330c6e53d33c7e9241a9bf6f538f0ac7faeb7fc57ef57ec00c0c7f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/Grid/Filter/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form, {'label': filter.label}) }}
", "@SyliusUi/Grid/Filter/boolean.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Grid\\Filter\\boolean.html.twig");
    }
}
