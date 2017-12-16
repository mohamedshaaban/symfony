<?php

/* SyliusAdminBundle:Product/Grid/Field:mainTaxon.html.twig */
class __TwigTemplate_18b8fd065e7b51fe9b16e7d740b43de6e458dde25204c70da0f621c0189f81d9 extends Twig_Template
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
        $__internal_a5136396f269073bbe027adc4b00ff1f373afd05a2c348a910971677c318289d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5136396f269073bbe027adc4b00ff1f373afd05a2c348a910971677c318289d->enter($__internal_a5136396f269073bbe027adc4b00ff1f373afd05a2c348a910971677c318289d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:mainTaxon.html.twig"));

        $__internal_22b3f4866d393470d8d54ab02b82a1066d1a4bd25726e6657c71e7a32a6ba647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b3f4866d393470d8d54ab02b82a1066d1a4bd25726e6657c71e7a32a6ba647->enter($__internal_22b3f4866d393470d8d54ab02b82a1066d1a4bd25726e6657c71e7a32a6ba647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:mainTaxon.html.twig"));

        // line 1
        if ( !(null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        }
        
        $__internal_a5136396f269073bbe027adc4b00ff1f373afd05a2c348a910971677c318289d->leave($__internal_a5136396f269073bbe027adc4b00ff1f373afd05a2c348a910971677c318289d_prof);

        
        $__internal_22b3f4866d393470d8d54ab02b82a1066d1a4bd25726e6657c71e7a32a6ba647->leave($__internal_22b3f4866d393470d8d54ab02b82a1066d1a4bd25726e6657c71e7a32a6ba647_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Field:mainTaxon.html.twig";
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
        return new Twig_Source("{% if data is not null %}{{ data.name }}{% endif %}
", "SyliusAdminBundle:Product/Grid/Field:mainTaxon.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Field/mainTaxon.html.twig");
    }
}
