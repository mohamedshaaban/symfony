<?php

/* SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig */
class __TwigTemplate_c783b50e7e423cbb63c43b1d89e5271da7cd6875042965d88f9a7de3d504bf95 extends Twig_Template
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
        $__internal_70beafec67c671fef2653fe7ee931a7d2be60b06b4a88e130f001e12dc8b6f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70beafec67c671fef2653fe7ee931a7d2be60b06b4a88e130f001e12dc8b6f83->enter($__internal_70beafec67c671fef2653fe7ee931a7d2be60b06b4a88e130f001e12dc8b6f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig"));

        $__internal_8d86bf478330b1ba597b3c34ceacc7193683340ad35b6dd280dc6b632da32efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d86bf478330b1ba597b3c34ceacc7193683340ad35b6dd280dc6b632da32efe->enter($__internal_8d86bf478330b1ba597b3c34ceacc7193683340ad35b6dd280dc6b632da32efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index")), 2 => array("label" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
(isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()), "product", array()), "code", array()), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 6, $this->getSourceContext()); })()), "product", array()), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(twig_get_attribute($this->env, $this->getSourceContext(),         // line 7
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 7, $this->getSourceContext()); })()), "getRouteName", array(0 => "index"), "method"), array("productId" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new Twig_Error_Runtime('Variable "resource" does not exist.', 7, $this->getSourceContext()); })()), "product", array()), "id", array())))), 4 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new")));
        // line 11
        echo "
";
        // line 12
        echo $context["breadcrumb"]->macro_crumble((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 12, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_70beafec67c671fef2653fe7ee931a7d2be60b06b4a88e130f001e12dc8b6f83->leave($__internal_70beafec67c671fef2653fe7ee931a7d2be60b06b4a88e130f001e12dc8b6f83_prof);

        
        $__internal_8d86bf478330b1ba597b3c34ceacc7193683340ad35b6dd280dc6b632da32efe->leave($__internal_8d86bf478330b1ba597b3c34ceacc7193683340ad35b6dd280dc6b632da32efe_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  34 => 11,  32 => 7,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.products'|trans, url: path('sylius_admin_product_index') },
        { label: resource.product.code, url: path('sylius_admin_product_update', {'id': resource.product.id}) },
        { label: 'sylius.ui.variants'|trans, url: path(configuration.getRouteName('index'), {'productId': resource.product.id}) },
        { label: 'sylius.ui.new'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:ProductVariant/Create:_breadcrumb.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Create/_breadcrumb.html.twig");
    }
}
