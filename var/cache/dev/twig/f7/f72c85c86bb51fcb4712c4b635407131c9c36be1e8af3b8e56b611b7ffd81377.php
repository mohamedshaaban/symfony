<?php

/* SyliusAdminBundle:Product/Grid/Field:position.html.twig */
class __TwigTemplate_2a8267aeca2bbaeb6bd2282e8103a99faddd9e02e044ce0a18d778296072706f extends Twig_Template
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
        $__internal_4f5350d220774731bf794c583f46e7ee5d63d2fd850918984e47717510ed6c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5350d220774731bf794c583f46e7ee5d63d2fd850918984e47717510ed6c03->enter($__internal_4f5350d220774731bf794c583f46e7ee5d63d2fd850918984e47717510ed6c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:position.html.twig"));

        $__internal_dadf792c02f1cf33b99d5cae701d3f8e551bfdb6acba0a23f5fca5fbfc8713bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadf792c02f1cf33b99d5cae701d3f8e551bfdb6acba0a23f5fca5fbfc8713bf->enter($__internal_dadf792c02f1cf33b99d5cae701d3f8e551bfdb6acba0a23f5fca5fbfc8713bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:position.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/_position.html.twig", "SyliusAdminBundle:Product/Grid/Field:position.html.twig", 1)->display(array_merge($context, array("product" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "taxonId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "taxonId"), "method"))));
        
        $__internal_4f5350d220774731bf794c583f46e7ee5d63d2fd850918984e47717510ed6c03->leave($__internal_4f5350d220774731bf794c583f46e7ee5d63d2fd850918984e47717510ed6c03_prof);

        
        $__internal_dadf792c02f1cf33b99d5cae701d3f8e551bfdb6acba0a23f5fca5fbfc8713bf->leave($__internal_dadf792c02f1cf33b99d5cae701d3f8e551bfdb6acba0a23f5fca5fbfc8713bf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Field:position.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Product/_position.html.twig' with {'product': data, 'taxonId': app.request.get('taxonId')} %}
", "SyliusAdminBundle:Product/Grid/Field:position.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Field/position.html.twig");
    }
}
