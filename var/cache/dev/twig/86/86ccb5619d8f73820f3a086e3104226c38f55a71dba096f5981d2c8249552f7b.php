<?php

/* SyliusAdminBundle:ProductVariant/Index:_header.html.twig */
class __TwigTemplate_3f5b88b70431c1059069f2930f124dd15985e4eaf43a64e831ebbc2b3650294d extends Twig_Template
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
        $__internal_7dcd7ee35bc0f1d2ebbbdf53877325a7a4d1bbb1bd3adf46c0e733c3cb3ef47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcd7ee35bc0f1d2ebbbdf53877325a7a4d1bbb1bd3adf46c0e733c3cb3ef47a->enter($__internal_7dcd7ee35bc0f1d2ebbbdf53877325a7a4d1bbb1bd3adf46c0e733c3cb3ef47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig"));

        $__internal_42a3c0414d1528c9d1fb85702b5c7e223e805c626e6cef34203633eac5398fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a3c0414d1528c9d1fb85702b5c7e223e805c626e6cef34203633eac5398fce->enter($__internal_42a3c0414d1528c9d1fb85702b5c7e223e805c626e6cef34203633eac5398fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_product_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "productId"), "method"), "template" => "@SyliusAdmin/ProductVariant/Index/_productHeader.html.twig", "vars" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_7dcd7ee35bc0f1d2ebbbdf53877325a7a4d1bbb1bd3adf46c0e733c3cb3ef47a->leave($__internal_7dcd7ee35bc0f1d2ebbbdf53877325a7a4d1bbb1bd3adf46c0e733c3cb3ef47a_prof);

        
        $__internal_42a3c0414d1528c9d1fb85702b5c7e223e805c626e6cef34203633eac5398fce->leave($__internal_42a3c0414d1528c9d1fb85702b5c7e223e805c626e6cef34203633eac5398fce_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Index:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  26 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_admin_partial_product_show', {
    'id': app.request.attributes.get('productId'),
    'template': '@SyliusAdmin/ProductVariant/Index/_productHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:ProductVariant/Index:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Index/_header.html.twig");
    }
}
