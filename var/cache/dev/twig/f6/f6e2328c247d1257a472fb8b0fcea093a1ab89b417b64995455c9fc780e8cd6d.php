<?php

/* SyliusAdminBundle:Order/Grid/Field:number.html.twig */
class __TwigTemplate_280765bf9fbe2ba68b76b67f79ec9034674d6f57b2ef94666045ec4af4cbb75d extends Twig_Template
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
        $__internal_ef80dfc27a7655d0c9f8affee5c584eea60859ae8ff25bfa3d5dc87ccc343b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef80dfc27a7655d0c9f8affee5c584eea60859ae8ff25bfa3d5dc87ccc343b74->enter($__internal_ef80dfc27a7655d0c9f8affee5c584eea60859ae8ff25bfa3d5dc87ccc343b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:number.html.twig"));

        $__internal_6398450007190ecad114ed1d4cb2a7fb76be15d2bd4eb3890406c2f845bbe8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6398450007190ecad114ed1d4cb2a7fb76be15d2bd4eb3890406c2f845bbe8fe->enter($__internal_6398450007190ecad114ed1d4cb2a7fb76be15d2bd4eb3890406c2f845bbe8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:number.html.twig"));

        // line 1
        echo "#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo "
";
        
        $__internal_ef80dfc27a7655d0c9f8affee5c584eea60859ae8ff25bfa3d5dc87ccc343b74->leave($__internal_ef80dfc27a7655d0c9f8affee5c584eea60859ae8ff25bfa3d5dc87ccc343b74_prof);

        
        $__internal_6398450007190ecad114ed1d4cb2a7fb76be15d2bd4eb3890406c2f845bbe8fe->leave($__internal_6398450007190ecad114ed1d4cb2a7fb76be15d2bd4eb3890406c2f845bbe8fe_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:number.html.twig";
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
        return new Twig_Source("#{{ data.number }}
", "SyliusAdminBundle:Order/Grid/Field:number.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Grid/Field/number.html.twig");
    }
}
