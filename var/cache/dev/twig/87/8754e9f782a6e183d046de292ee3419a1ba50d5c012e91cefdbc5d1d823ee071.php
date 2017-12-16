<?php

/* SyliusAttributeBundle:Types:percent.html.twig */
class __TwigTemplate_251e0ef157c215eaa5a02dd991d86a3ae4e3a966e533759dd7717fea5e687cd6 extends Twig_Template
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
        $__internal_9ba74927eb62a6a3886b5e60d7b66a742354a6640d973323db2e8c94e4fe60eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba74927eb62a6a3886b5e60d7b66a742354a6640d973323db2e8c94e4fe60eb->enter($__internal_9ba74927eb62a6a3886b5e60d7b66a742354a6640d973323db2e8c94e4fe60eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:percent.html.twig"));

        $__internal_ca4f88ddc37b689b9f13d2e27036629ee62d4e3856d0ca7e8327717446a79043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4f88ddc37b689b9f13d2e27036629ee62d4e3856d0ca7e8327717446a79043->enter($__internal_ca4f88ddc37b689b9f13d2e27036629ee62d4e3856d0ca7e8327717446a79043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:percent.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Sylius\Bundle\UiBundle\Twig\PercentageExtension')->getPercentage(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array())), "html", null, true);
        echo "
";
        
        $__internal_9ba74927eb62a6a3886b5e60d7b66a742354a6640d973323db2e8c94e4fe60eb->leave($__internal_9ba74927eb62a6a3886b5e60d7b66a742354a6640d973323db2e8c94e4fe60eb_prof);

        
        $__internal_ca4f88ddc37b689b9f13d2e27036629ee62d4e3856d0ca7e8327717446a79043->leave($__internal_ca4f88ddc37b689b9f13d2e27036629ee62d4e3856d0ca7e8327717446a79043_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:percent.html.twig";
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
        return new Twig_Source("{{ attribute.value|sylius_percentage }}
", "SyliusAttributeBundle:Types:percent.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/percent.html.twig");
    }
}
