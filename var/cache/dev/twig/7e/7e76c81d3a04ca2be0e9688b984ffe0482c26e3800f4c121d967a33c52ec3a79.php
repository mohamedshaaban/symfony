<?php

/* SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig */
class __TwigTemplate_bcc3e376673df0cc63ed6fc8d9108b60c9350e14be8785f808527657c202b75d extends Twig_Template
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
        $__internal_cb256dcae781900d3ce5fed3f6d37eb769073e0f3350de270ab3384213b6c705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb256dcae781900d3ce5fed3f6d37eb769073e0f3350de270ab3384213b6c705->enter($__internal_cb256dcae781900d3ce5fed3f6d37eb769073e0f3350de270ab3384213b6c705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig"));

        $__internal_ba0014d3e08cd5e3f3846168fc37b620d2a93481d9110a87a98ad9a0b1b51647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0014d3e08cd5e3f3846168fc37b620d2a93481d9110a87a98ad9a0b1b51647->enter($__internal_ba0014d3e08cd5e3f3846168fc37b620d2a93481d9110a87a98ad9a0b1b51647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "targetCurrency", array()), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_cb256dcae781900d3ce5fed3f6d37eb769073e0f3350de270ab3384213b6c705->leave($__internal_cb256dcae781900d3ce5fed3f6d37eb769073e0f3350de270ab3384213b6c705_prof);

        
        $__internal_ba0014d3e08cd5e3f3846168fc37b620d2a93481d9110a87a98ad9a0b1b51647->leave($__internal_ba0014d3e08cd5e3f3846168fc37b620d2a93481d9110a87a98ad9a0b1b51647_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data.targetCurrency.name }}
", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ExchangeRate/Grid/Field/targetCurrencyName.html.twig");
    }
}
