<?php

/* SyliusAttributeBundle:Types:textarea.html.twig */
class __TwigTemplate_e4810584f188f1ec024decd29cecaf2265bab71daf385bc301a5a3ce119eab49 extends Twig_Template
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
        $__internal_9e2ccd8682c565b86273a0f6c335c77c948b8d43b4e4131f0672739cbdcdb808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2ccd8682c565b86273a0f6c335c77c948b8d43b4e4131f0672739cbdcdb808->enter($__internal_9e2ccd8682c565b86273a0f6c335c77c948b8d43b4e4131f0672739cbdcdb808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:textarea.html.twig"));

        $__internal_fca7a5e6060d7bebb061d38ccbf36f90a6dce7c7c37667c98a7efa786e9f1f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca7a5e6060d7bebb061d38ccbf36f90a6dce7c7c37667c98a7efa786e9f1f0f->enter($__internal_fca7a5e6060d7bebb061d38ccbf36f90a6dce7c7c37667c98a7efa786e9f1f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:textarea.html.twig"));

        // line 1
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new Twig_Error_Runtime('Variable "attribute" does not exist.', 1, $this->getSourceContext()); })()), "value", array()), "html", null, true));
        echo "
";
        
        $__internal_9e2ccd8682c565b86273a0f6c335c77c948b8d43b4e4131f0672739cbdcdb808->leave($__internal_9e2ccd8682c565b86273a0f6c335c77c948b8d43b4e4131f0672739cbdcdb808_prof);

        
        $__internal_fca7a5e6060d7bebb061d38ccbf36f90a6dce7c7c37667c98a7efa786e9f1f0f->leave($__internal_fca7a5e6060d7bebb061d38ccbf36f90a6dce7c7c37667c98a7efa786e9f1f0f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:textarea.html.twig";
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
        return new Twig_Source("{{ attribute.value|nl2br }}
", "SyliusAttributeBundle:Types:textarea.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AttributeBundle/Resources/views/Types/textarea.html.twig");
    }
}
