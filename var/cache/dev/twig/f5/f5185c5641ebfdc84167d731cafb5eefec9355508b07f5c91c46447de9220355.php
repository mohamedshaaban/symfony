<?php

/* SyliusAttributeBundle:Types:checkbox.html.twig */
class __TwigTemplate_be6960d2e58e20d5aa740a57f2432c7d67563ff015a85712522ec8f84bd1458a extends Twig_Template
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
        $__internal_edce91e228a22e221a2b418caa3dc6cfb4a1f7cdd93506db77f43d1cf9b55e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edce91e228a22e221a2b418caa3dc6cfb4a1f7cdd93506db77f43d1cf9b55e8b->enter($__internal_edce91e228a22e221a2b418caa3dc6cfb4a1f7cdd93506db77f43d1cf9b55e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        $__internal_24577d4368f9e6bc1fd74c03439b01672dacc90d75a19d355ee1d79481b8ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24577d4368f9e6bc1fd74c03439b01672dacc90d75a19d355ee1d79481b8ea05->enter($__internal_24577d4368f9e6bc1fd74c03439b01672dacc90d75a19d355ee1d79481b8ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:checkbox.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.yes_label"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_label"), "html", null, true);
            echo "
";
        }
        
        $__internal_edce91e228a22e221a2b418caa3dc6cfb4a1f7cdd93506db77f43d1cf9b55e8b->leave($__internal_edce91e228a22e221a2b418caa3dc6cfb4a1f7cdd93506db77f43d1cf9b55e8b_prof);

        
        $__internal_24577d4368f9e6bc1fd74c03439b01672dacc90d75a19d355ee1d79481b8ea05->leave($__internal_24577d4368f9e6bc1fd74c03439b01672dacc90d75a19d355ee1d79481b8ea05_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:checkbox.html.twig";
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
        return new Twig_Source("{% if attribute.value %}
    {{ 'sylius.ui.yes_label'|trans }}
{% else %}
    {{ 'sylius.ui.no_label'|trans }}
{% endif %}
", "SyliusAttributeBundle:Types:checkbox.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/checkbox.html.twig");
    }
}
