<?php

/* SyliusUiBundle:Grid/Filter:entity.html.twig */
class __TwigTemplate_de9c45651d01c1e219ebe0a4f47d7be10097571231b2cef7ea72f831ac0016c7 extends Twig_Template
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
        $__internal_9d18e67481d6a2a2688b6cbe3e429d5d9a877ff66b180853922472b52bc0f5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d18e67481d6a2a2688b6cbe3e429d5d9a877ff66b180853922472b52bc0f5a6->enter($__internal_9d18e67481d6a2a2688b6cbe3e429d5d9a877ff66b180853922472b52bc0f5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:entity.html.twig"));

        $__internal_54d0f5b9ae02c219c3a40ec0ae28af2e12e333195260791063d92314f7b9f4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d0f5b9ae02c219c3a40ec0ae28af2e12e333195260791063d92314f7b9f4ef->enter($__internal_54d0f5b9ae02c219c3a40ec0ae28af2e12e333195260791063d92314f7b9f4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:entity.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'row', array("label" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 3, $this->getSourceContext()); })()), "label", array())));
        echo "
";
        
        $__internal_9d18e67481d6a2a2688b6cbe3e429d5d9a877ff66b180853922472b52bc0f5a6->leave($__internal_9d18e67481d6a2a2688b6cbe3e429d5d9a877ff66b180853922472b52bc0f5a6_prof);

        
        $__internal_54d0f5b9ae02c219c3a40ec0ae28af2e12e333195260791063d92314f7b9f4ef->leave($__internal_54d0f5b9ae02c219c3a40ec0ae28af2e12e333195260791063d92314f7b9f4ef_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:entity.html.twig";
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
", "SyliusUiBundle:Grid/Filter:entity.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Grid/Filter/entity.html.twig");
    }
}
