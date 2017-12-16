<?php

/* SyliusAttributeBundle:Types:default.html.twig */
class __TwigTemplate_4a5a57b960d901bd797cc15e60bb77f6368b5aa9e65223dea609661eb8321eb0 extends Twig_Template
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
        $__internal_9b589a117335b9b59d873d7f6cdddc42a74b600c4b3e07666dafe69e1a2b08bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b589a117335b9b59d873d7f6cdddc42a74b600c4b3e07666dafe69e1a2b08bc->enter($__internal_9b589a117335b9b59d873d7f6cdddc42a74b600c4b3e07666dafe69e1a2b08bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        $__internal_31cd80c800773ee4aecb4f0c87c91a5377bdc372abb4668fcf03d6f58fec0b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31cd80c800773ee4aecb4f0c87c91a5377bdc372abb4668fcf03d6f58fec0b77->enter($__internal_31cd80c800773ee4aecb4f0c87c91a5377bdc372abb4668fcf03d6f58fec0b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array()), "html", null, true);
        echo "
";
        
        $__internal_9b589a117335b9b59d873d7f6cdddc42a74b600c4b3e07666dafe69e1a2b08bc->leave($__internal_9b589a117335b9b59d873d7f6cdddc42a74b600c4b3e07666dafe69e1a2b08bc_prof);

        
        $__internal_31cd80c800773ee4aecb4f0c87c91a5377bdc372abb4668fcf03d6f58fec0b77->leave($__internal_31cd80c800773ee4aecb4f0c87c91a5377bdc372abb4668fcf03d6f58fec0b77_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:default.html.twig";
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
        return new Twig_Source("{{ attribute.value }}
", "SyliusAttributeBundle:Types:default.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/default.html.twig");
    }
}
